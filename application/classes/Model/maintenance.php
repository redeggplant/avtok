<?php defined('SYSPATH') or die('No direct script access.');

class Model_Maintenance extends ORM
{
    protected $_table_name = 'maintenance';
    protected $_belongs_to = array(
      'model'  => array(
               'model'       => 'modification',
               'foreign_key' => 'id_modification',
          )
    );
   
   /*protected $_belongs_to = array(
		'labor' => array(
			'model' => 'labor',
			'foreign_key' => 'id_labor',
		),
	);*/
    
   /* protected $_has_one = array(
		'mileage' => array(
			'model' => 'mileage',
			'foreign_key' => 'id_series',
		),
	);*/
    
    public function maxmin($id_series)
    {
        
        $data = DB::select(DB::expr('MAX(maintenance.number) as max, MIN(maintenance.number) as min'))
			->from('maintenance')
            ->join('modification')
            ->on('maintenance.id_modification', '=', 'modification.id')
            ->where('modification.id_series','=',$id_series)
			->execute();
            
			return $data;
    
    }
   
}