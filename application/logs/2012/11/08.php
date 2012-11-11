<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2012-11-08 00:17:27 --- CRITICAL: Kohana_Exception [ 0 ]: Method find() cannot be called on loaded objects ~ MODPATH\orm\classes\Kohana\ORM.php [ 963 ] in Z:\home\avtokoh.local\www\application\classes\Controller\calculator.php:42
2012-11-08 00:17:27 --- DEBUG: #0 Z:\home\avtokoh.local\www\application\classes\Controller\calculator.php(42): Kohana_ORM->find()
#1 Z:\home\avtokoh.local\www\system\classes\Kohana\Controller.php(84): Controller_Calculator->action_result()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Calculator))
#4 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\avtokoh.local\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\avtokoh.local\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\avtokoh.local\www\application\classes\Controller\calculator.php:42
2012-11-08 00:20:16 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: model ~ APPPATH\classes\Controller\calculator.php [ 62 ] in Z:\home\avtokoh.local\www\application\classes\Controller\calculator.php:62
2012-11-08 00:20:16 --- DEBUG: #0 Z:\home\avtokoh.local\www\application\classes\Controller\calculator.php(62): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\avtokoh...', 62, Array)
#1 Z:\home\avtokoh.local\www\system\classes\Kohana\Controller.php(84): Controller_Calculator->action_result()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Calculator))
#4 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\avtokoh.local\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\avtokoh.local\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\avtokoh.local\www\application\classes\Controller\calculator.php:62
2012-11-08 00:35:31 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ' modification.id AS id
        , modification.year AS year
        , maintenan' at line 5 [ 
        SELECT DISTINCT    
        modification.id_series AS id_series,
        modification.modification_without_transmission AS name_wt,
        modification.transmission AS transmission,
        , modification.id AS id
        , modification.year AS year
        , maintenance.number AS number
        FROM
        maintenance
        INNER JOIN modification
        ON maintenance.id_modification = modification.id
        WHERE
          (modification.year = 2002
          OR modification.year IS NULL)
          AND modification.id_series = 1735
          AND maintenance.number = 10
         ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\avtokoh.local\www\modules\database\classes\Kohana\Database\Query.php:251
2012-11-08 00:35:31 --- DEBUG: #0 Z:\home\avtokoh.local\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, '??        SELEC...', false, Array)
#1 Z:\home\avtokoh.local\www\application\classes\Model\modification.php(40): Kohana_Database_Query->execute()
#2 Z:\home\avtokoh.local\www\application\classes\Controller\calculator.php(45): Model_Modification->getModification('2002', '1735', '10')
#3 Z:\home\avtokoh.local\www\system\classes\Kohana\Controller.php(84): Controller_Calculator->action_result()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Calculator))
#6 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\avtokoh.local\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\avtokoh.local\www\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\avtokoh.local\www\modules\database\classes\Kohana\Database\Query.php:251
2012-11-08 00:59:10 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'id_modificaton' in 'where clause' [ SELECT `price`.`id_business` AS `id_business`, `price`.`id_modification` AS `id_modification`, `price`.`number` AS `number`, `price`.`price_value` AS `price_value` FROM `price` AS `price` WHERE `id_modificaton` = 3047 AND `number` = 7 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\avtokoh.local\www\modules\database\classes\Kohana\Database\Query.php:251
2012-11-08 00:59:10 --- DEBUG: #0 Z:\home\avtokoh.local\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `price`....', 'Model_Price', Array)
#1 Z:\home\avtokoh.local\www\modules\orm\classes\Kohana\ORM.php(1060): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 Z:\home\avtokoh.local\www\modules\orm\classes\Kohana\ORM.php(1001): Kohana_ORM->_load_result(true)
#3 Z:\home\avtokoh.local\www\application\classes\Controller\ajax.php(154): Kohana_ORM->find_all()
#4 Z:\home\avtokoh.local\www\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_price()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#7 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\avtokoh.local\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\avtokoh.local\www\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\avtokoh.local\www\modules\database\classes\Kohana\Database\Query.php:251
2012-11-08 00:59:32 --- CRITICAL: ErrorException [ 1 ]: Cannot use object of type Model_Price as array ~ APPPATH\classes\Controller\ajax.php [ 160 ] in :
2012-11-08 00:59:32 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-08 01:02:54 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: calculator_form ~ APPPATH\views\calculator.php [ 1 ] in Z:\home\avtokoh.local\www\application\views\calculator.php:1
2012-11-08 01:02:54 --- DEBUG: #0 Z:\home\avtokoh.local\www\application\views\calculator.php(1): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\avtokoh...', 1, Array)
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
#14 {main} in Z:\home\avtokoh.local\www\application\views\calculator.php:1
2012-11-08 01:02:57 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: calculator_form ~ APPPATH\views\calculator.php [ 1 ] in Z:\home\avtokoh.local\www\application\views\calculator.php:1
2012-11-08 01:02:57 --- DEBUG: #0 Z:\home\avtokoh.local\www\application\views\calculator.php(1): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\avtokoh...', 1, Array)
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
#14 {main} in Z:\home\avtokoh.local\www\application\views\calculator.php:1
2012-11-08 01:03:09 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: calculator_form ~ APPPATH\views\calculator.php [ 1 ] in Z:\home\avtokoh.local\www\application\views\calculator.php:1
2012-11-08 01:03:09 --- DEBUG: #0 Z:\home\avtokoh.local\www\application\views\calculator.php(1): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\avtokoh...', 1, Array)
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
#14 {main} in Z:\home\avtokoh.local\www\application\views\calculator.php:1
2012-11-08 01:03:15 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: calculator_form ~ APPPATH\views\calculator.php [ 1 ] in Z:\home\avtokoh.local\www\application\views\calculator.php:1
2012-11-08 01:03:15 --- DEBUG: #0 Z:\home\avtokoh.local\www\application\views\calculator.php(1): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\avtokoh...', 1, Array)
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
#14 {main} in Z:\home\avtokoh.local\www\application\views\calculator.php:1
2012-11-08 01:03:17 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: calculator_form ~ APPPATH\views\calculator.php [ 1 ] in Z:\home\avtokoh.local\www\application\views\calculator.php:1
2012-11-08 01:03:17 --- DEBUG: #0 Z:\home\avtokoh.local\www\application\views\calculator.php(1): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\avtokoh...', 1, Array)
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
#14 {main} in Z:\home\avtokoh.local\www\application\views\calculator.php:1
2012-11-08 01:03:17 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: calculator_form ~ APPPATH\views\calculator.php [ 1 ] in Z:\home\avtokoh.local\www\application\views\calculator.php:1
2012-11-08 01:03:17 --- DEBUG: #0 Z:\home\avtokoh.local\www\application\views\calculator.php(1): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\avtokoh...', 1, Array)
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
#14 {main} in Z:\home\avtokoh.local\www\application\views\calculator.php:1
2012-11-08 01:03:45 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: calculator_form ~ APPPATH\views\calculator.php [ 1 ] in Z:\home\avtokoh.local\www\application\views\calculator.php:1
2012-11-08 01:03:45 --- DEBUG: #0 Z:\home\avtokoh.local\www\application\views\calculator.php(1): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\avtokoh...', 1, Array)
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
#14 {main} in Z:\home\avtokoh.local\www\application\views\calculator.php:1
2012-11-08 01:04:21 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\main.php [ 55 ] in Z:\home\avtokoh.local\www\application\views\main.php:55
2012-11-08 01:04:21 --- DEBUG: #0 Z:\home\avtokoh.local\www\application\views\main.php(55): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\avtokoh...', 55, Array)
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
2012-11-08 01:15:22 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Database_MySQL_Result::loaded() ~ APPPATH\classes\Controller\ajax.php [ 154 ] in :
2012-11-08 01:15:22 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-08 01:54:40 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: id_modificaton ~ APPPATH\classes\Controller\calculator.php [ 50 ] in Z:\home\avtokoh.local\www\application\classes\Controller\calculator.php:50
2012-11-08 01:54:40 --- DEBUG: #0 Z:\home\avtokoh.local\www\application\classes\Controller\calculator.php(50): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\avtokoh...', 50, Array)
#1 Z:\home\avtokoh.local\www\system\classes\Kohana\Controller.php(84): Controller_Calculator->action_result()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Calculator))
#4 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\avtokoh.local\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\avtokoh.local\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\avtokoh.local\www\application\classes\Controller\calculator.php:50
2012-11-08 02:01:13 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'mod FROM `maintenance` JOIN `labor` ON (`maintenance`.`id_labor` = `labor`.`id`)' at line 1 [ SELECT labor.name AS name, maintenance.id_modification AS mod FROM `maintenance` JOIN `labor` ON (`maintenance`.`id_labor` = `labor`.`id`) JOIN `modification` ON (`maintenance`.`id_modification` = `modification`.`id`) WHERE `modification`.`id_series` = '1730' AND `maintenance`.`number` = '4' ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\avtokoh.local\www\modules\database\classes\Kohana\Database\Query.php:251
2012-11-08 02:01:13 --- DEBUG: #0 Z:\home\avtokoh.local\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT labor.na...', false, Array)
#1 Z:\home\avtokoh.local\www\application\classes\Model\labor.php(22): Kohana_Database_Query->execute()
#2 Z:\home\avtokoh.local\www\application\classes\Controller\calculator.php(51): Model_Labor->getLabors('1730', '4')
#3 Z:\home\avtokoh.local\www\system\classes\Kohana\Controller.php(84): Controller_Calculator->action_result()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Calculator))
#6 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\avtokoh.local\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\avtokoh.local\www\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\avtokoh.local\www\modules\database\classes\Kohana\Database\Query.php:251
2012-11-08 02:01:42 --- CRITICAL: ErrorException [ 8 ]: Undefined index: mod ~ APPPATH\views\calculator.result.php [ 37 ] in Z:\home\avtokoh.local\www\application\views\calculator.result.php:37
2012-11-08 02:01:42 --- DEBUG: #0 Z:\home\avtokoh.local\www\application\views\calculator.result.php(37): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\avtokoh...', 37, Array)
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
#14 {main} in Z:\home\avtokoh.local\www\application\views\calculator.result.php:37
2012-11-08 02:01:58 --- CRITICAL: ErrorException [ 8 ]: Undefined index: mod ~ APPPATH\views\calculator.result.php [ 37 ] in Z:\home\avtokoh.local\www\application\views\calculator.result.php:37
2012-11-08 02:01:58 --- DEBUG: #0 Z:\home\avtokoh.local\www\application\views\calculator.result.php(37): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\avtokoh...', 37, Array)
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
#14 {main} in Z:\home\avtokoh.local\www\application\views\calculator.result.php:37
2012-11-08 02:08:45 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'modification.id' in 'field list' [ SELECT labor.name AS name, modification.id AS mid FROM `maintenance` JOIN `labor` ON (`maintenance`.`id_labor` = `labor`.`id`) WHERE `modification`.`id` = '3862' AND `maintenance`.`number` = '4' ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\avtokoh.local\www\modules\database\classes\Kohana\Database\Query.php:251
2012-11-08 02:08:45 --- DEBUG: #0 Z:\home\avtokoh.local\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT labor.na...', false, Array)
#1 Z:\home\avtokoh.local\www\application\classes\Model\labor.php(20): Kohana_Database_Query->execute()
#2 Z:\home\avtokoh.local\www\application\classes\Controller\calculator.php(55): Model_Labor->getLabors('3862', '4')
#3 Z:\home\avtokoh.local\www\system\classes\Kohana\Controller.php(84): Controller_Calculator->action_result()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Calculator))
#6 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\avtokoh.local\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\avtokoh.local\www\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\avtokoh.local\www\modules\database\classes\Kohana\Database\Query.php:251
2012-11-08 02:09:36 --- CRITICAL: ErrorException [ 1 ]: Cannot use object of type Model_Modification as array ~ APPPATH\classes\Controller\calculator.php [ 55 ] in :
2012-11-08 02:09:36 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-08 02:10:19 --- CRITICAL: ErrorException [ 1 ]: Cannot use object of type Model_Modification as array ~ APPPATH\classes\Controller\calculator.php [ 55 ] in :
2012-11-08 02:10:19 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-08 02:10:45 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ']' ~ APPPATH\classes\Controller\calculator.php [ 55 ] in :
2012-11-08 02:10:45 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-08 02:10:55 --- CRITICAL: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\Controller\calculator.php [ 55 ] in Z:\home\avtokoh.local\www\application\classes\Controller\calculator.php:55
2012-11-08 02:10:55 --- DEBUG: #0 Z:\home\avtokoh.local\www\application\classes\Controller\calculator.php(55): Kohana_Core::error_handler(8, 'Trying to get p...', 'Z:\home\avtokoh...', 55, Array)
#1 Z:\home\avtokoh.local\www\system\classes\Kohana\Controller.php(84): Controller_Calculator->action_result()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Calculator))
#4 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\avtokoh.local\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\avtokoh.local\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\avtokoh.local\www\application\classes\Controller\calculator.php:55
2012-11-08 02:11:13 --- CRITICAL: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\Controller\calculator.php [ 55 ] in Z:\home\avtokoh.local\www\application\classes\Controller\calculator.php:55
2012-11-08 02:11:13 --- DEBUG: #0 Z:\home\avtokoh.local\www\application\classes\Controller\calculator.php(55): Kohana_Core::error_handler(8, 'Trying to get p...', 'Z:\home\avtokoh...', 55, Array)
#1 Z:\home\avtokoh.local\www\system\classes\Kohana\Controller.php(84): Controller_Calculator->action_result()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Calculator))
#4 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\avtokoh.local\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\avtokoh.local\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\avtokoh.local\www\application\classes\Controller\calculator.php:55
2012-11-08 02:12:41 --- CRITICAL: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\Controller\calculator.php [ 55 ] in Z:\home\avtokoh.local\www\application\classes\Controller\calculator.php:55
2012-11-08 02:12:41 --- DEBUG: #0 Z:\home\avtokoh.local\www\application\classes\Controller\calculator.php(55): Kohana_Core::error_handler(8, 'Trying to get p...', 'Z:\home\avtokoh...', 55, Array)
#1 Z:\home\avtokoh.local\www\system\classes\Kohana\Controller.php(84): Controller_Calculator->action_result()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Calculator))
#4 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\avtokoh.local\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\avtokoh.local\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\avtokoh.local\www\application\classes\Controller\calculator.php:55
2012-11-08 02:12:46 --- CRITICAL: ErrorException [ 1 ]: Cannot use object of type Model_Modification as array ~ APPPATH\classes\Controller\calculator.php [ 55 ] in :
2012-11-08 02:12:46 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-08 02:13:01 --- CRITICAL: ErrorException [ 1 ]: Cannot use object of type Model_Modification as array ~ APPPATH\classes\Controller\calculator.php [ 55 ] in :
2012-11-08 02:13:01 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-08 02:13:20 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: test ~ APPPATH\views\calculator.result.php [ 36 ] in Z:\home\avtokoh.local\www\application\views\calculator.result.php:36
2012-11-08 02:13:20 --- DEBUG: #0 Z:\home\avtokoh.local\www\application\views\calculator.result.php(36): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\avtokoh...', 36, Array)
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
#14 {main} in Z:\home\avtokoh.local\www\application\views\calculator.result.php:36
2012-11-08 02:13:33 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: test ~ APPPATH\views\calculator.result.php [ 36 ] in Z:\home\avtokoh.local\www\application\views\calculator.result.php:36
2012-11-08 02:13:33 --- DEBUG: #0 Z:\home\avtokoh.local\www\application\views\calculator.result.php(36): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\avtokoh...', 36, Array)
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
#14 {main} in Z:\home\avtokoh.local\www\application\views\calculator.result.php:36
2012-11-08 02:13:45 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: test ~ APPPATH\views\calculator.result.php [ 36 ] in Z:\home\avtokoh.local\www\application\views\calculator.result.php:36
2012-11-08 02:13:45 --- DEBUG: #0 Z:\home\avtokoh.local\www\application\views\calculator.result.php(36): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\avtokoh...', 36, Array)
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
#14 {main} in Z:\home\avtokoh.local\www\application\views\calculator.result.php:36
2012-11-08 02:16:40 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: lab ~ APPPATH\classes\Controller\calculator.php [ 75 ] in Z:\home\avtokoh.local\www\application\classes\Controller\calculator.php:75
2012-11-08 02:16:40 --- DEBUG: #0 Z:\home\avtokoh.local\www\application\classes\Controller\calculator.php(75): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\avtokoh...', 75, Array)
#1 Z:\home\avtokoh.local\www\system\classes\Kohana\Controller.php(84): Controller_Calculator->action_result()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Calculator))
#4 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\avtokoh.local\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\avtokoh.local\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\avtokoh.local\www\application\classes\Controller\calculator.php:75
2012-11-08 02:16:54 --- CRITICAL: ErrorException [ 2 ]: mysql_data_seek() expects parameter 2 to be long, string given ~ MODPATH\database\classes\Kohana\Database\MySQL\Result.php [ 33 ] in :
2012-11-08 02:16:54 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'mysql_data_seek...', 'Z:\home\avtokoh...', 33, Array)
#1 Z:\home\avtokoh.local\www\modules\database\classes\Kohana\Database\MySQL\Result.php(33): mysql_data_seek(Resource id #100, 'id')
#2 Z:\home\avtokoh.local\www\modules\database\classes\Kohana\Database\Result.php(240): Kohana_Database_MySQL_Result->seek('id')
#3 Z:\home\avtokoh.local\www\application\views\calculator.result.php(37): Kohana_Database_Result->offsetGet('id')
#4 Z:\home\avtokoh.local\www\system\classes\Kohana\View.php(61): include('Z:\home\avtokoh...')
#5 Z:\home\avtokoh.local\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\avtokoh...', Array)
#6 Z:\home\avtokoh.local\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#7 Z:\home\avtokoh.local\www\application\views\main.php(55): Kohana_View->__toString()
#8 Z:\home\avtokoh.local\www\system\classes\Kohana\View.php(61): include('Z:\home\avtokoh...')
#9 Z:\home\avtokoh.local\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\avtokoh...', Array)
#10 Z:\home\avtokoh.local\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#11 Z:\home\avtokoh.local\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#12 [internal function]: Kohana_Controller->execute()
#13 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Calculator))
#14 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#15 Z:\home\avtokoh.local\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#16 Z:\home\avtokoh.local\www\index.php(118): Kohana_Request->execute()
#17 {main} in :
2012-11-08 02:17:23 --- CRITICAL: ErrorException [ 4096 ]: Object of class Database_MySQL_Result could not be converted to string ~ APPPATH\views\calculator.result.php [ 37 ] in Z:\home\avtokoh.local\www\application\views\calculator.result.php:37
2012-11-08 02:17:23 --- DEBUG: #0 Z:\home\avtokoh.local\www\application\views\calculator.result.php(37): Kohana_Core::error_handler(4096, 'Object of class...', 'Z:\home\avtokoh...', 37, Array)
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
#14 {main} in Z:\home\avtokoh.local\www\application\views\calculator.result.php:37
2012-11-08 02:17:36 --- CRITICAL: ErrorException [ 4096 ]: Object of class Database_MySQL_Result could not be converted to string ~ APPPATH\views\calculator.result.php [ 37 ] in Z:\home\avtokoh.local\www\application\views\calculator.result.php:37
2012-11-08 02:17:36 --- DEBUG: #0 Z:\home\avtokoh.local\www\application\views\calculator.result.php(37): Kohana_Core::error_handler(4096, 'Object of class...', 'Z:\home\avtokoh...', 37, Array)
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
#14 {main} in Z:\home\avtokoh.local\www\application\views\calculator.result.php:37
2012-11-08 02:20:16 --- CRITICAL: ErrorException [ 8 ]: Undefined index: name ~ APPPATH\views\calculator.result.php [ 40 ] in Z:\home\avtokoh.local\www\application\views\calculator.result.php:40
2012-11-08 02:20:16 --- DEBUG: #0 Z:\home\avtokoh.local\www\application\views\calculator.result.php(40): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\avtokoh...', 40, Array)
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
#14 {main} in Z:\home\avtokoh.local\www\application\views\calculator.result.php:40
2012-11-08 02:21:43 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: lab ~ APPPATH\views\calculator.result.php [ 40 ] in Z:\home\avtokoh.local\www\application\views\calculator.result.php:40
2012-11-08 02:21:43 --- DEBUG: #0 Z:\home\avtokoh.local\www\application\views\calculator.result.php(40): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\avtokoh...', 40, Array)
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
#14 {main} in Z:\home\avtokoh.local\www\application\views\calculator.result.php:40
2012-11-08 02:23:16 --- CRITICAL: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\views\calculator.result.php [ 39 ] in Z:\home\avtokoh.local\www\application\views\calculator.result.php:39
2012-11-08 02:23:16 --- DEBUG: #0 Z:\home\avtokoh.local\www\application\views\calculator.result.php(39): Kohana_Core::error_handler(2, 'Invalid argumen...', 'Z:\home\avtokoh...', 39, Array)
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
#14 {main} in Z:\home\avtokoh.local\www\application\views\calculator.result.php:39
2012-11-08 02:31:20 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH\views\calculator.result.php [ 29 ] in :
2012-11-08 02:31:20 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-08 02:39:17 --- CRITICAL: ErrorException [ 1 ]: Call to a member function where() on a non-object ~ APPPATH\classes\Controller\calculator.php [ 58 ] in :
2012-11-08 02:39:17 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-08 02:41:45 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ';', expecting ')' ~ APPPATH\classes\Controller\calculator.php [ 56 ] in :
2012-11-08 02:41:45 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-08 02:42:03 --- CRITICAL: ErrorException [ 8 ]: Undefined index: name ~ APPPATH\views\calculator.result.php [ 47 ] in Z:\home\avtokoh.local\www\application\views\calculator.result.php:47
2012-11-08 02:42:03 --- DEBUG: #0 Z:\home\avtokoh.local\www\application\views\calculator.result.php(47): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\avtokoh...', 47, Array)
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
#14 {main} in Z:\home\avtokoh.local\www\application\views\calculator.result.php:47
2012-11-08 02:50:11 --- CRITICAL: ErrorException [ 8 ]: Undefined index: price ~ APPPATH\views\calculator.result.php [ 44 ] in Z:\home\avtokoh.local\www\application\views\calculator.result.php:44
2012-11-08 02:50:11 --- DEBUG: #0 Z:\home\avtokoh.local\www\application\views\calculator.result.php(44): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\avtokoh...', 44, Array)
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
#14 {main} in Z:\home\avtokoh.local\www\application\views\calculator.result.php:44
2012-11-08 02:51:07 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH\views\calculator.result.php [ 43 ] in Z:\home\avtokoh.local\www\application\views\calculator.result.php:43
2012-11-08 02:51:07 --- DEBUG: #0 Z:\home\avtokoh.local\www\application\views\calculator.result.php(43): Kohana_Core::error_handler(8, 'Undefined offse...', 'Z:\home\avtokoh...', 43, Array)
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
#14 {main} in Z:\home\avtokoh.local\www\application\views\calculator.result.php:43
2012-11-08 02:51:18 --- CRITICAL: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\views\calculator.result.php [ 43 ] in Z:\home\avtokoh.local\www\application\views\calculator.result.php:43
2012-11-08 02:51:18 --- DEBUG: #0 Z:\home\avtokoh.local\www\application\views\calculator.result.php(43): Kohana_Core::error_handler(2, 'Invalid argumen...', 'Z:\home\avtokoh...', 43, Array)
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
#14 {main} in Z:\home\avtokoh.local\www\application\views\calculator.result.php:43
2012-11-08 02:51:57 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 3861 ~ APPPATH\views\calculator.result.php [ 41 ] in Z:\home\avtokoh.local\www\application\views\calculator.result.php:41
2012-11-08 02:51:57 --- DEBUG: #0 Z:\home\avtokoh.local\www\application\views\calculator.result.php(41): Kohana_Core::error_handler(8, 'Undefined offse...', 'Z:\home\avtokoh...', 41, Array)
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
#14 {main} in Z:\home\avtokoh.local\www\application\views\calculator.result.php:41
2012-11-08 02:54:31 --- CRITICAL: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\views\calculator.result.php [ 45 ] in Z:\home\avtokoh.local\www\application\views\calculator.result.php:45
2012-11-08 02:54:31 --- DEBUG: #0 Z:\home\avtokoh.local\www\application\views\calculator.result.php(45): Kohana_Core::error_handler(2, 'Invalid argumen...', 'Z:\home\avtokoh...', 45, Array)
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
#14 {main} in Z:\home\avtokoh.local\www\application\views\calculator.result.php:45
2012-11-08 02:54:43 --- CRITICAL: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\views\calculator.result.php [ 45 ] in Z:\home\avtokoh.local\www\application\views\calculator.result.php:45
2012-11-08 02:54:43 --- DEBUG: #0 Z:\home\avtokoh.local\www\application\views\calculator.result.php(45): Kohana_Core::error_handler(2, 'Invalid argumen...', 'Z:\home\avtokoh...', 45, Array)
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
#14 {main} in Z:\home\avtokoh.local\www\application\views\calculator.result.php:45
2012-11-08 02:56:00 --- CRITICAL: ErrorException [ 8 ]: Undefined index: price ~ APPPATH\views\calculator.result.php [ 44 ] in Z:\home\avtokoh.local\www\application\views\calculator.result.php:44
2012-11-08 02:56:00 --- DEBUG: #0 Z:\home\avtokoh.local\www\application\views\calculator.result.php(44): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\avtokoh...', 44, Array)
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
#14 {main} in Z:\home\avtokoh.local\www\application\views\calculator.result.php:44
2012-11-08 03:00:42 --- CRITICAL: ErrorException [ 8 ]: Undefined index: name ~ APPPATH\views\calculator.result.php [ 48 ] in Z:\home\avtokoh.local\www\application\views\calculator.result.php:48
2012-11-08 03:00:42 --- DEBUG: #0 Z:\home\avtokoh.local\www\application\views\calculator.result.php(48): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\avtokoh...', 48, Array)
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
#14 {main} in Z:\home\avtokoh.local\www\application\views\calculator.result.php:48
2012-11-08 03:01:44 --- CRITICAL: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\views\calculator.result.php [ 48 ] in Z:\home\avtokoh.local\www\application\views\calculator.result.php:48
2012-11-08 03:01:44 --- DEBUG: #0 Z:\home\avtokoh.local\www\application\views\calculator.result.php(48): Kohana_Core::error_handler(2, 'Invalid argumen...', 'Z:\home\avtokoh...', 48, Array)
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
#14 {main} in Z:\home\avtokoh.local\www\application\views\calculator.result.php:48
2012-11-08 03:09:44 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ',', expecting ']' ~ APPPATH\classes\Controller\calculator.php [ 56 ] in :
2012-11-08 03:09:44 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-08 03:10:02 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ',', expecting ']' ~ APPPATH\classes\Controller\calculator.php [ 56 ] in :
2012-11-08 03:10:02 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-08 03:12:20 --- CRITICAL: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\views\calculator.result.php [ 49 ] in Z:\home\avtokoh.local\www\application\views\calculator.result.php:49
2012-11-08 03:12:20 --- DEBUG: #0 Z:\home\avtokoh.local\www\application\views\calculator.result.php(49): Kohana_Core::error_handler(2, 'Invalid argumen...', 'Z:\home\avtokoh...', 49, Array)
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
#14 {main} in Z:\home\avtokoh.local\www\application\views\calculator.result.php:49
2012-11-08 03:12:53 --- CRITICAL: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\views\calculator.result.php [ 49 ] in Z:\home\avtokoh.local\www\application\views\calculator.result.php:49
2012-11-08 03:12:53 --- DEBUG: #0 Z:\home\avtokoh.local\www\application\views\calculator.result.php(49): Kohana_Core::error_handler(2, 'Invalid argumen...', 'Z:\home\avtokoh...', 49, Array)
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
#14 {main} in Z:\home\avtokoh.local\www\application\views\calculator.result.php:49
2012-11-08 03:18:17 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 3861 ~ APPPATH\views\calculator.result.php [ 39 ] in Z:\home\avtokoh.local\www\application\views\calculator.result.php:39
2012-11-08 03:18:17 --- DEBUG: #0 Z:\home\avtokoh.local\www\application\views\calculator.result.php(39): Kohana_Core::error_handler(8, 'Undefined offse...', 'Z:\home\avtokoh...', 39, Array)
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
#14 {main} in Z:\home\avtokoh.local\www\application\views\calculator.result.php:39
2012-11-08 03:24:00 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH\classes\Controller\calculator.php [ 60 ] in :
2012-11-08 03:24:00 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-08 03:24:08 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 3861 ~ APPPATH\views\calculator.result.php [ 39 ] in Z:\home\avtokoh.local\www\application\views\calculator.result.php:39
2012-11-08 03:24:08 --- DEBUG: #0 Z:\home\avtokoh.local\www\application\views\calculator.result.php(39): Kohana_Core::error_handler(8, 'Undefined offse...', 'Z:\home\avtokoh...', 39, Array)
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
#14 {main} in Z:\home\avtokoh.local\www\application\views\calculator.result.php:39
2012-11-08 03:53:50 --- CRITICAL: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\Controller\calculator.php [ 47 ] in Z:\home\avtokoh.local\www\application\classes\Controller\calculator.php:47
2012-11-08 03:53:50 --- DEBUG: #0 Z:\home\avtokoh.local\www\application\classes\Controller\calculator.php(47): Kohana_Core::error_handler(8, 'Trying to get p...', 'Z:\home\avtokoh...', 47, Array)
#1 Z:\home\avtokoh.local\www\system\classes\Kohana\Controller.php(84): Controller_Calculator->action_result()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Calculator))
#4 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\avtokoh.local\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\avtokoh.local\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\avtokoh.local\www\application\classes\Controller\calculator.php:47
2012-11-08 03:57:19 --- CRITICAL: ErrorException [ 1 ]: Call to undefined function find() ~ APPPATH\classes\Controller\calculator.php [ 47 ] in :
2012-11-08 03:57:19 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-08 04:03:10 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH\classes\Controller\catalog.php [ 10 ] in :
2012-11-08 04:03:10 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-08 04:03:11 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH\classes\Controller\catalog.php [ 10 ] in :
2012-11-08 04:03:11 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-08 04:16:16 --- CRITICAL: ErrorException [ 8 ]: Undefined index: name ~ APPPATH\views\catalog.php [ 13 ] in Z:\home\avtokoh.local\www\application\views\catalog.php:13
2012-11-08 04:16:16 --- DEBUG: #0 Z:\home\avtokoh.local\www\application\views\catalog.php(13): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\avtokoh...', 13, Array)
#1 Z:\home\avtokoh.local\www\system\classes\Kohana\View.php(61): include('Z:\home\avtokoh...')
#2 Z:\home\avtokoh.local\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\avtokoh...', Array)
#3 Z:\home\avtokoh.local\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\avtokoh.local\www\application\views\main.php(55): Kohana_View->__toString()
#5 Z:\home\avtokoh.local\www\system\classes\Kohana\View.php(61): include('Z:\home\avtokoh...')
#6 Z:\home\avtokoh.local\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\avtokoh...', Array)
#7 Z:\home\avtokoh.local\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\avtokoh.local\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Catalog))
#11 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\avtokoh.local\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\avtokoh.local\www\index.php(118): Kohana_Request->execute()
#14 {main} in Z:\home\avtokoh.local\www\application\views\catalog.php:13
2012-11-08 04:59:32 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'latitude' in 'field list' [ SELECT degrees(acos(sin(radians(37.617761)) * sin(radians(`latitude`)) + cos(radians(37.617761)) * cos(radians(`latitude`)) * cos(radians(abs(55.755773 - `longitude`))))) * 69.172 AS `distance` FROM `business_adr` ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\avtokoh.local\www\modules\database\classes\Kohana\Database\Query.php:251
2012-11-08 04:59:32 --- DEBUG: #0 Z:\home\avtokoh.local\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT degrees(...', false, Array)
#1 Z:\home\avtokoh.local\www\application\classes\Model\business.php(17): Kohana_Database_Query->execute()
#2 Z:\home\avtokoh.local\www\application\classes\Controller\ajax.php(189): Model_Business->getLocations('37.617761', '55.755773')
#3 Z:\home\avtokoh.local\www\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_catalog()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#6 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\avtokoh.local\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\avtokoh.local\www\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\avtokoh.local\www\modules\database\classes\Kohana\Database\Query.php:251
2012-11-08 05:05:45 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ';', expecting ')' ~ APPPATH\classes\Model\business.php [ 16 ] in :
2012-11-08 05:05:45 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-08 05:08:36 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ';', expecting ')' ~ APPPATH\classes\Model\business.php [ 30 ] in :
2012-11-08 05:08:36 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-08 05:10:35 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ';', expecting ')' ~ APPPATH\classes\Model\business.php [ 21 ] in :
2012-11-08 05:10:35 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-08 05:11:26 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR ~ APPPATH\classes\Model\business.php [ 20 ] in :
2012-11-08 05:11:26 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-08 05:12:03 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 1 ~ MODPATH\database\classes\Kohana\Database.php [ 507 ] in Z:\home\avtokoh.local\www\modules\database\classes\Kohana\Database.php:507
2012-11-08 05:12:03 --- DEBUG: #0 Z:\home\avtokoh.local\www\modules\database\classes\Kohana\Database.php(507): Kohana_Core::error_handler(8, 'Undefined offse...', 'Z:\home\avtokoh...', 507, Array)
#1 [internal function]: Kohana_Database->quote_column(Array)
#2 Z:\home\avtokoh.local\www\modules\database\classes\Kohana\Database\Query\Builder\Select.php(354): array_map(Array, Array)
#3 Z:\home\avtokoh.local\www\modules\database\classes\Kohana\Database\Query.php(234): Kohana_Database_Query_Builder_Select->compile(Object(Database_MySQL))
#4 Z:\home\avtokoh.local\www\application\classes\Model\business.php(22): Kohana_Database_Query->execute()
#5 Z:\home\avtokoh.local\www\application\classes\Controller\ajax.php(189): Model_Business->getLocations('37.617761', '55.755773')
#6 Z:\home\avtokoh.local\www\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_catalog()
#7 [internal function]: Kohana_Controller->execute()
#8 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#9 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 Z:\home\avtokoh.local\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#11 Z:\home\avtokoh.local\www\index.php(118): Kohana_Request->execute()
#12 {main} in Z:\home\avtokoh.local\www\modules\database\classes\Kohana\Database.php:507
2012-11-08 05:12:57 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 1 ~ MODPATH\database\classes\Kohana\Database.php [ 507 ] in Z:\home\avtokoh.local\www\modules\database\classes\Kohana\Database.php:507
2012-11-08 05:12:57 --- DEBUG: #0 Z:\home\avtokoh.local\www\modules\database\classes\Kohana\Database.php(507): Kohana_Core::error_handler(8, 'Undefined offse...', 'Z:\home\avtokoh...', 507, Array)
#1 [internal function]: Kohana_Database->quote_column(Array)
#2 Z:\home\avtokoh.local\www\modules\database\classes\Kohana\Database\Query\Builder\Select.php(354): array_map(Array, Array)
#3 Z:\home\avtokoh.local\www\modules\database\classes\Kohana\Database\Query.php(234): Kohana_Database_Query_Builder_Select->compile(Object(Database_MySQL))
#4 Z:\home\avtokoh.local\www\application\classes\Model\business.php(22): Kohana_Database_Query->execute()
#5 Z:\home\avtokoh.local\www\application\classes\Controller\ajax.php(189): Model_Business->getLocations('37.617761', '55.755773')
#6 Z:\home\avtokoh.local\www\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_catalog()
#7 [internal function]: Kohana_Controller->execute()
#8 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#9 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 Z:\home\avtokoh.local\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#11 Z:\home\avtokoh.local\www\index.php(118): Kohana_Request->execute()
#12 {main} in Z:\home\avtokoh.local\www\modules\database\classes\Kohana\Database.php:507
2012-11-08 05:17:00 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 1 ~ MODPATH\database\classes\Kohana\Database.php [ 507 ] in Z:\home\avtokoh.local\www\modules\database\classes\Kohana\Database.php:507
2012-11-08 05:17:00 --- DEBUG: #0 Z:\home\avtokoh.local\www\modules\database\classes\Kohana\Database.php(507): Kohana_Core::error_handler(8, 'Undefined offse...', 'Z:\home\avtokoh...', 507, Array)
#1 [internal function]: Kohana_Database->quote_column(Array)
#2 Z:\home\avtokoh.local\www\modules\database\classes\Kohana\Database\Query\Builder\Select.php(354): array_map(Array, Array)
#3 Z:\home\avtokoh.local\www\modules\database\classes\Kohana\Database\Query.php(234): Kohana_Database_Query_Builder_Select->compile(Object(Database_MySQL))
#4 Z:\home\avtokoh.local\www\application\classes\Model\business.php(20): Kohana_Database_Query->execute()
#5 Z:\home\avtokoh.local\www\application\classes\Controller\ajax.php(189): Model_Business->getLocations(NULL, NULL)
#6 Z:\home\avtokoh.local\www\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_catalog()
#7 [internal function]: Kohana_Controller->execute()
#8 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#9 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 Z:\home\avtokoh.local\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#11 Z:\home\avtokoh.local\www\index.php(118): Kohana_Request->execute()
#12 {main} in Z:\home\avtokoh.local\www\modules\database\classes\Kohana\Database.php:507
2012-11-08 05:17:22 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 1 ~ MODPATH\database\classes\Kohana\Database.php [ 507 ] in Z:\home\avtokoh.local\www\modules\database\classes\Kohana\Database.php:507
2012-11-08 05:17:22 --- DEBUG: #0 Z:\home\avtokoh.local\www\modules\database\classes\Kohana\Database.php(507): Kohana_Core::error_handler(8, 'Undefined offse...', 'Z:\home\avtokoh...', 507, Array)
#1 [internal function]: Kohana_Database->quote_column(Array)
#2 Z:\home\avtokoh.local\www\modules\database\classes\Kohana\Database\Query\Builder\Select.php(354): array_map(Array, Array)
#3 Z:\home\avtokoh.local\www\modules\database\classes\Kohana\Database\Query.php(234): Kohana_Database_Query_Builder_Select->compile(Object(Database_MySQL))
#4 Z:\home\avtokoh.local\www\application\classes\Model\business.php(20): Kohana_Database_Query->execute()
#5 Z:\home\avtokoh.local\www\application\classes\Controller\ajax.php(189): Model_Business->getLocations(NULL, NULL)
#6 Z:\home\avtokoh.local\www\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_catalog()
#7 [internal function]: Kohana_Controller->execute()
#8 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#9 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 Z:\home\avtokoh.local\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#11 Z:\home\avtokoh.local\www\index.php(118): Kohana_Request->execute()
#12 {main} in Z:\home\avtokoh.local\www\modules\database\classes\Kohana\Database.php:507
2012-11-08 05:17:23 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 1 ~ MODPATH\database\classes\Kohana\Database.php [ 507 ] in Z:\home\avtokoh.local\www\modules\database\classes\Kohana\Database.php:507
2012-11-08 05:17:23 --- DEBUG: #0 Z:\home\avtokoh.local\www\modules\database\classes\Kohana\Database.php(507): Kohana_Core::error_handler(8, 'Undefined offse...', 'Z:\home\avtokoh...', 507, Array)
#1 [internal function]: Kohana_Database->quote_column(Array)
#2 Z:\home\avtokoh.local\www\modules\database\classes\Kohana\Database\Query\Builder\Select.php(354): array_map(Array, Array)
#3 Z:\home\avtokoh.local\www\modules\database\classes\Kohana\Database\Query.php(234): Kohana_Database_Query_Builder_Select->compile(Object(Database_MySQL))
#4 Z:\home\avtokoh.local\www\application\classes\Model\business.php(20): Kohana_Database_Query->execute()
#5 Z:\home\avtokoh.local\www\application\classes\Controller\ajax.php(189): Model_Business->getLocations(NULL, NULL)
#6 Z:\home\avtokoh.local\www\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_catalog()
#7 [internal function]: Kohana_Controller->execute()
#8 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#9 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 Z:\home\avtokoh.local\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#11 Z:\home\avtokoh.local\www\index.php(118): Kohana_Request->execute()
#12 {main} in Z:\home\avtokoh.local\www\modules\database\classes\Kohana\Database.php:507
2012-11-08 05:17:24 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 1 ~ MODPATH\database\classes\Kohana\Database.php [ 507 ] in Z:\home\avtokoh.local\www\modules\database\classes\Kohana\Database.php:507
2012-11-08 05:17:24 --- DEBUG: #0 Z:\home\avtokoh.local\www\modules\database\classes\Kohana\Database.php(507): Kohana_Core::error_handler(8, 'Undefined offse...', 'Z:\home\avtokoh...', 507, Array)
#1 [internal function]: Kohana_Database->quote_column(Array)
#2 Z:\home\avtokoh.local\www\modules\database\classes\Kohana\Database\Query\Builder\Select.php(354): array_map(Array, Array)
#3 Z:\home\avtokoh.local\www\modules\database\classes\Kohana\Database\Query.php(234): Kohana_Database_Query_Builder_Select->compile(Object(Database_MySQL))
#4 Z:\home\avtokoh.local\www\application\classes\Model\business.php(20): Kohana_Database_Query->execute()
#5 Z:\home\avtokoh.local\www\application\classes\Controller\ajax.php(189): Model_Business->getLocations(NULL, NULL)
#6 Z:\home\avtokoh.local\www\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_catalog()
#7 [internal function]: Kohana_Controller->execute()
#8 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#9 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 Z:\home\avtokoh.local\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#11 Z:\home\avtokoh.local\www\index.php(118): Kohana_Request->execute()
#12 {main} in Z:\home\avtokoh.local\www\modules\database\classes\Kohana\Database.php:507
2012-11-08 05:17:32 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 1 ~ MODPATH\database\classes\Kohana\Database.php [ 507 ] in Z:\home\avtokoh.local\www\modules\database\classes\Kohana\Database.php:507
2012-11-08 05:17:32 --- DEBUG: #0 Z:\home\avtokoh.local\www\modules\database\classes\Kohana\Database.php(507): Kohana_Core::error_handler(8, 'Undefined offse...', 'Z:\home\avtokoh...', 507, Array)
#1 [internal function]: Kohana_Database->quote_column(Array)
#2 Z:\home\avtokoh.local\www\modules\database\classes\Kohana\Database\Query\Builder\Select.php(354): array_map(Array, Array)
#3 Z:\home\avtokoh.local\www\modules\database\classes\Kohana\Database\Query.php(234): Kohana_Database_Query_Builder_Select->compile(Object(Database_MySQL))
#4 Z:\home\avtokoh.local\www\application\classes\Model\business.php(19): Kohana_Database_Query->execute()
#5 Z:\home\avtokoh.local\www\application\classes\Controller\ajax.php(189): Model_Business->getLocations(NULL, NULL)
#6 Z:\home\avtokoh.local\www\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_catalog()
#7 [internal function]: Kohana_Controller->execute()
#8 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#9 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 Z:\home\avtokoh.local\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#11 Z:\home\avtokoh.local\www\index.php(118): Kohana_Request->execute()
#12 {main} in Z:\home\avtokoh.local\www\modules\database\classes\Kohana\Database.php:507
2012-11-08 05:17:35 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 1 ~ MODPATH\database\classes\Kohana\Database.php [ 507 ] in Z:\home\avtokoh.local\www\modules\database\classes\Kohana\Database.php:507
2012-11-08 05:17:35 --- DEBUG: #0 Z:\home\avtokoh.local\www\modules\database\classes\Kohana\Database.php(507): Kohana_Core::error_handler(8, 'Undefined offse...', 'Z:\home\avtokoh...', 507, Array)
#1 [internal function]: Kohana_Database->quote_column(Array)
#2 Z:\home\avtokoh.local\www\modules\database\classes\Kohana\Database\Query\Builder\Select.php(354): array_map(Array, Array)
#3 Z:\home\avtokoh.local\www\modules\database\classes\Kohana\Database\Query.php(234): Kohana_Database_Query_Builder_Select->compile(Object(Database_MySQL))
#4 Z:\home\avtokoh.local\www\application\classes\Model\business.php(19): Kohana_Database_Query->execute()
#5 Z:\home\avtokoh.local\www\application\classes\Controller\ajax.php(189): Model_Business->getLocations(NULL, NULL)
#6 Z:\home\avtokoh.local\www\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_catalog()
#7 [internal function]: Kohana_Controller->execute()
#8 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#9 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 Z:\home\avtokoh.local\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#11 Z:\home\avtokoh.local\www\index.php(118): Kohana_Request->execute()
#12 {main} in Z:\home\avtokoh.local\www\modules\database\classes\Kohana\Database.php:507
2012-11-08 05:18:43 --- CRITICAL: Database_Exception [ 1146 ]: Table 'avto_new.businessadr' doesn't exist [ SHOW FULL COLUMNS FROM `businessadr` ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\avtokoh.local\www\modules\database\classes\Kohana\Database\MySQL.php:358
2012-11-08 05:18:43 --- DEBUG: #0 Z:\home\avtokoh.local\www\modules\database\classes\Kohana\Database\MySQL.php(358): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 Z:\home\avtokoh.local\www\modules\orm\classes\Kohana\ORM.php(1665): Kohana_Database_MySQL->list_columns('businessadr')
#2 Z:\home\avtokoh.local\www\modules\orm\classes\Kohana\ORM.php(441): Kohana_ORM->list_columns()
#3 Z:\home\avtokoh.local\www\modules\orm\classes\Kohana\ORM.php(386): Kohana_ORM->reload_columns()
#4 Z:\home\avtokoh.local\www\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#5 Z:\home\avtokoh.local\www\application\classes\Controller\ajax.php(188): Kohana_ORM->__construct()
#6 Z:\home\avtokoh.local\www\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_catalog()
#7 [internal function]: Kohana_Controller->execute()
#8 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#9 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 Z:\home\avtokoh.local\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#11 Z:\home\avtokoh.local\www\index.php(118): Kohana_Request->execute()
#12 {main} in Z:\home\avtokoh.local\www\modules\database\classes\Kohana\Database\MySQL.php:358
2012-11-08 05:18:45 --- CRITICAL: Database_Exception [ 1146 ]: Table 'avto_new.businessadr' doesn't exist [ SHOW FULL COLUMNS FROM `businessadr` ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\avtokoh.local\www\modules\database\classes\Kohana\Database\MySQL.php:358
2012-11-08 05:18:45 --- DEBUG: #0 Z:\home\avtokoh.local\www\modules\database\classes\Kohana\Database\MySQL.php(358): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 Z:\home\avtokoh.local\www\modules\orm\classes\Kohana\ORM.php(1665): Kohana_Database_MySQL->list_columns('businessadr')
#2 Z:\home\avtokoh.local\www\modules\orm\classes\Kohana\ORM.php(441): Kohana_ORM->list_columns()
#3 Z:\home\avtokoh.local\www\modules\orm\classes\Kohana\ORM.php(386): Kohana_ORM->reload_columns()
#4 Z:\home\avtokoh.local\www\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#5 Z:\home\avtokoh.local\www\application\classes\Controller\ajax.php(188): Kohana_ORM->__construct()
#6 Z:\home\avtokoh.local\www\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_catalog()
#7 [internal function]: Kohana_Controller->execute()
#8 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#9 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 Z:\home\avtokoh.local\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#11 Z:\home\avtokoh.local\www\index.php(118): Kohana_Request->execute()
#12 {main} in Z:\home\avtokoh.local\www\modules\database\classes\Kohana\Database\MySQL.php:358
2012-11-08 05:19:06 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 1 ~ MODPATH\database\classes\Kohana\Database.php [ 507 ] in Z:\home\avtokoh.local\www\modules\database\classes\Kohana\Database.php:507
2012-11-08 05:19:06 --- DEBUG: #0 Z:\home\avtokoh.local\www\modules\database\classes\Kohana\Database.php(507): Kohana_Core::error_handler(8, 'Undefined offse...', 'Z:\home\avtokoh...', 507, Array)
#1 [internal function]: Kohana_Database->quote_column(Array)
#2 Z:\home\avtokoh.local\www\modules\database\classes\Kohana\Database\Query\Builder\Select.php(354): array_map(Array, Array)
#3 Z:\home\avtokoh.local\www\modules\database\classes\Kohana\Database\Query.php(234): Kohana_Database_Query_Builder_Select->compile(Object(Database_MySQL))
#4 Z:\home\avtokoh.local\www\application\classes\Model\businessadr.php(19): Kohana_Database_Query->execute()
#5 Z:\home\avtokoh.local\www\application\classes\Controller\ajax.php(189): Model_Businessadr->getLocations(NULL, NULL)
#6 Z:\home\avtokoh.local\www\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_catalog()
#7 [internal function]: Kohana_Controller->execute()
#8 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#9 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 Z:\home\avtokoh.local\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#11 Z:\home\avtokoh.local\www\index.php(118): Kohana_Request->execute()
#12 {main} in Z:\home\avtokoh.local\www\modules\database\classes\Kohana\Database.php:507
2012-11-08 05:19:07 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 1 ~ MODPATH\database\classes\Kohana\Database.php [ 507 ] in Z:\home\avtokoh.local\www\modules\database\classes\Kohana\Database.php:507
2012-11-08 05:19:07 --- DEBUG: #0 Z:\home\avtokoh.local\www\modules\database\classes\Kohana\Database.php(507): Kohana_Core::error_handler(8, 'Undefined offse...', 'Z:\home\avtokoh...', 507, Array)
#1 [internal function]: Kohana_Database->quote_column(Array)
#2 Z:\home\avtokoh.local\www\modules\database\classes\Kohana\Database\Query\Builder\Select.php(354): array_map(Array, Array)
#3 Z:\home\avtokoh.local\www\modules\database\classes\Kohana\Database\Query.php(234): Kohana_Database_Query_Builder_Select->compile(Object(Database_MySQL))
#4 Z:\home\avtokoh.local\www\application\classes\Model\businessadr.php(19): Kohana_Database_Query->execute()
#5 Z:\home\avtokoh.local\www\application\classes\Controller\ajax.php(189): Model_Businessadr->getLocations(NULL, NULL)
#6 Z:\home\avtokoh.local\www\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_catalog()
#7 [internal function]: Kohana_Controller->execute()
#8 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#9 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 Z:\home\avtokoh.local\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#11 Z:\home\avtokoh.local\www\index.php(118): Kohana_Request->execute()
#12 {main} in Z:\home\avtokoh.local\www\modules\database\classes\Kohana\Database.php:507
2012-11-08 05:20:11 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 1 ~ MODPATH\database\classes\Kohana\Database.php [ 507 ] in Z:\home\avtokoh.local\www\modules\database\classes\Kohana\Database.php:507
2012-11-08 05:20:11 --- DEBUG: #0 Z:\home\avtokoh.local\www\modules\database\classes\Kohana\Database.php(507): Kohana_Core::error_handler(8, 'Undefined offse...', 'Z:\home\avtokoh...', 507, Array)
#1 [internal function]: Kohana_Database->quote_column(Array)
#2 Z:\home\avtokoh.local\www\modules\database\classes\Kohana\Database\Query\Builder\Select.php(354): array_map(Array, Array)
#3 Z:\home\avtokoh.local\www\modules\database\classes\Kohana\Database\Query.php(234): Kohana_Database_Query_Builder_Select->compile(Object(Database_MySQL))
#4 Z:\home\avtokoh.local\www\application\classes\Model\businessadr.php(18): Kohana_Database_Query->execute()
#5 Z:\home\avtokoh.local\www\application\classes\Controller\ajax.php(189): Model_Businessadr->getLocations(NULL, NULL)
#6 Z:\home\avtokoh.local\www\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_catalog()
#7 [internal function]: Kohana_Controller->execute()
#8 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#9 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 Z:\home\avtokoh.local\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#11 Z:\home\avtokoh.local\www\index.php(118): Kohana_Request->execute()
#12 {main} in Z:\home\avtokoh.local\www\modules\database\classes\Kohana\Database.php:507
2012-11-08 05:20:12 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 1 ~ MODPATH\database\classes\Kohana\Database.php [ 507 ] in Z:\home\avtokoh.local\www\modules\database\classes\Kohana\Database.php:507
2012-11-08 05:20:12 --- DEBUG: #0 Z:\home\avtokoh.local\www\modules\database\classes\Kohana\Database.php(507): Kohana_Core::error_handler(8, 'Undefined offse...', 'Z:\home\avtokoh...', 507, Array)
#1 [internal function]: Kohana_Database->quote_column(Array)
#2 Z:\home\avtokoh.local\www\modules\database\classes\Kohana\Database\Query\Builder\Select.php(354): array_map(Array, Array)
#3 Z:\home\avtokoh.local\www\modules\database\classes\Kohana\Database\Query.php(234): Kohana_Database_Query_Builder_Select->compile(Object(Database_MySQL))
#4 Z:\home\avtokoh.local\www\application\classes\Model\businessadr.php(18): Kohana_Database_Query->execute()
#5 Z:\home\avtokoh.local\www\application\classes\Controller\ajax.php(189): Model_Businessadr->getLocations(NULL, NULL)
#6 Z:\home\avtokoh.local\www\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_catalog()
#7 [internal function]: Kohana_Controller->execute()
#8 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#9 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 Z:\home\avtokoh.local\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#11 Z:\home\avtokoh.local\www\index.php(118): Kohana_Request->execute()
#12 {main} in Z:\home\avtokoh.local\www\modules\database\classes\Kohana\Database.php:507
2012-11-08 05:20:30 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 1 ~ MODPATH\database\classes\Kohana\Database.php [ 507 ] in Z:\home\avtokoh.local\www\modules\database\classes\Kohana\Database.php:507
2012-11-08 05:20:30 --- DEBUG: #0 Z:\home\avtokoh.local\www\modules\database\classes\Kohana\Database.php(507): Kohana_Core::error_handler(8, 'Undefined offse...', 'Z:\home\avtokoh...', 507, Array)
#1 [internal function]: Kohana_Database->quote_column(Array)
#2 Z:\home\avtokoh.local\www\modules\database\classes\Kohana\Database\Query\Builder\Select.php(354): array_map(Array, Array)
#3 Z:\home\avtokoh.local\www\modules\database\classes\Kohana\Database\Query.php(234): Kohana_Database_Query_Builder_Select->compile(Object(Database_MySQL))
#4 Z:\home\avtokoh.local\www\application\classes\Model\businessadr.php(18): Kohana_Database_Query->execute()
#5 Z:\home\avtokoh.local\www\application\classes\Controller\ajax.php(189): Model_Businessadr->getLocations(NULL, NULL)
#6 Z:\home\avtokoh.local\www\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_catalog()
#7 [internal function]: Kohana_Controller->execute()
#8 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#9 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 Z:\home\avtokoh.local\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#11 Z:\home\avtokoh.local\www\index.php(118): Kohana_Request->execute()
#12 {main} in Z:\home\avtokoh.local\www\modules\database\classes\Kohana\Database.php:507
2012-11-08 05:20:30 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 1 ~ MODPATH\database\classes\Kohana\Database.php [ 507 ] in Z:\home\avtokoh.local\www\modules\database\classes\Kohana\Database.php:507
2012-11-08 05:20:30 --- DEBUG: #0 Z:\home\avtokoh.local\www\modules\database\classes\Kohana\Database.php(507): Kohana_Core::error_handler(8, 'Undefined offse...', 'Z:\home\avtokoh...', 507, Array)
#1 [internal function]: Kohana_Database->quote_column(Array)
#2 Z:\home\avtokoh.local\www\modules\database\classes\Kohana\Database\Query\Builder\Select.php(354): array_map(Array, Array)
#3 Z:\home\avtokoh.local\www\modules\database\classes\Kohana\Database\Query.php(234): Kohana_Database_Query_Builder_Select->compile(Object(Database_MySQL))
#4 Z:\home\avtokoh.local\www\application\classes\Model\businessadr.php(18): Kohana_Database_Query->execute()
#5 Z:\home\avtokoh.local\www\application\classes\Controller\ajax.php(189): Model_Businessadr->getLocations(NULL, NULL)
#6 Z:\home\avtokoh.local\www\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_catalog()
#7 [internal function]: Kohana_Controller->execute()
#8 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#9 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 Z:\home\avtokoh.local\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#11 Z:\home\avtokoh.local\www\index.php(118): Kohana_Request->execute()
#12 {main} in Z:\home\avtokoh.local\www\modules\database\classes\Kohana\Database.php:507
2012-11-08 05:22:03 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 1 ~ MODPATH\database\classes\Kohana\Database.php [ 507 ] in Z:\home\avtokoh.local\www\modules\database\classes\Kohana\Database.php:507
2012-11-08 05:22:03 --- DEBUG: #0 Z:\home\avtokoh.local\www\modules\database\classes\Kohana\Database.php(507): Kohana_Core::error_handler(8, 'Undefined offse...', 'Z:\home\avtokoh...', 507, Array)
#1 [internal function]: Kohana_Database->quote_column(Array)
#2 Z:\home\avtokoh.local\www\modules\database\classes\Kohana\Database\Query\Builder\Select.php(354): array_map(Array, Array)
#3 Z:\home\avtokoh.local\www\modules\database\classes\Kohana\Database\Query.php(234): Kohana_Database_Query_Builder_Select->compile(Object(Database_MySQL))
#4 Z:\home\avtokoh.local\www\application\classes\Model\businessadr.php(18): Kohana_Database_Query->execute()
#5 Z:\home\avtokoh.local\www\application\classes\Controller\ajax.php(189): Model_Businessadr->getLocations(NULL, NULL)
#6 Z:\home\avtokoh.local\www\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_catalog()
#7 [internal function]: Kohana_Controller->execute()
#8 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#9 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 Z:\home\avtokoh.local\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#11 Z:\home\avtokoh.local\www\index.php(118): Kohana_Request->execute()
#12 {main} in Z:\home\avtokoh.local\www\modules\database\classes\Kohana\Database.php:507
2012-11-08 05:22:04 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 1 ~ MODPATH\database\classes\Kohana\Database.php [ 507 ] in Z:\home\avtokoh.local\www\modules\database\classes\Kohana\Database.php:507
2012-11-08 05:22:04 --- DEBUG: #0 Z:\home\avtokoh.local\www\modules\database\classes\Kohana\Database.php(507): Kohana_Core::error_handler(8, 'Undefined offse...', 'Z:\home\avtokoh...', 507, Array)
#1 [internal function]: Kohana_Database->quote_column(Array)
#2 Z:\home\avtokoh.local\www\modules\database\classes\Kohana\Database\Query\Builder\Select.php(354): array_map(Array, Array)
#3 Z:\home\avtokoh.local\www\modules\database\classes\Kohana\Database\Query.php(234): Kohana_Database_Query_Builder_Select->compile(Object(Database_MySQL))
#4 Z:\home\avtokoh.local\www\application\classes\Model\businessadr.php(18): Kohana_Database_Query->execute()
#5 Z:\home\avtokoh.local\www\application\classes\Controller\ajax.php(189): Model_Businessadr->getLocations(NULL, NULL)
#6 Z:\home\avtokoh.local\www\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_catalog()
#7 [internal function]: Kohana_Controller->execute()
#8 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#9 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 Z:\home\avtokoh.local\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#11 Z:\home\avtokoh.local\www\index.php(118): Kohana_Request->execute()
#12 {main} in Z:\home\avtokoh.local\www\modules\database\classes\Kohana\Database.php:507
2012-11-08 05:22:55 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: id_series ~ APPPATH\classes\Model\businessadr.php [ 20 ] in Z:\home\avtokoh.local\www\application\classes\Model\businessadr.php:20
2012-11-08 05:22:55 --- DEBUG: #0 Z:\home\avtokoh.local\www\application\classes\Model\businessadr.php(20): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\avtokoh...', 20, Array)
#1 Z:\home\avtokoh.local\www\application\classes\Controller\ajax.php(189): Model_Businessadr->getLocations(NULL, NULL)
#2 Z:\home\avtokoh.local\www\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_catalog()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#5 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\avtokoh.local\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\avtokoh.local\www\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\avtokoh.local\www\application\classes\Model\businessadr.php:20
2012-11-08 05:22:56 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: id_series ~ APPPATH\classes\Model\businessadr.php [ 20 ] in Z:\home\avtokoh.local\www\application\classes\Model\businessadr.php:20
2012-11-08 05:22:56 --- DEBUG: #0 Z:\home\avtokoh.local\www\application\classes\Model\businessadr.php(20): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\avtokoh...', 20, Array)
#1 Z:\home\avtokoh.local\www\application\classes\Controller\ajax.php(189): Model_Businessadr->getLocations(NULL, NULL)
#2 Z:\home\avtokoh.local\www\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_catalog()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#5 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\avtokoh.local\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\avtokoh.local\www\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\avtokoh.local\www\application\classes\Model\businessadr.php:20
2012-11-08 05:23:42 --- CRITICAL: ErrorException [ 8 ]: Undefined index: max ~ APPPATH\classes\Controller\ajax.php [ 197 ] in Z:\home\avtokoh.local\www\application\classes\Controller\ajax.php:197
2012-11-08 05:23:42 --- DEBUG: #0 Z:\home\avtokoh.local\www\application\classes\Controller\ajax.php(197): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\avtokoh...', 197, Array)
#1 Z:\home\avtokoh.local\www\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_catalog()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\avtokoh.local\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\avtokoh.local\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\avtokoh.local\www\application\classes\Controller\ajax.php:197
2012-11-08 05:23:43 --- CRITICAL: ErrorException [ 8 ]: Undefined index: max ~ APPPATH\classes\Controller\ajax.php [ 197 ] in Z:\home\avtokoh.local\www\application\classes\Controller\ajax.php:197
2012-11-08 05:23:43 --- DEBUG: #0 Z:\home\avtokoh.local\www\application\classes\Controller\ajax.php(197): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\avtokoh...', 197, Array)
#1 Z:\home\avtokoh.local\www\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_catalog()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\avtokoh.local\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\avtokoh.local\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\avtokoh.local\www\application\classes\Controller\ajax.php:197
2012-11-08 05:26:13 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '(6371 * acos( cos( radians() ) * cos( radians( lat ) ) * cos( radians( lng ) - r' at line 3 [ SELECT business_adr.lat AS lat,
                business_adr.lng AS lng
                (6371 * acos( cos( radians() ) * cos( radians( lat ) ) * cos( radians( lng ) - radians() ) 
                + sin( radians() ) * sin( radians( lat ) ) ) )
                AS distance
                 FROM `business_adr` ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\avtokoh.local\www\modules\database\classes\Kohana\Database\Query.php:251
2012-11-08 05:26:13 --- DEBUG: #0 Z:\home\avtokoh.local\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT business...', false, Array)
#1 Z:\home\avtokoh.local\www\application\classes\Model\businessadr.php(24): Kohana_Database_Query->execute()
#2 Z:\home\avtokoh.local\www\application\classes\Controller\ajax.php(189): Model_Businessadr->getLocations(NULL, NULL)
#3 Z:\home\avtokoh.local\www\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_catalog()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#6 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\avtokoh.local\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\avtokoh.local\www\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\avtokoh.local\www\modules\database\classes\Kohana\Database\Query.php:251
2012-11-08 05:26:14 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '(6371 * acos( cos( radians() ) * cos( radians( lat ) ) * cos( radians( lng ) - r' at line 3 [ SELECT business_adr.lat AS lat,
                business_adr.lng AS lng
                (6371 * acos( cos( radians() ) * cos( radians( lat ) ) * cos( radians( lng ) - radians() ) 
                + sin( radians() ) * sin( radians( lat ) ) ) )
                AS distance
                 FROM `business_adr` ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\avtokoh.local\www\modules\database\classes\Kohana\Database\Query.php:251
2012-11-08 05:26:14 --- DEBUG: #0 Z:\home\avtokoh.local\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT business...', false, Array)
#1 Z:\home\avtokoh.local\www\application\classes\Model\businessadr.php(24): Kohana_Database_Query->execute()
#2 Z:\home\avtokoh.local\www\application\classes\Controller\ajax.php(189): Model_Businessadr->getLocations(NULL, NULL)
#3 Z:\home\avtokoh.local\www\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_catalog()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#6 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\avtokoh.local\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\avtokoh.local\www\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\avtokoh.local\www\modules\database\classes\Kohana\Database\Query.php:251
2012-11-08 05:28:59 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '(6371 * acos( cos( radians(37,49187) ) * cos( radians( lat ) ) * cos( radians( l' at line 3 [ SELECT business_adr.lat AS lat,
                business_adr.lng AS lng
                (6371 * acos( cos( radians(37,49187) ) * cos( radians( lat ) ) * cos( radians( lng ) - radians(55,61292) ) 
                + sin( radians(37,49187) ) * sin( radians( lat ) ) ) )
                AS distance
                 FROM `business_adr` ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\avtokoh.local\www\modules\database\classes\Kohana\Database\Query.php:251
2012-11-08 05:28:59 --- DEBUG: #0 Z:\home\avtokoh.local\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT business...', false, Array)
#1 Z:\home\avtokoh.local\www\application\classes\Model\businessadr.php(25): Kohana_Database_Query->execute()
#2 Z:\home\avtokoh.local\www\application\classes\Controller\ajax.php(189): Model_Businessadr->getLocations(NULL, NULL)
#3 Z:\home\avtokoh.local\www\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_catalog()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#6 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\avtokoh.local\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\avtokoh.local\www\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\avtokoh.local\www\modules\database\classes\Kohana\Database\Query.php:251
2012-11-08 05:29:01 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '(6371 * acos( cos( radians(37,49187) ) * cos( radians( lat ) ) * cos( radians( l' at line 3 [ SELECT business_adr.lat AS lat,
                business_adr.lng AS lng
                (6371 * acos( cos( radians(37,49187) ) * cos( radians( lat ) ) * cos( radians( lng ) - radians(55,61292) ) 
                + sin( radians(37,49187) ) * sin( radians( lat ) ) ) )
                AS distance
                 FROM `business_adr` ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\avtokoh.local\www\modules\database\classes\Kohana\Database\Query.php:251
2012-11-08 05:29:01 --- DEBUG: #0 Z:\home\avtokoh.local\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT business...', false, Array)
#1 Z:\home\avtokoh.local\www\application\classes\Model\businessadr.php(25): Kohana_Database_Query->execute()
#2 Z:\home\avtokoh.local\www\application\classes\Controller\ajax.php(189): Model_Businessadr->getLocations(NULL, NULL)
#3 Z:\home\avtokoh.local\www\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_catalog()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#6 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\avtokoh.local\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\avtokoh.local\www\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\avtokoh.local\www\modules\database\classes\Kohana\Database\Query.php:251
2012-11-08 05:29:16 --- CRITICAL: Database_Exception [ 1582 ]: Incorrect parameter count in the call to native function 'radians' [ SELECT business_adr.lat AS lat,
                business_adr.lng AS lng,
                (6371 * acos( cos( radians(37,49187) ) * cos( radians( lat ) ) * cos( radians( lng ) - radians(55,61292) ) 
                + sin( radians(37,49187) ) * sin( radians( lat ) ) ) )
                AS distance
                 FROM `business_adr` ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\avtokoh.local\www\modules\database\classes\Kohana\Database\Query.php:251
2012-11-08 05:29:16 --- DEBUG: #0 Z:\home\avtokoh.local\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT business...', false, Array)
#1 Z:\home\avtokoh.local\www\application\classes\Model\businessadr.php(25): Kohana_Database_Query->execute()
#2 Z:\home\avtokoh.local\www\application\classes\Controller\ajax.php(189): Model_Businessadr->getLocations(NULL, NULL)
#3 Z:\home\avtokoh.local\www\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_catalog()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#6 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\avtokoh.local\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\avtokoh.local\www\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\avtokoh.local\www\modules\database\classes\Kohana\Database\Query.php:251
2012-11-08 05:32:30 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE ~ APPPATH\classes\Controller\ajax.php [ 200 ] in :
2012-11-08 05:32:30 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-08 05:32:43 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE ~ APPPATH\classes\Controller\ajax.php [ 200 ] in :
2012-11-08 05:32:43 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-08 05:32:44 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE ~ APPPATH\classes\Controller\ajax.php [ 200 ] in :
2012-11-08 05:32:44 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-08 05:51:57 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'business.name' in 'field list' [ SELECT business_adr.lat AS lat,
                business_adr.lng AS lng,
                business.name AS name,
                business_adr.id AS aid,
                business_adr.city AS city,
                business_adr.street AS street,
                business_adr.phones AS phones,
                business_adr.sites AS sites,
                business_adr.email AS email,
                (6371 * acos( cos( radians(37.49187) ) * cos( radians( lat ) ) * cos( radians( lng ) - radians(55.61292) ) 
                + sin( radians(37.49187) ) * sin( radians( lat ) ) ) )
                AS distance
                 FROM `business_adr` HAVING `distance` < '10' ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\avtokoh.local\www\modules\database\classes\Kohana\Database\Query.php:251
2012-11-08 05:51:57 --- DEBUG: #0 Z:\home\avtokoh.local\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT business...', false, Array)
#1 Z:\home\avtokoh.local\www\application\classes\Model\businessadr.php(34): Kohana_Database_Query->execute()
#2 Z:\home\avtokoh.local\www\application\classes\Controller\ajax.php(189): Model_Businessadr->getLocations(NULL, NULL, NULL)
#3 Z:\home\avtokoh.local\www\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_catalog()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#6 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\avtokoh.local\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\avtokoh.local\www\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\avtokoh.local\www\modules\database\classes\Kohana\Database\Query.php:251
2012-11-08 05:54:28 --- CRITICAL: ErrorException [ 8 ]: Undefined index: business_name ~ APPPATH\classes\Controller\ajax.php [ 208 ] in Z:\home\avtokoh.local\www\application\classes\Controller\ajax.php:208
2012-11-08 05:54:28 --- DEBUG: #0 Z:\home\avtokoh.local\www\application\classes\Controller\ajax.php(208): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\avtokoh...', 208, Array)
#1 Z:\home\avtokoh.local\www\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_catalog()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\avtokoh.local\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\avtokoh.local\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\avtokoh.local\www\application\classes\Controller\ajax.php:208
2012-11-08 06:08:23 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_STRING ~ APPPATH\classes\Model\businessadr.php [ 49 ] in :
2012-11-08 06:08:23 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-08 06:08:28 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Database_Query_Builder_Select::orderby() ~ APPPATH\classes\Model\businessadr.php [ 41 ] in :
2012-11-08 06:08:28 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-08 06:10:33 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: markers ~ APPPATH\classes\Controller\ajax.php [ 216 ] in Z:\home\avtokoh.local\www\application\classes\Controller\ajax.php:216
2012-11-08 06:10:33 --- DEBUG: #0 Z:\home\avtokoh.local\www\application\classes\Controller\ajax.php(216): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\avtokoh...', 216, Array)
#1 Z:\home\avtokoh.local\www\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_catalog()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\avtokoh.local\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\avtokoh.local\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\avtokoh.local\www\application\classes\Controller\ajax.php:216
2012-11-08 06:10:50 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: markers ~ APPPATH\classes\Controller\ajax.php [ 216 ] in Z:\home\avtokoh.local\www\application\classes\Controller\ajax.php:216
2012-11-08 06:10:50 --- DEBUG: #0 Z:\home\avtokoh.local\www\application\classes\Controller\ajax.php(216): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\avtokoh...', 216, Array)
#1 Z:\home\avtokoh.local\www\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_catalog()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\avtokoh.local\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\avtokoh.local\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\avtokoh.local\www\application\classes\Controller\ajax.php:216
2012-11-08 06:11:29 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: markers ~ APPPATH\classes\Controller\ajax.php [ 216 ] in Z:\home\avtokoh.local\www\application\classes\Controller\ajax.php:216
2012-11-08 06:11:29 --- DEBUG: #0 Z:\home\avtokoh.local\www\application\classes\Controller\ajax.php(216): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\avtokoh...', 216, Array)
#1 Z:\home\avtokoh.local\www\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_catalog()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\avtokoh.local\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\avtokoh.local\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\avtokoh.local\www\application\classes\Controller\ajax.php:216
2012-11-08 06:12:12 --- CRITICAL: ErrorException [ 2 ]: Missing argument 4 for Model_Businessadr::getLocations(), called in Z:\home\avtokoh.local\www\application\classes\Controller\ajax.php on line 190 and defined ~ APPPATH\classes\Model\businessadr.php [ 12 ] in Z:\home\avtokoh.local\www\application\classes\Model\businessadr.php:12
2012-11-08 06:12:12 --- DEBUG: #0 Z:\home\avtokoh.local\www\application\classes\Model\businessadr.php(12): Kohana_Core::error_handler(2, 'Missing argumen...', 'Z:\home\avtokoh...', 12, Array)
#1 Z:\home\avtokoh.local\www\application\classes\Controller\ajax.php(190): Model_Businessadr->getLocations('37.617761', '55.755773', '10')
#2 Z:\home\avtokoh.local\www\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_catalog()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#5 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\avtokoh.local\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\avtokoh.local\www\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\avtokoh.local\www\application\classes\Model\businessadr.php:12
2012-11-08 06:21:33 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: markers ~ APPPATH\classes\Controller\ajax.php [ 216 ] in Z:\home\avtokoh.local\www\application\classes\Controller\ajax.php:216
2012-11-08 06:21:33 --- DEBUG: #0 Z:\home\avtokoh.local\www\application\classes\Controller\ajax.php(216): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\avtokoh...', 216, Array)
#1 Z:\home\avtokoh.local\www\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_catalog()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\avtokoh.local\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\avtokoh.local\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\avtokoh.local\www\application\classes\Controller\ajax.php:216
2012-11-08 06:22:12 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: markers ~ APPPATH\classes\Controller\ajax.php [ 216 ] in Z:\home\avtokoh.local\www\application\classes\Controller\ajax.php:216
2012-11-08 06:22:12 --- DEBUG: #0 Z:\home\avtokoh.local\www\application\classes\Controller\ajax.php(216): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\avtokoh...', 216, Array)
#1 Z:\home\avtokoh.local\www\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_catalog()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\avtokoh.local\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\avtokoh.local\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\avtokoh.local\www\application\classes\Controller\ajax.php:216
2012-11-08 06:24:00 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'OFFSET 10' at line 16 [ SELECT 
                business.id AS id,
                business.name AS name,
                business_adr.name AS business_name,
                business_adr.lat AS lat,
                business_adr.lng AS lng,
                business_adr.id AS aid,
                business_adr.city AS city,
                business_adr.street AS street,
                business_adr.phones AS phones,
                business_adr.sites AS sites,
                business_adr.email AS email,
                (6371 * acos( cos( radians(37.617761) ) * cos( radians( lat ) ) * cos( radians( lng ) - radians(55.755773) ) 
                + sin( radians(37.617761) ) * sin( radians( lat ) ) ) )
                AS distance
                 FROM `business_adr` JOIN `business` ON (`business_adr`.`id_business` = `business`.`id`) HAVING `distance` < '10' ORDER BY `distance` OFFSET 10 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\avtokoh.local\www\modules\database\classes\Kohana\Database\Query.php:251
2012-11-08 06:24:00 --- DEBUG: #0 Z:\home\avtokoh.local\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT ??      ...', false, Array)
#1 Z:\home\avtokoh.local\www\application\classes\Model\businessadr.php(43): Kohana_Database_Query->execute()
#2 Z:\home\avtokoh.local\www\application\classes\Controller\ajax.php(190): Model_Businessadr->getLocations('37.617761', '55.755773', '10', '0', '5')
#3 Z:\home\avtokoh.local\www\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_catalog()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#6 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\avtokoh.local\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\avtokoh.local\www\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\avtokoh.local\www\modules\database\classes\Kohana\Database\Query.php:251
2012-11-08 06:26:01 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: markers ~ APPPATH\classes\Controller\ajax.php [ 216 ] in Z:\home\avtokoh.local\www\application\classes\Controller\ajax.php:216
2012-11-08 06:26:01 --- DEBUG: #0 Z:\home\avtokoh.local\www\application\classes\Controller\ajax.php(216): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\avtokoh...', 216, Array)
#1 Z:\home\avtokoh.local\www\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_catalog()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\avtokoh.local\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\avtokoh.local\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\avtokoh.local\www\application\classes\Controller\ajax.php:216
2012-11-08 06:27:10 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: markers ~ APPPATH\classes\Controller\ajax.php [ 216 ] in Z:\home\avtokoh.local\www\application\classes\Controller\ajax.php:216
2012-11-08 06:27:10 --- DEBUG: #0 Z:\home\avtokoh.local\www\application\classes\Controller\ajax.php(216): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\avtokoh...', 216, Array)
#1 Z:\home\avtokoh.local\www\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_catalog()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\avtokoh.local\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\avtokoh.local\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\avtokoh.local\www\application\classes\Controller\ajax.php:216
2012-11-08 06:42:08 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$num ~ APPPATH\classes\Controller\ajax.php [ 192 ] in Z:\home\avtokoh.local\www\application\classes\Controller\ajax.php:192
2012-11-08 06:42:08 --- DEBUG: #0 Z:\home\avtokoh.local\www\application\classes\Controller\ajax.php(192): Kohana_Core::error_handler(8, 'Undefined prope...', 'Z:\home\avtokoh...', 192, Array)
#1 Z:\home\avtokoh.local\www\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_catalog()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\avtokoh.local\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\avtokoh.local\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\avtokoh.local\www\application\classes\Controller\ajax.php:192
2012-11-08 06:42:09 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$num ~ APPPATH\classes\Controller\ajax.php [ 192 ] in Z:\home\avtokoh.local\www\application\classes\Controller\ajax.php:192
2012-11-08 06:42:09 --- DEBUG: #0 Z:\home\avtokoh.local\www\application\classes\Controller\ajax.php(192): Kohana_Core::error_handler(8, 'Undefined prope...', 'Z:\home\avtokoh...', 192, Array)
#1 Z:\home\avtokoh.local\www\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_catalog()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\avtokoh.local\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\avtokoh.local\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\avtokoh.local\www\application\classes\Controller\ajax.php:192
2012-11-08 06:43:07 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE ~ APPPATH\classes\Controller\ajax.php [ 200 ] in :
2012-11-08 06:43:07 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-08 06:43:55 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '.id  AS num, 
                business.id AS id,
                business.name' at line 2 [ SELECT 
                FOUND_ROWS business_adr.id  AS num, 
                business.id AS id,
                business.name AS name,
                business_adr.name AS business_name,
                business_adr.lat AS lat,
                business_adr.lng AS lng,
                business_adr.id AS aid,
                business_adr.city AS city,
                business_adr.street AS street,
                business_adr.phones AS phones,
                business_adr.sites AS sites,
                business_adr.email AS email,
                (6371 * acos( cos( radians(37.644321) ) * cos( radians( lat ) ) * cos( radians( lng ) - radians(55.765432) ) 
                + sin( radians(37.644321) ) * sin( radians( lat ) ) ) )
                AS distance
                 FROM `business_adr` JOIN `business` ON (`business_adr`.`id_business` = `business`.`id`) HAVING `distance` < '10' ORDER BY `distance` LIMIT 5 OFFSET 1 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\avtokoh.local\www\modules\database\classes\Kohana\Database\Query.php:251
2012-11-08 06:43:55 --- DEBUG: #0 Z:\home\avtokoh.local\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT ??      ...', false, Array)
#1 Z:\home\avtokoh.local\www\application\classes\Model\businessadr.php(45): Kohana_Database_Query->execute()
#2 Z:\home\avtokoh.local\www\application\classes\Controller\ajax.php(190): Model_Businessadr->getLocations(NULL, NULL, NULL, NULL, NULL)
#3 Z:\home\avtokoh.local\www\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_catalog()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#6 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\avtokoh.local\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\avtokoh.local\www\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\avtokoh.local\www\modules\database\classes\Kohana\Database\Query.php:251
2012-11-08 06:47:09 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AS num, 
                business.id AS id,
                business.name AS n' at line 2 [ SELECT 
                SQL_CALC_FOUND_ROWS * AS num, 
                business.id AS id,
                business.name AS name,
                business_adr.name AS business_name,
                business_adr.lat AS lat,
                business_adr.lng AS lng,
                business_adr.id AS aid,
                business_adr.city AS city,
                business_adr.street AS street,
                business_adr.phones AS phones,
                business_adr.sites AS sites,
                business_adr.email AS email,
                (6371 * acos( cos( radians(37.644321) ) * cos( radians( lat ) ) * cos( radians( lng ) - radians(55.765432) ) 
                + sin( radians(37.644321) ) * sin( radians( lat ) ) ) )
                AS distance
                 FROM `business_adr` JOIN `business` ON (`business_adr`.`id_business` = `business`.`id`) HAVING `distance` < '10' ORDER BY `distance` LIMIT 5 OFFSET 1 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\avtokoh.local\www\modules\database\classes\Kohana\Database\Query.php:251
2012-11-08 06:47:09 --- DEBUG: #0 Z:\home\avtokoh.local\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT ??      ...', false, Array)
#1 Z:\home\avtokoh.local\www\application\classes\Model\businessadr.php(45): Kohana_Database_Query->execute()
#2 Z:\home\avtokoh.local\www\application\classes\Controller\ajax.php(190): Model_Businessadr->getLocations(NULL, NULL, NULL, NULL, NULL)
#3 Z:\home\avtokoh.local\www\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_catalog()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#6 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\avtokoh.local\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\avtokoh.local\www\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\avtokoh.local\www\modules\database\classes\Kohana\Database\Query.php:251
2012-11-08 06:47:10 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AS num, 
                business.id AS id,
                business.name AS n' at line 2 [ SELECT 
                SQL_CALC_FOUND_ROWS * AS num, 
                business.id AS id,
                business.name AS name,
                business_adr.name AS business_name,
                business_adr.lat AS lat,
                business_adr.lng AS lng,
                business_adr.id AS aid,
                business_adr.city AS city,
                business_adr.street AS street,
                business_adr.phones AS phones,
                business_adr.sites AS sites,
                business_adr.email AS email,
                (6371 * acos( cos( radians(37.644321) ) * cos( radians( lat ) ) * cos( radians( lng ) - radians(55.765432) ) 
                + sin( radians(37.644321) ) * sin( radians( lat ) ) ) )
                AS distance
                 FROM `business_adr` JOIN `business` ON (`business_adr`.`id_business` = `business`.`id`) HAVING `distance` < '10' ORDER BY `distance` LIMIT 5 OFFSET 1 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\avtokoh.local\www\modules\database\classes\Kohana\Database\Query.php:251
2012-11-08 06:47:10 --- DEBUG: #0 Z:\home\avtokoh.local\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT ??      ...', false, Array)
#1 Z:\home\avtokoh.local\www\application\classes\Model\businessadr.php(45): Kohana_Database_Query->execute()
#2 Z:\home\avtokoh.local\www\application\classes\Controller\ajax.php(190): Model_Businessadr->getLocations(NULL, NULL, NULL, NULL, NULL)
#3 Z:\home\avtokoh.local\www\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_catalog()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#6 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\avtokoh.local\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\avtokoh.local\www\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\avtokoh.local\www\modules\database\classes\Kohana\Database\Query.php:251
2012-11-08 06:47:10 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AS num, 
                business.id AS id,
                business.name AS n' at line 2 [ SELECT 
                SQL_CALC_FOUND_ROWS * AS num, 
                business.id AS id,
                business.name AS name,
                business_adr.name AS business_name,
                business_adr.lat AS lat,
                business_adr.lng AS lng,
                business_adr.id AS aid,
                business_adr.city AS city,
                business_adr.street AS street,
                business_adr.phones AS phones,
                business_adr.sites AS sites,
                business_adr.email AS email,
                (6371 * acos( cos( radians(37.644321) ) * cos( radians( lat ) ) * cos( radians( lng ) - radians(55.765432) ) 
                + sin( radians(37.644321) ) * sin( radians( lat ) ) ) )
                AS distance
                 FROM `business_adr` JOIN `business` ON (`business_adr`.`id_business` = `business`.`id`) HAVING `distance` < '10' ORDER BY `distance` LIMIT 5 OFFSET 1 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\avtokoh.local\www\modules\database\classes\Kohana\Database\Query.php:251
2012-11-08 06:47:10 --- DEBUG: #0 Z:\home\avtokoh.local\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT ??      ...', false, Array)
#1 Z:\home\avtokoh.local\www\application\classes\Model\businessadr.php(45): Kohana_Database_Query->execute()
#2 Z:\home\avtokoh.local\www\application\classes\Controller\ajax.php(190): Model_Businessadr->getLocations(NULL, NULL, NULL, NULL, NULL)
#3 Z:\home\avtokoh.local\www\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_catalog()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#6 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\avtokoh.local\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\avtokoh.local\www\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\avtokoh.local\www\modules\database\classes\Kohana\Database\Query.php:251
2012-11-08 06:47:19 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ' 
                business.id AS id,
                business.name AS name,
 ' at line 2 [ SELECT 
                SQL_CALC_FOUND_ROWS, 
                business.id AS id,
                business.name AS name,
                business_adr.name AS business_name,
                business_adr.lat AS lat,
                business_adr.lng AS lng,
                business_adr.id AS aid,
                business_adr.city AS city,
                business_adr.street AS street,
                business_adr.phones AS phones,
                business_adr.sites AS sites,
                business_adr.email AS email,
                (6371 * acos( cos( radians(37.644321) ) * cos( radians( lat ) ) * cos( radians( lng ) - radians(55.765432) ) 
                + sin( radians(37.644321) ) * sin( radians( lat ) ) ) )
                AS distance
                 FROM `business_adr` JOIN `business` ON (`business_adr`.`id_business` = `business`.`id`) HAVING `distance` < '10' ORDER BY `distance` LIMIT 5 OFFSET 1 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\avtokoh.local\www\modules\database\classes\Kohana\Database\Query.php:251
2012-11-08 06:47:19 --- DEBUG: #0 Z:\home\avtokoh.local\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT ??      ...', false, Array)
#1 Z:\home\avtokoh.local\www\application\classes\Model\businessadr.php(45): Kohana_Database_Query->execute()
#2 Z:\home\avtokoh.local\www\application\classes\Controller\ajax.php(190): Model_Businessadr->getLocations(NULL, NULL, NULL, NULL, NULL)
#3 Z:\home\avtokoh.local\www\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_catalog()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#6 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\avtokoh.local\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\avtokoh.local\www\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\avtokoh.local\www\modules\database\classes\Kohana\Database\Query.php:251
2012-11-08 06:47:49 --- CRITICAL: ErrorException [ 8 ]: Undefined index: num ~ APPPATH\classes\Controller\ajax.php [ 199 ] in Z:\home\avtokoh.local\www\application\classes\Controller\ajax.php:199
2012-11-08 06:47:49 --- DEBUG: #0 Z:\home\avtokoh.local\www\application\classes\Controller\ajax.php(199): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\avtokoh...', 199, Array)
#1 Z:\home\avtokoh.local\www\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_catalog()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\avtokoh.local\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\avtokoh.local\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\avtokoh.local\www\application\classes\Controller\ajax.php:199
2012-11-08 06:47:50 --- CRITICAL: ErrorException [ 8 ]: Undefined index: num ~ APPPATH\classes\Controller\ajax.php [ 199 ] in Z:\home\avtokoh.local\www\application\classes\Controller\ajax.php:199
2012-11-08 06:47:50 --- DEBUG: #0 Z:\home\avtokoh.local\www\application\classes\Controller\ajax.php(199): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\avtokoh...', 199, Array)
#1 Z:\home\avtokoh.local\www\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_catalog()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\avtokoh.local\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\avtokoh.local\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\avtokoh.local\www\application\classes\Controller\ajax.php:199
2012-11-08 06:51:29 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Database_MySQL_Result::count_all() ~ APPPATH\classes\Controller\ajax.php [ 192 ] in :
2012-11-08 06:51:29 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-08 06:51:30 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Database_MySQL_Result::count_all() ~ APPPATH\classes\Controller\ajax.php [ 192 ] in :
2012-11-08 06:51:30 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-08 07:02:14 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'SELECT FOUND_ROWS() AS `total_rows`,
                business.id AS id,
      ' at line 2 [ SELECT 
                SELECT FOUND_ROWS() AS `total_rows`,
                business.id AS id,
                business.name AS name,
                business_adr.name AS business_name,
                business_adr.lat AS lat,
                business_adr.lng AS lng,
                business_adr.id AS aid,
                business_adr.city AS city,
                business_adr.street AS street,
                business_adr.phones AS phones,
                business_adr.sites AS sites,
                business_adr.email AS email,
                (6371 * acos( cos( radians(37.644321) ) * cos( radians( lat ) ) * cos( radians( lng ) - radians(55.765432) ) 
                + sin( radians(37.644321) ) * sin( radians( lat ) ) ) )
                AS distance
                 FROM `business_adr` JOIN `business` ON (`business_adr`.`id_business` = `business`.`id`) HAVING `distance` < '20' ORDER BY `distance` LIMIT 5 OFFSET 1 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\avtokoh.local\www\modules\database\classes\Kohana\Database\Query.php:251
2012-11-08 07:02:14 --- DEBUG: #0 Z:\home\avtokoh.local\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT ??      ...', false, Array)
#1 Z:\home\avtokoh.local\www\application\classes\Model\businessadr.php(45): Kohana_Database_Query->execute()
#2 Z:\home\avtokoh.local\www\application\classes\Controller\ajax.php(190): Model_Businessadr->getLocations(NULL, NULL, NULL, NULL, NULL)
#3 Z:\home\avtokoh.local\www\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_catalog()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#6 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\avtokoh.local\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\avtokoh.local\www\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\avtokoh.local\www\modules\database\classes\Kohana\Database\Query.php:251
2012-11-08 07:02:15 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'SELECT FOUND_ROWS() AS `total_rows`,
                business.id AS id,
      ' at line 2 [ SELECT 
                SELECT FOUND_ROWS() AS `total_rows`,
                business.id AS id,
                business.name AS name,
                business_adr.name AS business_name,
                business_adr.lat AS lat,
                business_adr.lng AS lng,
                business_adr.id AS aid,
                business_adr.city AS city,
                business_adr.street AS street,
                business_adr.phones AS phones,
                business_adr.sites AS sites,
                business_adr.email AS email,
                (6371 * acos( cos( radians(37.644321) ) * cos( radians( lat ) ) * cos( radians( lng ) - radians(55.765432) ) 
                + sin( radians(37.644321) ) * sin( radians( lat ) ) ) )
                AS distance
                 FROM `business_adr` JOIN `business` ON (`business_adr`.`id_business` = `business`.`id`) HAVING `distance` < '20' ORDER BY `distance` LIMIT 5 OFFSET 1 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\avtokoh.local\www\modules\database\classes\Kohana\Database\Query.php:251
2012-11-08 07:02:15 --- DEBUG: #0 Z:\home\avtokoh.local\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT ??      ...', false, Array)
#1 Z:\home\avtokoh.local\www\application\classes\Model\businessadr.php(45): Kohana_Database_Query->execute()
#2 Z:\home\avtokoh.local\www\application\classes\Controller\ajax.php(190): Model_Businessadr->getLocations(NULL, NULL, NULL, NULL, NULL)
#3 Z:\home\avtokoh.local\www\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_catalog()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#6 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\avtokoh.local\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\avtokoh.local\www\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\avtokoh.local\www\modules\database\classes\Kohana\Database\Query.php:251
2012-11-08 07:02:43 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'SELECT FOUND_ROWS AS total_rows,
                business.id AS id,
          ' at line 2 [ SELECT 
                SELECT FOUND_ROWS AS total_rows,
                business.id AS id,
                business.name AS name,
                business_adr.name AS business_name,
                business_adr.lat AS lat,
                business_adr.lng AS lng,
                business_adr.id AS aid,
                business_adr.city AS city,
                business_adr.street AS street,
                business_adr.phones AS phones,
                business_adr.sites AS sites,
                business_adr.email AS email,
                (6371 * acos( cos( radians(37.644321) ) * cos( radians( lat ) ) * cos( radians( lng ) - radians(55.765432) ) 
                + sin( radians(37.644321) ) * sin( radians( lat ) ) ) )
                AS distance
                 FROM `business_adr` JOIN `business` ON (`business_adr`.`id_business` = `business`.`id`) HAVING `distance` < '20' ORDER BY `distance` LIMIT 5 OFFSET 1 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\avtokoh.local\www\modules\database\classes\Kohana\Database\Query.php:251
2012-11-08 07:02:43 --- DEBUG: #0 Z:\home\avtokoh.local\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT ??      ...', false, Array)
#1 Z:\home\avtokoh.local\www\application\classes\Model\businessadr.php(45): Kohana_Database_Query->execute()
#2 Z:\home\avtokoh.local\www\application\classes\Controller\ajax.php(190): Model_Businessadr->getLocations(NULL, NULL, NULL, NULL, NULL)
#3 Z:\home\avtokoh.local\www\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_catalog()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#6 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\avtokoh.local\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\avtokoh.local\www\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\avtokoh.local\www\modules\database\classes\Kohana\Database\Query.php:251
2012-11-08 07:02:44 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'SELECT FOUND_ROWS AS total_rows,
                business.id AS id,
          ' at line 2 [ SELECT 
                SELECT FOUND_ROWS AS total_rows,
                business.id AS id,
                business.name AS name,
                business_adr.name AS business_name,
                business_adr.lat AS lat,
                business_adr.lng AS lng,
                business_adr.id AS aid,
                business_adr.city AS city,
                business_adr.street AS street,
                business_adr.phones AS phones,
                business_adr.sites AS sites,
                business_adr.email AS email,
                (6371 * acos( cos( radians(37.644321) ) * cos( radians( lat ) ) * cos( radians( lng ) - radians(55.765432) ) 
                + sin( radians(37.644321) ) * sin( radians( lat ) ) ) )
                AS distance
                 FROM `business_adr` JOIN `business` ON (`business_adr`.`id_business` = `business`.`id`) HAVING `distance` < '20' ORDER BY `distance` LIMIT 5 OFFSET 1 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\avtokoh.local\www\modules\database\classes\Kohana\Database\Query.php:251
2012-11-08 07:02:44 --- DEBUG: #0 Z:\home\avtokoh.local\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT ??      ...', false, Array)
#1 Z:\home\avtokoh.local\www\application\classes\Model\businessadr.php(45): Kohana_Database_Query->execute()
#2 Z:\home\avtokoh.local\www\application\classes\Controller\ajax.php(190): Model_Businessadr->getLocations(NULL, NULL, NULL, NULL, NULL)
#3 Z:\home\avtokoh.local\www\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_catalog()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#6 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\avtokoh.local\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\avtokoh.local\www\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\avtokoh.local\www\modules\database\classes\Kohana\Database\Query.php:251
2012-11-08 07:03:19 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AS total_rows,
                business.id AS id,
                business.n' at line 2 [ SELECT 
                SQL_CALC_FOUND_ROWS() AS total_rows,
                business.id AS id,
                business.name AS name,
                business_adr.name AS business_name,
                business_adr.lat AS lat,
                business_adr.lng AS lng,
                business_adr.id AS aid,
                business_adr.city AS city,
                business_adr.street AS street,
                business_adr.phones AS phones,
                business_adr.sites AS sites,
                business_adr.email AS email,
                (6371 * acos( cos( radians(37.644321) ) * cos( radians( lat ) ) * cos( radians( lng ) - radians(55.765432) ) 
                + sin( radians(37.644321) ) * sin( radians( lat ) ) ) )
                AS distance
                 FROM `business_adr` JOIN `business` ON (`business_adr`.`id_business` = `business`.`id`) HAVING `distance` < '20' ORDER BY `distance` LIMIT 5 OFFSET 1 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\avtokoh.local\www\modules\database\classes\Kohana\Database\Query.php:251
2012-11-08 07:03:19 --- DEBUG: #0 Z:\home\avtokoh.local\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT ??      ...', false, Array)
#1 Z:\home\avtokoh.local\www\application\classes\Model\businessadr.php(45): Kohana_Database_Query->execute()
#2 Z:\home\avtokoh.local\www\application\classes\Controller\ajax.php(190): Model_Businessadr->getLocations(NULL, NULL, NULL, NULL, NULL)
#3 Z:\home\avtokoh.local\www\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_catalog()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#6 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\avtokoh.local\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\avtokoh.local\www\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\avtokoh.local\www\modules\database\classes\Kohana\Database\Query.php:251
2012-11-08 07:03:20 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AS total_rows,
                business.id AS id,
                business.n' at line 2 [ SELECT 
                SQL_CALC_FOUND_ROWS() AS total_rows,
                business.id AS id,
                business.name AS name,
                business_adr.name AS business_name,
                business_adr.lat AS lat,
                business_adr.lng AS lng,
                business_adr.id AS aid,
                business_adr.city AS city,
                business_adr.street AS street,
                business_adr.phones AS phones,
                business_adr.sites AS sites,
                business_adr.email AS email,
                (6371 * acos( cos( radians(37.644321) ) * cos( radians( lat ) ) * cos( radians( lng ) - radians(55.765432) ) 
                + sin( radians(37.644321) ) * sin( radians( lat ) ) ) )
                AS distance
                 FROM `business_adr` JOIN `business` ON (`business_adr`.`id_business` = `business`.`id`) HAVING `distance` < '20' ORDER BY `distance` LIMIT 5 OFFSET 1 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\avtokoh.local\www\modules\database\classes\Kohana\Database\Query.php:251
2012-11-08 07:03:20 --- DEBUG: #0 Z:\home\avtokoh.local\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT ??      ...', false, Array)
#1 Z:\home\avtokoh.local\www\application\classes\Model\businessadr.php(45): Kohana_Database_Query->execute()
#2 Z:\home\avtokoh.local\www\application\classes\Controller\ajax.php(190): Model_Businessadr->getLocations(NULL, NULL, NULL, NULL, NULL)
#3 Z:\home\avtokoh.local\www\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_catalog()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#6 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\avtokoh.local\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\avtokoh.local\www\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\avtokoh.local\www\modules\database\classes\Kohana\Database\Query.php:251
2012-11-08 07:03:26 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AS total_rows,
                business.id AS id,
                business.nam' at line 2 [ SELECT 
                SQL_CALC_FOUND_ROWS AS total_rows,
                business.id AS id,
                business.name AS name,
                business_adr.name AS business_name,
                business_adr.lat AS lat,
                business_adr.lng AS lng,
                business_adr.id AS aid,
                business_adr.city AS city,
                business_adr.street AS street,
                business_adr.phones AS phones,
                business_adr.sites AS sites,
                business_adr.email AS email,
                (6371 * acos( cos( radians(37.644321) ) * cos( radians( lat ) ) * cos( radians( lng ) - radians(55.765432) ) 
                + sin( radians(37.644321) ) * sin( radians( lat ) ) ) )
                AS distance
                 FROM `business_adr` JOIN `business` ON (`business_adr`.`id_business` = `business`.`id`) HAVING `distance` < '20' ORDER BY `distance` LIMIT 5 OFFSET 1 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\avtokoh.local\www\modules\database\classes\Kohana\Database\Query.php:251
2012-11-08 07:03:26 --- DEBUG: #0 Z:\home\avtokoh.local\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT ??      ...', false, Array)
#1 Z:\home\avtokoh.local\www\application\classes\Model\businessadr.php(45): Kohana_Database_Query->execute()
#2 Z:\home\avtokoh.local\www\application\classes\Controller\ajax.php(190): Model_Businessadr->getLocations(NULL, NULL, NULL, NULL, NULL)
#3 Z:\home\avtokoh.local\www\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_catalog()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#6 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\avtokoh.local\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\avtokoh.local\www\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\avtokoh.local\www\modules\database\classes\Kohana\Database\Query.php:251
2012-11-08 07:10:14 --- CRITICAL: ErrorException [ 8 ]: Undefined index: total_rows ~ APPPATH\classes\Controller\ajax.php [ 199 ] in Z:\home\avtokoh.local\www\application\classes\Controller\ajax.php:199
2012-11-08 07:10:14 --- DEBUG: #0 Z:\home\avtokoh.local\www\application\classes\Controller\ajax.php(199): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\avtokoh...', 199, Array)
#1 Z:\home\avtokoh.local\www\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_catalog()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\avtokoh.local\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\avtokoh.local\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\avtokoh.local\www\application\classes\Controller\ajax.php:199
2012-11-08 07:10:15 --- CRITICAL: ErrorException [ 8 ]: Undefined index: total_rows ~ APPPATH\classes\Controller\ajax.php [ 199 ] in Z:\home\avtokoh.local\www\application\classes\Controller\ajax.php:199
2012-11-08 07:10:15 --- DEBUG: #0 Z:\home\avtokoh.local\www\application\classes\Controller\ajax.php(199): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\avtokoh...', 199, Array)
#1 Z:\home\avtokoh.local\www\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_catalog()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\avtokoh.local\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\avtokoh.local\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\avtokoh.local\www\application\classes\Controller\ajax.php:199
2012-11-08 07:10:37 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: length ~ APPPATH\classes\Controller\ajax.php [ 217 ] in Z:\home\avtokoh.local\www\application\classes\Controller\ajax.php:217
2012-11-08 07:10:37 --- DEBUG: #0 Z:\home\avtokoh.local\www\application\classes\Controller\ajax.php(217): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\avtokoh...', 217, Array)
#1 Z:\home\avtokoh.local\www\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_catalog()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\avtokoh.local\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\avtokoh.local\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\avtokoh.local\www\application\classes\Controller\ajax.php:217
2012-11-08 07:10:37 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: length ~ APPPATH\classes\Controller\ajax.php [ 217 ] in Z:\home\avtokoh.local\www\application\classes\Controller\ajax.php:217
2012-11-08 07:10:37 --- DEBUG: #0 Z:\home\avtokoh.local\www\application\classes\Controller\ajax.php(217): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\avtokoh...', 217, Array)
#1 Z:\home\avtokoh.local\www\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_catalog()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\avtokoh.local\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\avtokoh.local\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\avtokoh.local\www\application\classes\Controller\ajax.php:217
2012-11-08 07:15:24 --- CRITICAL: Kohana_Exception [ 0 ]: The db property does not exist in the Model_Businessadr class ~ MODPATH\orm\classes\Kohana\ORM.php [ 684 ] in Z:\home\avtokoh.local\www\modules\orm\classes\Kohana\ORM.php:600
2012-11-08 07:15:24 --- DEBUG: #0 Z:\home\avtokoh.local\www\modules\orm\classes\Kohana\ORM.php(600): Kohana_ORM->get('db')
#1 Z:\home\avtokoh.local\www\application\classes\Model\businessadr.php(36): Kohana_ORM->__get('db')
#2 Z:\home\avtokoh.local\www\application\classes\Controller\ajax.php(190): Model_Businessadr->getLocations(NULL, NULL, NULL, NULL, NULL)
#3 Z:\home\avtokoh.local\www\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_catalog()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#6 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\avtokoh.local\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\avtokoh.local\www\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\avtokoh.local\www\modules\orm\classes\Kohana\ORM.php:600
2012-11-08 07:15:25 --- CRITICAL: Kohana_Exception [ 0 ]: The db property does not exist in the Model_Businessadr class ~ MODPATH\orm\classes\Kohana\ORM.php [ 684 ] in Z:\home\avtokoh.local\www\modules\orm\classes\Kohana\ORM.php:600
2012-11-08 07:15:25 --- DEBUG: #0 Z:\home\avtokoh.local\www\modules\orm\classes\Kohana\ORM.php(600): Kohana_ORM->get('db')
#1 Z:\home\avtokoh.local\www\application\classes\Model\businessadr.php(36): Kohana_ORM->__get('db')
#2 Z:\home\avtokoh.local\www\application\classes\Controller\ajax.php(190): Model_Businessadr->getLocations(NULL, NULL, NULL, NULL, NULL)
#3 Z:\home\avtokoh.local\www\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_catalog()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#6 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\avtokoh.local\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\avtokoh.local\www\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\avtokoh.local\www\modules\orm\classes\Kohana\ORM.php:600
2012-11-08 07:15:25 --- CRITICAL: Kohana_Exception [ 0 ]: The db property does not exist in the Model_Businessadr class ~ MODPATH\orm\classes\Kohana\ORM.php [ 684 ] in Z:\home\avtokoh.local\www\modules\orm\classes\Kohana\ORM.php:600
2012-11-08 07:15:25 --- DEBUG: #0 Z:\home\avtokoh.local\www\modules\orm\classes\Kohana\ORM.php(600): Kohana_ORM->get('db')
#1 Z:\home\avtokoh.local\www\application\classes\Model\businessadr.php(36): Kohana_ORM->__get('db')
#2 Z:\home\avtokoh.local\www\application\classes\Controller\ajax.php(190): Model_Businessadr->getLocations(NULL, NULL, NULL, NULL, NULL)
#3 Z:\home\avtokoh.local\www\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_catalog()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#6 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\avtokoh.local\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\avtokoh.local\www\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\avtokoh.local\www\modules\orm\classes\Kohana\ORM.php:600
2012-11-08 07:15:51 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Database_Query_Builder_Select::current() ~ APPPATH\classes\Model\businessadr.php [ 36 ] in :
2012-11-08 07:15:51 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-08 07:16:43 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Database_Query_Builder_Select::current() ~ APPPATH\classes\Model\businessadr.php [ 36 ] in :
2012-11-08 07:16:43 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-08 07:16:44 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Database_Query_Builder_Select::current() ~ APPPATH\classes\Model\businessadr.php [ 36 ] in :
2012-11-08 07:16:44 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-08 07:17:55 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Database_Query_Builder_Select::$total_rows ~ APPPATH\classes\Model\businessadr.php [ 37 ] in Z:\home\avtokoh.local\www\application\classes\Model\businessadr.php:37
2012-11-08 07:17:55 --- DEBUG: #0 Z:\home\avtokoh.local\www\application\classes\Model\businessadr.php(37): Kohana_Core::error_handler(8, 'Undefined prope...', 'Z:\home\avtokoh...', 37, Array)
#1 Z:\home\avtokoh.local\www\application\classes\Controller\ajax.php(190): Model_Businessadr->getLocations(NULL, NULL, NULL, NULL, NULL)
#2 Z:\home\avtokoh.local\www\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_catalog()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#5 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\avtokoh.local\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\avtokoh.local\www\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\avtokoh.local\www\application\classes\Model\businessadr.php:37
2012-11-08 07:24:31 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\Controller\ajax.php [ 193 ] in Z:\home\avtokoh.local\www\application\classes\Controller\ajax.php:193
2012-11-08 07:24:31 --- DEBUG: #0 Z:\home\avtokoh.local\www\application\classes\Controller\ajax.php(193): Kohana_Core::error_handler(8, 'Undefined offse...', 'Z:\home\avtokoh...', 193, Array)
#1 Z:\home\avtokoh.local\www\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_catalog()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\avtokoh.local\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\avtokoh.local\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\avtokoh.local\www\application\classes\Controller\ajax.php:193
2012-11-08 07:24:32 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\Controller\ajax.php [ 193 ] in Z:\home\avtokoh.local\www\application\classes\Controller\ajax.php:193
2012-11-08 07:24:32 --- DEBUG: #0 Z:\home\avtokoh.local\www\application\classes\Controller\ajax.php(193): Kohana_Core::error_handler(8, 'Undefined offse...', 'Z:\home\avtokoh...', 193, Array)
#1 Z:\home\avtokoh.local\www\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_catalog()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\avtokoh.local\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\avtokoh.local\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\avtokoh.local\www\application\classes\Controller\ajax.php:193
2012-11-08 22:51:56 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: length ~ APPPATH\classes\Controller\ajax.php [ 216 ] in Z:\home\avtokoh.local\www\application\classes\Controller\ajax.php:216
2012-11-08 22:51:56 --- DEBUG: #0 Z:\home\avtokoh.local\www\application\classes\Controller\ajax.php(216): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\avtokoh...', 216, Array)
#1 Z:\home\avtokoh.local\www\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_catalog()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\avtokoh.local\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\avtokoh.local\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\avtokoh.local\www\application\classes\Controller\ajax.php:216
2012-11-08 22:52:06 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: length ~ APPPATH\classes\Controller\ajax.php [ 216 ] in Z:\home\avtokoh.local\www\application\classes\Controller\ajax.php:216
2012-11-08 22:52:06 --- DEBUG: #0 Z:\home\avtokoh.local\www\application\classes\Controller\ajax.php(216): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\avtokoh...', 216, Array)
#1 Z:\home\avtokoh.local\www\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_catalog()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\avtokoh.local\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\avtokoh.local\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\avtokoh.local\www\application\classes\Controller\ajax.php:216
2012-11-08 22:58:50 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: lat ~ APPPATH\classes\Controller\ajax.php [ 191 ] in Z:\home\avtokoh.local\www\application\classes\Controller\ajax.php:191
2012-11-08 22:58:50 --- DEBUG: #0 Z:\home\avtokoh.local\www\application\classes\Controller\ajax.php(191): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\avtokoh...', 191, Array)
#1 Z:\home\avtokoh.local\www\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_catalog()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\avtokoh.local\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\avtokoh.local\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\avtokoh.local\www\application\classes\Controller\ajax.php:191
2012-11-08 22:59:17 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Database_MySQL_Result::count_all() ~ APPPATH\classes\Controller\ajax.php [ 194 ] in :
2012-11-08 22:59:17 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-08 23:19:21 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: markers ~ APPPATH\classes\Controller\ajax.php [ 217 ] in Z:\home\avtokoh.local\www\application\classes\Controller\ajax.php:217
2012-11-08 23:19:21 --- DEBUG: #0 Z:\home\avtokoh.local\www\application\classes\Controller\ajax.php(217): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\avtokoh...', 217, Array)
#1 Z:\home\avtokoh.local\www\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_catalog()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\avtokoh.local\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\avtokoh.local\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\avtokoh.local\www\application\classes\Controller\ajax.php:217
2012-11-08 23:19:34 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: markers ~ APPPATH\classes\Controller\ajax.php [ 217 ] in Z:\home\avtokoh.local\www\application\classes\Controller\ajax.php:217
2012-11-08 23:19:34 --- DEBUG: #0 Z:\home\avtokoh.local\www\application\classes\Controller\ajax.php(217): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\avtokoh...', 217, Array)
#1 Z:\home\avtokoh.local\www\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_catalog()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\avtokoh.local\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\avtokoh.local\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\avtokoh.local\www\application\classes\Controller\ajax.php:217
2012-11-08 23:20:14 --- CRITICAL: Database_Exception [ 1582 ]: Incorrect parameter count in the call to native function 'radians' [ SELECT 
                business_adr.lat AS lat,
                business_adr.lng AS lng,
                business_adr.id AS aid,
                (6371 * acos( cos( radians() ) * cos( radians( lat ) ) * cos( radians( lng ) - radians() ) 
                + sin( radians() ) * sin( radians( lat ) ) ) )
                AS distance
                 FROM `business_adr` JOIN `business` ON (`business_adr`.`id_business` = `business`.`id`) HAVING `distance` < NULL ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\avtokoh.local\www\modules\database\classes\Kohana\Database\Query.php:251
2012-11-08 23:20:14 --- DEBUG: #0 Z:\home\avtokoh.local\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT ??      ...', false, Array)
#1 Z:\home\avtokoh.local\www\application\classes\Model\businessadr.php(88): Kohana_Database_Query->execute()
#2 Z:\home\avtokoh.local\www\application\classes\Controller\ajax.php(191): Model_Businessadr->getCountLocations(NULL, NULL, NULL, NULL, NULL, NULL)
#3 Z:\home\avtokoh.local\www\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_catalog()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#6 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\avtokoh.local\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\avtokoh.local\www\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\avtokoh.local\www\modules\database\classes\Kohana\Database\Query.php:251
2012-11-08 23:21:47 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: markers ~ APPPATH\classes\Controller\ajax.php [ 217 ] in Z:\home\avtokoh.local\www\application\classes\Controller\ajax.php:217
2012-11-08 23:21:47 --- DEBUG: #0 Z:\home\avtokoh.local\www\application\classes\Controller\ajax.php(217): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\avtokoh...', 217, Array)
#1 Z:\home\avtokoh.local\www\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_catalog()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\avtokoh.local\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\avtokoh.local\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\avtokoh.local\www\application\classes\Controller\ajax.php:217
2012-11-08 23:23:52 --- CRITICAL: Database_Exception [ 1582 ]: Incorrect parameter count in the call to native function 'radians' [ SELECT 
                business.id AS id,
                business.name AS name,
                business_adr.name AS business_name,
                business_adr.lat AS lat,
                business_adr.lng AS lng,
                business_adr.id AS aid,
                business_adr.city AS city,
                business_adr.street AS street,
                business_adr.phones AS phones,
                business_adr.sites AS sites,
                business_adr.email AS email,
                (6371 * acos( cos( radians() ) * cos( radians( lat ) ) * cos( radians( lng ) - radians() ) 
                + sin( radians() ) * sin( radians( lat ) ) ) )
                AS distance
                 FROM `business_adr` JOIN `business` ON (`business_adr`.`id_business` = `business`.`id`) HAVING `distance` < NULL ORDER BY `distance` ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\avtokoh.local\www\modules\database\classes\Kohana\Database\Query.php:251
2012-11-08 23:23:52 --- DEBUG: #0 Z:\home\avtokoh.local\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT ??      ...', false, Array)
#1 Z:\home\avtokoh.local\www\application\classes\Model\businessadr.php(48): Kohana_Database_Query->execute()
#2 Z:\home\avtokoh.local\www\application\classes\Controller\ajax.php(191): Model_Businessadr->getLocations(NULL, NULL, NULL, NULL, NULL, NULL)
#3 Z:\home\avtokoh.local\www\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_catalog()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#6 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\avtokoh.local\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\avtokoh.local\www\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\avtokoh.local\www\modules\database\classes\Kohana\Database\Query.php:251
2012-11-08 23:53:35 --- CRITICAL: ErrorException [ 2 ]: Missing argument 1 for Model_Brand::getCatalogBrands(), called in Z:\home\avtokoh.local\www\application\classes\Controller\catalog.php on line 11 and defined ~ APPPATH\classes\Model\brand.php [ 13 ] in Z:\home\avtokoh.local\www\application\classes\Model\brand.php:13
2012-11-08 23:53:35 --- DEBUG: #0 Z:\home\avtokoh.local\www\application\classes\Model\brand.php(13): Kohana_Core::error_handler(2, 'Missing argumen...', 'Z:\home\avtokoh...', 13, Array)
#1 Z:\home\avtokoh.local\www\application\classes\Controller\catalog.php(11): Model_Brand->getCatalogBrands()
#2 Z:\home\avtokoh.local\www\system\classes\Kohana\Controller.php(84): Controller_Catalog->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Catalog))
#5 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\avtokoh.local\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\avtokoh.local\www\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\avtokoh.local\www\application\classes\Model\brand.php:13