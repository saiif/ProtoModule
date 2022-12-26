<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();
 

$routes->get('/test', '\Saif\ProtoModule\Controllers\Testplugin::index');
 