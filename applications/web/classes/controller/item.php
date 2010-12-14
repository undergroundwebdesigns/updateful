<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Item extends Controller_Template {
	
	public $template = 'public/templates/main';
	
	/**
	 * Displays the home page, with options to enter either what they found or what they're looking for.
	 */
	public function action_home()
	{
		$this->template->title = 'Home';
		$this->template->content = View::factory('public/home');
	}
	
	/**
	 * Displays a list of items.
	 */
	public function action_index()
	{
		
	}
	
	/**
	 * Creates a new item.
	 */
	public function action_create()
	{
		
	}
	
	/**
	 * Edits an existing item.
	 */
	public function action_edit()
	{
		
	}
	
	/**
	 * Deletes an existing item.
	 */
	public function action_delete()
	{
		
	}
}