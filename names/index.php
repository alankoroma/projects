<?php

// Bootstrap
require(dirname(__FILE__) . '/bootstrap.php');

/* Load vendor and project libraries */
require(dirname(__FILE__) . '/vendor/autoload.php');


$bible_name = new App\BibleName();
$bible_name->setName('Job');

var_dump($bible_name); exit;
