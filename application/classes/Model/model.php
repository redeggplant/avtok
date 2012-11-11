<?php defined('SYSPATH') or die('No direct script access.');

class Model_Model extends ORM
{
    protected $_table_name = 'model';
    protected $_belongs_to = array(
      'family'  => array(
               'model'       => 'family',
               'foreign_key' => 'id_family',
          )
    );
    
    protected $_has_many = array(
		'series' => array(
			'model' => 'series',
			'foreign_key' => 'id_model',
		),
	);
   
}