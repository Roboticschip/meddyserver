<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2012-10-25 11:21:16 --- ERROR: Database_Exception [ 1049 ]: Unknown database 'gyanikaundatabase' ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
2012-10-25 11:21:16 --- STRACE: Database_Exception [ 1049 ]: Unknown database 'gyanikaundatabase' ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
--
#0 C:\xampp\htdocs\gyanikaunserver\modules\database\classes\kohana\database\mysql.php(75): Kohana_Database_MySQL->_select_db('gyanikaundataba...')
#1 C:\xampp\htdocs\gyanikaunserver\modules\database\classes\kohana\database\mysql.php(171): Kohana_Database_MySQL->connect()
#2 C:\xampp\htdocs\gyanikaunserver\modules\database\classes\kohana\database\mysql.php(358): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#3 C:\xampp\htdocs\gyanikaunserver\modules\orm\classes\kohana\orm.php(1538): Kohana_Database_MySQL->list_columns('questionbank')
#4 C:\xampp\htdocs\gyanikaunserver\modules\orm\classes\kohana\orm.php(392): Kohana_ORM->list_columns()
#5 C:\xampp\htdocs\gyanikaunserver\modules\orm\classes\kohana\orm.php(337): Kohana_ORM->reload_columns()
#6 C:\xampp\htdocs\gyanikaunserver\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#7 C:\xampp\htdocs\gyanikaunserver\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct(NULL)
#8 C:\xampp\htdocs\gyanikaunserver\application\classes\controller\questionbank.php(24): Kohana_ORM::factory('questionbank')
#9 [internal function]: Controller_Questionbank->action_nextquestion()
#10 C:\xampp\htdocs\gyanikaunserver\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Questionbank))
#11 C:\xampp\htdocs\gyanikaunserver\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 C:\xampp\htdocs\gyanikaunserver\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\gyanikaunserver\index.php(109): Kohana_Request->execute()
#14 {main}
2012-10-25 11:27:08 --- ERROR: Database_Exception [ 1049 ]: Unknown database 'gyanikaundatabase' ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
2012-10-25 11:27:08 --- STRACE: Database_Exception [ 1049 ]: Unknown database 'gyanikaundatabase' ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
--
#0 C:\xampp\htdocs\gyanikaunserver\modules\database\classes\kohana\database\mysql.php(75): Kohana_Database_MySQL->_select_db('gyanikaundataba...')
#1 C:\xampp\htdocs\gyanikaunserver\modules\database\classes\kohana\database\mysql.php(171): Kohana_Database_MySQL->connect()
#2 C:\xampp\htdocs\gyanikaunserver\modules\database\classes\kohana\database\mysql.php(358): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#3 C:\xampp\htdocs\gyanikaunserver\modules\orm\classes\kohana\orm.php(1538): Kohana_Database_MySQL->list_columns('questionbank')
#4 C:\xampp\htdocs\gyanikaunserver\modules\orm\classes\kohana\orm.php(392): Kohana_ORM->list_columns()
#5 C:\xampp\htdocs\gyanikaunserver\modules\orm\classes\kohana\orm.php(337): Kohana_ORM->reload_columns()
#6 C:\xampp\htdocs\gyanikaunserver\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#7 C:\xampp\htdocs\gyanikaunserver\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct(NULL)
#8 C:\xampp\htdocs\gyanikaunserver\application\classes\controller\questionbank.php(24): Kohana_ORM::factory('questionbank')
#9 [internal function]: Controller_Questionbank->action_nextquestion()
#10 C:\xampp\htdocs\gyanikaunserver\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Questionbank))
#11 C:\xampp\htdocs\gyanikaunserver\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 C:\xampp\htdocs\gyanikaunserver\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\gyanikaunserver\index.php(109): Kohana_Request->execute()
#14 {main}
2012-10-25 11:30:08 --- ERROR: Database_Exception [ 1049 ]: Unknown database 'gyanikaundatabase' ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
2012-10-25 11:30:08 --- STRACE: Database_Exception [ 1049 ]: Unknown database 'gyanikaundatabase' ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
--
#0 C:\xampp\htdocs\gyanikaunserver\modules\database\classes\kohana\database\mysql.php(75): Kohana_Database_MySQL->_select_db('gyanikaundataba...')
#1 C:\xampp\htdocs\gyanikaunserver\modules\database\classes\kohana\database\mysql.php(171): Kohana_Database_MySQL->connect()
#2 C:\xampp\htdocs\gyanikaunserver\modules\database\classes\kohana\database\mysql.php(358): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#3 C:\xampp\htdocs\gyanikaunserver\modules\orm\classes\kohana\orm.php(1538): Kohana_Database_MySQL->list_columns('questionbank')
#4 C:\xampp\htdocs\gyanikaunserver\modules\orm\classes\kohana\orm.php(392): Kohana_ORM->list_columns()
#5 C:\xampp\htdocs\gyanikaunserver\modules\orm\classes\kohana\orm.php(337): Kohana_ORM->reload_columns()
#6 C:\xampp\htdocs\gyanikaunserver\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#7 C:\xampp\htdocs\gyanikaunserver\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct(NULL)
#8 C:\xampp\htdocs\gyanikaunserver\application\classes\controller\questionbank.php(24): Kohana_ORM::factory('questionbank')
#9 [internal function]: Controller_Questionbank->action_nextquestion()
#10 C:\xampp\htdocs\gyanikaunserver\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Questionbank))
#11 C:\xampp\htdocs\gyanikaunserver\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 C:\xampp\htdocs\gyanikaunserver\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\gyanikaunserver\index.php(109): Kohana_Request->execute()
#14 {main}
2012-10-25 12:51:00 --- ERROR: ErrorException [ 1 ]: Class 'Model_Questionbanks' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-10-25 12:51:00 --- STRACE: ErrorException [ 1 ]: Class 'Model_Questionbanks' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-10-25 12:51:01 --- ERROR: ErrorException [ 1 ]: Class 'Model_Questionbanks' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-10-25 12:51:01 --- STRACE: ErrorException [ 1 ]: Class 'Model_Questionbanks' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}