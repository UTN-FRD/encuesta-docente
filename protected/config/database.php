<?php

// This is the database connection configuration.
return array(
	//'connectionString' => 'sqlite:'.dirname(__FILE__).'/../data/22062018.db',
	// uncomment the following lines to use a MySQL database

	
	'connectionString' => 'mysql:host=127.0.0.1;dbname=limesurvey',
	'emulatePrepare' => true,
	'username' => 'encuesta',
	'password' => 'encuesta',
	'charset' => 'utf8',

/*
	'connectionString' => 'mysql:host=192.168.0.41;dbname=limesurvey',
	'emulatePrepare' => true,
	'username' => 'lsi',
	'password' => 'ls1sql',
	'charset' => 'utf8',
*/
);