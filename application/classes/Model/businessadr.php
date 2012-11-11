<?php defined('SYSPATH') or die('No direct script access.');

class Model_Businessadr extends ORM
{
    protected $_table_name = 'business_adr';
    protected $_belongs_to = array(
		'business' => array(
			'model' => 'business',
			'foreign_key' => 'id_business',
		),
	);
    public function getLocations($lat, $lng,$radius,$startRec,$endRec,$brand)
    { 
       
     /*$lat = '37.644321';
     $lng =  '55.765432';
     $radius =  '20';
     $startRec = 1;
     $endRec = 5;
     $brand = 0;*/
      $query = '
                business.id AS id,
                business.name AS name,
                business_adr.name AS business_name,
                business_adr.lat AS lat,
                business_adr.lng AS lng,
                business_adr.id AS aid,
                business_adr.city AS city,
                business_adr.street AS street,
                business_adr.phones AS phones,
                business_adr.sites AS sites,
                business_adr.email AS email,
                (6371 * acos( cos( radians('.$lat.') ) * cos( radians( lat ) ) * cos( radians( lng ) - radians('.$lng.') ) 
                + sin( radians('.$lat.') ) * sin( radians( lat ) ) ) )
                AS distance
                ';  
      
      if($brand == 0 or $brand == '' )
        {
            $data = DB::select(DB::expr($query))
			->join('business')
            ->from('business_adr')
            ->on('business_adr.id_business','=','business.id')
            ->having('distance','<',$radius)
            ->order_by('distance')
            ->limit($endRec)
            ->offset($startRec)
			->execute();

            
        } 
        else
        {
             $data = DB::select(DB::expr($query))
            ->from('business_adr')
            ->join('business')
            ->on('business_adr.id_business','=','business.id')
            ->join('business_cars')
            ->on('business_adr.id','=','business_cars.id_business_adr')
            ->where('business_cars.id_brand','=',$brand)
            ->having('distance','<',$radius)
            ->order_by('distance')
            ->limit($endRec)
            ->offset($startRec)
			->execute();
        }
        
      
      return $data;                    
                           
    }  
    public function getCountLocations($lat, $lng,$radius,$startRec,$endRec,$brand)
    {
        $query = '
                business_adr.lat AS lat,
                business_adr.lng AS lng,
                business_adr.id AS aid,
                (6371 * acos( cos( radians('.$lat.') ) * cos( radians( lat ) ) * cos( radians( lng ) - radians('.$lng.') ) 
                + sin( radians('.$lat.') ) * sin( radians( lat ) ) ) )
                AS distance
                ';
        if($brand == 0 or $brand == '' )
        {
            $data = DB::select(DB::expr($query))
            ->join('business')
            ->from('business_adr')
            ->on('business_adr.id_business','=','business.id')
            ->having('distance','<',$radius); 
        }
        else
        {
            $data = DB::select(DB::expr($query))
            ->join('business')
            ->from('business_adr')
            ->on('business_adr.id_business','=','business.id')
            ->join('business_cars')
            ->on('business_adr.id','=','business_cars.id_business_adr')
            ->where('business_cars.id_brand','=',$brand)
            ->having('distance','<',$radius);
        }
          
              
          
        
        return $data->execute();
    }
    
}

