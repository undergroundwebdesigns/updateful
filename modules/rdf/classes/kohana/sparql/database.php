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
	private $store = null;
	
	private $query = null;
	private $where = array();
	private $order_by = array();
	
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
	
	abstract private function __construct($store_name);
	
	public function find($subject)
	{
		$query = $this->subject.$this->_complile_where().$this->_compile_order_by();
		return $this->query();
	}
	
	public function insert($subject, array $data)
	{
		$subject = $this->rdf_url_format($subject);
		
		$query = 'INSERT INTO <http://'.$_SERVER['SERVER_NAME'].$this->store_name.' {'."\n";
		foreach ($data as $key => $val)
		{
			$query .= $subject.' '.$this->rdf_url_format($key).' '.$this->rdf_val_format($val);
		}
		$query .= ' .';
		
		return $this->query();
	}
	
	public function delete($subject)
	{
		if ($this->where)
		{
			$query = 'DELETE'."\n";
			foreach ($this->where as $field => $val)
			{
				$query .= 
			}
		}
	}
	
	abstract public function query();
	
	public function subject()
	{
		
	}
	
	public function where($field, $val)
	{
		$this->where[$field] = $val;
	}
	
	public function order_by($field, $asc = 'ASC')
	{
		if ($asc != 'ASC' AND $asc != 'DESC')
			throw new Kohana_Sparql_Exception('invalid order by. Can only order ASC or DESC, '.$asc.' given.');
			
		$this->order_by_asc = $asc;
		$this->order_by = $field;
	}
	
	protected function _complile_where()
	{
		if (!$this->where)
			return '';
			
		$output = 'WHERE {'."\n";
		foreach ($this->where as $tripple)
		{
			$output .= $tripple['s'].' '.$tripple['p'].' '.$tripple['o'].' .'."\n";
		}
		$output .= '}'."\n";
		
		return $output;
	}
	
	protected function _complie_order_by()
	{
		if (!$this->order_by)
			return '';
			
		$output = 'ORDER BY '.$this->order_by_asc.'('.$this->order_by.')'."\n";
		return $output;
	}
}