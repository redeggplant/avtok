<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2012-11-02 02:46:13 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_PUBLIC ~ APPPATH\classes\Controller\informator.php [ 2 ] in :
2012-11-02 02:46:13 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-02 02:47:14 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_PUBLIC ~ APPPATH\classes\Controller\informator.php [ 2 ] in :
2012-11-02 02:47:14 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-02 02:47:43 --- CRITICAL: ErrorException [ 1 ]: Class 'ControllerTempalte' not found ~ APPPATH\classes\maincontroller.php [ 3 ] in :
2012-11-02 02:47:43 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-02 02:48:00 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\main.php [ 8 ] in Z:\home\avtokoh.local\www\application\views\main.php:8
2012-11-02 02:48:00 --- DEBUG: #0 Z:\home\avtokoh.local\www\application\views\main.php(8): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\avtokoh...', 8, Array)
#1 Z:\home\avtokoh.local\www\system\classes\Kohana\View.php(61): include('Z:\home\avtokoh...')
#2 Z:\home\avtokoh.local\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\avtokoh...', Array)
#3 Z:\home\avtokoh.local\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 Z:\home\avtokoh.local\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Informator))
#7 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\avtokoh.local\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\avtokoh.local\www\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\avtokoh.local\www\application\views\main.php:8
2012-11-02 03:01:41 --- CRITICAL: Database_Exception [ 1146 ]: Table 'avto_new.brands' doesn't exist [ SHOW FULL COLUMNS FROM `brands` ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\avtokoh.local\www\modules\database\classes\Kohana\Database\MySQL.php:358
2012-11-02 03:01:41 --- DEBUG: #0 Z:\home\avtokoh.local\www\modules\database\classes\Kohana\Database\MySQL.php(358): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 Z:\home\avtokoh.local\www\modules\orm\classes\Kohana\ORM.php(1665): Kohana_Database_MySQL->list_columns('brands')
#2 Z:\home\avtokoh.local\www\modules\orm\classes\Kohana\ORM.php(441): Kohana_ORM->list_columns()
#3 Z:\home\avtokoh.local\www\modules\orm\classes\Kohana\ORM.php(386): Kohana_ORM->reload_columns()
#4 Z:\home\avtokoh.local\www\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#5 Z:\home\avtokoh.local\www\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(NULL)
#6 Z:\home\avtokoh.local\www\application\classes\Controller\calculator.php(9): Kohana_ORM::factory('brand')
#7 Z:\home\avtokoh.local\www\system\classes\Kohana\Controller.php(84): Controller_Calculator->action_index()
#8 [internal function]: Kohana_Controller->execute()
#9 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Calculator))
#10 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 Z:\home\avtokoh.local\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#12 Z:\home\avtokoh.local\www\index.php(118): Kohana_Request->execute()
#13 {main} in Z:\home\avtokoh.local\www\modules\database\classes\Kohana\Database\MySQL.php:358
2012-11-02 03:05:45 --- CRITICAL: Database_Exception [ 1146 ]: Table 'avto_new.barnd' doesn't exist [ SHOW FULL COLUMNS FROM `barnd` ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\avtokoh.local\www\modules\database\classes\Kohana\Database\MySQL.php:358
2012-11-02 03:05:45 --- DEBUG: #0 Z:\home\avtokoh.local\www\modules\database\classes\Kohana\Database\MySQL.php(358): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 Z:\home\avtokoh.local\www\modules\orm\classes\Kohana\ORM.php(1665): Kohana_Database_MySQL->list_columns('barnd')
#2 Z:\home\avtokoh.local\www\modules\orm\classes\Kohana\ORM.php(441): Kohana_ORM->list_columns()
#3 Z:\home\avtokoh.local\www\modules\orm\classes\Kohana\ORM.php(386): Kohana_ORM->reload_columns()
#4 Z:\home\avtokoh.local\www\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#5 Z:\home\avtokoh.local\www\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(NULL)
#6 Z:\home\avtokoh.local\www\application\classes\Controller\calculator.php(9): Kohana_ORM::factory('brand')
#7 Z:\home\avtokoh.local\www\system\classes\Kohana\Controller.php(84): Controller_Calculator->action_index()
#8 [internal function]: Kohana_Controller->execute()
#9 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Calculator))
#10 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 Z:\home\avtokoh.local\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#12 Z:\home\avtokoh.local\www\index.php(118): Kohana_Request->execute()
#13 {main} in Z:\home\avtokoh.local\www\modules\database\classes\Kohana\Database\MySQL.php:358
2012-11-02 03:08:39 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR ~ APPPATH\classes\Controller\calculator.php [ 11 ] in :
2012-11-02 03:08:39 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-02 03:08:58 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '[' ~ APPPATH\views\calculator.php [ 1 ] in :
2012-11-02 03:08:58 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-02 03:19:55 --- CRITICAL: ErrorException [ 1 ]: Cannot use object of type Model_Brand as array ~ APPPATH\views\calculator.php [ 4 ] in :
2012-11-02 03:19:55 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-02 03:25:51 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: brands ~ APPPATH\views\calculator.php [ 3 ] in Z:\home\avtokoh.local\www\application\views\calculator.php:3
2012-11-02 03:25:51 --- DEBUG: #0 Z:\home\avtokoh.local\www\application\views\calculator.php(3): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\avtokoh...', 3, Array)
#1 Z:\home\avtokoh.local\www\system\classes\Kohana\View.php(61): include('Z:\home\avtokoh...')
#2 Z:\home\avtokoh.local\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\avtokoh...', Array)
#3 Z:\home\avtokoh.local\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\avtokoh.local\www\application\views\main.php(8): Kohana_View->__toString()
#5 Z:\home\avtokoh.local\www\system\classes\Kohana\View.php(61): include('Z:\home\avtokoh...')
#6 Z:\home\avtokoh.local\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\avtokoh...', Array)
#7 Z:\home\avtokoh.local\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\avtokoh.local\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Calculator))
#11 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\avtokoh.local\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\avtokoh.local\www\index.php(118): Kohana_Request->execute()
#14 {main} in Z:\home\avtokoh.local\www\application\views\calculator.php:3
2012-11-02 03:26:21 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: brands ~ APPPATH\views\calculator.php [ 1 ] in Z:\home\avtokoh.local\www\application\views\calculator.php:1
2012-11-02 03:26:21 --- DEBUG: #0 Z:\home\avtokoh.local\www\application\views\calculator.php(1): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\avtokoh...', 1, Array)
#1 Z:\home\avtokoh.local\www\system\classes\Kohana\View.php(61): include('Z:\home\avtokoh...')
#2 Z:\home\avtokoh.local\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\avtokoh...', Array)
#3 Z:\home\avtokoh.local\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\avtokoh.local\www\application\views\main.php(8): Kohana_View->__toString()
#5 Z:\home\avtokoh.local\www\system\classes\Kohana\View.php(61): include('Z:\home\avtokoh...')
#6 Z:\home\avtokoh.local\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\avtokoh...', Array)
#7 Z:\home\avtokoh.local\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\avtokoh.local\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Calculator))
#11 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\avtokoh.local\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\avtokoh.local\www\index.php(118): Kohana_Request->execute()
#14 {main} in Z:\home\avtokoh.local\www\application\views\calculator.php:1
2012-11-02 03:28:21 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Database_MySQL_Result::as_string() ~ APPPATH\classes\Controller\calculator.php [ 11 ] in :
2012-11-02 03:28:21 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-02 03:56:57 --- CRITICAL: Kohana_Exception [ 0 ]: Method find() cannot be called on loaded objects ~ MODPATH\orm\classes\Kohana\ORM.php [ 963 ] in Z:\home\avtokoh.local\www\application\classes\Controller\calculator.php:11
2012-11-02 03:56:57 --- DEBUG: #0 Z:\home\avtokoh.local\www\application\classes\Controller\calculator.php(11): Kohana_ORM->find()
#1 Z:\home\avtokoh.local\www\system\classes\Kohana\Controller.php(84): Controller_Calculator->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Calculator))
#4 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\avtokoh.local\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\avtokoh.local\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\avtokoh.local\www\application\classes\Controller\calculator.php:11
2012-11-02 04:05:36 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: json2 ~ APPPATH\classes\Controller\calculator.php [ 20 ] in Z:\home\avtokoh.local\www\application\classes\Controller\calculator.php:20
2012-11-02 04:05:36 --- DEBUG: #0 Z:\home\avtokoh.local\www\application\classes\Controller\calculator.php(20): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\avtokoh...', 20, Array)
#1 Z:\home\avtokoh.local\www\system\classes\Kohana\Controller.php(84): Controller_Calculator->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Calculator))
#4 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\avtokoh.local\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\avtokoh.local\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\avtokoh.local\www\application\classes\Controller\calculator.php:20
2012-11-02 04:56:57 --- CRITICAL: Kohana_Exception [ 0 ]: The id_brand property does not exist in the Model_Model class ~ MODPATH\orm\classes\Kohana\ORM.php [ 684 ] in Z:\home\avtokoh.local\www\modules\orm\classes\Kohana\ORM.php:600
2012-11-02 04:56:57 --- DEBUG: #0 Z:\home\avtokoh.local\www\modules\orm\classes\Kohana\ORM.php(600): Kohana_ORM->get('id_brand')
#1 Z:\home\avtokoh.local\www\application\classes\Controller\ajax.php(14): Kohana_ORM->__get('id_brand')
#2 Z:\home\avtokoh.local\www\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_model()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#5 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\avtokoh.local\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\avtokoh.local\www\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\avtokoh.local\www\modules\orm\classes\Kohana\ORM.php:600
2012-11-02 05:05:37 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'model.id_model' in 'where clause' [ SELECT `model`.`id` AS `id`, `model`.`name` AS `name`, `model`.`url` AS `url`, `model`.`id_family` AS `id_family`, `model`.`id_class` AS `id_class`, `model`.`description` AS `description`, `model`.`fan_url` AS `fan_url` FROM `model` AS `model` WHERE `model`.`id_model` IS NULL ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\avtokoh.local\www\modules\database\classes\Kohana\Database\Query.php:251
2012-11-02 05:05:37 --- DEBUG: #0 Z:\home\avtokoh.local\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `model`....', 'Model_Model', Array)
#1 Z:\home\avtokoh.local\www\modules\orm\classes\Kohana\ORM.php(1060): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 Z:\home\avtokoh.local\www\modules\orm\classes\Kohana\ORM.php(1001): Kohana_ORM->_load_result(true)
#3 Z:\home\avtokoh.local\www\application\classes\Controller\ajax.php(10): Kohana_ORM->find_all()
#4 Z:\home\avtokoh.local\www\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_model()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#7 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\avtokoh.local\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\avtokoh.local\www\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\avtokoh.local\www\modules\database\classes\Kohana\Database\Query.php:251
2012-11-02 05:43:28 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: models ~ APPPATH\classes\Controller\ajax.php [ 34 ] in Z:\home\avtokoh.local\www\application\classes\Controller\ajax.php:34
2012-11-02 05:43:28 --- DEBUG: #0 Z:\home\avtokoh.local\www\application\classes\Controller\ajax.php(34): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\avtokoh...', 34, Array)
#1 Z:\home\avtokoh.local\www\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_series()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\avtokoh.local\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\avtokoh.local\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\avtokoh.local\www\application\classes\Controller\ajax.php:34
2012-11-02 05:47:01 --- CRITICAL: ErrorException [ 2 ]: Missing argument 3 for Kohana_ORM::where(), called in Z:\home\avtokoh.local\www\application\classes\Controller\ajax.php on line 30 and defined ~ MODPATH\orm\classes\Kohana\ORM.php [ 1846 ] in Z:\home\avtokoh.local\www\modules\orm\classes\Kohana\ORM.php:1846
2012-11-02 05:47:01 --- DEBUG: #0 Z:\home\avtokoh.local\www\modules\orm\classes\Kohana\ORM.php(1846): Kohana_Core::error_handler(2, 'Missing argumen...', 'Z:\home\avtokoh...', 1846, Array)
#1 Z:\home\avtokoh.local\www\application\classes\Controller\ajax.php(30): Kohana_ORM->where('id_model', NULL)
#2 Z:\home\avtokoh.local\www\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_series()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#5 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\avtokoh.local\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\avtokoh.local\www\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\avtokoh.local\www\modules\orm\classes\Kohana\ORM.php:1846
2012-11-02 06:26:38 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_modification' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in :
2012-11-02 06:26:38 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-02 07:16:26 --- CRITICAL: Kohana_Exception [ 0 ]: The maxmin property does not exist in the Model_Maintenance class ~ MODPATH\orm\classes\Kohana\ORM.php [ 684 ] in Z:\home\avtokoh.local\www\modules\orm\classes\Kohana\ORM.php:600
2012-11-02 07:16:26 --- DEBUG: #0 Z:\home\avtokoh.local\www\modules\orm\classes\Kohana\ORM.php(600): Kohana_ORM->get('maxmin')
#1 Z:\home\avtokoh.local\www\application\classes\Controller\ajax.php(51): Kohana_ORM->__get('maxmin')
#2 Z:\home\avtokoh.local\www\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_milage()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#5 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\avtokoh.local\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\avtokoh.local\www\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\avtokoh.local\www\modules\orm\classes\Kohana\ORM.php:600
2012-11-02 07:21:35 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Category' not found ~ APPPATH\classes\Controller\ajax.php [ 51 ] in :
2012-11-02 07:21:35 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-02 07:22:00 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'MAX(number)' in 'field list' [ SELECT `MAX(number)` FROM `maintenance` ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\avtokoh.local\www\modules\database\classes\Kohana\Database\Query.php:251
2012-11-02 07:22:00 --- DEBUG: #0 Z:\home\avtokoh.local\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `MAX(num...', false, Array)
#1 Z:\home\avtokoh.local\www\application\classes\Model\maintenance.php(32): Kohana_Database_Query->execute()
#2 Z:\home\avtokoh.local\www\application\classes\Controller\ajax.php(52): Model_Maintenance->max()
#3 Z:\home\avtokoh.local\www\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_milage()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#6 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\avtokoh.local\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\avtokoh.local\www\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\avtokoh.local\www\modules\database\classes\Kohana\Database\Query.php:251
2012-11-02 07:22:36 --- CRITICAL: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\Controller\ajax.php [ 62 ] in Z:\home\avtokoh.local\www\application\classes\Controller\ajax.php:62
2012-11-02 07:22:36 --- DEBUG: #0 Z:\home\avtokoh.local\www\application\classes\Controller\ajax.php(62): Kohana_Core::error_handler(8, 'Trying to get p...', 'Z:\home\avtokoh...', 62, Array)
#1 Z:\home\avtokoh.local\www\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_milage()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\avtokoh.local\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\avtokoh.local\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\avtokoh.local\www\application\classes\Controller\ajax.php:62
2012-11-02 07:23:19 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'number AS MAX' in 'field list' [ SELECT `number AS MAX` FROM `maintenance` ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\avtokoh.local\www\modules\database\classes\Kohana\Database\Query.php:251
2012-11-02 07:23:19 --- DEBUG: #0 Z:\home\avtokoh.local\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `number ...', false, Array)
#1 Z:\home\avtokoh.local\www\application\classes\Model\maintenance.php(32): Kohana_Database_Query->execute()
#2 Z:\home\avtokoh.local\www\application\classes\Controller\ajax.php(52): Model_Maintenance->max()
#3 Z:\home\avtokoh.local\www\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_milage()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#6 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\avtokoh.local\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\avtokoh.local\www\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\avtokoh.local\www\modules\database\classes\Kohana\Database\Query.php:251
2012-11-02 07:23:41 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Database_Query_Builder_Select::$max ~ APPPATH\classes\Model\maintenance.php [ 32 ] in Z:\home\avtokoh.local\www\application\classes\Model\maintenance.php:32
2012-11-02 07:23:41 --- DEBUG: #0 Z:\home\avtokoh.local\www\application\classes\Model\maintenance.php(32): Kohana_Core::error_handler(8, 'Undefined prope...', 'Z:\home\avtokoh...', 32, Array)
#1 Z:\home\avtokoh.local\www\application\classes\Controller\ajax.php(52): Model_Maintenance->max()
#2 Z:\home\avtokoh.local\www\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_milage()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#5 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\avtokoh.local\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\avtokoh.local\www\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\avtokoh.local\www\application\classes\Model\maintenance.php:32
2012-11-02 07:25:30 --- CRITICAL: Kohana_Exception [ 0 ]: The db property does not exist in the Model_Maintenance class ~ MODPATH\orm\classes\Kohana\ORM.php [ 684 ] in Z:\home\avtokoh.local\www\modules\orm\classes\Kohana\ORM.php:600
2012-11-02 07:25:30 --- DEBUG: #0 Z:\home\avtokoh.local\www\modules\orm\classes\Kohana\ORM.php(600): Kohana_ORM->get('db')
#1 Z:\home\avtokoh.local\www\application\classes\Model\maintenance.php(29): Kohana_ORM->__get('db')
#2 Z:\home\avtokoh.local\www\application\classes\Controller\ajax.php(52): Model_Maintenance->max()
#3 Z:\home\avtokoh.local\www\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_milage()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#6 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\avtokoh.local\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\avtokoh.local\www\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\avtokoh.local\www\modules\orm\classes\Kohana\ORM.php:600
2012-11-02 07:36:09 --- CRITICAL: Database_Exception [ 1146 ]: Table 'avto_new.posts' doesn't exist [ SELECT MAX(maintenance.number) as max, MIN(maintenance.number) as min FROM `maintenance` JOIN `posts` ON (`maintenance`.`id_modification` = `modification`.`id`) WHERE `modification`.`id_series` = 1763 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\avtokoh.local\www\modules\database\classes\Kohana\Database\Query.php:251
2012-11-02 07:36:09 --- DEBUG: #0 Z:\home\avtokoh.local\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT MAX(main...', false, Array)
#1 Z:\home\avtokoh.local\www\application\classes\Model\maintenance.php(35): Kohana_Database_Query->execute()
#2 Z:\home\avtokoh.local\www\application\classes\Controller\ajax.php(52): Model_Maintenance->max(1763)
#3 Z:\home\avtokoh.local\www\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_milage()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#6 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\avtokoh.local\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\avtokoh.local\www\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\avtokoh.local\www\modules\database\classes\Kohana\Database\Query.php:251