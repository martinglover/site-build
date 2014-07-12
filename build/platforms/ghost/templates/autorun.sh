#!/bin/sh

if [ $(ps aux | grep node | grep -v grep | wc -l | tr -s "\n") -eq 0 ]
then
    export PATH=/usr/local/bin:$PATH
    export NODE_ENV=${platform.ghost.env}
    NODE_ENV=${platform.ghost.env} forever start --sourceDir ${build.site} index.js >> /var/log/nodelog.txt 2>&1
fi