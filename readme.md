# [Search engine optimization (SEO)](https://en.wikipedia.org/wiki/Search_engine_optimization)

conform Google Search and Schema.org in Laravel

![SEO](./docs/seo.png?raw=true "SEO")

This app* gives formatted SEO data for searchengines that use
- [Google Search](https://developers.google.com/search) [Structured data](https://developers.google.com/search/docs/data-types/article)
- [Schema.org](https://schema.org) [Types](https://schema.org/docs/full.html)

For instance this is what it does to your date on [Google Search](https://developers.google.com/search): [Explore the search gallery](https://developers.google.com/search/docs/guides/search-gallery)

*This app was inspired by this question and answer: [Schema.org + Laravel = way too complicated?
](https://stackoverflow.com/questions/33193525/schema-org-laravel-way-too-complicated)

## Start app

## Import data

```
mysql -u <user> -p <dbname> < database/data/seo.sql
```

## Client

See the output

```chrome view-source: http://seo.localhost/```
- [Article](https://developers.google.com/search/docs/data-types/article)
    - [blog_posting/hackathon-tilburg-groot-succes/schema_org](https://raw.githubusercontent.com/noud/seo/master/database/output/blog_posting/hackathon-tilburg-groot-succes.json)
    - [blog_posting/duodeka-official-meteor-partner/schema_org](https://raw.githubusercontent.com/noud/seo/master/database/output/blog_posting/duodeka-official-meteor-partner.json)
- [Breadcrumb](https://developers.google.com/search/docs/data-types/breadcrumb)
    - [breadcrumb/3/schema_org](https://raw.githubusercontent.com/noud/seo/master/database/output/duodeka.breadcrumb.3.json)
- [Carousel](https://developers.google.com/search/docs/data-types/carousel)
    - [carousel/1/schema_org](https://raw.githubusercontent.com/noud/seo/master/database/output/blog_posting/duodeka.carousel.blog_posting.json)
    - [carousel_summary/1/schema_org](https://raw.githubusercontent.com/noud/seo/master/database/output/blog_posting/duodeka.carousel.summary.blog_posting.json)
- [Job Posting](https://developers.google.com/search/docs/data-types/job-posting)
    - [job_posting/english-frontend-developer-in-tilburg/schema_org](https://raw.githubusercontent.com/noud/seo/master/database/output/job_posting/english-frontend-developer-in-tilburg.json)
    - [job_posting/english-full-stack-developer-in-tilburg/schema_org](https://raw.githubusercontent.com/noud/seo/master/database/output/job_posting/english-full-stack-developer-in-tilburg.json)
- [Local Business Listing](https://developers.google.com/search/docs/data-types/local-business)
    - [local_business/1/schema_org](https://raw.githubusercontent.com/noud/seo/master/database/output/duodeka.local_business.json)
    - organization/2/schema_org
- [Sitelinks Searchbox](https://developers.google.com/search/docs/data-types/sitelinks-searchbox)
    - [web_site/1/schema_org](https://raw.githubusercontent.com/noud/seo/master/database/output/duodeka.website.json)

- [Organization](https://schema.org/Organization)
    - [organization/1/schema_org](https://raw.githubusercontent.com/noud/seo/master/database/output/duodeka.organization.json)
    - organization/2/schema_org
- [Person](https://schema.org/Person)
    - organization/1/founders/Koen/schema_org
    - organization/1/employees/Koen/schema_org
    - organization/2/employees/Koen/schema_org
- [PostalAddress](https://schema.org/PostalAddress)
    - organization/1/postal_address/schema_org

The output can be validated at [Google Search](https://developers.google.com/search) [Structured data](https://developers.google.com/search/docs/data-types/article) [Testing Tool](https://search.google.com/structured-data/testing-tool)

## Code generation

### [SQL](https://en.wikipedia.org/wiki/SQL) to [Entity-Relationship Diagram](https://en.wikipedia.org/wiki/Entity–relationship_model)

```
chrome view-source:http://seo.localhost/schema-inspector/schema
```

### [Entity-Relationship Diagram](https://en.wikipedia.org/wiki/Entity–relationship_model) to [Laravel Migrations](https://laravel.com/docs/master/migrations)

```
chrome view-source:http://seo.localhost/schema
```

Import Schema 'database/schema/schema.txt'. Generate Database Migrations and extract them to 'database/migrations/'.

### [Laravel Migrations](https://laravel.com/docs/master/migrations) to [SQL](https://en.wikipedia.org/wiki/SQL)

```
php artisan migrate
```

### [SQL](https://en.wikipedia.org/wiki/SQL) to [Eloquent Models](https://laravel.com/docs/master/eloquent)

```
php artisan code:models
```

## Structured data and Types used

### [Google Search](https://developers.google.com/search) [Structured data](https://developers.google.com/search/docs/data-types/article)

- [Sitelinks Searchbox](https://developers.google.com/search/docs/data-types/sitelinks-searchbox)

### [Google Search](https://developers.google.com/search) [Structured data](https://developers.google.com/search/docs/data-types/article) conform [Schema.org](https://schema.org)

- [Article](https://developers.google.com/search/docs/data-types/article) can be
    - [Article](https://schema.org/Article)
    - [NewsArticle](https://schema.org/NewsArticle)
    - [BlogPosting](https://schema.org/BlogPosting)
- [Breadcrumb](https://developers.google.com/search/docs/data-types/breadcrumb) consists of
    - [BreadcrumbList](https://schema.org/BreadcrumbList)
    - [ListItem](https://schema.org/ListItem)
- [Carousel](https://developers.google.com/search/docs/data-types/carousel) consists of
    - [ItemList](https://schema.org/ItemList)
    - [ListItem](https://schema.org/ListItem)
- [Job Posting](https://developers.google.com/search/docs/data-types/job-posting) is
    - [JobPosting](https://schema.org/JobPosting)
- [Local Business Listing](https://developers.google.com/search/docs/data-types/local-business) is
    - [LocalBusiness](https://schema.org/LocalBusiness)

### [Schema.org](https://schema.org) [Types](https://schema.org/docs/full.html)

- [Thing](https://schema.org/Thing)
    - Action
        - [SearchAction](https://schema.org/SearchAction)
    - [CreativeWork](https://schema.org/CreativeWork)
        - [Article](https://schema.org/Article)
            - SocialMediaPosting
                - [BlogPosting](https://schema.org/BlogPosting)
        - [WebSite](https://schema.org/WebSite)
    - [Organization](https://schema.org/Organization)
        - [LocalBusiness](https://schema.org/LocalBusiness)
    - [Person](https://schema.org/Person)
    - [Place](https://schema.org/Place)
        - [LocalBusiness](https://schema.org/LocalBusiness)
    - Intangible
        - [ItemList](http://schema.org/ItemList)
            - [BreadcrumbList](https://schema.org/BreadcrumbList)
        - [JobPosting](https://schema.org/JobPosting)
        - [ListItem](http://schema.org/ListItem)
        - [PropertyValueSpecification](https://schema.org/PropertyValueSpecification)
        - [Role](https://schema.org/Role)
        - StructuredValue
            - [ContactPoint](https://schema.org/ContactPoint)
                - [PostalAddress](https://schema.org/PostalAddress)
            - [GeoCoordinates](https://schema.org/GeoCoordinates)
            - [MonetaryAmount](https://schema.org/MonetaryAmount)
            - [OpeningHoursSpecification](https://schema.org/OpeningHoursSpecification)
            - [PropertyValue](https://schema.org/PropertyValue)
            - [QuantitativeValue](https://schema.org/QuantitativeValue)

## [Entity-Relationship Diagram](https://en.wikipedia.org/wiki/Entity–relationship_model)

![Schema.org Entity-Relationship Diagram](./docs/erd.png?raw=true "Schema.org Entity-Relationship Diagram")

## Build with

# [React](https://reactjs.org/) &middot; [![GitHub license](https://img.shields.io/badge/license-MIT-blue.svg)](https://github.com/facebook/react/blob/master/LICENSE) [![npm version](https://img.shields.io/npm/v/react.svg?style=flat)](https://www.npmjs.com/package/react) [![CircleCI Status](https://circleci.com/gh/facebook/react.svg?style=shield&circle-token=:circle-token)](https://circleci.com/gh/facebook/react) [![PRs Welcome](https://img.shields.io/badge/PRs-welcome-brightgreen.svg)](https://reactjs.org/docs/how-to-contribute.html#your-first-pull-request)

<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>