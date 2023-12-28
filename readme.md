# Wordpress via Lando

This was a test installing Wordpress with a LAMP stack via Lando.
https://docs.lando.dev/

## Run It

Start: `lando start`
Env Info : `lando info`

## MySQL

### DB Access

To setup a connection to the container via client (TablePlus/SequelPro), use `lando info` and retrieve the "external_connection" and "creds" configs.

To access the DB container via CLI: `lando mysql`

### Dump DB

Dump an SQL file to the current directory with specific file name:
`lando db-export dump.sql`

Dump an SQL file to current directory named <dbname.timestamp.sql>
`lando db-export`

### Import DB

Import a file from current directory:
`lando db-import dump.sql`

Note: This will drop all existing tables first.

Import without wiping the existing data first:
`lando db-import --no-wipe dump.sql`

# New Environment Setup and Wordpress Installation Steps

## Create a LAMP ENV with Wordpress

`lando init --source cwd --recipe lamp --name lando-wordpress --webroot public --full`

### Properties Explained

- source - current working directory
- recipe - lamp stack (ist of available recipies here: https://docs.lando.dev/core/v3/recipes.html)
- name - name of the app, used for docker container
- webroot - set to a directory named public
- full - dump lower level lando file

## Start/Build Env

`lando start`

## Get Hostnames, Mysql Credentials & Port Number

`lando info`

## Install Wordpress

`cd public`
`wp core download`

## Generate wp-config.php and Populate DB Creds

`wp core config --dbhost=database --dbname=lamp --dbuser=lamp --dbpass=lamp`

Get The Host and Other Configs Via `lando info` "internal_connection"

## Set Debug Options

`wp config set WP_DEBUG true --raw &&
wp config set WP_DEBUG_LOG true --raw &&
wp config set WP_DEBUG_DISPLAY true --raw`

## Remove Unneccessary Files

`rm license.txt readme.html wp-config-sample.php`

## Final Install

`wp core install --url=lando-wordpress.lndo.site --title="Lando Wordpress" --admin_user=landoadmin --admin_password=landopassword --admin_email=name@domain.com`

Get Url Via `lando info`
