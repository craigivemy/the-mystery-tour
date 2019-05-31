<?php
ini_set('display_errors', '1');
require __DIR__ . '/vendor/autoload.php';
/*
|---------------------------------------------------------------------
| Instantiate dotenv
|---------------------------------------------------------------------
 */
$dotenv = Dotenv\Dotenv::create(__DIR__);
$dotenv->load();

define('SITE_URL', getenv('SITE_URL'));
