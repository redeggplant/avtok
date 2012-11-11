<?php defined('SYSPATH') or die('No direct script access.');

class Model_Labor extends ORM
{
    protected $_table_name = 'labor';
    protected $_has_many = array(
		'maintenance' => array(
			'model' => 'maintenance',
			'foreign_key' => 'id_labor',
		),
	);
    public function getLabors($id_mod, $to_number)
    {
        return DB::select(DB::expr('labor.name AS name, maintenance.id_modification AS mid'))
			->from('maintenance')
            ->join('labor')
            ->on('maintenance.id_labor', '=', 'labor.id')
            ->where('maintenance.id_modification','=',$id_mod)
            ->where('maintenance.number','=',$to_number)
 			->execute();
    
    }    
}
