<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Home extends RESTTemplate {
	
	public $template = 'public/templates/main';

	public function action_index()
	{
		$this->template->title = 'Home';
		$this->template->content = View::factory('public/home');
	}
	
	public function action_about()
	{
		$this->template->title = 'Home';
		$this->template->content = 'about page here';
	}

} // End Welcome
