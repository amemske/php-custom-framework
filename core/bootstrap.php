<?php

$app = [];

$app['$config'] = require 'config.php'; //store keys in app

require 'core/Router.php';
require 'core/Request.php';
require 'core/database/Connection.php';
require 'core/database/QueryBuilder.php';

$app['database'] = new QueryBuilder(Connection::make($app['$config']['database']));//$app['$config'] here is a variable with database as the key