<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-05-14 06:57:22 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_user' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in :
2013-05-14 06:57:22 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-14 07:03:35 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_user' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in :
2013-05-14 07:03:35 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-14 07:03:35 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_user' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in :
2013-05-14 07:03:35 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-14 07:03:42 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_user' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in :
2013-05-14 07:03:42 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-14 07:03:49 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_user' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in :
2013-05-14 07:03:49 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-14 07:03:50 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_user' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in :
2013-05-14 07:03:50 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-14 07:03:52 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_user' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in :
2013-05-14 07:03:52 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-14 07:06:38 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_role' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in :
2013-05-14 07:06:38 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-14 07:31:57 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: password ~ SYSPATH/classes/Kohana/Validation.php [ 102 ] in /home/www/kohana/system/classes/Kohana/Validation.php:102
2013-05-14 07:31:57 --- DEBUG: #0 /home/www/kohana/system/classes/Kohana/Validation.php(102): Kohana_Core::error_handler(8, 'Undefined index...', '/home/www/kohan...', 102, Array)
#1 /home/www/kohana/application/classes/Controller/Auth.php(23): Kohana_Validation->offsetGet('password')
#2 /home/www/kohana/system/classes/Kohana/Controller.php(84): Controller_Auth->action_login()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/www/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#5 /home/www/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/www/kohana/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /home/www/kohana/index.php(118): Kohana_Request->execute()
#8 {main} in /home/www/kohana/system/classes/Kohana/Validation.php:102
2013-05-14 08:01:24 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: form ~ APPPATH/views/templates/header.php [ 17 ] in /home/www/kohana/application/views/templates/header.php:17
2013-05-14 08:01:24 --- DEBUG: #0 /home/www/kohana/application/views/templates/header.php(17): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/www/kohan...', 17, Array)
#1 /home/www/kohana/system/classes/Kohana/View.php(61): include('/home/www/kohan...')
#2 /home/www/kohana/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/www/kohan...', Array)
#3 /home/www/kohana/application/classes/Controller/Index.php(14): Kohana_View->render()
#4 /home/www/kohana/system/classes/Kohana/Controller.php(84): Controller_Index->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 /home/www/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#7 /home/www/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/www/kohana/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 /home/www/kohana/index.php(118): Kohana_Request->execute()
#10 {main} in /home/www/kohana/application/views/templates/header.php:17
2013-05-14 08:11:09 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_sites' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in :
2013-05-14 08:11:09 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-14 08:11:14 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '?' ~ APPPATH/classes/Model/Sites.php [ 1 ] in :
2013-05-14 08:11:14 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-14 08:15:30 --- EMERGENCY: Kohana_Exception [ 0 ]: The name property does not exist in the Model_Sites class ~ MODPATH/orm/classes/Kohana/ORM.php [ 684 ] in /home/www/kohana/modules/orm/classes/Kohana/ORM.php:600
2013-05-14 08:15:30 --- DEBUG: #0 /home/www/kohana/modules/orm/classes/Kohana/ORM.php(600): Kohana_ORM->get('name')
#1 /home/www/kohana/application/views/templates/reqform.php(40): Kohana_ORM->__get('name')
#2 /home/www/kohana/system/classes/Kohana/View.php(61): include('/home/www/kohan...')
#3 /home/www/kohana/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/www/kohan...', Array)
#4 /home/www/kohana/application/classes/Controller/Index.php(23): Kohana_View->render()
#5 /home/www/kohana/system/classes/Kohana/Controller.php(84): Controller_Index->action_index()
#6 [internal function]: Kohana_Controller->execute()
#7 /home/www/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#8 /home/www/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /home/www/kohana/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 /home/www/kohana/index.php(118): Kohana_Request->execute()
#11 {main} in /home/www/kohana/modules/orm/classes/Kohana/ORM.php:600
2013-05-14 08:17:28 --- EMERGENCY: Kohana_Exception [ 0 ]: The site_id property does not exist in the Model_Sites class ~ MODPATH/orm/classes/Kohana/ORM.php [ 684 ] in /home/www/kohana/modules/orm/classes/Kohana/ORM.php:600
2013-05-14 08:17:28 --- DEBUG: #0 /home/www/kohana/modules/orm/classes/Kohana/ORM.php(600): Kohana_ORM->get('site_id')
#1 /home/www/kohana/application/views/templates/reqform.php(5): Kohana_ORM->__get('site_id')
#2 /home/www/kohana/system/classes/Kohana/View.php(61): include('/home/www/kohan...')
#3 /home/www/kohana/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/www/kohan...', Array)
#4 /home/www/kohana/application/classes/Controller/Index.php(23): Kohana_View->render()
#5 /home/www/kohana/system/classes/Kohana/Controller.php(84): Controller_Index->action_index()
#6 [internal function]: Kohana_Controller->execute()
#7 /home/www/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#8 /home/www/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /home/www/kohana/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 /home/www/kohana/index.php(118): Kohana_Request->execute()
#11 {main} in /home/www/kohana/modules/orm/classes/Kohana/ORM.php:600
2013-05-14 09:08:29 --- EMERGENCY: Kohana_Exception [ 0 ]: Method find() cannot be called on loaded objects ~ MODPATH/orm/classes/Kohana/ORM.php [ 963 ] in /home/www/kohana/application/classes/Controller/Update.php:29
2013-05-14 09:08:29 --- DEBUG: #0 /home/www/kohana/application/classes/Controller/Update.php(29): Kohana_ORM->find(30)
#1 /home/www/kohana/system/classes/Kohana/Controller.php(84): Controller_Update->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/www/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Update))
#4 /home/www/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/www/kohana/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /home/www/kohana/index.php(118): Kohana_Request->execute()
#7 {main} in /home/www/kohana/application/classes/Controller/Update.php:29
2013-05-14 09:08:37 --- EMERGENCY: Kohana_Exception [ 0 ]: Method find() cannot be called on loaded objects ~ MODPATH/orm/classes/Kohana/ORM.php [ 963 ] in /home/www/kohana/application/classes/Controller/Update.php:29
2013-05-14 09:08:37 --- DEBUG: #0 /home/www/kohana/application/classes/Controller/Update.php(29): Kohana_ORM->find(31)
#1 /home/www/kohana/system/classes/Kohana/Controller.php(84): Controller_Update->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/www/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Update))
#4 /home/www/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/www/kohana/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /home/www/kohana/index.php(118): Kohana_Request->execute()
#7 {main} in /home/www/kohana/application/classes/Controller/Update.php:29
2013-05-14 09:09:00 --- EMERGENCY: Kohana_Exception [ 0 ]: Method find() cannot be called on loaded objects ~ MODPATH/orm/classes/Kohana/ORM.php [ 963 ] in /home/www/kohana/application/classes/Controller/Update.php:29
2013-05-14 09:09:00 --- DEBUG: #0 /home/www/kohana/application/classes/Controller/Update.php(29): Kohana_ORM->find(32)
#1 /home/www/kohana/system/classes/Kohana/Controller.php(84): Controller_Update->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/www/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Update))
#4 /home/www/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/www/kohana/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /home/www/kohana/index.php(118): Kohana_Request->execute()
#7 {main} in /home/www/kohana/application/classes/Controller/Update.php:29
2013-05-14 09:10:20 --- EMERGENCY: Kohana_Exception [ 0 ]: Method find() cannot be called on loaded objects ~ MODPATH/orm/classes/Kohana/ORM.php [ 963 ] in /home/www/kohana/application/classes/Controller/Update.php:29
2013-05-14 09:10:20 --- DEBUG: #0 /home/www/kohana/application/classes/Controller/Update.php(29): Kohana_ORM->find()
#1 /home/www/kohana/system/classes/Kohana/Controller.php(84): Controller_Update->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/www/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Update))
#4 /home/www/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/www/kohana/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /home/www/kohana/index.php(118): Kohana_Request->execute()
#7 {main} in /home/www/kohana/application/classes/Controller/Update.php:29
2013-05-14 09:10:23 --- EMERGENCY: Kohana_Exception [ 0 ]: Method find() cannot be called on loaded objects ~ MODPATH/orm/classes/Kohana/ORM.php [ 963 ] in /home/www/kohana/application/classes/Controller/Update.php:29
2013-05-14 09:10:23 --- DEBUG: #0 /home/www/kohana/application/classes/Controller/Update.php(29): Kohana_ORM->find()
#1 /home/www/kohana/system/classes/Kohana/Controller.php(84): Controller_Update->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/www/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Update))
#4 /home/www/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/www/kohana/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /home/www/kohana/index.php(118): Kohana_Request->execute()
#7 {main} in /home/www/kohana/application/classes/Controller/Update.php:29
2013-05-14 09:10:26 --- EMERGENCY: Kohana_Exception [ 0 ]: Method find() cannot be called on loaded objects ~ MODPATH/orm/classes/Kohana/ORM.php [ 963 ] in /home/www/kohana/application/classes/Controller/Update.php:29
2013-05-14 09:10:26 --- DEBUG: #0 /home/www/kohana/application/classes/Controller/Update.php(29): Kohana_ORM->find()
#1 /home/www/kohana/system/classes/Kohana/Controller.php(84): Controller_Update->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/www/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Update))
#4 /home/www/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/www/kohana/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /home/www/kohana/index.php(118): Kohana_Request->execute()
#7 {main} in /home/www/kohana/application/classes/Controller/Update.php:29
2013-05-14 09:13:59 --- EMERGENCY: Kohana_Exception [ 0 ]: Method find() cannot be called on loaded objects ~ MODPATH/orm/classes/Kohana/ORM.php [ 963 ] in /home/www/kohana/application/classes/Controller/Update.php:32
2013-05-14 09:13:59 --- DEBUG: #0 /home/www/kohana/application/classes/Controller/Update.php(32): Kohana_ORM->find()
#1 /home/www/kohana/system/classes/Kohana/Controller.php(84): Controller_Update->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/www/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Update))
#4 /home/www/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/www/kohana/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /home/www/kohana/index.php(118): Kohana_Request->execute()
#7 {main} in /home/www/kohana/application/classes/Controller/Update.php:32
2013-05-14 09:14:07 --- EMERGENCY: Kohana_Exception [ 0 ]: Method find() cannot be called on loaded objects ~ MODPATH/orm/classes/Kohana/ORM.php [ 963 ] in /home/www/kohana/application/classes/Controller/Update.php:32
2013-05-14 09:14:07 --- DEBUG: #0 /home/www/kohana/application/classes/Controller/Update.php(32): Kohana_ORM->find()
#1 /home/www/kohana/system/classes/Kohana/Controller.php(84): Controller_Update->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/www/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Update))
#4 /home/www/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/www/kohana/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /home/www/kohana/index.php(118): Kohana_Request->execute()
#7 {main} in /home/www/kohana/application/classes/Controller/Update.php:32
2013-05-14 09:41:46 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_orders' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in :
2013-05-14 09:41:46 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-14 09:42:32 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected $end ~ APPPATH/views/templates/results.php [ 71 ] in :
2013-05-14 09:42:32 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-14 09:42:47 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected $end ~ APPPATH/views/templates/results.php [ 71 ] in :
2013-05-14 09:42:47 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-14 09:42:54 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: heading ~ APPPATH/views/templates/auth.php [ 2 ] in /home/www/kohana/application/views/templates/auth.php:2
2013-05-14 09:42:54 --- DEBUG: #0 /home/www/kohana/application/views/templates/auth.php(2): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/www/kohan...', 2, Array)
#1 /home/www/kohana/system/classes/Kohana/View.php(61): include('/home/www/kohan...')
#2 /home/www/kohana/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/www/kohan...', Array)
#3 /home/www/kohana/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /home/www/kohana/application/classes/Controller/Index.php(42): Kohana_View->__toString()
#5 /home/www/kohana/system/classes/Kohana/Controller.php(84): Controller_Index->action_results()
#6 [internal function]: Kohana_Controller->execute()
#7 /home/www/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#8 /home/www/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /home/www/kohana/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 /home/www/kohana/index.php(118): Kohana_Request->execute()
#11 {main} in /home/www/kohana/application/views/templates/auth.php:2
2013-05-14 09:43:16 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: heading ~ APPPATH/views/templates/auth.php [ 2 ] in /home/www/kohana/application/views/templates/auth.php:2
2013-05-14 09:43:16 --- DEBUG: #0 /home/www/kohana/application/views/templates/auth.php(2): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/www/kohan...', 2, Array)
#1 /home/www/kohana/system/classes/Kohana/View.php(61): include('/home/www/kohan...')
#2 /home/www/kohana/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/www/kohan...', Array)
#3 /home/www/kohana/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /home/www/kohana/application/classes/Controller/Index.php(42): Kohana_View->__toString()
#5 /home/www/kohana/system/classes/Kohana/Controller.php(84): Controller_Index->action_results()
#6 [internal function]: Kohana_Controller->execute()
#7 /home/www/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#8 /home/www/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /home/www/kohana/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 /home/www/kohana/index.php(118): Kohana_Request->execute()
#11 {main} in /home/www/kohana/application/views/templates/auth.php:2
2013-05-14 09:43:17 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: heading ~ APPPATH/views/templates/auth.php [ 2 ] in /home/www/kohana/application/views/templates/auth.php:2
2013-05-14 09:43:17 --- DEBUG: #0 /home/www/kohana/application/views/templates/auth.php(2): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/www/kohan...', 2, Array)
#1 /home/www/kohana/system/classes/Kohana/View.php(61): include('/home/www/kohan...')
#2 /home/www/kohana/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/www/kohan...', Array)
#3 /home/www/kohana/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /home/www/kohana/application/classes/Controller/Index.php(42): Kohana_View->__toString()
#5 /home/www/kohana/system/classes/Kohana/Controller.php(84): Controller_Index->action_results()
#6 [internal function]: Kohana_Controller->execute()
#7 /home/www/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#8 /home/www/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /home/www/kohana/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 /home/www/kohana/index.php(118): Kohana_Request->execute()
#11 {main} in /home/www/kohana/application/views/templates/auth.php:2
2013-05-14 09:43:19 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: heading ~ APPPATH/views/templates/auth.php [ 2 ] in /home/www/kohana/application/views/templates/auth.php:2
2013-05-14 09:43:19 --- DEBUG: #0 /home/www/kohana/application/views/templates/auth.php(2): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/www/kohan...', 2, Array)
#1 /home/www/kohana/system/classes/Kohana/View.php(61): include('/home/www/kohan...')
#2 /home/www/kohana/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/www/kohan...', Array)
#3 /home/www/kohana/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /home/www/kohana/application/classes/Controller/Index.php(42): Kohana_View->__toString()
#5 /home/www/kohana/system/classes/Kohana/Controller.php(84): Controller_Index->action_results()
#6 [internal function]: Kohana_Controller->execute()
#7 /home/www/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#8 /home/www/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /home/www/kohana/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 /home/www/kohana/index.php(118): Kohana_Request->execute()
#11 {main} in /home/www/kohana/application/views/templates/auth.php:2
2013-05-14 09:43:21 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: heading ~ APPPATH/views/templates/auth.php [ 2 ] in /home/www/kohana/application/views/templates/auth.php:2
2013-05-14 09:43:21 --- DEBUG: #0 /home/www/kohana/application/views/templates/auth.php(2): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/www/kohan...', 2, Array)
#1 /home/www/kohana/system/classes/Kohana/View.php(61): include('/home/www/kohan...')
#2 /home/www/kohana/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/www/kohan...', Array)
#3 /home/www/kohana/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /home/www/kohana/application/classes/Controller/Index.php(42): Kohana_View->__toString()
#5 /home/www/kohana/system/classes/Kohana/Controller.php(84): Controller_Index->action_results()
#6 [internal function]: Kohana_Controller->execute()
#7 /home/www/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#8 /home/www/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /home/www/kohana/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 /home/www/kohana/index.php(118): Kohana_Request->execute()
#11 {main} in /home/www/kohana/application/views/templates/auth.php:2
2013-05-14 09:43:59 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH/views/templates/results.php [ 1 ] in :
2013-05-14 09:43:59 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-14 09:44:33 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH/views/templates/results.php [ 1 ] in :
2013-05-14 09:44:33 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-14 09:45:04 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: results ~ APPPATH/views/templates/results.php [ 1 ] in /home/www/kohana/application/views/templates/results.php:1
2013-05-14 09:45:04 --- DEBUG: #0 /home/www/kohana/application/views/templates/results.php(1): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/www/kohan...', 1, Array)
#1 /home/www/kohana/system/classes/Kohana/View.php(61): include('/home/www/kohan...')
#2 /home/www/kohana/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/www/kohan...', Array)
#3 /home/www/kohana/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /home/www/kohana/application/classes/Controller/Index.php(42): Kohana_View->__toString()
#5 /home/www/kohana/system/classes/Kohana/Controller.php(84): Controller_Index->action_results()
#6 [internal function]: Kohana_Controller->execute()
#7 /home/www/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#8 /home/www/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /home/www/kohana/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 /home/www/kohana/index.php(118): Kohana_Request->execute()
#11 {main} in /home/www/kohana/application/views/templates/results.php:1
2013-05-14 09:45:45 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH/views/templates/results.php [ 1 ] in :
2013-05-14 09:45:45 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-14 09:46:09 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH/views/templates/results.php [ 1 ] in :
2013-05-14 09:46:09 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-14 09:46:55 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH/views/templates/results.php [ 1 ] in :
2013-05-14 09:46:55 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-14 09:47:06 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH/views/templates/results.php [ 1 ] in :
2013-05-14 09:47:06 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-14 09:47:07 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH/views/templates/results.php [ 1 ] in :
2013-05-14 09:47:07 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-14 09:47:21 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH/views/templates/results.php [ 1 ] in :
2013-05-14 09:47:21 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-14 09:47:23 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH/views/templates/results.php [ 1 ] in :
2013-05-14 09:47:23 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-14 09:47:23 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH/views/templates/results.php [ 1 ] in :
2013-05-14 09:47:23 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-14 09:47:24 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH/views/templates/results.php [ 1 ] in :
2013-05-14 09:47:24 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-14 09:47:26 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH/views/templates/results.php [ 1 ] in :
2013-05-14 09:47:26 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-14 09:47:52 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH/views/templates/results.php [ 1 ] in :
2013-05-14 09:47:52 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-14 09:48:07 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH/views/templates/results.php [ 50 ] in :
2013-05-14 09:48:07 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-14 09:48:10 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH/views/templates/results.php [ 50 ] in :
2013-05-14 09:48:10 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-14 09:48:22 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH/views/templates/results.php [ 50 ] in :
2013-05-14 09:48:22 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-14 09:53:11 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH/views/templates/results.php [ 51 ] in :
2013-05-14 09:53:11 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-14 09:53:22 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH/views/templates/results.php [ 51 ] in :
2013-05-14 09:53:22 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-14 09:53:32 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH/views/templates/results.php [ 51 ] in :
2013-05-14 09:53:32 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-14 09:53:51 --- EMERGENCY: Kohana_Exception [ 0 ]: The YaCounter property does not exist in the Model_Orders class ~ MODPATH/orm/classes/Kohana/ORM.php [ 684 ] in /home/www/kohana/modules/orm/classes/Kohana/ORM.php:600
2013-05-14 09:53:51 --- DEBUG: #0 /home/www/kohana/modules/orm/classes/Kohana/ORM.php(600): Kohana_ORM->get('YaCounter')
#1 /home/www/kohana/application/views/templates/results.php(48): Kohana_ORM->__get('YaCounter')
#2 /home/www/kohana/system/classes/Kohana/View.php(61): include('/home/www/kohan...')
#3 /home/www/kohana/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/www/kohan...', Array)
#4 /home/www/kohana/system/classes/Kohana/View.php(228): Kohana_View->render()
#5 /home/www/kohana/application/classes/Controller/Index.php(42): Kohana_View->__toString()
#6 /home/www/kohana/system/classes/Kohana/Controller.php(84): Controller_Index->action_results()
#7 [internal function]: Kohana_Controller->execute()
#8 /home/www/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#9 /home/www/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /home/www/kohana/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#11 /home/www/kohana/index.php(118): Kohana_Request->execute()
#12 {main} in /home/www/kohana/modules/orm/classes/Kohana/ORM.php:600
2013-05-14 09:54:37 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH/views/templates/results.php [ 51 ] in :
2013-05-14 09:54:37 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-14 09:54:57 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH/views/templates/results.php [ 50 ] in :
2013-05-14 09:54:57 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-14 09:55:02 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH/views/templates/results.php [ 49 ] in :
2013-05-14 09:55:02 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-14 09:55:14 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH/views/templates/results.php [ 49 ] in :
2013-05-14 09:55:14 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-14 09:56:12 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH/views/templates/results.php [ 51 ] in :
2013-05-14 09:56:12 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-14 09:56:13 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH/views/templates/results.php [ 51 ] in :
2013-05-14 09:56:13 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-14 09:56:21 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH/views/templates/results.php [ 51 ] in :
2013-05-14 09:56:21 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-14 09:56:36 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH/views/templates/results.php [ 51 ] in :
2013-05-14 09:56:36 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-14 09:56:43 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH/views/templates/results.php [ 51 ] in :
2013-05-14 09:56:43 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-14 09:57:07 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH/views/templates/results.php [ 37 ] in :
2013-05-14 09:57:07 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-14 09:57:09 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH/views/templates/results.php [ 37 ] in :
2013-05-14 09:57:09 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-14 09:57:09 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH/views/templates/results.php [ 37 ] in :
2013-05-14 09:57:09 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-14 09:57:09 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH/views/templates/results.php [ 37 ] in :
2013-05-14 09:57:09 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-14 09:57:50 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH/views/templates/results.php [ 51 ] in :
2013-05-14 09:57:50 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-14 09:57:51 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH/views/templates/results.php [ 51 ] in :
2013-05-14 09:57:51 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-14 09:57:53 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH/views/templates/results.php [ 51 ] in :
2013-05-14 09:57:53 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-14 10:04:42 --- EMERGENCY: ErrorException [ 2 ]: Missing argument 2 for Kohana_ORM::on(), called in /home/www/kohana/application/classes/Controller/Index.php on line 41 and defined ~ MODPATH/orm/classes/Kohana/ORM.php [ 2097 ] in /home/www/kohana/modules/orm/classes/Kohana/ORM.php:2097
2013-05-14 10:04:42 --- DEBUG: #0 /home/www/kohana/modules/orm/classes/Kohana/ORM.php(2097): Kohana_Core::error_handler(2, 'Missing argumen...', '/home/www/kohan...', 2097, Array)
#1 /home/www/kohana/application/classes/Controller/Index.php(41): Kohana_ORM->on('orders.user_id ...')
#2 /home/www/kohana/system/classes/Kohana/Controller.php(84): Controller_Index->action_results()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/www/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#5 /home/www/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/www/kohana/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /home/www/kohana/index.php(118): Kohana_Request->execute()
#8 {main} in /home/www/kohana/modules/orm/classes/Kohana/ORM.php:2097
2013-05-14 10:04:45 --- EMERGENCY: ErrorException [ 2 ]: Missing argument 2 for Kohana_ORM::on(), called in /home/www/kohana/application/classes/Controller/Index.php on line 41 and defined ~ MODPATH/orm/classes/Kohana/ORM.php [ 2097 ] in /home/www/kohana/modules/orm/classes/Kohana/ORM.php:2097
2013-05-14 10:04:45 --- DEBUG: #0 /home/www/kohana/modules/orm/classes/Kohana/ORM.php(2097): Kohana_Core::error_handler(2, 'Missing argumen...', '/home/www/kohan...', 2097, Array)
#1 /home/www/kohana/application/classes/Controller/Index.php(41): Kohana_ORM->on('orders.user_id ...')
#2 /home/www/kohana/system/classes/Kohana/Controller.php(84): Controller_Index->action_results()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/www/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#5 /home/www/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/www/kohana/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /home/www/kohana/index.php(118): Kohana_Request->execute()
#8 {main} in /home/www/kohana/modules/orm/classes/Kohana/ORM.php:2097
2013-05-14 10:04:47 --- EMERGENCY: ErrorException [ 2 ]: Missing argument 2 for Kohana_ORM::on(), called in /home/www/kohana/application/classes/Controller/Index.php on line 41 and defined ~ MODPATH/orm/classes/Kohana/ORM.php [ 2097 ] in /home/www/kohana/modules/orm/classes/Kohana/ORM.php:2097
2013-05-14 10:04:47 --- DEBUG: #0 /home/www/kohana/modules/orm/classes/Kohana/ORM.php(2097): Kohana_Core::error_handler(2, 'Missing argumen...', '/home/www/kohan...', 2097, Array)
#1 /home/www/kohana/application/classes/Controller/Index.php(41): Kohana_ORM->on('orders.user_id ...')
#2 /home/www/kohana/system/classes/Kohana/Controller.php(84): Controller_Index->action_results()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/www/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#5 /home/www/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/www/kohana/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /home/www/kohana/index.php(118): Kohana_Request->execute()
#8 {main} in /home/www/kohana/modules/orm/classes/Kohana/ORM.php:2097
2013-05-14 10:06:41 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column '4' in 'on clause' [ SELECT `order_users`.*, `sites`.*, `orders`.`order_id` AS `order_id`, `orders`.`site_id` AS `site_id`, `orders`.`type` AS `type`, `orders`.`content` AS `content`, `orders`.`user_id` AS `user_id`, `orders`.`date` AS `date`, `orders`.`user_ref` AS `user_ref`, `orders`.`enter_page` AS `enter_page`, `orders`.`send_page` AS `send_page`, `orders`.`engine` AS `engine`, `orders`.`utm_type` AS `utm_type`, `orders`.`adv_comp` AS `adv_comp`, `orders`.`keywords` AS `keywords`, `orders`.`webvisor_link` AS `webvisor_link`, `orders`.`add_info` AS `add_info` FROM `orders` AS `orders` JOIN `order_users` ON (`orders`.`user_id` = `order_users`.`id`) JOIN `sites` ON (`sites`.`id` = `4`) ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /home/www/kohana/modules/database/classes/Kohana/Database/Query.php:251
2013-05-14 10:06:41 --- DEBUG: #0 /home/www/kohana/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `order_u...', 'Model_Orders', Array)
#1 /home/www/kohana/modules/orm/classes/Kohana/ORM.php(1060): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /home/www/kohana/modules/orm/classes/Kohana/ORM.php(1001): Kohana_ORM->_load_result(true)
#3 /home/www/kohana/application/classes/Controller/Index.php(46): Kohana_ORM->find_all()
#4 /home/www/kohana/system/classes/Kohana/Controller.php(84): Controller_Index->action_results()
#5 [internal function]: Kohana_Controller->execute()
#6 /home/www/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#7 /home/www/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/www/kohana/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 /home/www/kohana/index.php(118): Kohana_Request->execute()
#10 {main} in /home/www/kohana/modules/database/classes/Kohana/Database/Query.php:251
2013-05-14 10:07:56 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column '4' in 'on clause' [ SELECT `order_users`.*, `sites`.*, `orders`.`order_id` AS `order_id`, `orders`.`site_id` AS `site_id`, `orders`.`type` AS `type`, `orders`.`content` AS `content`, `orders`.`user_id` AS `user_id`, `orders`.`date` AS `date`, `orders`.`user_ref` AS `user_ref`, `orders`.`enter_page` AS `enter_page`, `orders`.`send_page` AS `send_page`, `orders`.`engine` AS `engine`, `orders`.`utm_type` AS `utm_type`, `orders`.`adv_comp` AS `adv_comp`, `orders`.`keywords` AS `keywords`, `orders`.`webvisor_link` AS `webvisor_link`, `orders`.`add_info` AS `add_info` FROM `orders` AS `orders` JOIN `order_users` ON (`orders`.`user_id` = `order_users`.`id`) JOIN `sites` ON (`sites`.`id` = `4`) ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /home/www/kohana/modules/database/classes/Kohana/Database/Query.php:251
2013-05-14 10:07:56 --- DEBUG: #0 /home/www/kohana/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `order_u...', 'Model_Orders', Array)
#1 /home/www/kohana/modules/orm/classes/Kohana/ORM.php(1060): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /home/www/kohana/modules/orm/classes/Kohana/ORM.php(1001): Kohana_ORM->_load_result(true)
#3 /home/www/kohana/application/classes/Controller/Index.php(46): Kohana_ORM->find_all()
#4 /home/www/kohana/system/classes/Kohana/Controller.php(84): Controller_Index->action_results()
#5 [internal function]: Kohana_Controller->execute()
#6 /home/www/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#7 /home/www/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/www/kohana/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 /home/www/kohana/index.php(118): Kohana_Request->execute()
#10 {main} in /home/www/kohana/modules/database/classes/Kohana/Database/Query.php:251
2013-05-14 10:08:01 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column '4' in 'on clause' [ SELECT `order_users`.*, `sites`.*, `orders`.`order_id` AS `order_id`, `orders`.`site_id` AS `site_id`, `orders`.`type` AS `type`, `orders`.`content` AS `content`, `orders`.`user_id` AS `user_id`, `orders`.`date` AS `date`, `orders`.`user_ref` AS `user_ref`, `orders`.`enter_page` AS `enter_page`, `orders`.`send_page` AS `send_page`, `orders`.`engine` AS `engine`, `orders`.`utm_type` AS `utm_type`, `orders`.`adv_comp` AS `adv_comp`, `orders`.`keywords` AS `keywords`, `orders`.`webvisor_link` AS `webvisor_link`, `orders`.`add_info` AS `add_info` FROM `orders` AS `orders` JOIN `order_users` ON (`orders`.`user_id` = `order_users`.`id`) JOIN `sites` ON (`sites`.`id` = `4`) ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /home/www/kohana/modules/database/classes/Kohana/Database/Query.php:251
2013-05-14 10:08:01 --- DEBUG: #0 /home/www/kohana/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `order_u...', 'Model_Orders', Array)
#1 /home/www/kohana/modules/orm/classes/Kohana/ORM.php(1060): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /home/www/kohana/modules/orm/classes/Kohana/ORM.php(1001): Kohana_ORM->_load_result(true)
#3 /home/www/kohana/application/classes/Controller/Index.php(46): Kohana_ORM->find_all()
#4 /home/www/kohana/system/classes/Kohana/Controller.php(84): Controller_Index->action_results()
#5 [internal function]: Kohana_Controller->execute()
#6 /home/www/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#7 /home/www/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/www/kohana/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 /home/www/kohana/index.php(118): Kohana_Request->execute()
#10 {main} in /home/www/kohana/modules/database/classes/Kohana/Database/Query.php:251
2013-05-14 10:08:03 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column '4' in 'on clause' [ SELECT `order_users`.*, `sites`.*, `orders`.`order_id` AS `order_id`, `orders`.`site_id` AS `site_id`, `orders`.`type` AS `type`, `orders`.`content` AS `content`, `orders`.`user_id` AS `user_id`, `orders`.`date` AS `date`, `orders`.`user_ref` AS `user_ref`, `orders`.`enter_page` AS `enter_page`, `orders`.`send_page` AS `send_page`, `orders`.`engine` AS `engine`, `orders`.`utm_type` AS `utm_type`, `orders`.`adv_comp` AS `adv_comp`, `orders`.`keywords` AS `keywords`, `orders`.`webvisor_link` AS `webvisor_link`, `orders`.`add_info` AS `add_info` FROM `orders` AS `orders` JOIN `order_users` ON (`orders`.`user_id` = `order_users`.`id`) JOIN `sites` ON (`sites`.`id` = `4`) ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /home/www/kohana/modules/database/classes/Kohana/Database/Query.php:251
2013-05-14 10:08:03 --- DEBUG: #0 /home/www/kohana/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `order_u...', 'Model_Orders', Array)
#1 /home/www/kohana/modules/orm/classes/Kohana/ORM.php(1060): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /home/www/kohana/modules/orm/classes/Kohana/ORM.php(1001): Kohana_ORM->_load_result(true)
#3 /home/www/kohana/application/classes/Controller/Index.php(46): Kohana_ORM->find_all()
#4 /home/www/kohana/system/classes/Kohana/Controller.php(84): Controller_Index->action_results()
#5 [internal function]: Kohana_Controller->execute()
#6 /home/www/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#7 /home/www/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/www/kohana/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 /home/www/kohana/index.php(118): Kohana_Request->execute()
#10 {main} in /home/www/kohana/modules/database/classes/Kohana/Database/Query.php:251
2013-05-14 10:08:04 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column '4' in 'on clause' [ SELECT `order_users`.*, `sites`.*, `orders`.`order_id` AS `order_id`, `orders`.`site_id` AS `site_id`, `orders`.`type` AS `type`, `orders`.`content` AS `content`, `orders`.`user_id` AS `user_id`, `orders`.`date` AS `date`, `orders`.`user_ref` AS `user_ref`, `orders`.`enter_page` AS `enter_page`, `orders`.`send_page` AS `send_page`, `orders`.`engine` AS `engine`, `orders`.`utm_type` AS `utm_type`, `orders`.`adv_comp` AS `adv_comp`, `orders`.`keywords` AS `keywords`, `orders`.`webvisor_link` AS `webvisor_link`, `orders`.`add_info` AS `add_info` FROM `orders` AS `orders` JOIN `order_users` ON (`orders`.`user_id` = `order_users`.`id`) JOIN `sites` ON (`sites`.`id` = `4`) ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /home/www/kohana/modules/database/classes/Kohana/Database/Query.php:251
2013-05-14 10:08:04 --- DEBUG: #0 /home/www/kohana/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `order_u...', 'Model_Orders', Array)
#1 /home/www/kohana/modules/orm/classes/Kohana/ORM.php(1060): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /home/www/kohana/modules/orm/classes/Kohana/ORM.php(1001): Kohana_ORM->_load_result(true)
#3 /home/www/kohana/application/classes/Controller/Index.php(46): Kohana_ORM->find_all()
#4 /home/www/kohana/system/classes/Kohana/Controller.php(84): Controller_Index->action_results()
#5 [internal function]: Kohana_Controller->execute()
#6 /home/www/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#7 /home/www/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/www/kohana/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 /home/www/kohana/index.php(118): Kohana_Request->execute()
#10 {main} in /home/www/kohana/modules/database/classes/Kohana/Database/Query.php:251
2013-05-14 10:08:18 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column '4' in 'on clause' [ SELECT `order_users`.*, `sites`.*, `orders`.`order_id` AS `order_id`, `orders`.`site_id` AS `site_id`, `orders`.`type` AS `type`, `orders`.`content` AS `content`, `orders`.`user_id` AS `user_id`, `orders`.`date` AS `date`, `orders`.`user_ref` AS `user_ref`, `orders`.`enter_page` AS `enter_page`, `orders`.`send_page` AS `send_page`, `orders`.`engine` AS `engine`, `orders`.`utm_type` AS `utm_type`, `orders`.`adv_comp` AS `adv_comp`, `orders`.`keywords` AS `keywords`, `orders`.`webvisor_link` AS `webvisor_link`, `orders`.`add_info` AS `add_info` FROM `orders` AS `orders` JOIN `order_users` ON (`orders`.`user_id` = `order_users`.`id`) JOIN `sites` ON (`sites`.`id` = `4`) ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /home/www/kohana/modules/database/classes/Kohana/Database/Query.php:251
2013-05-14 10:08:18 --- DEBUG: #0 /home/www/kohana/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `order_u...', 'Model_Orders', Array)
#1 /home/www/kohana/modules/orm/classes/Kohana/ORM.php(1060): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /home/www/kohana/modules/orm/classes/Kohana/ORM.php(1001): Kohana_ORM->_load_result(true)
#3 /home/www/kohana/application/classes/Controller/Index.php(46): Kohana_ORM->find_all()
#4 /home/www/kohana/system/classes/Kohana/Controller.php(84): Controller_Index->action_results()
#5 [internal function]: Kohana_Controller->execute()
#6 /home/www/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#7 /home/www/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/www/kohana/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 /home/www/kohana/index.php(118): Kohana_Request->execute()
#10 {main} in /home/www/kohana/modules/database/classes/Kohana/Database/Query.php:251
2013-05-14 10:08:19 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column '4' in 'on clause' [ SELECT `order_users`.*, `sites`.*, `orders`.`order_id` AS `order_id`, `orders`.`site_id` AS `site_id`, `orders`.`type` AS `type`, `orders`.`content` AS `content`, `orders`.`user_id` AS `user_id`, `orders`.`date` AS `date`, `orders`.`user_ref` AS `user_ref`, `orders`.`enter_page` AS `enter_page`, `orders`.`send_page` AS `send_page`, `orders`.`engine` AS `engine`, `orders`.`utm_type` AS `utm_type`, `orders`.`adv_comp` AS `adv_comp`, `orders`.`keywords` AS `keywords`, `orders`.`webvisor_link` AS `webvisor_link`, `orders`.`add_info` AS `add_info` FROM `orders` AS `orders` JOIN `order_users` ON (`orders`.`user_id` = `order_users`.`id`) JOIN `sites` ON (`sites`.`id` = `4`) ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /home/www/kohana/modules/database/classes/Kohana/Database/Query.php:251
2013-05-14 10:08:19 --- DEBUG: #0 /home/www/kohana/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `order_u...', 'Model_Orders', Array)
#1 /home/www/kohana/modules/orm/classes/Kohana/ORM.php(1060): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /home/www/kohana/modules/orm/classes/Kohana/ORM.php(1001): Kohana_ORM->_load_result(true)
#3 /home/www/kohana/application/classes/Controller/Index.php(46): Kohana_ORM->find_all()
#4 /home/www/kohana/system/classes/Kohana/Controller.php(84): Controller_Index->action_results()
#5 [internal function]: Kohana_Controller->execute()
#6 /home/www/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#7 /home/www/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/www/kohana/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 /home/www/kohana/index.php(118): Kohana_Request->execute()
#10 {main} in /home/www/kohana/modules/database/classes/Kohana/Database/Query.php:251
2013-05-14 10:08:20 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column '4' in 'on clause' [ SELECT `order_users`.*, `sites`.*, `orders`.`order_id` AS `order_id`, `orders`.`site_id` AS `site_id`, `orders`.`type` AS `type`, `orders`.`content` AS `content`, `orders`.`user_id` AS `user_id`, `orders`.`date` AS `date`, `orders`.`user_ref` AS `user_ref`, `orders`.`enter_page` AS `enter_page`, `orders`.`send_page` AS `send_page`, `orders`.`engine` AS `engine`, `orders`.`utm_type` AS `utm_type`, `orders`.`adv_comp` AS `adv_comp`, `orders`.`keywords` AS `keywords`, `orders`.`webvisor_link` AS `webvisor_link`, `orders`.`add_info` AS `add_info` FROM `orders` AS `orders` JOIN `order_users` ON (`orders`.`user_id` = `order_users`.`id`) JOIN `sites` ON (`sites`.`id` = `4`) ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /home/www/kohana/modules/database/classes/Kohana/Database/Query.php:251
2013-05-14 10:08:20 --- DEBUG: #0 /home/www/kohana/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `order_u...', 'Model_Orders', Array)
#1 /home/www/kohana/modules/orm/classes/Kohana/ORM.php(1060): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /home/www/kohana/modules/orm/classes/Kohana/ORM.php(1001): Kohana_ORM->_load_result(true)
#3 /home/www/kohana/application/classes/Controller/Index.php(46): Kohana_ORM->find_all()
#4 /home/www/kohana/system/classes/Kohana/Controller.php(84): Controller_Index->action_results()
#5 [internal function]: Kohana_Controller->execute()
#6 /home/www/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#7 /home/www/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/www/kohana/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 /home/www/kohana/index.php(118): Kohana_Request->execute()
#10 {main} in /home/www/kohana/modules/database/classes/Kohana/Database/Query.php:251
2013-05-14 10:08:21 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column '4' in 'on clause' [ SELECT `order_users`.*, `sites`.*, `orders`.`order_id` AS `order_id`, `orders`.`site_id` AS `site_id`, `orders`.`type` AS `type`, `orders`.`content` AS `content`, `orders`.`user_id` AS `user_id`, `orders`.`date` AS `date`, `orders`.`user_ref` AS `user_ref`, `orders`.`enter_page` AS `enter_page`, `orders`.`send_page` AS `send_page`, `orders`.`engine` AS `engine`, `orders`.`utm_type` AS `utm_type`, `orders`.`adv_comp` AS `adv_comp`, `orders`.`keywords` AS `keywords`, `orders`.`webvisor_link` AS `webvisor_link`, `orders`.`add_info` AS `add_info` FROM `orders` AS `orders` JOIN `order_users` ON (`orders`.`user_id` = `order_users`.`id`) JOIN `sites` ON (`sites`.`id` = `4`) ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /home/www/kohana/modules/database/classes/Kohana/Database/Query.php:251
2013-05-14 10:08:21 --- DEBUG: #0 /home/www/kohana/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `order_u...', 'Model_Orders', Array)
#1 /home/www/kohana/modules/orm/classes/Kohana/ORM.php(1060): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /home/www/kohana/modules/orm/classes/Kohana/ORM.php(1001): Kohana_ORM->_load_result(true)
#3 /home/www/kohana/application/classes/Controller/Index.php(46): Kohana_ORM->find_all()
#4 /home/www/kohana/system/classes/Kohana/Controller.php(84): Controller_Index->action_results()
#5 [internal function]: Kohana_Controller->execute()
#6 /home/www/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#7 /home/www/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/www/kohana/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 /home/www/kohana/index.php(118): Kohana_Request->execute()
#10 {main} in /home/www/kohana/modules/database/classes/Kohana/Database/Query.php:251
2013-05-14 10:08:22 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column '4' in 'on clause' [ SELECT `order_users`.*, `sites`.*, `orders`.`order_id` AS `order_id`, `orders`.`site_id` AS `site_id`, `orders`.`type` AS `type`, `orders`.`content` AS `content`, `orders`.`user_id` AS `user_id`, `orders`.`date` AS `date`, `orders`.`user_ref` AS `user_ref`, `orders`.`enter_page` AS `enter_page`, `orders`.`send_page` AS `send_page`, `orders`.`engine` AS `engine`, `orders`.`utm_type` AS `utm_type`, `orders`.`adv_comp` AS `adv_comp`, `orders`.`keywords` AS `keywords`, `orders`.`webvisor_link` AS `webvisor_link`, `orders`.`add_info` AS `add_info` FROM `orders` AS `orders` JOIN `order_users` ON (`orders`.`user_id` = `order_users`.`id`) JOIN `sites` ON (`sites`.`id` = `4`) ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /home/www/kohana/modules/database/classes/Kohana/Database/Query.php:251
2013-05-14 10:08:22 --- DEBUG: #0 /home/www/kohana/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `order_u...', 'Model_Orders', Array)
#1 /home/www/kohana/modules/orm/classes/Kohana/ORM.php(1060): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /home/www/kohana/modules/orm/classes/Kohana/ORM.php(1001): Kohana_ORM->_load_result(true)
#3 /home/www/kohana/application/classes/Controller/Index.php(46): Kohana_ORM->find_all()
#4 /home/www/kohana/system/classes/Kohana/Controller.php(84): Controller_Index->action_results()
#5 [internal function]: Kohana_Controller->execute()
#6 /home/www/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#7 /home/www/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/www/kohana/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 /home/www/kohana/index.php(118): Kohana_Request->execute()
#10 {main} in /home/www/kohana/modules/database/classes/Kohana/Database/Query.php:251
2013-05-14 10:32:47 --- EMERGENCY: Kohana_Exception [ 0 ]: The name property does not exist in the Model_Orders class ~ MODPATH/orm/classes/Kohana/ORM.php [ 684 ] in /home/www/kohana/modules/orm/classes/Kohana/ORM.php:600
2013-05-14 10:32:47 --- DEBUG: #0 /home/www/kohana/modules/orm/classes/Kohana/ORM.php(600): Kohana_ORM->get('name')
#1 /home/www/kohana/application/views/templates/results.php(3): Kohana_ORM->__get('name')
#2 /home/www/kohana/system/classes/Kohana/View.php(61): include('/home/www/kohan...')
#3 /home/www/kohana/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/www/kohan...', Array)
#4 /home/www/kohana/system/classes/Kohana/View.php(228): Kohana_View->render()
#5 /home/www/kohana/application/classes/Controller/Index.php(48): Kohana_View->__toString()
#6 /home/www/kohana/system/classes/Kohana/Controller.php(84): Controller_Index->action_results()
#7 [internal function]: Kohana_Controller->execute()
#8 /home/www/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#9 /home/www/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /home/www/kohana/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#11 /home/www/kohana/index.php(118): Kohana_Request->execute()
#12 {main} in /home/www/kohana/modules/orm/classes/Kohana/ORM.php:600
2013-05-14 10:33:05 --- EMERGENCY: Kohana_Exception [ 0 ]: The email property does not exist in the Model_Orders class ~ MODPATH/orm/classes/Kohana/ORM.php [ 684 ] in /home/www/kohana/modules/orm/classes/Kohana/ORM.php:600
2013-05-14 10:33:05 --- DEBUG: #0 /home/www/kohana/modules/orm/classes/Kohana/ORM.php(600): Kohana_ORM->get('email')
#1 /home/www/kohana/application/views/templates/results.php(3): Kohana_ORM->__get('email')
#2 /home/www/kohana/system/classes/Kohana/View.php(61): include('/home/www/kohan...')
#3 /home/www/kohana/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/www/kohan...', Array)
#4 /home/www/kohana/system/classes/Kohana/View.php(228): Kohana_View->render()
#5 /home/www/kohana/application/classes/Controller/Index.php(48): Kohana_View->__toString()
#6 /home/www/kohana/system/classes/Kohana/Controller.php(84): Controller_Index->action_results()
#7 [internal function]: Kohana_Controller->execute()
#8 /home/www/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#9 /home/www/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /home/www/kohana/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#11 /home/www/kohana/index.php(118): Kohana_Request->execute()
#12 {main} in /home/www/kohana/modules/orm/classes/Kohana/ORM.php:600
2013-05-14 10:33:10 --- EMERGENCY: Kohana_Exception [ 0 ]: The id property does not exist in the Model_Orders class ~ MODPATH/orm/classes/Kohana/ORM.php [ 684 ] in /home/www/kohana/modules/orm/classes/Kohana/ORM.php:600
2013-05-14 10:33:10 --- DEBUG: #0 /home/www/kohana/modules/orm/classes/Kohana/ORM.php(600): Kohana_ORM->get('id')
#1 /home/www/kohana/application/views/templates/results.php(3): Kohana_ORM->__get('id')
#2 /home/www/kohana/system/classes/Kohana/View.php(61): include('/home/www/kohan...')
#3 /home/www/kohana/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/www/kohan...', Array)
#4 /home/www/kohana/system/classes/Kohana/View.php(228): Kohana_View->render()
#5 /home/www/kohana/application/classes/Controller/Index.php(48): Kohana_View->__toString()
#6 /home/www/kohana/system/classes/Kohana/Controller.php(84): Controller_Index->action_results()
#7 [internal function]: Kohana_Controller->execute()
#8 /home/www/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#9 /home/www/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /home/www/kohana/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#11 /home/www/kohana/index.php(118): Kohana_Request->execute()
#12 {main} in /home/www/kohana/modules/orm/classes/Kohana/ORM.php:600
2013-05-14 16:31:27 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_order_users' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in :
2013-05-14 16:31:27 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-14 16:31:27 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_order_users' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in :
2013-05-14 16:31:27 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-14 16:31:39 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_order_users' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in :
2013-05-14 16:31:39 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-14 16:31:40 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_order_users' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in :
2013-05-14 16:31:40 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-14 16:31:41 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_order_users' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in :
2013-05-14 16:31:41 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-14 16:31:41 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_order_users' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in :
2013-05-14 16:31:41 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-14 16:31:51 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_order_users' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in :
2013-05-14 16:31:51 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-14 16:32:06 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_order_users' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in :
2013-05-14 16:32:06 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-14 16:32:16 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_order_users' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in :
2013-05-14 16:32:16 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-14 16:32:16 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_order_users' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in :
2013-05-14 16:32:16 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-14 16:32:17 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_order_users' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in :
2013-05-14 16:32:17 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-14 16:32:17 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_order_users' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in :
2013-05-14 16:32:17 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-14 16:32:36 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_order_users' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in :
2013-05-14 16:32:36 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-14 16:32:36 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_order_users' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in :
2013-05-14 16:32:36 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-14 16:32:36 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_order_users' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in :
2013-05-14 16:32:36 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-14 16:32:53 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: data1 ~ APPPATH/classes/Controller/Index.php [ 41 ] in /home/www/kohana/application/classes/Controller/Index.php:41
2013-05-14 16:32:53 --- DEBUG: #0 /home/www/kohana/application/classes/Controller/Index.php(41): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/www/kohan...', 41, Array)
#1 /home/www/kohana/system/classes/Kohana/Controller.php(84): Controller_Index->action_results()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/www/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#4 /home/www/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/www/kohana/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /home/www/kohana/index.php(118): Kohana_Request->execute()
#7 {main} in /home/www/kohana/application/classes/Controller/Index.php:41
2013-05-14 16:32:54 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: data1 ~ APPPATH/classes/Controller/Index.php [ 41 ] in /home/www/kohana/application/classes/Controller/Index.php:41
2013-05-14 16:32:54 --- DEBUG: #0 /home/www/kohana/application/classes/Controller/Index.php(41): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/www/kohan...', 41, Array)
#1 /home/www/kohana/system/classes/Kohana/Controller.php(84): Controller_Index->action_results()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/www/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#4 /home/www/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/www/kohana/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /home/www/kohana/index.php(118): Kohana_Request->execute()
#7 {main} in /home/www/kohana/application/classes/Controller/Index.php:41
2013-05-14 16:33:03 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: data1 ~ APPPATH/classes/Controller/Index.php [ 41 ] in /home/www/kohana/application/classes/Controller/Index.php:41
2013-05-14 16:33:03 --- DEBUG: #0 /home/www/kohana/application/classes/Controller/Index.php(41): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/www/kohan...', 41, Array)
#1 /home/www/kohana/system/classes/Kohana/Controller.php(84): Controller_Index->action_results()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/www/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#4 /home/www/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/www/kohana/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /home/www/kohana/index.php(118): Kohana_Request->execute()
#7 {main} in /home/www/kohana/application/classes/Controller/Index.php:41
2013-05-14 16:33:04 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: data1 ~ APPPATH/classes/Controller/Index.php [ 41 ] in /home/www/kohana/application/classes/Controller/Index.php:41
2013-05-14 16:33:04 --- DEBUG: #0 /home/www/kohana/application/classes/Controller/Index.php(41): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/www/kohan...', 41, Array)
#1 /home/www/kohana/system/classes/Kohana/Controller.php(84): Controller_Index->action_results()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/www/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#4 /home/www/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/www/kohana/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /home/www/kohana/index.php(118): Kohana_Request->execute()
#7 {main} in /home/www/kohana/application/classes/Controller/Index.php:41
2013-05-14 16:33:10 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_order_users' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in :
2013-05-14 16:33:10 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-14 16:33:13 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_order_users' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in :
2013-05-14 16:33:13 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-14 16:33:37 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_order_users' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in :
2013-05-14 16:33:37 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-14 16:34:45 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_order_users' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in :
2013-05-14 16:34:45 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-14 16:41:48 --- EMERGENCY: Kohana_Exception [ 0 ]: The user property does not exist in the Model_Sites class ~ MODPATH/orm/classes/Kohana/ORM.php [ 684 ] in /home/www/kohana/modules/orm/classes/Kohana/ORM.php:600
2013-05-14 16:41:48 --- DEBUG: #0 /home/www/kohana/modules/orm/classes/Kohana/ORM.php(600): Kohana_ORM->get('user')
#1 /home/www/kohana/application/views/templates/results.php(3): Kohana_ORM->__get('user')
#2 /home/www/kohana/system/classes/Kohana/View.php(61): include('/home/www/kohan...')
#3 /home/www/kohana/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/www/kohan...', Array)
#4 /home/www/kohana/system/classes/Kohana/View.php(228): Kohana_View->render()
#5 /home/www/kohana/application/classes/Controller/Index.php(42): Kohana_View->__toString()
#6 /home/www/kohana/system/classes/Kohana/Controller.php(84): Controller_Index->action_results()
#7 [internal function]: Kohana_Controller->execute()
#8 /home/www/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#9 /home/www/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /home/www/kohana/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#11 /home/www/kohana/index.php(118): Kohana_Request->execute()
#12 {main} in /home/www/kohana/modules/orm/classes/Kohana/ORM.php:600
2013-05-14 16:42:05 --- EMERGENCY: Kohana_Exception [ 0 ]: The order_users property does not exist in the Model_Sites class ~ MODPATH/orm/classes/Kohana/ORM.php [ 684 ] in /home/www/kohana/modules/orm/classes/Kohana/ORM.php:600
2013-05-14 16:42:05 --- DEBUG: #0 /home/www/kohana/modules/orm/classes/Kohana/ORM.php(600): Kohana_ORM->get('order_users')
#1 /home/www/kohana/application/views/templates/results.php(3): Kohana_ORM->__get('order_users')
#2 /home/www/kohana/system/classes/Kohana/View.php(61): include('/home/www/kohan...')
#3 /home/www/kohana/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/www/kohan...', Array)
#4 /home/www/kohana/system/classes/Kohana/View.php(228): Kohana_View->render()
#5 /home/www/kohana/application/classes/Controller/Index.php(42): Kohana_View->__toString()
#6 /home/www/kohana/system/classes/Kohana/Controller.php(84): Controller_Index->action_results()
#7 [internal function]: Kohana_Controller->execute()
#8 /home/www/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#9 /home/www/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /home/www/kohana/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#11 /home/www/kohana/index.php(118): Kohana_Request->execute()
#12 {main} in /home/www/kohana/modules/orm/classes/Kohana/ORM.php:600
2013-05-14 16:43:46 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_sites' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in :
2013-05-14 16:43:46 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-14 16:45:14 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_sites' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in :
2013-05-14 16:45:14 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-14 16:45:22 --- EMERGENCY: Kohana_Exception [ 0 ]: The sitename property does not exist in the Model_Orders class ~ MODPATH/orm/classes/Kohana/ORM.php [ 684 ] in /home/www/kohana/modules/orm/classes/Kohana/ORM.php:600
2013-05-14 16:45:22 --- DEBUG: #0 /home/www/kohana/modules/orm/classes/Kohana/ORM.php(600): Kohana_ORM->get('sitename')
#1 /home/www/kohana/application/views/templates/results.php(3): Kohana_ORM->__get('sitename')
#2 /home/www/kohana/system/classes/Kohana/View.php(61): include('/home/www/kohan...')
#3 /home/www/kohana/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/www/kohan...', Array)
#4 /home/www/kohana/system/classes/Kohana/View.php(228): Kohana_View->render()
#5 /home/www/kohana/application/classes/Controller/Index.php(42): Kohana_View->__toString()
#6 /home/www/kohana/system/classes/Kohana/Controller.php(84): Controller_Index->action_results()
#7 [internal function]: Kohana_Controller->execute()
#8 /home/www/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#9 /home/www/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /home/www/kohana/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#11 /home/www/kohana/index.php(118): Kohana_Request->execute()
#12 {main} in /home/www/kohana/modules/orm/classes/Kohana/ORM.php:600
2013-05-14 16:45:37 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_sites' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in :
2013-05-14 16:45:37 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-14 16:45:41 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_sites' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in :
2013-05-14 16:45:41 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-14 16:45:50 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_sites' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in :
2013-05-14 16:45:50 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-14 16:45:53 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_sites' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in :
2013-05-14 16:45:53 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-14 16:45:53 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_sites' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in :
2013-05-14 16:45:53 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-14 16:45:54 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_sites' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in :
2013-05-14 16:45:54 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-14 16:45:54 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_sites' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in :
2013-05-14 16:45:54 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-14 16:48:13 --- EMERGENCY: Kohana_Exception [ 0 ]: The order_users property does not exist in the Model_Sites class ~ MODPATH/orm/classes/Kohana/ORM.php [ 684 ] in /home/www/kohana/modules/orm/classes/Kohana/ORM.php:600
2013-05-14 16:48:13 --- DEBUG: #0 /home/www/kohana/modules/orm/classes/Kohana/ORM.php(600): Kohana_ORM->get('order_users')
#1 /home/www/kohana/application/views/templates/results.php(3): Kohana_ORM->__get('order_users')
#2 /home/www/kohana/system/classes/Kohana/View.php(61): include('/home/www/kohan...')
#3 /home/www/kohana/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/www/kohan...', Array)
#4 /home/www/kohana/system/classes/Kohana/View.php(228): Kohana_View->render()
#5 /home/www/kohana/application/classes/Controller/Index.php(42): Kohana_View->__toString()
#6 /home/www/kohana/system/classes/Kohana/Controller.php(84): Controller_Index->action_results()
#7 [internal function]: Kohana_Controller->execute()
#8 /home/www/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#9 /home/www/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /home/www/kohana/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#11 /home/www/kohana/index.php(118): Kohana_Request->execute()
#12 {main} in /home/www/kohana/modules/orm/classes/Kohana/ORM.php:600
2013-05-14 16:48:48 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_order_users' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in :
2013-05-14 16:48:48 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-14 16:49:12 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_order_users' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in :
2013-05-14 16:49:12 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-14 16:49:47 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected T_STRING, expecting ',' or ';' ~ APPPATH/views/templates/results.php [ 2 ] in :
2013-05-14 16:49:47 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-14 17:12:56 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_Sites' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in :
2013-05-14 17:12:56 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-14 17:12:57 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_Sites' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in :
2013-05-14 17:12:57 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-14 17:13:15 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_Sites' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in :
2013-05-14 17:13:15 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-14 17:13:16 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_Sites' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in :
2013-05-14 17:13:16 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-14 17:13:40 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_Sites' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in :
2013-05-14 17:13:40 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-14 17:13:40 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_Sites' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in :
2013-05-14 17:13:40 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-14 17:15:09 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$user ~ APPPATH/views/templates/results.php [ 2 ] in /home/www/kohana/application/views/templates/results.php:2
2013-05-14 17:15:09 --- DEBUG: #0 /home/www/kohana/application/views/templates/results.php(2): Kohana_Core::error_handler(8, 'Undefined prope...', '/home/www/kohan...', 2, Array)
#1 /home/www/kohana/system/classes/Kohana/View.php(61): include('/home/www/kohan...')
#2 /home/www/kohana/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/www/kohan...', Array)
#3 /home/www/kohana/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /home/www/kohana/application/classes/Controller/Index.php(42): Kohana_View->__toString()
#5 /home/www/kohana/system/classes/Kohana/Controller.php(84): Controller_Index->action_results()
#6 [internal function]: Kohana_Controller->execute()
#7 /home/www/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#8 /home/www/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /home/www/kohana/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 /home/www/kohana/index.php(118): Kohana_Request->execute()
#11 {main} in /home/www/kohana/application/views/templates/results.php:2
2013-05-14 17:15:32 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$user ~ APPPATH/views/templates/results.php [ 2 ] in /home/www/kohana/application/views/templates/results.php:2
2013-05-14 17:15:32 --- DEBUG: #0 /home/www/kohana/application/views/templates/results.php(2): Kohana_Core::error_handler(8, 'Undefined prope...', '/home/www/kohan...', 2, Array)
#1 /home/www/kohana/system/classes/Kohana/View.php(61): include('/home/www/kohan...')
#2 /home/www/kohana/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/www/kohan...', Array)
#3 /home/www/kohana/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /home/www/kohana/application/classes/Controller/Index.php(42): Kohana_View->__toString()
#5 /home/www/kohana/system/classes/Kohana/Controller.php(84): Controller_Index->action_results()
#6 [internal function]: Kohana_Controller->execute()
#7 /home/www/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#8 /home/www/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /home/www/kohana/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 /home/www/kohana/index.php(118): Kohana_Request->execute()
#11 {main} in /home/www/kohana/application/views/templates/results.php:2
2013-05-14 17:15:33 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$user ~ APPPATH/views/templates/results.php [ 2 ] in /home/www/kohana/application/views/templates/results.php:2
2013-05-14 17:15:33 --- DEBUG: #0 /home/www/kohana/application/views/templates/results.php(2): Kohana_Core::error_handler(8, 'Undefined prope...', '/home/www/kohan...', 2, Array)
#1 /home/www/kohana/system/classes/Kohana/View.php(61): include('/home/www/kohan...')
#2 /home/www/kohana/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/www/kohan...', Array)
#3 /home/www/kohana/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /home/www/kohana/application/classes/Controller/Index.php(42): Kohana_View->__toString()
#5 /home/www/kohana/system/classes/Kohana/Controller.php(84): Controller_Index->action_results()
#6 [internal function]: Kohana_Controller->execute()
#7 /home/www/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#8 /home/www/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /home/www/kohana/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 /home/www/kohana/index.php(118): Kohana_Request->execute()
#11 {main} in /home/www/kohana/application/views/templates/results.php:2
2013-05-14 17:24:31 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_order_user' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in :
2013-05-14 17:24:31 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-14 17:24:47 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_order_user' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in :
2013-05-14 17:24:47 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-14 17:29:18 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_order_user' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in :
2013-05-14 17:29:18 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-14 17:31:30 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_order_user' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in :
2013-05-14 17:31:30 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-14 17:31:49 --- EMERGENCY: Kohana_Exception [ 0 ]: Method find_all() cannot be called on loaded objects ~ MODPATH/orm/classes/Kohana/ORM.php [ 988 ] in /home/www/kohana/application/classes/Controller/Index.php:40
2013-05-14 17:31:49 --- DEBUG: #0 /home/www/kohana/application/classes/Controller/Index.php(40): Kohana_ORM->find_all()
#1 /home/www/kohana/system/classes/Kohana/Controller.php(84): Controller_Index->action_results()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/www/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#4 /home/www/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/www/kohana/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /home/www/kohana/index.php(118): Kohana_Request->execute()
#7 {main} in /home/www/kohana/application/classes/Controller/Index.php:40
2013-05-14 17:32:35 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_order_user' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in :
2013-05-14 17:32:35 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-14 17:32:37 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_order_user' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in :
2013-05-14 17:32:37 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-14 17:33:29 --- EMERGENCY: Kohana_Exception [ 0 ]: The users property does not exist in the Model_Site class ~ MODPATH/orm/classes/Kohana/ORM.php [ 684 ] in /home/www/kohana/modules/orm/classes/Kohana/ORM.php:600
2013-05-14 17:33:29 --- DEBUG: #0 /home/www/kohana/modules/orm/classes/Kohana/ORM.php(600): Kohana_ORM->get('users')
#1 /home/www/kohana/application/classes/Controller/Index.php(40): Kohana_ORM->__get('users')
#2 /home/www/kohana/system/classes/Kohana/Controller.php(84): Controller_Index->action_results()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/www/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#5 /home/www/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/www/kohana/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /home/www/kohana/index.php(118): Kohana_Request->execute()
#8 {main} in /home/www/kohana/modules/orm/classes/Kohana/ORM.php:600
2013-05-14 17:35:38 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_Order_User' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in :
2013-05-14 17:35:38 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-14 17:35:39 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_Order_User' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in :
2013-05-14 17:35:39 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-14 17:36:01 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_Order_User' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in :
2013-05-14 17:36:01 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-14 17:36:01 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_Order_User' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in :
2013-05-14 17:36:01 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-14 17:36:35 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_Order_User' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in :
2013-05-14 17:36:35 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-14 17:36:37 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_Order_User' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in :
2013-05-14 17:36:37 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-14 17:36:50 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_Order_User' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in :
2013-05-14 17:36:50 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-14 17:36:56 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_Order_User' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in :
2013-05-14 17:36:56 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-14 17:36:57 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_Order_User' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in :
2013-05-14 17:36:57 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-14 17:37:20 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_Order_User' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in :
2013-05-14 17:37:20 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-14 17:37:35 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_Order_User' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in :
2013-05-14 17:37:35 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-14 17:39:41 --- EMERGENCY: Kohana_Exception [ 0 ]: Method find_all() cannot be called on loaded objects ~ MODPATH/orm/classes/Kohana/ORM.php [ 988 ] in /home/www/kohana/application/classes/Controller/Index.php:39
2013-05-14 17:39:41 --- DEBUG: #0 /home/www/kohana/application/classes/Controller/Index.php(39): Kohana_ORM->find_all()
#1 /home/www/kohana/system/classes/Kohana/Controller.php(84): Controller_Index->action_results()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/www/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#4 /home/www/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/www/kohana/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /home/www/kohana/index.php(118): Kohana_Request->execute()
#7 {main} in /home/www/kohana/application/classes/Controller/Index.php:39
2013-05-14 17:42:02 --- EMERGENCY: Kohana_Exception [ 0 ]: The orders property does not exist in the Model_Site class ~ MODPATH/orm/classes/Kohana/ORM.php [ 684 ] in /home/www/kohana/modules/orm/classes/Kohana/ORM.php:600
2013-05-14 17:42:02 --- DEBUG: #0 /home/www/kohana/modules/orm/classes/Kohana/ORM.php(600): Kohana_ORM->get('orders')
#1 /home/www/kohana/application/classes/Controller/Index.php(40): Kohana_ORM->__get('orders')
#2 /home/www/kohana/system/classes/Kohana/Controller.php(84): Controller_Index->action_results()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/www/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#5 /home/www/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/www/kohana/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /home/www/kohana/index.php(118): Kohana_Request->execute()
#8 {main} in /home/www/kohana/modules/orm/classes/Kohana/ORM.php:600
2013-05-14 17:57:24 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'orders.site.id' in 'where clause' [ SELECT * FROM `orders` JOIN `users` ON (`orders`.`user_id` = `users`.`id`) JOIN `sites` ON (`sites`.`id` = `4`) WHERE `orders`.`site`.`id` = 4 ORDER BY `orders`.`id` DESC ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /home/www/kohana/modules/database/classes/Kohana/Database/Query.php:251
2013-05-14 17:57:24 --- DEBUG: #0 /home/www/kohana/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false, Array)
#1 /home/www/kohana/application/classes/Model/Site.php(22): Kohana_Database_Query->execute()
#2 /home/www/kohana/application/classes/Controller/Index.php(40): Model_Site->get_orders(4)
#3 /home/www/kohana/system/classes/Kohana/Controller.php(84): Controller_Index->action_results()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/www/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#6 /home/www/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/www/kohana/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /home/www/kohana/index.php(118): Kohana_Request->execute()
#9 {main} in /home/www/kohana/modules/database/classes/Kohana/Database/Query.php:251
2013-05-14 17:58:42 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'orders.site.id' in 'where clause' [ SELECT * FROM `orders` JOIN `users` ON (`orders`.`user_id` = `users`.`id`) JOIN `sites` ON (`sites`.`id` = `4`) WHERE `orders`.`site`.`id` = 4 ORDER BY `orders`.`id` DESC ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /home/www/kohana/modules/database/classes/Kohana/Database/Query.php:251
2013-05-14 17:58:42 --- DEBUG: #0 /home/www/kohana/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false, Array)
#1 /home/www/kohana/application/classes/Model/Site.php(22): Kohana_Database_Query->execute()
#2 /home/www/kohana/application/classes/Controller/Index.php(40): Model_Site->get_orders(4)
#3 /home/www/kohana/system/classes/Kohana/Controller.php(84): Controller_Index->action_results()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/www/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#6 /home/www/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/www/kohana/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /home/www/kohana/index.php(118): Kohana_Request->execute()
#9 {main} in /home/www/kohana/modules/database/classes/Kohana/Database/Query.php:251
2013-05-14 17:59:02 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'orders.site.id' in 'where clause' [ SELECT * FROM `orders` JOIN `users` ON (`orders`.`user_id` = `users`.`id`) JOIN `sites` ON (`sites`.`id` = `4`) WHERE `orders`.`site`.`id` = 4 ORDER BY `orders`.`id` DESC ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /home/www/kohana/modules/database/classes/Kohana/Database/Query.php:251
2013-05-14 17:59:02 --- DEBUG: #0 /home/www/kohana/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false, Array)
#1 /home/www/kohana/application/classes/Model/Site.php(22): Kohana_Database_Query->execute()
#2 /home/www/kohana/application/classes/Controller/Index.php(40): Model_Site->get_orders(4)
#3 /home/www/kohana/system/classes/Kohana/Controller.php(84): Controller_Index->action_results()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/www/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#6 /home/www/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/www/kohana/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /home/www/kohana/index.php(118): Kohana_Request->execute()
#9 {main} in /home/www/kohana/modules/database/classes/Kohana/Database/Query.php:251
2013-05-14 17:59:02 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'orders.site.id' in 'where clause' [ SELECT * FROM `orders` JOIN `users` ON (`orders`.`user_id` = `users`.`id`) JOIN `sites` ON (`sites`.`id` = `4`) WHERE `orders`.`site`.`id` = 4 ORDER BY `orders`.`id` DESC ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /home/www/kohana/modules/database/classes/Kohana/Database/Query.php:251
2013-05-14 17:59:02 --- DEBUG: #0 /home/www/kohana/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false, Array)
#1 /home/www/kohana/application/classes/Model/Site.php(22): Kohana_Database_Query->execute()
#2 /home/www/kohana/application/classes/Controller/Index.php(40): Model_Site->get_orders(4)
#3 /home/www/kohana/system/classes/Kohana/Controller.php(84): Controller_Index->action_results()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/www/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#6 /home/www/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/www/kohana/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /home/www/kohana/index.php(118): Kohana_Request->execute()
#9 {main} in /home/www/kohana/modules/database/classes/Kohana/Database/Query.php:251
2013-05-14 18:02:18 --- EMERGENCY: ErrorException [ 4096 ]: Object of class Database_MySQL_Result could not be converted to string ~ APPPATH/classes/Controller/Index.php [ 40 ] in /home/www/kohana/application/classes/Controller/Index.php:40
2013-05-14 18:02:18 --- DEBUG: #0 /home/www/kohana/application/classes/Controller/Index.php(40): Kohana_Core::error_handler(4096, 'Object of class...', '/home/www/kohan...', 40, Array)
#1 /home/www/kohana/system/classes/Kohana/Controller.php(84): Controller_Index->action_results()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/www/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#4 /home/www/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/www/kohana/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /home/www/kohana/index.php(118): Kohana_Request->execute()
#7 {main} in /home/www/kohana/application/classes/Controller/Index.php:40
2013-05-14 18:02:30 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: results ~ APPPATH/classes/Model/Site.php [ 16 ] in /home/www/kohana/application/classes/Model/Site.php:16
2013-05-14 18:02:30 --- DEBUG: #0 /home/www/kohana/application/classes/Model/Site.php(16): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/www/kohan...', 16, Array)
#1 /home/www/kohana/application/classes/Controller/Index.php(40): Model_Site->get_orders()
#2 /home/www/kohana/system/classes/Kohana/Controller.php(84): Controller_Index->action_results()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/www/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#5 /home/www/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/www/kohana/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /home/www/kohana/index.php(118): Kohana_Request->execute()
#8 {main} in /home/www/kohana/application/classes/Model/Site.php:16
2013-05-14 18:02:31 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: results ~ APPPATH/classes/Model/Site.php [ 16 ] in /home/www/kohana/application/classes/Model/Site.php:16
2013-05-14 18:02:31 --- DEBUG: #0 /home/www/kohana/application/classes/Model/Site.php(16): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/www/kohan...', 16, Array)
#1 /home/www/kohana/application/classes/Controller/Index.php(40): Model_Site->get_orders()
#2 /home/www/kohana/system/classes/Kohana/Controller.php(84): Controller_Index->action_results()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/www/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#5 /home/www/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/www/kohana/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /home/www/kohana/index.php(118): Kohana_Request->execute()
#8 {main} in /home/www/kohana/application/classes/Model/Site.php:16
2013-05-14 18:02:45 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: results ~ APPPATH/classes/Model/Site.php [ 16 ] in /home/www/kohana/application/classes/Model/Site.php:16
2013-05-14 18:02:45 --- DEBUG: #0 /home/www/kohana/application/classes/Model/Site.php(16): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/www/kohan...', 16, Array)
#1 /home/www/kohana/application/classes/Controller/Index.php(40): Model_Site->get_orders()
#2 /home/www/kohana/system/classes/Kohana/Controller.php(84): Controller_Index->action_results()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/www/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#5 /home/www/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/www/kohana/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /home/www/kohana/index.php(118): Kohana_Request->execute()
#8 {main} in /home/www/kohana/application/classes/Model/Site.php:16
2013-05-14 18:02:46 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: results ~ APPPATH/classes/Model/Site.php [ 16 ] in /home/www/kohana/application/classes/Model/Site.php:16
2013-05-14 18:02:46 --- DEBUG: #0 /home/www/kohana/application/classes/Model/Site.php(16): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/www/kohan...', 16, Array)
#1 /home/www/kohana/application/classes/Controller/Index.php(40): Model_Site->get_orders()
#2 /home/www/kohana/system/classes/Kohana/Controller.php(84): Controller_Index->action_results()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/www/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#5 /home/www/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/www/kohana/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /home/www/kohana/index.php(118): Kohana_Request->execute()
#8 {main} in /home/www/kohana/application/classes/Model/Site.php:16
2013-05-14 18:03:51 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: results ~ APPPATH/classes/Model/Site.php [ 16 ] in /home/www/kohana/application/classes/Model/Site.php:16
2013-05-14 18:03:51 --- DEBUG: #0 /home/www/kohana/application/classes/Model/Site.php(16): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/www/kohan...', 16, Array)
#1 /home/www/kohana/application/classes/Controller/Index.php(40): Model_Site->get_orders()
#2 /home/www/kohana/system/classes/Kohana/Controller.php(84): Controller_Index->action_results()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/www/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#5 /home/www/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/www/kohana/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /home/www/kohana/index.php(118): Kohana_Request->execute()
#8 {main} in /home/www/kohana/application/classes/Model/Site.php:16
2013-05-14 18:05:34 --- EMERGENCY: ErrorException [ 4096 ]: Object of class Database_MySQL_Result could not be converted to string ~ APPPATH/classes/Controller/Index.php [ 40 ] in /home/www/kohana/application/classes/Controller/Index.php:40
2013-05-14 18:05:34 --- DEBUG: #0 /home/www/kohana/application/classes/Controller/Index.php(40): Kohana_Core::error_handler(4096, 'Object of class...', '/home/www/kohan...', 40, Array)
#1 /home/www/kohana/system/classes/Kohana/Controller.php(84): Controller_Index->action_results()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/www/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#4 /home/www/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/www/kohana/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /home/www/kohana/index.php(118): Kohana_Request->execute()
#7 {main} in /home/www/kohana/application/classes/Controller/Index.php:40
2013-05-14 18:05:48 --- EMERGENCY: ErrorException [ 4096 ]: Object of class Database_MySQL_Result could not be converted to string ~ APPPATH/classes/Controller/Index.php [ 40 ] in /home/www/kohana/application/classes/Controller/Index.php:40
2013-05-14 18:05:48 --- DEBUG: #0 /home/www/kohana/application/classes/Controller/Index.php(40): Kohana_Core::error_handler(4096, 'Object of class...', '/home/www/kohan...', 40, Array)
#1 /home/www/kohana/system/classes/Kohana/Controller.php(84): Controller_Index->action_results()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/www/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#4 /home/www/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/www/kohana/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /home/www/kohana/index.php(118): Kohana_Request->execute()
#7 {main} in /home/www/kohana/application/classes/Controller/Index.php:40
2013-05-14 18:05:49 --- EMERGENCY: ErrorException [ 4096 ]: Object of class Database_MySQL_Result could not be converted to string ~ APPPATH/classes/Controller/Index.php [ 40 ] in /home/www/kohana/application/classes/Controller/Index.php:40
2013-05-14 18:05:49 --- DEBUG: #0 /home/www/kohana/application/classes/Controller/Index.php(40): Kohana_Core::error_handler(4096, 'Object of class...', '/home/www/kohan...', 40, Array)
#1 /home/www/kohana/system/classes/Kohana/Controller.php(84): Controller_Index->action_results()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/www/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#4 /home/www/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/www/kohana/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /home/www/kohana/index.php(118): Kohana_Request->execute()
#7 {main} in /home/www/kohana/application/classes/Controller/Index.php:40
2013-05-14 18:09:01 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Database_MySQL_Result::as_object() ~ APPPATH/classes/Model/Site.php [ 14 ] in :
2013-05-14 18:09:01 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-14 18:09:02 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Database_MySQL_Result::as_object() ~ APPPATH/classes/Model/Site.php [ 14 ] in :
2013-05-14 18:09:02 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-14 18:09:12 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Model_Site::find_all() ~ APPPATH/classes/Controller/Index.php [ 21 ] in :
2013-05-14 18:09:12 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-14 18:10:57 --- EMERGENCY: ErrorException [ 2 ]: mysql_data_seek() expects parameter 2 to be long, string given ~ MODPATH/database/classes/Kohana/Database/MySQL/Result.php [ 33 ] in :
2013-05-14 18:10:57 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'mysql_data_seek...', '/home/www/kohan...', 33, Array)
#1 /home/www/kohana/modules/database/classes/Kohana/Database/MySQL/Result.php(33): mysql_data_seek(Resource id #88, 'id')
#2 /home/www/kohana/modules/database/classes/Kohana/Database/Result.php(240): Kohana_Database_MySQL_Result->seek('id')
#3 /home/www/kohana/application/classes/Model/Site.php(16): Kohana_Database_Result->offsetGet('id')
#4 /home/www/kohana/application/classes/Controller/Index.php(40): Model_Site->get_orders()
#5 /home/www/kohana/system/classes/Kohana/Controller.php(84): Controller_Index->action_results()
#6 [internal function]: Kohana_Controller->execute()
#7 /home/www/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#8 /home/www/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /home/www/kohana/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 /home/www/kohana/index.php(118): Kohana_Request->execute()
#11 {main} in :
2013-05-14 18:11:06 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$id ~ APPPATH/classes/Model/Site.php [ 16 ] in /home/www/kohana/application/classes/Model/Site.php:16
2013-05-14 18:11:06 --- DEBUG: #0 /home/www/kohana/application/classes/Model/Site.php(16): Kohana_Core::error_handler(8, 'Undefined prope...', '/home/www/kohan...', 16, Array)
#1 /home/www/kohana/application/classes/Controller/Index.php(40): Model_Site->get_orders()
#2 /home/www/kohana/system/classes/Kohana/Controller.php(84): Controller_Index->action_results()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/www/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#5 /home/www/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/www/kohana/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /home/www/kohana/index.php(118): Kohana_Request->execute()
#8 {main} in /home/www/kohana/application/classes/Model/Site.php:16
2013-05-14 18:11:18 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$id ~ APPPATH/classes/Model/Site.php [ 16 ] in /home/www/kohana/application/classes/Model/Site.php:16
2013-05-14 18:11:18 --- DEBUG: #0 /home/www/kohana/application/classes/Model/Site.php(16): Kohana_Core::error_handler(8, 'Undefined prope...', '/home/www/kohan...', 16, Array)
#1 /home/www/kohana/application/classes/Controller/Index.php(40): Model_Site->get_orders()
#2 /home/www/kohana/system/classes/Kohana/Controller.php(84): Controller_Index->action_results()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/www/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#5 /home/www/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/www/kohana/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /home/www/kohana/index.php(118): Kohana_Request->execute()
#8 {main} in /home/www/kohana/application/classes/Model/Site.php:16
2013-05-14 18:13:07 --- EMERGENCY: ErrorException [ 2 ]: Missing argument 1 for Model_Site::get_orders(), called in /home/www/kohana/application/classes/Controller/Index.php on line 40 and defined ~ APPPATH/classes/Model/Site.php [ 6 ] in /home/www/kohana/application/classes/Model/Site.php:6
2013-05-14 18:13:07 --- DEBUG: #0 /home/www/kohana/application/classes/Model/Site.php(6): Kohana_Core::error_handler(2, 'Missing argumen...', '/home/www/kohan...', 6, Array)
#1 /home/www/kohana/application/classes/Controller/Index.php(40): Model_Site->get_orders()
#2 /home/www/kohana/system/classes/Kohana/Controller.php(84): Controller_Index->action_results()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/www/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#5 /home/www/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/www/kohana/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /home/www/kohana/index.php(118): Kohana_Request->execute()
#8 {main} in /home/www/kohana/application/classes/Model/Site.php:6
2013-05-14 18:13:08 --- EMERGENCY: ErrorException [ 2 ]: Missing argument 1 for Model_Site::get_orders(), called in /home/www/kohana/application/classes/Controller/Index.php on line 40 and defined ~ APPPATH/classes/Model/Site.php [ 6 ] in /home/www/kohana/application/classes/Model/Site.php:6
2013-05-14 18:13:08 --- DEBUG: #0 /home/www/kohana/application/classes/Model/Site.php(6): Kohana_Core::error_handler(2, 'Missing argumen...', '/home/www/kohan...', 6, Array)
#1 /home/www/kohana/application/classes/Controller/Index.php(40): Model_Site->get_orders()
#2 /home/www/kohana/system/classes/Kohana/Controller.php(84): Controller_Index->action_results()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/www/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#5 /home/www/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/www/kohana/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /home/www/kohana/index.php(118): Kohana_Request->execute()
#8 {main} in /home/www/kohana/application/classes/Model/Site.php:6
2013-05-14 18:14:13 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'orders.site.id' in 'where clause' [ SELECT * FROM `orders` WHERE `orders`.`site`.`id` = 4 ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /home/www/kohana/modules/database/classes/Kohana/Database/Query.php:251
2013-05-14 18:14:13 --- DEBUG: #0 /home/www/kohana/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false, Array)
#1 /home/www/kohana/application/classes/Model/Site.php(16): Kohana_Database_Query->execute()
#2 /home/www/kohana/application/classes/Controller/Index.php(40): Model_Site->get_orders(4)
#3 /home/www/kohana/system/classes/Kohana/Controller.php(84): Controller_Index->action_results()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/www/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#6 /home/www/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/www/kohana/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /home/www/kohana/index.php(118): Kohana_Request->execute()
#9 {main} in /home/www/kohana/modules/database/classes/Kohana/Database/Query.php:251
2013-05-14 18:16:03 --- EMERGENCY: Database_Exception [ 1066 ]: Not unique table/alias: 'sites' [ SELECT * FROM `sites` JOIN `users` ON (`orders`.`user_id` = `users`.`id`) JOIN `sites` ON (`sites`.`id` = `4`) WHERE `orders`.`site_id` = 4 ORDER BY `orders`.`id` DESC ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /home/www/kohana/modules/database/classes/Kohana/Database/Query.php:251
2013-05-14 18:16:03 --- DEBUG: #0 /home/www/kohana/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false, Array)
#1 /home/www/kohana/application/classes/Model/Site.php(15): Kohana_Database_Query->execute()
#2 /home/www/kohana/application/classes/Controller/Index.php(40): Model_Site->get_orders(4)
#3 /home/www/kohana/system/classes/Kohana/Controller.php(84): Controller_Index->action_results()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/www/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#6 /home/www/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/www/kohana/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /home/www/kohana/index.php(118): Kohana_Request->execute()
#9 {main} in /home/www/kohana/modules/database/classes/Kohana/Database/Query.php:251
2013-05-14 18:16:16 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'orders.site_id' in 'where clause' [ SELECT * FROM `sites` JOIN `users` ON (`orders`.`user_id` = `users`.`id`) WHERE `orders`.`site_id` = 4 ORDER BY `orders`.`id` DESC ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /home/www/kohana/modules/database/classes/Kohana/Database/Query.php:251
2013-05-14 18:16:16 --- DEBUG: #0 /home/www/kohana/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false, Array)
#1 /home/www/kohana/application/classes/Model/Site.php(13): Kohana_Database_Query->execute()
#2 /home/www/kohana/application/classes/Controller/Index.php(40): Model_Site->get_orders(4)
#3 /home/www/kohana/system/classes/Kohana/Controller.php(84): Controller_Index->action_results()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/www/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#6 /home/www/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/www/kohana/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /home/www/kohana/index.php(118): Kohana_Request->execute()
#9 {main} in /home/www/kohana/modules/database/classes/Kohana/Database/Query.php:251
2013-05-14 18:16:19 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'orders.site_id' in 'where clause' [ SELECT * FROM `sites` JOIN `users` ON (`orders`.`user_id` = `users`.`id`) WHERE `orders`.`site_id` = 4 ORDER BY `orders`.`id` DESC ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /home/www/kohana/modules/database/classes/Kohana/Database/Query.php:251
2013-05-14 18:16:19 --- DEBUG: #0 /home/www/kohana/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false, Array)
#1 /home/www/kohana/application/classes/Model/Site.php(13): Kohana_Database_Query->execute()
#2 /home/www/kohana/application/classes/Controller/Index.php(40): Model_Site->get_orders(4)
#3 /home/www/kohana/system/classes/Kohana/Controller.php(84): Controller_Index->action_results()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/www/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#6 /home/www/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/www/kohana/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /home/www/kohana/index.php(118): Kohana_Request->execute()
#9 {main} in /home/www/kohana/modules/database/classes/Kohana/Database/Query.php:251
2013-05-14 18:17:36 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column '4' in 'on clause' [ SELECT * FROM `orders` JOIN `users` ON (`orders`.`user_id` = `users`.`id`) JOIN `sites` ON (`sites`.`id` = `4`) WHERE `orders`.`site_id` = 4 ORDER BY `orders`.`id` DESC ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /home/www/kohana/modules/database/classes/Kohana/Database/Query.php:251
2013-05-14 18:17:36 --- DEBUG: #0 /home/www/kohana/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false, Array)
#1 /home/www/kohana/application/classes/Model/Site.php(15): Kohana_Database_Query->execute()
#2 /home/www/kohana/application/classes/Controller/Index.php(40): Model_Site->get_orders(4)
#3 /home/www/kohana/system/classes/Kohana/Controller.php(84): Controller_Index->action_results()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/www/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#6 /home/www/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/www/kohana/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /home/www/kohana/index.php(118): Kohana_Request->execute()
#9 {main} in /home/www/kohana/modules/database/classes/Kohana/Database/Query.php:251
2013-05-14 18:17:48 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column '4' in 'on clause' [ SELECT * FROM `orders` JOIN `sites` ON (`sites`.`id` = `4`) WHERE `orders`.`site_id` = 4 ORDER BY `orders`.`id` DESC ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /home/www/kohana/modules/database/classes/Kohana/Database/Query.php:251
2013-05-14 18:17:48 --- DEBUG: #0 /home/www/kohana/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false, Array)
#1 /home/www/kohana/application/classes/Model/Site.php(15): Kohana_Database_Query->execute()
#2 /home/www/kohana/application/classes/Controller/Index.php(40): Model_Site->get_orders(4)
#3 /home/www/kohana/system/classes/Kohana/Controller.php(84): Controller_Index->action_results()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/www/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#6 /home/www/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/www/kohana/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /home/www/kohana/index.php(118): Kohana_Request->execute()
#9 {main} in /home/www/kohana/modules/database/classes/Kohana/Database/Query.php:251
2013-05-14 18:17:48 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column '4' in 'on clause' [ SELECT * FROM `orders` JOIN `sites` ON (`sites`.`id` = `4`) WHERE `orders`.`site_id` = 4 ORDER BY `orders`.`id` DESC ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /home/www/kohana/modules/database/classes/Kohana/Database/Query.php:251
2013-05-14 18:17:48 --- DEBUG: #0 /home/www/kohana/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false, Array)
#1 /home/www/kohana/application/classes/Model/Site.php(15): Kohana_Database_Query->execute()
#2 /home/www/kohana/application/classes/Controller/Index.php(40): Model_Site->get_orders(4)
#3 /home/www/kohana/system/classes/Kohana/Controller.php(84): Controller_Index->action_results()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/www/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#6 /home/www/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/www/kohana/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /home/www/kohana/index.php(118): Kohana_Request->execute()
#9 {main} in /home/www/kohana/modules/database/classes/Kohana/Database/Query.php:251
2013-05-14 18:18:23 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column '4' in 'on clause' [ SELECT * FROM `orders` JOIN `sites` ON (`sites`.`id` = `4`) WHERE `orders`.`site_id` = 4 ORDER BY `orders`.`id` DESC ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /home/www/kohana/modules/database/classes/Kohana/Database/Query.php:251
2013-05-14 18:18:23 --- DEBUG: #0 /home/www/kohana/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false, Array)
#1 /home/www/kohana/application/classes/Model/Site.php(14): Kohana_Database_Query->execute()
#2 /home/www/kohana/application/classes/Controller/Index.php(40): Model_Site->get_orders(4)
#3 /home/www/kohana/system/classes/Kohana/Controller.php(84): Controller_Index->action_results()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/www/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#6 /home/www/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/www/kohana/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /home/www/kohana/index.php(118): Kohana_Request->execute()
#9 {main} in /home/www/kohana/modules/database/classes/Kohana/Database/Query.php:251
2013-05-14 18:18:24 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column '4' in 'on clause' [ SELECT * FROM `orders` JOIN `sites` ON (`sites`.`id` = `4`) WHERE `orders`.`site_id` = 4 ORDER BY `orders`.`id` DESC ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /home/www/kohana/modules/database/classes/Kohana/Database/Query.php:251
2013-05-14 18:18:24 --- DEBUG: #0 /home/www/kohana/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false, Array)
#1 /home/www/kohana/application/classes/Model/Site.php(14): Kohana_Database_Query->execute()
#2 /home/www/kohana/application/classes/Controller/Index.php(40): Model_Site->get_orders(4)
#3 /home/www/kohana/system/classes/Kohana/Controller.php(84): Controller_Index->action_results()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/www/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#6 /home/www/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/www/kohana/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /home/www/kohana/index.php(118): Kohana_Request->execute()
#9 {main} in /home/www/kohana/modules/database/classes/Kohana/Database/Query.php:251
2013-05-14 18:20:32 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Database_MySQL_Result::fetch_assoc() ~ APPPATH/classes/Model/Site.php [ 15 ] in :
2013-05-14 18:20:32 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-14 18:21:51 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Database_MySQL_Result::fetch_assoc() ~ APPPATH/classes/Model/Site.php [ 15 ] in :
2013-05-14 18:21:51 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-14 18:23:48 --- EMERGENCY: ErrorException [ 8 ]: Object of class Database_MySQL_Result could not be converted to int ~ APPPATH/classes/Controller/Index.php [ 40 ] in /home/www/kohana/application/classes/Controller/Index.php:40
2013-05-14 18:23:48 --- DEBUG: #0 /home/www/kohana/application/classes/Controller/Index.php(40): Kohana_Core::error_handler(8, 'Object of class...', '/home/www/kohan...', 40, Array)
#1 /home/www/kohana/system/classes/Kohana/Controller.php(84): Controller_Index->action_results()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/www/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#4 /home/www/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/www/kohana/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /home/www/kohana/index.php(118): Kohana_Request->execute()
#7 {main} in /home/www/kohana/application/classes/Controller/Index.php:40
2013-05-14 18:24:34 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function on() on a non-object ~ MODPATH/database/classes/Kohana/Database/Query/Builder/Select.php [ 138 ] in :
2013-05-14 18:24:34 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-14 18:24:57 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column '4' in 'on clause' [ SELECT * FROM `orders` JOIN `sites` ON (`sites`.`id` = `4`) WHERE `orders`.`site_id` = 4 ORDER BY `orders`.`id` DESC ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /home/www/kohana/modules/database/classes/Kohana/Database/Query.php:251
2013-05-14 18:24:57 --- DEBUG: #0 /home/www/kohana/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false, Array)
#1 /home/www/kohana/application/classes/Model/Site.php(14): Kohana_Database_Query->execute()
#2 /home/www/kohana/application/classes/Controller/Index.php(40): Model_Site->get_orders(4)
#3 /home/www/kohana/system/classes/Kohana/Controller.php(84): Controller_Index->action_results()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/www/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#6 /home/www/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/www/kohana/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /home/www/kohana/index.php(118): Kohana_Request->execute()
#9 {main} in /home/www/kohana/modules/database/classes/Kohana/Database/Query.php:251
2013-05-14 18:25:15 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column '4' in 'on clause' [ SELECT * FROM `orders` JOIN `sites` ON (`sites`.`id` = `4`) WHERE `orders`.`site_id` = 4 ORDER BY `orders`.`id` DESC ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /home/www/kohana/modules/database/classes/Kohana/Database/Query.php:251
2013-05-14 18:25:15 --- DEBUG: #0 /home/www/kohana/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false, Array)
#1 /home/www/kohana/application/classes/Model/Site.php(15): Kohana_Database_Query->execute()
#2 /home/www/kohana/application/classes/Controller/Index.php(40): Model_Site->get_orders(4)
#3 /home/www/kohana/system/classes/Kohana/Controller.php(84): Controller_Index->action_results()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/www/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#6 /home/www/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/www/kohana/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /home/www/kohana/index.php(118): Kohana_Request->execute()
#9 {main} in /home/www/kohana/modules/database/classes/Kohana/Database/Query.php:251
2013-05-14 18:25:16 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column '4' in 'on clause' [ SELECT * FROM `orders` JOIN `sites` ON (`sites`.`id` = `4`) WHERE `orders`.`site_id` = 4 ORDER BY `orders`.`id` DESC ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /home/www/kohana/modules/database/classes/Kohana/Database/Query.php:251
2013-05-14 18:25:16 --- DEBUG: #0 /home/www/kohana/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false, Array)
#1 /home/www/kohana/application/classes/Model/Site.php(15): Kohana_Database_Query->execute()
#2 /home/www/kohana/application/classes/Controller/Index.php(40): Model_Site->get_orders(4)
#3 /home/www/kohana/system/classes/Kohana/Controller.php(84): Controller_Index->action_results()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/www/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#6 /home/www/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/www/kohana/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /home/www/kohana/index.php(118): Kohana_Request->execute()
#9 {main} in /home/www/kohana/modules/database/classes/Kohana/Database/Query.php:251
2013-05-14 18:25:16 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column '4' in 'on clause' [ SELECT * FROM `orders` JOIN `sites` ON (`sites`.`id` = `4`) WHERE `orders`.`site_id` = 4 ORDER BY `orders`.`id` DESC ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /home/www/kohana/modules/database/classes/Kohana/Database/Query.php:251
2013-05-14 18:25:16 --- DEBUG: #0 /home/www/kohana/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false, Array)
#1 /home/www/kohana/application/classes/Model/Site.php(15): Kohana_Database_Query->execute()
#2 /home/www/kohana/application/classes/Controller/Index.php(40): Model_Site->get_orders(4)
#3 /home/www/kohana/system/classes/Kohana/Controller.php(84): Controller_Index->action_results()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/www/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#6 /home/www/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/www/kohana/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /home/www/kohana/index.php(118): Kohana_Request->execute()
#9 {main} in /home/www/kohana/modules/database/classes/Kohana/Database/Query.php:251
2013-05-14 18:25:16 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column '4' in 'on clause' [ SELECT * FROM `orders` JOIN `sites` ON (`sites`.`id` = `4`) WHERE `orders`.`site_id` = 4 ORDER BY `orders`.`id` DESC ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /home/www/kohana/modules/database/classes/Kohana/Database/Query.php:251
2013-05-14 18:25:16 --- DEBUG: #0 /home/www/kohana/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false, Array)
#1 /home/www/kohana/application/classes/Model/Site.php(15): Kohana_Database_Query->execute()
#2 /home/www/kohana/application/classes/Controller/Index.php(40): Model_Site->get_orders(4)
#3 /home/www/kohana/system/classes/Kohana/Controller.php(84): Controller_Index->action_results()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/www/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#6 /home/www/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/www/kohana/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /home/www/kohana/index.php(118): Kohana_Request->execute()
#9 {main} in /home/www/kohana/modules/database/classes/Kohana/Database/Query.php:251
2013-05-14 18:25:17 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column '4' in 'on clause' [ SELECT * FROM `orders` JOIN `sites` ON (`sites`.`id` = `4`) WHERE `orders`.`site_id` = 4 ORDER BY `orders`.`id` DESC ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /home/www/kohana/modules/database/classes/Kohana/Database/Query.php:251
2013-05-14 18:25:17 --- DEBUG: #0 /home/www/kohana/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false, Array)
#1 /home/www/kohana/application/classes/Model/Site.php(15): Kohana_Database_Query->execute()
#2 /home/www/kohana/application/classes/Controller/Index.php(40): Model_Site->get_orders(4)
#3 /home/www/kohana/system/classes/Kohana/Controller.php(84): Controller_Index->action_results()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/www/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#6 /home/www/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/www/kohana/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /home/www/kohana/index.php(118): Kohana_Request->execute()
#9 {main} in /home/www/kohana/modules/database/classes/Kohana/Database/Query.php:251
2013-05-14 18:25:17 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column '4' in 'on clause' [ SELECT * FROM `orders` JOIN `sites` ON (`sites`.`id` = `4`) WHERE `orders`.`site_id` = 4 ORDER BY `orders`.`id` DESC ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /home/www/kohana/modules/database/classes/Kohana/Database/Query.php:251
2013-05-14 18:25:17 --- DEBUG: #0 /home/www/kohana/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false, Array)
#1 /home/www/kohana/application/classes/Model/Site.php(15): Kohana_Database_Query->execute()
#2 /home/www/kohana/application/classes/Controller/Index.php(40): Model_Site->get_orders(4)
#3 /home/www/kohana/system/classes/Kohana/Controller.php(84): Controller_Index->action_results()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/www/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#6 /home/www/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/www/kohana/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /home/www/kohana/index.php(118): Kohana_Request->execute()
#9 {main} in /home/www/kohana/modules/database/classes/Kohana/Database/Query.php:251
2013-05-14 18:26:32 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'users.id' in 'on clause' [ SELECT * FROM `orders` JOIN `order_users` ON (`orders`.`user_id` = `users`.`id`) WHERE `orders`.`site_id` = 4 ORDER BY `orders`.`id` DESC ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /home/www/kohana/modules/database/classes/Kohana/Database/Query.php:251
2013-05-14 18:26:32 --- DEBUG: #0 /home/www/kohana/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false, Array)
#1 /home/www/kohana/application/classes/Model/Site.php(14): Kohana_Database_Query->execute()
#2 /home/www/kohana/application/classes/Controller/Index.php(40): Model_Site->get_orders(4)
#3 /home/www/kohana/system/classes/Kohana/Controller.php(84): Controller_Index->action_results()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/www/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#6 /home/www/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/www/kohana/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /home/www/kohana/index.php(118): Kohana_Request->execute()
#9 {main} in /home/www/kohana/modules/database/classes/Kohana/Database/Query.php:251
2013-05-14 18:27:13 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column '4' in 'on clause' [ SELECT * FROM `orders` JOIN `order_users` ON (`orders`.`user_id` = `order_users`.`id`) JOIN `sites` ON (`sites`.`id` = `4`) WHERE `orders`.`site_id` = 4 ORDER BY `orders`.`id` DESC ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /home/www/kohana/modules/database/classes/Kohana/Database/Query.php:251
2013-05-14 18:27:13 --- DEBUG: #0 /home/www/kohana/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false, Array)
#1 /home/www/kohana/application/classes/Model/Site.php(14): Kohana_Database_Query->execute()
#2 /home/www/kohana/application/classes/Controller/Index.php(40): Model_Site->get_orders(4)
#3 /home/www/kohana/system/classes/Kohana/Controller.php(84): Controller_Index->action_results()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/www/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#6 /home/www/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/www/kohana/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /home/www/kohana/index.php(118): Kohana_Request->execute()
#9 {main} in /home/www/kohana/modules/database/classes/Kohana/Database/Query.php:251
2013-05-14 18:28:11 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column '4' in 'on clause' [ SELECT * FROM `orders` JOIN `order_users` ON (`orders`.`user_id` = `order_users`.`id`) JOIN `sites` ON (`sites`.`id` = `4`) WHERE `orders`.`site_id` = 4 ORDER BY `orders`.`id` DESC ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /home/www/kohana/modules/database/classes/Kohana/Database/Query.php:251
2013-05-14 18:28:11 --- DEBUG: #0 /home/www/kohana/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false, Array)
#1 /home/www/kohana/application/classes/Model/Order.php(13): Kohana_Database_Query->execute()
#2 /home/www/kohana/application/classes/Controller/Index.php(40): Model_Order->get_orders(4)
#3 /home/www/kohana/system/classes/Kohana/Controller.php(84): Controller_Index->action_results()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/www/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#6 /home/www/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/www/kohana/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /home/www/kohana/index.php(118): Kohana_Request->execute()
#9 {main} in /home/www/kohana/modules/database/classes/Kohana/Database/Query.php:251
2013-05-14 18:28:12 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column '4' in 'on clause' [ SELECT * FROM `orders` JOIN `order_users` ON (`orders`.`user_id` = `order_users`.`id`) JOIN `sites` ON (`sites`.`id` = `4`) WHERE `orders`.`site_id` = 4 ORDER BY `orders`.`id` DESC ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /home/www/kohana/modules/database/classes/Kohana/Database/Query.php:251
2013-05-14 18:28:12 --- DEBUG: #0 /home/www/kohana/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false, Array)
#1 /home/www/kohana/application/classes/Model/Order.php(13): Kohana_Database_Query->execute()
#2 /home/www/kohana/application/classes/Controller/Index.php(40): Model_Order->get_orders(4)
#3 /home/www/kohana/system/classes/Kohana/Controller.php(84): Controller_Index->action_results()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/www/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#6 /home/www/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/www/kohana/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /home/www/kohana/index.php(118): Kohana_Request->execute()
#9 {main} in /home/www/kohana/modules/database/classes/Kohana/Database/Query.php:251
2013-05-14 18:28:18 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column '4' in 'on clause' [ SELECT * FROM `orders` JOIN `order_users` ON (`orders`.`user_id` = `order_users`.`id`) JOIN `sites` ON (`sites`.`id` = `4`) WHERE `orders`.`site_id` = 4 ORDER BY `orders`.`id` DESC ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /home/www/kohana/modules/database/classes/Kohana/Database/Query.php:251
2013-05-14 18:28:18 --- DEBUG: #0 /home/www/kohana/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false, Array)
#1 /home/www/kohana/application/classes/Model/Order.php(13): Kohana_Database_Query->execute()
#2 /home/www/kohana/application/classes/Controller/Index.php(40): Model_Order->get_orders(4)
#3 /home/www/kohana/system/classes/Kohana/Controller.php(84): Controller_Index->action_results()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/www/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#6 /home/www/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/www/kohana/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /home/www/kohana/index.php(118): Kohana_Request->execute()
#9 {main} in /home/www/kohana/modules/database/classes/Kohana/Database/Query.php:251
2013-05-14 18:35:22 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'ordersd.id' in 'order clause' [ SELECT * FROM `orders` LEFT JOIN `order_users` ON (`orders`.`user_id` = `order_users`.`id`) WHERE `orders`.`site_id` = 4 ORDER BY `ordersd`.`id` DESC ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /home/www/kohana/modules/database/classes/Kohana/Database/Query.php:251
2013-05-14 18:35:22 --- DEBUG: #0 /home/www/kohana/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false, Array)
#1 /home/www/kohana/application/classes/Model/Order.php(13): Kohana_Database_Query->execute()
#2 /home/www/kohana/application/classes/Controller/Index.php(40): Model_Order->get_orders(4)
#3 /home/www/kohana/system/classes/Kohana/Controller.php(84): Controller_Index->action_results()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/www/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#6 /home/www/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/www/kohana/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /home/www/kohana/index.php(118): Kohana_Request->execute()
#9 {main} in /home/www/kohana/modules/database/classes/Kohana/Database/Query.php:251
2013-05-14 18:35:23 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'ordersd.id' in 'order clause' [ SELECT * FROM `orders` LEFT JOIN `order_users` ON (`orders`.`user_id` = `order_users`.`id`) WHERE `orders`.`site_id` = 4 ORDER BY `ordersd`.`id` DESC ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /home/www/kohana/modules/database/classes/Kohana/Database/Query.php:251
2013-05-14 18:35:23 --- DEBUG: #0 /home/www/kohana/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false, Array)
#1 /home/www/kohana/application/classes/Model/Order.php(13): Kohana_Database_Query->execute()
#2 /home/www/kohana/application/classes/Controller/Index.php(40): Model_Order->get_orders(4)
#3 /home/www/kohana/system/classes/Kohana/Controller.php(84): Controller_Index->action_results()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/www/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#6 /home/www/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/www/kohana/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /home/www/kohana/index.php(118): Kohana_Request->execute()
#9 {main} in /home/www/kohana/modules/database/classes/Kohana/Database/Query.php:251
2013-05-14 18:35:30 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'ordersd.id' in 'order clause' [ SELECT * FROM `orders` LEFT JOIN `order_users` ON (`orders`.`user_id` = `order_users`.`id`) WHERE `orders`.`site_id` = 4 ORDER BY `ordersd`.`id` DESC ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /home/www/kohana/modules/database/classes/Kohana/Database/Query.php:251
2013-05-14 18:35:30 --- DEBUG: #0 /home/www/kohana/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false, Array)
#1 /home/www/kohana/application/classes/Model/Order.php(13): Kohana_Database_Query->execute()
#2 /home/www/kohana/application/classes/Controller/Index.php(40): Model_Order->get_orders(4)
#3 /home/www/kohana/system/classes/Kohana/Controller.php(84): Controller_Index->action_results()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/www/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#6 /home/www/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/www/kohana/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /home/www/kohana/index.php(118): Kohana_Request->execute()
#9 {main} in /home/www/kohana/modules/database/classes/Kohana/Database/Query.php:251
2013-05-14 18:36:40 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column '4' in 'on clause' [ SELECT * FROM `orders` JOIN `sites` ON (`sites`.`id` = `4`) WHERE `orders`.`site_id` = 4 ORDER BY `orders`.`id` DESC ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /home/www/kohana/modules/database/classes/Kohana/Database/Query.php:251
2013-05-14 18:36:40 --- DEBUG: #0 /home/www/kohana/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false, Array)
#1 /home/www/kohana/application/classes/Model/Order.php(13): Kohana_Database_Query->execute()
#2 /home/www/kohana/application/classes/Controller/Index.php(40): Model_Order->get_orders(4)
#3 /home/www/kohana/system/classes/Kohana/Controller.php(84): Controller_Index->action_results()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/www/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#6 /home/www/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/www/kohana/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /home/www/kohana/index.php(118): Kohana_Request->execute()
#9 {main} in /home/www/kohana/modules/database/classes/Kohana/Database/Query.php:251
2013-05-14 18:37:12 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column '4' in 'on clause' [ SELECT * FROM `orders` LEFT JOIN `sites` ON (`sites`.`id` = `4`) WHERE `orders`.`site_id` = 4 ORDER BY `orders`.`id` DESC ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /home/www/kohana/modules/database/classes/Kohana/Database/Query.php:251
2013-05-14 18:37:12 --- DEBUG: #0 /home/www/kohana/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false, Array)
#1 /home/www/kohana/application/classes/Model/Order.php(13): Kohana_Database_Query->execute()
#2 /home/www/kohana/application/classes/Controller/Index.php(40): Model_Order->get_orders(4)
#3 /home/www/kohana/system/classes/Kohana/Controller.php(84): Controller_Index->action_results()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/www/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#6 /home/www/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/www/kohana/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /home/www/kohana/index.php(118): Kohana_Request->execute()
#9 {main} in /home/www/kohana/modules/database/classes/Kohana/Database/Query.php:251
2013-05-14 18:37:13 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column '4' in 'on clause' [ SELECT * FROM `orders` LEFT JOIN `sites` ON (`sites`.`id` = `4`) WHERE `orders`.`site_id` = 4 ORDER BY `orders`.`id` DESC ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /home/www/kohana/modules/database/classes/Kohana/Database/Query.php:251
2013-05-14 18:37:13 --- DEBUG: #0 /home/www/kohana/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false, Array)
#1 /home/www/kohana/application/classes/Model/Order.php(13): Kohana_Database_Query->execute()
#2 /home/www/kohana/application/classes/Controller/Index.php(40): Model_Order->get_orders(4)
#3 /home/www/kohana/system/classes/Kohana/Controller.php(84): Controller_Index->action_results()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/www/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#6 /home/www/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/www/kohana/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /home/www/kohana/index.php(118): Kohana_Request->execute()
#9 {main} in /home/www/kohana/modules/database/classes/Kohana/Database/Query.php:251