<?php defined('SYSPATH') or die('No direct access allowed.');
/**
 * Extend the form helper class to fully support RESTful forms.
 * Adding an extra field called _request_method if the form is created
 * to have a method other than GET or POST.
 *
 * @package    Restfull Forms
 * @category   Helpers
 * @author     Alex Willemsma
 * @copyright  (c) 2010 Updateful
 * @license    http://kohanaphp.com/license
 */
class Form extends Kohana_Form {
	/**
	 * @var string String to add before any extra hidden elements created when making a form open tag.
	 */
	public static $hidden_prepend_string = "\n\t";
	
	/**
	 * Generates a form open tag with a hidden field named _request_method to pass unconventional request types.
	 * @param   string  form action, defaults to the current request URI
	 * @param   array   html attributes
	 * @return  string
	 * @uses    Request::instance
	 * @uses    URL::site
	 * @uses    HTML::attributes
	 */
	public static function open($action = NULL, array $attributes = NULL)
	{
		$method = $attributes['method'];
		
		// If the desired method is not GET or POST, create a form open tag using method = POST.
		// We'll add a hidden input element to transmit the actual method we want to use.
		if ($method !== 'GET' AND $method !== 'POST')
		{
			$attributes['method'] = 'POST';
			unset($method);
		}
		
		$open_tag = parent::open($action, $attributes);
		
		if ($method)
		{
			// Try to load the field name from the request object, if not found use a default
			$field_name = (isset(Request::METHOD_POST_VAR_NAME) ? Request::METHOD_POST_VAR_NAME : '_request_method');
			
			$hidden = form::hidden('_request_method', $method);
			
			$open_tag .= self::$hidden_prepend_string.$hidden;
		}
	}
}