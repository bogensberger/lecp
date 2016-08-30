# LECP - Stack

## What is the LECP - Stack?

LECP is a variation of the well known LAMP stack used
for developing and publishing web apps.

LAMP consists of Linux, Apache, MySQL and PHP. Due to
it's modularity the components can easily be swapped out.

With LECP Apache is replaced with the more powerful NGINX and
MySQL is replaced with the simply scalable SQL Database
[crate](http://crate.io).

## Prerequesites

The following packages need to be installed:

```
python [>=3.0]
pcre
postgresql
```


On OSX those pacakges could be installed using homebrew:

```
brew install python3 pcre postgresql
```

For Crate also Java is required.
On OSX i recommend using [Oracle's Java](http://www.java.com/en/download/help/mac_install.xml) and [OpenJDK](http://openjdk.java.net/projects/jdk8/) on Linux Systems.

## Bootstrap and buildout

Bootstrap with python:

```
python bootstrap.py
```

Run buildout:

```
bin/buildout -N
```

## Run

To start crate run:

```
bin/crate
```

To start php run:

```
bin/php
```

To start nginx run:

```
bin/nginx
```

The nginx is listening on port 8888 and crate uses the default
port which is configured to 4200.

If you start everything you should be able to open `localhost:8888`
in your browser and see a hello world page, which shows you the
version of the current crate cluster.

## Folder structure


```
bin/crate   # Crate
bin/crash   # The crate shell
bin/php     # php
bin/nginx   # nginx, listening on port 8888
etc/
  crate/
    config/ # crate config directory
nginx/      # nginx configuration
var/
  crate/    # crate data directory
  log/
    crate/  # crate log directory
    nginx/  # nginx log directory
  www/      # webserver root
```

The webserver root `var/www/`contains an `index.php` which performs
a query to the crate database.
