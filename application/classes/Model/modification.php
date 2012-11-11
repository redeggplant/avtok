<?php defined('SYSPATH') or die('No direct script access.');

class Model_Modification extends ORM
{
    protected $_table_name = 'modification';
    protected $_belongs_to = array(
      'series'  => array(
               'model'       => 'series',
               'foreign_key' => 'id_series',
          )
    );
    protected $_has_many = array(
		'maintenance' => array(
			'model' => 'maintenance',
			'foreign_key' => 'id_modification',
		),
	);
    
    /*protected $_has_many = array(
		'due' => array(
			'model' => 'due',
			'foreign_key' => 'id_modification',
		),
	);*/    

    
    public function getModification($year, $id_series, $to_number)
    {  
        $query = '
        SELECT DISTINCT modification.id_series AS id_series
              , modification.modification_without_transmission AS name_wt
              , modification.transmission AS transmission
              , modification.id AS id
              , modification.`year` AS `year`
              , transmission.type AS trtype
                FROM
                  maintenance
                INNER JOIN modification
                ON maintenance.id_modification = modification.id
                LEFT JOIN transmission
                ON modification.transmission = transmission.id
        
        WHERE
          (modification.year = '.$year.'
          OR modification.year IS NULL)
          AND modification.id_series = '.$id_series.'
          AND maintenance.number = '.$to_number.'
        ';
        return $query = DB::query(Database::SELECT, $query)
			->execute();
    
    }
   
}