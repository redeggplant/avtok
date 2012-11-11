<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Catalog extends Maincontroller {
    public $template = 'main';
    
    
	public function action_index()
	{
        $brands = new Model_Brand();
        
        $brands = $brands->getCatalogBrands($id_bussines_adr = 0)->as_array();
        
        $cat_view = View::factory( 'forms/form.catalog' )
                                   ->set('brands',$brands);
        
		$this->template->content =  View::factory('catalog')
                                 ->set('catalog_form',$cat_view->render());
	}

} // End Welcome
