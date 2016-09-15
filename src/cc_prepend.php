<?php
require_once __DIR__ . '/../vendor/autoload.php';

$filter = new \SebastianBergmann\CodeCoverage\Filter;
$filter->addFileToWhitelist( __DIR__ . '/include/myclass.php');

$driver = new \SebastianBergmann\CodeCoverage\Driver\Xdebug();

$coverage = new \SebastianBergmann\CodeCoverage\CodeCoverage($driver, $filter);
$coverage->start('site');
