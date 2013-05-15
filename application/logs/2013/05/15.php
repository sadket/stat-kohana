<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-05-15 03:00:37 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column '4' in 'on clause' [ SELECT * FROM `orders` LEFT JOIN `sites` ON (`sites`.`id` = `4`) WHERE `orders`.`site_id` = 4 ORDER BY `orders`.`id` DESC ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /home/www/kohana/modules/database/classes/Kohana/Database/Query.php:251
2013-05-15 03:00:37 --- DEBUG: #0 /home/www/kohana/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false, Array)
#1 /home/www/kohana/application/classes/Model/Order.php(13): Kohana_Database_Query->execute()
#2 /home/www/kohana/application/classes/Controller/Index.php(40): Model_Order->get_orders(4)
#3 /home/www/kohana/system/classes/Kohana/Controller.php(84): Controller_Index->action_results()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/www/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#6 /home/www/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/www/kohana/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /home/www/kohana/index.php(118): Kohana_Request->execute()
#9 {main} in /home/www/kohana/modules/database/classes/Kohana/Database/Query.php:251
2013-05-15 03:00:41 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column '4' in 'on clause' [ SELECT * FROM `orders` LEFT JOIN `sites` ON (`sites`.`id` = `4`) WHERE `orders`.`site_id` = 4 ORDER BY `orders`.`id` DESC ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /home/www/kohana/modules/database/classes/Kohana/Database/Query.php:251
2013-05-15 03:00:41 --- DEBUG: #0 /home/www/kohana/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false, Array)
#1 /home/www/kohana/application/classes/Model/Order.php(13): Kohana_Database_Query->execute()
#2 /home/www/kohana/application/classes/Controller/Index.php(40): Model_Order->get_orders(4)
#3 /home/www/kohana/system/classes/Kohana/Controller.php(84): Controller_Index->action_results()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/www/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#6 /home/www/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/www/kohana/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /home/www/kohana/index.php(118): Kohana_Request->execute()
#9 {main} in /home/www/kohana/modules/database/classes/Kohana/Database/Query.php:251
2013-05-15 03:11:25 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column '4' in 'on clause' [ SELECT * FROM `orders` LEFT JOIN `sites` ON (`sites`.`id` = `4`) WHERE `orders`.`site_id` = 4 ORDER BY `orders`.`id` DESC ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /home/www/kohana/modules/database/classes/Kohana/Database/Query.php:251
2013-05-15 03:11:25 --- DEBUG: #0 /home/www/kohana/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false, Array)
#1 /home/www/kohana/application/classes/Model/Order.php(13): Kohana_Database_Query->execute()
#2 /home/www/kohana/application/classes/Controller/Index.php(40): Model_Order->get_orders(4)
#3 /home/www/kohana/system/classes/Kohana/Controller.php(84): Controller_Index->action_results()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/www/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#6 /home/www/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/www/kohana/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /home/www/kohana/index.php(118): Kohana_Request->execute()
#9 {main} in /home/www/kohana/modules/database/classes/Kohana/Database/Query.php:251
2013-05-15 03:11:28 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column '4' in 'on clause' [ SELECT * FROM `orders` LEFT JOIN `sites` ON (`sites`.`id` = `4`) WHERE `orders`.`site_id` = 4 ORDER BY `orders`.`id` DESC ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /home/www/kohana/modules/database/classes/Kohana/Database/Query.php:251
2013-05-15 03:11:28 --- DEBUG: #0 /home/www/kohana/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false, Array)
#1 /home/www/kohana/application/classes/Model/Order.php(13): Kohana_Database_Query->execute()
#2 /home/www/kohana/application/classes/Controller/Index.php(40): Model_Order->get_orders(4)
#3 /home/www/kohana/system/classes/Kohana/Controller.php(84): Controller_Index->action_results()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/www/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#6 /home/www/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/www/kohana/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /home/www/kohana/index.php(118): Kohana_Request->execute()
#9 {main} in /home/www/kohana/modules/database/classes/Kohana/Database/Query.php:251
2013-05-15 03:11:28 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column '4' in 'on clause' [ SELECT * FROM `orders` LEFT JOIN `sites` ON (`sites`.`id` = `4`) WHERE `orders`.`site_id` = 4 ORDER BY `orders`.`id` DESC ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /home/www/kohana/modules/database/classes/Kohana/Database/Query.php:251
2013-05-15 03:11:28 --- DEBUG: #0 /home/www/kohana/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false, Array)
#1 /home/www/kohana/application/classes/Model/Order.php(13): Kohana_Database_Query->execute()
#2 /home/www/kohana/application/classes/Controller/Index.php(40): Model_Order->get_orders(4)
#3 /home/www/kohana/system/classes/Kohana/Controller.php(84): Controller_Index->action_results()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/www/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#6 /home/www/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/www/kohana/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /home/www/kohana/index.php(118): Kohana_Request->execute()
#9 {main} in /home/www/kohana/modules/database/classes/Kohana/Database/Query.php:251
2013-05-15 03:11:28 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column '4' in 'on clause' [ SELECT * FROM `orders` LEFT JOIN `sites` ON (`sites`.`id` = `4`) WHERE `orders`.`site_id` = 4 ORDER BY `orders`.`id` DESC ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /home/www/kohana/modules/database/classes/Kohana/Database/Query.php:251
2013-05-15 03:11:28 --- DEBUG: #0 /home/www/kohana/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false, Array)
#1 /home/www/kohana/application/classes/Model/Order.php(13): Kohana_Database_Query->execute()
#2 /home/www/kohana/application/classes/Controller/Index.php(40): Model_Order->get_orders(4)
#3 /home/www/kohana/system/classes/Kohana/Controller.php(84): Controller_Index->action_results()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/www/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#6 /home/www/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/www/kohana/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /home/www/kohana/index.php(118): Kohana_Request->execute()
#9 {main} in /home/www/kohana/modules/database/classes/Kohana/Database/Query.php:251
2013-05-15 03:11:29 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column '4' in 'on clause' [ SELECT * FROM `orders` LEFT JOIN `sites` ON (`sites`.`id` = `4`) WHERE `orders`.`site_id` = 4 ORDER BY `orders`.`id` DESC ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /home/www/kohana/modules/database/classes/Kohana/Database/Query.php:251
2013-05-15 03:11:29 --- DEBUG: #0 /home/www/kohana/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false, Array)
#1 /home/www/kohana/application/classes/Model/Order.php(13): Kohana_Database_Query->execute()
#2 /home/www/kohana/application/classes/Controller/Index.php(40): Model_Order->get_orders(4)
#3 /home/www/kohana/system/classes/Kohana/Controller.php(84): Controller_Index->action_results()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/www/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#6 /home/www/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/www/kohana/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /home/www/kohana/index.php(118): Kohana_Request->execute()
#9 {main} in /home/www/kohana/modules/database/classes/Kohana/Database/Query.php:251
2013-05-15 03:27:24 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column '4' in 'on clause' [ SELECT * FROM `orders` LEFT JOIN `sites` ON (`sites`.`id` = `4`) WHERE `orders`.`site_id` = 4 ORDER BY `orders`.`id` DESC ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /home/www/kohana/modules/database/classes/Kohana/Database/Query.php:251
2013-05-15 03:27:24 --- DEBUG: #0 /home/www/kohana/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false, Array)
#1 /home/www/kohana/application/classes/Model/Order.php(13): Kohana_Database_Query->execute()
#2 /home/www/kohana/application/classes/Controller/Index.php(40): Model_Order->get_orders(4)
#3 /home/www/kohana/system/classes/Kohana/Controller.php(84): Controller_Index->action_results()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/www/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#6 /home/www/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/www/kohana/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /home/www/kohana/index.php(118): Kohana_Request->execute()
#9 {main} in /home/www/kohana/modules/database/classes/Kohana/Database/Query.php:251
2013-05-15 03:27:44 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column '4' in 'on clause' [ SELECT * FROM `orders` JOIN `sites` ON (`sites`.`id` = `4`) WHERE `orders`.`site_id` = 4 ORDER BY `orders`.`id` DESC ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /home/www/kohana/modules/database/classes/Kohana/Database/Query.php:251
2013-05-15 03:27:44 --- DEBUG: #0 /home/www/kohana/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false, Array)
#1 /home/www/kohana/application/classes/Model/Order.php(13): Kohana_Database_Query->execute()
#2 /home/www/kohana/application/classes/Controller/Index.php(40): Model_Order->get_orders(4)
#3 /home/www/kohana/system/classes/Kohana/Controller.php(84): Controller_Index->action_results()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/www/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#6 /home/www/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/www/kohana/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /home/www/kohana/index.php(118): Kohana_Request->execute()
#9 {main} in /home/www/kohana/modules/database/classes/Kohana/Database/Query.php:251
2013-05-15 03:27:45 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column '4' in 'on clause' [ SELECT * FROM `orders` JOIN `sites` ON (`sites`.`id` = `4`) WHERE `orders`.`site_id` = 4 ORDER BY `orders`.`id` DESC ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /home/www/kohana/modules/database/classes/Kohana/Database/Query.php:251
2013-05-15 03:27:45 --- DEBUG: #0 /home/www/kohana/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false, Array)
#1 /home/www/kohana/application/classes/Model/Order.php(13): Kohana_Database_Query->execute()
#2 /home/www/kohana/application/classes/Controller/Index.php(40): Model_Order->get_orders(4)
#3 /home/www/kohana/system/classes/Kohana/Controller.php(84): Controller_Index->action_results()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/www/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#6 /home/www/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/www/kohana/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /home/www/kohana/index.php(118): Kohana_Request->execute()
#9 {main} in /home/www/kohana/modules/database/classes/Kohana/Database/Query.php:251
2013-05-15 03:27:45 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column '4' in 'on clause' [ SELECT * FROM `orders` JOIN `sites` ON (`sites`.`id` = `4`) WHERE `orders`.`site_id` = 4 ORDER BY `orders`.`id` DESC ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /home/www/kohana/modules/database/classes/Kohana/Database/Query.php:251
2013-05-15 03:27:45 --- DEBUG: #0 /home/www/kohana/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false, Array)
#1 /home/www/kohana/application/classes/Model/Order.php(13): Kohana_Database_Query->execute()
#2 /home/www/kohana/application/classes/Controller/Index.php(40): Model_Order->get_orders(4)
#3 /home/www/kohana/system/classes/Kohana/Controller.php(84): Controller_Index->action_results()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/www/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#6 /home/www/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/www/kohana/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /home/www/kohana/index.php(118): Kohana_Request->execute()
#9 {main} in /home/www/kohana/modules/database/classes/Kohana/Database/Query.php:251
2013-05-15 03:28:46 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column '4' in 'on clause' [ SELECT * FROM `orders` RIGHT JOIN `sites` ON (`sites`.`id` = `4`) WHERE `orders`.`site_id` = 4 ORDER BY `orders`.`id` DESC ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /home/www/kohana/modules/database/classes/Kohana/Database/Query.php:251
2013-05-15 03:28:46 --- DEBUG: #0 /home/www/kohana/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false, Array)
#1 /home/www/kohana/application/classes/Model/Order.php(13): Kohana_Database_Query->execute()
#2 /home/www/kohana/application/classes/Controller/Index.php(40): Model_Order->get_orders(4)
#3 /home/www/kohana/system/classes/Kohana/Controller.php(84): Controller_Index->action_results()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/www/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#6 /home/www/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/www/kohana/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /home/www/kohana/index.php(118): Kohana_Request->execute()
#9 {main} in /home/www/kohana/modules/database/classes/Kohana/Database/Query.php:251
2013-05-15 03:29:05 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column '4' in 'on clause' [ SELECT * FROM `orders` RIGHT JOIN `sites` ON (`sites`.`id` = `4`) WHERE `orders`.`site_id` = 4 ORDER BY `orders`.`id` DESC ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /home/www/kohana/modules/database/classes/Kohana/Database/Query.php:251
2013-05-15 03:29:05 --- DEBUG: #0 /home/www/kohana/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false, Array)
#1 /home/www/kohana/application/classes/Model/Order.php(13): Kohana_Database_Query->execute()
#2 /home/www/kohana/application/classes/Controller/Index.php(40): Model_Order->get_orders(4)
#3 /home/www/kohana/system/classes/Kohana/Controller.php(84): Controller_Index->action_results()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/www/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#6 /home/www/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/www/kohana/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /home/www/kohana/index.php(118): Kohana_Request->execute()
#9 {main} in /home/www/kohana/modules/database/classes/Kohana/Database/Query.php:251
2013-05-15 03:29:05 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column '4' in 'on clause' [ SELECT * FROM `orders` RIGHT JOIN `sites` ON (`sites`.`id` = `4`) WHERE `orders`.`site_id` = 4 ORDER BY `orders`.`id` DESC ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /home/www/kohana/modules/database/classes/Kohana/Database/Query.php:251
2013-05-15 03:29:05 --- DEBUG: #0 /home/www/kohana/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false, Array)
#1 /home/www/kohana/application/classes/Model/Order.php(13): Kohana_Database_Query->execute()
#2 /home/www/kohana/application/classes/Controller/Index.php(40): Model_Order->get_orders(4)
#3 /home/www/kohana/system/classes/Kohana/Controller.php(84): Controller_Index->action_results()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/www/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#6 /home/www/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/www/kohana/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /home/www/kohana/index.php(118): Kohana_Request->execute()
#9 {main} in /home/www/kohana/modules/database/classes/Kohana/Database/Query.php:251
2013-05-15 03:29:06 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column '4' in 'on clause' [ SELECT * FROM `orders` RIGHT JOIN `sites` ON (`sites`.`id` = `4`) WHERE `orders`.`site_id` = 4 ORDER BY `orders`.`id` DESC ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /home/www/kohana/modules/database/classes/Kohana/Database/Query.php:251
2013-05-15 03:29:06 --- DEBUG: #0 /home/www/kohana/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false, Array)
#1 /home/www/kohana/application/classes/Model/Order.php(13): Kohana_Database_Query->execute()
#2 /home/www/kohana/application/classes/Controller/Index.php(40): Model_Order->get_orders(4)
#3 /home/www/kohana/system/classes/Kohana/Controller.php(84): Controller_Index->action_results()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/www/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#6 /home/www/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/www/kohana/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /home/www/kohana/index.php(118): Kohana_Request->execute()
#9 {main} in /home/www/kohana/modules/database/classes/Kohana/Database/Query.php:251
2013-05-15 03:29:53 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column '4' in 'on clause' [ SELECT * FROM `order_users` RIGHT JOIN `sites` ON (`sites`.`id` = `4`) WHERE `order_users`.`site_id` = 4 ORDER BY `order_users`.`id` DESC ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /home/www/kohana/modules/database/classes/Kohana/Database/Query.php:251
2013-05-15 03:29:53 --- DEBUG: #0 /home/www/kohana/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false, Array)
#1 /home/www/kohana/application/classes/Model/Order.php(13): Kohana_Database_Query->execute()
#2 /home/www/kohana/application/classes/Controller/Index.php(40): Model_Order->get_orders(4)
#3 /home/www/kohana/system/classes/Kohana/Controller.php(84): Controller_Index->action_results()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/www/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#6 /home/www/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/www/kohana/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /home/www/kohana/index.php(118): Kohana_Request->execute()
#9 {main} in /home/www/kohana/modules/database/classes/Kohana/Database/Query.php:251
2013-05-15 03:30:20 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column '4' in 'on clause' [ SELECT * FROM `order_users` RIGHT JOIN `sites` ON (`sites`.`id` = `4`) WHERE `order_users`.`site_id` = 4 ORDER BY `order_users`.`id` DESC ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /home/www/kohana/modules/database/classes/Kohana/Database/Query.php:251
2013-05-15 03:30:20 --- DEBUG: #0 /home/www/kohana/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false, Array)
#1 /home/www/kohana/application/classes/Model/Order.php(13): Kohana_Database_Query->execute()
#2 /home/www/kohana/application/classes/Controller/Index.php(40): Model_Order->get_orders(4)
#3 /home/www/kohana/system/classes/Kohana/Controller.php(84): Controller_Index->action_results()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/www/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#6 /home/www/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/www/kohana/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /home/www/kohana/index.php(118): Kohana_Request->execute()
#9 {main} in /home/www/kohana/modules/database/classes/Kohana/Database/Query.php:251
2013-05-15 03:30:51 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'russian-moscow.com' in 'on clause' [ SELECT * FROM `order_users` RIGHT JOIN `sites` ON (`sites`.`sitename` = `russian-moscow`.`com`) WHERE `order_users`.`site_id` = 4 ORDER BY `order_users`.`id` DESC ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /home/www/kohana/modules/database/classes/Kohana/Database/Query.php:251
2013-05-15 03:30:51 --- DEBUG: #0 /home/www/kohana/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false, Array)
#1 /home/www/kohana/application/classes/Model/Order.php(13): Kohana_Database_Query->execute()
#2 /home/www/kohana/application/classes/Controller/Index.php(40): Model_Order->get_orders(4)
#3 /home/www/kohana/system/classes/Kohana/Controller.php(84): Controller_Index->action_results()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/www/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#6 /home/www/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/www/kohana/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /home/www/kohana/index.php(118): Kohana_Request->execute()
#9 {main} in /home/www/kohana/modules/database/classes/Kohana/Database/Query.php:251
2013-05-15 03:31:14 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'russian-moscow.com' in 'on clause' [ SELECT * FROM `order_users` JOIN `sites` ON (`sites`.`sitename` = `russian-moscow`.`com`) WHERE `order_users`.`site_id` = 4 ORDER BY `order_users`.`id` DESC ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /home/www/kohana/modules/database/classes/Kohana/Database/Query.php:251
2013-05-15 03:31:14 --- DEBUG: #0 /home/www/kohana/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false, Array)
#1 /home/www/kohana/application/classes/Model/Order.php(13): Kohana_Database_Query->execute()
#2 /home/www/kohana/application/classes/Controller/Index.php(40): Model_Order->get_orders(4)
#3 /home/www/kohana/system/classes/Kohana/Controller.php(84): Controller_Index->action_results()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/www/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#6 /home/www/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/www/kohana/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /home/www/kohana/index.php(118): Kohana_Request->execute()
#9 {main} in /home/www/kohana/modules/database/classes/Kohana/Database/Query.php:251
2013-05-15 03:31:14 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'russian-moscow.com' in 'on clause' [ SELECT * FROM `order_users` JOIN `sites` ON (`sites`.`sitename` = `russian-moscow`.`com`) WHERE `order_users`.`site_id` = 4 ORDER BY `order_users`.`id` DESC ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /home/www/kohana/modules/database/classes/Kohana/Database/Query.php:251
2013-05-15 03:31:14 --- DEBUG: #0 /home/www/kohana/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false, Array)
#1 /home/www/kohana/application/classes/Model/Order.php(13): Kohana_Database_Query->execute()
#2 /home/www/kohana/application/classes/Controller/Index.php(40): Model_Order->get_orders(4)
#3 /home/www/kohana/system/classes/Kohana/Controller.php(84): Controller_Index->action_results()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/www/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#6 /home/www/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/www/kohana/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /home/www/kohana/index.php(118): Kohana_Request->execute()
#9 {main} in /home/www/kohana/modules/database/classes/Kohana/Database/Query.php:251
2013-05-15 03:31:14 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'russian-moscow.com' in 'on clause' [ SELECT * FROM `order_users` JOIN `sites` ON (`sites`.`sitename` = `russian-moscow`.`com`) WHERE `order_users`.`site_id` = 4 ORDER BY `order_users`.`id` DESC ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /home/www/kohana/modules/database/classes/Kohana/Database/Query.php:251
2013-05-15 03:31:14 --- DEBUG: #0 /home/www/kohana/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false, Array)
#1 /home/www/kohana/application/classes/Model/Order.php(13): Kohana_Database_Query->execute()
#2 /home/www/kohana/application/classes/Controller/Index.php(40): Model_Order->get_orders(4)
#3 /home/www/kohana/system/classes/Kohana/Controller.php(84): Controller_Index->action_results()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/www/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#6 /home/www/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/www/kohana/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /home/www/kohana/index.php(118): Kohana_Request->execute()
#9 {main} in /home/www/kohana/modules/database/classes/Kohana/Database/Query.php:251
2013-05-15 03:31:14 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'russian-moscow.com' in 'on clause' [ SELECT * FROM `order_users` JOIN `sites` ON (`sites`.`sitename` = `russian-moscow`.`com`) WHERE `order_users`.`site_id` = 4 ORDER BY `order_users`.`id` DESC ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /home/www/kohana/modules/database/classes/Kohana/Database/Query.php:251
2013-05-15 03:31:14 --- DEBUG: #0 /home/www/kohana/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false, Array)
#1 /home/www/kohana/application/classes/Model/Order.php(13): Kohana_Database_Query->execute()
#2 /home/www/kohana/application/classes/Controller/Index.php(40): Model_Order->get_orders(4)
#3 /home/www/kohana/system/classes/Kohana/Controller.php(84): Controller_Index->action_results()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/www/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#6 /home/www/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/www/kohana/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /home/www/kohana/index.php(118): Kohana_Request->execute()
#9 {main} in /home/www/kohana/modules/database/classes/Kohana/Database/Query.php:251
2013-05-15 03:31:14 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'russian-moscow.com' in 'on clause' [ SELECT * FROM `order_users` JOIN `sites` ON (`sites`.`sitename` = `russian-moscow`.`com`) WHERE `order_users`.`site_id` = 4 ORDER BY `order_users`.`id` DESC ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /home/www/kohana/modules/database/classes/Kohana/Database/Query.php:251
2013-05-15 03:31:14 --- DEBUG: #0 /home/www/kohana/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false, Array)
#1 /home/www/kohana/application/classes/Model/Order.php(13): Kohana_Database_Query->execute()
#2 /home/www/kohana/application/classes/Controller/Index.php(40): Model_Order->get_orders(4)
#3 /home/www/kohana/system/classes/Kohana/Controller.php(84): Controller_Index->action_results()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/www/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#6 /home/www/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/www/kohana/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /home/www/kohana/index.php(118): Kohana_Request->execute()
#9 {main} in /home/www/kohana/modules/database/classes/Kohana/Database/Query.php:251
2013-05-15 03:31:15 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'russian-moscow.com' in 'on clause' [ SELECT * FROM `order_users` JOIN `sites` ON (`sites`.`sitename` = `russian-moscow`.`com`) WHERE `order_users`.`site_id` = 4 ORDER BY `order_users`.`id` DESC ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /home/www/kohana/modules/database/classes/Kohana/Database/Query.php:251
2013-05-15 03:31:15 --- DEBUG: #0 /home/www/kohana/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false, Array)
#1 /home/www/kohana/application/classes/Model/Order.php(13): Kohana_Database_Query->execute()
#2 /home/www/kohana/application/classes/Controller/Index.php(40): Model_Order->get_orders(4)
#3 /home/www/kohana/system/classes/Kohana/Controller.php(84): Controller_Index->action_results()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/www/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#6 /home/www/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/www/kohana/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /home/www/kohana/index.php(118): Kohana_Request->execute()
#9 {main} in /home/www/kohana/modules/database/classes/Kohana/Database/Query.php:251
2013-05-15 03:34:32 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column '4' in 'on clause' [ SELECT * FROM `orders` LEFT JOIN `order_users` ON (`orders`.`user_id` = `order_users`.`id`) JOIN `sites` ON (`sites`.`id` = `4`) WHERE `orders`.`site_id` = 4 ORDER BY `orders`.`id` DESC ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /home/www/kohana/modules/database/classes/Kohana/Database/Query.php:251
2013-05-15 03:34:32 --- DEBUG: #0 /home/www/kohana/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false, Array)
#1 /home/www/kohana/application/classes/Model/Order.php(13): Kohana_Database_Query->execute()
#2 /home/www/kohana/application/classes/Controller/Index.php(40): Model_Order->get_orders(4)
#3 /home/www/kohana/system/classes/Kohana/Controller.php(84): Controller_Index->action_results()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/www/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#6 /home/www/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/www/kohana/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /home/www/kohana/index.php(118): Kohana_Request->execute()
#9 {main} in /home/www/kohana/modules/database/classes/Kohana/Database/Query.php:251
2013-05-15 03:34:34 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column '4' in 'on clause' [ SELECT * FROM `orders` LEFT JOIN `order_users` ON (`orders`.`user_id` = `order_users`.`id`) JOIN `sites` ON (`sites`.`id` = `4`) WHERE `orders`.`site_id` = 4 ORDER BY `orders`.`id` DESC ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /home/www/kohana/modules/database/classes/Kohana/Database/Query.php:251
2013-05-15 03:34:34 --- DEBUG: #0 /home/www/kohana/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false, Array)
#1 /home/www/kohana/application/classes/Model/Order.php(13): Kohana_Database_Query->execute()
#2 /home/www/kohana/application/classes/Controller/Index.php(40): Model_Order->get_orders(4)
#3 /home/www/kohana/system/classes/Kohana/Controller.php(84): Controller_Index->action_results()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/www/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#6 /home/www/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/www/kohana/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /home/www/kohana/index.php(118): Kohana_Request->execute()
#9 {main} in /home/www/kohana/modules/database/classes/Kohana/Database/Query.php:251
2013-05-15 03:34:35 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column '4' in 'on clause' [ SELECT * FROM `orders` LEFT JOIN `order_users` ON (`orders`.`user_id` = `order_users`.`id`) JOIN `sites` ON (`sites`.`id` = `4`) WHERE `orders`.`site_id` = 4 ORDER BY `orders`.`id` DESC ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /home/www/kohana/modules/database/classes/Kohana/Database/Query.php:251
2013-05-15 03:34:35 --- DEBUG: #0 /home/www/kohana/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false, Array)
#1 /home/www/kohana/application/classes/Model/Order.php(13): Kohana_Database_Query->execute()
#2 /home/www/kohana/application/classes/Controller/Index.php(40): Model_Order->get_orders(4)
#3 /home/www/kohana/system/classes/Kohana/Controller.php(84): Controller_Index->action_results()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/www/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#6 /home/www/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/www/kohana/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /home/www/kohana/index.php(118): Kohana_Request->execute()
#9 {main} in /home/www/kohana/modules/database/classes/Kohana/Database/Query.php:251
2013-05-15 03:34:36 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column '4' in 'on clause' [ SELECT * FROM `orders` LEFT JOIN `order_users` ON (`orders`.`user_id` = `order_users`.`id`) JOIN `sites` ON (`sites`.`id` = `4`) WHERE `orders`.`site_id` = 4 ORDER BY `orders`.`id` DESC ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /home/www/kohana/modules/database/classes/Kohana/Database/Query.php:251
2013-05-15 03:34:36 --- DEBUG: #0 /home/www/kohana/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false, Array)
#1 /home/www/kohana/application/classes/Model/Order.php(13): Kohana_Database_Query->execute()
#2 /home/www/kohana/application/classes/Controller/Index.php(40): Model_Order->get_orders(4)
#3 /home/www/kohana/system/classes/Kohana/Controller.php(84): Controller_Index->action_results()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/www/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#6 /home/www/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/www/kohana/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /home/www/kohana/index.php(118): Kohana_Request->execute()
#9 {main} in /home/www/kohana/modules/database/classes/Kohana/Database/Query.php:251
2013-05-15 03:34:36 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column '4' in 'on clause' [ SELECT * FROM `orders` LEFT JOIN `order_users` ON (`orders`.`user_id` = `order_users`.`id`) JOIN `sites` ON (`sites`.`id` = `4`) WHERE `orders`.`site_id` = 4 ORDER BY `orders`.`id` DESC ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /home/www/kohana/modules/database/classes/Kohana/Database/Query.php:251
2013-05-15 03:34:36 --- DEBUG: #0 /home/www/kohana/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false, Array)
#1 /home/www/kohana/application/classes/Model/Order.php(13): Kohana_Database_Query->execute()
#2 /home/www/kohana/application/classes/Controller/Index.php(40): Model_Order->get_orders(4)
#3 /home/www/kohana/system/classes/Kohana/Controller.php(84): Controller_Index->action_results()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/www/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#6 /home/www/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/www/kohana/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /home/www/kohana/index.php(118): Kohana_Request->execute()
#9 {main} in /home/www/kohana/modules/database/classes/Kohana/Database/Query.php:251
2013-05-15 03:34:37 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column '4' in 'on clause' [ SELECT * FROM `orders` LEFT JOIN `order_users` ON (`orders`.`user_id` = `order_users`.`id`) JOIN `sites` ON (`sites`.`id` = `4`) WHERE `orders`.`site_id` = 4 ORDER BY `orders`.`id` DESC ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /home/www/kohana/modules/database/classes/Kohana/Database/Query.php:251
2013-05-15 03:34:37 --- DEBUG: #0 /home/www/kohana/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false, Array)
#1 /home/www/kohana/application/classes/Model/Order.php(13): Kohana_Database_Query->execute()
#2 /home/www/kohana/application/classes/Controller/Index.php(40): Model_Order->get_orders(4)
#3 /home/www/kohana/system/classes/Kohana/Controller.php(84): Controller_Index->action_results()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/www/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#6 /home/www/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/www/kohana/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /home/www/kohana/index.php(118): Kohana_Request->execute()
#9 {main} in /home/www/kohana/modules/database/classes/Kohana/Database/Query.php:251
2013-05-15 03:34:38 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column '4' in 'on clause' [ SELECT * FROM `orders` LEFT JOIN `order_users` ON (`orders`.`user_id` = `order_users`.`id`) JOIN `sites` ON (`sites`.`id` = `4`) WHERE `orders`.`site_id` = 4 ORDER BY `orders`.`id` DESC ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /home/www/kohana/modules/database/classes/Kohana/Database/Query.php:251
2013-05-15 03:34:38 --- DEBUG: #0 /home/www/kohana/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false, Array)
#1 /home/www/kohana/application/classes/Model/Order.php(13): Kohana_Database_Query->execute()
#2 /home/www/kohana/application/classes/Controller/Index.php(40): Model_Order->get_orders(4)
#3 /home/www/kohana/system/classes/Kohana/Controller.php(84): Controller_Index->action_results()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/www/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#6 /home/www/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/www/kohana/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /home/www/kohana/index.php(118): Kohana_Request->execute()
#9 {main} in /home/www/kohana/modules/database/classes/Kohana/Database/Query.php:251
2013-05-15 03:34:39 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column '4' in 'on clause' [ SELECT * FROM `orders` LEFT JOIN `order_users` ON (`orders`.`user_id` = `order_users`.`id`) JOIN `sites` ON (`sites`.`id` = `4`) WHERE `orders`.`site_id` = 4 ORDER BY `orders`.`id` DESC ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /home/www/kohana/modules/database/classes/Kohana/Database/Query.php:251
2013-05-15 03:34:39 --- DEBUG: #0 /home/www/kohana/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false, Array)
#1 /home/www/kohana/application/classes/Model/Order.php(13): Kohana_Database_Query->execute()
#2 /home/www/kohana/application/classes/Controller/Index.php(40): Model_Order->get_orders(4)
#3 /home/www/kohana/system/classes/Kohana/Controller.php(84): Controller_Index->action_results()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/www/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#6 /home/www/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/www/kohana/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /home/www/kohana/index.php(118): Kohana_Request->execute()
#9 {main} in /home/www/kohana/modules/database/classes/Kohana/Database/Query.php:251
2013-05-15 04:05:58 --- EMERGENCY: Kohana_Exception [ 0 ]: Method find_all() cannot be called on loaded objects ~ MODPATH/orm/classes/Kohana/ORM.php [ 988 ] in /home/www/kohana/application/classes/Controller/Index.php:47
2013-05-15 04:05:58 --- DEBUG: #0 /home/www/kohana/application/classes/Controller/Index.php(47): Kohana_ORM->find_all()
#1 /home/www/kohana/system/classes/Kohana/Controller.php(84): Controller_Index->action_results()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/www/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#4 /home/www/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/www/kohana/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /home/www/kohana/index.php(118): Kohana_Request->execute()
#7 {main} in /home/www/kohana/application/classes/Controller/Index.php:47
2013-05-15 04:06:11 --- EMERGENCY: Kohana_Exception [ 0 ]: Method find_all() cannot be called on loaded objects ~ MODPATH/orm/classes/Kohana/ORM.php [ 988 ] in /home/www/kohana/application/classes/Controller/Index.php:47
2013-05-15 04:06:11 --- DEBUG: #0 /home/www/kohana/application/classes/Controller/Index.php(47): Kohana_ORM->find_all()
#1 /home/www/kohana/system/classes/Kohana/Controller.php(84): Controller_Index->action_results()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/www/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#4 /home/www/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/www/kohana/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /home/www/kohana/index.php(118): Kohana_Request->execute()
#7 {main} in /home/www/kohana/application/classes/Controller/Index.php:47
2013-05-15 04:06:55 --- EMERGENCY: Kohana_Exception [ 0 ]: Method find_all() cannot be called on loaded objects ~ MODPATH/orm/classes/Kohana/ORM.php [ 988 ] in /home/www/kohana/application/classes/Controller/Index.php:47
2013-05-15 04:06:55 --- DEBUG: #0 /home/www/kohana/application/classes/Controller/Index.php(47): Kohana_ORM->find_all()
#1 /home/www/kohana/system/classes/Kohana/Controller.php(84): Controller_Index->action_results()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/www/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#4 /home/www/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/www/kohana/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /home/www/kohana/index.php(118): Kohana_Request->execute()
#7 {main} in /home/www/kohana/application/classes/Controller/Index.php:47
2013-05-15 04:07:09 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_post' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in :
2013-05-15 04:07:09 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-15 04:09:44 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_Post' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in :
2013-05-15 04:09:44 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-15 04:14:12 --- EMERGENCY: Kohana_Exception [ 0 ]: The post property does not exist in the Model_Hui class ~ MODPATH/orm/classes/Kohana/ORM.php [ 684 ] in /home/www/kohana/modules/orm/classes/Kohana/ORM.php:600
2013-05-15 04:14:12 --- DEBUG: #0 /home/www/kohana/modules/orm/classes/Kohana/ORM.php(600): Kohana_ORM->get('post')
#1 /home/www/kohana/application/classes/Controller/Index.php(49): Kohana_ORM->__get('post')
#2 /home/www/kohana/system/classes/Kohana/Controller.php(84): Controller_Index->action_results()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/www/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#5 /home/www/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/www/kohana/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /home/www/kohana/index.php(118): Kohana_Request->execute()
#8 {main} in /home/www/kohana/modules/orm/classes/Kohana/ORM.php:600
2013-05-15 04:14:38 --- EMERGENCY: Kohana_Exception [ 0 ]: Method find_all() cannot be called on loaded objects ~ MODPATH/orm/classes/Kohana/ORM.php [ 988 ] in /home/www/kohana/application/classes/Controller/Index.php:47
2013-05-15 04:14:38 --- DEBUG: #0 /home/www/kohana/application/classes/Controller/Index.php(47): Kohana_ORM->find_all()
#1 /home/www/kohana/system/classes/Kohana/Controller.php(84): Controller_Index->action_results()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/www/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#4 /home/www/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/www/kohana/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /home/www/kohana/index.php(118): Kohana_Request->execute()
#7 {main} in /home/www/kohana/application/classes/Controller/Index.php:47
2013-05-15 04:15:28 --- EMERGENCY: Kohana_Exception [ 0 ]: Method find_all() cannot be called on loaded objects ~ MODPATH/orm/classes/Kohana/ORM.php [ 988 ] in /home/www/kohana/application/classes/Controller/Index.php:47
2013-05-15 04:15:28 --- DEBUG: #0 /home/www/kohana/application/classes/Controller/Index.php(47): Kohana_ORM->find_all()
#1 /home/www/kohana/system/classes/Kohana/Controller.php(84): Controller_Index->action_results()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/www/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#4 /home/www/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/www/kohana/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /home/www/kohana/index.php(118): Kohana_Request->execute()
#7 {main} in /home/www/kohana/application/classes/Controller/Index.php:47
2013-05-15 04:16:18 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_hui' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in :
2013-05-15 04:16:18 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-15 04:16:19 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_hui' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in :
2013-05-15 04:16:19 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-15 04:19:39 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_Order_User' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in :
2013-05-15 04:19:39 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-15 04:22:10 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: Model_Order::$_object_name ~ MODPATH/orm/classes/Kohana/ORM.php [ 676 ] in /home/www/kohana/modules/orm/classes/Kohana/ORM.php:676
2013-05-15 04:22:10 --- DEBUG: #0 /home/www/kohana/modules/orm/classes/Kohana/ORM.php(676): Kohana_Core::error_handler(8, 'Undefined prope...', '/home/www/kohan...', 676, Array)
#1 /home/www/kohana/modules/orm/classes/Kohana/ORM.php(600): Kohana_ORM->get('order')
#2 /home/www/kohana/application/classes/Controller/Index.php(48): Kohana_ORM->__get('order')
#3 /home/www/kohana/system/classes/Kohana/Controller.php(84): Controller_Index->action_results()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/www/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#6 /home/www/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/www/kohana/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /home/www/kohana/index.php(118): Kohana_Request->execute()
#9 {main} in /home/www/kohana/modules/orm/classes/Kohana/ORM.php:676
2013-05-15 04:24:28 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: Model_Order::$_object_name ~ MODPATH/orm/classes/Kohana/ORM.php [ 676 ] in /home/www/kohana/modules/orm/classes/Kohana/ORM.php:676
2013-05-15 04:24:28 --- DEBUG: #0 /home/www/kohana/modules/orm/classes/Kohana/ORM.php(676): Kohana_Core::error_handler(8, 'Undefined prope...', '/home/www/kohan...', 676, Array)
#1 /home/www/kohana/modules/orm/classes/Kohana/ORM.php(600): Kohana_ORM->get('orders')
#2 /home/www/kohana/application/classes/Controller/Index.php(48): Kohana_ORM->__get('orders')
#3 /home/www/kohana/system/classes/Kohana/Controller.php(84): Controller_Index->action_results()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/www/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#6 /home/www/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/www/kohana/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /home/www/kohana/index.php(118): Kohana_Request->execute()
#9 {main} in /home/www/kohana/modules/orm/classes/Kohana/ORM.php:676
2013-05-15 04:25:13 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: Model_Order::$_object_name ~ MODPATH/orm/classes/Kohana/ORM.php [ 676 ] in /home/www/kohana/modules/orm/classes/Kohana/ORM.php:676
2013-05-15 04:25:13 --- DEBUG: #0 /home/www/kohana/modules/orm/classes/Kohana/ORM.php(676): Kohana_Core::error_handler(8, 'Undefined prope...', '/home/www/kohan...', 676, Array)
#1 /home/www/kohana/modules/orm/classes/Kohana/ORM.php(600): Kohana_ORM->get('orders')
#2 /home/www/kohana/application/classes/Controller/Index.php(48): Kohana_ORM->__get('orders')
#3 /home/www/kohana/system/classes/Kohana/Controller.php(84): Controller_Index->action_results()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/www/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#6 /home/www/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/www/kohana/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /home/www/kohana/index.php(118): Kohana_Request->execute()
#9 {main} in /home/www/kohana/modules/orm/classes/Kohana/ORM.php:676
2013-05-15 04:30:16 --- EMERGENCY: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/Controller/Index.php [ 48 ] in /home/www/kohana/application/classes/Controller/Index.php:48
2013-05-15 04:30:16 --- DEBUG: #0 /home/www/kohana/application/classes/Controller/Index.php(48): Kohana_Core::error_handler(2, 'Invalid argumen...', '/home/www/kohan...', 48, Array)
#1 /home/www/kohana/system/classes/Kohana/Controller.php(84): Controller_Index->action_results()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/www/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#4 /home/www/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/www/kohana/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /home/www/kohana/index.php(118): Kohana_Request->execute()
#7 {main} in /home/www/kohana/application/classes/Controller/Index.php:48
2013-05-15 04:30:17 --- EMERGENCY: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/Controller/Index.php [ 48 ] in /home/www/kohana/application/classes/Controller/Index.php:48
2013-05-15 04:30:17 --- DEBUG: #0 /home/www/kohana/application/classes/Controller/Index.php(48): Kohana_Core::error_handler(2, 'Invalid argumen...', '/home/www/kohan...', 48, Array)
#1 /home/www/kohana/system/classes/Kohana/Controller.php(84): Controller_Index->action_results()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/www/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#4 /home/www/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/www/kohana/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /home/www/kohana/index.php(118): Kohana_Request->execute()
#7 {main} in /home/www/kohana/application/classes/Controller/Index.php:48
2013-05-15 04:30:32 --- EMERGENCY: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/Controller/Index.php [ 48 ] in /home/www/kohana/application/classes/Controller/Index.php:48
2013-05-15 04:30:32 --- DEBUG: #0 /home/www/kohana/application/classes/Controller/Index.php(48): Kohana_Core::error_handler(2, 'Invalid argumen...', '/home/www/kohan...', 48, Array)
#1 /home/www/kohana/system/classes/Kohana/Controller.php(84): Controller_Index->action_results()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/www/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#4 /home/www/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/www/kohana/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /home/www/kohana/index.php(118): Kohana_Request->execute()
#7 {main} in /home/www/kohana/application/classes/Controller/Index.php:48
2013-05-15 04:30:33 --- EMERGENCY: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/Controller/Index.php [ 48 ] in /home/www/kohana/application/classes/Controller/Index.php:48
2013-05-15 04:30:33 --- DEBUG: #0 /home/www/kohana/application/classes/Controller/Index.php(48): Kohana_Core::error_handler(2, 'Invalid argumen...', '/home/www/kohan...', 48, Array)
#1 /home/www/kohana/system/classes/Kohana/Controller.php(84): Controller_Index->action_results()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/www/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#4 /home/www/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/www/kohana/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /home/www/kohana/index.php(118): Kohana_Request->execute()
#7 {main} in /home/www/kohana/application/classes/Controller/Index.php:48
2013-05-15 04:38:21 --- EMERGENCY: Kohana_Exception [ 0 ]: The site property does not exist in the Model_Order class ~ MODPATH/orm/classes/Kohana/ORM.php [ 684 ] in /home/www/kohana/modules/orm/classes/Kohana/ORM.php:600
2013-05-15 04:38:21 --- DEBUG: #0 /home/www/kohana/modules/orm/classes/Kohana/ORM.php(600): Kohana_ORM->get('site')
#1 /home/www/kohana/application/classes/Controller/Index.php(49): Kohana_ORM->__get('site')
#2 /home/www/kohana/system/classes/Kohana/Controller.php(84): Controller_Index->action_results()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/www/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#5 /home/www/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/www/kohana/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /home/www/kohana/index.php(118): Kohana_Request->execute()
#8 {main} in /home/www/kohana/modules/orm/classes/Kohana/ORM.php:600
2013-05-15 04:38:46 --- EMERGENCY: Kohana_Exception [ 0 ]: The site property does not exist in the Model_Order class ~ MODPATH/orm/classes/Kohana/ORM.php [ 684 ] in /home/www/kohana/modules/orm/classes/Kohana/ORM.php:600
2013-05-15 04:38:46 --- DEBUG: #0 /home/www/kohana/modules/orm/classes/Kohana/ORM.php(600): Kohana_ORM->get('site')
#1 /home/www/kohana/application/classes/Controller/Index.php(49): Kohana_ORM->__get('site')
#2 /home/www/kohana/system/classes/Kohana/Controller.php(84): Controller_Index->action_results()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/www/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#5 /home/www/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/www/kohana/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /home/www/kohana/index.php(118): Kohana_Request->execute()
#8 {main} in /home/www/kohana/modules/orm/classes/Kohana/ORM.php:600
2013-05-15 04:38:47 --- EMERGENCY: Kohana_Exception [ 0 ]: The site property does not exist in the Model_Order class ~ MODPATH/orm/classes/Kohana/ORM.php [ 684 ] in /home/www/kohana/modules/orm/classes/Kohana/ORM.php:600
2013-05-15 04:38:47 --- DEBUG: #0 /home/www/kohana/modules/orm/classes/Kohana/ORM.php(600): Kohana_ORM->get('site')
#1 /home/www/kohana/application/classes/Controller/Index.php(49): Kohana_ORM->__get('site')
#2 /home/www/kohana/system/classes/Kohana/Controller.php(84): Controller_Index->action_results()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/www/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#5 /home/www/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/www/kohana/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /home/www/kohana/index.php(118): Kohana_Request->execute()
#8 {main} in /home/www/kohana/modules/orm/classes/Kohana/ORM.php:600
2013-05-15 04:50:31 --- EMERGENCY: Kohana_Exception [ 0 ]: Method find() cannot be called on loaded objects ~ MODPATH/orm/classes/Kohana/ORM.php [ 963 ] in /home/www/kohana/application/classes/Controller/Index.php:51
2013-05-15 04:50:31 --- DEBUG: #0 /home/www/kohana/application/classes/Controller/Index.php(51): Kohana_ORM->find()
#1 /home/www/kohana/system/classes/Kohana/Controller.php(84): Controller_Index->action_results()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/www/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#4 /home/www/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/www/kohana/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /home/www/kohana/index.php(118): Kohana_Request->execute()
#7 {main} in /home/www/kohana/application/classes/Controller/Index.php:51
2013-05-15 04:50:39 --- EMERGENCY: Kohana_Exception [ 0 ]: Method find() cannot be called on loaded objects ~ MODPATH/orm/classes/Kohana/ORM.php [ 963 ] in /home/www/kohana/application/classes/Controller/Index.php:51
2013-05-15 04:50:39 --- DEBUG: #0 /home/www/kohana/application/classes/Controller/Index.php(51): Kohana_ORM->find()
#1 /home/www/kohana/system/classes/Kohana/Controller.php(84): Controller_Index->action_results()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/www/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#4 /home/www/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/www/kohana/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /home/www/kohana/index.php(118): Kohana_Request->execute()
#7 {main} in /home/www/kohana/application/classes/Controller/Index.php:51
2013-05-15 04:51:52 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_Order_User' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in :
2013-05-15 04:51:52 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-15 04:56:41 --- EMERGENCY: Kohana_Exception [ 0 ]: Method find_all() cannot be called on loaded objects ~ MODPATH/orm/classes/Kohana/ORM.php [ 988 ] in /home/www/kohana/application/classes/Controller/Index.php:51
2013-05-15 04:56:41 --- DEBUG: #0 /home/www/kohana/application/classes/Controller/Index.php(51): Kohana_ORM->find_all()
#1 /home/www/kohana/system/classes/Kohana/Controller.php(84): Controller_Index->action_results()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/www/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#4 /home/www/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/www/kohana/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /home/www/kohana/index.php(118): Kohana_Request->execute()
#7 {main} in /home/www/kohana/application/classes/Controller/Index.php:51
2013-05-15 04:58:16 --- EMERGENCY: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/Controller/Index.php [ 52 ] in /home/www/kohana/application/classes/Controller/Index.php:52
2013-05-15 04:58:16 --- DEBUG: #0 /home/www/kohana/application/classes/Controller/Index.php(52): Kohana_Core::error_handler(2, 'Invalid argumen...', '/home/www/kohan...', 52, Array)
#1 /home/www/kohana/system/classes/Kohana/Controller.php(84): Controller_Index->action_results()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/www/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#4 /home/www/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/www/kohana/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /home/www/kohana/index.php(118): Kohana_Request->execute()
#7 {main} in /home/www/kohana/application/classes/Controller/Index.php:52
2013-05-15 04:58:41 --- EMERGENCY: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/Controller/Index.php [ 52 ] in /home/www/kohana/application/classes/Controller/Index.php:52
2013-05-15 04:58:41 --- DEBUG: #0 /home/www/kohana/application/classes/Controller/Index.php(52): Kohana_Core::error_handler(2, 'Invalid argumen...', '/home/www/kohan...', 52, Array)
#1 /home/www/kohana/system/classes/Kohana/Controller.php(84): Controller_Index->action_results()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/www/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#4 /home/www/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/www/kohana/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /home/www/kohana/index.php(118): Kohana_Request->execute()
#7 {main} in /home/www/kohana/application/classes/Controller/Index.php:52
2013-05-15 04:58:41 --- EMERGENCY: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/Controller/Index.php [ 52 ] in /home/www/kohana/application/classes/Controller/Index.php:52
2013-05-15 04:58:41 --- DEBUG: #0 /home/www/kohana/application/classes/Controller/Index.php(52): Kohana_Core::error_handler(2, 'Invalid argumen...', '/home/www/kohan...', 52, Array)
#1 /home/www/kohana/system/classes/Kohana/Controller.php(84): Controller_Index->action_results()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/www/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#4 /home/www/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/www/kohana/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /home/www/kohana/index.php(118): Kohana_Request->execute()
#7 {main} in /home/www/kohana/application/classes/Controller/Index.php:52
2013-05-15 04:59:32 --- EMERGENCY: ErrorException [ 1 ]: Cannot use object of type Model_Site as array ~ APPPATH/classes/Controller/Index.php [ 52 ] in :
2013-05-15 04:59:32 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-15 04:59:40 --- EMERGENCY: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH/classes/Controller/Index.php [ 52 ] in /home/www/kohana/application/classes/Controller/Index.php:52
2013-05-15 04:59:40 --- DEBUG: #0 /home/www/kohana/application/classes/Controller/Index.php(52): Kohana_Core::error_handler(8, 'Undefined offse...', '/home/www/kohan...', 52, Array)
#1 /home/www/kohana/system/classes/Kohana/Controller.php(84): Controller_Index->action_results()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/www/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#4 /home/www/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/www/kohana/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /home/www/kohana/index.php(118): Kohana_Request->execute()
#7 {main} in /home/www/kohana/application/classes/Controller/Index.php:52
2013-05-15 04:59:41 --- EMERGENCY: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH/classes/Controller/Index.php [ 52 ] in /home/www/kohana/application/classes/Controller/Index.php:52
2013-05-15 04:59:41 --- DEBUG: #0 /home/www/kohana/application/classes/Controller/Index.php(52): Kohana_Core::error_handler(8, 'Undefined offse...', '/home/www/kohan...', 52, Array)
#1 /home/www/kohana/system/classes/Kohana/Controller.php(84): Controller_Index->action_results()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/www/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#4 /home/www/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/www/kohana/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /home/www/kohana/index.php(118): Kohana_Request->execute()
#7 {main} in /home/www/kohana/application/classes/Controller/Index.php:52
2013-05-15 05:01:14 --- EMERGENCY: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/Controller/Index.php [ 52 ] in /home/www/kohana/application/classes/Controller/Index.php:52
2013-05-15 05:01:14 --- DEBUG: #0 /home/www/kohana/application/classes/Controller/Index.php(52): Kohana_Core::error_handler(2, 'Invalid argumen...', '/home/www/kohan...', 52, Array)
#1 /home/www/kohana/system/classes/Kohana/Controller.php(84): Controller_Index->action_results()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/www/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#4 /home/www/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/www/kohana/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /home/www/kohana/index.php(118): Kohana_Request->execute()
#7 {main} in /home/www/kohana/application/classes/Controller/Index.php:52
2013-05-15 05:32:20 --- EMERGENCY: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/Controller/Index.php [ 52 ] in /home/www/kohana/application/classes/Controller/Index.php:52
2013-05-15 05:32:20 --- DEBUG: #0 /home/www/kohana/application/classes/Controller/Index.php(52): Kohana_Core::error_handler(2, 'Invalid argumen...', '/home/www/kohan...', 52, Array)
#1 /home/www/kohana/system/classes/Kohana/Controller.php(84): Controller_Index->action_results()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/www/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#4 /home/www/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/www/kohana/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /home/www/kohana/index.php(118): Kohana_Request->execute()
#7 {main} in /home/www/kohana/application/classes/Controller/Index.php:52
2013-05-15 05:32:42 --- EMERGENCY: Kohana_Exception [ 0 ]: The orders property does not exist in the Model_Site class ~ MODPATH/orm/classes/Kohana/ORM.php [ 684 ] in /home/www/kohana/modules/orm/classes/Kohana/ORM.php:600
2013-05-15 05:32:42 --- DEBUG: #0 /home/www/kohana/modules/orm/classes/Kohana/ORM.php(600): Kohana_ORM->get('orders')
#1 /home/www/kohana/application/classes/Controller/Index.php(52): Kohana_ORM->__get('orders')
#2 /home/www/kohana/system/classes/Kohana/Controller.php(84): Controller_Index->action_results()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/www/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#5 /home/www/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/www/kohana/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /home/www/kohana/index.php(118): Kohana_Request->execute()
#8 {main} in /home/www/kohana/modules/orm/classes/Kohana/ORM.php:600
2013-05-15 05:32:56 --- EMERGENCY: Kohana_Exception [ 0 ]: The orders property does not exist in the Model_Site class ~ MODPATH/orm/classes/Kohana/ORM.php [ 684 ] in /home/www/kohana/modules/orm/classes/Kohana/ORM.php:600
2013-05-15 05:32:56 --- DEBUG: #0 /home/www/kohana/modules/orm/classes/Kohana/ORM.php(600): Kohana_ORM->get('orders')
#1 /home/www/kohana/application/classes/Controller/Index.php(52): Kohana_ORM->__get('orders')
#2 /home/www/kohana/system/classes/Kohana/Controller.php(84): Controller_Index->action_results()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/www/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#5 /home/www/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/www/kohana/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /home/www/kohana/index.php(118): Kohana_Request->execute()
#8 {main} in /home/www/kohana/modules/orm/classes/Kohana/ORM.php:600
2013-05-15 05:32:57 --- EMERGENCY: Kohana_Exception [ 0 ]: The orders property does not exist in the Model_Site class ~ MODPATH/orm/classes/Kohana/ORM.php [ 684 ] in /home/www/kohana/modules/orm/classes/Kohana/ORM.php:600
2013-05-15 05:32:57 --- DEBUG: #0 /home/www/kohana/modules/orm/classes/Kohana/ORM.php(600): Kohana_ORM->get('orders')
#1 /home/www/kohana/application/classes/Controller/Index.php(52): Kohana_ORM->__get('orders')
#2 /home/www/kohana/system/classes/Kohana/Controller.php(84): Controller_Index->action_results()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/www/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#5 /home/www/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/www/kohana/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /home/www/kohana/index.php(118): Kohana_Request->execute()
#8 {main} in /home/www/kohana/modules/orm/classes/Kohana/ORM.php:600
2013-05-15 05:32:58 --- EMERGENCY: Kohana_Exception [ 0 ]: The orders property does not exist in the Model_Site class ~ MODPATH/orm/classes/Kohana/ORM.php [ 684 ] in /home/www/kohana/modules/orm/classes/Kohana/ORM.php:600
2013-05-15 05:32:58 --- DEBUG: #0 /home/www/kohana/modules/orm/classes/Kohana/ORM.php(600): Kohana_ORM->get('orders')
#1 /home/www/kohana/application/classes/Controller/Index.php(52): Kohana_ORM->__get('orders')
#2 /home/www/kohana/system/classes/Kohana/Controller.php(84): Controller_Index->action_results()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/www/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#5 /home/www/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/www/kohana/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /home/www/kohana/index.php(118): Kohana_Request->execute()
#8 {main} in /home/www/kohana/modules/orm/classes/Kohana/ORM.php:600
2013-05-15 05:33:15 --- EMERGENCY: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/Controller/Index.php [ 52 ] in /home/www/kohana/application/classes/Controller/Index.php:52
2013-05-15 05:33:15 --- DEBUG: #0 /home/www/kohana/application/classes/Controller/Index.php(52): Kohana_Core::error_handler(2, 'Invalid argumen...', '/home/www/kohan...', 52, Array)
#1 /home/www/kohana/system/classes/Kohana/Controller.php(84): Controller_Index->action_results()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/www/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#4 /home/www/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/www/kohana/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /home/www/kohana/index.php(118): Kohana_Request->execute()
#7 {main} in /home/www/kohana/application/classes/Controller/Index.php:52
2013-05-15 05:33:16 --- EMERGENCY: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/Controller/Index.php [ 52 ] in /home/www/kohana/application/classes/Controller/Index.php:52
2013-05-15 05:33:16 --- DEBUG: #0 /home/www/kohana/application/classes/Controller/Index.php(52): Kohana_Core::error_handler(2, 'Invalid argumen...', '/home/www/kohan...', 52, Array)
#1 /home/www/kohana/system/classes/Kohana/Controller.php(84): Controller_Index->action_results()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/www/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#4 /home/www/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/www/kohana/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /home/www/kohana/index.php(118): Kohana_Request->execute()
#7 {main} in /home/www/kohana/application/classes/Controller/Index.php:52
2013-05-15 05:34:42 --- EMERGENCY: Kohana_Exception [ 0 ]: The users property does not exist in the Model_Site class ~ MODPATH/orm/classes/Kohana/ORM.php [ 684 ] in /home/www/kohana/modules/orm/classes/Kohana/ORM.php:600
2013-05-15 05:34:42 --- DEBUG: #0 /home/www/kohana/modules/orm/classes/Kohana/ORM.php(600): Kohana_ORM->get('users')
#1 /home/www/kohana/application/classes/Controller/Index.php(52): Kohana_ORM->__get('users')
#2 /home/www/kohana/system/classes/Kohana/Controller.php(84): Controller_Index->action_results()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/www/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#5 /home/www/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/www/kohana/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /home/www/kohana/index.php(118): Kohana_Request->execute()
#8 {main} in /home/www/kohana/modules/orm/classes/Kohana/ORM.php:600
2013-05-15 05:34:59 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_Order_User' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in :
2013-05-15 05:34:59 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-15 05:35:00 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_Order_User' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in :
2013-05-15 05:35:00 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-15 05:35:38 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_Order_User' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in :
2013-05-15 05:35:38 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-15 05:36:03 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_Order_User' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in :
2013-05-15 05:36:03 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-15 05:36:07 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_Order_User' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in :
2013-05-15 05:36:07 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-15 05:36:07 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_Order_User' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in :
2013-05-15 05:36:07 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-15 05:36:08 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_Order_User' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in :
2013-05-15 05:36:08 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-15 05:36:44 --- EMERGENCY: Kohana_Exception [ 0 ]: The users property does not exist in the Model_Site class ~ MODPATH/orm/classes/Kohana/ORM.php [ 684 ] in /home/www/kohana/modules/orm/classes/Kohana/ORM.php:600
2013-05-15 05:36:44 --- DEBUG: #0 /home/www/kohana/modules/orm/classes/Kohana/ORM.php(600): Kohana_ORM->get('users')
#1 /home/www/kohana/application/classes/Controller/Index.php(53): Kohana_ORM->__get('users')
#2 /home/www/kohana/system/classes/Kohana/Controller.php(84): Controller_Index->action_results()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/www/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#5 /home/www/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/www/kohana/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /home/www/kohana/index.php(118): Kohana_Request->execute()
#8 {main} in /home/www/kohana/modules/orm/classes/Kohana/ORM.php:600
2013-05-15 05:36:55 --- EMERGENCY: Kohana_Exception [ 0 ]: The users property does not exist in the Model_Site class ~ MODPATH/orm/classes/Kohana/ORM.php [ 684 ] in /home/www/kohana/modules/orm/classes/Kohana/ORM.php:600
2013-05-15 05:36:55 --- DEBUG: #0 /home/www/kohana/modules/orm/classes/Kohana/ORM.php(600): Kohana_ORM->get('users')
#1 /home/www/kohana/application/classes/Controller/Index.php(53): Kohana_ORM->__get('users')
#2 /home/www/kohana/system/classes/Kohana/Controller.php(84): Controller_Index->action_results()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/www/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#5 /home/www/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/www/kohana/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /home/www/kohana/index.php(118): Kohana_Request->execute()
#8 {main} in /home/www/kohana/modules/orm/classes/Kohana/ORM.php:600
2013-05-15 05:37:04 --- EMERGENCY: Kohana_Exception [ 0 ]: The users property does not exist in the Model_Site class ~ MODPATH/orm/classes/Kohana/ORM.php [ 684 ] in /home/www/kohana/modules/orm/classes/Kohana/ORM.php:600
2013-05-15 05:37:04 --- DEBUG: #0 /home/www/kohana/modules/orm/classes/Kohana/ORM.php(600): Kohana_ORM->get('users')
#1 /home/www/kohana/application/classes/Controller/Index.php(53): Kohana_ORM->__get('users')
#2 /home/www/kohana/system/classes/Kohana/Controller.php(84): Controller_Index->action_results()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/www/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#5 /home/www/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/www/kohana/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /home/www/kohana/index.php(118): Kohana_Request->execute()
#8 {main} in /home/www/kohana/modules/orm/classes/Kohana/ORM.php:600
2013-05-15 05:37:05 --- EMERGENCY: Kohana_Exception [ 0 ]: The users property does not exist in the Model_Site class ~ MODPATH/orm/classes/Kohana/ORM.php [ 684 ] in /home/www/kohana/modules/orm/classes/Kohana/ORM.php:600
2013-05-15 05:37:05 --- DEBUG: #0 /home/www/kohana/modules/orm/classes/Kohana/ORM.php(600): Kohana_ORM->get('users')
#1 /home/www/kohana/application/classes/Controller/Index.php(53): Kohana_ORM->__get('users')
#2 /home/www/kohana/system/classes/Kohana/Controller.php(84): Controller_Index->action_results()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/www/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#5 /home/www/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/www/kohana/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /home/www/kohana/index.php(118): Kohana_Request->execute()
#8 {main} in /home/www/kohana/modules/orm/classes/Kohana/ORM.php:600
2013-05-15 05:37:12 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_Order_User' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in :
2013-05-15 05:37:12 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-15 05:37:13 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_Order_User' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in :
2013-05-15 05:37:13 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-15 05:37:48 --- EMERGENCY: Kohana_Exception [ 0 ]: The users property does not exist in the Model_Site class ~ MODPATH/orm/classes/Kohana/ORM.php [ 684 ] in /home/www/kohana/modules/orm/classes/Kohana/ORM.php:600
2013-05-15 05:37:48 --- DEBUG: #0 /home/www/kohana/modules/orm/classes/Kohana/ORM.php(600): Kohana_ORM->get('users')
#1 /home/www/kohana/application/classes/Controller/Index.php(53): Kohana_ORM->__get('users')
#2 /home/www/kohana/system/classes/Kohana/Controller.php(84): Controller_Index->action_results()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/www/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#5 /home/www/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/www/kohana/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /home/www/kohana/index.php(118): Kohana_Request->execute()
#8 {main} in /home/www/kohana/modules/orm/classes/Kohana/ORM.php:600
2013-05-15 05:38:14 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_Order_User' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in :
2013-05-15 05:38:14 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-15 05:38:53 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_Order_User' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in :
2013-05-15 05:38:53 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-15 05:43:06 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_Order_User' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in :
2013-05-15 05:43:06 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-15 05:43:25 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_Order_User' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in :
2013-05-15 05:43:25 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-15 05:43:25 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_Order_User' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in :
2013-05-15 05:43:25 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-15 05:44:12 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: Model_Orderuser::$_object_name ~ MODPATH/orm/classes/Kohana/ORM.php [ 629 ] in /home/www/kohana/modules/orm/classes/Kohana/ORM.php:629
2013-05-15 05:44:12 --- DEBUG: #0 /home/www/kohana/modules/orm/classes/Kohana/ORM.php(629): Kohana_Core::error_handler(8, 'Undefined prope...', '/home/www/kohan...', 629, Array)
#1 /home/www/kohana/modules/orm/classes/Kohana/ORM.php(600): Kohana_ORM->get('user')
#2 /home/www/kohana/application/classes/Controller/Index.php(54): Kohana_ORM->__get('user')
#3 /home/www/kohana/system/classes/Kohana/Controller.php(84): Controller_Index->action_results()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/www/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#6 /home/www/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/www/kohana/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /home/www/kohana/index.php(118): Kohana_Request->execute()
#9 {main} in /home/www/kohana/modules/orm/classes/Kohana/ORM.php:629
2013-05-15 05:44:13 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: Model_Orderuser::$_object_name ~ MODPATH/orm/classes/Kohana/ORM.php [ 629 ] in /home/www/kohana/modules/orm/classes/Kohana/ORM.php:629
2013-05-15 05:44:13 --- DEBUG: #0 /home/www/kohana/modules/orm/classes/Kohana/ORM.php(629): Kohana_Core::error_handler(8, 'Undefined prope...', '/home/www/kohan...', 629, Array)
#1 /home/www/kohana/modules/orm/classes/Kohana/ORM.php(600): Kohana_ORM->get('user')
#2 /home/www/kohana/application/classes/Controller/Index.php(54): Kohana_ORM->__get('user')
#3 /home/www/kohana/system/classes/Kohana/Controller.php(84): Controller_Index->action_results()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/www/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#6 /home/www/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/www/kohana/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /home/www/kohana/index.php(118): Kohana_Request->execute()
#9 {main} in /home/www/kohana/modules/orm/classes/Kohana/ORM.php:629
2013-05-15 05:44:40 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: Model_Orderuser::$_object_name ~ MODPATH/orm/classes/Kohana/ORM.php [ 629 ] in /home/www/kohana/modules/orm/classes/Kohana/ORM.php:629
2013-05-15 05:44:40 --- DEBUG: #0 /home/www/kohana/modules/orm/classes/Kohana/ORM.php(629): Kohana_Core::error_handler(8, 'Undefined prope...', '/home/www/kohan...', 629, Array)
#1 /home/www/kohana/modules/orm/classes/Kohana/ORM.php(600): Kohana_ORM->get('user')
#2 /home/www/kohana/application/classes/Controller/Index.php(54): Kohana_ORM->__get('user')
#3 /home/www/kohana/system/classes/Kohana/Controller.php(84): Controller_Index->action_results()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/www/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#6 /home/www/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/www/kohana/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /home/www/kohana/index.php(118): Kohana_Request->execute()
#9 {main} in /home/www/kohana/modules/orm/classes/Kohana/ORM.php:629
2013-05-15 06:39:53 --- EMERGENCY: Kohana_Exception [ 0 ]: The user property does not exist in the Model_Order class ~ MODPATH/orm/classes/Kohana/ORM.php [ 684 ] in /home/www/kohana/modules/orm/classes/Kohana/ORM.php:600
2013-05-15 06:39:53 --- DEBUG: #0 /home/www/kohana/modules/orm/classes/Kohana/ORM.php(600): Kohana_ORM->get('user')
#1 /home/www/kohana/application/classes/Controller/Index.php(54): Kohana_ORM->__get('user')
#2 /home/www/kohana/system/classes/Kohana/Controller.php(84): Controller_Index->action_results()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/www/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#5 /home/www/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/www/kohana/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /home/www/kohana/index.php(118): Kohana_Request->execute()
#8 {main} in /home/www/kohana/modules/orm/classes/Kohana/ORM.php:600
2013-05-15 06:40:24 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: Model_Orderuser::$_object_name ~ MODPATH/orm/classes/Kohana/ORM.php [ 647 ] in /home/www/kohana/modules/orm/classes/Kohana/ORM.php:647
2013-05-15 06:40:24 --- DEBUG: #0 /home/www/kohana/modules/orm/classes/Kohana/ORM.php(647): Kohana_Core::error_handler(8, 'Undefined prope...', '/home/www/kohan...', 647, Array)
#1 /home/www/kohana/modules/orm/classes/Kohana/ORM.php(600): Kohana_ORM->get('user')
#2 /home/www/kohana/application/classes/Controller/Index.php(54): Kohana_ORM->__get('user')
#3 /home/www/kohana/system/classes/Kohana/Controller.php(84): Controller_Index->action_results()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/www/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#6 /home/www/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/www/kohana/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /home/www/kohana/index.php(118): Kohana_Request->execute()
#9 {main} in /home/www/kohana/modules/orm/classes/Kohana/ORM.php:647
2013-05-15 06:41:31 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_Order_User' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in :
2013-05-15 06:41:31 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-15 06:46:38 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_Order_User' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in :
2013-05-15 06:46:38 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-15 06:46:56 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_Order_User' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in :
2013-05-15 06:46:56 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-15 06:47:03 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_Order_User' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in :
2013-05-15 06:47:03 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-15 06:47:07 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_Order_User' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in :
2013-05-15 06:47:07 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-15 06:47:07 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_Order_User' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in :
2013-05-15 06:47:07 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-15 06:47:07 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_Order_User' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in :
2013-05-15 06:47:07 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-15 06:47:38 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_Order_User' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in :
2013-05-15 06:47:38 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-15 06:47:51 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_Order_User' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in :
2013-05-15 06:47:51 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-15 06:48:08 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_Order_User' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in :
2013-05-15 06:48:08 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-15 06:48:16 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_Order_User' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in :
2013-05-15 06:48:16 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-15 06:48:33 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_Order_User' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in :
2013-05-15 06:48:33 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-15 06:48:57 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_Order_User' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in :
2013-05-15 06:48:57 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-15 06:48:58 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_Order_User' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in :
2013-05-15 06:48:58 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-15 06:48:58 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_Order_User' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in :
2013-05-15 06:48:58 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-15 06:48:58 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_Order_User' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in :
2013-05-15 06:48:58 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-15 06:49:10 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_Order_User' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in :
2013-05-15 06:49:10 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-15 06:49:28 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_Order_User' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in :
2013-05-15 06:49:28 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-15 06:49:46 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_Order_User' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in :
2013-05-15 06:49:46 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-15 06:49:52 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_Order_User' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in :
2013-05-15 06:49:52 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-15 06:49:52 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_Order_User' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in :
2013-05-15 06:49:52 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-15 06:50:22 --- EMERGENCY: Kohana_Exception [ 0 ]: The site property does not exist in the Model_Order class ~ MODPATH/orm/classes/Kohana/ORM.php [ 684 ] in /home/www/kohana/modules/orm/classes/Kohana/ORM.php:600
2013-05-15 06:50:22 --- DEBUG: #0 /home/www/kohana/modules/orm/classes/Kohana/ORM.php(600): Kohana_ORM->get('site')
#1 /home/www/kohana/application/classes/Controller/Index.php(49): Kohana_ORM->__get('site')
#2 /home/www/kohana/system/classes/Kohana/Controller.php(84): Controller_Index->action_results()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/www/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#5 /home/www/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/www/kohana/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /home/www/kohana/index.php(118): Kohana_Request->execute()
#8 {main} in /home/www/kohana/modules/orm/classes/Kohana/ORM.php:600
2013-05-15 06:50:28 --- EMERGENCY: Kohana_Exception [ 0 ]: The site property does not exist in the Model_Order class ~ MODPATH/orm/classes/Kohana/ORM.php [ 684 ] in /home/www/kohana/modules/orm/classes/Kohana/ORM.php:600
2013-05-15 06:50:28 --- DEBUG: #0 /home/www/kohana/modules/orm/classes/Kohana/ORM.php(600): Kohana_ORM->get('site')
#1 /home/www/kohana/application/classes/Controller/Index.php(49): Kohana_ORM->__get('site')
#2 /home/www/kohana/system/classes/Kohana/Controller.php(84): Controller_Index->action_results()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/www/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#5 /home/www/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/www/kohana/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /home/www/kohana/index.php(118): Kohana_Request->execute()
#8 {main} in /home/www/kohana/modules/orm/classes/Kohana/ORM.php:600
2013-05-15 06:51:49 --- EMERGENCY: Kohana_Exception [ 0 ]: The name property does not exist in the Model_Site class ~ MODPATH/orm/classes/Kohana/ORM.php [ 684 ] in /home/www/kohana/modules/orm/classes/Kohana/ORM.php:600
2013-05-15 06:51:49 --- DEBUG: #0 /home/www/kohana/modules/orm/classes/Kohana/ORM.php(600): Kohana_ORM->get('name')
#1 /home/www/kohana/application/classes/Controller/Index.php(49): Kohana_ORM->__get('name')
#2 /home/www/kohana/system/classes/Kohana/Controller.php(84): Controller_Index->action_results()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/www/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#5 /home/www/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/www/kohana/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /home/www/kohana/index.php(118): Kohana_Request->execute()
#8 {main} in /home/www/kohana/modules/orm/classes/Kohana/ORM.php:600
2013-05-15 06:51:50 --- EMERGENCY: Kohana_Exception [ 0 ]: The name property does not exist in the Model_Site class ~ MODPATH/orm/classes/Kohana/ORM.php [ 684 ] in /home/www/kohana/modules/orm/classes/Kohana/ORM.php:600
2013-05-15 06:51:50 --- DEBUG: #0 /home/www/kohana/modules/orm/classes/Kohana/ORM.php(600): Kohana_ORM->get('name')
#1 /home/www/kohana/application/classes/Controller/Index.php(49): Kohana_ORM->__get('name')
#2 /home/www/kohana/system/classes/Kohana/Controller.php(84): Controller_Index->action_results()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/www/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#5 /home/www/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/www/kohana/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /home/www/kohana/index.php(118): Kohana_Request->execute()
#8 {main} in /home/www/kohana/modules/orm/classes/Kohana/ORM.php:600
2013-05-15 06:54:49 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_Order_User' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in :
2013-05-15 06:54:49 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-15 06:54:56 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_Order_User' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in :
2013-05-15 06:54:56 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-15 06:56:01 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_Order_User' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in :
2013-05-15 06:56:01 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-15 06:56:02 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_Order_User' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in :
2013-05-15 06:56:02 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-15 07:07:32 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_Order_User' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in :
2013-05-15 07:07:32 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-15 07:07:44 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_Order_User' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in :
2013-05-15 07:07:44 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-15 07:07:44 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_Order_User' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in :
2013-05-15 07:07:44 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-15 07:38:01 --- EMERGENCY: Kohana_Exception [ 0 ]: The user property does not exist in the Model_Order class ~ MODPATH/orm/classes/Kohana/ORM.php [ 684 ] in /home/www/kohana/modules/orm/classes/Kohana/ORM.php:600
2013-05-15 07:38:01 --- DEBUG: #0 /home/www/kohana/modules/orm/classes/Kohana/ORM.php(600): Kohana_ORM->get('user')
#1 /home/www/kohana/application/classes/Controller/Index.php(49): Kohana_ORM->__get('user')
#2 /home/www/kohana/system/classes/Kohana/Controller.php(84): Controller_Index->action_results()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/www/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#5 /home/www/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/www/kohana/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /home/www/kohana/index.php(118): Kohana_Request->execute()
#8 {main} in /home/www/kohana/modules/orm/classes/Kohana/ORM.php:600
2013-05-15 07:38:45 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Model_Order::to_array() ~ APPPATH/classes/Controller/Index.php [ 50 ] in :
2013-05-15 07:38:45 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-15 07:51:34 --- EMERGENCY: Kohana_Exception [ 0 ]: The site property does not exist in the Model_Order class ~ MODPATH/orm/classes/Kohana/ORM.php [ 684 ] in /home/www/kohana/modules/orm/classes/Kohana/ORM.php:600
2013-05-15 07:51:34 --- DEBUG: #0 /home/www/kohana/modules/orm/classes/Kohana/ORM.php(600): Kohana_ORM->get('site')
#1 /home/www/kohana/application/classes/Controller/Index.php(49): Kohana_ORM->__get('site')
#2 /home/www/kohana/system/classes/Kohana/Controller.php(84): Controller_Index->action_results()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/www/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#5 /home/www/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/www/kohana/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /home/www/kohana/index.php(118): Kohana_Request->execute()
#8 {main} in /home/www/kohana/modules/orm/classes/Kohana/ORM.php:600
2013-05-15 07:53:11 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_Order_User' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in :
2013-05-15 07:53:11 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-15 07:53:40 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_Order_User' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in :
2013-05-15 07:53:40 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-15 07:55:52 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_Order_User' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in :
2013-05-15 07:55:52 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-15 07:55:55 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_Order_User' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in :
2013-05-15 07:55:55 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-15 07:55:55 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_Order_User' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in :
2013-05-15 07:55:55 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-15 07:56:29 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_Order_User' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in :
2013-05-15 07:56:29 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-15 07:56:30 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_Order_User' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in :
2013-05-15 07:56:30 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-15 07:56:50 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_Order_User' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in :
2013-05-15 07:56:50 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-15 07:57:27 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_Order_User' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in :
2013-05-15 07:57:27 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-15 07:57:39 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_Order_User1' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in :
2013-05-15 07:57:39 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-15 07:57:41 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_Order_User1' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in :
2013-05-15 07:57:41 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-15 07:58:21 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_Order_User' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in :
2013-05-15 07:58:21 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-15 07:58:50 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_Order_User' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in :
2013-05-15 07:58:50 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-15 08:00:23 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_Order_user' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in :
2013-05-15 08:00:23 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-15 08:00:49 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_Order_user' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in :
2013-05-15 08:00:49 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-15 08:00:50 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_Order_user' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in :
2013-05-15 08:00:50 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-15 08:00:50 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_Order_user' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in :
2013-05-15 08:00:50 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-15 08:00:51 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_Order_user' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in :
2013-05-15 08:00:51 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-15 08:00:58 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_Order_user' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in :
2013-05-15 08:00:58 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-15 08:01:33 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_Order_user' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in :
2013-05-15 08:01:33 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-15 08:01:47 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_Order_us123123er' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in :
2013-05-15 08:01:47 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-15 08:01:53 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_Order_user' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in :
2013-05-15 08:01:53 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-15 08:02:34 --- EMERGENCY: Database_Exception [ 1146 ]: Table 'statistics_db.order_users2' doesn't exist [ SHOW FULL COLUMNS FROM `order_users2` ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /home/www/kohana/modules/database/classes/Kohana/Database/MySQL.php:358
2013-05-15 08:02:34 --- DEBUG: #0 /home/www/kohana/modules/database/classes/Kohana/Database/MySQL.php(358): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 /home/www/kohana/modules/orm/classes/Kohana/ORM.php(1665): Kohana_Database_MySQL->list_columns('order_users2')
#2 /home/www/kohana/modules/orm/classes/Kohana/ORM.php(441): Kohana_ORM->list_columns()
#3 /home/www/kohana/modules/orm/classes/Kohana/ORM.php(386): Kohana_ORM->reload_columns()
#4 /home/www/kohana/modules/orm/classes/Kohana/ORM.php(254): Kohana_ORM->_initialize()
#5 /home/www/kohana/modules/orm/classes/Kohana/ORM.php(46): Kohana_ORM->__construct(NULL)
#6 /home/www/kohana/application/classes/Controller/Index.php(39): Kohana_ORM::factory('Orderuser')
#7 /home/www/kohana/system/classes/Kohana/Controller.php(84): Controller_Index->action_results()
#8 [internal function]: Kohana_Controller->execute()
#9 /home/www/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#10 /home/www/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 /home/www/kohana/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#12 /home/www/kohana/index.php(118): Kohana_Request->execute()
#13 {main} in /home/www/kohana/modules/database/classes/Kohana/Database/MySQL.php:358
2013-05-15 08:07:20 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'orderuser.user_id' in 'where clause' [ SELECT `orderuser`.`id` AS `id`, `orderuser`.`name` AS `name`, `orderuser`.`site_id` AS `site_id`, `orderuser`.`email` AS `email`, `orderuser`.`phone` AS `phone`, `orderuser`.`Ya_userId` AS `Ya_userId` FROM `order_users` AS `orderuser` WHERE `orderuser`.`user_id` = '38' LIMIT 1 ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /home/www/kohana/modules/database/classes/Kohana/Database/Query.php:251
2013-05-15 08:07:20 --- DEBUG: #0 /home/www/kohana/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `orderus...', false, Array)
#1 /home/www/kohana/modules/orm/classes/Kohana/ORM.php(1069): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /home/www/kohana/modules/orm/classes/Kohana/ORM.php(976): Kohana_ORM->_load_result(false)
#3 /home/www/kohana/modules/orm/classes/Kohana/ORM.php(650): Kohana_ORM->find()
#4 /home/www/kohana/modules/orm/classes/Kohana/ORM.php(600): Kohana_ORM->get('user')
#5 /home/www/kohana/application/classes/Controller/Index.php(43): Kohana_ORM->__get('user')
#6 /home/www/kohana/system/classes/Kohana/Controller.php(84): Controller_Index->action_results()
#7 [internal function]: Kohana_Controller->execute()
#8 /home/www/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#9 /home/www/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /home/www/kohana/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#11 /home/www/kohana/index.php(118): Kohana_Request->execute()
#12 {main} in /home/www/kohana/modules/database/classes/Kohana/Database/Query.php:251
2013-05-15 08:07:58 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'orderuser.order_id' in 'where clause' [ SELECT `orderuser`.`id` AS `id`, `orderuser`.`name` AS `name`, `orderuser`.`site_id` AS `site_id`, `orderuser`.`email` AS `email`, `orderuser`.`phone` AS `phone`, `orderuser`.`Ya_userId` AS `Ya_userId` FROM `order_users` AS `orderuser` WHERE `orderuser`.`order_id` = '10195' LIMIT 1 ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /home/www/kohana/modules/database/classes/Kohana/Database/Query.php:251
2013-05-15 08:07:58 --- DEBUG: #0 /home/www/kohana/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `orderus...', false, Array)
#1 /home/www/kohana/modules/orm/classes/Kohana/ORM.php(1069): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /home/www/kohana/modules/orm/classes/Kohana/ORM.php(976): Kohana_ORM->_load_result(false)
#3 /home/www/kohana/modules/orm/classes/Kohana/ORM.php(650): Kohana_ORM->find()
#4 /home/www/kohana/modules/orm/classes/Kohana/ORM.php(600): Kohana_ORM->get('user')
#5 /home/www/kohana/application/classes/Controller/Index.php(43): Kohana_ORM->__get('user')
#6 /home/www/kohana/system/classes/Kohana/Controller.php(84): Controller_Index->action_results()
#7 [internal function]: Kohana_Controller->execute()
#8 /home/www/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#9 /home/www/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /home/www/kohana/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#11 /home/www/kohana/index.php(118): Kohana_Request->execute()
#12 {main} in /home/www/kohana/modules/database/classes/Kohana/Database/Query.php:251
2013-05-15 08:11:26 --- EMERGENCY: Kohana_Exception [ 0 ]: The site property does not exist in the Model_Orderuser class ~ MODPATH/orm/classes/Kohana/ORM.php [ 684 ] in /home/www/kohana/modules/orm/classes/Kohana/ORM.php:600
2013-05-15 08:11:26 --- DEBUG: #0 /home/www/kohana/modules/orm/classes/Kohana/ORM.php(600): Kohana_ORM->get('site')
#1 /home/www/kohana/application/classes/Controller/Index.php(43): Kohana_ORM->__get('site')
#2 /home/www/kohana/system/classes/Kohana/Controller.php(84): Controller_Index->action_results()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/www/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#5 /home/www/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/www/kohana/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /home/www/kohana/index.php(118): Kohana_Request->execute()
#8 {main} in /home/www/kohana/modules/orm/classes/Kohana/ORM.php:600
2013-05-15 08:11:32 --- EMERGENCY: Kohana_Exception [ 0 ]: The site property does not exist in the Model_Orderuser class ~ MODPATH/orm/classes/Kohana/ORM.php [ 684 ] in /home/www/kohana/modules/orm/classes/Kohana/ORM.php:600
2013-05-15 08:11:32 --- DEBUG: #0 /home/www/kohana/modules/orm/classes/Kohana/ORM.php(600): Kohana_ORM->get('site')
#1 /home/www/kohana/application/classes/Controller/Index.php(43): Kohana_ORM->__get('site')
#2 /home/www/kohana/system/classes/Kohana/Controller.php(84): Controller_Index->action_results()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/www/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#5 /home/www/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/www/kohana/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /home/www/kohana/index.php(118): Kohana_Request->execute()
#8 {main} in /home/www/kohana/modules/orm/classes/Kohana/ORM.php:600
2013-05-15 08:11:33 --- EMERGENCY: Kohana_Exception [ 0 ]: The site property does not exist in the Model_Orderuser class ~ MODPATH/orm/classes/Kohana/ORM.php [ 684 ] in /home/www/kohana/modules/orm/classes/Kohana/ORM.php:600
2013-05-15 08:11:33 --- DEBUG: #0 /home/www/kohana/modules/orm/classes/Kohana/ORM.php(600): Kohana_ORM->get('site')
#1 /home/www/kohana/application/classes/Controller/Index.php(43): Kohana_ORM->__get('site')
#2 /home/www/kohana/system/classes/Kohana/Controller.php(84): Controller_Index->action_results()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/www/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#5 /home/www/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/www/kohana/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /home/www/kohana/index.php(118): Kohana_Request->execute()
#8 {main} in /home/www/kohana/modules/orm/classes/Kohana/ORM.php:600
2013-05-15 08:14:00 --- EMERGENCY: Kohana_Exception [ 0 ]: The site property does not exist in the Model_Order class ~ MODPATH/orm/classes/Kohana/ORM.php [ 757 ] in /home/www/kohana/modules/orm/classes/Kohana/ORM.php:699
2013-05-15 08:14:00 --- DEBUG: #0 /home/www/kohana/modules/orm/classes/Kohana/ORM.php(699): Kohana_ORM->set('site', Object(Model_Site))
#1 /home/www/kohana/application/classes/Controller/Index.php(44): Kohana_ORM->__set('site', Object(Model_Site))
#2 /home/www/kohana/system/classes/Kohana/Controller.php(84): Controller_Index->action_results()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/www/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#5 /home/www/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/www/kohana/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /home/www/kohana/index.php(118): Kohana_Request->execute()
#8 {main} in /home/www/kohana/modules/orm/classes/Kohana/ORM.php:699
2013-05-15 08:14:33 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Model_Site::to_array() ~ APPPATH/classes/Controller/Index.php [ 42 ] in :
2013-05-15 08:14:33 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-15 08:14:33 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Model_Site::to_array() ~ APPPATH/classes/Controller/Index.php [ 42 ] in :
2013-05-15 08:14:33 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-15 08:14:48 --- EMERGENCY: Kohana_Exception [ 0 ]: Method find_all() cannot be called on loaded objects ~ MODPATH/orm/classes/Kohana/ORM.php [ 988 ] in /home/www/kohana/application/classes/Controller/Index.php:42
2013-05-15 08:14:48 --- DEBUG: #0 /home/www/kohana/application/classes/Controller/Index.php(42): Kohana_ORM->find_all()
#1 /home/www/kohana/system/classes/Kohana/Controller.php(84): Controller_Index->action_results()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/www/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#4 /home/www/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/www/kohana/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /home/www/kohana/index.php(118): Kohana_Request->execute()
#7 {main} in /home/www/kohana/application/classes/Controller/Index.php:42
2013-05-15 08:14:49 --- EMERGENCY: Kohana_Exception [ 0 ]: Method find_all() cannot be called on loaded objects ~ MODPATH/orm/classes/Kohana/ORM.php [ 988 ] in /home/www/kohana/application/classes/Controller/Index.php:42
2013-05-15 08:14:49 --- DEBUG: #0 /home/www/kohana/application/classes/Controller/Index.php(42): Kohana_ORM->find_all()
#1 /home/www/kohana/system/classes/Kohana/Controller.php(84): Controller_Index->action_results()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/www/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#4 /home/www/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/www/kohana/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /home/www/kohana/index.php(118): Kohana_Request->execute()
#7 {main} in /home/www/kohana/application/classes/Controller/Index.php:42
2013-05-15 08:15:10 --- EMERGENCY: Kohana_Exception [ 0 ]: The site property does not exist in the Model_Order class ~ MODPATH/orm/classes/Kohana/ORM.php [ 757 ] in /home/www/kohana/modules/orm/classes/Kohana/ORM.php:699
2013-05-15 08:15:10 --- DEBUG: #0 /home/www/kohana/modules/orm/classes/Kohana/ORM.php(699): Kohana_ORM->set('site', Array)
#1 /home/www/kohana/application/classes/Controller/Index.php(44): Kohana_ORM->__set('site', Array)
#2 /home/www/kohana/system/classes/Kohana/Controller.php(84): Controller_Index->action_results()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/www/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#5 /home/www/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/www/kohana/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /home/www/kohana/index.php(118): Kohana_Request->execute()
#8 {main} in /home/www/kohana/modules/orm/classes/Kohana/ORM.php:699
2013-05-15 08:15:10 --- EMERGENCY: Kohana_Exception [ 0 ]: The site property does not exist in the Model_Order class ~ MODPATH/orm/classes/Kohana/ORM.php [ 757 ] in /home/www/kohana/modules/orm/classes/Kohana/ORM.php:699
2013-05-15 08:15:10 --- DEBUG: #0 /home/www/kohana/modules/orm/classes/Kohana/ORM.php(699): Kohana_ORM->set('site', Array)
#1 /home/www/kohana/application/classes/Controller/Index.php(44): Kohana_ORM->__set('site', Array)
#2 /home/www/kohana/system/classes/Kohana/Controller.php(84): Controller_Index->action_results()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/www/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#5 /home/www/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/www/kohana/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /home/www/kohana/index.php(118): Kohana_Request->execute()
#8 {main} in /home/www/kohana/modules/orm/classes/Kohana/ORM.php:699
2013-05-15 08:15:27 --- EMERGENCY: Kohana_Exception [ 0 ]: The site property does not exist in the Model_Order class ~ MODPATH/orm/classes/Kohana/ORM.php [ 757 ] in /home/www/kohana/modules/orm/classes/Kohana/ORM.php:699
2013-05-15 08:15:27 --- DEBUG: #0 /home/www/kohana/modules/orm/classes/Kohana/ORM.php(699): Kohana_ORM->set('site', Array)
#1 /home/www/kohana/application/classes/Controller/Index.php(44): Kohana_ORM->__set('site', Array)
#2 /home/www/kohana/system/classes/Kohana/Controller.php(84): Controller_Index->action_results()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/www/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#5 /home/www/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/www/kohana/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /home/www/kohana/index.php(118): Kohana_Request->execute()
#8 {main} in /home/www/kohana/modules/orm/classes/Kohana/ORM.php:699
2013-05-15 08:15:27 --- EMERGENCY: Kohana_Exception [ 0 ]: The site property does not exist in the Model_Order class ~ MODPATH/orm/classes/Kohana/ORM.php [ 757 ] in /home/www/kohana/modules/orm/classes/Kohana/ORM.php:699
2013-05-15 08:15:27 --- DEBUG: #0 /home/www/kohana/modules/orm/classes/Kohana/ORM.php(699): Kohana_ORM->set('site', Array)
#1 /home/www/kohana/application/classes/Controller/Index.php(44): Kohana_ORM->__set('site', Array)
#2 /home/www/kohana/system/classes/Kohana/Controller.php(84): Controller_Index->action_results()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/www/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#5 /home/www/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/www/kohana/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /home/www/kohana/index.php(118): Kohana_Request->execute()
#8 {main} in /home/www/kohana/modules/orm/classes/Kohana/ORM.php:699
2013-05-15 08:16:56 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH/classes/Controller/Index.php [ 46 ] in :
2013-05-15 08:16:56 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-15 08:20:25 --- EMERGENCY: Kohana_Exception [ 0 ]: The site property does not exist in the Model_Order class ~ MODPATH/orm/classes/Kohana/ORM.php [ 757 ] in /home/www/kohana/modules/orm/classes/Kohana/ORM.php:699
2013-05-15 08:20:25 --- DEBUG: #0 /home/www/kohana/modules/orm/classes/Kohana/ORM.php(699): Kohana_ORM->set('site', '234234')
#1 /home/www/kohana/application/classes/Controller/Index.php(44): Kohana_ORM->__set('site', '234234')
#2 /home/www/kohana/system/classes/Kohana/Controller.php(84): Controller_Index->action_results()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/www/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#5 /home/www/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/www/kohana/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /home/www/kohana/index.php(118): Kohana_Request->execute()
#8 {main} in /home/www/kohana/modules/orm/classes/Kohana/ORM.php:699
2013-05-15 08:20:58 --- EMERGENCY: ErrorException [ 1 ]: Cannot use object of type Model_Order as array ~ APPPATH/classes/Controller/Index.php [ 45 ] in :
2013-05-15 08:20:58 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-15 08:20:59 --- EMERGENCY: ErrorException [ 1 ]: Cannot use object of type Model_Order as array ~ APPPATH/classes/Controller/Index.php [ 45 ] in :
2013-05-15 08:20:59 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-15 08:23:49 --- EMERGENCY: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/Controller/Index.php [ 44 ] in /home/www/kohana/application/classes/Controller/Index.php:44
2013-05-15 08:23:49 --- DEBUG: #0 /home/www/kohana/application/classes/Controller/Index.php(44): Kohana_Core::error_handler(8, 'Trying to get p...', '/home/www/kohan...', 44, Array)
#1 /home/www/kohana/system/classes/Kohana/Controller.php(84): Controller_Index->action_results()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/www/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#4 /home/www/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/www/kohana/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /home/www/kohana/index.php(118): Kohana_Request->execute()
#7 {main} in /home/www/kohana/application/classes/Controller/Index.php:44