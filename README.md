fixmyapp
========

__WORK IN PROGRESS__ At this time this application is mainly a test of the involved technologies...

Web application to submit and vote for feature requests. 

## Requirements

* PHP 5.3+, PDO and Mysql driver for PDO
* [Composer](http://getcomposer.org)
* MySQL 5+ (or MariaDB) with InnoDB support
* Developpers will also need node.js and the following npm modules : requirejs, less

## Install

__There is no install script yet !__ Read app/setup/INSTALL.md for instructions.

## Run the application

You can easily run the application using the PHP built-in webserver by running the following command from the fixmyapp root folder :

	php -S localhost:8000

## Proposition worflow

1. Feature request/suggest submission and vote by the users
2. Choice of feature to be implemented based on the votes of the users
3. Roadmap and development progress display

## Main goals

* Create a community of users
* Empower users by giving them the power to influence the developement and evolution of an application
* Enhance transparency in the decision making about the evolution of an application

## Command line tools : To do list

* write install script
* write update script
* custom requirejs build.js
