<?php defined('SYSPATH') or die('No direct access allowed.');
/**
 * Abstract interface for creating and running SPARQL queries.
 *
 * @package    Kohana/Sparql
 * @author     Alex Willemsma
 * @copyright  (c) 2010 Updateful
 * @license    http://kohanaphp.com/license.html
 */

abstract class Kohana_Sparql_Database
{
	public static function factory($store_name)
	{
		$rdf_store_type = ucfirst(Kohana::config('rdform.rdf_store_type'));
		if (!$rdf_store_type)
		{
			throw new Kohana_Sparql_Exception('rdf_store_type configuration option not set');
		}
		
		$class_name = 'Kohana_Sparql_'.$rdf_store_type.'_Database';
		// Try to create an instance of $class_name type:
		if (!class_exists($class_name))
		{
			throw new Kohana_Sparql_Exception('invalid rdf_store_type set in configuration options. Class '.$class_name.' does not exist.');
		}
		
		try
		{
			$instance = new $class_name($store_name);
		}
		catch (Exception $e)
		{
			throw new Kohana_Sparql_Exception('invalid rdf_store_type set in configuration options. Could not instantiate instance of class '.$class_name);
		}
		
		return $instance;
	}
	
	private function __construct($store_name)
	{
		
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