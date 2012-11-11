<?php defined('SYSPATH') or die('No direct script access.');

class Model_Family extends ORM
{
    protected $_table_name = 'family';
    protected $_belongs_to = array(
      'brand'  => array(
               'model'       => 'brand',
               'foreign_key' => 'id_brand',
          )
    );
    
     protected $_has_many = array(
		'model' => array(
			'model' => 'model',
			'foreign_key' => 'id_family',
		),
	);
}