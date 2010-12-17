<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Item extends Controller_Template {
	
	public $template = 'public/templates/main';
	
	public function before()
	{
		if (Request::$is_ajax)
		{
			$this->template = 'public/templates/json';
		}
		
		return parent::before();
	}
	
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
		$item = RDFORM::factory('item');
		$item->load_from_array($_POST);
		$item->save();
		
		if ($item->saved)
		{
			$data['flash'] = Kohana::message('item_created');
		}
		else
		{
			$data['flash'] = Kohana::message('error_creating_item');
			$data['errors'] = $item->validation_errors;
		}
		
		$this->template->data = $data;
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