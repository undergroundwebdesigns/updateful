<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Info extends Controller_Template {
	
	public $template = 'public/templates/main';
	
	public function action_index()
	{
		$this->template->title = 'About';
		$this->template->content = 'about page here';
	}

}