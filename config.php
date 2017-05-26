<?php
require 'enviroment.php';

global $config;
$config = array();

if (ENVIROMENT == 'development'){
	$config['dbname'] = NULL;
	$config['host'] = NULL;
	$config['dbuser'] = NULL;
	$config['dbpass'] = NULL;
}

?>