<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Cars extends Maincontroller {
    public $template = 'main';
    
     public function before()
    {
        parent::before();
        
    }
    
    
	public function action_index()
	{

        $brand_url = $this->request->param('brand');

        $model_url = $this->request->param('model');
        
        if(isset($brand_url) and !isset($model_url))
        {
                $models = ORM::factory('model')
                ->join('family')
                ->on('model.id_family', '=', 'family.id')
                ->join('brand')
                ->on('family.id_brand', '=', 'brand.id')
                ->where('brand.url','=',$brand_url)
                ->find_all();
                $this->template->content = View::factory( 'brands' )
                                   ->set('models',$models);
        }
        elseif(isset($model_url))
        {
            $brand = ORM::factory('brand')
                    ->where('url','=',$brand_url)->find()->name;
                    
            $model = ORM::factory('model')
                ->where('model.url','=',$model_url)
                ->find()->name;
                
            $series = ORM::factory('series')
                                ->join('model')
                                ->on('series.id_model','=', 'model.id')
                                ->where('model.url','=',$model_url)
                                ->find_all();
            
            $due = new Model_Due();
            
            foreach($series as $ser)
            {
                $due_arr[$ser->id] = $due->getDueValue($ser->id)->as_array();
            }
            
                                
            $this->template->content = View::factory( 'models' )
                                        ->set('brand',$brand)
                                        ->set('model',$model)
                                        ->set('series',$series)
                                        ->set('dues',$due_arr)                    ;
                                   
        }
                
        $error = $model_url;
               
        
        /*$stat_view = View::factory( 'forms/form.statistic' )
                                   ->set('models',$models);*/
                                   
		
	}

} // End Welcome
