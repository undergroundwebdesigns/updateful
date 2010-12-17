<?php defined('SYSPATH') or die('No direct script access.');

$config = array(
	'rdf_store_type' => 'arc2',
	
	'mysql_connections' => array(
		'default' => array(
			'db_host' => 'localhost', /* default: localhost */
			'db_name' => 'foundaround_development',
			'db_user' => 'root',
			'db_pwd' => 'root',
		),
		
		'testing' => array(
			'db_host' => 'localhost', /* default: localhost */
			'db_name' => 'rdf_data',
			'db_user' => 'root',
			'db_pwd' => 'root',
		),
		
		'production' => array(
			'db_host' => 'localhost', /* default: localhost */
			'db_name' => 'rdf_data',
			'db_user' => 'root',
			'db_pwd' => 'root',
		),
	),
	
	'rdf_connections' => array(
		'default' => array(
			/* network */
			//'proxy_host' => '192.168.1.1',
			//'proxy_port' => 8080,
			/* parsers */
			//'bnode_prefix' => 'bn',
			/* sem html extraction */
			//'sem_html_formats' => 'rdfa microformats',
		),
		
		'testing' => array(
			/* network */
			//'proxy_host' => '192.168.1.1',
			//'proxy_port' => 8080,
			/* parsers */
			//'bnode_prefix' => 'bn',
			/* sem html extraction */
			//'sem_html_formats' => 'rdfa microformats',
		),
		
		'production' => array(
			/* network */
			//'proxy_host' => '192.168.1.1',
			//'proxy_port' => 8080,
			/* parsers */
			//'bnode_prefix' => 'bn',
			/* sem html extraction */
			//'sem_html_formats' => 'rdfa microformats',
		),
	),
);

if (Kohana::$environment == Kohana::PRODUCTION)
{
	$config['mysql_connection'] = 'production';
	$config['rdf_connection'] = 'production';
}
elseif (Kohana::$environment == Kohana::TESTING)
{
	$config['mysql_connection'] = 'testing';
	$config['rdf_connection'] = 'testing';
}
else
{
	$config['mysql_connection'] = 'default';
	$config['rdf_connection'] = 'default';
}

return $config;