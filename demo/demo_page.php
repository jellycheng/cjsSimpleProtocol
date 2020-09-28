<?php
require_once __DIR__ . '/common.php';

$limit1 = \CjsProtocol\PageStandard::getInstance()->getLimit();
var_export($limit1);
echo PHP_EOL;


$limit2 = \CjsProtocol\PageStandard::getInstance()->setPage(5)->setPageSize(15)->getLimit();
var_export($limit2);
echo PHP_EOL;

echo \CjsProtocol\PageStandard::getInstance()->setPage(3)->getOffset() . PHP_EOL;
