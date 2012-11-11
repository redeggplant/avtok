<?php defined('SYSPATH') or die('No direct script access.');

class Model_Due extends ORM
{
    protected $_table_name = 'due';
    protected $_belongs_to = array(
		'modification' => array(
			'model' => 'modification',
			'foreign_key' => 'id_modification',
		),
	);
    public function getDueValue($id_series)
    {  
        $query = "
        SELECT DISTINCT 
               due_type.name, 
               due.due_value, 
               series.id AS series_id
               FROM 
               (series INNER JOIN modification ON series.id = modification.id_series) 
               INNER JOIN (due_type INNER JOIN due ON due_type.id = due.id_due_type) 
               ON modification.id = due.id_modification 
               WHERE modification.id_series = $id_series";
        return $query = DB::query(Database::SELECT, $query)
			->execute();
    
    }  
}