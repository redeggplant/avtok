<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Statistic extends Maincontroller {
    public $template = 'main';
    
    
	public function action_index()
	{
        $brands = ORM::factory('brand')->find_all();
        
        $stat_view = View::factory( 'forms/form.statistic' )
                                   ->set('brands',$brands);
                                   
		$this->template->content =  View::factory('statistic')
                                 ->set('statistic_form',$stat_view->render());
	}

} // End Welcome
