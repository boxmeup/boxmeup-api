<?php

use Silex\Application;
use Silex\Provider\RoutingServiceProvider;
use Silex\Provider\ServiceControllerServiceProvider;

$app = new Application();
$app->register(new RoutingServiceProvider());
$app->register(new ServiceControllerServiceProvider());

return $app;
