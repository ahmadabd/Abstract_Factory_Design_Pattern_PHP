<?php

use App\AbstractFactoryTest;
use App\UnixWriterFactory;

require_once __DIR__.'/vendor/autoload.php';

ini_set('display_error', 1);

$unix = new UnixWriterFactory();

$absFac = new AbstractFactoryTest();
$result = $absFac->CreateCsvWriterOnUnix($unix, [1, 2, 3]);

var_dump($result);