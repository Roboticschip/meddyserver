<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2012-09-18 11:05:14 --- ERROR: Database_Exception [ 2 ]: mysql_connect(): Access denied for user 'root'@'localhost' (using password: YES) ~ MODPATH\database\classes\kohana\database\mysql.php [ 67 ]
2012-09-18 11:05:14 --- STRACE: Database_Exception [ 2 ]: mysql_connect(): Access denied for user 'root'@'localhost' (using password: YES) ~ MODPATH\database\classes\kohana\database\mysql.php [ 67 ]
--
#0 C:\xampp\htdocs\gyanikaunserver\modules\database\classes\kohana\database\mysql.php(171): Kohana_Database_MySQL->connect()
#1 C:\xampp\htdocs\gyanikaunserver\modules\database\classes\kohana\database\mysql.php(358): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#2 C:\xampp\htdocs\gyanikaunserver\modules\orm\classes\kohana\orm.php(1538): Kohana_Database_MySQL->list_columns('introductions')
#3 C:\xampp\htdocs\gyanikaunserver\modules\orm\classes\kohana\orm.php(392): Kohana_ORM->list_columns()
#4 C:\xampp\htdocs\gyanikaunserver\modules\orm\classes\kohana\orm.php(337): Kohana_ORM->reload_columns()
#5 C:\xampp\htdocs\gyanikaunserver\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#6 C:\xampp\htdocs\gyanikaunserver\application\classes\model\introduction.php(8): Kohana_ORM->__construct()
#7 C:\xampp\htdocs\gyanikaunserver\application\classes\controller\welcome.php(14): Model_Introduction::getTitleMsg()
#8 [internal function]: Controller_Welcome->action_hello()
#9 C:\xampp\htdocs\gyanikaunserver\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Welcome))
#10 C:\xampp\htdocs\gyanikaunserver\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 C:\xampp\htdocs\gyanikaunserver\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 C:\xampp\htdocs\gyanikaunserver\index.php(109): Kohana_Request->execute()
#13 {main}