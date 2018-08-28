<?php

// This is the database connection configuration.
return array(
	//'connectionString' => 'sqlite:'.dirname(__FILE__).'/../data/22062018.db',
	// uncomment the following lines to use a MySQL database
	
	'connectionString' => 'mysql:host=192.168.1.35;dbname=limesurvey',
	'emulatePrepare' => true,
	'username' => 'survey',
	'password' => '3ncu3st4',
	'charset' => 'utf8',
	
);