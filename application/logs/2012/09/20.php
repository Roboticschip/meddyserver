<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2012-09-20 02:32:58 --- ERROR: ErrorException [ 8 ]: Undefined variable: user_name ~ APPPATH\classes\controller\questionbank.php [ 57 ]
2012-09-20 02:32:58 --- STRACE: ErrorException [ 8 ]: Undefined variable: user_name ~ APPPATH\classes\controller\questionbank.php [ 57 ]
--
#0 C:\xampp\htdocs\gyanikaunserver\application\classes\controller\questionbank.php(57): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 57, Array)
#1 [internal function]: Controller_Questionbank->action_addQuestion()
#2 C:\xampp\htdocs\gyanikaunserver\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Questionbank))
#3 C:\xampp\htdocs\gyanikaunserver\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\xampp\htdocs\gyanikaunserver\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 C:\xampp\htdocs\gyanikaunserver\index.php(109): Kohana_Request->execute()
#6 {main}
2012-09-20 04:32:51 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected 'public' (T_PUBLIC) ~ APPPATH\classes\controller\questionbank.php [ 30 ]
2012-09-20 04:32:51 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected 'public' (T_PUBLIC) ~ APPPATH\classes\controller\questionbank.php [ 30 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-20 04:57:20 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'questionbank.id' in 'where clause' [ SELECT `questionbank`.`quest_id` AS `quest_id`, `questionbank`.`question` AS `question`, `questionbank`.`option_a` AS `option_a`, `questionbank`.`option_b` AS `option_b`, `questionbank`.`option_c` AS `option_c`, `questionbank`.`option_d` AS `option_d`, `questionbank`.`answer` AS `answer`, `questionbank`.`solution` AS `solution`, `questionbank`.`resources` AS `resources`, `questionbank`.`package_id` AS `package_id`, `questionbank`.`level_id` AS `level_id`, `questionbank`.`softflag` AS `softflag` FROM `questionbank` AS `questionbank` WHERE `questionbank`.`id` = '1' LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-09-20 04:57:20 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'questionbank.id' in 'where clause' [ SELECT `questionbank`.`quest_id` AS `quest_id`, `questionbank`.`question` AS `question`, `questionbank`.`option_a` AS `option_a`, `questionbank`.`option_b` AS `option_b`, `questionbank`.`option_c` AS `option_c`, `questionbank`.`option_d` AS `option_d`, `questionbank`.`answer` AS `answer`, `questionbank`.`solution` AS `solution`, `questionbank`.`resources` AS `resources`, `questionbank`.`package_id` AS `package_id`, `questionbank`.`level_id` AS `level_id`, `questionbank`.`softflag` AS `softflag` FROM `questionbank` AS `questionbank` WHERE `questionbank`.`id` = '1' LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\xampp\htdocs\gyanikaunserver\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `questio...', false, Array)
#1 C:\xampp\htdocs\gyanikaunserver\modules\orm\classes\kohana\orm.php(1002): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\xampp\htdocs\gyanikaunserver\modules\orm\classes\kohana\orm.php(910): Kohana_ORM->_load_result(false)
#3 C:\xampp\htdocs\gyanikaunserver\modules\orm\classes\kohana\orm.php(263): Kohana_ORM->find()
#4 C:\xampp\htdocs\gyanikaunserver\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct('1')
#5 C:\xampp\htdocs\gyanikaunserver\application\classes\model\questionbank.php(19): Kohana_ORM::factory('questionbank', '1')
#6 C:\xampp\htdocs\gyanikaunserver\application\classes\controller\questionbank.php(25): Model_Questionbank::to_questionanswer_json('1')
#7 [internal function]: Controller_Questionbank->action_nextquestion()
#8 C:\xampp\htdocs\gyanikaunserver\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Questionbank))
#9 C:\xampp\htdocs\gyanikaunserver\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 C:\xampp\htdocs\gyanikaunserver\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#11 C:\xampp\htdocs\gyanikaunserver\index.php(109): Kohana_Request->execute()
#12 {main}
2012-09-20 04:58:50 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'questionbank.id' in 'where clause' [ SELECT `questionbank`.`quest_id` AS `quest_id`, `questionbank`.`question` AS `question`, `questionbank`.`option_a` AS `option_a`, `questionbank`.`option_b` AS `option_b`, `questionbank`.`option_c` AS `option_c`, `questionbank`.`option_d` AS `option_d`, `questionbank`.`answer` AS `answer`, `questionbank`.`solution` AS `solution`, `questionbank`.`resources` AS `resources`, `questionbank`.`package_id` AS `package_id`, `questionbank`.`level_id` AS `level_id`, `questionbank`.`softflag` AS `softflag` FROM `questionbank` AS `questionbank` WHERE `questionbank`.`id` = '1' LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-09-20 04:58:50 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'questionbank.id' in 'where clause' [ SELECT `questionbank`.`quest_id` AS `quest_id`, `questionbank`.`question` AS `question`, `questionbank`.`option_a` AS `option_a`, `questionbank`.`option_b` AS `option_b`, `questionbank`.`option_c` AS `option_c`, `questionbank`.`option_d` AS `option_d`, `questionbank`.`answer` AS `answer`, `questionbank`.`solution` AS `solution`, `questionbank`.`resources` AS `resources`, `questionbank`.`package_id` AS `package_id`, `questionbank`.`level_id` AS `level_id`, `questionbank`.`softflag` AS `softflag` FROM `questionbank` AS `questionbank` WHERE `questionbank`.`id` = '1' LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\xampp\htdocs\gyanikaunserver\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `questio...', false, Array)
#1 C:\xampp\htdocs\gyanikaunserver\modules\orm\classes\kohana\orm.php(1002): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\xampp\htdocs\gyanikaunserver\modules\orm\classes\kohana\orm.php(910): Kohana_ORM->_load_result(false)
#3 C:\xampp\htdocs\gyanikaunserver\modules\orm\classes\kohana\orm.php(263): Kohana_ORM->find()
#4 C:\xampp\htdocs\gyanikaunserver\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct('1')
#5 C:\xampp\htdocs\gyanikaunserver\application\classes\model\questionbank.php(20): Kohana_ORM::factory('questionbank', '1')
#6 C:\xampp\htdocs\gyanikaunserver\application\classes\controller\questionbank.php(25): Model_Questionbank::to_questionanswer_json('1')
#7 [internal function]: Controller_Questionbank->action_nextquestion()
#8 C:\xampp\htdocs\gyanikaunserver\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Questionbank))
#9 C:\xampp\htdocs\gyanikaunserver\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 C:\xampp\htdocs\gyanikaunserver\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#11 C:\xampp\htdocs\gyanikaunserver\index.php(109): Kohana_Request->execute()
#12 {main}
2012-09-20 05:09:19 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'questionbank.id' in 'where clause' [ SELECT `questionbank`.`quest_id` AS `quest_id`, `questionbank`.`question` AS `question`, `questionbank`.`option_a` AS `option_a`, `questionbank`.`option_b` AS `option_b`, `questionbank`.`option_c` AS `option_c`, `questionbank`.`option_d` AS `option_d`, `questionbank`.`answer` AS `answer`, `questionbank`.`solution` AS `solution`, `questionbank`.`resources` AS `resources`, `questionbank`.`package_id` AS `package_id`, `questionbank`.`level_id` AS `level_id`, `questionbank`.`softflag` AS `softflag` FROM `questionbank` AS `questionbank` WHERE `questionbank`.`id` = '1' LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-09-20 05:09:19 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'questionbank.id' in 'where clause' [ SELECT `questionbank`.`quest_id` AS `quest_id`, `questionbank`.`question` AS `question`, `questionbank`.`option_a` AS `option_a`, `questionbank`.`option_b` AS `option_b`, `questionbank`.`option_c` AS `option_c`, `questionbank`.`option_d` AS `option_d`, `questionbank`.`answer` AS `answer`, `questionbank`.`solution` AS `solution`, `questionbank`.`resources` AS `resources`, `questionbank`.`package_id` AS `package_id`, `questionbank`.`level_id` AS `level_id`, `questionbank`.`softflag` AS `softflag` FROM `questionbank` AS `questionbank` WHERE `questionbank`.`id` = '1' LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\xampp\htdocs\gyanikaunserver\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `questio...', false, Array)
#1 C:\xampp\htdocs\gyanikaunserver\modules\orm\classes\kohana\orm.php(1002): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\xampp\htdocs\gyanikaunserver\modules\orm\classes\kohana\orm.php(910): Kohana_ORM->_load_result(false)
#3 C:\xampp\htdocs\gyanikaunserver\modules\orm\classes\kohana\orm.php(263): Kohana_ORM->find()
#4 C:\xampp\htdocs\gyanikaunserver\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct('1')
#5 C:\xampp\htdocs\gyanikaunserver\application\classes\model\questionbank.php(20): Kohana_ORM::factory('questionbank', '1')
#6 C:\xampp\htdocs\gyanikaunserver\application\classes\controller\questionbank.php(25): Model_Questionbank::to_questionanswer_json('1')
#7 [internal function]: Controller_Questionbank->action_nextquestion()
#8 C:\xampp\htdocs\gyanikaunserver\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Questionbank))
#9 C:\xampp\htdocs\gyanikaunserver\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 C:\xampp\htdocs\gyanikaunserver\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#11 C:\xampp\htdocs\gyanikaunserver\index.php(109): Kohana_Request->execute()
#12 {main}
2012-09-20 05:09:20 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'questionbank.id' in 'where clause' [ SELECT `questionbank`.`quest_id` AS `quest_id`, `questionbank`.`question` AS `question`, `questionbank`.`option_a` AS `option_a`, `questionbank`.`option_b` AS `option_b`, `questionbank`.`option_c` AS `option_c`, `questionbank`.`option_d` AS `option_d`, `questionbank`.`answer` AS `answer`, `questionbank`.`solution` AS `solution`, `questionbank`.`resources` AS `resources`, `questionbank`.`package_id` AS `package_id`, `questionbank`.`level_id` AS `level_id`, `questionbank`.`softflag` AS `softflag` FROM `questionbank` AS `questionbank` WHERE `questionbank`.`id` = '1' LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-09-20 05:09:20 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'questionbank.id' in 'where clause' [ SELECT `questionbank`.`quest_id` AS `quest_id`, `questionbank`.`question` AS `question`, `questionbank`.`option_a` AS `option_a`, `questionbank`.`option_b` AS `option_b`, `questionbank`.`option_c` AS `option_c`, `questionbank`.`option_d` AS `option_d`, `questionbank`.`answer` AS `answer`, `questionbank`.`solution` AS `solution`, `questionbank`.`resources` AS `resources`, `questionbank`.`package_id` AS `package_id`, `questionbank`.`level_id` AS `level_id`, `questionbank`.`softflag` AS `softflag` FROM `questionbank` AS `questionbank` WHERE `questionbank`.`id` = '1' LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\xampp\htdocs\gyanikaunserver\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `questio...', false, Array)
#1 C:\xampp\htdocs\gyanikaunserver\modules\orm\classes\kohana\orm.php(1002): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\xampp\htdocs\gyanikaunserver\modules\orm\classes\kohana\orm.php(910): Kohana_ORM->_load_result(false)
#3 C:\xampp\htdocs\gyanikaunserver\modules\orm\classes\kohana\orm.php(263): Kohana_ORM->find()
#4 C:\xampp\htdocs\gyanikaunserver\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct('1')
#5 C:\xampp\htdocs\gyanikaunserver\application\classes\model\questionbank.php(20): Kohana_ORM::factory('questionbank', '1')
#6 C:\xampp\htdocs\gyanikaunserver\application\classes\controller\questionbank.php(25): Model_Questionbank::to_questionanswer_json('1')
#7 [internal function]: Controller_Questionbank->action_nextquestion()
#8 C:\xampp\htdocs\gyanikaunserver\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Questionbank))
#9 C:\xampp\htdocs\gyanikaunserver\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 C:\xampp\htdocs\gyanikaunserver\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#11 C:\xampp\htdocs\gyanikaunserver\index.php(109): Kohana_Request->execute()
#12 {main}
2012-09-20 05:09:21 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'questionbank.id' in 'where clause' [ SELECT `questionbank`.`quest_id` AS `quest_id`, `questionbank`.`question` AS `question`, `questionbank`.`option_a` AS `option_a`, `questionbank`.`option_b` AS `option_b`, `questionbank`.`option_c` AS `option_c`, `questionbank`.`option_d` AS `option_d`, `questionbank`.`answer` AS `answer`, `questionbank`.`solution` AS `solution`, `questionbank`.`resources` AS `resources`, `questionbank`.`package_id` AS `package_id`, `questionbank`.`level_id` AS `level_id`, `questionbank`.`softflag` AS `softflag` FROM `questionbank` AS `questionbank` WHERE `questionbank`.`id` = '1' LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-09-20 05:09:21 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'questionbank.id' in 'where clause' [ SELECT `questionbank`.`quest_id` AS `quest_id`, `questionbank`.`question` AS `question`, `questionbank`.`option_a` AS `option_a`, `questionbank`.`option_b` AS `option_b`, `questionbank`.`option_c` AS `option_c`, `questionbank`.`option_d` AS `option_d`, `questionbank`.`answer` AS `answer`, `questionbank`.`solution` AS `solution`, `questionbank`.`resources` AS `resources`, `questionbank`.`package_id` AS `package_id`, `questionbank`.`level_id` AS `level_id`, `questionbank`.`softflag` AS `softflag` FROM `questionbank` AS `questionbank` WHERE `questionbank`.`id` = '1' LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\xampp\htdocs\gyanikaunserver\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `questio...', false, Array)
#1 C:\xampp\htdocs\gyanikaunserver\modules\orm\classes\kohana\orm.php(1002): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\xampp\htdocs\gyanikaunserver\modules\orm\classes\kohana\orm.php(910): Kohana_ORM->_load_result(false)
#3 C:\xampp\htdocs\gyanikaunserver\modules\orm\classes\kohana\orm.php(263): Kohana_ORM->find()
#4 C:\xampp\htdocs\gyanikaunserver\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct('1')
#5 C:\xampp\htdocs\gyanikaunserver\application\classes\model\questionbank.php(20): Kohana_ORM::factory('questionbank', '1')
#6 C:\xampp\htdocs\gyanikaunserver\application\classes\controller\questionbank.php(25): Model_Questionbank::to_questionanswer_json('1')
#7 [internal function]: Controller_Questionbank->action_nextquestion()
#8 C:\xampp\htdocs\gyanikaunserver\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Questionbank))
#9 C:\xampp\htdocs\gyanikaunserver\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 C:\xampp\htdocs\gyanikaunserver\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#11 C:\xampp\htdocs\gyanikaunserver\index.php(109): Kohana_Request->execute()
#12 {main}
2012-09-20 05:09:21 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'questionbank.id' in 'where clause' [ SELECT `questionbank`.`quest_id` AS `quest_id`, `questionbank`.`question` AS `question`, `questionbank`.`option_a` AS `option_a`, `questionbank`.`option_b` AS `option_b`, `questionbank`.`option_c` AS `option_c`, `questionbank`.`option_d` AS `option_d`, `questionbank`.`answer` AS `answer`, `questionbank`.`solution` AS `solution`, `questionbank`.`resources` AS `resources`, `questionbank`.`package_id` AS `package_id`, `questionbank`.`level_id` AS `level_id`, `questionbank`.`softflag` AS `softflag` FROM `questionbank` AS `questionbank` WHERE `questionbank`.`id` = '1' LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-09-20 05:09:21 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'questionbank.id' in 'where clause' [ SELECT `questionbank`.`quest_id` AS `quest_id`, `questionbank`.`question` AS `question`, `questionbank`.`option_a` AS `option_a`, `questionbank`.`option_b` AS `option_b`, `questionbank`.`option_c` AS `option_c`, `questionbank`.`option_d` AS `option_d`, `questionbank`.`answer` AS `answer`, `questionbank`.`solution` AS `solution`, `questionbank`.`resources` AS `resources`, `questionbank`.`package_id` AS `package_id`, `questionbank`.`level_id` AS `level_id`, `questionbank`.`softflag` AS `softflag` FROM `questionbank` AS `questionbank` WHERE `questionbank`.`id` = '1' LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\xampp\htdocs\gyanikaunserver\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `questio...', false, Array)
#1 C:\xampp\htdocs\gyanikaunserver\modules\orm\classes\kohana\orm.php(1002): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\xampp\htdocs\gyanikaunserver\modules\orm\classes\kohana\orm.php(910): Kohana_ORM->_load_result(false)
#3 C:\xampp\htdocs\gyanikaunserver\modules\orm\classes\kohana\orm.php(263): Kohana_ORM->find()
#4 C:\xampp\htdocs\gyanikaunserver\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct('1')
#5 C:\xampp\htdocs\gyanikaunserver\application\classes\model\questionbank.php(20): Kohana_ORM::factory('questionbank', '1')
#6 C:\xampp\htdocs\gyanikaunserver\application\classes\controller\questionbank.php(25): Model_Questionbank::to_questionanswer_json('1')
#7 [internal function]: Controller_Questionbank->action_nextquestion()
#8 C:\xampp\htdocs\gyanikaunserver\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Questionbank))
#9 C:\xampp\htdocs\gyanikaunserver\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 C:\xampp\htdocs\gyanikaunserver\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#11 C:\xampp\htdocs\gyanikaunserver\index.php(109): Kohana_Request->execute()
#12 {main}
2012-09-20 05:09:21 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'questionbank.id' in 'where clause' [ SELECT `questionbank`.`quest_id` AS `quest_id`, `questionbank`.`question` AS `question`, `questionbank`.`option_a` AS `option_a`, `questionbank`.`option_b` AS `option_b`, `questionbank`.`option_c` AS `option_c`, `questionbank`.`option_d` AS `option_d`, `questionbank`.`answer` AS `answer`, `questionbank`.`solution` AS `solution`, `questionbank`.`resources` AS `resources`, `questionbank`.`package_id` AS `package_id`, `questionbank`.`level_id` AS `level_id`, `questionbank`.`softflag` AS `softflag` FROM `questionbank` AS `questionbank` WHERE `questionbank`.`id` = '1' LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-09-20 05:09:21 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'questionbank.id' in 'where clause' [ SELECT `questionbank`.`quest_id` AS `quest_id`, `questionbank`.`question` AS `question`, `questionbank`.`option_a` AS `option_a`, `questionbank`.`option_b` AS `option_b`, `questionbank`.`option_c` AS `option_c`, `questionbank`.`option_d` AS `option_d`, `questionbank`.`answer` AS `answer`, `questionbank`.`solution` AS `solution`, `questionbank`.`resources` AS `resources`, `questionbank`.`package_id` AS `package_id`, `questionbank`.`level_id` AS `level_id`, `questionbank`.`softflag` AS `softflag` FROM `questionbank` AS `questionbank` WHERE `questionbank`.`id` = '1' LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\xampp\htdocs\gyanikaunserver\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `questio...', false, Array)
#1 C:\xampp\htdocs\gyanikaunserver\modules\orm\classes\kohana\orm.php(1002): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\xampp\htdocs\gyanikaunserver\modules\orm\classes\kohana\orm.php(910): Kohana_ORM->_load_result(false)
#3 C:\xampp\htdocs\gyanikaunserver\modules\orm\classes\kohana\orm.php(263): Kohana_ORM->find()
#4 C:\xampp\htdocs\gyanikaunserver\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct('1')
#5 C:\xampp\htdocs\gyanikaunserver\application\classes\model\questionbank.php(20): Kohana_ORM::factory('questionbank', '1')
#6 C:\xampp\htdocs\gyanikaunserver\application\classes\controller\questionbank.php(25): Model_Questionbank::to_questionanswer_json('1')
#7 [internal function]: Controller_Questionbank->action_nextquestion()
#8 C:\xampp\htdocs\gyanikaunserver\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Questionbank))
#9 C:\xampp\htdocs\gyanikaunserver\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 C:\xampp\htdocs\gyanikaunserver\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#11 C:\xampp\htdocs\gyanikaunserver\index.php(109): Kohana_Request->execute()
#12 {main}
2012-09-20 05:09:22 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'questionbank.id' in 'where clause' [ SELECT `questionbank`.`quest_id` AS `quest_id`, `questionbank`.`question` AS `question`, `questionbank`.`option_a` AS `option_a`, `questionbank`.`option_b` AS `option_b`, `questionbank`.`option_c` AS `option_c`, `questionbank`.`option_d` AS `option_d`, `questionbank`.`answer` AS `answer`, `questionbank`.`solution` AS `solution`, `questionbank`.`resources` AS `resources`, `questionbank`.`package_id` AS `package_id`, `questionbank`.`level_id` AS `level_id`, `questionbank`.`softflag` AS `softflag` FROM `questionbank` AS `questionbank` WHERE `questionbank`.`id` = '1' LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-09-20 05:09:22 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'questionbank.id' in 'where clause' [ SELECT `questionbank`.`quest_id` AS `quest_id`, `questionbank`.`question` AS `question`, `questionbank`.`option_a` AS `option_a`, `questionbank`.`option_b` AS `option_b`, `questionbank`.`option_c` AS `option_c`, `questionbank`.`option_d` AS `option_d`, `questionbank`.`answer` AS `answer`, `questionbank`.`solution` AS `solution`, `questionbank`.`resources` AS `resources`, `questionbank`.`package_id` AS `package_id`, `questionbank`.`level_id` AS `level_id`, `questionbank`.`softflag` AS `softflag` FROM `questionbank` AS `questionbank` WHERE `questionbank`.`id` = '1' LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\xampp\htdocs\gyanikaunserver\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `questio...', false, Array)
#1 C:\xampp\htdocs\gyanikaunserver\modules\orm\classes\kohana\orm.php(1002): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\xampp\htdocs\gyanikaunserver\modules\orm\classes\kohana\orm.php(910): Kohana_ORM->_load_result(false)
#3 C:\xampp\htdocs\gyanikaunserver\modules\orm\classes\kohana\orm.php(263): Kohana_ORM->find()
#4 C:\xampp\htdocs\gyanikaunserver\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct('1')
#5 C:\xampp\htdocs\gyanikaunserver\application\classes\model\questionbank.php(20): Kohana_ORM::factory('questionbank', '1')
#6 C:\xampp\htdocs\gyanikaunserver\application\classes\controller\questionbank.php(25): Model_Questionbank::to_questionanswer_json('1')
#7 [internal function]: Controller_Questionbank->action_nextquestion()
#8 C:\xampp\htdocs\gyanikaunserver\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Questionbank))
#9 C:\xampp\htdocs\gyanikaunserver\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 C:\xampp\htdocs\gyanikaunserver\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#11 C:\xampp\htdocs\gyanikaunserver\index.php(109): Kohana_Request->execute()
#12 {main}
2012-09-20 05:09:22 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'questionbank.id' in 'where clause' [ SELECT `questionbank`.`quest_id` AS `quest_id`, `questionbank`.`question` AS `question`, `questionbank`.`option_a` AS `option_a`, `questionbank`.`option_b` AS `option_b`, `questionbank`.`option_c` AS `option_c`, `questionbank`.`option_d` AS `option_d`, `questionbank`.`answer` AS `answer`, `questionbank`.`solution` AS `solution`, `questionbank`.`resources` AS `resources`, `questionbank`.`package_id` AS `package_id`, `questionbank`.`level_id` AS `level_id`, `questionbank`.`softflag` AS `softflag` FROM `questionbank` AS `questionbank` WHERE `questionbank`.`id` = '1' LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-09-20 05:09:22 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'questionbank.id' in 'where clause' [ SELECT `questionbank`.`quest_id` AS `quest_id`, `questionbank`.`question` AS `question`, `questionbank`.`option_a` AS `option_a`, `questionbank`.`option_b` AS `option_b`, `questionbank`.`option_c` AS `option_c`, `questionbank`.`option_d` AS `option_d`, `questionbank`.`answer` AS `answer`, `questionbank`.`solution` AS `solution`, `questionbank`.`resources` AS `resources`, `questionbank`.`package_id` AS `package_id`, `questionbank`.`level_id` AS `level_id`, `questionbank`.`softflag` AS `softflag` FROM `questionbank` AS `questionbank` WHERE `questionbank`.`id` = '1' LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\xampp\htdocs\gyanikaunserver\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `questio...', false, Array)
#1 C:\xampp\htdocs\gyanikaunserver\modules\orm\classes\kohana\orm.php(1002): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\xampp\htdocs\gyanikaunserver\modules\orm\classes\kohana\orm.php(910): Kohana_ORM->_load_result(false)
#3 C:\xampp\htdocs\gyanikaunserver\modules\orm\classes\kohana\orm.php(263): Kohana_ORM->find()
#4 C:\xampp\htdocs\gyanikaunserver\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct('1')
#5 C:\xampp\htdocs\gyanikaunserver\application\classes\model\questionbank.php(20): Kohana_ORM::factory('questionbank', '1')
#6 C:\xampp\htdocs\gyanikaunserver\application\classes\controller\questionbank.php(25): Model_Questionbank::to_questionanswer_json('1')
#7 [internal function]: Controller_Questionbank->action_nextquestion()
#8 C:\xampp\htdocs\gyanikaunserver\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Questionbank))
#9 C:\xampp\htdocs\gyanikaunserver\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 C:\xampp\htdocs\gyanikaunserver\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#11 C:\xampp\htdocs\gyanikaunserver\index.php(109): Kohana_Request->execute()
#12 {main}
2012-09-20 05:09:22 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'questionbank.id' in 'where clause' [ SELECT `questionbank`.`quest_id` AS `quest_id`, `questionbank`.`question` AS `question`, `questionbank`.`option_a` AS `option_a`, `questionbank`.`option_b` AS `option_b`, `questionbank`.`option_c` AS `option_c`, `questionbank`.`option_d` AS `option_d`, `questionbank`.`answer` AS `answer`, `questionbank`.`solution` AS `solution`, `questionbank`.`resources` AS `resources`, `questionbank`.`package_id` AS `package_id`, `questionbank`.`level_id` AS `level_id`, `questionbank`.`softflag` AS `softflag` FROM `questionbank` AS `questionbank` WHERE `questionbank`.`id` = '1' LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-09-20 05:09:22 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'questionbank.id' in 'where clause' [ SELECT `questionbank`.`quest_id` AS `quest_id`, `questionbank`.`question` AS `question`, `questionbank`.`option_a` AS `option_a`, `questionbank`.`option_b` AS `option_b`, `questionbank`.`option_c` AS `option_c`, `questionbank`.`option_d` AS `option_d`, `questionbank`.`answer` AS `answer`, `questionbank`.`solution` AS `solution`, `questionbank`.`resources` AS `resources`, `questionbank`.`package_id` AS `package_id`, `questionbank`.`level_id` AS `level_id`, `questionbank`.`softflag` AS `softflag` FROM `questionbank` AS `questionbank` WHERE `questionbank`.`id` = '1' LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\xampp\htdocs\gyanikaunserver\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `questio...', false, Array)
#1 C:\xampp\htdocs\gyanikaunserver\modules\orm\classes\kohana\orm.php(1002): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\xampp\htdocs\gyanikaunserver\modules\orm\classes\kohana\orm.php(910): Kohana_ORM->_load_result(false)
#3 C:\xampp\htdocs\gyanikaunserver\modules\orm\classes\kohana\orm.php(263): Kohana_ORM->find()
#4 C:\xampp\htdocs\gyanikaunserver\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct('1')
#5 C:\xampp\htdocs\gyanikaunserver\application\classes\model\questionbank.php(20): Kohana_ORM::factory('questionbank', '1')
#6 C:\xampp\htdocs\gyanikaunserver\application\classes\controller\questionbank.php(25): Model_Questionbank::to_questionanswer_json('1')
#7 [internal function]: Controller_Questionbank->action_nextquestion()
#8 C:\xampp\htdocs\gyanikaunserver\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Questionbank))
#9 C:\xampp\htdocs\gyanikaunserver\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 C:\xampp\htdocs\gyanikaunserver\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#11 C:\xampp\htdocs\gyanikaunserver\index.php(109): Kohana_Request->execute()
#12 {main}
2012-09-20 05:09:22 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'questionbank.id' in 'where clause' [ SELECT `questionbank`.`quest_id` AS `quest_id`, `questionbank`.`question` AS `question`, `questionbank`.`option_a` AS `option_a`, `questionbank`.`option_b` AS `option_b`, `questionbank`.`option_c` AS `option_c`, `questionbank`.`option_d` AS `option_d`, `questionbank`.`answer` AS `answer`, `questionbank`.`solution` AS `solution`, `questionbank`.`resources` AS `resources`, `questionbank`.`package_id` AS `package_id`, `questionbank`.`level_id` AS `level_id`, `questionbank`.`softflag` AS `softflag` FROM `questionbank` AS `questionbank` WHERE `questionbank`.`id` = '1' LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-09-20 05:09:22 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'questionbank.id' in 'where clause' [ SELECT `questionbank`.`quest_id` AS `quest_id`, `questionbank`.`question` AS `question`, `questionbank`.`option_a` AS `option_a`, `questionbank`.`option_b` AS `option_b`, `questionbank`.`option_c` AS `option_c`, `questionbank`.`option_d` AS `option_d`, `questionbank`.`answer` AS `answer`, `questionbank`.`solution` AS `solution`, `questionbank`.`resources` AS `resources`, `questionbank`.`package_id` AS `package_id`, `questionbank`.`level_id` AS `level_id`, `questionbank`.`softflag` AS `softflag` FROM `questionbank` AS `questionbank` WHERE `questionbank`.`id` = '1' LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\xampp\htdocs\gyanikaunserver\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `questio...', false, Array)
#1 C:\xampp\htdocs\gyanikaunserver\modules\orm\classes\kohana\orm.php(1002): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\xampp\htdocs\gyanikaunserver\modules\orm\classes\kohana\orm.php(910): Kohana_ORM->_load_result(false)
#3 C:\xampp\htdocs\gyanikaunserver\modules\orm\classes\kohana\orm.php(263): Kohana_ORM->find()
#4 C:\xampp\htdocs\gyanikaunserver\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct('1')
#5 C:\xampp\htdocs\gyanikaunserver\application\classes\model\questionbank.php(20): Kohana_ORM::factory('questionbank', '1')
#6 C:\xampp\htdocs\gyanikaunserver\application\classes\controller\questionbank.php(25): Model_Questionbank::to_questionanswer_json('1')
#7 [internal function]: Controller_Questionbank->action_nextquestion()
#8 C:\xampp\htdocs\gyanikaunserver\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Questionbank))
#9 C:\xampp\htdocs\gyanikaunserver\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 C:\xampp\htdocs\gyanikaunserver\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#11 C:\xampp\htdocs\gyanikaunserver\index.php(109): Kohana_Request->execute()
#12 {main}
2012-09-20 05:09:23 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'questionbank.id' in 'where clause' [ SELECT `questionbank`.`quest_id` AS `quest_id`, `questionbank`.`question` AS `question`, `questionbank`.`option_a` AS `option_a`, `questionbank`.`option_b` AS `option_b`, `questionbank`.`option_c` AS `option_c`, `questionbank`.`option_d` AS `option_d`, `questionbank`.`answer` AS `answer`, `questionbank`.`solution` AS `solution`, `questionbank`.`resources` AS `resources`, `questionbank`.`package_id` AS `package_id`, `questionbank`.`level_id` AS `level_id`, `questionbank`.`softflag` AS `softflag` FROM `questionbank` AS `questionbank` WHERE `questionbank`.`id` = '1' LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-09-20 05:09:23 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'questionbank.id' in 'where clause' [ SELECT `questionbank`.`quest_id` AS `quest_id`, `questionbank`.`question` AS `question`, `questionbank`.`option_a` AS `option_a`, `questionbank`.`option_b` AS `option_b`, `questionbank`.`option_c` AS `option_c`, `questionbank`.`option_d` AS `option_d`, `questionbank`.`answer` AS `answer`, `questionbank`.`solution` AS `solution`, `questionbank`.`resources` AS `resources`, `questionbank`.`package_id` AS `package_id`, `questionbank`.`level_id` AS `level_id`, `questionbank`.`softflag` AS `softflag` FROM `questionbank` AS `questionbank` WHERE `questionbank`.`id` = '1' LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\xampp\htdocs\gyanikaunserver\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `questio...', false, Array)
#1 C:\xampp\htdocs\gyanikaunserver\modules\orm\classes\kohana\orm.php(1002): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\xampp\htdocs\gyanikaunserver\modules\orm\classes\kohana\orm.php(910): Kohana_ORM->_load_result(false)
#3 C:\xampp\htdocs\gyanikaunserver\modules\orm\classes\kohana\orm.php(263): Kohana_ORM->find()
#4 C:\xampp\htdocs\gyanikaunserver\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct('1')
#5 C:\xampp\htdocs\gyanikaunserver\application\classes\model\questionbank.php(20): Kohana_ORM::factory('questionbank', '1')
#6 C:\xampp\htdocs\gyanikaunserver\application\classes\controller\questionbank.php(25): Model_Questionbank::to_questionanswer_json('1')
#7 [internal function]: Controller_Questionbank->action_nextquestion()
#8 C:\xampp\htdocs\gyanikaunserver\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Questionbank))
#9 C:\xampp\htdocs\gyanikaunserver\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 C:\xampp\htdocs\gyanikaunserver\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#11 C:\xampp\htdocs\gyanikaunserver\index.php(109): Kohana_Request->execute()
#12 {main}
2012-09-20 05:09:23 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'questionbank.id' in 'where clause' [ SELECT `questionbank`.`quest_id` AS `quest_id`, `questionbank`.`question` AS `question`, `questionbank`.`option_a` AS `option_a`, `questionbank`.`option_b` AS `option_b`, `questionbank`.`option_c` AS `option_c`, `questionbank`.`option_d` AS `option_d`, `questionbank`.`answer` AS `answer`, `questionbank`.`solution` AS `solution`, `questionbank`.`resources` AS `resources`, `questionbank`.`package_id` AS `package_id`, `questionbank`.`level_id` AS `level_id`, `questionbank`.`softflag` AS `softflag` FROM `questionbank` AS `questionbank` WHERE `questionbank`.`id` = '1' LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-09-20 05:09:23 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'questionbank.id' in 'where clause' [ SELECT `questionbank`.`quest_id` AS `quest_id`, `questionbank`.`question` AS `question`, `questionbank`.`option_a` AS `option_a`, `questionbank`.`option_b` AS `option_b`, `questionbank`.`option_c` AS `option_c`, `questionbank`.`option_d` AS `option_d`, `questionbank`.`answer` AS `answer`, `questionbank`.`solution` AS `solution`, `questionbank`.`resources` AS `resources`, `questionbank`.`package_id` AS `package_id`, `questionbank`.`level_id` AS `level_id`, `questionbank`.`softflag` AS `softflag` FROM `questionbank` AS `questionbank` WHERE `questionbank`.`id` = '1' LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\xampp\htdocs\gyanikaunserver\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `questio...', false, Array)
#1 C:\xampp\htdocs\gyanikaunserver\modules\orm\classes\kohana\orm.php(1002): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\xampp\htdocs\gyanikaunserver\modules\orm\classes\kohana\orm.php(910): Kohana_ORM->_load_result(false)
#3 C:\xampp\htdocs\gyanikaunserver\modules\orm\classes\kohana\orm.php(263): Kohana_ORM->find()
#4 C:\xampp\htdocs\gyanikaunserver\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct('1')
#5 C:\xampp\htdocs\gyanikaunserver\application\classes\model\questionbank.php(20): Kohana_ORM::factory('questionbank', '1')
#6 C:\xampp\htdocs\gyanikaunserver\application\classes\controller\questionbank.php(25): Model_Questionbank::to_questionanswer_json('1')
#7 [internal function]: Controller_Questionbank->action_nextquestion()
#8 C:\xampp\htdocs\gyanikaunserver\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Questionbank))
#9 C:\xampp\htdocs\gyanikaunserver\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 C:\xampp\htdocs\gyanikaunserver\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#11 C:\xampp\htdocs\gyanikaunserver\index.php(109): Kohana_Request->execute()
#12 {main}
2012-09-20 05:13:23 --- ERROR: ErrorException [ 8 ]: Undefined variable: asset ~ APPPATH\classes\model\questionbank.php [ 25 ]
2012-09-20 05:13:23 --- STRACE: ErrorException [ 8 ]: Undefined variable: asset ~ APPPATH\classes\model\questionbank.php [ 25 ]
--
#0 C:\xampp\htdocs\gyanikaunserver\application\classes\model\questionbank.php(25): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 25, Array)
#1 C:\xampp\htdocs\gyanikaunserver\application\classes\controller\questionbank.php(25): Model_Questionbank::to_questionanswer_json('1')
#2 [internal function]: Controller_Questionbank->action_nextquestion()
#3 C:\xampp\htdocs\gyanikaunserver\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Questionbank))
#4 C:\xampp\htdocs\gyanikaunserver\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\xampp\htdocs\gyanikaunserver\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\gyanikaunserver\index.php(109): Kohana_Request->execute()
#7 {main}