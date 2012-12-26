<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2012-10-27 01:38:26 --- ERROR: Database_Exception [ 1146 ]: Table 'gyanikaundatabase.questionbanks' doesn't exist [ SHOW FULL COLUMNS FROM `questionbanks` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-27 01:38:26 --- STRACE: Database_Exception [ 1146 ]: Table 'gyanikaundatabase.questionbanks' doesn't exist [ SHOW FULL COLUMNS FROM `questionbanks` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\xampp\htdocs\gyanikaunserver\modules\database\classes\kohana\database\mysql.php(358): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 C:\xampp\htdocs\gyanikaunserver\modules\orm\classes\kohana\orm.php(1538): Kohana_Database_MySQL->list_columns('questionbanks')
#2 C:\xampp\htdocs\gyanikaunserver\modules\orm\classes\kohana\orm.php(392): Kohana_ORM->list_columns()
#3 C:\xampp\htdocs\gyanikaunserver\modules\orm\classes\kohana\orm.php(337): Kohana_ORM->reload_columns()
#4 C:\xampp\htdocs\gyanikaunserver\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#5 C:\xampp\htdocs\gyanikaunserver\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct(NULL)
#6 C:\xampp\htdocs\gyanikaunserver\application\classes\controller\questionbank.php(24): Kohana_ORM::factory('questionbank')
#7 [internal function]: Controller_Questionbank->action_nextquestion()
#8 C:\xampp\htdocs\gyanikaunserver\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Questionbank))
#9 C:\xampp\htdocs\gyanikaunserver\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 C:\xampp\htdocs\gyanikaunserver\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#11 C:\xampp\htdocs\gyanikaunserver\index.php(109): Kohana_Request->execute()
#12 {main}
2012-10-27 01:45:01 --- ERROR: Database_Exception [ 1146 ]: Table 'gyanikaundatabase.questionbanks' doesn't exist [ SHOW FULL COLUMNS FROM `questionbanks` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-27 01:45:01 --- STRACE: Database_Exception [ 1146 ]: Table 'gyanikaundatabase.questionbanks' doesn't exist [ SHOW FULL COLUMNS FROM `questionbanks` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\xampp\htdocs\gyanikaunserver\modules\database\classes\kohana\database\mysql.php(358): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 C:\xampp\htdocs\gyanikaunserver\modules\orm\classes\kohana\orm.php(1538): Kohana_Database_MySQL->list_columns('questionbanks')
#2 C:\xampp\htdocs\gyanikaunserver\modules\orm\classes\kohana\orm.php(392): Kohana_ORM->list_columns()
#3 C:\xampp\htdocs\gyanikaunserver\modules\orm\classes\kohana\orm.php(337): Kohana_ORM->reload_columns()
#4 C:\xampp\htdocs\gyanikaunserver\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#5 C:\xampp\htdocs\gyanikaunserver\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct(NULL)
#6 C:\xampp\htdocs\gyanikaunserver\application\classes\controller\questionbank.php(24): Kohana_ORM::factory('questionbank')
#7 [internal function]: Controller_Questionbank->action_nextquestion()
#8 C:\xampp\htdocs\gyanikaunserver\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Questionbank))
#9 C:\xampp\htdocs\gyanikaunserver\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 C:\xampp\htdocs\gyanikaunserver\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#11 C:\xampp\htdocs\gyanikaunserver\index.php(109): Kohana_Request->execute()
#12 {main}
2012-10-27 01:45:11 --- ERROR: Database_Exception [ 1146 ]: Table 'gyanikaundatabase.questionbanks' doesn't exist [ SHOW FULL COLUMNS FROM `questionbanks` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-27 01:45:11 --- STRACE: Database_Exception [ 1146 ]: Table 'gyanikaundatabase.questionbanks' doesn't exist [ SHOW FULL COLUMNS FROM `questionbanks` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\xampp\htdocs\gyanikaunserver\modules\database\classes\kohana\database\mysql.php(358): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 C:\xampp\htdocs\gyanikaunserver\modules\orm\classes\kohana\orm.php(1538): Kohana_Database_MySQL->list_columns('questionbanks')
#2 C:\xampp\htdocs\gyanikaunserver\modules\orm\classes\kohana\orm.php(392): Kohana_ORM->list_columns()
#3 C:\xampp\htdocs\gyanikaunserver\modules\orm\classes\kohana\orm.php(337): Kohana_ORM->reload_columns()
#4 C:\xampp\htdocs\gyanikaunserver\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#5 C:\xampp\htdocs\gyanikaunserver\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct(NULL)
#6 C:\xampp\htdocs\gyanikaunserver\application\classes\controller\questionbank.php(24): Kohana_ORM::factory('questionbank')
#7 [internal function]: Controller_Questionbank->action_nextquestion()
#8 C:\xampp\htdocs\gyanikaunserver\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Questionbank))
#9 C:\xampp\htdocs\gyanikaunserver\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 C:\xampp\htdocs\gyanikaunserver\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#11 C:\xampp\htdocs\gyanikaunserver\index.php(109): Kohana_Request->execute()
#12 {main}
2012-10-27 01:46:11 --- ERROR: Database_Exception [ 1146 ]: Table 'gyanikaundatabase.questionbanks' doesn't exist [ SHOW FULL COLUMNS FROM `questionbanks` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-27 01:46:11 --- STRACE: Database_Exception [ 1146 ]: Table 'gyanikaundatabase.questionbanks' doesn't exist [ SHOW FULL COLUMNS FROM `questionbanks` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\xampp\htdocs\gyanikaunserver\modules\database\classes\kohana\database\mysql.php(358): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 C:\xampp\htdocs\gyanikaunserver\modules\orm\classes\kohana\orm.php(1538): Kohana_Database_MySQL->list_columns('questionbanks')
#2 C:\xampp\htdocs\gyanikaunserver\modules\orm\classes\kohana\orm.php(392): Kohana_ORM->list_columns()
#3 C:\xampp\htdocs\gyanikaunserver\modules\orm\classes\kohana\orm.php(337): Kohana_ORM->reload_columns()
#4 C:\xampp\htdocs\gyanikaunserver\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#5 C:\xampp\htdocs\gyanikaunserver\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct(NULL)
#6 C:\xampp\htdocs\gyanikaunserver\application\classes\controller\questionbank.php(34): Kohana_ORM::factory('questionbank')
#7 [internal function]: Controller_Questionbank->action_addQuestion()
#8 C:\xampp\htdocs\gyanikaunserver\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Questionbank))
#9 C:\xampp\htdocs\gyanikaunserver\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 C:\xampp\htdocs\gyanikaunserver\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#11 C:\xampp\htdocs\gyanikaunserver\index.php(109): Kohana_Request->execute()
#12 {main}