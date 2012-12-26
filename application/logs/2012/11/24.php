<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2012-11-24 02:26:06 --- ERROR: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH/classes/controller/admin.php [ 28 ]
2012-11-24 02:26:06 --- STRACE: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH/classes/controller/admin.php [ 28 ]
--
#0 /home/msudhanshu/test/gyanikaunserver/application/classes/controller/admin.php(28): Kohana_Core::error_handler(2048, 'Creating defaul...', '/home/msudhansh...', 28, Array)
#1 [internal function]: Controller_Admin->action_index()
#2 /home/msudhanshu/test/gyanikaunserver/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin))
#3 /home/msudhanshu/test/gyanikaunserver/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /home/msudhanshu/test/gyanikaunserver/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /home/msudhanshu/test/gyanikaunserver/index.php(109): Kohana_Request->execute()
#6 {main}
2012-11-24 02:29:06 --- ERROR: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH/classes/controller/admin.php [ 69 ]
2012-11-24 02:29:06 --- STRACE: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH/classes/controller/admin.php [ 69 ]
--
#0 /home/msudhanshu/test/gyanikaunserver/application/classes/controller/admin.php(69): Kohana_Core::error_handler(2, 'Attempt to assi...', '/home/msudhansh...', 69, Array)
#1 [internal function]: Controller_Admin->action_sync()
#2 /home/msudhanshu/test/gyanikaunserver/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin))
#3 /home/msudhanshu/test/gyanikaunserver/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /home/msudhanshu/test/gyanikaunserver/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /home/msudhanshu/test/gyanikaunserver/index.php(109): Kohana_Request->execute()
#6 {main}
2012-11-24 02:30:21 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '=' ~ APPPATH/classes/controller/admin.php [ 66 ]
2012-11-24 02:30:21 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '=' ~ APPPATH/classes/controller/admin.php [ 66 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-11-24 02:30:23 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '=' ~ APPPATH/classes/controller/admin.php [ 66 ]
2012-11-24 02:30:23 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '=' ~ APPPATH/classes/controller/admin.php [ 66 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-11-24 02:30:24 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '=' ~ APPPATH/classes/controller/admin.php [ 66 ]
2012-11-24 02:30:24 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '=' ~ APPPATH/classes/controller/admin.php [ 66 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-11-24 02:30:28 --- ERROR: ErrorException [ 1 ]: Class 'Model_AssetCategory' not found ~ APPPATH/classes/controller/admin.php [ 69 ]
2012-11-24 02:30:28 --- STRACE: ErrorException [ 1 ]: Class 'Model_AssetCategory' not found ~ APPPATH/classes/controller/admin.php [ 69 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-11-24 02:32:35 --- ERROR: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH/classes/controller/admin.php [ 67 ]
2012-11-24 02:32:35 --- STRACE: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH/classes/controller/admin.php [ 67 ]
--
#0 /home/msudhanshu/test/gyanikaunserver/application/classes/controller/admin.php(67): Kohana_Core::error_handler(2, 'Attempt to assi...', '/home/msudhansh...', 67, Array)
#1 [internal function]: Controller_Admin->action_sync()
#2 /home/msudhanshu/test/gyanikaunserver/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin))
#3 /home/msudhanshu/test/gyanikaunserver/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /home/msudhanshu/test/gyanikaunserver/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /home/msudhanshu/test/gyanikaunserver/index.php(109): Kohana_Request->execute()
#6 {main}
2012-11-24 02:32:36 --- ERROR: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH/classes/controller/admin.php [ 67 ]
2012-11-24 02:32:36 --- STRACE: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH/classes/controller/admin.php [ 67 ]
--
#0 /home/msudhanshu/test/gyanikaunserver/application/classes/controller/admin.php(67): Kohana_Core::error_handler(2, 'Attempt to assi...', '/home/msudhansh...', 67, Array)
#1 [internal function]: Controller_Admin->action_sync()
#2 /home/msudhanshu/test/gyanikaunserver/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin))
#3 /home/msudhanshu/test/gyanikaunserver/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /home/msudhanshu/test/gyanikaunserver/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /home/msudhanshu/test/gyanikaunserver/index.php(109): Kohana_Request->execute()
#6 {main}
2012-11-24 02:32:37 --- ERROR: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH/classes/controller/admin.php [ 67 ]
2012-11-24 02:32:37 --- STRACE: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH/classes/controller/admin.php [ 67 ]
--
#0 /home/msudhanshu/test/gyanikaunserver/application/classes/controller/admin.php(67): Kohana_Core::error_handler(2, 'Attempt to assi...', '/home/msudhansh...', 67, Array)
#1 [internal function]: Controller_Admin->action_sync()
#2 /home/msudhanshu/test/gyanikaunserver/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin))
#3 /home/msudhanshu/test/gyanikaunserver/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /home/msudhanshu/test/gyanikaunserver/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /home/msudhanshu/test/gyanikaunserver/index.php(109): Kohana_Request->execute()
#6 {main}
2012-11-24 02:32:37 --- ERROR: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH/classes/controller/admin.php [ 67 ]
2012-11-24 02:32:37 --- STRACE: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH/classes/controller/admin.php [ 67 ]
--
#0 /home/msudhanshu/test/gyanikaunserver/application/classes/controller/admin.php(67): Kohana_Core::error_handler(2, 'Attempt to assi...', '/home/msudhansh...', 67, Array)
#1 [internal function]: Controller_Admin->action_sync()
#2 /home/msudhanshu/test/gyanikaunserver/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin))
#3 /home/msudhanshu/test/gyanikaunserver/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /home/msudhanshu/test/gyanikaunserver/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /home/msudhanshu/test/gyanikaunserver/index.php(109): Kohana_Request->execute()
#6 {main}
2012-11-24 02:32:37 --- ERROR: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH/classes/controller/admin.php [ 67 ]
2012-11-24 02:32:37 --- STRACE: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH/classes/controller/admin.php [ 67 ]
--
#0 /home/msudhanshu/test/gyanikaunserver/application/classes/controller/admin.php(67): Kohana_Core::error_handler(2, 'Attempt to assi...', '/home/msudhansh...', 67, Array)
#1 [internal function]: Controller_Admin->action_sync()
#2 /home/msudhanshu/test/gyanikaunserver/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin))
#3 /home/msudhanshu/test/gyanikaunserver/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /home/msudhanshu/test/gyanikaunserver/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /home/msudhanshu/test/gyanikaunserver/index.php(109): Kohana_Request->execute()
#6 {main}
2012-11-24 02:32:37 --- ERROR: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH/classes/controller/admin.php [ 67 ]
2012-11-24 02:32:37 --- STRACE: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH/classes/controller/admin.php [ 67 ]
--
#0 /home/msudhanshu/test/gyanikaunserver/application/classes/controller/admin.php(67): Kohana_Core::error_handler(2, 'Attempt to assi...', '/home/msudhansh...', 67, Array)
#1 [internal function]: Controller_Admin->action_sync()
#2 /home/msudhanshu/test/gyanikaunserver/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin))
#3 /home/msudhanshu/test/gyanikaunserver/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /home/msudhanshu/test/gyanikaunserver/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /home/msudhanshu/test/gyanikaunserver/index.php(109): Kohana_Request->execute()
#6 {main}
2012-11-24 02:32:37 --- ERROR: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH/classes/controller/admin.php [ 67 ]
2012-11-24 02:32:37 --- STRACE: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH/classes/controller/admin.php [ 67 ]
--
#0 /home/msudhanshu/test/gyanikaunserver/application/classes/controller/admin.php(67): Kohana_Core::error_handler(2, 'Attempt to assi...', '/home/msudhansh...', 67, Array)
#1 [internal function]: Controller_Admin->action_sync()
#2 /home/msudhanshu/test/gyanikaunserver/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin))
#3 /home/msudhanshu/test/gyanikaunserver/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /home/msudhanshu/test/gyanikaunserver/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /home/msudhanshu/test/gyanikaunserver/index.php(109): Kohana_Request->execute()
#6 {main}
2012-11-24 02:32:44 --- ERROR: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH/classes/controller/admin.php [ 66 ]
2012-11-24 02:32:44 --- STRACE: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH/classes/controller/admin.php [ 66 ]
--
#0 /home/msudhanshu/test/gyanikaunserver/application/classes/controller/admin.php(66): Kohana_Core::error_handler(2, 'Attempt to assi...', '/home/msudhansh...', 66, Array)
#1 [internal function]: Controller_Admin->action_sync()
#2 /home/msudhanshu/test/gyanikaunserver/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin))
#3 /home/msudhanshu/test/gyanikaunserver/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /home/msudhanshu/test/gyanikaunserver/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /home/msudhanshu/test/gyanikaunserver/index.php(109): Kohana_Request->execute()
#6 {main}
2012-11-24 02:32:45 --- ERROR: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH/classes/controller/admin.php [ 66 ]
2012-11-24 02:32:45 --- STRACE: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH/classes/controller/admin.php [ 66 ]
--
#0 /home/msudhanshu/test/gyanikaunserver/application/classes/controller/admin.php(66): Kohana_Core::error_handler(2, 'Attempt to assi...', '/home/msudhansh...', 66, Array)
#1 [internal function]: Controller_Admin->action_sync()
#2 /home/msudhanshu/test/gyanikaunserver/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin))
#3 /home/msudhanshu/test/gyanikaunserver/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /home/msudhanshu/test/gyanikaunserver/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /home/msudhanshu/test/gyanikaunserver/index.php(109): Kohana_Request->execute()
#6 {main}
2012-11-24 02:32:45 --- ERROR: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH/classes/controller/admin.php [ 66 ]
2012-11-24 02:32:45 --- STRACE: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH/classes/controller/admin.php [ 66 ]
--
#0 /home/msudhanshu/test/gyanikaunserver/application/classes/controller/admin.php(66): Kohana_Core::error_handler(2, 'Attempt to assi...', '/home/msudhansh...', 66, Array)
#1 [internal function]: Controller_Admin->action_sync()
#2 /home/msudhanshu/test/gyanikaunserver/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin))
#3 /home/msudhanshu/test/gyanikaunserver/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /home/msudhanshu/test/gyanikaunserver/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /home/msudhanshu/test/gyanikaunserver/index.php(109): Kohana_Request->execute()
#6 {main}
2012-11-24 02:32:45 --- ERROR: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH/classes/controller/admin.php [ 66 ]
2012-11-24 02:32:45 --- STRACE: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH/classes/controller/admin.php [ 66 ]
--
#0 /home/msudhanshu/test/gyanikaunserver/application/classes/controller/admin.php(66): Kohana_Core::error_handler(2, 'Attempt to assi...', '/home/msudhansh...', 66, Array)
#1 [internal function]: Controller_Admin->action_sync()
#2 /home/msudhanshu/test/gyanikaunserver/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin))
#3 /home/msudhanshu/test/gyanikaunserver/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /home/msudhanshu/test/gyanikaunserver/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /home/msudhanshu/test/gyanikaunserver/index.php(109): Kohana_Request->execute()
#6 {main}
2012-11-24 02:32:45 --- ERROR: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH/classes/controller/admin.php [ 66 ]
2012-11-24 02:32:45 --- STRACE: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH/classes/controller/admin.php [ 66 ]
--
#0 /home/msudhanshu/test/gyanikaunserver/application/classes/controller/admin.php(66): Kohana_Core::error_handler(2, 'Attempt to assi...', '/home/msudhansh...', 66, Array)
#1 [internal function]: Controller_Admin->action_sync()
#2 /home/msudhanshu/test/gyanikaunserver/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin))
#3 /home/msudhanshu/test/gyanikaunserver/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /home/msudhanshu/test/gyanikaunserver/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /home/msudhanshu/test/gyanikaunserver/index.php(109): Kohana_Request->execute()
#6 {main}
2012-11-24 02:32:45 --- ERROR: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH/classes/controller/admin.php [ 66 ]
2012-11-24 02:32:45 --- STRACE: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH/classes/controller/admin.php [ 66 ]
--
#0 /home/msudhanshu/test/gyanikaunserver/application/classes/controller/admin.php(66): Kohana_Core::error_handler(2, 'Attempt to assi...', '/home/msudhansh...', 66, Array)
#1 [internal function]: Controller_Admin->action_sync()
#2 /home/msudhanshu/test/gyanikaunserver/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin))
#3 /home/msudhanshu/test/gyanikaunserver/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /home/msudhanshu/test/gyanikaunserver/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /home/msudhanshu/test/gyanikaunserver/index.php(109): Kohana_Request->execute()
#6 {main}
2012-11-24 02:32:45 --- ERROR: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH/classes/controller/admin.php [ 66 ]
2012-11-24 02:32:45 --- STRACE: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH/classes/controller/admin.php [ 66 ]
--
#0 /home/msudhanshu/test/gyanikaunserver/application/classes/controller/admin.php(66): Kohana_Core::error_handler(2, 'Attempt to assi...', '/home/msudhansh...', 66, Array)
#1 [internal function]: Controller_Admin->action_sync()
#2 /home/msudhanshu/test/gyanikaunserver/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin))
#3 /home/msudhanshu/test/gyanikaunserver/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /home/msudhanshu/test/gyanikaunserver/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /home/msudhanshu/test/gyanikaunserver/index.php(109): Kohana_Request->execute()
#6 {main}
2012-11-24 02:32:46 --- ERROR: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH/classes/controller/admin.php [ 66 ]
2012-11-24 02:32:46 --- STRACE: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH/classes/controller/admin.php [ 66 ]
--
#0 /home/msudhanshu/test/gyanikaunserver/application/classes/controller/admin.php(66): Kohana_Core::error_handler(2, 'Attempt to assi...', '/home/msudhansh...', 66, Array)
#1 [internal function]: Controller_Admin->action_sync()
#2 /home/msudhanshu/test/gyanikaunserver/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin))
#3 /home/msudhanshu/test/gyanikaunserver/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /home/msudhanshu/test/gyanikaunserver/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /home/msudhanshu/test/gyanikaunserver/index.php(109): Kohana_Request->execute()
#6 {main}
2012-11-24 02:35:15 --- ERROR: View_Exception [ 0 ]: The requested view syncConfirmation could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2012-11-24 02:35:15 --- STRACE: View_Exception [ 0 ]: The requested view syncConfirmation could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /home/msudhanshu/test/gyanikaunserver/system/classes/kohana/view.php(137): Kohana_View->set_filename('syncConfirmatio...')
#1 /home/msudhanshu/test/gyanikaunserver/system/classes/kohana/view.php(30): Kohana_View->__construct('syncConfirmatio...', NULL)
#2 /home/msudhanshu/test/gyanikaunserver/system/classes/kohana/controller/template.php(33): Kohana_View::factory('syncConfirmatio...')
#3 /home/msudhanshu/test/gyanikaunserver/application/classes/controller/admin.php(20): Kohana_Controller_Template->before()
#4 [internal function]: Controller_Admin->before()
#5 /home/msudhanshu/test/gyanikaunserver/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Admin))
#6 /home/msudhanshu/test/gyanikaunserver/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/msudhanshu/test/gyanikaunserver/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /home/msudhanshu/test/gyanikaunserver/index.php(109): Kohana_Request->execute()
#9 {main}
2012-11-24 02:35:16 --- ERROR: View_Exception [ 0 ]: The requested view syncConfirmation could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2012-11-24 02:35:16 --- STRACE: View_Exception [ 0 ]: The requested view syncConfirmation could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /home/msudhanshu/test/gyanikaunserver/system/classes/kohana/view.php(137): Kohana_View->set_filename('syncConfirmatio...')
#1 /home/msudhanshu/test/gyanikaunserver/system/classes/kohana/view.php(30): Kohana_View->__construct('syncConfirmatio...', NULL)
#2 /home/msudhanshu/test/gyanikaunserver/system/classes/kohana/controller/template.php(33): Kohana_View::factory('syncConfirmatio...')
#3 /home/msudhanshu/test/gyanikaunserver/application/classes/controller/admin.php(20): Kohana_Controller_Template->before()
#4 [internal function]: Controller_Admin->before()
#5 /home/msudhanshu/test/gyanikaunserver/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Admin))
#6 /home/msudhanshu/test/gyanikaunserver/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/msudhanshu/test/gyanikaunserver/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /home/msudhanshu/test/gyanikaunserver/index.php(109): Kohana_Request->execute()
#9 {main}
2012-11-24 02:35:17 --- ERROR: View_Exception [ 0 ]: The requested view syncConfirmation could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2012-11-24 02:35:17 --- STRACE: View_Exception [ 0 ]: The requested view syncConfirmation could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /home/msudhanshu/test/gyanikaunserver/system/classes/kohana/view.php(137): Kohana_View->set_filename('syncConfirmatio...')
#1 /home/msudhanshu/test/gyanikaunserver/system/classes/kohana/view.php(30): Kohana_View->__construct('syncConfirmatio...', NULL)
#2 /home/msudhanshu/test/gyanikaunserver/system/classes/kohana/controller/template.php(33): Kohana_View::factory('syncConfirmatio...')
#3 /home/msudhanshu/test/gyanikaunserver/application/classes/controller/admin.php(20): Kohana_Controller_Template->before()
#4 [internal function]: Controller_Admin->before()
#5 /home/msudhanshu/test/gyanikaunserver/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Admin))
#6 /home/msudhanshu/test/gyanikaunserver/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/msudhanshu/test/gyanikaunserver/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /home/msudhanshu/test/gyanikaunserver/index.php(109): Kohana_Request->execute()
#9 {main}
2012-11-24 02:36:03 --- ERROR: View_Exception [ 0 ]: The requested view syncConfirmation could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2012-11-24 02:36:03 --- STRACE: View_Exception [ 0 ]: The requested view syncConfirmation could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /home/msudhanshu/test/gyanikaunserver/system/classes/kohana/view.php(137): Kohana_View->set_filename('syncConfirmatio...')
#1 /home/msudhanshu/test/gyanikaunserver/system/classes/kohana/view.php(30): Kohana_View->__construct('syncConfirmatio...', NULL)
#2 /home/msudhanshu/test/gyanikaunserver/system/classes/kohana/controller/template.php(33): Kohana_View::factory('syncConfirmatio...')
#3 /home/msudhanshu/test/gyanikaunserver/application/classes/controller/admin.php(20): Kohana_Controller_Template->before()
#4 [internal function]: Controller_Admin->before()
#5 /home/msudhanshu/test/gyanikaunserver/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Admin))
#6 /home/msudhanshu/test/gyanikaunserver/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/msudhanshu/test/gyanikaunserver/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /home/msudhanshu/test/gyanikaunserver/index.php(109): Kohana_Request->execute()
#9 {main}
2012-11-24 02:36:03 --- ERROR: View_Exception [ 0 ]: The requested view syncConfirmation could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2012-11-24 02:36:03 --- STRACE: View_Exception [ 0 ]: The requested view syncConfirmation could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /home/msudhanshu/test/gyanikaunserver/system/classes/kohana/view.php(137): Kohana_View->set_filename('syncConfirmatio...')
#1 /home/msudhanshu/test/gyanikaunserver/system/classes/kohana/view.php(30): Kohana_View->__construct('syncConfirmatio...', NULL)
#2 /home/msudhanshu/test/gyanikaunserver/system/classes/kohana/controller/template.php(33): Kohana_View::factory('syncConfirmatio...')
#3 /home/msudhanshu/test/gyanikaunserver/application/classes/controller/admin.php(20): Kohana_Controller_Template->before()
#4 [internal function]: Controller_Admin->before()
#5 /home/msudhanshu/test/gyanikaunserver/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Admin))
#6 /home/msudhanshu/test/gyanikaunserver/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/msudhanshu/test/gyanikaunserver/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /home/msudhanshu/test/gyanikaunserver/index.php(109): Kohana_Request->execute()
#9 {main}
2012-11-24 02:36:04 --- ERROR: View_Exception [ 0 ]: The requested view syncConfirmation could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2012-11-24 02:36:04 --- STRACE: View_Exception [ 0 ]: The requested view syncConfirmation could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /home/msudhanshu/test/gyanikaunserver/system/classes/kohana/view.php(137): Kohana_View->set_filename('syncConfirmatio...')
#1 /home/msudhanshu/test/gyanikaunserver/system/classes/kohana/view.php(30): Kohana_View->__construct('syncConfirmatio...', NULL)
#2 /home/msudhanshu/test/gyanikaunserver/system/classes/kohana/controller/template.php(33): Kohana_View::factory('syncConfirmatio...')
#3 /home/msudhanshu/test/gyanikaunserver/application/classes/controller/admin.php(20): Kohana_Controller_Template->before()
#4 [internal function]: Controller_Admin->before()
#5 /home/msudhanshu/test/gyanikaunserver/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Admin))
#6 /home/msudhanshu/test/gyanikaunserver/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/msudhanshu/test/gyanikaunserver/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /home/msudhanshu/test/gyanikaunserver/index.php(109): Kohana_Request->execute()
#9 {main}
2012-11-24 02:36:04 --- ERROR: View_Exception [ 0 ]: The requested view syncConfirmation could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2012-11-24 02:36:04 --- STRACE: View_Exception [ 0 ]: The requested view syncConfirmation could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /home/msudhanshu/test/gyanikaunserver/system/classes/kohana/view.php(137): Kohana_View->set_filename('syncConfirmatio...')
#1 /home/msudhanshu/test/gyanikaunserver/system/classes/kohana/view.php(30): Kohana_View->__construct('syncConfirmatio...', NULL)
#2 /home/msudhanshu/test/gyanikaunserver/system/classes/kohana/controller/template.php(33): Kohana_View::factory('syncConfirmatio...')
#3 /home/msudhanshu/test/gyanikaunserver/application/classes/controller/admin.php(20): Kohana_Controller_Template->before()
#4 [internal function]: Controller_Admin->before()
#5 /home/msudhanshu/test/gyanikaunserver/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Admin))
#6 /home/msudhanshu/test/gyanikaunserver/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/msudhanshu/test/gyanikaunserver/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /home/msudhanshu/test/gyanikaunserver/index.php(109): Kohana_Request->execute()
#9 {main}
2012-11-24 02:40:33 --- ERROR: View_Exception [ 0 ]: The requested view syncConfirmation could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2012-11-24 02:40:33 --- STRACE: View_Exception [ 0 ]: The requested view syncConfirmation could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /home/msudhanshu/test/gyanikaunserver/system/classes/kohana/view.php(137): Kohana_View->set_filename('syncConfirmatio...')
#1 /home/msudhanshu/test/gyanikaunserver/system/classes/kohana/view.php(30): Kohana_View->__construct('syncConfirmatio...', NULL)
#2 /home/msudhanshu/test/gyanikaunserver/system/classes/kohana/controller/template.php(33): Kohana_View::factory('syncConfirmatio...')
#3 /home/msudhanshu/test/gyanikaunserver/application/classes/controller/admin.php(20): Kohana_Controller_Template->before()
#4 [internal function]: Controller_Admin->before()
#5 /home/msudhanshu/test/gyanikaunserver/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Admin))
#6 /home/msudhanshu/test/gyanikaunserver/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/msudhanshu/test/gyanikaunserver/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /home/msudhanshu/test/gyanikaunserver/index.php(109): Kohana_Request->execute()
#9 {main}
2012-11-24 02:40:33 --- ERROR: View_Exception [ 0 ]: The requested view syncConfirmation could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2012-11-24 02:40:33 --- STRACE: View_Exception [ 0 ]: The requested view syncConfirmation could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /home/msudhanshu/test/gyanikaunserver/system/classes/kohana/view.php(137): Kohana_View->set_filename('syncConfirmatio...')
#1 /home/msudhanshu/test/gyanikaunserver/system/classes/kohana/view.php(30): Kohana_View->__construct('syncConfirmatio...', NULL)
#2 /home/msudhanshu/test/gyanikaunserver/system/classes/kohana/controller/template.php(33): Kohana_View::factory('syncConfirmatio...')
#3 /home/msudhanshu/test/gyanikaunserver/application/classes/controller/admin.php(20): Kohana_Controller_Template->before()
#4 [internal function]: Controller_Admin->before()
#5 /home/msudhanshu/test/gyanikaunserver/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Admin))
#6 /home/msudhanshu/test/gyanikaunserver/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/msudhanshu/test/gyanikaunserver/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /home/msudhanshu/test/gyanikaunserver/index.php(109): Kohana_Request->execute()
#9 {main}
2012-11-24 02:40:34 --- ERROR: View_Exception [ 0 ]: The requested view syncConfirmation could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2012-11-24 02:40:34 --- STRACE: View_Exception [ 0 ]: The requested view syncConfirmation could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /home/msudhanshu/test/gyanikaunserver/system/classes/kohana/view.php(137): Kohana_View->set_filename('syncConfirmatio...')
#1 /home/msudhanshu/test/gyanikaunserver/system/classes/kohana/view.php(30): Kohana_View->__construct('syncConfirmatio...', NULL)
#2 /home/msudhanshu/test/gyanikaunserver/system/classes/kohana/controller/template.php(33): Kohana_View::factory('syncConfirmatio...')
#3 /home/msudhanshu/test/gyanikaunserver/application/classes/controller/admin.php(20): Kohana_Controller_Template->before()
#4 [internal function]: Controller_Admin->before()
#5 /home/msudhanshu/test/gyanikaunserver/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Admin))
#6 /home/msudhanshu/test/gyanikaunserver/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/msudhanshu/test/gyanikaunserver/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /home/msudhanshu/test/gyanikaunserver/index.php(109): Kohana_Request->execute()
#9 {main}
2012-11-24 02:40:34 --- ERROR: View_Exception [ 0 ]: The requested view syncConfirmation could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2012-11-24 02:40:34 --- STRACE: View_Exception [ 0 ]: The requested view syncConfirmation could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /home/msudhanshu/test/gyanikaunserver/system/classes/kohana/view.php(137): Kohana_View->set_filename('syncConfirmatio...')
#1 /home/msudhanshu/test/gyanikaunserver/system/classes/kohana/view.php(30): Kohana_View->__construct('syncConfirmatio...', NULL)
#2 /home/msudhanshu/test/gyanikaunserver/system/classes/kohana/controller/template.php(33): Kohana_View::factory('syncConfirmatio...')
#3 /home/msudhanshu/test/gyanikaunserver/application/classes/controller/admin.php(20): Kohana_Controller_Template->before()
#4 [internal function]: Controller_Admin->before()
#5 /home/msudhanshu/test/gyanikaunserver/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Admin))
#6 /home/msudhanshu/test/gyanikaunserver/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/msudhanshu/test/gyanikaunserver/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /home/msudhanshu/test/gyanikaunserver/index.php(109): Kohana_Request->execute()
#9 {main}
2012-11-24 02:40:35 --- ERROR: View_Exception [ 0 ]: The requested view syncConfirmation could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2012-11-24 02:40:35 --- STRACE: View_Exception [ 0 ]: The requested view syncConfirmation could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /home/msudhanshu/test/gyanikaunserver/system/classes/kohana/view.php(137): Kohana_View->set_filename('syncConfirmatio...')
#1 /home/msudhanshu/test/gyanikaunserver/system/classes/kohana/view.php(30): Kohana_View->__construct('syncConfirmatio...', NULL)
#2 /home/msudhanshu/test/gyanikaunserver/system/classes/kohana/controller/template.php(33): Kohana_View::factory('syncConfirmatio...')
#3 /home/msudhanshu/test/gyanikaunserver/application/classes/controller/admin.php(20): Kohana_Controller_Template->before()
#4 [internal function]: Controller_Admin->before()
#5 /home/msudhanshu/test/gyanikaunserver/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Admin))
#6 /home/msudhanshu/test/gyanikaunserver/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/msudhanshu/test/gyanikaunserver/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /home/msudhanshu/test/gyanikaunserver/index.php(109): Kohana_Request->execute()
#9 {main}
2012-11-24 02:40:35 --- ERROR: View_Exception [ 0 ]: The requested view syncConfirmation could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2012-11-24 02:40:35 --- STRACE: View_Exception [ 0 ]: The requested view syncConfirmation could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /home/msudhanshu/test/gyanikaunserver/system/classes/kohana/view.php(137): Kohana_View->set_filename('syncConfirmatio...')
#1 /home/msudhanshu/test/gyanikaunserver/system/classes/kohana/view.php(30): Kohana_View->__construct('syncConfirmatio...', NULL)
#2 /home/msudhanshu/test/gyanikaunserver/system/classes/kohana/controller/template.php(33): Kohana_View::factory('syncConfirmatio...')
#3 /home/msudhanshu/test/gyanikaunserver/application/classes/controller/admin.php(20): Kohana_Controller_Template->before()
#4 [internal function]: Controller_Admin->before()
#5 /home/msudhanshu/test/gyanikaunserver/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Admin))
#6 /home/msudhanshu/test/gyanikaunserver/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/msudhanshu/test/gyanikaunserver/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /home/msudhanshu/test/gyanikaunserver/index.php(109): Kohana_Request->execute()
#9 {main}
2012-11-24 02:40:35 --- ERROR: View_Exception [ 0 ]: The requested view syncConfirmation could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2012-11-24 02:40:35 --- STRACE: View_Exception [ 0 ]: The requested view syncConfirmation could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /home/msudhanshu/test/gyanikaunserver/system/classes/kohana/view.php(137): Kohana_View->set_filename('syncConfirmatio...')
#1 /home/msudhanshu/test/gyanikaunserver/system/classes/kohana/view.php(30): Kohana_View->__construct('syncConfirmatio...', NULL)
#2 /home/msudhanshu/test/gyanikaunserver/system/classes/kohana/controller/template.php(33): Kohana_View::factory('syncConfirmatio...')
#3 /home/msudhanshu/test/gyanikaunserver/application/classes/controller/admin.php(20): Kohana_Controller_Template->before()
#4 [internal function]: Controller_Admin->before()
#5 /home/msudhanshu/test/gyanikaunserver/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Admin))
#6 /home/msudhanshu/test/gyanikaunserver/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/msudhanshu/test/gyanikaunserver/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /home/msudhanshu/test/gyanikaunserver/index.php(109): Kohana_Request->execute()
#9 {main}
2012-11-24 02:41:17 --- ERROR: View_Exception [ 0 ]: The requested view syncConfirmation could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2012-11-24 02:41:17 --- STRACE: View_Exception [ 0 ]: The requested view syncConfirmation could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /home/msudhanshu/test/gyanikaunserver/system/classes/kohana/view.php(137): Kohana_View->set_filename('syncConfirmatio...')
#1 /home/msudhanshu/test/gyanikaunserver/system/classes/kohana/view.php(30): Kohana_View->__construct('syncConfirmatio...', NULL)
#2 /home/msudhanshu/test/gyanikaunserver/system/classes/kohana/controller/template.php(33): Kohana_View::factory('syncConfirmatio...')
#3 /home/msudhanshu/test/gyanikaunserver/application/classes/controller/admin.php(20): Kohana_Controller_Template->before()
#4 [internal function]: Controller_Admin->before()
#5 /home/msudhanshu/test/gyanikaunserver/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Admin))
#6 /home/msudhanshu/test/gyanikaunserver/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/msudhanshu/test/gyanikaunserver/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /home/msudhanshu/test/gyanikaunserver/index.php(109): Kohana_Request->execute()
#9 {main}
2012-11-24 02:41:18 --- ERROR: View_Exception [ 0 ]: The requested view syncConfirmation could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2012-11-24 02:41:18 --- STRACE: View_Exception [ 0 ]: The requested view syncConfirmation could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /home/msudhanshu/test/gyanikaunserver/system/classes/kohana/view.php(137): Kohana_View->set_filename('syncConfirmatio...')
#1 /home/msudhanshu/test/gyanikaunserver/system/classes/kohana/view.php(30): Kohana_View->__construct('syncConfirmatio...', NULL)
#2 /home/msudhanshu/test/gyanikaunserver/system/classes/kohana/controller/template.php(33): Kohana_View::factory('syncConfirmatio...')
#3 /home/msudhanshu/test/gyanikaunserver/application/classes/controller/admin.php(20): Kohana_Controller_Template->before()
#4 [internal function]: Controller_Admin->before()
#5 /home/msudhanshu/test/gyanikaunserver/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Admin))
#6 /home/msudhanshu/test/gyanikaunserver/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/msudhanshu/test/gyanikaunserver/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /home/msudhanshu/test/gyanikaunserver/index.php(109): Kohana_Request->execute()
#9 {main}
2012-11-24 02:41:28 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_LNUMBER, expecting T_STRING or T_VARIABLE or '{' or '$' ~ APPPATH/classes/controller/admin.php [ 68 ]
2012-11-24 02:41:28 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_LNUMBER, expecting T_STRING or T_VARIABLE or '{' or '$' ~ APPPATH/classes/controller/admin.php [ 68 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-11-24 02:41:36 --- ERROR: View_Exception [ 0 ]: The requested view syncConfirmation could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2012-11-24 02:41:36 --- STRACE: View_Exception [ 0 ]: The requested view syncConfirmation could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /home/msudhanshu/test/gyanikaunserver/system/classes/kohana/view.php(137): Kohana_View->set_filename('syncConfirmatio...')
#1 /home/msudhanshu/test/gyanikaunserver/system/classes/kohana/view.php(30): Kohana_View->__construct('syncConfirmatio...', NULL)
#2 /home/msudhanshu/test/gyanikaunserver/system/classes/kohana/controller/template.php(33): Kohana_View::factory('syncConfirmatio...')
#3 /home/msudhanshu/test/gyanikaunserver/application/classes/controller/admin.php(20): Kohana_Controller_Template->before()
#4 [internal function]: Controller_Admin->before()
#5 /home/msudhanshu/test/gyanikaunserver/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Admin))
#6 /home/msudhanshu/test/gyanikaunserver/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/msudhanshu/test/gyanikaunserver/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /home/msudhanshu/test/gyanikaunserver/index.php(109): Kohana_Request->execute()
#9 {main}
2012-11-24 02:43:26 --- ERROR: ErrorException [ 1 ]: Class 'Mode2l_AssetCategory' not found ~ APPPATH/classes/controller/admin.php [ 69 ]
2012-11-24 02:43:26 --- STRACE: ErrorException [ 1 ]: Class 'Mode2l_AssetCategory' not found ~ APPPATH/classes/controller/admin.php [ 69 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-11-24 02:45:25 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/views/syncConfirmation.php [ 34 ]
2012-11-24 02:45:25 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/views/syncConfirmation.php [ 34 ]
--
#0 /home/msudhanshu/test/gyanikaunserver/application/views/syncConfirmation.php(34): Kohana_Core::error_handler(2, 'Invalid argumen...', '/home/msudhansh...', 34, Array)
#1 /home/msudhanshu/test/gyanikaunserver/system/classes/kohana/view.php(61): include('/home/msudhansh...')
#2 /home/msudhanshu/test/gyanikaunserver/system/classes/kohana/view.php(343): Kohana_View::capture('/home/msudhansh...', Array)
#3 /home/msudhanshu/test/gyanikaunserver/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 /home/msudhanshu/test/gyanikaunserver/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Admin))
#6 /home/msudhanshu/test/gyanikaunserver/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/msudhanshu/test/gyanikaunserver/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /home/msudhanshu/test/gyanikaunserver/index.php(109): Kohana_Request->execute()
#9 {main}
2012-11-24 02:45:27 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/views/syncConfirmation.php [ 34 ]
2012-11-24 02:45:27 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/views/syncConfirmation.php [ 34 ]
--
#0 /home/msudhanshu/test/gyanikaunserver/application/views/syncConfirmation.php(34): Kohana_Core::error_handler(2, 'Invalid argumen...', '/home/msudhansh...', 34, Array)
#1 /home/msudhanshu/test/gyanikaunserver/system/classes/kohana/view.php(61): include('/home/msudhansh...')
#2 /home/msudhanshu/test/gyanikaunserver/system/classes/kohana/view.php(343): Kohana_View::capture('/home/msudhansh...', Array)
#3 /home/msudhanshu/test/gyanikaunserver/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 /home/msudhanshu/test/gyanikaunserver/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Admin))
#6 /home/msudhanshu/test/gyanikaunserver/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/msudhanshu/test/gyanikaunserver/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /home/msudhanshu/test/gyanikaunserver/index.php(109): Kohana_Request->execute()
#9 {main}
2012-11-24 02:56:01 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/views/syncConfirmation.php [ 34 ]
2012-11-24 02:56:01 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/views/syncConfirmation.php [ 34 ]
--
#0 /home/msudhanshu/test/gyanikaunserver/application/views/syncConfirmation.php(34): Kohana_Core::error_handler(2, 'Invalid argumen...', '/home/msudhansh...', 34, Array)
#1 /home/msudhanshu/test/gyanikaunserver/system/classes/kohana/view.php(61): include('/home/msudhansh...')
#2 /home/msudhanshu/test/gyanikaunserver/system/classes/kohana/view.php(343): Kohana_View::capture('/home/msudhansh...', Array)
#3 /home/msudhanshu/test/gyanikaunserver/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 /home/msudhanshu/test/gyanikaunserver/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Admin))
#6 /home/msudhanshu/test/gyanikaunserver/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/msudhanshu/test/gyanikaunserver/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /home/msudhanshu/test/gyanikaunserver/index.php(109): Kohana_Request->execute()
#9 {main}
2012-11-24 02:59:00 --- ERROR: ErrorException [ 1 ]: Class 'KiwiConfig' not found ~ APPPATH/config/gameconfig.php [ 3 ]
2012-11-24 02:59:00 --- STRACE: ErrorException [ 1 ]: Class 'KiwiConfig' not found ~ APPPATH/config/gameconfig.php [ 3 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-11-24 02:59:01 --- ERROR: ErrorException [ 1 ]: Class 'KiwiConfig' not found ~ APPPATH/config/gameconfig.php [ 3 ]
2012-11-24 02:59:01 --- STRACE: ErrorException [ 1 ]: Class 'KiwiConfig' not found ~ APPPATH/config/gameconfig.php [ 3 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-11-24 02:59:02 --- ERROR: ErrorException [ 1 ]: Class 'KiwiConfig' not found ~ APPPATH/config/gameconfig.php [ 3 ]
2012-11-24 02:59:02 --- STRACE: ErrorException [ 1 ]: Class 'KiwiConfig' not found ~ APPPATH/config/gameconfig.php [ 3 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-11-24 02:59:02 --- ERROR: ErrorException [ 1 ]: Class 'KiwiConfig' not found ~ APPPATH/config/gameconfig.php [ 3 ]
2012-11-24 02:59:02 --- STRACE: ErrorException [ 1 ]: Class 'KiwiConfig' not found ~ APPPATH/config/gameconfig.php [ 3 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-11-24 03:05:55 --- ERROR: ErrorException [ 8 ]: Undefined variable: game_id ~ APPPATH/config/gameconfig.php [ 32 ]
2012-11-24 03:05:55 --- STRACE: ErrorException [ 8 ]: Undefined variable: game_id ~ APPPATH/config/gameconfig.php [ 32 ]
--
#0 /home/msudhanshu/test/gyanikaunserver/application/config/gameconfig.php(32): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/msudhansh...', 32, Array)
#1 /home/msudhanshu/test/gyanikaunserver/system/classes/kohana/core.php(800): include('/home/msudhansh...')
#2 /home/msudhanshu/test/gyanikaunserver/system/classes/kohana/config/file/reader.php(49): Kohana_Core::load('/home/msudhansh...')
#3 /home/msudhanshu/test/gyanikaunserver/system/classes/kohana/config.php(124): Kohana_Config_File_Reader->load('gameconfig')
#4 /home/msudhanshu/test/gyanikaunserver/application/classes/controller/admin.php(76): Kohana_Config->load('gameconfig.use_...')
#5 [internal function]: Controller_Admin->action_sync()
#6 /home/msudhanshu/test/gyanikaunserver/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin))
#7 /home/msudhanshu/test/gyanikaunserver/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /home/msudhanshu/test/gyanikaunserver/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#9 /home/msudhanshu/test/gyanikaunserver/index.php(109): Kohana_Request->execute()
#10 {main}
2012-11-24 03:06:18 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/views/syncConfirmation.php [ 44 ]
2012-11-24 03:06:18 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/views/syncConfirmation.php [ 44 ]
--
#0 /home/msudhanshu/test/gyanikaunserver/application/views/syncConfirmation.php(44): Kohana_Core::error_handler(2, 'Invalid argumen...', '/home/msudhansh...', 44, Array)
#1 /home/msudhanshu/test/gyanikaunserver/system/classes/kohana/view.php(61): include('/home/msudhansh...')
#2 /home/msudhanshu/test/gyanikaunserver/system/classes/kohana/view.php(343): Kohana_View::capture('/home/msudhansh...', Array)
#3 /home/msudhanshu/test/gyanikaunserver/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 /home/msudhanshu/test/gyanikaunserver/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Admin))
#6 /home/msudhanshu/test/gyanikaunserver/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/msudhanshu/test/gyanikaunserver/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /home/msudhanshu/test/gyanikaunserver/index.php(109): Kohana_Request->execute()
#9 {main}
2012-11-24 03:09:39 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/syncConfirmation was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2012-11-24 03:09:39 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/syncConfirmation was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /home/msudhanshu/test/gyanikaunserver/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/msudhanshu/test/gyanikaunserver/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /home/msudhanshu/test/gyanikaunserver/index.php(109): Kohana_Request->execute()
#3 {main}
2012-11-24 03:10:07 --- ERROR: ErrorException [ 2 ]: include_once(/home/msudhanshu/test/gyanikaunserver/modules/kiwi-backend/libraries/kiwi_sync.php): failed to open stream: No such file or directory ~ APPPATH/classes/controller/admin.php [ 90 ]
2012-11-24 03:10:07 --- STRACE: ErrorException [ 2 ]: include_once(/home/msudhanshu/test/gyanikaunserver/modules/kiwi-backend/libraries/kiwi_sync.php): failed to open stream: No such file or directory ~ APPPATH/classes/controller/admin.php [ 90 ]
--
#0 /home/msudhanshu/test/gyanikaunserver/application/classes/controller/admin.php(90): Kohana_Core::error_handler(2, 'include_once(/h...', '/home/msudhansh...', 90, Array)
#1 /home/msudhanshu/test/gyanikaunserver/application/classes/controller/admin.php(90): Controller_Admin::action_syncConfirmation()
#2 [internal function]: Controller_Admin->action_syncConfirmation()
#3 /home/msudhanshu/test/gyanikaunserver/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin))
#4 /home/msudhanshu/test/gyanikaunserver/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /home/msudhanshu/test/gyanikaunserver/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /home/msudhanshu/test/gyanikaunserver/index.php(109): Kohana_Request->execute()
#7 {main}
2012-11-24 03:26:00 --- ERROR: ErrorException [ 2 ]: include_once(/home/msudhanshu/test/gyanikaunserver/modules/kiwi-backend/libraries/Google_Spreadsheet.php): failed to open stream: No such file or directory ~ MODPATH/libraries/sync.php [ 9 ]
2012-11-24 03:26:00 --- STRACE: ErrorException [ 2 ]: include_once(/home/msudhanshu/test/gyanikaunserver/modules/kiwi-backend/libraries/Google_Spreadsheet.php): failed to open stream: No such file or directory ~ MODPATH/libraries/sync.php [ 9 ]
--
#0 /home/msudhanshu/test/gyanikaunserver/modules/libraries/sync.php(9): Kohana_Core::error_handler(2, 'include_once(/h...', '/home/msudhansh...', 9, Array)
#1 /home/msudhanshu/test/gyanikaunserver/modules/libraries/sync.php(9): include_once()
#2 /home/msudhanshu/test/gyanikaunserver/application/classes/controller/admin.php(90): include_once('/home/msudhansh...')
#3 [internal function]: Controller_Admin->action_syncConfirmation()
#4 /home/msudhanshu/test/gyanikaunserver/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin))
#5 /home/msudhanshu/test/gyanikaunserver/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /home/msudhanshu/test/gyanikaunserver/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /home/msudhanshu/test/gyanikaunserver/index.php(109): Kohana_Request->execute()
#8 {main}
2012-11-24 03:26:31 --- ERROR: ErrorException [ 2 ]: include_once(application/libraries/sync_helper.php): failed to open stream: No such file or directory ~ MODPATH/libraries/sync.php [ 11 ]
2012-11-24 03:26:31 --- STRACE: ErrorException [ 2 ]: include_once(application/libraries/sync_helper.php): failed to open stream: No such file or directory ~ MODPATH/libraries/sync.php [ 11 ]
--
#0 /home/msudhanshu/test/gyanikaunserver/modules/libraries/sync.php(11): Kohana_Core::error_handler(2, 'include_once(ap...', '/home/msudhansh...', 11, Array)
#1 /home/msudhanshu/test/gyanikaunserver/modules/libraries/sync.php(11): include_once()
#2 /home/msudhanshu/test/gyanikaunserver/application/classes/controller/admin.php(90): include_once('/home/msudhansh...')
#3 [internal function]: Controller_Admin->action_syncConfirmation()
#4 /home/msudhanshu/test/gyanikaunserver/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin))
#5 /home/msudhanshu/test/gyanikaunserver/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /home/msudhanshu/test/gyanikaunserver/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /home/msudhanshu/test/gyanikaunserver/index.php(109): Kohana_Request->execute()
#8 {main}
2012-11-24 03:34:26 --- ERROR: ErrorException [ 2 ]: include_once(application/libraries/sync_helper.php): failed to open stream: No such file or directory ~ MODPATH/libraries/sync.php [ 11 ]
2012-11-24 03:34:26 --- STRACE: ErrorException [ 2 ]: include_once(application/libraries/sync_helper.php): failed to open stream: No such file or directory ~ MODPATH/libraries/sync.php [ 11 ]
--
#0 /home/msudhanshu/test/gyanikaunserver/modules/libraries/sync.php(11): Kohana_Core::error_handler(2, 'include_once(ap...', '/home/msudhansh...', 11, Array)
#1 /home/msudhanshu/test/gyanikaunserver/modules/libraries/sync.php(11): include_once()
#2 /home/msudhanshu/test/gyanikaunserver/application/classes/controller/admin.php(90): include_once('/home/msudhansh...')
#3 [internal function]: Controller_Admin->action_syncConfirmation()
#4 /home/msudhanshu/test/gyanikaunserver/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin))
#5 /home/msudhanshu/test/gyanikaunserver/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /home/msudhanshu/test/gyanikaunserver/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /home/msudhanshu/test/gyanikaunserver/index.php(109): Kohana_Request->execute()
#8 {main}
2012-11-24 03:35:28 --- ERROR: ErrorException [ 1 ]: Class 'KiwiConfig' not found ~ APPPATH/classes/controller/admin.php [ 93 ]
2012-11-24 03:35:28 --- STRACE: ErrorException [ 1 ]: Class 'KiwiConfig' not found ~ APPPATH/classes/controller/admin.php [ 93 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-11-24 03:42:01 --- ERROR: ErrorException [ 1 ]: Class 'KiwiConfig' not found ~ APPPATH/classes/controller/admin.php [ 93 ]
2012-11-24 03:42:01 --- STRACE: ErrorException [ 1 ]: Class 'KiwiConfig' not found ~ APPPATH/classes/controller/admin.php [ 93 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-11-24 03:48:06 --- ERROR: ErrorException [ 1 ]: Class 'KiwiConfig' not found ~ APPPATH/classes/controller/admin.php [ 93 ]
2012-11-24 03:48:06 --- STRACE: ErrorException [ 1 ]: Class 'KiwiConfig' not found ~ APPPATH/classes/controller/admin.php [ 93 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-11-24 03:53:47 --- ERROR: ErrorException [ 1 ]: Class 'KiwiConfig' not found ~ APPPATH/classes/controller/admin.php [ 93 ]
2012-11-24 03:53:47 --- STRACE: ErrorException [ 1 ]: Class 'KiwiConfig' not found ~ APPPATH/classes/controller/admin.php [ 93 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-11-24 03:59:48 --- ERROR: ErrorException [ 1 ]: Class 'Model_TableVersion' not found ~ MODPATH/libraries/sync.php [ 41 ]
2012-11-24 03:59:48 --- STRACE: ErrorException [ 1 ]: Class 'Model_TableVersion' not found ~ MODPATH/libraries/sync.php [ 41 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-11-24 04:00:14 --- ERROR: ErrorException [ 1 ]: Class 'Model_Kiwi' not found ~ APPPATH/classes/controller/admin.php [ 181 ]
2012-11-24 04:00:14 --- STRACE: ErrorException [ 1 ]: Class 'Model_Kiwi' not found ~ APPPATH/classes/controller/admin.php [ 181 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-11-24 04:05:52 --- ERROR: ErrorException [ 1 ]: Class 'Model_TableVersion' not found ~ MODPATH/libraries/sync.php [ 41 ]
2012-11-24 04:05:52 --- STRACE: ErrorException [ 1 ]: Class 'Model_TableVersion' not found ~ MODPATH/libraries/sync.php [ 41 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-11-24 04:16:42 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_CONSTANT_ENCAPSED_STRING, expecting ')' ~ APPPATH/config/gameconfig.php [ 62 ]
2012-11-24 04:16:42 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_CONSTANT_ENCAPSED_STRING, expecting ')' ~ APPPATH/config/gameconfig.php [ 62 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-11-24 04:24:38 --- ERROR: ErrorException [ 1 ]: Class 'Model_ServerParam' not found ~ MODPATH/libraries/sync.php [ 46 ]
2012-11-24 04:24:38 --- STRACE: ErrorException [ 1 ]: Class 'Model_ServerParam' not found ~ MODPATH/libraries/sync.php [ 46 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-11-24 04:26:16 --- ERROR: ErrorException [ 1 ]: Class 'Model_Kiwi' not found ~ MODPATH/libraries/sync.php [ 53 ]
2012-11-24 04:26:16 --- STRACE: ErrorException [ 1 ]: Class 'Model_Kiwi' not found ~ MODPATH/libraries/sync.php [ 53 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-11-24 04:27:54 --- ERROR: ErrorException [ 8 ]: Undefined variable: worksheet_name ~ MODPATH/libraries/sync.php [ 55 ]
2012-11-24 04:27:54 --- STRACE: ErrorException [ 8 ]: Undefined variable: worksheet_name ~ MODPATH/libraries/sync.php [ 55 ]
--
#0 /home/msudhanshu/test/gyanikaunserver/modules/libraries/sync.php(55): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/msudhansh...', 55, Array)
#1 /home/msudhanshu/test/gyanikaunserver/application/classes/controller/admin.php(176): sync_spreadsheet('sudhanshu.manje...', 'prematma', 'gyanikaun-sheet', Array, Array, 'gyanikaun-sheet', Array, false, Array, true)
#2 [internal function]: Controller_Admin->action_syncConfirmation()
#3 /home/msudhanshu/test/gyanikaunserver/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin))
#4 /home/msudhanshu/test/gyanikaunserver/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /home/msudhanshu/test/gyanikaunserver/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /home/msudhanshu/test/gyanikaunserver/index.php(109): Kohana_Request->execute()
#7 {main}
2012-11-24 04:32:03 --- ERROR: ErrorException [ 1 ]: Class 'Model_Kiwi' not found ~ MODPATH/libraries/sync.php [ 450 ]
2012-11-24 04:32:03 --- STRACE: ErrorException [ 1 ]: Class 'Model_Kiwi' not found ~ MODPATH/libraries/sync.php [ 450 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-11-24 05:06:05 --- ERROR: ErrorException [ 2 ]: include_once(/home/msudhanshu/test/gyanikaunserver/modules/libraries/sync.php): failed to open stream: No such file or directory ~ APPPATH/classes/controller/admin.php [ 90 ]
2012-11-24 05:06:05 --- STRACE: ErrorException [ 2 ]: include_once(/home/msudhanshu/test/gyanikaunserver/modules/libraries/sync.php): failed to open stream: No such file or directory ~ APPPATH/classes/controller/admin.php [ 90 ]
--
#0 /home/msudhanshu/test/gyanikaunserver/application/classes/controller/admin.php(90): Kohana_Core::error_handler(2, 'include_once(/h...', '/home/msudhansh...', 90, Array)
#1 /home/msudhanshu/test/gyanikaunserver/application/classes/controller/admin.php(90): Controller_Admin::action_syncConfirmation()
#2 [internal function]: Controller_Admin->action_syncConfirmation()
#3 /home/msudhanshu/test/gyanikaunserver/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin))
#4 /home/msudhanshu/test/gyanikaunserver/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /home/msudhanshu/test/gyanikaunserver/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /home/msudhanshu/test/gyanikaunserver/index.php(109): Kohana_Request->execute()
#7 {main}
2012-11-24 05:13:47 --- ERROR: ErrorException [ 2 ]: include_once(/home/msudhanshu/test/gyanikaunserver/modules/gamex-backend/libraries/sync.php): failed to open stream: No such file or directory ~ APPPATH/classes/controller/admin.php [ 90 ]
2012-11-24 05:13:47 --- STRACE: ErrorException [ 2 ]: include_once(/home/msudhanshu/test/gyanikaunserver/modules/gamex-backend/libraries/sync.php): failed to open stream: No such file or directory ~ APPPATH/classes/controller/admin.php [ 90 ]
--
#0 /home/msudhanshu/test/gyanikaunserver/application/classes/controller/admin.php(90): Kohana_Core::error_handler(2, 'include_once(/h...', '/home/msudhansh...', 90, Array)
#1 /home/msudhanshu/test/gyanikaunserver/application/classes/controller/admin.php(90): Controller_Admin::action_syncConfirmation()
#2 [internal function]: Controller_Admin->action_syncConfirmation()
#3 /home/msudhanshu/test/gyanikaunserver/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin))
#4 /home/msudhanshu/test/gyanikaunserver/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /home/msudhanshu/test/gyanikaunserver/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /home/msudhanshu/test/gyanikaunserver/index.php(109): Kohana_Request->execute()
#7 {main}
2012-11-24 05:14:25 --- ERROR: ErrorException [ 2 ]: include_once(/home/msudhanshu/test/gyanikaunserver/modules/libraries/Google_Spreadsheet.php): failed to open stream: No such file or directory ~ MODPATH/gamex_backend/libraries/sync.php [ 9 ]
2012-11-24 05:14:25 --- STRACE: ErrorException [ 2 ]: include_once(/home/msudhanshu/test/gyanikaunserver/modules/libraries/Google_Spreadsheet.php): failed to open stream: No such file or directory ~ MODPATH/gamex_backend/libraries/sync.php [ 9 ]
--
#0 /home/msudhanshu/test/gyanikaunserver/modules/gamex_backend/libraries/sync.php(9): Kohana_Core::error_handler(2, 'include_once(/h...', '/home/msudhansh...', 9, Array)
#1 /home/msudhanshu/test/gyanikaunserver/modules/gamex_backend/libraries/sync.php(9): include_once()
#2 /home/msudhanshu/test/gyanikaunserver/application/classes/controller/admin.php(90): include_once('/home/msudhansh...')
#3 [internal function]: Controller_Admin->action_syncConfirmation()
#4 /home/msudhanshu/test/gyanikaunserver/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin))
#5 /home/msudhanshu/test/gyanikaunserver/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /home/msudhanshu/test/gyanikaunserver/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /home/msudhanshu/test/gyanikaunserver/index.php(109): Kohana_Request->execute()
#8 {main}
2012-11-24 05:14:56 --- ERROR: ErrorException [ 1 ]: Class 'Model_Gamex' not found ~ MODPATH/gamex_backend/libraries/sync.php [ 452 ]
2012-11-24 05:14:56 --- STRACE: ErrorException [ 1 ]: Class 'Model_Gamex' not found ~ MODPATH/gamex_backend/libraries/sync.php [ 452 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-11-24 05:23:28 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_Package::create_model() ~ MODPATH/gamex_backend/libraries/sync.php [ 459 ]
2012-11-24 05:23:28 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_Package::create_model() ~ MODPATH/gamex_backend/libraries/sync.php [ 459 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-11-24 05:26:34 --- ERROR: ErrorException [ 1 ]: Class 'Model_Gamex' not found ~ APPPATH/classes/model/package.php [ 3 ]
2012-11-24 05:26:34 --- STRACE: ErrorException [ 1 ]: Class 'Model_Gamex' not found ~ APPPATH/classes/model/package.php [ 3 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-11-24 05:28:24 --- ERROR: ErrorException [ 1 ]: Class 'ActiveRecord\Model' not found ~ APPPATH/classes/model/gamex.php [ 3 ]
2012-11-24 05:28:24 --- STRACE: ErrorException [ 1 ]: Class 'ActiveRecord\Model' not found ~ APPPATH/classes/model/gamex.php [ 3 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-11-24 05:28:57 --- ERROR: ErrorException [ 1 ]: Class 'Model_Kiwi' not found ~ APPPATH/classes/model/gamex.php [ 653 ]
2012-11-24 05:28:57 --- STRACE: ErrorException [ 1 ]: Class 'Model_Kiwi' not found ~ APPPATH/classes/model/gamex.php [ 653 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-11-24 05:29:58 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_Package::attributes() ~ APPPATH/classes/model/gamex.php [ 656 ]
2012-11-24 05:29:58 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_Package::attributes() ~ APPPATH/classes/model/gamex.php [ 656 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-11-24 05:31:57 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_Package::attributes() ~ APPPATH/classes/model/gamex.php [ 656 ]
2012-11-24 05:31:57 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_Package::attributes() ~ APPPATH/classes/model/gamex.php [ 656 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-11-24 05:37:09 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_Package::attributes() ~ APPPATH/classes/model/gamex.php [ 656 ]
2012-11-24 05:37:09 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_Package::attributes() ~ APPPATH/classes/model/gamex.php [ 656 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-11-24 05:37:17 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_Package::attributes() ~ APPPATH/classes/model/gamex.php [ 656 ]
2012-11-24 05:37:17 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_Package::attributes() ~ APPPATH/classes/model/gamex.php [ 656 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-11-24 05:40:59 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_Package::attributes() ~ APPPATH/classes/model/gamex.php [ 657 ]
2012-11-24 05:40:59 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_Package::attributes() ~ APPPATH/classes/model/gamex.php [ 657 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-11-24 06:00:22 --- ERROR: Exception [ 0 ]: Unable to find worksheet by name: "Sheet1", confirm the name of the worksheet ~ MODPATH/gamex_backend/libraries/Google_Spreadsheet.php [ 69 ]
2012-11-24 06:00:22 --- STRACE: Exception [ 0 ]: Unable to find worksheet by name: "Sheet1", confirm the name of the worksheet ~ MODPATH/gamex_backend/libraries/Google_Spreadsheet.php [ 69 ]
--
#0 /home/msudhanshu/test/gyanikaunserver/modules/gamex_backend/libraries/sync.php(47): Google_Spreadsheet->addRow(Array)
#1 /home/msudhanshu/test/gyanikaunserver/application/classes/controller/admin.php(176): sync_spreadsheet('sudhanshu.manje...', 'prematma', 'gyanikaun-sheet', Array, Array, 'gyanikaun-sheet', Array, false, Array, true)
#2 [internal function]: Controller_Admin->action_syncConfirmation()
#3 /home/msudhanshu/test/gyanikaunserver/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin))
#4 /home/msudhanshu/test/gyanikaunserver/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /home/msudhanshu/test/gyanikaunserver/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /home/msudhanshu/test/gyanikaunserver/index.php(109): Kohana_Request->execute()
#7 {main}
2012-11-24 06:01:07 --- ERROR: Exception [ 0 ]: Unable to find worksheet by name: "Sheet1", confirm the name of the worksheet ~ MODPATH/gamex_backend/libraries/Google_Spreadsheet.php [ 69 ]
2012-11-24 06:01:07 --- STRACE: Exception [ 0 ]: Unable to find worksheet by name: "Sheet1", confirm the name of the worksheet ~ MODPATH/gamex_backend/libraries/Google_Spreadsheet.php [ 69 ]
--
#0 /home/msudhanshu/test/gyanikaunserver/modules/gamex_backend/libraries/sync.php(47): Google_Spreadsheet->addRow(Array)
#1 /home/msudhanshu/test/gyanikaunserver/application/classes/controller/admin.php(176): sync_spreadsheet('sudhanshu.manje...', 'prematma', 'gyanikaun-sheet', Array, Array, 'gyanikaun-sheet', Array, false, Array, true)
#2 [internal function]: Controller_Admin->action_syncConfirmation()
#3 /home/msudhanshu/test/gyanikaunserver/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin))
#4 /home/msudhanshu/test/gyanikaunserver/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /home/msudhanshu/test/gyanikaunserver/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /home/msudhanshu/test/gyanikaunserver/index.php(109): Kohana_Request->execute()
#7 {main}
2012-11-24 06:03:24 --- ERROR: Zend_Gdata_App_HttpException [ 0 ]: Expected response code 200, got 400
We&#39;re sorry, a server error occurred. Please wait a bit and try reloading your spreadsheet. ~ /usr/share/php/Zend/Gdata/App.php [ 709 ]
2012-11-24 06:03:24 --- STRACE: Zend_Gdata_App_HttpException [ 0 ]: Expected response code 200, got 400
We&#39;re sorry, a server error occurred. Please wait a bit and try reloading your spreadsheet. ~ /usr/share/php/Zend/Gdata/App.php [ 709 ]
--
#0 /usr/share/php/Zend/Gdata.php(219): Zend_Gdata_App->performHttpRequest('POST', 'https://spreads...', Array, '<atom:entry xml...', 'application/ato...', NULL)
#1 /usr/share/php/Zend/Gdata/App.php(900): Zend_Gdata->performHttpRequest('POST', 'https://spreads...', Array, '<atom:entry xml...', 'application/ato...')
#2 /usr/share/php/Zend/Gdata/App.php(975): Zend_Gdata_App->post('<atom:entry xml...', 'https://spreads...', NULL, NULL, Array)
#3 /usr/share/php/Zend/Gdata/Spreadsheets.php(336): Zend_Gdata_App->insertEntry('<atom:entry xml...', 'https://spreads...', 'Zend_Gdata_Spre...')
#4 /home/msudhanshu/test/gyanikaunserver/modules/gamex_backend/libraries/Google_Spreadsheet.php(75): Zend_Gdata_Spreadsheets->insertRow(Array, 't9-lgmwC5K2SbIs...', 'od7')
#5 /home/msudhanshu/test/gyanikaunserver/modules/gamex_backend/libraries/sync.php(459): Google_Spreadsheet->addRow(Array)
#6 /home/msudhanshu/test/gyanikaunserver/modules/gamex_backend/libraries/sync.php(67): sync_worksheet(Object(Google_Spreadsheet), 'Package', 1353758601, 'Package', Array, Array, NULL, true)
#7 /home/msudhanshu/test/gyanikaunserver/application/classes/controller/admin.php(176): sync_spreadsheet('sudhanshu.manje...', 'prematma', 'gyanikaun-sheet', Array, Array, 'gyanikaun-sheet', Array, false, Array, true)
#8 [internal function]: Controller_Admin->action_syncConfirmation()
#9 /home/msudhanshu/test/gyanikaunserver/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin))
#10 /home/msudhanshu/test/gyanikaunserver/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /home/msudhanshu/test/gyanikaunserver/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 /home/msudhanshu/test/gyanikaunserver/index.php(109): Kohana_Request->execute()
#13 {main}
2012-11-24 06:04:51 --- ERROR: Exception [ 0 ]: Unable to find worksheet by name: "Resource", confirm the name of the worksheet ~ MODPATH/gamex_backend/libraries/Google_Spreadsheet.php [ 69 ]
2012-11-24 06:04:51 --- STRACE: Exception [ 0 ]: Unable to find worksheet by name: "Resource", confirm the name of the worksheet ~ MODPATH/gamex_backend/libraries/Google_Spreadsheet.php [ 69 ]
--
#0 /home/msudhanshu/test/gyanikaunserver/modules/gamex_backend/libraries/sync.php(459): Google_Spreadsheet->addRow(Array)
#1 /home/msudhanshu/test/gyanikaunserver/modules/gamex_backend/libraries/sync.php(67): sync_worksheet(Object(Google_Spreadsheet), 'Resource', 1353758687, 'Resource', Array, Array, NULL, true)
#2 /home/msudhanshu/test/gyanikaunserver/application/classes/controller/admin.php(176): sync_spreadsheet('sudhanshu.manje...', 'prematma', 'gyanikaun-sheet', Array, Array, 'gyanikaun-sheet', Array, false, Array, true)
#3 [internal function]: Controller_Admin->action_syncConfirmation()
#4 /home/msudhanshu/test/gyanikaunserver/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin))
#5 /home/msudhanshu/test/gyanikaunserver/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /home/msudhanshu/test/gyanikaunserver/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /home/msudhanshu/test/gyanikaunserver/index.php(109): Kohana_Request->execute()
#8 {main}
2012-11-24 06:05:30 --- ERROR: Exception [ 0 ]: Unable to find worksheet by name: "Resource", confirm the name of the worksheet ~ MODPATH/gamex_backend/libraries/Google_Spreadsheet.php [ 69 ]
2012-11-24 06:05:30 --- STRACE: Exception [ 0 ]: Unable to find worksheet by name: "Resource", confirm the name of the worksheet ~ MODPATH/gamex_backend/libraries/Google_Spreadsheet.php [ 69 ]
--
#0 /home/msudhanshu/test/gyanikaunserver/modules/gamex_backend/libraries/sync.php(459): Google_Spreadsheet->addRow(Array)
#1 /home/msudhanshu/test/gyanikaunserver/modules/gamex_backend/libraries/sync.php(67): sync_worksheet(Object(Google_Spreadsheet), 'Resource', 1353758725, 'Resource', Array, Array, NULL, true)
#2 /home/msudhanshu/test/gyanikaunserver/application/classes/controller/admin.php(176): sync_spreadsheet('sudhanshu.manje...', 'prematma', 'gyanikaun-sheet', Array, Array, 'gyanikaun-sheet', Array, false, Array, true)
#3 [internal function]: Controller_Admin->action_syncConfirmation()
#4 /home/msudhanshu/test/gyanikaunserver/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin))
#5 /home/msudhanshu/test/gyanikaunserver/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /home/msudhanshu/test/gyanikaunserver/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /home/msudhanshu/test/gyanikaunserver/index.php(109): Kohana_Request->execute()
#8 {main}
2012-11-24 09:05:42 --- ERROR: ErrorException [ 8 ]: Undefined index: themeindex ~ APPPATH/libraries/sync_helper.php [ 52 ]
2012-11-24 09:05:42 --- STRACE: ErrorException [ 8 ]: Undefined index: themeindex ~ APPPATH/libraries/sync_helper.php [ 52 ]
--
#0 /home/msudhanshu/test/gyanikaunserver/application/libraries/sync_helper.php(52): Kohana_Core::error_handler(8, 'Undefined index...', '/home/msudhansh...', 52, Array)
#1 /home/msudhanshu/test/gyanikaunserver/modules/gamex_backend/libraries/sync.php(56): sync_extra_sheets(Object(Google_Spreadsheet), 1353769540)
#2 /home/msudhanshu/test/gyanikaunserver/application/classes/controller/admin.php(176): sync_spreadsheet('sudhanshu.manje...', 'prematma', 'gyanikaun-sheet', Array, Array, 'gyanikaun-sheet', Array, false, Array, true)
#3 [internal function]: Controller_Admin->action_syncConfirmation()
#4 /home/msudhanshu/test/gyanikaunserver/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin))
#5 /home/msudhanshu/test/gyanikaunserver/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /home/msudhanshu/test/gyanikaunserver/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /home/msudhanshu/test/gyanikaunserver/index.php(109): Kohana_Request->execute()
#8 {main}
2012-11-24 09:12:59 --- ERROR: ErrorException [ 8 ]: Undefined index: package_id ~ APPPATH/libraries/sync_helper.php [ 57 ]
2012-11-24 09:12:59 --- STRACE: ErrorException [ 8 ]: Undefined index: package_id ~ APPPATH/libraries/sync_helper.php [ 57 ]
--
#0 /home/msudhanshu/test/gyanikaunserver/application/libraries/sync_helper.php(57): Kohana_Core::error_handler(8, 'Undefined index...', '/home/msudhansh...', 57, Array)
#1 /home/msudhanshu/test/gyanikaunserver/modules/gamex_backend/libraries/sync.php(56): sync_extra_sheets(Object(Google_Spreadsheet), 1353769976)
#2 /home/msudhanshu/test/gyanikaunserver/application/classes/controller/admin.php(176): sync_spreadsheet('sudhanshu.manje...', 'prematma', 'gyanikaun-sheet', Array, Array, 'gyanikaun-sheet', Array, false, Array, true)
#3 [internal function]: Controller_Admin->action_syncConfirmation()
#4 /home/msudhanshu/test/gyanikaunserver/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin))
#5 /home/msudhanshu/test/gyanikaunserver/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /home/msudhanshu/test/gyanikaunserver/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /home/msudhanshu/test/gyanikaunserver/index.php(109): Kohana_Request->execute()
#8 {main}
2012-11-24 09:15:21 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_Package::find_by_packageid() ~ APPPATH/classes/model/package.php [ 11 ]
2012-11-24 09:15:21 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_Package::find_by_packageid() ~ APPPATH/classes/model/package.php [ 11 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-11-24 09:22:01 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_Package::find_by_packageid() ~ APPPATH/classes/model/package.php [ 11 ]
2012-11-24 09:22:01 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_Package::find_by_packageid() ~ APPPATH/classes/model/package.php [ 11 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-11-24 09:33:15 --- ERROR: ErrorException [ 1 ]: Class 'Model_TableVersion' not found ~ APPPATH/libraries/sync_helper.php [ 64 ]
2012-11-24 09:33:15 --- STRACE: ErrorException [ 1 ]: Class 'Model_TableVersion' not found ~ APPPATH/libraries/sync_helper.php [ 64 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-11-24 09:36:23 --- ERROR: ErrorException [ 8 ]: Undefined variable: updated_classes ~ MODPATH/gamex_backend/libraries/sync.php [ 210 ]
2012-11-24 09:36:23 --- STRACE: ErrorException [ 8 ]: Undefined variable: updated_classes ~ MODPATH/gamex_backend/libraries/sync.php [ 210 ]
--
#0 /home/msudhanshu/test/gyanikaunserver/modules/gamex_backend/libraries/sync.php(210): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/msudhansh...', 210, Array)
#1 /home/msudhanshu/test/gyanikaunserver/application/classes/controller/admin.php(176): sync_spreadsheet('sudhanshu.manje...', 'prematma', 'gyanikaun-sheet', Array, Array, 'gyanikaun-sheet', Array, false, Array, true)
#2 [internal function]: Controller_Admin->action_syncConfirmation()
#3 /home/msudhanshu/test/gyanikaunserver/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin))
#4 /home/msudhanshu/test/gyanikaunserver/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /home/msudhanshu/test/gyanikaunserver/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /home/msudhanshu/test/gyanikaunserver/index.php(109): Kohana_Request->execute()
#7 {main}
2012-11-24 11:01:55 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/libraries/sync_helper.php [ 63 ]
2012-11-24 11:01:55 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/libraries/sync_helper.php [ 63 ]
--
#0 /home/msudhanshu/test/gyanikaunserver/application/libraries/sync_helper.php(63): Kohana_Core::error_handler(2, 'Invalid argumen...', '/home/msudhansh...', 63, Array)
#1 /home/msudhanshu/test/gyanikaunserver/modules/gamex_backend/libraries/sync.php(58): sync_extra_sheets(Object(Google_Spreadsheet), 1353776512)
#2 /home/msudhanshu/test/gyanikaunserver/application/classes/controller/admin.php(176): sync_spreadsheet('sudhanshu.manje...', 'prematma', 'gyanikaun-sheet', Array, Array, 'gyanikaun-sheet', Array, false, Array, true)
#3 [internal function]: Controller_Admin->action_syncConfirmation()
#4 /home/msudhanshu/test/gyanikaunserver/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin))
#5 /home/msudhanshu/test/gyanikaunserver/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /home/msudhanshu/test/gyanikaunserver/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /home/msudhanshu/test/gyanikaunserver/index.php(109): Kohana_Request->execute()
#8 {main}
2012-11-24 11:04:27 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/libraries/sync_helper.php [ 63 ]
2012-11-24 11:04:27 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/libraries/sync_helper.php [ 63 ]
--
#0 /home/msudhanshu/test/gyanikaunserver/application/libraries/sync_helper.php(63): Kohana_Core::error_handler(2, 'Invalid argumen...', '/home/msudhansh...', 63, Array)
#1 /home/msudhanshu/test/gyanikaunserver/modules/gamex_backend/libraries/sync.php(58): sync_extra_sheets(Object(Google_Spreadsheet), 1353776664)
#2 /home/msudhanshu/test/gyanikaunserver/application/classes/controller/admin.php(176): sync_spreadsheet('sudhanshu.manje...', 'prematma', 'gyanikaun-sheet', Array, Array, 'gyanikaun-sheet', Array, false, Array, true)
#3 [internal function]: Controller_Admin->action_syncConfirmation()
#4 /home/msudhanshu/test/gyanikaunserver/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin))
#5 /home/msudhanshu/test/gyanikaunserver/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /home/msudhanshu/test/gyanikaunserver/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /home/msudhanshu/test/gyanikaunserver/index.php(109): Kohana_Request->execute()
#8 {main}
2012-11-24 11:05:47 --- ERROR: Database_Exception [ 1062 ]: Duplicate entry '0' for key 'PRIMARY' [ INSERT INTO `packages` (`package_name`, `version`) VALUES ('AOL', 1353776744) ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-11-24 11:05:47 --- STRACE: Database_Exception [ 1062 ]: Duplicate entry '0' for key 'PRIMARY' [ INSERT INTO `packages` (`package_name`, `version`) VALUES ('AOL', 1353776744) ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/msudhanshu/test/gyanikaunserver/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `pa...', false, Array)
#1 /home/msudhanshu/test/gyanikaunserver/modules/orm/classes/kohana/orm.php(1252): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /home/msudhanshu/test/gyanikaunserver/modules/orm/classes/kohana/orm.php(1348): Kohana_ORM->create(NULL)
#3 /home/msudhanshu/test/gyanikaunserver/application/classes/model/package.php(28): Kohana_ORM->save()
#4 /home/msudhanshu/test/gyanikaunserver/application/libraries/sync_helper.php(58): Model_Package::create_or_update('1', 'AOL', 1353776744, NULL)
#5 /home/msudhanshu/test/gyanikaunserver/modules/gamex_backend/libraries/sync.php(58): sync_extra_sheets(Object(Google_Spreadsheet), 1353776744)
#6 /home/msudhanshu/test/gyanikaunserver/application/classes/controller/admin.php(176): sync_spreadsheet('sudhanshu.manje...', 'prematma', 'gyanikaun-sheet', Array, Array, 'gyanikaun-sheet', Array, false, Array, true)
#7 [internal function]: Controller_Admin->action_syncConfirmation()
#8 /home/msudhanshu/test/gyanikaunserver/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin))
#9 /home/msudhanshu/test/gyanikaunserver/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 /home/msudhanshu/test/gyanikaunserver/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#11 /home/msudhanshu/test/gyanikaunserver/index.php(109): Kohana_Request->execute()
#12 {main}
2012-11-24 11:11:48 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/libraries/sync_helper.php [ 63 ]
2012-11-24 11:11:48 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/libraries/sync_helper.php [ 63 ]
--
#0 /home/msudhanshu/test/gyanikaunserver/application/libraries/sync_helper.php(63): Kohana_Core::error_handler(2, 'Invalid argumen...', '/home/msudhansh...', 63, Array)
#1 /home/msudhanshu/test/gyanikaunserver/modules/gamex_backend/libraries/sync.php(58): sync_extra_sheets(Object(Google_Spreadsheet), 1353777106)
#2 /home/msudhanshu/test/gyanikaunserver/application/classes/controller/admin.php(176): sync_spreadsheet('sudhanshu.manje...', 'prematma', 'gyanikaun-sheet', Array, Array, 'gyanikaun-sheet', Array, false, Array, true)
#3 [internal function]: Controller_Admin->action_syncConfirmation()
#4 /home/msudhanshu/test/gyanikaunserver/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin))
#5 /home/msudhanshu/test/gyanikaunserver/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /home/msudhanshu/test/gyanikaunserver/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /home/msudhanshu/test/gyanikaunserver/index.php(109): Kohana_Request->execute()
#8 {main}
2012-11-24 11:17:14 --- ERROR: Database_Exception [ 1062 ]: Duplicate entry '0' for key 'PRIMARY' [ INSERT INTO `packages` (`package_name`, `version`) VALUES ('Ayurveda1', 1353777432) ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-11-24 11:17:14 --- STRACE: Database_Exception [ 1062 ]: Duplicate entry '0' for key 'PRIMARY' [ INSERT INTO `packages` (`package_name`, `version`) VALUES ('Ayurveda1', 1353777432) ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/msudhanshu/test/gyanikaunserver/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `pa...', false, Array)
#1 /home/msudhanshu/test/gyanikaunserver/modules/orm/classes/kohana/orm.php(1252): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /home/msudhanshu/test/gyanikaunserver/modules/orm/classes/kohana/orm.php(1348): Kohana_ORM->create(NULL)
#3 /home/msudhanshu/test/gyanikaunserver/application/classes/model/package.php(28): Kohana_ORM->save()
#4 /home/msudhanshu/test/gyanikaunserver/application/libraries/sync_helper.php(58): Model_Package::create_or_update('3', 'Ayurveda1', 1353777432, NULL)
#5 /home/msudhanshu/test/gyanikaunserver/modules/gamex_backend/libraries/sync.php(58): sync_extra_sheets(Object(Google_Spreadsheet), 1353777432)
#6 /home/msudhanshu/test/gyanikaunserver/application/classes/controller/admin.php(176): sync_spreadsheet('sudhanshu.manje...', 'prematma', 'gyanikaun-sheet', Array, Array, 'gyanikaun-sheet', Array, false, Array, true)
#7 [internal function]: Controller_Admin->action_syncConfirmation()
#8 /home/msudhanshu/test/gyanikaunserver/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin))
#9 /home/msudhanshu/test/gyanikaunserver/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 /home/msudhanshu/test/gyanikaunserver/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#11 /home/msudhanshu/test/gyanikaunserver/index.php(109): Kohana_Request->execute()
#12 {main}
2012-11-24 11:20:43 --- ERROR: Database_Exception [ 1062 ]: Duplicate entry '0' for key 'PRIMARY' [ INSERT INTO `packages` (`package_name`, `version`) VALUES ('Ayurveda1', 1353777641) ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-11-24 11:20:43 --- STRACE: Database_Exception [ 1062 ]: Duplicate entry '0' for key 'PRIMARY' [ INSERT INTO `packages` (`package_name`, `version`) VALUES ('Ayurveda1', 1353777641) ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/msudhanshu/test/gyanikaunserver/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `pa...', false, Array)
#1 /home/msudhanshu/test/gyanikaunserver/modules/orm/classes/kohana/orm.php(1252): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /home/msudhanshu/test/gyanikaunserver/modules/orm/classes/kohana/orm.php(1348): Kohana_ORM->create(NULL)
#3 /home/msudhanshu/test/gyanikaunserver/application/classes/model/package.php(28): Kohana_ORM->save()
#4 /home/msudhanshu/test/gyanikaunserver/application/libraries/sync_helper.php(58): Model_Package::create_or_update('3', 'Ayurveda1', 1353777641, NULL)
#5 /home/msudhanshu/test/gyanikaunserver/modules/gamex_backend/libraries/sync.php(58): sync_extra_sheets(Object(Google_Spreadsheet), 1353777641)
#6 /home/msudhanshu/test/gyanikaunserver/application/classes/controller/admin.php(176): sync_spreadsheet('sudhanshu.manje...', 'prematma', 'gyanikaun-sheet', Array, Array, 'gyanikaun-sheet', Array, false, Array, true)
#7 [internal function]: Controller_Admin->action_syncConfirmation()
#8 /home/msudhanshu/test/gyanikaunserver/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin))
#9 /home/msudhanshu/test/gyanikaunserver/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 /home/msudhanshu/test/gyanikaunserver/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#11 /home/msudhanshu/test/gyanikaunserver/index.php(109): Kohana_Request->execute()
#12 {main}
2012-11-24 11:23:59 --- ERROR: Database_Exception [ 1062 ]: Duplicate entry '0' for key 'PRIMARY' [ INSERT INTO `packages` (`package_name`, `version`) VALUES ('Ayurveda1', 1353777837) ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-11-24 11:23:59 --- STRACE: Database_Exception [ 1062 ]: Duplicate entry '0' for key 'PRIMARY' [ INSERT INTO `packages` (`package_name`, `version`) VALUES ('Ayurveda1', 1353777837) ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/msudhanshu/test/gyanikaunserver/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `pa...', false, Array)
#1 /home/msudhanshu/test/gyanikaunserver/modules/orm/classes/kohana/orm.php(1252): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /home/msudhanshu/test/gyanikaunserver/modules/orm/classes/kohana/orm.php(1348): Kohana_ORM->create(NULL)
#3 /home/msudhanshu/test/gyanikaunserver/application/classes/model/package.php(27): Kohana_ORM->save()
#4 /home/msudhanshu/test/gyanikaunserver/application/libraries/sync_helper.php(58): Model_Package::create_or_update('3', 'Ayurveda1', 1353777837, NULL)
#5 /home/msudhanshu/test/gyanikaunserver/modules/gamex_backend/libraries/sync.php(58): sync_extra_sheets(Object(Google_Spreadsheet), 1353777837)
#6 /home/msudhanshu/test/gyanikaunserver/application/classes/controller/admin.php(176): sync_spreadsheet('sudhanshu.manje...', 'prematma', 'gyanikaun-sheet', Array, Array, 'gyanikaun-sheet', Array, false, Array, true)
#7 [internal function]: Controller_Admin->action_syncConfirmation()
#8 /home/msudhanshu/test/gyanikaunserver/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin))
#9 /home/msudhanshu/test/gyanikaunserver/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 /home/msudhanshu/test/gyanikaunserver/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#11 /home/msudhanshu/test/gyanikaunserver/index.php(109): Kohana_Request->execute()
#12 {main}
2012-11-24 11:25:39 --- ERROR: Kohana_Exception [ 0 ]: The packageid property does not exist in the Model_Package class ~ MODPATH/orm/classes/kohana/orm.php [ 692 ]
2012-11-24 11:25:39 --- STRACE: Kohana_Exception [ 0 ]: The packageid property does not exist in the Model_Package class ~ MODPATH/orm/classes/kohana/orm.php [ 692 ]
--
#0 /home/msudhanshu/test/gyanikaunserver/modules/orm/classes/kohana/orm.php(643): Kohana_ORM->set('packageid', '3')
#1 /home/msudhanshu/test/gyanikaunserver/application/classes/model/package.php(23): Kohana_ORM->__set('packageid', '3')
#2 /home/msudhanshu/test/gyanikaunserver/application/libraries/sync_helper.php(58): Model_Package::create_or_update('3', 'Ayurveda1', 1353777936, NULL)
#3 /home/msudhanshu/test/gyanikaunserver/modules/gamex_backend/libraries/sync.php(58): sync_extra_sheets(Object(Google_Spreadsheet), 1353777936)
#4 /home/msudhanshu/test/gyanikaunserver/application/classes/controller/admin.php(176): sync_spreadsheet('sudhanshu.manje...', 'prematma', 'gyanikaun-sheet', Array, Array, 'gyanikaun-sheet', Array, false, Array, true)
#5 [internal function]: Controller_Admin->action_syncConfirmation()
#6 /home/msudhanshu/test/gyanikaunserver/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin))
#7 /home/msudhanshu/test/gyanikaunserver/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /home/msudhanshu/test/gyanikaunserver/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#9 /home/msudhanshu/test/gyanikaunserver/index.php(109): Kohana_Request->execute()
#10 {main}
2012-11-24 11:28:27 --- ERROR: Zend_Gdata_App_HttpException [ 0 ]: Expected response code 200, got 500
We&#39;re sorry, a server error occurred. Please wait a bit and try reloading your spreadsheet. ~ /usr/share/php/Zend/Gdata/App.php [ 709 ]
2012-11-24 11:28:27 --- STRACE: Zend_Gdata_App_HttpException [ 0 ]: Expected response code 200, got 500
We&#39;re sorry, a server error occurred. Please wait a bit and try reloading your spreadsheet. ~ /usr/share/php/Zend/Gdata/App.php [ 709 ]
--
#0 /usr/share/php/Zend/Gdata.php(219): Zend_Gdata_App->performHttpRequest('GET', 'https://spreads...', Array, NULL, NULL, NULL)
#1 /usr/share/php/Zend/Gdata/App.php(875): Zend_Gdata->performHttpRequest('GET', 'https://spreads...', Array)
#2 /usr/share/php/Zend/Gdata/App.php(763): Zend_Gdata_App->get('https://spreads...', NULL)
#3 /usr/share/php/Zend/Gdata/App.php(205): Zend_Gdata_App->importUrl('https://spreads...', 'Zend_Gdata_Spre...', NULL)
#4 /usr/share/php/Zend/Gdata.php(162): Zend_Gdata_App->getFeed('https://spreads...', 'Zend_Gdata_Spre...')
#5 /usr/share/php/Zend/Gdata/Spreadsheets.php(150): Zend_Gdata->getFeed('https://spreads...', 'Zend_Gdata_Spre...')
#6 /home/msudhanshu/test/gyanikaunserver/modules/gamex_backend/libraries/Google_Spreadsheet.php(254): Zend_Gdata_Spreadsheets->getSpreadsheetFeed()
#7 /home/msudhanshu/test/gyanikaunserver/modules/gamex_backend/libraries/Google_Spreadsheet.php(235): Google_Spreadsheet->getSpreadsheetId()
#8 /home/msudhanshu/test/gyanikaunserver/modules/gamex_backend/libraries/Google_Spreadsheet.php(130): Google_Spreadsheet->findRows(false)
#9 /home/msudhanshu/test/gyanikaunserver/application/libraries/sync_helper.php(54): Google_Spreadsheet->getRows()
#10 /home/msudhanshu/test/gyanikaunserver/modules/gamex_backend/libraries/sync.php(58): sync_extra_sheets(Object(Google_Spreadsheet), 1353778097)
#11 /home/msudhanshu/test/gyanikaunserver/application/classes/controller/admin.php(176): sync_spreadsheet('sudhanshu.manje...', 'prematma', 'gyanikaun-sheet', Array, Array, 'gyanikaun-sheet', Array, false, Array, true)
#12 [internal function]: Controller_Admin->action_syncConfirmation()
#13 /home/msudhanshu/test/gyanikaunserver/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin))
#14 /home/msudhanshu/test/gyanikaunserver/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#15 /home/msudhanshu/test/gyanikaunserver/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#16 /home/msudhanshu/test/gyanikaunserver/index.php(109): Kohana_Request->execute()
#17 {main}
2012-11-24 11:30:13 --- ERROR: Database_Exception [ 1062 ]: Duplicate entry '0' for key 'PRIMARY' [ INSERT INTO `packages` (`package_name`, `version`) VALUES ('Ayurveda1', 1353778211) ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-11-24 11:30:13 --- STRACE: Database_Exception [ 1062 ]: Duplicate entry '0' for key 'PRIMARY' [ INSERT INTO `packages` (`package_name`, `version`) VALUES ('Ayurveda1', 1353778211) ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/msudhanshu/test/gyanikaunserver/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `pa...', false, Array)
#1 /home/msudhanshu/test/gyanikaunserver/modules/orm/classes/kohana/orm.php(1252): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /home/msudhanshu/test/gyanikaunserver/modules/orm/classes/kohana/orm.php(1348): Kohana_ORM->create(NULL)
#3 /home/msudhanshu/test/gyanikaunserver/application/classes/model/package.php(26): Kohana_ORM->save()
#4 /home/msudhanshu/test/gyanikaunserver/application/libraries/sync_helper.php(58): Model_Package::create_or_update('3', 'Ayurveda1', 1353778211, NULL)
#5 /home/msudhanshu/test/gyanikaunserver/modules/gamex_backend/libraries/sync.php(58): sync_extra_sheets(Object(Google_Spreadsheet), 1353778211)
#6 /home/msudhanshu/test/gyanikaunserver/application/classes/controller/admin.php(176): sync_spreadsheet('sudhanshu.manje...', 'prematma', 'gyanikaun-sheet', Array, Array, 'gyanikaun-sheet', Array, false, Array, true)
#7 [internal function]: Controller_Admin->action_syncConfirmation()
#8 /home/msudhanshu/test/gyanikaunserver/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin))
#9 /home/msudhanshu/test/gyanikaunserver/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 /home/msudhanshu/test/gyanikaunserver/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#11 /home/msudhanshu/test/gyanikaunserver/index.php(109): Kohana_Request->execute()
#12 {main}
2012-11-24 11:33:39 --- ERROR: Kohana_Exception [ 0 ]: Cannot update package model because it is not loaded. ~ MODPATH/orm/classes/kohana/orm.php [ 1284 ]
2012-11-24 11:33:39 --- STRACE: Kohana_Exception [ 0 ]: Cannot update package model because it is not loaded. ~ MODPATH/orm/classes/kohana/orm.php [ 1284 ]
--
#0 /home/msudhanshu/test/gyanikaunserver/application/classes/model/package.php(28): Kohana_ORM->update()
#1 /home/msudhanshu/test/gyanikaunserver/application/libraries/sync_helper.php(58): Model_Package::create_or_update('3', 'Ayurveda1', 1353778417, NULL)
#2 /home/msudhanshu/test/gyanikaunserver/modules/gamex_backend/libraries/sync.php(58): sync_extra_sheets(Object(Google_Spreadsheet), 1353778417)
#3 /home/msudhanshu/test/gyanikaunserver/application/classes/controller/admin.php(176): sync_spreadsheet('sudhanshu.manje...', 'prematma', 'gyanikaun-sheet', Array, Array, 'gyanikaun-sheet', Array, false, Array, true)
#4 [internal function]: Controller_Admin->action_syncConfirmation()
#5 /home/msudhanshu/test/gyanikaunserver/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin))
#6 /home/msudhanshu/test/gyanikaunserver/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/msudhanshu/test/gyanikaunserver/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /home/msudhanshu/test/gyanikaunserver/index.php(109): Kohana_Request->execute()
#9 {main}
2012-11-24 11:35:37 --- ERROR: Database_Exception [ 1062 ]: Duplicate entry '0' for key 'PRIMARY' [ INSERT INTO `packages` (`package_name`, `version`) VALUES ('Ayurveda1', 1353778535) ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-11-24 11:35:37 --- STRACE: Database_Exception [ 1062 ]: Duplicate entry '0' for key 'PRIMARY' [ INSERT INTO `packages` (`package_name`, `version`) VALUES ('Ayurveda1', 1353778535) ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/msudhanshu/test/gyanikaunserver/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `pa...', false, Array)
#1 /home/msudhanshu/test/gyanikaunserver/modules/orm/classes/kohana/orm.php(1252): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /home/msudhanshu/test/gyanikaunserver/modules/orm/classes/kohana/orm.php(1348): Kohana_ORM->create(NULL)
#3 /home/msudhanshu/test/gyanikaunserver/application/classes/model/package.php(26): Kohana_ORM->save()
#4 /home/msudhanshu/test/gyanikaunserver/application/libraries/sync_helper.php(58): Model_Package::create_or_update('3', 'Ayurveda1', 1353778535, NULL)
#5 /home/msudhanshu/test/gyanikaunserver/modules/gamex_backend/libraries/sync.php(58): sync_extra_sheets(Object(Google_Spreadsheet), 1353778535)
#6 /home/msudhanshu/test/gyanikaunserver/application/classes/controller/admin.php(176): sync_spreadsheet('sudhanshu.manje...', 'prematma', 'gyanikaun-sheet', Array, Array, 'gyanikaun-sheet', Array, false, Array, true)
#7 [internal function]: Controller_Admin->action_syncConfirmation()
#8 /home/msudhanshu/test/gyanikaunserver/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin))
#9 /home/msudhanshu/test/gyanikaunserver/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 /home/msudhanshu/test/gyanikaunserver/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#11 /home/msudhanshu/test/gyanikaunserver/index.php(109): Kohana_Request->execute()
#12 {main}
2012-11-24 11:38:44 --- ERROR: Database_Exception [ 1062 ]: Duplicate entry '0' for key 'PRIMARY' [ INSERT INTO `packages` (`package_name`, `version`) VALUES ('Ayurveda1', 1353778722) ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-11-24 11:38:44 --- STRACE: Database_Exception [ 1062 ]: Duplicate entry '0' for key 'PRIMARY' [ INSERT INTO `packages` (`package_name`, `version`) VALUES ('Ayurveda1', 1353778722) ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/msudhanshu/test/gyanikaunserver/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `pa...', false, Array)
#1 /home/msudhanshu/test/gyanikaunserver/modules/orm/classes/kohana/orm.php(1252): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /home/msudhanshu/test/gyanikaunserver/modules/orm/classes/kohana/orm.php(1348): Kohana_ORM->create(NULL)
#3 /home/msudhanshu/test/gyanikaunserver/application/classes/model/package.php(27): Kohana_ORM->save()
#4 /home/msudhanshu/test/gyanikaunserver/application/libraries/sync_helper.php(58): Model_Package::create_or_update('3', 'Ayurveda1', 1353778722, NULL)
#5 /home/msudhanshu/test/gyanikaunserver/modules/gamex_backend/libraries/sync.php(58): sync_extra_sheets(Object(Google_Spreadsheet), 1353778722)
#6 /home/msudhanshu/test/gyanikaunserver/application/classes/controller/admin.php(176): sync_spreadsheet('sudhanshu.manje...', 'prematma', 'gyanikaun-sheet', Array, Array, 'gyanikaun-sheet', Array, false, Array, true)
#7 [internal function]: Controller_Admin->action_syncConfirmation()
#8 /home/msudhanshu/test/gyanikaunserver/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin))
#9 /home/msudhanshu/test/gyanikaunserver/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 /home/msudhanshu/test/gyanikaunserver/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#11 /home/msudhanshu/test/gyanikaunserver/index.php(109): Kohana_Request->execute()
#12 {main}
2012-11-24 11:40:25 --- ERROR: Database_Exception [ 1062 ]: Duplicate entry '0' for key 'PRIMARY' [ INSERT INTO `packages` (`package_name`, `version`) VALUES ('Ayurveda1', 1353778823) ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-11-24 11:40:25 --- STRACE: Database_Exception [ 1062 ]: Duplicate entry '0' for key 'PRIMARY' [ INSERT INTO `packages` (`package_name`, `version`) VALUES ('Ayurveda1', 1353778823) ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/msudhanshu/test/gyanikaunserver/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `pa...', false, Array)
#1 /home/msudhanshu/test/gyanikaunserver/modules/orm/classes/kohana/orm.php(1252): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /home/msudhanshu/test/gyanikaunserver/modules/orm/classes/kohana/orm.php(1348): Kohana_ORM->create(NULL)
#3 /home/msudhanshu/test/gyanikaunserver/application/classes/model/package.php(27): Kohana_ORM->save()
#4 /home/msudhanshu/test/gyanikaunserver/application/libraries/sync_helper.php(58): Model_Package::create_or_update('3', 'Ayurveda1', 1353778823, NULL)
#5 /home/msudhanshu/test/gyanikaunserver/modules/gamex_backend/libraries/sync.php(58): sync_extra_sheets(Object(Google_Spreadsheet), 1353778823)
#6 /home/msudhanshu/test/gyanikaunserver/application/classes/controller/admin.php(176): sync_spreadsheet('sudhanshu.manje...', 'prematma', 'gyanikaun-sheet', Array, Array, 'gyanikaun-sheet', Array, false, Array, true)
#7 [internal function]: Controller_Admin->action_syncConfirmation()
#8 /home/msudhanshu/test/gyanikaunserver/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin))
#9 /home/msudhanshu/test/gyanikaunserver/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 /home/msudhanshu/test/gyanikaunserver/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#11 /home/msudhanshu/test/gyanikaunserver/index.php(109): Kohana_Request->execute()
#12 {main}
2012-11-24 11:42:04 --- ERROR: ErrorException [ 8 ]: Undefined variable: data ~ APPPATH/views/plain.php [ 1 ]
2012-11-24 11:42:04 --- STRACE: ErrorException [ 8 ]: Undefined variable: data ~ APPPATH/views/plain.php [ 1 ]
--
#0 /home/msudhanshu/test/gyanikaunserver/application/views/plain.php(1): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/msudhansh...', 1, Array)
#1 /home/msudhanshu/test/gyanikaunserver/system/classes/kohana/view.php(61): include('/home/msudhansh...')
#2 /home/msudhanshu/test/gyanikaunserver/system/classes/kohana/view.php(343): Kohana_View::capture('/home/msudhansh...', Array)
#3 /home/msudhanshu/test/gyanikaunserver/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 /home/msudhanshu/test/gyanikaunserver/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Admin))
#6 /home/msudhanshu/test/gyanikaunserver/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/msudhanshu/test/gyanikaunserver/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /home/msudhanshu/test/gyanikaunserver/index.php(109): Kohana_Request->execute()
#9 {main}