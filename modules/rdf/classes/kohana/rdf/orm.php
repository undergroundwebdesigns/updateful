<?php defined('SYSPATH') or die('No direct access allowed.');
/**
 * Provides an ORM interface for working with RDF data.
 *
 * @package    Kohana/RDF
 * @author     Alex Willemsma
 * @copyright  (c) 2010 Updateful
 * @license    http://kohanaphp.com/license.html
 */

class Kohana_RDF_ORM
{
	public $validation_errors = array();
	
	protected $saved = false;
	protected $loaded = false;

	protected $model_name = null;
	protected $db = null;
	
	protected $object = array();
	
	protected $namespaces = array();
	protected $subject = null;
	
	protected $validation_rules = array();
	
	private $readonly_properties = array('saved', 'loaded', 'store_name');
	
	public static function factory($model_name)
	{
		$model_class = 'Model_'.ucfirst($model_name);
		if (!class_exists($model_class))
		{
			throw new Kohana_Rdf_Exception('Could not create instance of class '.$model_class);
		}
		
		return new $model_class;
	}
	
	public function __construct()
	{
		// Ensure that $store_name is set and lowercase:
		if (!$this->model_name)
		{
			$this->model_name = str_replace('Model_', '', get_class($this));
		}
		$this->model_name = strtolower($this->model_name);
		
		$this->_initialize_db();
	}
	
	protected function _initialize_db()
	{
		// Don't instantiate twice:
		if ($this->db)
			return true;
			
		$this->db = Kohana_Sparql_Database::factory($this->model_name);
	}
	
	public function __set($key, $val)
	{
		$object[$key] = $val;
	}
	
	public function __get($key)
	{
		if (in_array($key, $this->readonly_properties))
		{
			return $this->$key;
		}
		
		if (isset($object[$key]))
		{
			return $object[$key];
		}
		
		return null;
	}
	
	public function load_from_array(array $data)
	{
		foreach ($data as $key => $val)
		{
			$this->$key = $val;
		}
	}
	
	public function save()
	{
		if (!$this->object['created_at'])
		{
			$this->object['created_at'] = time();
		}
		
		$this->object['updated_at'] = time();
		
		if ($this->validate())
		{
			$this->db->save($this->object);
		}
	}
	
	public function validate()
	{
		return true;
	}
	
	public function find()
	{
		
	}
	
	public function find_all()
	{
		
	}
	
	public function where($field, $val)
	{
		$this->db->where($field, $val);
	}
	
	public function order_by($field, $asc = 'ASC')
	{
		$this->db->order_by($field, $asc);
	}
}