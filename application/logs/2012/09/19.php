<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2012-09-19 03:39:21 --- ERROR: ErrorException [ 1 ]: Class 'ActiveRecord\Model' not found ~ APPPATH\classes\model\introduction.php [ 3 ]
2012-09-19 03:39:21 --- STRACE: ErrorException [ 1 ]: Class 'ActiveRecord\Model' not found ~ APPPATH\classes\model\introduction.php [ 3 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-19 03:39:23 --- ERROR: ErrorException [ 1 ]: Class 'ActiveRecord\Model' not found ~ APPPATH\classes\model\introduction.php [ 3 ]
2012-09-19 03:39:23 --- STRACE: ErrorException [ 1 ]: Class 'ActiveRecord\Model' not found ~ APPPATH\classes\model\introduction.php [ 3 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-19 03:47:49 --- ERROR: ErrorException [ 1 ]: Class 'ActiveRecord\Model' not found ~ APPPATH\classes\model\introduction.php [ 3 ]
2012-09-19 03:47:49 --- STRACE: ErrorException [ 1 ]: Class 'ActiveRecord\Model' not found ~ APPPATH\classes\model\introduction.php [ 3 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-19 03:47:50 --- ERROR: ErrorException [ 1 ]: Class 'ActiveRecord\Model' not found ~ APPPATH\classes\model\introduction.php [ 3 ]
2012-09-19 03:47:50 --- STRACE: ErrorException [ 1 ]: Class 'ActiveRecord\Model' not found ~ APPPATH\classes\model\introduction.php [ 3 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-19 03:47:50 --- ERROR: ErrorException [ 1 ]: Class 'ActiveRecord\Model' not found ~ APPPATH\classes\model\introduction.php [ 3 ]
2012-09-19 03:47:50 --- STRACE: ErrorException [ 1 ]: Class 'ActiveRecord\Model' not found ~ APPPATH\classes\model\introduction.php [ 3 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-19 03:47:51 --- ERROR: ErrorException [ 1 ]: Class 'ActiveRecord\Model' not found ~ APPPATH\classes\model\introduction.php [ 3 ]
2012-09-19 03:47:51 --- STRACE: ErrorException [ 1 ]: Class 'ActiveRecord\Model' not found ~ APPPATH\classes\model\introduction.php [ 3 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-19 03:47:53 --- ERROR: ErrorException [ 1 ]: Class 'ActiveRecord\Model' not found ~ APPPATH\classes\model\introduction.php [ 3 ]
2012-09-19 03:47:53 --- STRACE: ErrorException [ 1 ]: Class 'ActiveRecord\Model' not found ~ APPPATH\classes\model\introduction.php [ 3 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-19 03:50:41 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$title ~ APPPATH\classes\controller\welcome.php [ 17 ]
2012-09-19 03:50:41 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$title ~ APPPATH\classes\controller\welcome.php [ 17 ]
--
#0 C:\xampp\htdocs\gyanikaunserver\application\classes\controller\welcome.php(17): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\xampp\htdocs...', 17, Array)
#1 [internal function]: Controller_Welcome->action_hello()
#2 C:\xampp\htdocs\gyanikaunserver\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Welcome))
#3 C:\xampp\htdocs\gyanikaunserver\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\xampp\htdocs\gyanikaunserver\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 C:\xampp\htdocs\gyanikaunserver\index.php(109): Kohana_Request->execute()
#6 {main}
2012-09-19 04:47:25 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL welcome/signin_user was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
2012-09-19 04:47:25 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL welcome/signin_user was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
--
#0 C:\xampp\htdocs\gyanikaunserver\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampp\htdocs\gyanikaunserver\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampp\htdocs\gyanikaunserver\index.php(109): Kohana_Request->execute()
#3 {main}
2012-09-19 04:47:43 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL login/signin_user was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-09-19 04:47:43 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL login/signin_user was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\xampp\htdocs\gyanikaunserver\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampp\htdocs\gyanikaunserver\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampp\htdocs\gyanikaunserver\index.php(109): Kohana_Request->execute()
#3 {main}
2012-09-19 04:48:34 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL login/signin_user was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
2012-09-19 04:48:34 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL login/signin_user was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
--
#0 C:\xampp\htdocs\gyanikaunserver\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampp\htdocs\gyanikaunserver\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampp\htdocs\gyanikaunserver\index.php(109): Kohana_Request->execute()
#3 {main}
2012-09-19 04:48:35 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL login/signin_user was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
2012-09-19 04:48:35 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL login/signin_user was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
--
#0 C:\xampp\htdocs\gyanikaunserver\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampp\htdocs\gyanikaunserver\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampp\htdocs\gyanikaunserver\index.php(109): Kohana_Request->execute()
#3 {main}
2012-09-19 04:48:36 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL login/signin_user was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
2012-09-19 04:48:36 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL login/signin_user was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
--
#0 C:\xampp\htdocs\gyanikaunserver\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampp\htdocs\gyanikaunserver\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampp\htdocs\gyanikaunserver\index.php(109): Kohana_Request->execute()
#3 {main}
2012-09-19 04:48:36 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL login/signin_user was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
2012-09-19 04:48:36 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL login/signin_user was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
--
#0 C:\xampp\htdocs\gyanikaunserver\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampp\htdocs\gyanikaunserver\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampp\htdocs\gyanikaunserver\index.php(109): Kohana_Request->execute()
#3 {main}
2012-09-19 04:48:38 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL login/signin_user was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
2012-09-19 04:48:38 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL login/signin_user was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
--
#0 C:\xampp\htdocs\gyanikaunserver\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampp\htdocs\gyanikaunserver\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampp\htdocs\gyanikaunserver\index.php(109): Kohana_Request->execute()
#3 {main}
2012-09-19 04:49:17 --- ERROR: ErrorException [ 1 ]: Class 'Model_User_details' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-09-19 04:49:17 --- STRACE: ErrorException [ 1 ]: Class 'Model_User_details' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-19 04:51:08 --- ERROR: ErrorException [ 1 ]: Class 'Model_User_details' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-09-19 04:51:08 --- STRACE: ErrorException [ 1 ]: Class 'Model_User_details' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-19 04:51:10 --- ERROR: ErrorException [ 1 ]: Class 'Model_User_details' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-09-19 04:51:10 --- STRACE: ErrorException [ 1 ]: Class 'Model_User_details' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-19 04:51:10 --- ERROR: ErrorException [ 1 ]: Class 'Model_User_details' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-09-19 04:51:10 --- STRACE: ErrorException [ 1 ]: Class 'Model_User_details' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-19 04:51:10 --- ERROR: ErrorException [ 1 ]: Class 'Model_User_details' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-09-19 04:51:10 --- STRACE: ErrorException [ 1 ]: Class 'Model_User_details' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-19 04:51:10 --- ERROR: ErrorException [ 1 ]: Class 'Model_User_details' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-09-19 04:51:10 --- STRACE: ErrorException [ 1 ]: Class 'Model_User_details' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-19 04:51:10 --- ERROR: ErrorException [ 1 ]: Class 'Model_User_details' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-09-19 04:51:10 --- STRACE: ErrorException [ 1 ]: Class 'Model_User_details' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-19 04:52:49 --- ERROR: ErrorException [ 1 ]: Class 'Model_User_details' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-09-19 04:52:49 --- STRACE: ErrorException [ 1 ]: Class 'Model_User_details' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-19 04:52:51 --- ERROR: ErrorException [ 1 ]: Class 'Model_User_details' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-09-19 04:52:51 --- STRACE: ErrorException [ 1 ]: Class 'Model_User_details' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-19 04:52:51 --- ERROR: ErrorException [ 1 ]: Class 'Model_User_details' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-09-19 04:52:51 --- STRACE: ErrorException [ 1 ]: Class 'Model_User_details' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-19 04:52:51 --- ERROR: ErrorException [ 1 ]: Class 'Model_User_details' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-09-19 04:52:51 --- STRACE: ErrorException [ 1 ]: Class 'Model_User_details' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-19 04:52:53 --- ERROR: ErrorException [ 1 ]: Class 'Model_User_details' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-09-19 04:52:53 --- STRACE: ErrorException [ 1 ]: Class 'Model_User_details' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-19 04:53:17 --- ERROR: ErrorException [ 1 ]: Class 'Model_User_details' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-09-19 04:53:17 --- STRACE: ErrorException [ 1 ]: Class 'Model_User_details' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-19 04:53:19 --- ERROR: ErrorException [ 1 ]: Class 'Model_User_details' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-09-19 04:53:19 --- STRACE: ErrorException [ 1 ]: Class 'Model_User_details' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-19 04:53:20 --- ERROR: ErrorException [ 1 ]: Class 'Model_User_details' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-09-19 04:53:20 --- STRACE: ErrorException [ 1 ]: Class 'Model_User_details' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-19 04:55:29 --- ERROR: Database_Exception [ 1146 ]: Table 'gyanikaundatabase.userdetailses' doesn't exist [ SHOW FULL COLUMNS FROM `userdetailses` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-09-19 04:55:29 --- STRACE: Database_Exception [ 1146 ]: Table 'gyanikaundatabase.userdetailses' doesn't exist [ SHOW FULL COLUMNS FROM `userdetailses` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\xampp\htdocs\gyanikaunserver\modules\database\classes\kohana\database\mysql.php(358): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 C:\xampp\htdocs\gyanikaunserver\modules\orm\classes\kohana\orm.php(1538): Kohana_Database_MySQL->list_columns('userdetailses')
#2 C:\xampp\htdocs\gyanikaunserver\modules\orm\classes\kohana\orm.php(392): Kohana_ORM->list_columns()
#3 C:\xampp\htdocs\gyanikaunserver\modules\orm\classes\kohana\orm.php(337): Kohana_ORM->reload_columns()
#4 C:\xampp\htdocs\gyanikaunserver\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#5 C:\xampp\htdocs\gyanikaunserver\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct(NULL)
#6 C:\xampp\htdocs\gyanikaunserver\application\classes\controller\login.php(28): Kohana_ORM::factory('userdetails')
#7 [internal function]: Controller_Login->action_signup()
#8 C:\xampp\htdocs\gyanikaunserver\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Login))
#9 C:\xampp\htdocs\gyanikaunserver\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 C:\xampp\htdocs\gyanikaunserver\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#11 C:\xampp\htdocs\gyanikaunserver\index.php(109): Kohana_Request->execute()
#12 {main}
2012-09-19 04:56:18 --- ERROR: Database_Exception [ 1146 ]: Table 'gyanikaundatabase.userdetailses' doesn't exist [ SHOW FULL COLUMNS FROM `userdetailses` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-09-19 04:56:18 --- STRACE: Database_Exception [ 1146 ]: Table 'gyanikaundatabase.userdetailses' doesn't exist [ SHOW FULL COLUMNS FROM `userdetailses` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\xampp\htdocs\gyanikaunserver\modules\database\classes\kohana\database\mysql.php(358): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 C:\xampp\htdocs\gyanikaunserver\modules\orm\classes\kohana\orm.php(1538): Kohana_Database_MySQL->list_columns('userdetailses')
#2 C:\xampp\htdocs\gyanikaunserver\modules\orm\classes\kohana\orm.php(392): Kohana_ORM->list_columns()
#3 C:\xampp\htdocs\gyanikaunserver\modules\orm\classes\kohana\orm.php(337): Kohana_ORM->reload_columns()
#4 C:\xampp\htdocs\gyanikaunserver\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#5 C:\xampp\htdocs\gyanikaunserver\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct(NULL)
#6 C:\xampp\htdocs\gyanikaunserver\application\classes\controller\login.php(28): Kohana_ORM::factory('userdetails')
#7 [internal function]: Controller_Login->action_signup()
#8 C:\xampp\htdocs\gyanikaunserver\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Login))
#9 C:\xampp\htdocs\gyanikaunserver\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 C:\xampp\htdocs\gyanikaunserver\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#11 C:\xampp\htdocs\gyanikaunserver\index.php(109): Kohana_Request->execute()
#12 {main}
2012-09-19 04:56:19 --- ERROR: Database_Exception [ 1146 ]: Table 'gyanikaundatabase.userdetailses' doesn't exist [ SHOW FULL COLUMNS FROM `userdetailses` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-09-19 04:56:19 --- STRACE: Database_Exception [ 1146 ]: Table 'gyanikaundatabase.userdetailses' doesn't exist [ SHOW FULL COLUMNS FROM `userdetailses` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\xampp\htdocs\gyanikaunserver\modules\database\classes\kohana\database\mysql.php(358): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 C:\xampp\htdocs\gyanikaunserver\modules\orm\classes\kohana\orm.php(1538): Kohana_Database_MySQL->list_columns('userdetailses')
#2 C:\xampp\htdocs\gyanikaunserver\modules\orm\classes\kohana\orm.php(392): Kohana_ORM->list_columns()
#3 C:\xampp\htdocs\gyanikaunserver\modules\orm\classes\kohana\orm.php(337): Kohana_ORM->reload_columns()
#4 C:\xampp\htdocs\gyanikaunserver\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#5 C:\xampp\htdocs\gyanikaunserver\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct(NULL)
#6 C:\xampp\htdocs\gyanikaunserver\application\classes\controller\login.php(28): Kohana_ORM::factory('userdetails')
#7 [internal function]: Controller_Login->action_signup()
#8 C:\xampp\htdocs\gyanikaunserver\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Login))
#9 C:\xampp\htdocs\gyanikaunserver\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 C:\xampp\htdocs\gyanikaunserver\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#11 C:\xampp\htdocs\gyanikaunserver\index.php(109): Kohana_Request->execute()
#12 {main}
2012-09-19 05:03:19 --- ERROR: ErrorException [ 1 ]: Class 'Model_Userdetails' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-09-19 05:03:19 --- STRACE: ErrorException [ 1 ]: Class 'Model_Userdetails' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-19 05:03:20 --- ERROR: ErrorException [ 1 ]: Class 'Model_Userdetails' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-09-19 05:03:20 --- STRACE: ErrorException [ 1 ]: Class 'Model_Userdetails' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-19 05:03:46 --- ERROR: ErrorException [ 1 ]: Class 'Model_Userdetail' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-09-19 05:03:46 --- STRACE: ErrorException [ 1 ]: Class 'Model_Userdetail' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-19 05:03:47 --- ERROR: ErrorException [ 1 ]: Class 'Model_Userdetail' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-09-19 05:03:47 --- STRACE: ErrorException [ 1 ]: Class 'Model_Userdetail' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-19 05:03:47 --- ERROR: ErrorException [ 1 ]: Class 'Model_Userdetail' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-09-19 05:03:47 --- STRACE: ErrorException [ 1 ]: Class 'Model_Userdetail' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-19 05:03:48 --- ERROR: ErrorException [ 1 ]: Class 'Model_Userdetail' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-09-19 05:03:48 --- STRACE: ErrorException [ 1 ]: Class 'Model_Userdetail' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-19 05:03:48 --- ERROR: ErrorException [ 1 ]: Class 'Model_Userdetail' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-09-19 05:03:48 --- STRACE: ErrorException [ 1 ]: Class 'Model_Userdetail' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-19 05:06:15 --- ERROR: ErrorException [ 1 ]: Class 'Model_Userdetail' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-09-19 05:06:15 --- STRACE: ErrorException [ 1 ]: Class 'Model_Userdetail' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-19 05:06:16 --- ERROR: ErrorException [ 1 ]: Class 'Model_Userdetail' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-09-19 05:06:16 --- STRACE: ErrorException [ 1 ]: Class 'Model_Userdetail' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-19 05:06:16 --- ERROR: ErrorException [ 1 ]: Class 'Model_Userdetail' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-09-19 05:06:16 --- STRACE: ErrorException [ 1 ]: Class 'Model_Userdetail' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-19 05:06:17 --- ERROR: ErrorException [ 1 ]: Class 'Model_Userdetail' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-09-19 05:06:17 --- STRACE: ErrorException [ 1 ]: Class 'Model_Userdetail' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-19 05:06:17 --- ERROR: ErrorException [ 1 ]: Class 'Model_Userdetail' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-09-19 05:06:17 --- STRACE: ErrorException [ 1 ]: Class 'Model_Userdetail' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-19 05:06:17 --- ERROR: ErrorException [ 1 ]: Class 'Model_Userdetail' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-09-19 05:06:17 --- STRACE: ErrorException [ 1 ]: Class 'Model_Userdetail' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-19 05:06:52 --- ERROR: Kohana_Exception [ 0 ]: The find_all property does not exist in the Model_Userdetail class ~ MODPATH\orm\classes\kohana\orm.php [ 621 ]
2012-09-19 05:06:52 --- STRACE: Kohana_Exception [ 0 ]: The find_all property does not exist in the Model_Userdetail class ~ MODPATH\orm\classes\kohana\orm.php [ 621 ]
--
#0 C:\xampp\htdocs\gyanikaunserver\application\classes\controller\login.php(28): Kohana_ORM->__get('find_all')
#1 [internal function]: Controller_Login->action_signup()
#2 C:\xampp\htdocs\gyanikaunserver\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Login))
#3 C:\xampp\htdocs\gyanikaunserver\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\xampp\htdocs\gyanikaunserver\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 C:\xampp\htdocs\gyanikaunserver\index.php(109): Kohana_Request->execute()
#6 {main}
2012-09-19 05:06:53 --- ERROR: Kohana_Exception [ 0 ]: The find_all property does not exist in the Model_Userdetail class ~ MODPATH\orm\classes\kohana\orm.php [ 621 ]
2012-09-19 05:06:53 --- STRACE: Kohana_Exception [ 0 ]: The find_all property does not exist in the Model_Userdetail class ~ MODPATH\orm\classes\kohana\orm.php [ 621 ]
--
#0 C:\xampp\htdocs\gyanikaunserver\application\classes\controller\login.php(28): Kohana_ORM->__get('find_all')
#1 [internal function]: Controller_Login->action_signup()
#2 C:\xampp\htdocs\gyanikaunserver\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Login))
#3 C:\xampp\htdocs\gyanikaunserver\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\xampp\htdocs\gyanikaunserver\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 C:\xampp\htdocs\gyanikaunserver\index.php(109): Kohana_Request->execute()
#6 {main}
2012-09-19 05:20:08 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '$user' (T_VARIABLE) ~ APPPATH\classes\controller\login.php [ 40 ]
2012-09-19 05:20:08 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '$user' (T_VARIABLE) ~ APPPATH\classes\controller\login.php [ 40 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-19 05:46:13 --- ERROR: Database_Exception [ 1146 ]: Table 'gyanikaundatabase.user_details' doesn't exist [ SHOW FULL COLUMNS FROM `user_details` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-09-19 05:46:13 --- STRACE: Database_Exception [ 1146 ]: Table 'gyanikaundatabase.user_details' doesn't exist [ SHOW FULL COLUMNS FROM `user_details` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\xampp\htdocs\gyanikaunserver\modules\database\classes\kohana\database\mysql.php(358): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 C:\xampp\htdocs\gyanikaunserver\modules\orm\classes\kohana\orm.php(1538): Kohana_Database_MySQL->list_columns('user_details')
#2 C:\xampp\htdocs\gyanikaunserver\modules\orm\classes\kohana\orm.php(392): Kohana_ORM->list_columns()
#3 C:\xampp\htdocs\gyanikaunserver\modules\orm\classes\kohana\orm.php(337): Kohana_ORM->reload_columns()
#4 C:\xampp\htdocs\gyanikaunserver\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#5 C:\xampp\htdocs\gyanikaunserver\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct(NULL)
#6 C:\xampp\htdocs\gyanikaunserver\application\classes\controller\login.php(28): Kohana_ORM::factory('questionbank')
#7 [internal function]: Controller_Login->action_signup()
#8 C:\xampp\htdocs\gyanikaunserver\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Login))
#9 C:\xampp\htdocs\gyanikaunserver\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 C:\xampp\htdocs\gyanikaunserver\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#11 C:\xampp\htdocs\gyanikaunserver\index.php(109): Kohana_Request->execute()
#12 {main}
2012-09-19 09:11:33 --- ERROR: ErrorException [ 8 ]: Undefined variable: data ~ APPPATH\views\addquestion.php [ 5 ]
2012-09-19 09:11:33 --- STRACE: ErrorException [ 8 ]: Undefined variable: data ~ APPPATH\views\addquestion.php [ 5 ]
--
#0 C:\xampp\htdocs\gyanikaunserver\application\views\addquestion.php(5): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 5, Array)
#1 C:\xampp\htdocs\gyanikaunserver\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\gyanikaunserver\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\gyanikaunserver\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\gyanikaunserver\system\classes\kohana\response.php(160): Kohana_View->__toString()
#5 C:\xampp\htdocs\gyanikaunserver\application\classes\controller\questionbank.php(55): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Questionbank->action_showQuestionForm()
#7 C:\xampp\htdocs\gyanikaunserver\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Questionbank))
#8 C:\xampp\htdocs\gyanikaunserver\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 C:\xampp\htdocs\gyanikaunserver\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp\htdocs\gyanikaunserver\index.php(109): Kohana_Request->execute()
#11 {main}
2012-09-19 09:11:58 --- ERROR: ErrorException [ 8 ]: Undefined variable: data ~ APPPATH\views\addquestion.php [ 5 ]
2012-09-19 09:11:58 --- STRACE: ErrorException [ 8 ]: Undefined variable: data ~ APPPATH\views\addquestion.php [ 5 ]
--
#0 C:\xampp\htdocs\gyanikaunserver\application\views\addquestion.php(5): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 5, Array)
#1 C:\xampp\htdocs\gyanikaunserver\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\gyanikaunserver\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\gyanikaunserver\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\gyanikaunserver\system\classes\kohana\response.php(160): Kohana_View->__toString()
#5 C:\xampp\htdocs\gyanikaunserver\application\classes\controller\questionbank.php(55): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Questionbank->action_showQuestionForm()
#7 C:\xampp\htdocs\gyanikaunserver\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Questionbank))
#8 C:\xampp\htdocs\gyanikaunserver\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 C:\xampp\htdocs\gyanikaunserver\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp\htdocs\gyanikaunserver\index.php(109): Kohana_Request->execute()
#11 {main}
2012-09-19 09:12:30 --- ERROR: ErrorException [ 8 ]: Undefined variable: data ~ APPPATH\views\addquestion.php [ 5 ]
2012-09-19 09:12:30 --- STRACE: ErrorException [ 8 ]: Undefined variable: data ~ APPPATH\views\addquestion.php [ 5 ]
--
#0 C:\xampp\htdocs\gyanikaunserver\application\views\addquestion.php(5): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 5, Array)
#1 C:\xampp\htdocs\gyanikaunserver\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\gyanikaunserver\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\gyanikaunserver\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\gyanikaunserver\system\classes\kohana\response.php(160): Kohana_View->__toString()
#5 C:\xampp\htdocs\gyanikaunserver\application\classes\controller\questionbank.php(55): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Questionbank->action_showQuestionForm()
#7 C:\xampp\htdocs\gyanikaunserver\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Questionbank))
#8 C:\xampp\htdocs\gyanikaunserver\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 C:\xampp\htdocs\gyanikaunserver\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp\htdocs\gyanikaunserver\index.php(109): Kohana_Request->execute()
#11 {main}
2012-09-19 09:12:32 --- ERROR: ErrorException [ 8 ]: Undefined variable: data ~ APPPATH\views\addquestion.php [ 5 ]
2012-09-19 09:12:32 --- STRACE: ErrorException [ 8 ]: Undefined variable: data ~ APPPATH\views\addquestion.php [ 5 ]
--
#0 C:\xampp\htdocs\gyanikaunserver\application\views\addquestion.php(5): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 5, Array)
#1 C:\xampp\htdocs\gyanikaunserver\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\gyanikaunserver\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\gyanikaunserver\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\gyanikaunserver\system\classes\kohana\response.php(160): Kohana_View->__toString()
#5 C:\xampp\htdocs\gyanikaunserver\application\classes\controller\questionbank.php(55): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Questionbank->action_showQuestionForm()
#7 C:\xampp\htdocs\gyanikaunserver\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Questionbank))
#8 C:\xampp\htdocs\gyanikaunserver\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 C:\xampp\htdocs\gyanikaunserver\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp\htdocs\gyanikaunserver\index.php(109): Kohana_Request->execute()
#11 {main}
2012-09-19 09:12:32 --- ERROR: ErrorException [ 8 ]: Undefined variable: data ~ APPPATH\views\addquestion.php [ 5 ]
2012-09-19 09:12:32 --- STRACE: ErrorException [ 8 ]: Undefined variable: data ~ APPPATH\views\addquestion.php [ 5 ]
--
#0 C:\xampp\htdocs\gyanikaunserver\application\views\addquestion.php(5): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 5, Array)
#1 C:\xampp\htdocs\gyanikaunserver\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\gyanikaunserver\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\gyanikaunserver\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\gyanikaunserver\system\classes\kohana\response.php(160): Kohana_View->__toString()
#5 C:\xampp\htdocs\gyanikaunserver\application\classes\controller\questionbank.php(55): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Questionbank->action_showQuestionForm()
#7 C:\xampp\htdocs\gyanikaunserver\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Questionbank))
#8 C:\xampp\htdocs\gyanikaunserver\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 C:\xampp\htdocs\gyanikaunserver\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp\htdocs\gyanikaunserver\index.php(109): Kohana_Request->execute()
#11 {main}
2012-09-19 09:12:32 --- ERROR: ErrorException [ 8 ]: Undefined variable: data ~ APPPATH\views\addquestion.php [ 5 ]
2012-09-19 09:12:32 --- STRACE: ErrorException [ 8 ]: Undefined variable: data ~ APPPATH\views\addquestion.php [ 5 ]
--
#0 C:\xampp\htdocs\gyanikaunserver\application\views\addquestion.php(5): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 5, Array)
#1 C:\xampp\htdocs\gyanikaunserver\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\gyanikaunserver\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\gyanikaunserver\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\gyanikaunserver\system\classes\kohana\response.php(160): Kohana_View->__toString()
#5 C:\xampp\htdocs\gyanikaunserver\application\classes\controller\questionbank.php(55): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Questionbank->action_showQuestionForm()
#7 C:\xampp\htdocs\gyanikaunserver\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Questionbank))
#8 C:\xampp\htdocs\gyanikaunserver\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 C:\xampp\htdocs\gyanikaunserver\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp\htdocs\gyanikaunserver\index.php(109): Kohana_Request->execute()
#11 {main}
2012-09-19 09:12:33 --- ERROR: ErrorException [ 8 ]: Undefined variable: data ~ APPPATH\views\addquestion.php [ 5 ]
2012-09-19 09:12:33 --- STRACE: ErrorException [ 8 ]: Undefined variable: data ~ APPPATH\views\addquestion.php [ 5 ]
--
#0 C:\xampp\htdocs\gyanikaunserver\application\views\addquestion.php(5): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 5, Array)
#1 C:\xampp\htdocs\gyanikaunserver\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\gyanikaunserver\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\gyanikaunserver\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\gyanikaunserver\system\classes\kohana\response.php(160): Kohana_View->__toString()
#5 C:\xampp\htdocs\gyanikaunserver\application\classes\controller\questionbank.php(55): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Questionbank->action_showQuestionForm()
#7 C:\xampp\htdocs\gyanikaunserver\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Questionbank))
#8 C:\xampp\htdocs\gyanikaunserver\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 C:\xampp\htdocs\gyanikaunserver\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp\htdocs\gyanikaunserver\index.php(109): Kohana_Request->execute()
#11 {main}
2012-09-19 09:12:33 --- ERROR: ErrorException [ 8 ]: Undefined variable: data ~ APPPATH\views\addquestion.php [ 5 ]
2012-09-19 09:12:33 --- STRACE: ErrorException [ 8 ]: Undefined variable: data ~ APPPATH\views\addquestion.php [ 5 ]
--
#0 C:\xampp\htdocs\gyanikaunserver\application\views\addquestion.php(5): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 5, Array)
#1 C:\xampp\htdocs\gyanikaunserver\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\gyanikaunserver\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\gyanikaunserver\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\gyanikaunserver\system\classes\kohana\response.php(160): Kohana_View->__toString()
#5 C:\xampp\htdocs\gyanikaunserver\application\classes\controller\questionbank.php(55): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Questionbank->action_showQuestionForm()
#7 C:\xampp\htdocs\gyanikaunserver\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Questionbank))
#8 C:\xampp\htdocs\gyanikaunserver\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 C:\xampp\htdocs\gyanikaunserver\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp\htdocs\gyanikaunserver\index.php(109): Kohana_Request->execute()
#11 {main}
2012-09-19 09:12:33 --- ERROR: ErrorException [ 8 ]: Undefined variable: data ~ APPPATH\views\addquestion.php [ 5 ]
2012-09-19 09:12:33 --- STRACE: ErrorException [ 8 ]: Undefined variable: data ~ APPPATH\views\addquestion.php [ 5 ]
--
#0 C:\xampp\htdocs\gyanikaunserver\application\views\addquestion.php(5): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 5, Array)
#1 C:\xampp\htdocs\gyanikaunserver\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\gyanikaunserver\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\gyanikaunserver\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\gyanikaunserver\system\classes\kohana\response.php(160): Kohana_View->__toString()
#5 C:\xampp\htdocs\gyanikaunserver\application\classes\controller\questionbank.php(55): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Questionbank->action_showQuestionForm()
#7 C:\xampp\htdocs\gyanikaunserver\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Questionbank))
#8 C:\xampp\htdocs\gyanikaunserver\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 C:\xampp\htdocs\gyanikaunserver\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp\htdocs\gyanikaunserver\index.php(109): Kohana_Request->execute()
#11 {main}
2012-09-19 09:12:33 --- ERROR: ErrorException [ 8 ]: Undefined variable: data ~ APPPATH\views\addquestion.php [ 5 ]
2012-09-19 09:12:33 --- STRACE: ErrorException [ 8 ]: Undefined variable: data ~ APPPATH\views\addquestion.php [ 5 ]
--
#0 C:\xampp\htdocs\gyanikaunserver\application\views\addquestion.php(5): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 5, Array)
#1 C:\xampp\htdocs\gyanikaunserver\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\gyanikaunserver\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\gyanikaunserver\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\gyanikaunserver\system\classes\kohana\response.php(160): Kohana_View->__toString()
#5 C:\xampp\htdocs\gyanikaunserver\application\classes\controller\questionbank.php(55): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Questionbank->action_showQuestionForm()
#7 C:\xampp\htdocs\gyanikaunserver\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Questionbank))
#8 C:\xampp\htdocs\gyanikaunserver\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 C:\xampp\htdocs\gyanikaunserver\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp\htdocs\gyanikaunserver\index.php(109): Kohana_Request->execute()
#11 {main}
2012-09-19 09:17:43 --- ERROR: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH\classes\controller\questionbank.php [ 58 ]
2012-09-19 09:17:43 --- STRACE: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH\classes\controller\questionbank.php [ 58 ]
--
#0 C:\xampp\htdocs\gyanikaunserver\application\classes\controller\questionbank.php(58): Kohana_Core::error_handler(2, 'Attempt to assi...', 'C:\xampp\htdocs...', 58, Array)
#1 [internal function]: Controller_Questionbank->action_showQuestionForm()
#2 C:\xampp\htdocs\gyanikaunserver\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Questionbank))
#3 C:\xampp\htdocs\gyanikaunserver\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\xampp\htdocs\gyanikaunserver\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 C:\xampp\htdocs\gyanikaunserver\index.php(109): Kohana_Request->execute()
#6 {main}
2012-09-19 09:17:45 --- ERROR: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH\classes\controller\questionbank.php [ 58 ]
2012-09-19 09:17:45 --- STRACE: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH\classes\controller\questionbank.php [ 58 ]
--
#0 C:\xampp\htdocs\gyanikaunserver\application\classes\controller\questionbank.php(58): Kohana_Core::error_handler(2, 'Attempt to assi...', 'C:\xampp\htdocs...', 58, Array)
#1 [internal function]: Controller_Questionbank->action_showQuestionForm()
#2 C:\xampp\htdocs\gyanikaunserver\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Questionbank))
#3 C:\xampp\htdocs\gyanikaunserver\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\xampp\htdocs\gyanikaunserver\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 C:\xampp\htdocs\gyanikaunserver\index.php(109): Kohana_Request->execute()
#6 {main}
2012-09-19 10:31:35 --- ERROR: ErrorException [ 8 ]: Undefined index: from_user_id ~ APPPATH\classes\controller\questionbank.php [ 46 ]
2012-09-19 10:31:35 --- STRACE: ErrorException [ 8 ]: Undefined index: from_user_id ~ APPPATH\classes\controller\questionbank.php [ 46 ]
--
#0 C:\xampp\htdocs\gyanikaunserver\application\classes\controller\questionbank.php(46): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\htdocs...', 46, Array)
#1 [internal function]: Controller_Questionbank->action_addQuestion()
#2 C:\xampp\htdocs\gyanikaunserver\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Questionbank))
#3 C:\xampp\htdocs\gyanikaunserver\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\xampp\htdocs\gyanikaunserver\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 C:\xampp\htdocs\gyanikaunserver\index.php(109): Kohana_Request->execute()
#6 {main}