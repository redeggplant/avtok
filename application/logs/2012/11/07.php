<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2012-11-07 01:44:40 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_labor' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in :
2012-11-07 01:44:40 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-07 01:45:20 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_labor' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in :
2012-11-07 01:45:20 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-07 02:35:53 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH\classes\Controller\calculator.php [ 37 ] in :
2012-11-07 02:35:53 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-07 02:36:07 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH\classes\Controller\calculator.php [ 37 ] in :
2012-11-07 02:36:07 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-07 02:58:33 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_maintanence' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in :
2012-11-07 02:58:33 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-07 02:58:59 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'modification.id_series' in 'where clause' [ SELECT `maintenance`.`id_modification` AS `id_modification`, `maintenance`.`number` AS `number`, `maintenance`.`id_labor` AS `id_labor` FROM `maintenance` AS `maintenance` WHERE `modification`.`id_series` = 1735 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\avtokoh.local\www\modules\database\classes\Kohana\Database\Query.php:251
2012-11-07 02:58:59 --- DEBUG: #0 Z:\home\avtokoh.local\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `mainten...', 'Model_Maintenan...', Array)
#1 Z:\home\avtokoh.local\www\modules\orm\classes\Kohana\ORM.php(1060): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 Z:\home\avtokoh.local\www\modules\orm\classes\Kohana\ORM.php(1001): Kohana_ORM->_load_result(true)
#3 Z:\home\avtokoh.local\www\application\classes\Controller\calculator.php(36): Kohana_ORM->find_all()
#4 Z:\home\avtokoh.local\www\system\classes\Kohana\Controller.php(84): Controller_Calculator->action_result()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Calculator))
#7 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\avtokoh.local\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\avtokoh.local\www\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\avtokoh.local\www\modules\database\classes\Kohana\Database\Query.php:251
2012-11-07 03:01:39 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: brand ~ APPPATH\views\labor.php [ 1 ] in Z:\home\avtokoh.local\www\application\views\labor.php:1
2012-11-07 03:01:39 --- DEBUG: #0 Z:\home\avtokoh.local\www\application\views\labor.php(1): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\avtokoh...', 1, Array)
#1 Z:\home\avtokoh.local\www\system\classes\Kohana\View.php(61): include('Z:\home\avtokoh...')
#2 Z:\home\avtokoh.local\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\avtokoh...', Array)
#3 Z:\home\avtokoh.local\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\avtokoh.local\www\application\views\main.php(55): Kohana_View->__toString()
#5 Z:\home\avtokoh.local\www\system\classes\Kohana\View.php(61): include('Z:\home\avtokoh...')
#6 Z:\home\avtokoh.local\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\avtokoh...', Array)
#7 Z:\home\avtokoh.local\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\avtokoh.local\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Calculator))
#11 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\avtokoh.local\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\avtokoh.local\www\index.php(118): Kohana_Request->execute()
#14 {main} in Z:\home\avtokoh.local\www\application\views\labor.php:1
2012-11-07 03:02:18 --- CRITICAL: Kohana_Exception [ 0 ]: The id_series property does not exist in the Model_Maintenance class ~ MODPATH\orm\classes\Kohana\ORM.php [ 684 ] in Z:\home\avtokoh.local\www\modules\orm\classes\Kohana\ORM.php:600
2012-11-07 03:02:18 --- DEBUG: #0 Z:\home\avtokoh.local\www\modules\orm\classes\Kohana\ORM.php(600): Kohana_ORM->get('id_series')
#1 Z:\home\avtokoh.local\www\application\views\calculator.result.php(3): Kohana_ORM->__get('id_series')
#2 Z:\home\avtokoh.local\www\system\classes\Kohana\View.php(61): include('Z:\home\avtokoh...')
#3 Z:\home\avtokoh.local\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\avtokoh...', Array)
#4 Z:\home\avtokoh.local\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#5 Z:\home\avtokoh.local\www\application\views\main.php(55): Kohana_View->__toString()
#6 Z:\home\avtokoh.local\www\system\classes\Kohana\View.php(61): include('Z:\home\avtokoh...')
#7 Z:\home\avtokoh.local\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\avtokoh...', Array)
#8 Z:\home\avtokoh.local\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#9 Z:\home\avtokoh.local\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#10 [internal function]: Kohana_Controller->execute()
#11 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Calculator))
#12 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 Z:\home\avtokoh.local\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#14 Z:\home\avtokoh.local\www\index.php(118): Kohana_Request->execute()
#15 {main} in Z:\home\avtokoh.local\www\modules\orm\classes\Kohana\ORM.php:600
2012-11-07 03:03:01 --- CRITICAL: Kohana_Exception [ 0 ]: The id_series property does not exist in the Model_Maintenance class ~ MODPATH\orm\classes\Kohana\ORM.php [ 684 ] in Z:\home\avtokoh.local\www\modules\orm\classes\Kohana\ORM.php:600
2012-11-07 03:03:01 --- DEBUG: #0 Z:\home\avtokoh.local\www\modules\orm\classes\Kohana\ORM.php(600): Kohana_ORM->get('id_series')
#1 Z:\home\avtokoh.local\www\application\views\calculator.result.php(3): Kohana_ORM->__get('id_series')
#2 Z:\home\avtokoh.local\www\system\classes\Kohana\View.php(61): include('Z:\home\avtokoh...')
#3 Z:\home\avtokoh.local\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\avtokoh...', Array)
#4 Z:\home\avtokoh.local\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#5 Z:\home\avtokoh.local\www\application\views\main.php(55): Kohana_View->__toString()
#6 Z:\home\avtokoh.local\www\system\classes\Kohana\View.php(61): include('Z:\home\avtokoh...')
#7 Z:\home\avtokoh.local\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\avtokoh...', Array)
#8 Z:\home\avtokoh.local\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#9 Z:\home\avtokoh.local\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#10 [internal function]: Kohana_Controller->execute()
#11 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Calculator))
#12 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 Z:\home\avtokoh.local\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#14 Z:\home\avtokoh.local\www\index.php(118): Kohana_Request->execute()
#15 {main} in Z:\home\avtokoh.local\www\modules\orm\classes\Kohana\ORM.php:600
2012-11-07 03:20:03 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\main.php [ 55 ] in Z:\home\avtokoh.local\www\application\views\main.php:55
2012-11-07 03:20:03 --- DEBUG: #0 Z:\home\avtokoh.local\www\application\views\main.php(55): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\avtokoh...', 55, Array)
#1 Z:\home\avtokoh.local\www\system\classes\Kohana\View.php(61): include('Z:\home\avtokoh...')
#2 Z:\home\avtokoh.local\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\avtokoh...', Array)
#3 Z:\home\avtokoh.local\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 Z:\home\avtokoh.local\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Calculator))
#7 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\avtokoh.local\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\avtokoh.local\www\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\avtokoh.local\www\application\views\main.php:55
2012-11-07 03:46:41 --- CRITICAL: Kohana_Exception [ 0 ]: The name property does not exist in the Model_Maintenance class ~ MODPATH\orm\classes\Kohana\ORM.php [ 684 ] in Z:\home\avtokoh.local\www\modules\orm\classes\Kohana\ORM.php:600
2012-11-07 03:46:41 --- DEBUG: #0 Z:\home\avtokoh.local\www\modules\orm\classes\Kohana\ORM.php(600): Kohana_ORM->get('name')
#1 Z:\home\avtokoh.local\www\application\classes\Controller\ajax.php(87): Kohana_ORM->__get('name')
#2 Z:\home\avtokoh.local\www\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_labors()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#5 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\avtokoh.local\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\avtokoh.local\www\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\avtokoh.local\www\modules\orm\classes\Kohana\ORM.php:600
2012-11-07 03:47:59 --- CRITICAL: Kohana_Exception [ 0 ]: The id property does not exist in the Model_Maintenance class ~ MODPATH\orm\classes\Kohana\ORM.php [ 684 ] in Z:\home\avtokoh.local\www\modules\orm\classes\Kohana\ORM.php:600
2012-11-07 03:47:59 --- DEBUG: #0 Z:\home\avtokoh.local\www\modules\orm\classes\Kohana\ORM.php(600): Kohana_ORM->get('id')
#1 Z:\home\avtokoh.local\www\application\classes\Controller\ajax.php(87): Kohana_ORM->__get('id')
#2 Z:\home\avtokoh.local\www\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_labors()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#5 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\avtokoh.local\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\avtokoh.local\www\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\avtokoh.local\www\modules\orm\classes\Kohana\ORM.php:600
2012-11-07 03:48:00 --- CRITICAL: Kohana_Exception [ 0 ]: The id property does not exist in the Model_Maintenance class ~ MODPATH\orm\classes\Kohana\ORM.php [ 684 ] in Z:\home\avtokoh.local\www\modules\orm\classes\Kohana\ORM.php:600
2012-11-07 03:48:00 --- DEBUG: #0 Z:\home\avtokoh.local\www\modules\orm\classes\Kohana\ORM.php(600): Kohana_ORM->get('id')
#1 Z:\home\avtokoh.local\www\application\classes\Controller\ajax.php(87): Kohana_ORM->__get('id')
#2 Z:\home\avtokoh.local\www\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_labors()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#5 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\avtokoh.local\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\avtokoh.local\www\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\avtokoh.local\www\modules\orm\classes\Kohana\ORM.php:600
2012-11-07 03:50:14 --- CRITICAL: Kohana_Exception [ 0 ]: The name property does not exist in the Model_Maintenance class ~ MODPATH\orm\classes\Kohana\ORM.php [ 684 ] in Z:\home\avtokoh.local\www\modules\orm\classes\Kohana\ORM.php:600
2012-11-07 03:50:14 --- DEBUG: #0 Z:\home\avtokoh.local\www\modules\orm\classes\Kohana\ORM.php(600): Kohana_ORM->get('name')
#1 Z:\home\avtokoh.local\www\application\classes\Controller\ajax.php(87): Kohana_ORM->__get('name')
#2 Z:\home\avtokoh.local\www\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_labors()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#5 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\avtokoh.local\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\avtokoh.local\www\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\avtokoh.local\www\modules\orm\classes\Kohana\ORM.php:600
2012-11-07 03:50:15 --- CRITICAL: Kohana_Exception [ 0 ]: The name property does not exist in the Model_Maintenance class ~ MODPATH\orm\classes\Kohana\ORM.php [ 684 ] in Z:\home\avtokoh.local\www\modules\orm\classes\Kohana\ORM.php:600
2012-11-07 03:50:15 --- DEBUG: #0 Z:\home\avtokoh.local\www\modules\orm\classes\Kohana\ORM.php(600): Kohana_ORM->get('name')
#1 Z:\home\avtokoh.local\www\application\classes\Controller\ajax.php(87): Kohana_ORM->__get('name')
#2 Z:\home\avtokoh.local\www\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_labors()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#5 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\avtokoh.local\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\avtokoh.local\www\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\avtokoh.local\www\modules\orm\classes\Kohana\ORM.php:600
2012-11-07 03:50:15 --- CRITICAL: Kohana_Exception [ 0 ]: The name property does not exist in the Model_Maintenance class ~ MODPATH\orm\classes\Kohana\ORM.php [ 684 ] in Z:\home\avtokoh.local\www\modules\orm\classes\Kohana\ORM.php:600
2012-11-07 03:50:15 --- DEBUG: #0 Z:\home\avtokoh.local\www\modules\orm\classes\Kohana\ORM.php(600): Kohana_ORM->get('name')
#1 Z:\home\avtokoh.local\www\application\classes\Controller\ajax.php(87): Kohana_ORM->__get('name')
#2 Z:\home\avtokoh.local\www\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_labors()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#5 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\avtokoh.local\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\avtokoh.local\www\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\avtokoh.local\www\modules\orm\classes\Kohana\ORM.php:600
2012-11-07 03:50:29 --- CRITICAL: ErrorException [ 1 ]: Cannot use object of type Model_Maintenance as array ~ APPPATH\classes\Controller\ajax.php [ 87 ] in :
2012-11-07 03:50:29 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-07 03:50:31 --- CRITICAL: ErrorException [ 1 ]: Cannot use object of type Model_Maintenance as array ~ APPPATH\classes\Controller\ajax.php [ 87 ] in :
2012-11-07 03:50:31 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-07 03:53:03 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'modification.id_modification' in 'where clause' [ SELECT labor.name, maintenance.id_modification FROM `maintenance` JOIN `labor` ON (`maintenance`.`id_labor` = `labor`.`id`) WHERE `modification`.`id_modification` = 3981 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\avtokoh.local\www\modules\database\classes\Kohana\Database\Query.php:251
2012-11-07 03:53:03 --- DEBUG: #0 Z:\home\avtokoh.local\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT labor.na...', false, Array)
#1 Z:\home\avtokoh.local\www\application\classes\Controller\ajax.php(88): Kohana_Database_Query->execute()
#2 Z:\home\avtokoh.local\www\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_labors()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#5 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\avtokoh.local\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\avtokoh.local\www\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\avtokoh.local\www\modules\database\classes\Kohana\Database\Query.php:251
2012-11-07 03:53:26 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: labors ~ APPPATH\classes\Controller\ajax.php [ 93 ] in Z:\home\avtokoh.local\www\application\classes\Controller\ajax.php:93
2012-11-07 03:53:26 --- DEBUG: #0 Z:\home\avtokoh.local\www\application\classes\Controller\ajax.php(93): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\avtokoh...', 93, Array)
#1 Z:\home\avtokoh.local\www\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_labors()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\avtokoh.local\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\avtokoh.local\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\avtokoh.local\www\application\classes\Controller\ajax.php:93
2012-11-07 05:22:03 --- CRITICAL: ErrorException [ 8 ]: Undefined index: name ~ APPPATH\classes\Controller\ajax.php [ 92 ] in Z:\home\avtokoh.local\www\application\classes\Controller\ajax.php:92
2012-11-07 05:22:03 --- DEBUG: #0 Z:\home\avtokoh.local\www\application\classes\Controller\ajax.php(92): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\avtokoh...', 92, Array)
#1 Z:\home\avtokoh.local\www\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_labors()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\avtokoh.local\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\avtokoh.local\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\avtokoh.local\www\application\classes\Controller\ajax.php:92
2012-11-07 05:25:19 --- CRITICAL: ErrorException [ 8 ]: Undefined index: id_series ~ APPPATH\views\calculator.result.php [ 5 ] in Z:\home\avtokoh.local\www\application\views\calculator.result.php:5
2012-11-07 05:25:19 --- DEBUG: #0 Z:\home\avtokoh.local\www\application\views\calculator.result.php(5): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\avtokoh...', 5, Array)
#1 Z:\home\avtokoh.local\www\system\classes\Kohana\View.php(61): include('Z:\home\avtokoh...')
#2 Z:\home\avtokoh.local\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\avtokoh...', Array)
#3 Z:\home\avtokoh.local\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\avtokoh.local\www\application\views\main.php(55): Kohana_View->__toString()
#5 Z:\home\avtokoh.local\www\system\classes\Kohana\View.php(61): include('Z:\home\avtokoh...')
#6 Z:\home\avtokoh.local\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\avtokoh...', Array)
#7 Z:\home\avtokoh.local\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\avtokoh.local\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Calculator))
#11 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\avtokoh.local\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\avtokoh.local\www\index.php(118): Kohana_Request->execute()
#14 {main} in Z:\home\avtokoh.local\www\application\views\calculator.result.php:5
2012-11-07 05:27:27 --- CRITICAL: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\views\calculator.result.php [ 4 ] in Z:\home\avtokoh.local\www\application\views\calculator.result.php:4
2012-11-07 05:27:27 --- DEBUG: #0 Z:\home\avtokoh.local\www\application\views\calculator.result.php(4): Kohana_Core::error_handler(8, 'Trying to get p...', 'Z:\home\avtokoh...', 4, Array)
#1 Z:\home\avtokoh.local\www\system\classes\Kohana\View.php(61): include('Z:\home\avtokoh...')
#2 Z:\home\avtokoh.local\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\avtokoh...', Array)
#3 Z:\home\avtokoh.local\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\avtokoh.local\www\application\views\main.php(55): Kohana_View->__toString()
#5 Z:\home\avtokoh.local\www\system\classes\Kohana\View.php(61): include('Z:\home\avtokoh...')
#6 Z:\home\avtokoh.local\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\avtokoh...', Array)
#7 Z:\home\avtokoh.local\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\avtokoh.local\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Calculator))
#11 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\avtokoh.local\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\avtokoh.local\www\index.php(118): Kohana_Request->execute()
#14 {main} in Z:\home\avtokoh.local\www\application\views\calculator.result.php:4
2012-11-07 05:27:53 --- CRITICAL: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\views\calculator.result.php [ 5 ] in Z:\home\avtokoh.local\www\application\views\calculator.result.php:5
2012-11-07 05:27:53 --- DEBUG: #0 Z:\home\avtokoh.local\www\application\views\calculator.result.php(5): Kohana_Core::error_handler(8, 'Trying to get p...', 'Z:\home\avtokoh...', 5, Array)
#1 Z:\home\avtokoh.local\www\system\classes\Kohana\View.php(61): include('Z:\home\avtokoh...')
#2 Z:\home\avtokoh.local\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\avtokoh...', Array)
#3 Z:\home\avtokoh.local\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\avtokoh.local\www\application\views\main.php(55): Kohana_View->__toString()
#5 Z:\home\avtokoh.local\www\system\classes\Kohana\View.php(61): include('Z:\home\avtokoh...')
#6 Z:\home\avtokoh.local\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\avtokoh...', Array)
#7 Z:\home\avtokoh.local\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\avtokoh.local\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Calculator))
#11 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\avtokoh.local\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\avtokoh.local\www\index.php(118): Kohana_Request->execute()
#14 {main} in Z:\home\avtokoh.local\www\application\views\calculator.result.php:5
2012-11-07 06:27:16 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: brands ~ APPPATH\views\forms\form.calculator.php [ 3 ] in Z:\home\avtokoh.local\www\application\views\forms\form.calculator.php:3
2012-11-07 06:27:16 --- DEBUG: #0 Z:\home\avtokoh.local\www\application\views\forms\form.calculator.php(3): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\avtokoh...', 3, Array)
#1 Z:\home\avtokoh.local\www\system\classes\Kohana\View.php(61): include('Z:\home\avtokoh...')
#2 Z:\home\avtokoh.local\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\avtokoh...', Array)
#3 Z:\home\avtokoh.local\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\avtokoh.local\www\application\views\calculator.php(1): Kohana_View->__toString()
#5 Z:\home\avtokoh.local\www\system\classes\Kohana\View.php(61): include('Z:\home\avtokoh...')
#6 Z:\home\avtokoh.local\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\avtokoh...', Array)
#7 Z:\home\avtokoh.local\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#8 Z:\home\avtokoh.local\www\application\views\main.php(55): Kohana_View->__toString()
#9 Z:\home\avtokoh.local\www\system\classes\Kohana\View.php(61): include('Z:\home\avtokoh...')
#10 Z:\home\avtokoh.local\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\avtokoh...', Array)
#11 Z:\home\avtokoh.local\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#12 Z:\home\avtokoh.local\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#13 [internal function]: Kohana_Controller->execute()
#14 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Calculator))
#15 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#16 Z:\home\avtokoh.local\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#17 Z:\home\avtokoh.local\www\index.php(118): Kohana_Request->execute()
#18 {main} in Z:\home\avtokoh.local\www\application\views\forms\form.calculator.php:3
2012-11-07 06:34:41 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: brands ~ APPPATH\classes\Controller\calculator.php [ 46 ] in Z:\home\avtokoh.local\www\application\classes\Controller\calculator.php:46
2012-11-07 06:34:41 --- DEBUG: #0 Z:\home\avtokoh.local\www\application\classes\Controller\calculator.php(46): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\avtokoh...', 46, Array)
#1 Z:\home\avtokoh.local\www\system\classes\Kohana\Controller.php(84): Controller_Calculator->action_result()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Calculator))
#4 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\avtokoh.local\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\avtokoh.local\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\avtokoh.local\www\application\classes\Controller\calculator.php:46
2012-11-07 06:35:10 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: modification ~ APPPATH\views\calculator.result.php [ 1 ] in Z:\home\avtokoh.local\www\application\views\calculator.result.php:1
2012-11-07 06:35:10 --- DEBUG: #0 Z:\home\avtokoh.local\www\application\views\calculator.result.php(1): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\avtokoh...', 1, Array)
#1 Z:\home\avtokoh.local\www\system\classes\Kohana\View.php(61): include('Z:\home\avtokoh...')
#2 Z:\home\avtokoh.local\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\avtokoh...', Array)
#3 Z:\home\avtokoh.local\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\avtokoh.local\www\application\views\main.php(55): Kohana_View->__toString()
#5 Z:\home\avtokoh.local\www\system\classes\Kohana\View.php(61): include('Z:\home\avtokoh...')
#6 Z:\home\avtokoh.local\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\avtokoh...', Array)
#7 Z:\home\avtokoh.local\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\avtokoh.local\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Calculator))
#11 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\avtokoh.local\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\avtokoh.local\www\index.php(118): Kohana_Request->execute()
#14 {main} in Z:\home\avtokoh.local\www\application\views\calculator.result.php:1
2012-11-07 06:45:42 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: selected ~ APPPATH\classes\Controller\ajax.php [ 20 ] in Z:\home\avtokoh.local\www\application\classes\Controller\ajax.php:20
2012-11-07 06:45:42 --- DEBUG: #0 Z:\home\avtokoh.local\www\application\classes\Controller\ajax.php(20): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\avtokoh...', 20, Array)
#1 Z:\home\avtokoh.local\www\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_brand()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\avtokoh.local\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\avtokoh.local\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\avtokoh.local\www\application\classes\Controller\ajax.php:20
2012-11-07 23:23:15 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'OR modification.year IS NULL)
          AND modification.id_series = 
        ' at line 12 [ 
        SELECT DISTINCT    
        modification.id_series AS id_series
        , modification.id AS id
        , modification.year AS year
        , maintenance.number AS number
        FROM
        maintenance
        INNER JOIN modification
        ON maintenance.id_modification = modification.id
        WHERE
          (modification.year = 
          OR modification.year IS NULL)
          AND modification.id_series = 
          AND maintenance.number = 
         ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\avtokoh.local\www\modules\database\classes\Kohana\Database\Query.php:251
2012-11-07 23:23:15 --- DEBUG: #0 Z:\home\avtokoh.local\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, '??        SELEC...', false, Array)
#1 Z:\home\avtokoh.local\www\application\classes\Model\modification.php(38): Kohana_Database_Query->execute()
#2 Z:\home\avtokoh.local\www\application\classes\Controller\calculator.php(43): Model_Modification->getModification('', NULL, '')
#3 Z:\home\avtokoh.local\www\system\classes\Kohana\Controller.php(84): Controller_Calculator->action_result()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Calculator))
#6 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\avtokoh.local\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\avtokoh.local\www\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\avtokoh.local\www\modules\database\classes\Kohana\Database\Query.php:251
2012-11-07 23:30:19 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: id_brand ~ APPPATH\views\forms\form.calculator.php [ 17 ] in Z:\home\avtokoh.local\www\application\views\forms\form.calculator.php:17
2012-11-07 23:30:19 --- DEBUG: #0 Z:\home\avtokoh.local\www\application\views\forms\form.calculator.php(17): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\avtokoh...', 17, Array)
#1 Z:\home\avtokoh.local\www\system\classes\Kohana\View.php(61): include('Z:\home\avtokoh...')
#2 Z:\home\avtokoh.local\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\avtokoh...', Array)
#3 Z:\home\avtokoh.local\www\application\classes\Controller\calculator.php(26): Kohana_View->render()
#4 Z:\home\avtokoh.local\www\system\classes\Kohana\Controller.php(84): Controller_Calculator->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Calculator))
#7 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\avtokoh.local\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\avtokoh.local\www\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\avtokoh.local\www\application\views\forms\form.calculator.php:17
2012-11-07 23:30:20 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: id_brand ~ APPPATH\views\forms\form.calculator.php [ 17 ] in Z:\home\avtokoh.local\www\application\views\forms\form.calculator.php:17
2012-11-07 23:30:20 --- DEBUG: #0 Z:\home\avtokoh.local\www\application\views\forms\form.calculator.php(17): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\avtokoh...', 17, Array)
#1 Z:\home\avtokoh.local\www\system\classes\Kohana\View.php(61): include('Z:\home\avtokoh...')
#2 Z:\home\avtokoh.local\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\avtokoh...', Array)
#3 Z:\home\avtokoh.local\www\application\classes\Controller\calculator.php(26): Kohana_View->render()
#4 Z:\home\avtokoh.local\www\system\classes\Kohana\Controller.php(84): Controller_Calculator->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Calculator))
#7 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\avtokoh.local\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\avtokoh.local\www\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\avtokoh.local\www\application\views\forms\form.calculator.php:17
2012-11-07 23:33:43 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_ECHO ~ APPPATH\views\forms\form.calculator.php [ 15 ] in :
2012-11-07 23:33:43 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-07 23:33:44 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_ECHO ~ APPPATH\views\forms\form.calculator.php [ 15 ] in :
2012-11-07 23:33:44 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-07 23:34:10 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: id_brand ~ APPPATH\views\forms\form.calculator.php [ 15 ] in Z:\home\avtokoh.local\www\application\views\forms\form.calculator.php:15
2012-11-07 23:34:10 --- DEBUG: #0 Z:\home\avtokoh.local\www\application\views\forms\form.calculator.php(15): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\avtokoh...', 15, Array)
#1 Z:\home\avtokoh.local\www\system\classes\Kohana\View.php(61): include('Z:\home\avtokoh...')
#2 Z:\home\avtokoh.local\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\avtokoh...', Array)
#3 Z:\home\avtokoh.local\www\application\classes\Controller\calculator.php(26): Kohana_View->render()
#4 Z:\home\avtokoh.local\www\system\classes\Kohana\Controller.php(84): Controller_Calculator->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Calculator))
#7 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\avtokoh.local\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\avtokoh.local\www\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\avtokoh.local\www\application\views\forms\form.calculator.php:15