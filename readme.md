## [Google structured data](https://developers.google.com/search/docs/guides/search-gallery)
## [Schema.org](https://schema.org)

This was inspired by this question and answer: [Schema.org + Laravel = way too complicated?
](https://stackoverflow.com/questions/33193525/schema-org-laravel-way-too-complicated)

Start this app.

## Schema to [Laravel Migrations](https://laravel.com/docs/master/migrations)

Go to

```
http://schema-org.localhost/schema
```

Import Schema 'database/schema/schema.txt'. Generate Database Migrations and extract them to 'database/migrations/'.

## [Laravel Migrations](https://laravel.com/docs/master/migrations) to [SQL](https://en.wikipedia.org/wiki/SQL)

```
php artisan migrate
```

## [Eloquent Models](https://laravel.com/docs/master/eloquent) generation from [SQL](https://en.wikipedia.org/wiki/SQL)

```
php artisan code:models
```

## Client

Import data and see the output

```
mysql -u <user> -p <dbname> < database/data/schema-org.sql
chrome view-source:http://schema-org.localhost/organization/1/schema_org
chrome view-source:http://schema-org.localhost/organization/2/schema_org
chrome view-source:http://schema-org.localhost/organization/1/founders/Koen/schema_org
chrome view-source:http://schema-org.localhost/organization/1/employees/Koen/schema_org
chrome view-source:http://schema-org.localhost/organization/2/employees/Koen/schema_org
```

The output can be validated at [Google Structured Data Testing Tool](https://search.google.com/structured-data/testing-tool)

## [Schema.org](https://schema.org) [Types](https://schema.org/docs/full.html) used

- [Thing](https://schema.org/Thing)
    - [Organization](https://schema.org/Organization)
    - [Person](https://schema.org/Person)
    - Intangible
        - [Role](https://schema.org/Role)
- Data Types
    - Text
        - [URL](https://schema.org/URL)

## [Entity-Relationship Diagram](https://en.wikipedia.org/wiki/Entity–relationship_model)

![Schema.org Entity-Relationship Diagram](./docs/erd.png?raw=true "Schema.org Entity-Relationship Diagram")

<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>