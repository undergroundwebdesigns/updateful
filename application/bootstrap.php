<?php defined('SYSPATH') or die('No direct script access.');

//-- Environment setup --------------------------------------------------------

/**
 * Set the default time zone.
 *
 * @see  http://kohanaframework.org/guide/using.configuration
 * @see  http://php.net/timezones
 */
date_default_timezone_set('America/Chicago');

/**
 * Set the default locale.
 *
 * @see  http://kohanaframework.org/guide/using.configuration
 * @see  http://php.net/setlocale
 */
setlocale(LC_ALL, 'en_US.utf-8');

/**
 * Enable the Kohana auto-loader.
 *
 * @see  http://kohanaframework.org/guide/using.autoloading
 * @see  http://php.net/spl_autoload_register
 */
spl_autoload_register(array('Kohana', 'auto_load'));

/**
 * Enable the Kohana auto-loader for unserialization.
 *
 * @see  http://php.net/spl_autoload_call
 * @see  http://php.net/manual/var.configuration.php#unserialize-callback-func
 */
ini_set('unserialize_callback_func', 'spl_autoload_call');

//-- Configuration and initialization -----------------------------------------

/**
 * Set Kohana::$environment if $_ENV['KOHANA_ENV'] has been supplied.
 * 
 */
if (isset($_ENV['KOHANA_ENV']))
{
	Kohana::$environment = $_ENV['KOHANA_ENV'];
}
else
{
	Kohana::$environment = Kohana::PRODUCTION;
	define('IN_PRODUCTION', true);
}

/**
 * Initialize Kohana, setting the default options.
 *
 * The following options are available:
 *
 * - string   base_url    path, and optionally domain, of your application   NULL
 * - string   index_file  name of your index file, usually "index.php"       index.php
 * - string   charset     internal character set used for input and output   utf-8
 * - string   cache_dir   set the internal cache directory                   APPPATH/cache
 * - boolean  errors      enable or disable error handling                   TRUE
 * - boolean  profile     enable or disable internal profiling               TRUE
 * - boolean  caching     enable or disable internal caching                 FALSE
 */

if (Kohana::$environment === Kohana::DEVELOPMENT OR Kohana::$environment === Kohana::TESTING)
{
	$init_settings = array(
		'base_url' => '/',
	);
}
else // Production settings... these are the defaults if the above test fails, since they should be the strictest:
{
	$init_settings = array(
		'base_url' => '/',
		'profile' => FALSE,
		'caching' => TRUE,
	);
}
Kohana::init($init_settings);

/**
 * Attach the file write to logging. Multiple writers are supported.
 */
Kohana::$log->attach(new Kohana_Log_File(APPPATH.'logs'));

/**
 * Attach a file reader to config. Multiple readers are supported.
 */
Kohana::$config->attach(new Kohana_Config_File);

/**
 * Enable modules. Modules are referenced by a relative or absolute path.
 */
Kohana::modules(array(
	// 'auth'       => MODPATH.'auth',       // Basic authentication
	// 'cache'      => MODPATH.'cache',      // Caching with multiple backends
	// 'codebench'  => MODPATH.'codebench',  // Benchmarking tool
	// 'database'   => MODPATH.'database',   // Database access
	// 'image'      => MODPATH.'image',      // Image manipulation
	// 'orm'        => MODPATH.'orm',        // Object Relationship Mapping
	// 'oauth'      => MODPATH.'oauth',      // OAuth authentication
	// 'pagination' => MODPATH.'pagination', // Paging of results
	// 'unittest'   => MODPATH.'unittest',   // Unit testing
	// 'userguide'  => MODPATH.'userguide',  // User guide and API documentation
	'migration'		=> MODPATH.'migration',  // Handles easy database migrations
	'restfulforms'	=> MODPATH.'restfulforms'// Overrides the form helper and reqeust object to allow form methods besides "GET" and "POST".
	));
	
/**
* Set the cookie salt, used to protect cookies from outside tampering:
*/
Cookie::$salt = 'myCookieS@lt';

/**
 * Set the routes. Each route must have a minimum of a name, a URI and a set of
 * defaults for the URI.
 */
Route::set('about', 'about(/)')
	->defaults(array(
		'controller' 	=> 'home',
		'action'		=> 'about',
	));
	
Route::set('default', '(<controller>(/<action>(/<id>)))')
	->defaults(array(
		'controller' => 'home',
		'action'     => 'index',
	));

if ( ! defined('SUPPRESS_REQUEST'))
{
	// Instantiate your Request object
	$request = Request::instance();

	try
	{
		$request->execute();
	}
	catch (Exception $e) // if its not valid, it gets caught here
	{
		if (!defined('IN_PRODUCTION')) // if this is Development, its displays the error
		{
			throw $e;
		}
		// if its IN_PRODUCTION, it does the following:
		// Logs the error
		Kohana::$log->add(Kohana::ERROR, Kohana::exception_text($e));
		// Marks the status as 404
		$request->status = 404;
		// Renders the View for your CUSTOM 404 of your choice
		$request->response = View::factory('public/templates/main') //your view may be different
		->set('title', '404')
		->set('content', View::factory('errors/404')); //again, your view may be different
	}
	// then continues on with the request process to display your custom 404 page
	$request->send_headers()->response;
	echo $request->response;
}
