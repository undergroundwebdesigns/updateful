<?php defined('SYSPATH') or die('No direct script access.');
/**
 * Overloading the default Kohana request class adding fake REST.
 *
 * @package    Updateful
 * @category   Base
 * @author     Alex Willemsma
 * @copyright  (c) 2010 Updateful
 * @license    http://kohanaphp.com/license
 */

class Request extends Kohana_Request
{
	// POST variable name used to over-ride the actual request method
	const METHOD_POST_VAR_NAME = '_request_method';
	
	/**
	 * Overriding the instance method to set Request::$method based on
	 * a "POST" parameter called _request_method, if such a parameter exits.
	 * @param   string   URI of the request
	 * @return  Request
	 */
	public static function instance( & $uri = TRUE)
	{
		$request = parent::instance($uri);
		
		if (Request::$method == 'POST' AND isset($_POST[self::METHOD_POST_VAR_NAME]))
		{
			Request::$method = $_POST[self::METHOD_POST_VAR_NAME];
		}
		
		return $request;
	}
}