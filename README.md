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
https://drive.google.com/drive/folders/0B1aEVF30LNbRMGNWdThENE8zUlU
create_seotrackings keyword_id:int seotracking_category_id:int title:string description:text rank:string date:date created modified
CreateLogSeotrackings seotracking_id:int title:string description:text rank:string date:date created modified
CreateSeotrackingCategories name:string parent:int created modified

2. Migrate to db
bin/cake bake migration [params]
bin/cake migrations migrate