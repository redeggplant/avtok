<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Ajax extends Controller {
 	
    public function action_brand()
	{
        $data = array();

        $id = Arr::get($_POST,'id');
        
        $brands = ORM::factory('brand')->find_all();
        
        $json = array();
    
        foreach($brands as $item)
        {
            
            $json[] = array('name'=>$item->name,'id'=>$item->id,'nn'=>$id);
        }
        
        $json = json_encode($json);
        
        echo $json;
       
        
       
       /* $view = View::factory( 'forms/form.calculator' )->set('brands',$brands);
 		$this->template->content =  View::factory('calculator')
        ->set('calc',$view->render());*/
        
	}
    
    
    public function action_model()
	{
        $data = array();
        $id = Arr::get($_POST,'id');
        $models = ORM::factory('model')
        ->with('family')
        ->where('family.id_brand','=',$id)
        ->find_all();
        
        $json = array();
        if($models -> count() == 0)
        {
          $json = 666;  
        }
        else
        {
        foreach($models as $model)
        {
            $json[] = array('name'=>$model->name,'id'=>$model->id);
        }
        
        $json = json_encode($json);
        }
        echo $json;
		
	}
    
    public function action_series()
	{
        $data = array();
        $id = Arr::get($_POST,'id');
        $series = ORM::factory('series')
        ->where('id_model','=',$id)
        ->find_all();
        
        $json = array();
        if($series -> count() == 0)
        {
          $json = 666;  
        }
        else
        {
            foreach($series as $ser)
            {
                $json[] = array('year_start'=>$ser->year_start,'year_finish'=>$ser->year_finish, 'id'=>$ser->id);
            }
            
            $json = json_encode($json);
        }
        echo $json;
		
	}
    
    public function action_milage()
	{
        $data = array();
        $id = Arr::get($_POST,'id');
        $id_series = 1763;
        $mant = new Model_Maintenance();
        $result = $mant -> maxmin($id); 
        $step = ORM::factory('mileage')
        ->where('id_series','=',$id)
        ->find();
        
        $json = array();
    
        foreach($result as $item)
        {
            $json[] = array('max'=>$item['max'],'min'=>$item['min'],'step'=>$step->step);
        }
        
        $json = json_encode($json);
        
        echo $json;
		
	}
    
    public function action_labors()
	{
        $data = array();
        $id_modificaton = Arr::get($_POST,'mod_id');
        $to_number = Arr::get($_POST,'to_number');
        /*$to_number = 1;
        $id_modificaton = 5032;
        */
        /*$labors = ORM::factory('maintenance')
        ->join('labor','INNER')
        ->on('maintenance.id_labor','=','labor.id')
        ->where('maintenance.id_modification','=',$id_modificaton)
        ->find_all();*/
        
        $data = DB::select(DB::expr('labor.name AS name, maintenance.id_modification'))
			->from('maintenance')
            ->join('labor')
            ->on('maintenance.id_labor', '=', 'labor.id')
            ->where('maintenance.id_modification','=',$id_modificaton)
            ->where('maintenance.number','=',$to_number)
 			->execute();
        
        
        $json = array();
    
        foreach($data as $item)
        {
            $json[] = array('name'=>$item['name']);
        }
        
        $json = json_encode($json);
        
        echo $json;
		
	}
    
    public function action_price()
	{
        $data = array();
        $id_modificaton = Arr::get($_POST,'mod_id');
        $to_number = Arr::get($_POST,'to_number');
         //$id_modificaton = 3047;
         $to_number = 0;
        /*$labors = ORM::factory('maintenance')
        ->join('labor','INNER')
        ->on('maintenance.id_labor','=','labor.id')
        ->where('maintenance.id_modification','=',$id_modificaton)
        ->find_all();*/
        
        $data = ORM::factory('price')
            ->where('id_modification','=',$id_modificaton)
            //->where('number','=',$to_number)
            ->find_all();
        if($data->count() == 0)
        {
        $json = 666;    
        }    
        else
        {
        $json = array();
        
        foreach($data as $item)
        {
            
            $json[] = array('price_value'=>$item->price_value, 'id_modification'=>$item->id_modification);
        }
        
        $json = json_encode($json);
        }
        echo $json;
		
	}
    
    
     public function action_catalog()
	{
        $brand = Arr::get($_POST,'brand');
        $data = array();
        
        $brand = Arr::get($_POST,'brand');
        $length = 0;
        $startRec = Arr::get($_POST,'startRec');
        $endRec = Arr::get($_POST,'endRec');
        $num = $startRec;
        $center = Arr::get($_POST,'center');
        $radius = Arr::get($_POST,'radius');
        $center_lat = $center[1];
        $center_lng = $center[0];
        $barnd = new Model_Brand();
        $buisneses = new Model_Businessadr();
        $locations = $buisneses->getLocations($center_lat, $center_lng, $radius, $startRec, $endRec, $brand);
        $length = $buisneses->getCountLocations($center_lat, $center_lng, $radius, $startRec, $endRec,$brand);
        
        $json = array();
        if($locations->count() == 0)
        {
           $json =  array('status'=>666);
        }
        else
        {
        $length = $length->count();
        
            foreach($locations as $item)
            {
                $num = $num+1;
                $barnds = $barnd->getCatalogBrands($item['aid'])->as_array();
                $markers[] = array(
                                   'id'=>$item['id'],
                                   'name'=>$item['name'],
                                   'num'=>$num,
                                   'lat'=>$item['lat'],
                                   'lng'=>$item['lng'], 
                                   'center'=>$radius,
                                   'city'=>$item['city'],
                                   'street'=>$item['street'],
                                   'aid'=>$item['aid'],
                                   'distance' => ceil($item['distance']),
                                   'business_name'=>$item['business_name'],
                                   'phones'=>$item['phones'],
                                   'email'=>$item['email'],
                                   'sites'=>$item['sites'],
                                   'brands'=>$barnds
                                   );
            }
            $json = array('markers'=>$markers, 'length'=>$length, 'startRec'=>$startRec);
            
        }
       $json = json_encode($json); 
       echo $json;
        
		
	}
    
    
    
    
} // End Welcome