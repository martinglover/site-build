#!/bin/bash

# Text Colors
txtR=$(tput setaf 1)
txtG=$(tput setaf 2)
txtY=$(tput setaf 3)
txtB=$(tput setaf 4)
txtM=$(tput setaf 5)
txtC=$(tput setaf 6)
txtW=$(tput setaf 7)
txtRst=$(tput sgr0)

script=$(readlink -f $0)
setupDir=`dirname $script`
debug=false

if [ ! -f build/build.properties ]; then
    echo -e "${txtR}You must create a valid build.properties file${txtRst}\n"
    exit 1
fi

if [ "$#" -eq 0 ]
then
    echo -e "${txtR}You must provide a name for a new project${txtRst}\n"
    exit 1
fi
if [[ "$#" -gt 1 && "$1" != -* ]]
then
    echo -e "${txtR}You must provide a name as the last parameter${txtRst}\n"
    exit 1
fi

sitename=${@: -1}
platform="blank"
webserver="apache"
validPlatforms="blank|ghost|magento|octo|silverstripe|wordpress|zf2"
validWebservers="apache|nginx"

while getopts p:s:d optname; do
    case "$optname" in
        p)
            platform=$OPTARG
            ;;

        s)
            webserver=$OPTARG
            ;;

        d)
            debug=true
            ;;

        ?)
            echo "Unknown option $OPTARG"
           ;;

        :)
            echo "No argument value for option $OPTARG"
            ;;

        *)
            # Should not occur
            echo "Unknown error while processing options"
            ;;
    esac

    if [ "$sitename" = "$OPTARG" ]
    then
        echo -e "${txtR}You must provide a name for a new project${txtRst}\n"
        exit 1
    fi
done

# Change to setup directory
if [ $setupDir != pwd ]
then
    cd $setupDir
fi

# Check project name does not already exist
if [ -d ../$sitename ]
then
    echo -e "${txtR}There is an existing project called '$sitename'${txtRst}\n"
    exit 1
fi

# Check project type is valid
if ! [[ $platform =~ ^$validPlatforms$ ]]
then
    echo -e "${txtR}You must provide a valid available platform - " ${validPlatforms//[|]/,} ${txtRst} "\n"
    exit 1
fi

# Check webserver type is valid
if ! [[ $webserver =~ ^$validWebservers$ ]]
then
    echo -e "${txtR}You must provide a valid available webserver - " ${validWebservers//[|]/,} ${txtRst} "\n"
    exit 1
fi

mkdir ../$sitename

# Creating new site directory and files
if [ $debug = true ]; then
    rsync -a --exclude build.properties.tmp --exclude .git --exclude .idea --exclude .project --exclude .sublime-project ./ ../$sitename
    cd ../$sitename
else
    git archive --format tar --output ../$sitename/setup.tar master
    cd ../$sitename
    tar -xf setup.tar
    rm setup.tar
fi
# Phing build
phing -f build.xml create-project -Dsitename=$sitename -Dplatform=$platform -Dwebserver=$webserver
