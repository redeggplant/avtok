<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Informator extends Maincontroller {
    public $template = 'main';
    
    
	public function action_index()
	{
		$this->template->content = 'hello, informator!';
	}

} // End Welcome
