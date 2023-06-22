<?php

$app = [];


$app['config'] = require 'config.php';

require 'core/router.php';

require 'core/request.php';

require 'core/connection.php';

require 'core/querybuilder.php';


$app['database'] = new querybuilder(

	connection::make($app['config']['database'])
);