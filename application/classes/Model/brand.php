<?php defined('SYSPATH') or die('No direct script access.');

class Model_Brand extends ORM
{
    protected $_table_name = 'brand';
    
     protected $_has_many = array(
		'family' => array(
			'model' => 'family',
			'foreign_key' => 'id_brand',
		),
	);
    
    public function checkURL($url)
    {
        
    }
    
    public function getCatalogBrands($id_bussines_adr)
    { 
            if($id_bussines_adr != 0)
            {
                $filter = 'WHERE id_business_adr = '.$id_bussines_adr.'';
            }
            else
            {
                $filter = '';
            }
            $query = "SELECT DISTINCT brand.name AS name, brand.id AS id,   brand.logo AS logo  
                      FROM brand 
                      INNER JOIN  business_cars ON brand.id = business_cars.id_brand $filter ORDER BY brand.name ";    
            return $query = DB::query(Database::SELECT, $query)
			->execute();
    }
}