<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2012-12-26 11:09:55 --- ERROR: Zend_Gdata_App_Exception [ 0 ]: A worksheet id must be provided for list queries. ~ /usr/share/php/Zend/Gdata/Spreadsheets/ListQuery.php [ 271 ]
2012-12-26 11:09:55 --- STRACE: Zend_Gdata_App_Exception [ 0 ]: A worksheet id must be provided for list queries. ~ /usr/share/php/Zend/Gdata/Spreadsheets/ListQuery.php [ 271 ]
--
#0 /usr/share/php/Zend/Gdata/Spreadsheets.php(259): Zend_Gdata_Spreadsheets_ListQuery->getQueryUrl()
#1 /home/msudhanshu/test/meddyserver/modules/gamex_backend/libraries/Google_Spreadsheet.php(240): Zend_Gdata_Spreadsheets->getListFeed(Object(Zend_Gdata_Spreadsheets_ListQuery))
#2 /home/msudhanshu/test/meddyserver/modules/gamex_backend/libraries/Google_Spreadsheet.php(130): Google_Spreadsheet->findRows(false)
#3 /home/msudhanshu/test/meddyserver/application/libraries/sync_helper.php(54): Google_Spreadsheet->getRows()
#4 /home/msudhanshu/test/meddyserver/modules/gamex_backend/libraries/sync.php(58): sync_extra_sheets(Object(Google_Spreadsheet), 1356541793)
#5 /home/msudhanshu/test/meddyserver/application/classes/controller/admin.php(177): sync_spreadsheet('roboticschip@gm...', 'r0b0tics', 'meddy-sheet', Array, Array, 'meddy-sheet', Array, false, Array, true)
#6 [internal function]: Controller_Admin->action_syncConfirmation()
#7 /home/msudhanshu/test/meddyserver/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin))
#8 /home/msudhanshu/test/meddyserver/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /home/msudhanshu/test/meddyserver/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /home/msudhanshu/test/meddyserver/index.php(109): Kohana_Request->execute()
#11 {main}
2012-12-26 11:13:07 --- ERROR: Zend_Gdata_App_Exception [ 0 ]: A worksheet id must be provided for list queries. ~ /usr/share/php/Zend/Gdata/Spreadsheets/ListQuery.php [ 271 ]
2012-12-26 11:13:07 --- STRACE: Zend_Gdata_App_Exception [ 0 ]: A worksheet id must be provided for list queries. ~ /usr/share/php/Zend/Gdata/Spreadsheets/ListQuery.php [ 271 ]
--
#0 /usr/share/php/Zend/Gdata/Spreadsheets.php(259): Zend_Gdata_Spreadsheets_ListQuery->getQueryUrl()
#1 /home/msudhanshu/test/meddyserver/modules/gamex_backend/libraries/Google_Spreadsheet.php(240): Zend_Gdata_Spreadsheets->getListFeed(Object(Zend_Gdata_Spreadsheets_ListQuery))
#2 /home/msudhanshu/test/meddyserver/modules/gamex_backend/libraries/Google_Spreadsheet.php(130): Google_Spreadsheet->findRows(false)
#3 /home/msudhanshu/test/meddyserver/application/libraries/sync_helper.php(54): Google_Spreadsheet->getRows()
#4 /home/msudhanshu/test/meddyserver/modules/gamex_backend/libraries/sync.php(58): sync_extra_sheets(Object(Google_Spreadsheet), 1356541986)
#5 /home/msudhanshu/test/meddyserver/application/classes/controller/admin.php(177): sync_spreadsheet('roboticschip@gm...', 'r0b0tics', 'meddy-sheet', Array, Array, 'meddy-sheet', Array, false, Array, true)
#6 [internal function]: Controller_Admin->action_syncConfirmation()
#7 /home/msudhanshu/test/meddyserver/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin))
#8 /home/msudhanshu/test/meddyserver/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /home/msudhanshu/test/meddyserver/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /home/msudhanshu/test/meddyserver/index.php(109): Kohana_Request->execute()
#11 {main}
2012-12-26 11:13:32 --- ERROR: Zend_Gdata_App_Exception [ 0 ]: A worksheet id must be provided for list queries. ~ /usr/share/php/Zend/Gdata/Spreadsheets/ListQuery.php [ 271 ]
2012-12-26 11:13:32 --- STRACE: Zend_Gdata_App_Exception [ 0 ]: A worksheet id must be provided for list queries. ~ /usr/share/php/Zend/Gdata/Spreadsheets/ListQuery.php [ 271 ]
--
#0 /usr/share/php/Zend/Gdata/Spreadsheets.php(259): Zend_Gdata_Spreadsheets_ListQuery->getQueryUrl()
#1 /home/msudhanshu/test/meddyserver/modules/gamex_backend/libraries/Google_Spreadsheet.php(240): Zend_Gdata_Spreadsheets->getListFeed(Object(Zend_Gdata_Spreadsheets_ListQuery))
#2 /home/msudhanshu/test/meddyserver/modules/gamex_backend/libraries/Google_Spreadsheet.php(130): Google_Spreadsheet->findRows(false)
#3 /home/msudhanshu/test/meddyserver/application/libraries/sync_helper.php(54): Google_Spreadsheet->getRows()
#4 /home/msudhanshu/test/meddyserver/modules/gamex_backend/libraries/sync.php(58): sync_extra_sheets(Object(Google_Spreadsheet), 1356542010)
#5 /home/msudhanshu/test/meddyserver/application/classes/controller/admin.php(177): sync_spreadsheet('roboticschip@gm...', 'r0b0tics', 'meddy-sheet', Array, Array, 'meddy-sheet', Array, false, Array, true)
#6 [internal function]: Controller_Admin->action_syncConfirmation()
#7 /home/msudhanshu/test/meddyserver/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin))
#8 /home/msudhanshu/test/meddyserver/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /home/msudhanshu/test/meddyserver/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /home/msudhanshu/test/meddyserver/index.php(109): Kohana_Request->execute()
#11 {main}
2012-12-26 11:14:43 --- ERROR: Zend_Gdata_App_Exception [ 0 ]: A worksheet id must be provided for list queries. ~ /usr/share/php/Zend/Gdata/Spreadsheets/ListQuery.php [ 271 ]
2012-12-26 11:14:43 --- STRACE: Zend_Gdata_App_Exception [ 0 ]: A worksheet id must be provided for list queries. ~ /usr/share/php/Zend/Gdata/Spreadsheets/ListQuery.php [ 271 ]
--
#0 /usr/share/php/Zend/Gdata/Spreadsheets.php(259): Zend_Gdata_Spreadsheets_ListQuery->getQueryUrl()
#1 /home/msudhanshu/test/meddyserver/modules/gamex_backend/libraries/Google_Spreadsheet.php(240): Zend_Gdata_Spreadsheets->getListFeed(Object(Zend_Gdata_Spreadsheets_ListQuery))
#2 /home/msudhanshu/test/meddyserver/modules/gamex_backend/libraries/Google_Spreadsheet.php(130): Google_Spreadsheet->findRows(false)
#3 /home/msudhanshu/test/meddyserver/application/libraries/sync_helper.php(54): Google_Spreadsheet->getRows()
#4 /home/msudhanshu/test/meddyserver/modules/gamex_backend/libraries/sync.php(58): sync_extra_sheets(Object(Google_Spreadsheet), 1356542082)
#5 /home/msudhanshu/test/meddyserver/application/classes/controller/admin.php(177): sync_spreadsheet('roboticschip@gm...', 'r0b0tics', 'meddy-sheet', Array, Array, 'meddy-sheet', Array, false, Array, true)
#6 [internal function]: Controller_Admin->action_syncConfirmation()
#7 /home/msudhanshu/test/meddyserver/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin))
#8 /home/msudhanshu/test/meddyserver/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /home/msudhanshu/test/meddyserver/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /home/msudhanshu/test/meddyserver/index.php(109): Kohana_Request->execute()
#11 {main}
2012-12-26 11:24:27 --- ERROR: Zend_Gdata_App_Exception [ 0 ]: A worksheet id must be provided for list queries. ~ /usr/share/php/Zend/Gdata/Spreadsheets/ListQuery.php [ 271 ]
2012-12-26 11:24:27 --- STRACE: Zend_Gdata_App_Exception [ 0 ]: A worksheet id must be provided for list queries. ~ /usr/share/php/Zend/Gdata/Spreadsheets/ListQuery.php [ 271 ]
--
#0 /usr/share/php/Zend/Gdata/Spreadsheets.php(259): Zend_Gdata_Spreadsheets_ListQuery->getQueryUrl()
#1 /home/msudhanshu/test/meddyserver/modules/gamex_backend/libraries/Google_Spreadsheet.php(240): Zend_Gdata_Spreadsheets->getListFeed(Object(Zend_Gdata_Spreadsheets_ListQuery))
#2 /home/msudhanshu/test/meddyserver/modules/gamex_backend/libraries/Google_Spreadsheet.php(130): Google_Spreadsheet->findRows(false)
#3 /home/msudhanshu/test/meddyserver/application/libraries/sync_helper.php(54): Google_Spreadsheet->getRows()
#4 /home/msudhanshu/test/meddyserver/modules/gamex_backend/libraries/sync.php(58): sync_extra_sheets(Object(Google_Spreadsheet), 1356542665)
#5 /home/msudhanshu/test/meddyserver/application/classes/controller/admin.php(177): sync_spreadsheet('roboticschip@gm...', 'r0b0tics', 'meddy-sheet', Array, Array, 'meddy-sheet', Array, false, Array, true)
#6 [internal function]: Controller_Admin->action_syncConfirmation()
#7 /home/msudhanshu/test/meddyserver/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin))
#8 /home/msudhanshu/test/meddyserver/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /home/msudhanshu/test/meddyserver/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /home/msudhanshu/test/meddyserver/index.php(109): Kohana_Request->execute()
#11 {main}
2012-12-26 11:39:47 --- ERROR: ErrorException [ 8 ]: Undefined variable: city_id ~ APPPATH/classes/model/city.php [ 12 ]
2012-12-26 11:39:47 --- STRACE: ErrorException [ 8 ]: Undefined variable: city_id ~ APPPATH/classes/model/city.php [ 12 ]
--
#0 /home/msudhanshu/test/meddyserver/application/classes/model/city.php(12): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/msudhansh...', 12, Array)
#1 /home/msudhanshu/test/meddyserver/application/libraries/sync_helper.php(58): Model_City::create_or_update('1', 'Mumbai', 1356543584, NULL)
#2 /home/msudhanshu/test/meddyserver/modules/gamex_backend/libraries/sync.php(58): sync_extra_sheets(Object(Google_Spreadsheet), 1356543584)
#3 /home/msudhanshu/test/meddyserver/application/classes/controller/admin.php(177): sync_spreadsheet('roboticschip@gm...', 'r0b0tics', 'meddy-sheet', Array, Array, 'meddy-sheet', Array, false, Array, true)
#4 [internal function]: Controller_Admin->action_syncConfirmation()
#5 /home/msudhanshu/test/meddyserver/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin))
#6 /home/msudhanshu/test/meddyserver/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/msudhanshu/test/meddyserver/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /home/msudhanshu/test/meddyserver/index.php(109): Kohana_Request->execute()
#9 {main}
2012-12-26 11:57:59 --- ERROR: Zend_Gdata_App_Exception [ 0 ]: A worksheet id must be provided for list queries. ~ /usr/share/php/Zend/Gdata/Spreadsheets/ListQuery.php [ 271 ]
2012-12-26 11:57:59 --- STRACE: Zend_Gdata_App_Exception [ 0 ]: A worksheet id must be provided for list queries. ~ /usr/share/php/Zend/Gdata/Spreadsheets/ListQuery.php [ 271 ]
--
#0 /usr/share/php/Zend/Gdata/Spreadsheets.php(259): Zend_Gdata_Spreadsheets_ListQuery->getQueryUrl()
#1 /home/msudhanshu/test/meddyserver/modules/gamex_backend/libraries/Google_Spreadsheet.php(240): Zend_Gdata_Spreadsheets->getListFeed(Object(Zend_Gdata_Spreadsheets_ListQuery))
#2 /home/msudhanshu/test/meddyserver/modules/gamex_backend/libraries/Google_Spreadsheet.php(130): Google_Spreadsheet->findRows(false)
#3 /home/msudhanshu/test/meddyserver/application/libraries/sync_helper.php(58): Google_Spreadsheet->getRows()
#4 /home/msudhanshu/test/meddyserver/modules/gamex_backend/libraries/sync.php(58): sync_extra_sheets(Object(Google_Spreadsheet), 1356544676)
#5 /home/msudhanshu/test/meddyserver/application/classes/controller/admin.php(177): sync_spreadsheet('roboticschip@gm...', 'r0b0tics', 'meddy-sheet', Array, Array, 'meddy-sheet', Array, false, Array, true)
#6 [internal function]: Controller_Admin->action_syncConfirmation()
#7 /home/msudhanshu/test/meddyserver/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin))
#8 /home/msudhanshu/test/meddyserver/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /home/msudhanshu/test/meddyserver/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /home/msudhanshu/test/meddyserver/index.php(109): Kohana_Request->execute()
#11 {main}
2012-12-26 12:18:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: meddyserver/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-12-26 12:18:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: meddyserver/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/msudhanshu/test/meddyserver/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-26 12:18:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: meddyserver/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-12-26 12:18:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: meddyserver/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/msudhanshu/test/meddyserver/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-26 12:20:14 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL meddyserver was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-12-26 12:20:14 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL meddyserver was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/msudhanshu/test/meddyserver/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/msudhanshu/test/meddyserver/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /home/msudhanshu/test/meddyserver/index.php(109): Kohana_Request->execute()
#3 {main}
2012-12-26 12:20:17 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL meddyserver was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-12-26 12:20:17 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL meddyserver was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/msudhanshu/test/meddyserver/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/msudhanshu/test/meddyserver/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /home/msudhanshu/test/meddyserver/index.php(109): Kohana_Request->execute()
#3 {main}
2012-12-26 12:21:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: meddyserver/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-12-26 12:21:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: meddyserver/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/msudhanshu/test/meddyserver/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-26 12:21:31 --- ERROR: ErrorException [ 8 ]: Undefined variable: data ~ APPPATH/views/plain.php [ 1 ]
2012-12-26 12:21:31 --- STRACE: ErrorException [ 8 ]: Undefined variable: data ~ APPPATH/views/plain.php [ 1 ]
--
#0 /home/msudhanshu/test/meddyserver/application/views/plain.php(1): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/msudhansh...', 1, Array)
#1 /home/msudhanshu/test/meddyserver/system/classes/kohana/view.php(61): include('/home/msudhansh...')
#2 /home/msudhanshu/test/meddyserver/system/classes/kohana/view.php(343): Kohana_View::capture('/home/msudhansh...', Array)
#3 /home/msudhanshu/test/meddyserver/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 /home/msudhanshu/test/meddyserver/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Admin))
#6 /home/msudhanshu/test/meddyserver/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/msudhanshu/test/meddyserver/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /home/msudhanshu/test/meddyserver/index.php(109): Kohana_Request->execute()
#9 {main}
2012-12-26 12:21:33 --- ERROR: ErrorException [ 8 ]: Undefined variable: data ~ APPPATH/views/plain.php [ 1 ]
2012-12-26 12:21:33 --- STRACE: ErrorException [ 8 ]: Undefined variable: data ~ APPPATH/views/plain.php [ 1 ]
--
#0 /home/msudhanshu/test/meddyserver/application/views/plain.php(1): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/msudhansh...', 1, Array)
#1 /home/msudhanshu/test/meddyserver/system/classes/kohana/view.php(61): include('/home/msudhansh...')
#2 /home/msudhanshu/test/meddyserver/system/classes/kohana/view.php(343): Kohana_View::capture('/home/msudhansh...', Array)
#3 /home/msudhanshu/test/meddyserver/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 /home/msudhanshu/test/meddyserver/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Admin))
#6 /home/msudhanshu/test/meddyserver/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/msudhanshu/test/meddyserver/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /home/msudhanshu/test/meddyserver/index.php(109): Kohana_Request->execute()
#9 {main}
2012-12-26 12:21:36 --- ERROR: ErrorException [ 8 ]: Undefined variable: data ~ APPPATH/views/plain.php [ 1 ]
2012-12-26 12:21:36 --- STRACE: ErrorException [ 8 ]: Undefined variable: data ~ APPPATH/views/plain.php [ 1 ]
--
#0 /home/msudhanshu/test/meddyserver/application/views/plain.php(1): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/msudhansh...', 1, Array)
#1 /home/msudhanshu/test/meddyserver/system/classes/kohana/view.php(61): include('/home/msudhansh...')
#2 /home/msudhanshu/test/meddyserver/system/classes/kohana/view.php(343): Kohana_View::capture('/home/msudhansh...', Array)
#3 /home/msudhanshu/test/meddyserver/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 /home/msudhanshu/test/meddyserver/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Admin))
#6 /home/msudhanshu/test/meddyserver/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/msudhanshu/test/meddyserver/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /home/msudhanshu/test/meddyserver/index.php(109): Kohana_Request->execute()
#9 {main}
2012-12-26 12:21:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: meddyserver/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-12-26 12:21:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: meddyserver/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/msudhanshu/test/meddyserver/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-26 12:22:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: meddyserver/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-12-26 12:22:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: meddyserver/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/msudhanshu/test/meddyserver/index.php(109): Kohana_Request->execute()
#1 {main}