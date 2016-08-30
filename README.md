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
