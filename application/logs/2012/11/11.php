<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2012-11-11 12:47:33 --- EMERGENCY: Database_Exception [ 2 ]: mysql_connect() [function.mysql-connect]: Access denied for user 'avto'@'localhost' (using password: YES) ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 67 ] in Z:\home\avtokoh.local\www\modules\database\classes\Kohana\Database\MySQL.php:171
2012-11-11 12:47:33 --- NOTICE: #0 Z:\home\avtokoh.local\www\modules\database\classes\Kohana\Database\MySQL.php(171): Kohana_Database_MySQL->connect()
#1 Z:\home\avtokoh.local\www\modules\database\classes\Kohana\Database\MySQL.php(358): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#2 Z:\home\avtokoh.local\www\modules\orm\classes\Kohana\ORM.php(1665): Kohana_Database_MySQL->list_columns('brand')
#3 Z:\home\avtokoh.local\www\modules\orm\classes\Kohana\ORM.php(441): Kohana_ORM->list_columns()
#4 Z:\home\avtokoh.local\www\modules\orm\classes\Kohana\ORM.php(386): Kohana_ORM->reload_columns()
#5 Z:\home\avtokoh.local\www\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#6 Z:\home\avtokoh.local\www\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(NULL)
#7 Z:\home\avtokoh.local\www\application\classes\Controller\calculator.php(12): Kohana_ORM::factory('brand')
#8 Z:\home\avtokoh.local\www\system\classes\Kohana\Controller.php(84): Controller_Calculator->action_index()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Calculator))
#11 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\avtokoh.local\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\avtokoh.local\www\index.php(118): Kohana_Request->execute()
#14 {main} in Z:\home\avtokoh.local\www\modules\database\classes\Kohana\Database\MySQL.php:171