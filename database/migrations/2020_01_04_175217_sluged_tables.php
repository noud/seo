<?php

use SEO\AddSlugToTables;

class SlugedTables extends AddSlugToTables
{
    protected $models = [
        'BlogPosting',
        'JobPosting',
    ];
}
