<?php defined('SYSPATH') or die('No direct script access.');

class Model_Business extends ORM
{
    protected $_table_name = 'business';
    protected $_has_many = array(
		'businessadr' => array(
			'model' => 'businessadr',
			'foreign_key' => 'id_business',
		),
	);
    

}


 