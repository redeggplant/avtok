<?php defined('SYSPATH') or die('No direct script access.');

class Model_Series extends ORM
{
    protected $_table_name = 'series';
    protected $_belongs_to = array(
      'model'  => array(
               'model'       => 'model',
               'foreign_key' => 'id_model',
          )
    );
   
   protected $_has_many = array(
		'modification' => array(
			'model' => 'modification',
			'foreign_key' => 'id_series',
		),
	);
    
    protected $_has_one = array(
		'mileage' => array(
			'model' => 'mileage',
			'foreign_key' => 'id_series',
		),
	);
     
    
}