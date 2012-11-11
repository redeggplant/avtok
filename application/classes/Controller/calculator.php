<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Calculator extends Maincontroller {
    public $template = 'main';
    
    

	public function action_index()
	{
        $data = array();

        $brands = ORM::factory('brand')->find_all();
  
        $calc_view = View::factory( 'forms/form.calculator' );
 		
        $this->template->content =  View::factory('calculator')
        ->set('calculator_form',$calc_view->render());
        
	}
    
    public function action_result()
	{
        $data = array();
        if($_POST)
        {   
            $id_brand = arr::get($_POST, 'id_brand');
            $id_model = arr::get($_POST, 'id_model');
            $id_series = arr::get($_POST, 'series');
            $year = arr::get($_POST, 'year');
            $to_number = arr::get($_POST, 'to_number');
            $millage_val = arr::get($_POST, 'millage_val');
            //$brands = ORM::factory('labor')->find_all();
            $brand = ORM::factory('brand',$id_brand)->name;
            $model = ORM::factory('model',$id_model)->name;
            $series = ORM::factory('series',$id_series)
                                ->as_array();
                                    
            $price = ORM::factory('price');
            
            $modification = new Model_Modification();
            $result = $modification -> getModification($year, $id_series, $to_number); 

            $labors = new Model_Labor();
                
           

            foreach ($result as $mod)
            {
                $labors_val[$mod['id']] = $labors->getLabors($mod['id'], $to_number)->as_array(); 
                
                
                
            }
            
            $calc_view = View::factory( 'forms/form.calculator' )
            ->set('id_brand',$id_brand)
            ->set('id_model',$id_model)
            ->set('id_series',$id_series)
            ->set('year',$year)
            ->set('millage_val',$millage_val)
            ->set('modification',$result)
            ->set('test',$modification)
            ->set('to_number',$to_number);
            
            $this->template->content = View::factory('calculator.result')
            ->set('brand',$brand)
            ->set('model',$model)
            ->set('year',$year)
            ->set('series',$series)
            ->set('millage_val',$millage_val)
            ->set('modification',$result)
            ->set('to_number',$to_number)
            ->set('labors',$labors_val)
            ->set('price',$price)
            ->set('calculator_form',$calc_view->render());
            
        }
        else
        {
           HTTP::redirect('calculator');
        }
        
		
        
	}

} // End Welcome
