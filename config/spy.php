<?php

return array(

	/*
	 |--------------------------------------------------------------------------
	 | Directory where generated files will be written
	 |--------------------------------------------------------------------------
	 |
	 | SECURITY: For obvious reasons, setting this option to any path within your
	 | public_path() directory will be a really bad idea.
	 |
	 | Default: app_path('database/schema')
	 |
	 */
	'output' => base_path('public/schema-spy'),

	/*
	 |--------------------------------------------------------------------------
	 | Base command to run schemaSpy.jar on your system
	 |--------------------------------------------------------------------------
	 |
	 | Do not provide SchemaSpy parameters here, instead use the 'parameters' array below!
	 |
	 | Default: java -jar schemaSpy.jar
	 |
	 */
	'command' => 'java -jar /usr/share/java/schemaSpy_5.0.0.jar',

	/*
	|--------------------------------------------------------------------------
	| Extra parameters to pass to the command
	|--------------------------------------------------------------------------
	|
	| Database connection settings will be read form Laravel's database config
	| file but they can be overridden here.
	|
	| Full list of possible parameters: http://schemaspy.sourceforge.net/
	|
	*/
	'parameters' => [
		'-t'  => 'mysql',
		'-dp' => '/usr/share/java/mysql-connector-java-8.0.17.jar', // download from http://dev.mysql.com/downloads/connector/j/
		'-hq' => null,
	],
);
