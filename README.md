# Site Build #

Site Build allows you to build a site on any platform/framework that has been configured from a single command.

## Install ##

Simply clone this repo and create a symlink in your local bin directory to the bootsb.sh file.

```
sudo ln -s /{site-build-dir}/setup.sh /usr/local/bin/{command}
```

Where `{site-build-dir}` is the path to the Site Build directory and `{command}` can be as a command of your choice, recommended use `sbuild` as it has few if any clashing services.

## Running ##

Site Build accepts three parameters, `{platform}`, `{webserver}`, `{debug}` and `{sitename}`.

```
sbuild -p {platform} -s {webserver} -d {sitename}
```

## Defaults ###

`-p` blank

`-s` apache

`-d` false

`{sitename}` (required) is always required as the last parameter.

`{platform}` (default = blank) defines the plaform to be built, current options are: blank, ghost, magento, silverstripe, wordpress

`{webserver}` (default = apache) defines the webserver that site build is configured to. Options: apache, nginx

`{debug}` (default = false) defines if a build is created from an git archive (false) or rsync (true) this allows testing of buidl settings without the need to commit changes

## Options ##

#### -p (platform) ####

```
sbuild -p {platform} {sitename}
```

This defines the plaform to be built, current options are:

* blank
* ghost
* magento
* octo
* silverstripe
* wordpress
* zf2

#### -s (webserver) ####

```
sbuild -s {webserver} {sitename}
```

This defines the webserver that is configured:

* apache
* nginx

#### -d (debug) ####

```
sbuild -d {sitename}
```

This defines if a build is created from an git archive or rsync.

If `-d` is defined performs an rsync, This removes the need to commit the changes you have made.
If `-d` is ** not ** set this performs a git archive copy. This will create a duplicate of the setup but without any repo history.
