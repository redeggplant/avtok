<?php defined('SYSPATH') or die('No direct script access.');

class Model_Price extends ORM
{
    protected $_table_name = 'price';
    protected $_has_many = array(
		'modification' => array(
			'model' => 'modification',
			'foreign_key' => 'id_modification',
		),
	);
      
}