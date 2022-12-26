<?php
require_once __DIR__ . '/../vendor/autoload.php'; // Autoload files using Composer autoload

use Saif\ProtoModule\Controllers\Testplugin;

$x = new Saif\ProtoModule\Controllers\Testplugin;
var_dump($x->index());
