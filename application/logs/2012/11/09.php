<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2012-11-09 00:00:26 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'WHERE id_business_adr = 2660' at line 3 [ SELECT DISTINCT brand.name AS name, brand.id AS id  
                      FROM brand 
                      INNER JOIN  business_cars ON brand.id = business_cars.id_brand ORDER BY brand.name WHERE id_business_adr = 2660 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\avtokoh.local\www\modules\database\classes\Kohana\Database\Query.php:251
2012-11-09 00:00:26 --- DEBUG: #0 Z:\home\avtokoh.local\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT DISTINCT...', false, Array)
#1 Z:\home\avtokoh.local\www\application\classes\Model\brand.php(27): Kohana_Database_Query->execute()
#2 Z:\home\avtokoh.local\www\application\classes\Controller\ajax.php(200): Model_Brand->getCatalogBrands('2660')
#3 Z:\home\avtokoh.local\www\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_catalog()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#6 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\avtokoh.local\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\avtokoh.local\www\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\avtokoh.local\www\modules\database\classes\Kohana\Database\Query.php:251
2012-11-09 00:00:35 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'WHERE id_business_adr = 2660' at line 3 [ SELECT DISTINCT brand.name AS name, brand.id AS id  
                      FROM brand 
                      INNER JOIN  business_cars ON brand.id = business_cars.id_brand ORDER BY brand.name WHERE id_business_adr = 2660 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\avtokoh.local\www\modules\database\classes\Kohana\Database\Query.php:251
2012-11-09 00:00:35 --- DEBUG: #0 Z:\home\avtokoh.local\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT DISTINCT...', false, Array)
#1 Z:\home\avtokoh.local\www\application\classes\Model\brand.php(27): Kohana_Database_Query->execute()
#2 Z:\home\avtokoh.local\www\application\classes\Controller\ajax.php(200): Model_Brand->getCatalogBrands('2660')
#3 Z:\home\avtokoh.local\www\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_catalog()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#6 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\avtokoh.local\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\avtokoh.local\www\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\avtokoh.local\www\modules\database\classes\Kohana\Database\Query.php:251
2012-11-09 00:30:33 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE ~ APPPATH\classes\Model\businessadr.php [ 91 ] in :
2012-11-09 00:30:33 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-09 00:30:41 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE ~ APPPATH\classes\Model\businessadr.php [ 91 ] in :
2012-11-09 00:30:41 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-09 00:41:30 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: endRec ~ APPPATH\classes\Controller\ajax.php [ 179 ] in Z:\home\avtokoh.local\www\application\classes\Controller\ajax.php:179
2012-11-09 00:41:30 --- DEBUG: #0 Z:\home\avtokoh.local\www\application\classes\Controller\ajax.php(179): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\avtokoh...', 179, Array)
#1 Z:\home\avtokoh.local\www\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_catalog()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\avtokoh.local\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\avtokoh.local\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\avtokoh.local\www\application\classes\Controller\ajax.php:179
2012-11-09 00:41:41 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: endRec ~ APPPATH\classes\Controller\ajax.php [ 179 ] in Z:\home\avtokoh.local\www\application\classes\Controller\ajax.php:179
2012-11-09 00:41:41 --- DEBUG: #0 Z:\home\avtokoh.local\www\application\classes\Controller\ajax.php(179): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\avtokoh...', 179, Array)
#1 Z:\home\avtokoh.local\www\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_catalog()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\avtokoh.local\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\avtokoh.local\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\avtokoh.local\www\application\classes\Controller\ajax.php:179
2012-11-09 00:44:43 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: markers ~ APPPATH\classes\Controller\ajax.php [ 219 ] in Z:\home\avtokoh.local\www\application\classes\Controller\ajax.php:219
2012-11-09 00:44:43 --- DEBUG: #0 Z:\home\avtokoh.local\www\application\classes\Controller\ajax.php(219): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\avtokoh...', 219, Array)
#1 Z:\home\avtokoh.local\www\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_catalog()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\avtokoh.local\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\avtokoh.local\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\avtokoh.local\www\application\classes\Controller\ajax.php:219
2012-11-09 00:44:51 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: markers ~ APPPATH\classes\Controller\ajax.php [ 219 ] in Z:\home\avtokoh.local\www\application\classes\Controller\ajax.php:219
2012-11-09 00:44:51 --- DEBUG: #0 Z:\home\avtokoh.local\www\application\classes\Controller\ajax.php(219): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\avtokoh...', 219, Array)
#1 Z:\home\avtokoh.local\www\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_catalog()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\avtokoh.local\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\avtokoh.local\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\avtokoh.local\www\application\classes\Controller\ajax.php:219
2012-11-09 00:44:56 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: markers ~ APPPATH\classes\Controller\ajax.php [ 219 ] in Z:\home\avtokoh.local\www\application\classes\Controller\ajax.php:219
2012-11-09 00:44:56 --- DEBUG: #0 Z:\home\avtokoh.local\www\application\classes\Controller\ajax.php(219): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\avtokoh...', 219, Array)
#1 Z:\home\avtokoh.local\www\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_catalog()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\avtokoh.local\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\avtokoh.local\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\avtokoh.local\www\application\classes\Controller\ajax.php:219
2012-11-09 00:44:57 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: markers ~ APPPATH\classes\Controller\ajax.php [ 219 ] in Z:\home\avtokoh.local\www\application\classes\Controller\ajax.php:219
2012-11-09 00:44:57 --- DEBUG: #0 Z:\home\avtokoh.local\www\application\classes\Controller\ajax.php(219): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\avtokoh...', 219, Array)
#1 Z:\home\avtokoh.local\www\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_catalog()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\avtokoh.local\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\avtokoh.local\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\avtokoh.local\www\application\classes\Controller\ajax.php:219
2012-11-09 00:44:58 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: markers ~ APPPATH\classes\Controller\ajax.php [ 219 ] in Z:\home\avtokoh.local\www\application\classes\Controller\ajax.php:219
2012-11-09 00:44:58 --- DEBUG: #0 Z:\home\avtokoh.local\www\application\classes\Controller\ajax.php(219): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\avtokoh...', 219, Array)
#1 Z:\home\avtokoh.local\www\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_catalog()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\avtokoh.local\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\avtokoh.local\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\avtokoh.local\www\application\classes\Controller\ajax.php:219
2012-11-09 00:45:01 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: markers ~ APPPATH\classes\Controller\ajax.php [ 219 ] in Z:\home\avtokoh.local\www\application\classes\Controller\ajax.php:219
2012-11-09 00:45:01 --- DEBUG: #0 Z:\home\avtokoh.local\www\application\classes\Controller\ajax.php(219): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\avtokoh...', 219, Array)
#1 Z:\home\avtokoh.local\www\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_catalog()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\avtokoh.local\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\avtokoh.local\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\avtokoh.local\www\application\classes\Controller\ajax.php:219
2012-11-09 00:45:01 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: markers ~ APPPATH\classes\Controller\ajax.php [ 219 ] in Z:\home\avtokoh.local\www\application\classes\Controller\ajax.php:219
2012-11-09 00:45:01 --- DEBUG: #0 Z:\home\avtokoh.local\www\application\classes\Controller\ajax.php(219): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\avtokoh...', 219, Array)
#1 Z:\home\avtokoh.local\www\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_catalog()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\avtokoh.local\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\avtokoh.local\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\avtokoh.local\www\application\classes\Controller\ajax.php:219
2012-11-09 00:45:04 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: markers ~ APPPATH\classes\Controller\ajax.php [ 219 ] in Z:\home\avtokoh.local\www\application\classes\Controller\ajax.php:219
2012-11-09 00:45:04 --- DEBUG: #0 Z:\home\avtokoh.local\www\application\classes\Controller\ajax.php(219): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\avtokoh...', 219, Array)
#1 Z:\home\avtokoh.local\www\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_catalog()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\avtokoh.local\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\avtokoh.local\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\avtokoh.local\www\application\classes\Controller\ajax.php:219
2012-11-09 02:11:19 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\main.php [ 57 ] in Z:\home\avtokoh.local\www\application\views\main.php:57
2012-11-09 02:11:19 --- DEBUG: #0 Z:\home\avtokoh.local\www\application\views\main.php(57): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\avtokoh...', 57, Array)
#1 Z:\home\avtokoh.local\www\system\classes\Kohana\View.php(61): include('Z:\home\avtokoh...')
#2 Z:\home\avtokoh.local\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\avtokoh...', Array)
#3 Z:\home\avtokoh.local\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 Z:\home\avtokoh.local\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Cars))
#7 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\avtokoh.local\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\avtokoh.local\www\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\avtokoh.local\www\application\views\main.php:57
2012-11-09 02:18:03 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\main.php [ 57 ] in Z:\home\avtokoh.local\www\application\views\main.php:57
2012-11-09 02:18:03 --- DEBUG: #0 Z:\home\avtokoh.local\www\application\views\main.php(57): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\avtokoh...', 57, Array)
#1 Z:\home\avtokoh.local\www\system\classes\Kohana\View.php(61): include('Z:\home\avtokoh...')
#2 Z:\home\avtokoh.local\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\avtokoh...', Array)
#3 Z:\home\avtokoh.local\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 Z:\home\avtokoh.local\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Cars))
#7 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\avtokoh.local\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\avtokoh.local\www\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\avtokoh.local\www\application\views\main.php:57
2012-11-09 02:18:27 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\main.php [ 57 ] in Z:\home\avtokoh.local\www\application\views\main.php:57
2012-11-09 02:18:27 --- DEBUG: #0 Z:\home\avtokoh.local\www\application\views\main.php(57): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\avtokoh...', 57, Array)
#1 Z:\home\avtokoh.local\www\system\classes\Kohana\View.php(61): include('Z:\home\avtokoh...')
#2 Z:\home\avtokoh.local\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\avtokoh...', Array)
#3 Z:\home\avtokoh.local\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 Z:\home\avtokoh.local\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Cars))
#7 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\avtokoh.local\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\avtokoh.local\www\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\avtokoh.local\www\application\views\main.php:57
2012-11-09 02:18:31 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\main.php [ 57 ] in Z:\home\avtokoh.local\www\application\views\main.php:57
2012-11-09 02:18:31 --- DEBUG: #0 Z:\home\avtokoh.local\www\application\views\main.php(57): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\avtokoh...', 57, Array)
#1 Z:\home\avtokoh.local\www\system\classes\Kohana\View.php(61): include('Z:\home\avtokoh...')
#2 Z:\home\avtokoh.local\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\avtokoh...', Array)
#3 Z:\home\avtokoh.local\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 Z:\home\avtokoh.local\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Cars))
#7 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\avtokoh.local\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\avtokoh.local\www\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\avtokoh.local\www\application\views\main.php:57
2012-11-09 02:22:42 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH\classes\Controller\cars.php [ 18 ] in :
2012-11-09 02:22:42 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-09 02:24:36 --- CRITICAL: Database_Exception [ 1582 ]: Incorrect parameter count in the call to native function 'radians' [ SELECT 
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
2012-11-09 02:24:36 --- DEBUG: #0 Z:\home\avtokoh.local\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT ??      ...', false, Array)
#1 Z:\home\avtokoh.local\www\application\classes\Model\businessadr.php(48): Kohana_Database_Query->execute()
#2 Z:\home\avtokoh.local\www\application\classes\Controller\ajax.php(201): Model_Businessadr->getLocations(NULL, NULL, NULL, NULL, NULL, NULL)
#3 Z:\home\avtokoh.local\www\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_catalog()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#6 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\avtokoh.local\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\avtokoh.local\www\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\avtokoh.local\www\modules\database\classes\Kohana\Database\Query.php:251
2012-11-09 02:35:58 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH\classes\Controller\cars.php [ 10 ] in :
2012-11-09 02:35:58 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-09 02:44:34 --- CRITICAL: Kohana_Exception [ 0 ]: The count property does not exist in the Model_Brand class ~ MODPATH\orm\classes\Kohana\ORM.php [ 684 ] in Z:\home\avtokoh.local\www\modules\orm\classes\Kohana\ORM.php:600
2012-11-09 02:44:34 --- DEBUG: #0 Z:\home\avtokoh.local\www\modules\orm\classes\Kohana\ORM.php(600): Kohana_ORM->get('count')
#1 Z:\home\avtokoh.local\www\application\classes\Controller\cars.php(14): Kohana_ORM->__get('count')
#2 Z:\home\avtokoh.local\www\system\classes\Kohana\Controller.php(69): Controller_Cars->before()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Cars))
#5 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\avtokoh.local\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\avtokoh.local\www\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\avtokoh.local\www\modules\orm\classes\Kohana\ORM.php:600
2012-11-09 02:45:07 --- CRITICAL: ErrorException [ 1 ]: Call to undefined function find_all() ~ APPPATH\classes\Controller\cars.php [ 13 ] in :
2012-11-09 02:45:07 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-09 02:46:17 --- CRITICAL: ErrorException [ 1 ]: Call to undefined function find_all() ~ APPPATH\classes\Controller\cars.php [ 13 ] in :
2012-11-09 02:46:17 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-09 02:46:37 --- CRITICAL: ErrorException [ 1 ]: Call to undefined function find() ~ APPPATH\classes\Controller\cars.php [ 13 ] in :
2012-11-09 02:46:37 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-09 02:47:24 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: model_url ~ APPPATH\classes\Controller\cars.php [ 39 ] in Z:\home\avtokoh.local\www\application\classes\Controller\cars.php:39
2012-11-09 02:47:24 --- DEBUG: #0 Z:\home\avtokoh.local\www\application\classes\Controller\cars.php(39): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\avtokoh...', 39, Array)
#1 Z:\home\avtokoh.local\www\system\classes\Kohana\Controller.php(84): Controller_Cars->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Cars))
#4 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\avtokoh.local\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\avtokoh.local\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\avtokoh.local\www\application\classes\Controller\cars.php:39
2012-11-09 02:48:15 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$count ~ APPPATH\classes\Controller\cars.php [ 35 ] in Z:\home\avtokoh.local\www\application\classes\Controller\cars.php:35
2012-11-09 02:48:15 --- DEBUG: #0 Z:\home\avtokoh.local\www\application\classes\Controller\cars.php(35): Kohana_Core::error_handler(8, 'Undefined prope...', 'Z:\home\avtokoh...', 35, Array)
#1 Z:\home\avtokoh.local\www\system\classes\Kohana\Controller.php(84): Controller_Cars->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Cars))
#4 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\avtokoh.local\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\avtokoh.local\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\avtokoh.local\www\application\classes\Controller\cars.php:35
2012-11-09 02:57:55 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '*', expecting T_FUNCTION ~ APPPATH\classes\Controller\cars.php [ 24 ] in :
2012-11-09 02:57:55 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-09 02:57:57 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '*', expecting T_FUNCTION ~ APPPATH\classes\Controller\cars.php [ 24 ] in :
2012-11-09 02:57:57 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-09 02:59:47 --- CRITICAL: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Kohana_Exception::log() must be an instance of Exception, instance of Controller_Cars given, called in Z:\home\avtokoh.local\www\application\classes\Controller\cars.php on line 18 and defined ~ SYSPATH\classes\Kohana\Kohana\Exception.php [ 140 ] in Z:\home\avtokoh.local\www\system\classes\Kohana\Kohana\Exception.php:140
2012-11-09 02:59:47 --- DEBUG: #0 Z:\home\avtokoh.local\www\system\classes\Kohana\Kohana\Exception.php(140): Kohana_Core::error_handler(4096, 'Argument 1 pass...', 'Z:\home\avtokoh...', 140, Array)
#1 Z:\home\avtokoh.local\www\application\classes\Controller\cars.php(18): Kohana_Kohana_Exception::log(Object(Controller_Cars))
#2 Z:\home\avtokoh.local\www\system\classes\Kohana\Controller.php(69): Controller_Cars->before()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Cars))
#5 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\avtokoh.local\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\avtokoh.local\www\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\avtokoh.local\www\system\classes\Kohana\Kohana\Exception.php:140
2012-11-09 03:00:19 --- CRITICAL: View_Exception [ 0 ]: The requested view http/404 could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in Z:\home\avtokoh.local\www\system\classes\Kohana\View.php:137
2012-11-09 03:00:19 --- DEBUG: #0 Z:\home\avtokoh.local\www\system\classes\Kohana\View.php(137): Kohana_View->set_filename('http/404')
#1 Z:\home\avtokoh.local\www\system\classes\Kohana\View.php(30): Kohana_View->__construct('http/404', NULL)
#2 Z:\home\avtokoh.local\www\application\classes\Controller\cars.php(21): Kohana_View::factory('http/404')
#3 Z:\home\avtokoh.local\www\system\classes\Kohana\Controller.php(69): Controller_Cars->before()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Cars))
#6 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\avtokoh.local\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\avtokoh.local\www\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\avtokoh.local\www\system\classes\Kohana\View.php:137
2012-11-09 03:00:21 --- CRITICAL: View_Exception [ 0 ]: The requested view http/404 could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in Z:\home\avtokoh.local\www\system\classes\Kohana\View.php:137
2012-11-09 03:00:21 --- DEBUG: #0 Z:\home\avtokoh.local\www\system\classes\Kohana\View.php(137): Kohana_View->set_filename('http/404')
#1 Z:\home\avtokoh.local\www\system\classes\Kohana\View.php(30): Kohana_View->__construct('http/404', NULL)
#2 Z:\home\avtokoh.local\www\application\classes\Controller\cars.php(21): Kohana_View::factory('http/404')
#3 Z:\home\avtokoh.local\www\system\classes\Kohana\Controller.php(69): Controller_Cars->before()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Cars))
#6 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\avtokoh.local\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\avtokoh.local\www\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\avtokoh.local\www\system\classes\Kohana\View.php:137
2012-11-09 03:00:42 --- CRITICAL: View_Exception [ 0 ]: The requested view http/404 could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in Z:\home\avtokoh.local\www\system\classes\Kohana\View.php:137
2012-11-09 03:00:42 --- DEBUG: #0 Z:\home\avtokoh.local\www\system\classes\Kohana\View.php(137): Kohana_View->set_filename('http/404')
#1 Z:\home\avtokoh.local\www\system\classes\Kohana\View.php(30): Kohana_View->__construct('http/404', NULL)
#2 Z:\home\avtokoh.local\www\application\classes\Controller\cars.php(21): Kohana_View::factory('http/404')
#3 Z:\home\avtokoh.local\www\system\classes\Kohana\Controller.php(69): Controller_Cars->before()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Cars))
#6 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\avtokoh.local\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\avtokoh.local\www\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\avtokoh.local\www\system\classes\Kohana\View.php:137
2012-11-09 03:00:43 --- CRITICAL: View_Exception [ 0 ]: The requested view http/404 could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in Z:\home\avtokoh.local\www\system\classes\Kohana\View.php:137
2012-11-09 03:00:43 --- DEBUG: #0 Z:\home\avtokoh.local\www\system\classes\Kohana\View.php(137): Kohana_View->set_filename('http/404')
#1 Z:\home\avtokoh.local\www\system\classes\Kohana\View.php(30): Kohana_View->__construct('http/404', NULL)
#2 Z:\home\avtokoh.local\www\application\classes\Controller\cars.php(21): Kohana_View::factory('http/404')
#3 Z:\home\avtokoh.local\www\system\classes\Kohana\Controller.php(69): Controller_Cars->before()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Cars))
#6 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\avtokoh.local\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\avtokoh.local\www\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\avtokoh.local\www\system\classes\Kohana\View.php:137
2012-11-09 03:00:50 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: error ~ APPPATH\classes\Controller\cars.php [ 48 ] in Z:\home\avtokoh.local\www\application\classes\Controller\cars.php:48
2012-11-09 03:00:50 --- DEBUG: #0 Z:\home\avtokoh.local\www\application\classes\Controller\cars.php(48): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\avtokoh...', 48, Array)
#1 Z:\home\avtokoh.local\www\system\classes\Kohana\Controller.php(84): Controller_Cars->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Cars))
#4 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\avtokoh.local\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\avtokoh.local\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\avtokoh.local\www\application\classes\Controller\cars.php:48
2012-11-09 03:01:24 --- CRITICAL: View_Exception [ 0 ]: The requested view http/404 could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in Z:\home\avtokoh.local\www\system\classes\Kohana\View.php:137
2012-11-09 03:01:24 --- DEBUG: #0 Z:\home\avtokoh.local\www\system\classes\Kohana\View.php(137): Kohana_View->set_filename('http/404')
#1 Z:\home\avtokoh.local\www\system\classes\Kohana\View.php(30): Kohana_View->__construct('http/404', NULL)
#2 Z:\home\avtokoh.local\www\application\classes\Controller\cars.php(21): Kohana_View::factory('http/404')
#3 Z:\home\avtokoh.local\www\system\classes\Kohana\Controller.php(69): Controller_Cars->before()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Cars))
#6 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\avtokoh.local\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\avtokoh.local\www\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\avtokoh.local\www\system\classes\Kohana\View.php:137
2012-11-09 03:05:18 --- CRITICAL: View_Exception [ 0 ]: The requested view http/404 could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in Z:\home\avtokoh.local\www\system\classes\Kohana\View.php:137
2012-11-09 03:05:18 --- DEBUG: #0 Z:\home\avtokoh.local\www\system\classes\Kohana\View.php(137): Kohana_View->set_filename('http/404')
#1 Z:\home\avtokoh.local\www\system\classes\Kohana\View.php(30): Kohana_View->__construct('http/404', NULL)
#2 Z:\home\avtokoh.local\www\application\classes\Controller\cars.php(35): Kohana_View::factory('http/404')
#3 Z:\home\avtokoh.local\www\system\classes\Kohana\Controller.php(69): Controller_Cars->before()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Cars))
#6 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\avtokoh.local\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\avtokoh.local\www\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\avtokoh.local\www\system\classes\Kohana\View.php:137
2012-11-09 03:05:18 --- CRITICAL: View_Exception [ 0 ]: The requested view http/404 could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in Z:\home\avtokoh.local\www\system\classes\Kohana\View.php:137
2012-11-09 03:05:18 --- DEBUG: #0 Z:\home\avtokoh.local\www\system\classes\Kohana\View.php(137): Kohana_View->set_filename('http/404')
#1 Z:\home\avtokoh.local\www\system\classes\Kohana\View.php(30): Kohana_View->__construct('http/404', NULL)
#2 Z:\home\avtokoh.local\www\application\classes\Controller\cars.php(35): Kohana_View::factory('http/404')
#3 Z:\home\avtokoh.local\www\system\classes\Kohana\Controller.php(69): Controller_Cars->before()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Cars))
#6 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\avtokoh.local\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\avtokoh.local\www\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\avtokoh.local\www\system\classes\Kohana\View.php:137
2012-11-09 03:05:19 --- CRITICAL: View_Exception [ 0 ]: The requested view http/404 could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in Z:\home\avtokoh.local\www\system\classes\Kohana\View.php:137
2012-11-09 03:05:19 --- DEBUG: #0 Z:\home\avtokoh.local\www\system\classes\Kohana\View.php(137): Kohana_View->set_filename('http/404')
#1 Z:\home\avtokoh.local\www\system\classes\Kohana\View.php(30): Kohana_View->__construct('http/404', NULL)
#2 Z:\home\avtokoh.local\www\application\classes\Controller\cars.php(35): Kohana_View::factory('http/404')
#3 Z:\home\avtokoh.local\www\system\classes\Kohana\Controller.php(69): Controller_Cars->before()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Cars))
#6 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\avtokoh.local\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\avtokoh.local\www\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\avtokoh.local\www\system\classes\Kohana\View.php:137
2012-11-09 03:05:19 --- CRITICAL: View_Exception [ 0 ]: The requested view http/404 could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in Z:\home\avtokoh.local\www\system\classes\Kohana\View.php:137
2012-11-09 03:05:19 --- DEBUG: #0 Z:\home\avtokoh.local\www\system\classes\Kohana\View.php(137): Kohana_View->set_filename('http/404')
#1 Z:\home\avtokoh.local\www\system\classes\Kohana\View.php(30): Kohana_View->__construct('http/404', NULL)
#2 Z:\home\avtokoh.local\www\application\classes\Controller\cars.php(35): Kohana_View::factory('http/404')
#3 Z:\home\avtokoh.local\www\system\classes\Kohana\Controller.php(69): Controller_Cars->before()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Cars))
#6 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\avtokoh.local\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\avtokoh.local\www\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\avtokoh.local\www\system\classes\Kohana\View.php:137
2012-11-09 03:05:20 --- CRITICAL: View_Exception [ 0 ]: The requested view http/404 could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in Z:\home\avtokoh.local\www\system\classes\Kohana\View.php:137
2012-11-09 03:05:20 --- DEBUG: #0 Z:\home\avtokoh.local\www\system\classes\Kohana\View.php(137): Kohana_View->set_filename('http/404')
#1 Z:\home\avtokoh.local\www\system\classes\Kohana\View.php(30): Kohana_View->__construct('http/404', NULL)
#2 Z:\home\avtokoh.local\www\application\classes\Controller\cars.php(35): Kohana_View::factory('http/404')
#3 Z:\home\avtokoh.local\www\system\classes\Kohana\Controller.php(69): Controller_Cars->before()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Cars))
#6 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\avtokoh.local\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\avtokoh.local\www\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\avtokoh.local\www\system\classes\Kohana\View.php:137
2012-11-09 03:06:10 --- CRITICAL: View_Exception [ 0 ]: The requested view http/404 could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in Z:\home\avtokoh.local\www\system\classes\Kohana\View.php:137
2012-11-09 03:06:10 --- DEBUG: #0 Z:\home\avtokoh.local\www\system\classes\Kohana\View.php(137): Kohana_View->set_filename('http/404')
#1 Z:\home\avtokoh.local\www\system\classes\Kohana\View.php(30): Kohana_View->__construct('http/404', NULL)
#2 Z:\home\avtokoh.local\www\application\classes\Controller\cars.php(26): Kohana_View::factory('http/404')
#3 Z:\home\avtokoh.local\www\system\classes\Kohana\Controller.php(69): Controller_Cars->before()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Cars))
#6 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\avtokoh.local\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\avtokoh.local\www\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\avtokoh.local\www\system\classes\Kohana\View.php:137
2012-11-09 03:06:11 --- CRITICAL: View_Exception [ 0 ]: The requested view http/404 could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in Z:\home\avtokoh.local\www\system\classes\Kohana\View.php:137
2012-11-09 03:06:11 --- DEBUG: #0 Z:\home\avtokoh.local\www\system\classes\Kohana\View.php(137): Kohana_View->set_filename('http/404')
#1 Z:\home\avtokoh.local\www\system\classes\Kohana\View.php(30): Kohana_View->__construct('http/404', NULL)
#2 Z:\home\avtokoh.local\www\application\classes\Controller\cars.php(26): Kohana_View::factory('http/404')
#3 Z:\home\avtokoh.local\www\system\classes\Kohana\Controller.php(69): Controller_Cars->before()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Cars))
#6 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\avtokoh.local\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\avtokoh.local\www\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\avtokoh.local\www\system\classes\Kohana\View.php:137
2012-11-09 03:06:13 --- CRITICAL: View_Exception [ 0 ]: The requested view http/404 could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in Z:\home\avtokoh.local\www\system\classes\Kohana\View.php:137
2012-11-09 03:06:13 --- DEBUG: #0 Z:\home\avtokoh.local\www\system\classes\Kohana\View.php(137): Kohana_View->set_filename('http/404')
#1 Z:\home\avtokoh.local\www\system\classes\Kohana\View.php(30): Kohana_View->__construct('http/404', NULL)
#2 Z:\home\avtokoh.local\www\application\classes\Controller\cars.php(26): Kohana_View::factory('http/404')
#3 Z:\home\avtokoh.local\www\system\classes\Kohana\Controller.php(69): Controller_Cars->before()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Cars))
#6 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\avtokoh.local\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\avtokoh.local\www\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\avtokoh.local\www\system\classes\Kohana\View.php:137
2012-11-09 03:06:15 --- CRITICAL: View_Exception [ 0 ]: The requested view http/404 could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in Z:\home\avtokoh.local\www\system\classes\Kohana\View.php:137
2012-11-09 03:06:15 --- DEBUG: #0 Z:\home\avtokoh.local\www\system\classes\Kohana\View.php(137): Kohana_View->set_filename('http/404')
#1 Z:\home\avtokoh.local\www\system\classes\Kohana\View.php(30): Kohana_View->__construct('http/404', NULL)
#2 Z:\home\avtokoh.local\www\application\classes\Controller\cars.php(26): Kohana_View::factory('http/404')
#3 Z:\home\avtokoh.local\www\system\classes\Kohana\Controller.php(69): Controller_Cars->before()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Cars))
#6 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\avtokoh.local\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\avtokoh.local\www\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\avtokoh.local\www\system\classes\Kohana\View.php:137
2012-11-09 03:08:00 --- CRITICAL: View_Exception [ 0 ]: The requested view http/404 could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in Z:\home\avtokoh.local\www\system\classes\Kohana\View.php:137
2012-11-09 03:08:00 --- DEBUG: #0 Z:\home\avtokoh.local\www\system\classes\Kohana\View.php(137): Kohana_View->set_filename('http/404')
#1 Z:\home\avtokoh.local\www\system\classes\Kohana\View.php(30): Kohana_View->__construct('http/404', NULL)
#2 Z:\home\avtokoh.local\www\application\classes\Controller\cars.php(26): Kohana_View::factory('http/404')
#3 Z:\home\avtokoh.local\www\system\classes\Kohana\Controller.php(69): Controller_Cars->before()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Cars))
#6 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\avtokoh.local\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\avtokoh.local\www\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\avtokoh.local\www\system\classes\Kohana\View.php:137
2012-11-09 03:08:50 --- CRITICAL: View_Exception [ 0 ]: The requested view http/404 could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in Z:\home\avtokoh.local\www\system\classes\Kohana\View.php:137
2012-11-09 03:08:50 --- DEBUG: #0 Z:\home\avtokoh.local\www\system\classes\Kohana\View.php(137): Kohana_View->set_filename('http/404')
#1 Z:\home\avtokoh.local\www\system\classes\Kohana\View.php(30): Kohana_View->__construct('http/404', NULL)
#2 Z:\home\avtokoh.local\www\application\classes\Controller\cars.php(27): Kohana_View::factory('http/404')
#3 Z:\home\avtokoh.local\www\system\classes\Kohana\Controller.php(69): Controller_Cars->before()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Cars))
#6 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\avtokoh.local\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\avtokoh.local\www\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\avtokoh.local\www\system\classes\Kohana\View.php:137
2012-11-09 03:08:51 --- CRITICAL: View_Exception [ 0 ]: The requested view http/404 could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in Z:\home\avtokoh.local\www\system\classes\Kohana\View.php:137
2012-11-09 03:08:51 --- DEBUG: #0 Z:\home\avtokoh.local\www\system\classes\Kohana\View.php(137): Kohana_View->set_filename('http/404')
#1 Z:\home\avtokoh.local\www\system\classes\Kohana\View.php(30): Kohana_View->__construct('http/404', NULL)
#2 Z:\home\avtokoh.local\www\application\classes\Controller\cars.php(27): Kohana_View::factory('http/404')
#3 Z:\home\avtokoh.local\www\system\classes\Kohana\Controller.php(69): Controller_Cars->before()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Cars))
#6 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\avtokoh.local\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\avtokoh.local\www\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\avtokoh.local\www\system\classes\Kohana\View.php:137
2012-11-09 03:08:57 --- CRITICAL: View_Exception [ 0 ]: The requested view http/404 could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in Z:\home\avtokoh.local\www\system\classes\Kohana\View.php:137
2012-11-09 03:08:57 --- DEBUG: #0 Z:\home\avtokoh.local\www\system\classes\Kohana\View.php(137): Kohana_View->set_filename('http/404')
#1 Z:\home\avtokoh.local\www\system\classes\Kohana\View.php(30): Kohana_View->__construct('http/404', NULL)
#2 Z:\home\avtokoh.local\www\application\classes\Controller\cars.php(27): Kohana_View::factory('http/404')
#3 Z:\home\avtokoh.local\www\system\classes\Kohana\Controller.php(69): Controller_Cars->before()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Cars))
#6 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\avtokoh.local\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\avtokoh.local\www\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\avtokoh.local\www\system\classes\Kohana\View.php:137
2012-11-09 03:13:59 --- CRITICAL: View_Exception [ 0 ]: The requested view http/404 could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in Z:\home\avtokoh.local\www\system\classes\Kohana\View.php:137
2012-11-09 03:13:59 --- DEBUG: #0 Z:\home\avtokoh.local\www\system\classes\Kohana\View.php(137): Kohana_View->set_filename('http/404')
#1 Z:\home\avtokoh.local\www\system\classes\Kohana\View.php(30): Kohana_View->__construct('http/404', NULL)
#2 Z:\home\avtokoh.local\www\application\classes\Controller\cars.php(27): Kohana_View::factory('http/404')
#3 Z:\home\avtokoh.local\www\system\classes\Kohana\Controller.php(69): Controller_Cars->before()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Cars))
#6 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\avtokoh.local\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\avtokoh.local\www\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\avtokoh.local\www\system\classes\Kohana\View.php:137
2012-11-09 03:14:01 --- CRITICAL: View_Exception [ 0 ]: The requested view http/404 could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in Z:\home\avtokoh.local\www\system\classes\Kohana\View.php:137
2012-11-09 03:14:01 --- DEBUG: #0 Z:\home\avtokoh.local\www\system\classes\Kohana\View.php(137): Kohana_View->set_filename('http/404')
#1 Z:\home\avtokoh.local\www\system\classes\Kohana\View.php(30): Kohana_View->__construct('http/404', NULL)
#2 Z:\home\avtokoh.local\www\application\classes\Controller\cars.php(27): Kohana_View::factory('http/404')
#3 Z:\home\avtokoh.local\www\system\classes\Kohana\Controller.php(69): Controller_Cars->before()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Cars))
#6 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\avtokoh.local\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\avtokoh.local\www\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\avtokoh.local\www\system\classes\Kohana\View.php:137
2012-11-09 03:14:01 --- CRITICAL: View_Exception [ 0 ]: The requested view http/404 could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in Z:\home\avtokoh.local\www\system\classes\Kohana\View.php:137
2012-11-09 03:14:01 --- DEBUG: #0 Z:\home\avtokoh.local\www\system\classes\Kohana\View.php(137): Kohana_View->set_filename('http/404')
#1 Z:\home\avtokoh.local\www\system\classes\Kohana\View.php(30): Kohana_View->__construct('http/404', NULL)
#2 Z:\home\avtokoh.local\www\application\classes\Controller\cars.php(27): Kohana_View::factory('http/404')
#3 Z:\home\avtokoh.local\www\system\classes\Kohana\Controller.php(69): Controller_Cars->before()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Cars))
#6 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\avtokoh.local\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\avtokoh.local\www\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\avtokoh.local\www\system\classes\Kohana\View.php:137
2012-11-09 03:15:22 --- CRITICAL: View_Exception [ 0 ]: The requested view http/404 could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in Z:\home\avtokoh.local\www\system\classes\Kohana\View.php:137
2012-11-09 03:15:22 --- DEBUG: #0 Z:\home\avtokoh.local\www\system\classes\Kohana\View.php(137): Kohana_View->set_filename('http/404')
#1 Z:\home\avtokoh.local\www\system\classes\Kohana\View.php(30): Kohana_View->__construct('http/404', NULL)
#2 Z:\home\avtokoh.local\www\application\classes\Controller\cars.php(27): Kohana_View::factory('http/404')
#3 Z:\home\avtokoh.local\www\system\classes\Kohana\Controller.php(69): Controller_Cars->before()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Cars))
#6 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\avtokoh.local\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\avtokoh.local\www\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\avtokoh.local\www\system\classes\Kohana\View.php:137
2012-11-09 03:15:23 --- CRITICAL: View_Exception [ 0 ]: The requested view http/404 could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in Z:\home\avtokoh.local\www\system\classes\Kohana\View.php:137
2012-11-09 03:15:23 --- DEBUG: #0 Z:\home\avtokoh.local\www\system\classes\Kohana\View.php(137): Kohana_View->set_filename('http/404')
#1 Z:\home\avtokoh.local\www\system\classes\Kohana\View.php(30): Kohana_View->__construct('http/404', NULL)
#2 Z:\home\avtokoh.local\www\application\classes\Controller\cars.php(27): Kohana_View::factory('http/404')
#3 Z:\home\avtokoh.local\www\system\classes\Kohana\Controller.php(69): Controller_Cars->before()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Cars))
#6 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\avtokoh.local\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\avtokoh.local\www\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\avtokoh.local\www\system\classes\Kohana\View.php:137
2012-11-09 03:15:23 --- CRITICAL: View_Exception [ 0 ]: The requested view http/404 could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in Z:\home\avtokoh.local\www\system\classes\Kohana\View.php:137
2012-11-09 03:15:23 --- DEBUG: #0 Z:\home\avtokoh.local\www\system\classes\Kohana\View.php(137): Kohana_View->set_filename('http/404')
#1 Z:\home\avtokoh.local\www\system\classes\Kohana\View.php(30): Kohana_View->__construct('http/404', NULL)
#2 Z:\home\avtokoh.local\www\application\classes\Controller\cars.php(27): Kohana_View::factory('http/404')
#3 Z:\home\avtokoh.local\www\system\classes\Kohana\Controller.php(69): Controller_Cars->before()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Cars))
#6 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\avtokoh.local\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\avtokoh.local\www\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\avtokoh.local\www\system\classes\Kohana\View.php:137
2012-11-09 03:15:24 --- CRITICAL: View_Exception [ 0 ]: The requested view http/404 could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in Z:\home\avtokoh.local\www\system\classes\Kohana\View.php:137
2012-11-09 03:15:24 --- DEBUG: #0 Z:\home\avtokoh.local\www\system\classes\Kohana\View.php(137): Kohana_View->set_filename('http/404')
#1 Z:\home\avtokoh.local\www\system\classes\Kohana\View.php(30): Kohana_View->__construct('http/404', NULL)
#2 Z:\home\avtokoh.local\www\application\classes\Controller\cars.php(27): Kohana_View::factory('http/404')
#3 Z:\home\avtokoh.local\www\system\classes\Kohana\Controller.php(69): Controller_Cars->before()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Cars))
#6 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\avtokoh.local\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\avtokoh.local\www\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\avtokoh.local\www\system\classes\Kohana\View.php:137
2012-11-09 03:15:32 --- CRITICAL: View_Exception [ 0 ]: The requested view http/404 could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in Z:\home\avtokoh.local\www\system\classes\Kohana\View.php:137
2012-11-09 03:15:32 --- DEBUG: #0 Z:\home\avtokoh.local\www\system\classes\Kohana\View.php(137): Kohana_View->set_filename('http/404')
#1 Z:\home\avtokoh.local\www\system\classes\Kohana\View.php(30): Kohana_View->__construct('http/404', NULL)
#2 Z:\home\avtokoh.local\www\application\classes\Controller\cars.php(27): Kohana_View::factory('http/404')
#3 Z:\home\avtokoh.local\www\system\classes\Kohana\Controller.php(69): Controller_Cars->before()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Cars))
#6 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\avtokoh.local\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\avtokoh.local\www\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\avtokoh.local\www\system\classes\Kohana\View.php:137
2012-11-09 03:16:53 --- CRITICAL: View_Exception [ 0 ]: The requested view http/404 could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in Z:\home\avtokoh.local\www\system\classes\Kohana\View.php:137
2012-11-09 03:16:53 --- DEBUG: #0 Z:\home\avtokoh.local\www\system\classes\Kohana\View.php(137): Kohana_View->set_filename('http/404')
#1 Z:\home\avtokoh.local\www\system\classes\Kohana\View.php(30): Kohana_View->__construct('http/404', NULL)
#2 Z:\home\avtokoh.local\www\application\classes\Controller\cars.php(33): Kohana_View::factory('http/404')
#3 Z:\home\avtokoh.local\www\system\classes\Kohana\Controller.php(69): Controller_Cars->before()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Cars))
#6 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\avtokoh.local\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\avtokoh.local\www\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\avtokoh.local\www\system\classes\Kohana\View.php:137
2012-11-09 03:16:54 --- CRITICAL: View_Exception [ 0 ]: The requested view http/404 could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in Z:\home\avtokoh.local\www\system\classes\Kohana\View.php:137
2012-11-09 03:16:54 --- DEBUG: #0 Z:\home\avtokoh.local\www\system\classes\Kohana\View.php(137): Kohana_View->set_filename('http/404')
#1 Z:\home\avtokoh.local\www\system\classes\Kohana\View.php(30): Kohana_View->__construct('http/404', NULL)
#2 Z:\home\avtokoh.local\www\application\classes\Controller\cars.php(33): Kohana_View::factory('http/404')
#3 Z:\home\avtokoh.local\www\system\classes\Kohana\Controller.php(69): Controller_Cars->before()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Cars))
#6 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\avtokoh.local\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\avtokoh.local\www\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\avtokoh.local\www\system\classes\Kohana\View.php:137
2012-11-09 03:17:15 --- CRITICAL: View_Exception [ 0 ]: The requested view http/404 could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in Z:\home\avtokoh.local\www\system\classes\Kohana\View.php:137
2012-11-09 03:17:15 --- DEBUG: #0 Z:\home\avtokoh.local\www\system\classes\Kohana\View.php(137): Kohana_View->set_filename('http/404')
#1 Z:\home\avtokoh.local\www\system\classes\Kohana\View.php(30): Kohana_View->__construct('http/404', NULL)
#2 Z:\home\avtokoh.local\www\application\classes\Controller\cars.php(33): Kohana_View::factory('http/404')
#3 Z:\home\avtokoh.local\www\system\classes\Kohana\Controller.php(69): Controller_Cars->before()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Cars))
#6 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\avtokoh.local\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\avtokoh.local\www\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\avtokoh.local\www\system\classes\Kohana\View.php:137
2012-11-09 03:28:02 --- CRITICAL: View_Exception [ 0 ]: The requested view http/404 could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in Z:\home\avtokoh.local\www\system\classes\Kohana\View.php:137
2012-11-09 03:28:02 --- DEBUG: #0 Z:\home\avtokoh.local\www\system\classes\Kohana\View.php(137): Kohana_View->set_filename('http/404')
#1 Z:\home\avtokoh.local\www\system\classes\Kohana\View.php(30): Kohana_View->__construct('http/404', NULL)
#2 Z:\home\avtokoh.local\www\application\classes\Controller\cars.php(27): Kohana_View::factory('http/404')
#3 Z:\home\avtokoh.local\www\system\classes\Kohana\Controller.php(69): Controller_Cars->before()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Cars))
#6 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\avtokoh.local\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\avtokoh.local\www\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\avtokoh.local\www\system\classes\Kohana\View.php:137
2012-11-09 03:28:03 --- CRITICAL: View_Exception [ 0 ]: The requested view http/404 could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in Z:\home\avtokoh.local\www\system\classes\Kohana\View.php:137
2012-11-09 03:28:03 --- DEBUG: #0 Z:\home\avtokoh.local\www\system\classes\Kohana\View.php(137): Kohana_View->set_filename('http/404')
#1 Z:\home\avtokoh.local\www\system\classes\Kohana\View.php(30): Kohana_View->__construct('http/404', NULL)
#2 Z:\home\avtokoh.local\www\application\classes\Controller\cars.php(27): Kohana_View::factory('http/404')
#3 Z:\home\avtokoh.local\www\system\classes\Kohana\Controller.php(69): Controller_Cars->before()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Cars))
#6 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\avtokoh.local\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\avtokoh.local\www\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\avtokoh.local\www\system\classes\Kohana\View.php:137
2012-11-09 03:28:04 --- CRITICAL: View_Exception [ 0 ]: The requested view http/404 could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in Z:\home\avtokoh.local\www\system\classes\Kohana\View.php:137
2012-11-09 03:28:04 --- DEBUG: #0 Z:\home\avtokoh.local\www\system\classes\Kohana\View.php(137): Kohana_View->set_filename('http/404')
#1 Z:\home\avtokoh.local\www\system\classes\Kohana\View.php(30): Kohana_View->__construct('http/404', NULL)
#2 Z:\home\avtokoh.local\www\application\classes\Controller\cars.php(27): Kohana_View::factory('http/404')
#3 Z:\home\avtokoh.local\www\system\classes\Kohana\Controller.php(69): Controller_Cars->before()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Cars))
#6 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\avtokoh.local\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\avtokoh.local\www\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\avtokoh.local\www\system\classes\Kohana\View.php:137
2012-11-09 03:29:24 --- CRITICAL: View_Exception [ 0 ]: The requested view http/404 could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in Z:\home\avtokoh.local\www\system\classes\Kohana\View.php:137
2012-11-09 03:29:24 --- DEBUG: #0 Z:\home\avtokoh.local\www\system\classes\Kohana\View.php(137): Kohana_View->set_filename('http/404')
#1 Z:\home\avtokoh.local\www\system\classes\Kohana\View.php(30): Kohana_View->__construct('http/404', NULL)
#2 Z:\home\avtokoh.local\www\application\classes\Controller\cars.php(25): Kohana_View::factory('http/404')
#3 Z:\home\avtokoh.local\www\system\classes\Kohana\Controller.php(69): Controller_Cars->before()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Cars))
#6 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\avtokoh.local\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\avtokoh.local\www\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\avtokoh.local\www\system\classes\Kohana\View.php:137
2012-11-09 03:29:24 --- CRITICAL: View_Exception [ 0 ]: The requested view http/404 could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in Z:\home\avtokoh.local\www\system\classes\Kohana\View.php:137
2012-11-09 03:29:24 --- DEBUG: #0 Z:\home\avtokoh.local\www\system\classes\Kohana\View.php(137): Kohana_View->set_filename('http/404')
#1 Z:\home\avtokoh.local\www\system\classes\Kohana\View.php(30): Kohana_View->__construct('http/404', NULL)
#2 Z:\home\avtokoh.local\www\application\classes\Controller\cars.php(25): Kohana_View::factory('http/404')
#3 Z:\home\avtokoh.local\www\system\classes\Kohana\Controller.php(69): Controller_Cars->before()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Cars))
#6 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\avtokoh.local\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\avtokoh.local\www\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\avtokoh.local\www\system\classes\Kohana\View.php:137
2012-11-09 03:29:27 --- CRITICAL: View_Exception [ 0 ]: The requested view http/404 could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in Z:\home\avtokoh.local\www\system\classes\Kohana\View.php:137
2012-11-09 03:29:27 --- DEBUG: #0 Z:\home\avtokoh.local\www\system\classes\Kohana\View.php(137): Kohana_View->set_filename('http/404')
#1 Z:\home\avtokoh.local\www\system\classes\Kohana\View.php(30): Kohana_View->__construct('http/404', NULL)
#2 Z:\home\avtokoh.local\www\application\classes\Controller\cars.php(25): Kohana_View::factory('http/404')
#3 Z:\home\avtokoh.local\www\system\classes\Kohana\Controller.php(69): Controller_Cars->before()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Cars))
#6 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\avtokoh.local\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\avtokoh.local\www\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\avtokoh.local\www\system\classes\Kohana\View.php:137
2012-11-09 03:35:12 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: model_url ~ APPPATH\classes\Controller\cars.php [ 26 ] in Z:\home\avtokoh.local\www\application\classes\Controller\cars.php:26
2012-11-09 03:35:12 --- DEBUG: #0 Z:\home\avtokoh.local\www\application\classes\Controller\cars.php(26): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\avtokoh...', 26, Array)
#1 Z:\home\avtokoh.local\www\system\classes\Kohana\Controller.php(84): Controller_Cars->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Cars))
#4 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\avtokoh.local\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\avtokoh.local\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\avtokoh.local\www\application\classes\Controller\cars.php:26
2012-11-09 03:35:13 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: model_url ~ APPPATH\classes\Controller\cars.php [ 26 ] in Z:\home\avtokoh.local\www\application\classes\Controller\cars.php:26
2012-11-09 03:35:13 --- DEBUG: #0 Z:\home\avtokoh.local\www\application\classes\Controller\cars.php(26): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\avtokoh...', 26, Array)
#1 Z:\home\avtokoh.local\www\system\classes\Kohana\Controller.php(84): Controller_Cars->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Cars))
#4 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\avtokoh.local\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\avtokoh.local\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\avtokoh.local\www\application\classes\Controller\cars.php:26
2012-11-09 03:45:56 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: statistic_form ~ APPPATH\views\statistic.php [ 1 ] in Z:\home\avtokoh.local\www\application\views\statistic.php:1
2012-11-09 03:45:56 --- DEBUG: #0 Z:\home\avtokoh.local\www\application\views\statistic.php(1): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\avtokoh...', 1, Array)
#1 Z:\home\avtokoh.local\www\system\classes\Kohana\View.php(61): include('Z:\home\avtokoh...')
#2 Z:\home\avtokoh.local\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\avtokoh...', Array)
#3 Z:\home\avtokoh.local\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\avtokoh.local\www\application\views\main.php(57): Kohana_View->__toString()
#5 Z:\home\avtokoh.local\www\system\classes\Kohana\View.php(61): include('Z:\home\avtokoh...')
#6 Z:\home\avtokoh.local\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\avtokoh...', Array)
#7 Z:\home\avtokoh.local\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\avtokoh.local\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Cars))
#11 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\avtokoh.local\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\avtokoh.local\www\index.php(118): Kohana_Request->execute()
#14 {main} in Z:\home\avtokoh.local\www\application\views\statistic.php:1
2012-11-09 03:46:38 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR, expecting T_STRING or T_VARIABLE or '{' or '$' ~ APPPATH\classes\Controller\cars.php [ 28 ] in :
2012-11-09 03:46:38 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-09 03:49:03 --- CRITICAL: Kohana_Exception [ 0 ]: The brand property does not exist in the Model_Model class ~ MODPATH\orm\classes\Kohana\ORM.php [ 684 ] in Z:\home\avtokoh.local\www\modules\orm\classes\Kohana\ORM.php:600
2012-11-09 03:49:03 --- DEBUG: #0 Z:\home\avtokoh.local\www\modules\orm\classes\Kohana\ORM.php(600): Kohana_ORM->get('brand')
#1 Z:\home\avtokoh.local\www\application\views\statistic.php(6): Kohana_ORM->__get('brand')
#2 Z:\home\avtokoh.local\www\system\classes\Kohana\View.php(61): include('Z:\home\avtokoh...')
#3 Z:\home\avtokoh.local\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\avtokoh...', Array)
#4 Z:\home\avtokoh.local\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#5 Z:\home\avtokoh.local\www\application\views\main.php(57): Kohana_View->__toString()
#6 Z:\home\avtokoh.local\www\system\classes\Kohana\View.php(61): include('Z:\home\avtokoh...')
#7 Z:\home\avtokoh.local\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\avtokoh...', Array)
#8 Z:\home\avtokoh.local\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#9 Z:\home\avtokoh.local\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#10 [internal function]: Kohana_Controller->execute()
#11 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Cars))
#12 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 Z:\home\avtokoh.local\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#14 Z:\home\avtokoh.local\www\index.php(118): Kohana_Request->execute()
#15 {main} in Z:\home\avtokoh.local\www\modules\orm\classes\Kohana\ORM.php:600
2012-11-09 03:56:17 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: models ~ APPPATH\views\statistic.php [ 1 ] in Z:\home\avtokoh.local\www\application\views\statistic.php:1
2012-11-09 03:56:17 --- DEBUG: #0 Z:\home\avtokoh.local\www\application\views\statistic.php(1): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\avtokoh...', 1, Array)
#1 Z:\home\avtokoh.local\www\system\classes\Kohana\View.php(61): include('Z:\home\avtokoh...')
#2 Z:\home\avtokoh.local\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\avtokoh...', Array)
#3 Z:\home\avtokoh.local\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\avtokoh.local\www\application\views\main.php(57): Kohana_View->__toString()
#5 Z:\home\avtokoh.local\www\system\classes\Kohana\View.php(61): include('Z:\home\avtokoh...')
#6 Z:\home\avtokoh.local\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\avtokoh...', Array)
#7 Z:\home\avtokoh.local\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\avtokoh.local\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Statistic))
#11 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\avtokoh.local\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\avtokoh.local\www\index.php(118): Kohana_Request->execute()
#14 {main} in Z:\home\avtokoh.local\www\application\views\statistic.php:1
2012-11-09 03:56:18 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: models ~ APPPATH\views\statistic.php [ 1 ] in Z:\home\avtokoh.local\www\application\views\statistic.php:1
2012-11-09 03:56:18 --- DEBUG: #0 Z:\home\avtokoh.local\www\application\views\statistic.php(1): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\avtokoh...', 1, Array)
#1 Z:\home\avtokoh.local\www\system\classes\Kohana\View.php(61): include('Z:\home\avtokoh...')
#2 Z:\home\avtokoh.local\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\avtokoh...', Array)
#3 Z:\home\avtokoh.local\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\avtokoh.local\www\application\views\main.php(57): Kohana_View->__toString()
#5 Z:\home\avtokoh.local\www\system\classes\Kohana\View.php(61): include('Z:\home\avtokoh...')
#6 Z:\home\avtokoh.local\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\avtokoh...', Array)
#7 Z:\home\avtokoh.local\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\avtokoh.local\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Statistic))
#11 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\avtokoh.local\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\avtokoh.local\www\index.php(118): Kohana_Request->execute()
#14 {main} in Z:\home\avtokoh.local\www\application\views\statistic.php:1
2012-11-09 03:56:51 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\main.php [ 57 ] in Z:\home\avtokoh.local\www\application\views\main.php:57
2012-11-09 03:56:51 --- DEBUG: #0 Z:\home\avtokoh.local\www\application\views\main.php(57): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\avtokoh...', 57, Array)
#1 Z:\home\avtokoh.local\www\system\classes\Kohana\View.php(61): include('Z:\home\avtokoh...')
#2 Z:\home\avtokoh.local\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\avtokoh...', Array)
#3 Z:\home\avtokoh.local\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 Z:\home\avtokoh.local\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Cars))
#7 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\avtokoh.local\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\avtokoh.local\www\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\avtokoh.local\www\application\views\main.php:57
2012-11-09 03:59:28 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\main.php [ 57 ] in Z:\home\avtokoh.local\www\application\views\main.php:57
2012-11-09 03:59:28 --- DEBUG: #0 Z:\home\avtokoh.local\www\application\views\main.php(57): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\avtokoh...', 57, Array)
#1 Z:\home\avtokoh.local\www\system\classes\Kohana\View.php(61): include('Z:\home\avtokoh...')
#2 Z:\home\avtokoh.local\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\avtokoh...', Array)
#3 Z:\home\avtokoh.local\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 Z:\home\avtokoh.local\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Cars))
#7 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\avtokoh.local\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\avtokoh.local\www\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\avtokoh.local\www\application\views\main.php:57
2012-11-09 04:00:09 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\main.php [ 57 ] in Z:\home\avtokoh.local\www\application\views\main.php:57
2012-11-09 04:00:09 --- DEBUG: #0 Z:\home\avtokoh.local\www\application\views\main.php(57): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\avtokoh...', 57, Array)
#1 Z:\home\avtokoh.local\www\system\classes\Kohana\View.php(61): include('Z:\home\avtokoh...')
#2 Z:\home\avtokoh.local\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\avtokoh...', Array)
#3 Z:\home\avtokoh.local\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 Z:\home\avtokoh.local\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Cars))
#7 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\avtokoh.local\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\avtokoh.local\www\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\avtokoh.local\www\application\views\main.php:57
2012-11-09 04:00:10 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\main.php [ 57 ] in Z:\home\avtokoh.local\www\application\views\main.php:57
2012-11-09 04:00:10 --- DEBUG: #0 Z:\home\avtokoh.local\www\application\views\main.php(57): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\avtokoh...', 57, Array)
#1 Z:\home\avtokoh.local\www\system\classes\Kohana\View.php(61): include('Z:\home\avtokoh...')
#2 Z:\home\avtokoh.local\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\avtokoh...', Array)
#3 Z:\home\avtokoh.local\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 Z:\home\avtokoh.local\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Cars))
#7 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\avtokoh.local\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\avtokoh.local\www\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\avtokoh.local\www\application\views\main.php:57
2012-11-09 04:01:23 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\main.php [ 57 ] in Z:\home\avtokoh.local\www\application\views\main.php:57
2012-11-09 04:01:23 --- DEBUG: #0 Z:\home\avtokoh.local\www\application\views\main.php(57): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\avtokoh...', 57, Array)
#1 Z:\home\avtokoh.local\www\system\classes\Kohana\View.php(61): include('Z:\home\avtokoh...')
#2 Z:\home\avtokoh.local\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\avtokoh...', Array)
#3 Z:\home\avtokoh.local\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 Z:\home\avtokoh.local\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Cars))
#7 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\avtokoh.local\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\avtokoh.local\www\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\avtokoh.local\www\application\views\main.php:57
2012-11-09 04:03:18 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\main.php [ 57 ] in Z:\home\avtokoh.local\www\application\views\main.php:57
2012-11-09 04:03:18 --- DEBUG: #0 Z:\home\avtokoh.local\www\application\views\main.php(57): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\avtokoh...', 57, Array)
#1 Z:\home\avtokoh.local\www\system\classes\Kohana\View.php(61): include('Z:\home\avtokoh...')
#2 Z:\home\avtokoh.local\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\avtokoh...', Array)
#3 Z:\home\avtokoh.local\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 Z:\home\avtokoh.local\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Cars))
#7 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\avtokoh.local\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\avtokoh.local\www\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\avtokoh.local\www\application\views\main.php:57
2012-11-09 04:03:19 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\main.php [ 57 ] in Z:\home\avtokoh.local\www\application\views\main.php:57
2012-11-09 04:03:19 --- DEBUG: #0 Z:\home\avtokoh.local\www\application\views\main.php(57): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\avtokoh...', 57, Array)
#1 Z:\home\avtokoh.local\www\system\classes\Kohana\View.php(61): include('Z:\home\avtokoh...')
#2 Z:\home\avtokoh.local\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\avtokoh...', Array)
#3 Z:\home\avtokoh.local\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 Z:\home\avtokoh.local\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Cars))
#7 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\avtokoh.local\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\avtokoh.local\www\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\avtokoh.local\www\application\views\main.php:57
2012-11-09 04:03:19 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\main.php [ 57 ] in Z:\home\avtokoh.local\www\application\views\main.php:57
2012-11-09 04:03:19 --- DEBUG: #0 Z:\home\avtokoh.local\www\application\views\main.php(57): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\avtokoh...', 57, Array)
#1 Z:\home\avtokoh.local\www\system\classes\Kohana\View.php(61): include('Z:\home\avtokoh...')
#2 Z:\home\avtokoh.local\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\avtokoh...', Array)
#3 Z:\home\avtokoh.local\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 Z:\home\avtokoh.local\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Cars))
#7 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\avtokoh.local\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\avtokoh.local\www\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\avtokoh.local\www\application\views\main.php:57
2012-11-09 04:43:06 --- CRITICAL: ErrorException [ 1 ]: Call to a member function find_all() on a non-object ~ APPPATH\classes\Controller\cars.php [ 35 ] in :
2012-11-09 04:43:06 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-09 04:43:07 --- CRITICAL: ErrorException [ 1 ]: Call to a member function find_all() on a non-object ~ APPPATH\classes\Controller\cars.php [ 35 ] in :
2012-11-09 04:43:07 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-09 04:43:15 --- CRITICAL: ErrorException [ 1 ]: Call to a member function find() on a non-object ~ APPPATH\classes\Controller\cars.php [ 35 ] in :
2012-11-09 04:43:15 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-09 04:43:15 --- CRITICAL: ErrorException [ 1 ]: Call to a member function find() on a non-object ~ APPPATH\classes\Controller\cars.php [ 35 ] in :
2012-11-09 04:43:15 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-09 04:43:43 --- CRITICAL: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\views\models.php [ 5 ] in Z:\home\avtokoh.local\www\application\views\models.php:5
2012-11-09 04:43:43 --- DEBUG: #0 Z:\home\avtokoh.local\www\application\views\models.php(5): Kohana_Core::error_handler(2, 'Invalid argumen...', 'Z:\home\avtokoh...', 5, Array)
#1 Z:\home\avtokoh.local\www\system\classes\Kohana\View.php(61): include('Z:\home\avtokoh...')
#2 Z:\home\avtokoh.local\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\avtokoh...', Array)
#3 Z:\home\avtokoh.local\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\avtokoh.local\www\application\views\main.php(57): Kohana_View->__toString()
#5 Z:\home\avtokoh.local\www\system\classes\Kohana\View.php(61): include('Z:\home\avtokoh...')
#6 Z:\home\avtokoh.local\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\avtokoh...', Array)
#7 Z:\home\avtokoh.local\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\avtokoh.local\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Cars))
#11 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\avtokoh.local\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\avtokoh.local\www\index.php(118): Kohana_Request->execute()
#14 {main} in Z:\home\avtokoh.local\www\application\views\models.php:5
2012-11-09 04:44:01 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: model ~ APPPATH\views\models.php [ 5 ] in Z:\home\avtokoh.local\www\application\views\models.php:5
2012-11-09 04:44:01 --- DEBUG: #0 Z:\home\avtokoh.local\www\application\views\models.php(5): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\avtokoh...', 5, Array)
#1 Z:\home\avtokoh.local\www\system\classes\Kohana\View.php(61): include('Z:\home\avtokoh...')
#2 Z:\home\avtokoh.local\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\avtokoh...', Array)
#3 Z:\home\avtokoh.local\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\avtokoh.local\www\application\views\main.php(57): Kohana_View->__toString()
#5 Z:\home\avtokoh.local\www\system\classes\Kohana\View.php(61): include('Z:\home\avtokoh...')
#6 Z:\home\avtokoh.local\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\avtokoh...', Array)
#7 Z:\home\avtokoh.local\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\avtokoh.local\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Cars))
#11 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\avtokoh.local\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\avtokoh.local\www\index.php(118): Kohana_Request->execute()
#14 {main} in Z:\home\avtokoh.local\www\application\views\models.php:5
2012-11-09 04:44:01 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: model ~ APPPATH\views\models.php [ 5 ] in Z:\home\avtokoh.local\www\application\views\models.php:5
2012-11-09 04:44:01 --- DEBUG: #0 Z:\home\avtokoh.local\www\application\views\models.php(5): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\avtokoh...', 5, Array)
#1 Z:\home\avtokoh.local\www\system\classes\Kohana\View.php(61): include('Z:\home\avtokoh...')
#2 Z:\home\avtokoh.local\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\avtokoh...', Array)
#3 Z:\home\avtokoh.local\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\avtokoh.local\www\application\views\main.php(57): Kohana_View->__toString()
#5 Z:\home\avtokoh.local\www\system\classes\Kohana\View.php(61): include('Z:\home\avtokoh...')
#6 Z:\home\avtokoh.local\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\avtokoh...', Array)
#7 Z:\home\avtokoh.local\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\avtokoh.local\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Cars))
#11 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\avtokoh.local\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\avtokoh.local\www\index.php(118): Kohana_Request->execute()
#14 {main} in Z:\home\avtokoh.local\www\application\views\models.php:5
2012-11-09 04:44:02 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: model ~ APPPATH\views\models.php [ 5 ] in Z:\home\avtokoh.local\www\application\views\models.php:5
2012-11-09 04:44:02 --- DEBUG: #0 Z:\home\avtokoh.local\www\application\views\models.php(5): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\avtokoh...', 5, Array)
#1 Z:\home\avtokoh.local\www\system\classes\Kohana\View.php(61): include('Z:\home\avtokoh...')
#2 Z:\home\avtokoh.local\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\avtokoh...', Array)
#3 Z:\home\avtokoh.local\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\avtokoh.local\www\application\views\main.php(57): Kohana_View->__toString()
#5 Z:\home\avtokoh.local\www\system\classes\Kohana\View.php(61): include('Z:\home\avtokoh...')
#6 Z:\home\avtokoh.local\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\avtokoh...', Array)
#7 Z:\home\avtokoh.local\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\avtokoh.local\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Cars))
#11 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\avtokoh.local\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\avtokoh.local\www\index.php(118): Kohana_Request->execute()
#14 {main} in Z:\home\avtokoh.local\www\application\views\models.php:5
2012-11-09 04:59:45 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: id_series ~ APPPATH\classes\Controller\cars.php [ 41 ] in Z:\home\avtokoh.local\www\application\classes\Controller\cars.php:41
2012-11-09 04:59:45 --- DEBUG: #0 Z:\home\avtokoh.local\www\application\classes\Controller\cars.php(41): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\avtokoh...', 41, Array)
#1 Z:\home\avtokoh.local\www\system\classes\Kohana\Controller.php(84): Controller_Cars->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Cars))
#4 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\avtokoh.local\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\avtokoh.local\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\avtokoh.local\www\application\classes\Controller\cars.php:41
2012-11-09 04:59:46 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: id_series ~ APPPATH\classes\Controller\cars.php [ 41 ] in Z:\home\avtokoh.local\www\application\classes\Controller\cars.php:41
2012-11-09 04:59:46 --- DEBUG: #0 Z:\home\avtokoh.local\www\application\classes\Controller\cars.php(41): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\avtokoh...', 41, Array)
#1 Z:\home\avtokoh.local\www\system\classes\Kohana\Controller.php(84): Controller_Cars->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Cars))
#4 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\avtokoh.local\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\avtokoh.local\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\avtokoh.local\www\application\classes\Controller\cars.php:41
2012-11-09 05:00:02 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH\views\models.php [ 21 ] in :
2012-11-09 05:00:02 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-09 05:00:03 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH\views\models.php [ 21 ] in :
2012-11-09 05:00:03 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-09 05:37:00 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 1730 ~ APPPATH\views\models.php [ 29 ] in Z:\home\avtokoh.local\www\application\views\models.php:29
2012-11-09 05:37:00 --- DEBUG: #0 Z:\home\avtokoh.local\www\application\views\models.php(29): Kohana_Core::error_handler(8, 'Undefined offse...', 'Z:\home\avtokoh...', 29, Array)
#1 Z:\home\avtokoh.local\www\system\classes\Kohana\View.php(61): include('Z:\home\avtokoh...')
#2 Z:\home\avtokoh.local\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\avtokoh...', Array)
#3 Z:\home\avtokoh.local\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\avtokoh.local\www\application\views\main.php(58): Kohana_View->__toString()
#5 Z:\home\avtokoh.local\www\system\classes\Kohana\View.php(61): include('Z:\home\avtokoh...')
#6 Z:\home\avtokoh.local\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\avtokoh...', Array)
#7 Z:\home\avtokoh.local\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\avtokoh.local\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Cars))
#11 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\avtokoh.local\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\avtokoh.local\www\index.php(118): Kohana_Request->execute()
#14 {main} in Z:\home\avtokoh.local\www\application\views\models.php:29
2012-11-09 05:37:16 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 1730 ~ APPPATH\views\models.php [ 29 ] in Z:\home\avtokoh.local\www\application\views\models.php:29
2012-11-09 05:37:16 --- DEBUG: #0 Z:\home\avtokoh.local\www\application\views\models.php(29): Kohana_Core::error_handler(8, 'Undefined offse...', 'Z:\home\avtokoh...', 29, Array)
#1 Z:\home\avtokoh.local\www\system\classes\Kohana\View.php(61): include('Z:\home\avtokoh...')
#2 Z:\home\avtokoh.local\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\avtokoh...', Array)
#3 Z:\home\avtokoh.local\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\avtokoh.local\www\application\views\main.php(58): Kohana_View->__toString()
#5 Z:\home\avtokoh.local\www\system\classes\Kohana\View.php(61): include('Z:\home\avtokoh...')
#6 Z:\home\avtokoh.local\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\avtokoh...', Array)
#7 Z:\home\avtokoh.local\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\avtokoh.local\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Cars))
#11 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\avtokoh.local\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\avtokoh.local\www\index.php(118): Kohana_Request->execute()
#14 {main} in Z:\home\avtokoh.local\www\application\views\models.php:29
2012-11-09 05:37:49 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: due ~ APPPATH\views\models.php [ 18 ] in Z:\home\avtokoh.local\www\application\views\models.php:18
2012-11-09 05:37:49 --- DEBUG: #0 Z:\home\avtokoh.local\www\application\views\models.php(18): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\avtokoh...', 18, Array)
#1 Z:\home\avtokoh.local\www\system\classes\Kohana\View.php(61): include('Z:\home\avtokoh...')
#2 Z:\home\avtokoh.local\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\avtokoh...', Array)
#3 Z:\home\avtokoh.local\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\avtokoh.local\www\application\views\main.php(58): Kohana_View->__toString()
#5 Z:\home\avtokoh.local\www\system\classes\Kohana\View.php(61): include('Z:\home\avtokoh...')
#6 Z:\home\avtokoh.local\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\avtokoh...', Array)
#7 Z:\home\avtokoh.local\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\avtokoh.local\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Cars))
#11 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\avtokoh.local\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\avtokoh.local\www\index.php(118): Kohana_Request->execute()
#14 {main} in Z:\home\avtokoh.local\www\application\views\models.php:18
2012-11-09 05:38:36 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 1730 ~ APPPATH\views\models.php [ 29 ] in Z:\home\avtokoh.local\www\application\views\models.php:29
2012-11-09 05:38:36 --- DEBUG: #0 Z:\home\avtokoh.local\www\application\views\models.php(29): Kohana_Core::error_handler(8, 'Undefined offse...', 'Z:\home\avtokoh...', 29, Array)
#1 Z:\home\avtokoh.local\www\system\classes\Kohana\View.php(61): include('Z:\home\avtokoh...')
#2 Z:\home\avtokoh.local\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\avtokoh...', Array)
#3 Z:\home\avtokoh.local\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\avtokoh.local\www\application\views\main.php(58): Kohana_View->__toString()
#5 Z:\home\avtokoh.local\www\system\classes\Kohana\View.php(61): include('Z:\home\avtokoh...')
#6 Z:\home\avtokoh.local\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\avtokoh...', Array)
#7 Z:\home\avtokoh.local\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\avtokoh.local\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Cars))
#11 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\avtokoh.local\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\avtokoh.local\www\index.php(118): Kohana_Request->execute()
#14 {main} in Z:\home\avtokoh.local\www\application\views\models.php:29
2012-11-09 05:40:21 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 1730 ~ APPPATH\views\models.php [ 29 ] in Z:\home\avtokoh.local\www\application\views\models.php:29
2012-11-09 05:40:21 --- DEBUG: #0 Z:\home\avtokoh.local\www\application\views\models.php(29): Kohana_Core::error_handler(8, 'Undefined offse...', 'Z:\home\avtokoh...', 29, Array)
#1 Z:\home\avtokoh.local\www\system\classes\Kohana\View.php(61): include('Z:\home\avtokoh...')
#2 Z:\home\avtokoh.local\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\avtokoh...', Array)
#3 Z:\home\avtokoh.local\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\avtokoh.local\www\application\views\main.php(58): Kohana_View->__toString()
#5 Z:\home\avtokoh.local\www\system\classes\Kohana\View.php(61): include('Z:\home\avtokoh...')
#6 Z:\home\avtokoh.local\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\avtokoh...', Array)
#7 Z:\home\avtokoh.local\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\avtokoh.local\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Cars))
#11 Z:\home\avtokoh.local\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\avtokoh.local\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\avtokoh.local\www\index.php(118): Kohana_Request->execute()
#14 {main} in Z:\home\avtokoh.local\www\application\views\models.php:29