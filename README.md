# Mediax API

[![Build Status](https://api.travis-ci.org/lecaoquochung/mediax-api.svg)](https://travis-ci.org/lecaoquochung/mediax-api)
[![License](#)](#)

## Installation

1. Download [Composer](http://getcomposer.org/doc/00-intro.md) or update `composer self-update`.
2. Run `php composer.phar create-project --prefer-dist cakephp/app [app_name]`.

If Composer is installed globally, run
```bash
composer create-project --prefer-dist cakephp/app [app_name]
```

## Configuration

Read and edit `config/app.php` and setup the 'Datasources' and any other
configuration relevant for your application.

## Migration

1. New tables (/config/Migrations/[filename])
CreateSeotrackings keyword_id:int type:tinyint name:string rank:string date:date created modified
CreateLogSeotrackings seotracking_id:int rank:string date:date change:string detail:text created modified
CreateSeotrackingCategories name:string description:text created modified

2. Migrate to db
bin/cake bake migrations migrate



