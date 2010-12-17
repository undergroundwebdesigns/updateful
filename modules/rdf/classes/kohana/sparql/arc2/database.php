<?php defined('SYSPATH') or die('No direct access allowed.');
/**
 * Lowest level implementation of communication with the Arc2 RDF libraries.
 *
 * @package    Kohana/Sparql/Arc2
 * @author     Alex Willemsma
 * @copyright  (c) 2010 Updateful
 * @license    http://kohanaphp.com/license.html
 */

// Include ARC2 Vendor libraries:
include_once(MODPATH.'rdf'.DIRECTORY_SEPARATOR.'vendor'.DIRECTORY_SEPARATOR.'arc2'.DIRECTORY_SEPARATOR.'ARC2.php');

class Kohana_Sparql_Arc2_Database extends Kohana_Sparql_Database {
	
	private $arc = null;
	
	public function __construct($store_name)
	{
		// Load configuration options:
		$config = Kohana::config('rdform');
		$db_connection = ($config['mysql_connection']) ? $config['mysql_connection'] : 'default' ;
		$rdf_connection = ($config['rdf_connection']) ? $config['rdf_connection'] : 'default' ;

		if (!isset($config['mysql_connections'][$db_connection]))
		{
			throw new Kohana_Sparql_Exception('Mysql connection information not found for connection '.$db_connection);
		}
		
		if (!isset($config['rdf_connections'][$rdf_connection]))
		{
			throw new Kohana_Sparql_Exception('RDF connection information not found for connection '.$rdf_connection);
		}
		
		$arc_config = array_merge($config['mysql_connections'][$db_connection], $config['rdf_connections'][$rdf_connection]);
		
		// Instantiate an ARC object:
		$this->arc = ARC2::getStore($arc_config);
		
		// Set up the new ARC object if not done yet:
		if (!$this->arc->isSetUp())
		{
			$this->arc->setUp();
		}
	}
	
	public function load()
	{
		
	}
	
	public function insert()
	{
		
	}
	
	public function delete()
	{
		
	}
}