<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-01-10 11:13:19 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL home was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2013-01-10 11:13:19 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL home was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/msudhanshu/test/meddyserver/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/msudhanshu/test/meddyserver/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /home/msudhanshu/test/meddyserver/index.php(109): Kohana_Request->execute()
#3 {main}
2013-01-10 11:17:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: meddyserver/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-10 11:17:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: meddyserver/index.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/msudhanshu/test/meddyserver/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-10 11:19:00 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL sync was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2013-01-10 11:19:00 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL sync was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/msudhanshu/test/meddyserver/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/msudhanshu/test/meddyserver/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /home/msudhanshu/test/meddyserver/index.php(109): Kohana_Request->execute()
#3 {main}
2013-01-10 11:19:31 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/home was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2013-01-10 11:19:31 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/home was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /home/msudhanshu/test/meddyserver/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/msudhanshu/test/meddyserver/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /home/msudhanshu/test/meddyserver/index.php(109): Kohana_Request->execute()
#3 {main}
2013-01-10 11:22:16 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/home was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2013-01-10 11:22:16 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/home was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /home/msudhanshu/test/meddyserver/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/msudhanshu/test/meddyserver/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /home/msudhanshu/test/meddyserver/index.php(109): Kohana_Request->execute()
#3 {main}
2013-01-10 11:22:30 --- ERROR: ErrorException [ 8 ]: Undefined variable: data ~ APPPATH/views/plain.php [ 1 ]
2013-01-10 11:22:30 --- STRACE: ErrorException [ 8 ]: Undefined variable: data ~ APPPATH/views/plain.php [ 1 ]
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
2013-01-10 11:26:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/tempstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-10 11:26:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/tempstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/msudhanshu/test/meddyserver/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-10 11:26:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/tempstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-10 11:26:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/tempstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/msudhanshu/test/meddyserver/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-10 11:26:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/tempstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-10 11:26:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/tempstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/msudhanshu/test/meddyserver/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-10 11:26:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/tempstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-10 11:26:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/tempstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/msudhanshu/test/meddyserver/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-10 11:26:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/tempstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-10 11:26:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/tempstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/msudhanshu/test/meddyserver/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-10 11:26:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/tempstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-10 11:26:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/tempstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/msudhanshu/test/meddyserver/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-10 11:26:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/tempstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-10 11:26:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/tempstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/msudhanshu/test/meddyserver/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-10 11:26:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/tempstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-10 11:26:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/tempstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/msudhanshu/test/meddyserver/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-10 11:27:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/tempstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-10 11:27:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/tempstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/msudhanshu/test/meddyserver/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-10 12:09:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/tempstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-10 12:09:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/tempstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/msudhanshu/test/meddyserver/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-10 12:09:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/tempstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-10 12:09:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/tempstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/msudhanshu/test/meddyserver/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-10 12:09:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/tempstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-10 12:09:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/tempstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/msudhanshu/test/meddyserver/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-10 12:09:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/tempstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-10 12:09:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/tempstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/msudhanshu/test/meddyserver/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-10 12:09:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/tempstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-10 12:09:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/tempstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/msudhanshu/test/meddyserver/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-10 12:09:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/tempstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-10 12:09:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/tempstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/msudhanshu/test/meddyserver/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-10 12:09:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/tempstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-10 12:09:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/tempstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/msudhanshu/test/meddyserver/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-10 12:14:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/tempstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-10 12:14:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/tempstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/msudhanshu/test/meddyserver/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-10 12:14:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/go.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-10 12:14:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/go.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/msudhanshu/test/meddyserver/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-10 12:14:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/go.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-10 12:14:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/go.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/msudhanshu/test/meddyserver/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-10 12:14:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/tempstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-10 12:14:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/tempstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/msudhanshu/test/meddyserver/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-10 12:14:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/tempstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-10 12:14:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/tempstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/msudhanshu/test/meddyserver/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-10 12:14:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/go.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-10 12:14:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/go.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/msudhanshu/test/meddyserver/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-10 12:14:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/tempstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-10 12:14:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/tempstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/msudhanshu/test/meddyserver/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-10 12:14:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/go.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-10 12:14:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/go.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/msudhanshu/test/meddyserver/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-10 12:14:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/tempstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-10 12:14:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/tempstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/msudhanshu/test/meddyserver/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-10 12:14:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/images/go.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-10 12:14:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/images/go.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/msudhanshu/test/meddyserver/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-10 12:14:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/tempstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-10 12:14:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/tempstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/msudhanshu/test/meddyserver/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-10 12:14:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/images/go.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-10 12:14:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/images/go.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/msudhanshu/test/meddyserver/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-10 12:14:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/images/go.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-10 12:14:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/images/go.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/msudhanshu/test/meddyserver/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-10 12:14:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/tempstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-10 12:14:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/tempstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/msudhanshu/test/meddyserver/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-10 12:14:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/tempstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-10 12:14:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/tempstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/msudhanshu/test/meddyserver/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-10 12:14:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/images/go.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-10 12:14:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/images/go.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/msudhanshu/test/meddyserver/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-10 12:14:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/tempstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-10 12:14:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/tempstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/msudhanshu/test/meddyserver/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-10 12:14:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/images/go.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-10 12:14:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/images/go.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/msudhanshu/test/meddyserver/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-10 12:14:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/tempstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-10 12:14:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/images/go.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-10 12:14:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/images/go.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/msudhanshu/test/meddyserver/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-10 12:14:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/tempstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/msudhanshu/test/meddyserver/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-10 12:14:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/tempstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-10 12:14:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/tempstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/msudhanshu/test/meddyserver/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-10 12:14:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/images/g1o.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-10 12:14:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/images/g1o.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/msudhanshu/test/meddyserver/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-10 12:14:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/tempstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-10 12:14:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/tempstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/msudhanshu/test/meddyserver/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-10 12:14:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/images/g1o.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-10 12:14:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/images/g1o.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/msudhanshu/test/meddyserver/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-10 12:14:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/tempstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-10 12:14:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/tempstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/msudhanshu/test/meddyserver/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-10 12:14:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/images/g1o.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-10 12:14:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/images/g1o.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/msudhanshu/test/meddyserver/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-10 12:14:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/tempstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-10 12:14:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/tempstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/msudhanshu/test/meddyserver/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-10 12:14:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php/images/go.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-10 12:14:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php/images/go.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/msudhanshu/test/meddyserver/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-10 12:15:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/tempstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-10 12:15:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/tempstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/msudhanshu/test/meddyserver/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-10 12:15:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php/images/go.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-10 12:15:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php/images/go.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/msudhanshu/test/meddyserver/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-10 12:15:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/tempstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-10 12:15:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/tempstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/msudhanshu/test/meddyserver/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-10 12:15:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php/images/go.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-10 12:15:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php/images/go.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/msudhanshu/test/meddyserver/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-10 12:15:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/tempstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-10 12:15:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/tempstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/msudhanshu/test/meddyserver/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-10 12:15:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php/images/go.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-10 12:15:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php/images/go.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/msudhanshu/test/meddyserver/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-10 12:15:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php/images/go.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-10 12:15:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/tempstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-10 12:15:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php/images/go.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/msudhanshu/test/meddyserver/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-10 12:15:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/tempstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/msudhanshu/test/meddyserver/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-10 12:15:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/tempstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-10 12:15:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/tempstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/msudhanshu/test/meddyserver/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-10 12:15:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php/images/go.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-10 12:15:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php/images/go.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/msudhanshu/test/meddyserver/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-10 12:15:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/tempstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-10 12:15:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/tempstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/msudhanshu/test/meddyserver/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-10 12:15:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php/images/go.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-10 12:15:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php/images/go.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/msudhanshu/test/meddyserver/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-10 12:15:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/tempstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-10 12:15:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/tempstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/msudhanshu/test/meddyserver/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-10 12:15:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php/images/go.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-10 12:15:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php/images/go.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/msudhanshu/test/meddyserver/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-10 12:15:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php/images/go.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-10 12:15:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php/images/go.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/msudhanshu/test/meddyserver/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-10 12:15:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/go.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-10 12:15:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/go.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/msudhanshu/test/meddyserver/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-10 12:32:32 --- ERROR: ErrorException [ 1 ]: Call to undefined method HTML::stylesheet() ~ APPPATH/views/home.php [ 5 ]
2013-01-10 12:32:32 --- STRACE: ErrorException [ 1 ]: Call to undefined method HTML::stylesheet() ~ APPPATH/views/home.php [ 5 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-01-10 12:32:34 --- ERROR: ErrorException [ 1 ]: Call to undefined method HTML::stylesheet() ~ APPPATH/views/home.php [ 5 ]
2013-01-10 12:32:34 --- STRACE: ErrorException [ 1 ]: Call to undefined method HTML::stylesheet() ~ APPPATH/views/home.php [ 5 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-01-10 12:32:34 --- ERROR: ErrorException [ 1 ]: Call to undefined method HTML::stylesheet() ~ APPPATH/views/home.php [ 5 ]
2013-01-10 12:32:34 --- STRACE: ErrorException [ 1 ]: Call to undefined method HTML::stylesheet() ~ APPPATH/views/home.php [ 5 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-01-10 12:32:34 --- ERROR: ErrorException [ 1 ]: Call to undefined method HTML::stylesheet() ~ APPPATH/views/home.php [ 5 ]
2013-01-10 12:32:34 --- STRACE: ErrorException [ 1 ]: Call to undefined method HTML::stylesheet() ~ APPPATH/views/home.php [ 5 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-01-10 12:32:34 --- ERROR: ErrorException [ 1 ]: Call to undefined method HTML::stylesheet() ~ APPPATH/views/home.php [ 5 ]
2013-01-10 12:32:34 --- STRACE: ErrorException [ 1 ]: Call to undefined method HTML::stylesheet() ~ APPPATH/views/home.php [ 5 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-01-10 12:49:34 --- ERROR: ErrorException [ 1 ]: Call to undefined method HTML::stylesheet() ~ APPPATH/views/home.php [ 5 ]
2013-01-10 12:49:34 --- STRACE: ErrorException [ 1 ]: Call to undefined method HTML::stylesheet() ~ APPPATH/views/home.php [ 5 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-01-10 12:49:34 --- ERROR: ErrorException [ 1 ]: Call to undefined method HTML::stylesheet() ~ APPPATH/views/home.php [ 5 ]
2013-01-10 12:49:34 --- STRACE: ErrorException [ 1 ]: Call to undefined method HTML::stylesheet() ~ APPPATH/views/home.php [ 5 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-01-10 12:49:34 --- ERROR: ErrorException [ 1 ]: Call to undefined method HTML::stylesheet() ~ APPPATH/views/home.php [ 5 ]
2013-01-10 12:49:34 --- STRACE: ErrorException [ 1 ]: Call to undefined method HTML::stylesheet() ~ APPPATH/views/home.php [ 5 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-01-10 12:49:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/tempstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-10 12:49:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/tempstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/msudhanshu/test/meddyserver/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-10 12:49:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php/images/go.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-10 12:49:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php/images/go.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/msudhanshu/test/meddyserver/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-10 12:49:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/gyanikaunserver/assets/images/go.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-10 12:49:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/gyanikaunserver/assets/images/go.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/msudhanshu/test/meddyserver/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-10 12:49:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/tempstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-10 12:49:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/tempstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/msudhanshu/test/meddyserver/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-10 12:49:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php/images/go.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-10 12:49:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php/images/go.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/msudhanshu/test/meddyserver/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-10 12:49:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/gyanikaunserver/assets/images/go.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-10 12:49:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/gyanikaunserver/assets/images/go.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/msudhanshu/test/meddyserver/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-10 12:49:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/gyanikaunserver/index.php/album/show_create_editor ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-10 12:49:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/gyanikaunserver/index.php/album/show_create_editor ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/msudhanshu/test/meddyserver/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-10 12:50:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/gyanikaunserver/index.php/album/show_create_editor ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-10 12:50:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/gyanikaunserver/index.php/album/show_create_editor ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/msudhanshu/test/meddyserver/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-10 12:50:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/gyanikaunserver/index.php/assets/images/go.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-10 12:50:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/gyanikaunserver/index.php/assets/images/go.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/msudhanshu/test/meddyserver/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-10 12:51:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/tempstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-10 12:51:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/tempstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/msudhanshu/test/meddyserver/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-10 12:51:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/gyanikaunserver/assets/images/go.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-10 12:51:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/gyanikaunserver/assets/images/go.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/msudhanshu/test/meddyserver/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-10 12:51:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php/images/go.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-10 12:51:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php/images/go.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/msudhanshu/test/meddyserver/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-10 12:51:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/tempstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-10 12:51:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/gyanikaunserver/assets/images/go.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-10 12:51:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/gyanikaunserver/assets/images/go.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/msudhanshu/test/meddyserver/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-10 12:51:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/tempstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/msudhanshu/test/meddyserver/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-10 12:51:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php/images/go.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-10 12:51:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php/images/go.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/msudhanshu/test/meddyserver/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-10 12:51:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/tempstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-10 12:51:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/tempstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/msudhanshu/test/meddyserver/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-10 12:51:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/gyanikaunserver/assets/images/go.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-10 12:51:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/gyanikaunserver/assets/images/go.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/msudhanshu/test/meddyserver/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-10 12:51:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php/images/go.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-10 12:51:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php/images/go.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/msudhanshu/test/meddyserver/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-10 12:51:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/tempstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-10 12:51:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/tempstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/msudhanshu/test/meddyserver/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-10 12:51:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/gyanikaunserver/assets/images/go.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-10 12:51:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/gyanikaunserver/assets/images/go.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/msudhanshu/test/meddyserver/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-10 12:51:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php/images/go.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-10 12:51:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php/images/go.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/msudhanshu/test/meddyserver/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-10 12:51:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/tempstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-10 12:51:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/tempstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/msudhanshu/test/meddyserver/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-10 12:51:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/gyanikaunserver/assets/images/go.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-10 12:51:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/gyanikaunserver/assets/images/go.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/msudhanshu/test/meddyserver/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-10 12:51:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php/images/go.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-10 12:51:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php/images/go.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/msudhanshu/test/meddyserver/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-10 12:51:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php/images/go.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-10 12:51:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php/images/go.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/msudhanshu/test/meddyserver/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-10 12:51:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/tempstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-10 12:51:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/tempstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/msudhanshu/test/meddyserver/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-10 12:51:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/gyanikaunserver/assets/images/go.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-10 12:51:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/gyanikaunserver/assets/images/go.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/msudhanshu/test/meddyserver/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-10 12:53:03 --- ERROR: ErrorException [ 2 ]: strpos() expects parameter 1 to be string, array given ~ SYSPATH/classes/kohana/html.php [ 204 ]
2013-01-10 12:53:03 --- STRACE: ErrorException [ 2 ]: strpos() expects parameter 1 to be string, array given ~ SYSPATH/classes/kohana/html.php [ 204 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'strpos() expect...', '/home/msudhansh...', 204, Array)
#1 /home/msudhanshu/test/meddyserver/system/classes/kohana/html.php(204): strpos(Array, '://')
#2 /home/msudhanshu/test/meddyserver/application/views/home.php(12): Kohana_HTML::style(Array, Array, false)
#3 /home/msudhanshu/test/meddyserver/system/classes/kohana/view.php(61): include('/home/msudhansh...')
#4 /home/msudhanshu/test/meddyserver/system/classes/kohana/view.php(343): Kohana_View::capture('/home/msudhansh...', Array)
#5 /home/msudhanshu/test/meddyserver/system/classes/kohana/view.php(228): Kohana_View->render()
#6 /home/msudhanshu/test/meddyserver/system/classes/kohana/response.php(160): Kohana_View->__toString()
#7 /home/msudhanshu/test/meddyserver/application/classes/controller/admin.php(35): Kohana_Response->body(Object(View))
#8 [internal function]: Controller_Admin->action_home()
#9 /home/msudhanshu/test/meddyserver/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin))
#10 /home/msudhanshu/test/meddyserver/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /home/msudhanshu/test/meddyserver/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 /home/msudhanshu/test/meddyserver/index.php(109): Kohana_Request->execute()
#13 {main}
2013-01-10 12:53:04 --- ERROR: ErrorException [ 2 ]: strpos() expects parameter 1 to be string, array given ~ SYSPATH/classes/kohana/html.php [ 204 ]
2013-01-10 12:53:04 --- STRACE: ErrorException [ 2 ]: strpos() expects parameter 1 to be string, array given ~ SYSPATH/classes/kohana/html.php [ 204 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'strpos() expect...', '/home/msudhansh...', 204, Array)
#1 /home/msudhanshu/test/meddyserver/system/classes/kohana/html.php(204): strpos(Array, '://')
#2 /home/msudhanshu/test/meddyserver/application/views/home.php(12): Kohana_HTML::style(Array, Array, false)
#3 /home/msudhanshu/test/meddyserver/system/classes/kohana/view.php(61): include('/home/msudhansh...')
#4 /home/msudhanshu/test/meddyserver/system/classes/kohana/view.php(343): Kohana_View::capture('/home/msudhansh...', Array)
#5 /home/msudhanshu/test/meddyserver/system/classes/kohana/view.php(228): Kohana_View->render()
#6 /home/msudhanshu/test/meddyserver/system/classes/kohana/response.php(160): Kohana_View->__toString()
#7 /home/msudhanshu/test/meddyserver/application/classes/controller/admin.php(35): Kohana_Response->body(Object(View))
#8 [internal function]: Controller_Admin->action_home()
#9 /home/msudhanshu/test/meddyserver/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin))
#10 /home/msudhanshu/test/meddyserver/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /home/msudhanshu/test/meddyserver/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 /home/msudhanshu/test/meddyserver/index.php(109): Kohana_Request->execute()
#13 {main}
2013-01-10 12:53:04 --- ERROR: ErrorException [ 2 ]: strpos() expects parameter 1 to be string, array given ~ SYSPATH/classes/kohana/html.php [ 204 ]
2013-01-10 12:53:04 --- STRACE: ErrorException [ 2 ]: strpos() expects parameter 1 to be string, array given ~ SYSPATH/classes/kohana/html.php [ 204 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'strpos() expect...', '/home/msudhansh...', 204, Array)
#1 /home/msudhanshu/test/meddyserver/system/classes/kohana/html.php(204): strpos(Array, '://')
#2 /home/msudhanshu/test/meddyserver/application/views/home.php(12): Kohana_HTML::style(Array, Array, false)
#3 /home/msudhanshu/test/meddyserver/system/classes/kohana/view.php(61): include('/home/msudhansh...')
#4 /home/msudhanshu/test/meddyserver/system/classes/kohana/view.php(343): Kohana_View::capture('/home/msudhansh...', Array)
#5 /home/msudhanshu/test/meddyserver/system/classes/kohana/view.php(228): Kohana_View->render()
#6 /home/msudhanshu/test/meddyserver/system/classes/kohana/response.php(160): Kohana_View->__toString()
#7 /home/msudhanshu/test/meddyserver/application/classes/controller/admin.php(35): Kohana_Response->body(Object(View))
#8 [internal function]: Controller_Admin->action_home()
#9 /home/msudhanshu/test/meddyserver/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin))
#10 /home/msudhanshu/test/meddyserver/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /home/msudhanshu/test/meddyserver/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 /home/msudhanshu/test/meddyserver/index.php(109): Kohana_Request->execute()
#13 {main}
2013-01-10 12:53:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/gyanikaunserver/assets/css/style ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-10 12:53:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/gyanikaunserver/assets/css/style ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/msudhanshu/test/meddyserver/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-10 12:53:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/tempstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-10 12:53:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/tempstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/msudhanshu/test/meddyserver/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-10 12:53:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php/images/go.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-10 12:53:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php/images/go.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/msudhanshu/test/meddyserver/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-10 12:53:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/gyanikaunserver/assets/images/go.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-10 12:53:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/gyanikaunserver/assets/images/go.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/msudhanshu/test/meddyserver/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-10 12:53:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/gyanikaunserver/assets/css/style ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-10 12:53:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/gyanikaunserver/assets/css/style ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/msudhanshu/test/meddyserver/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-10 12:53:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/tempstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-10 12:53:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/tempstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/msudhanshu/test/meddyserver/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-10 12:53:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/gyanikaunserver/assets/images/go.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-10 12:53:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/gyanikaunserver/assets/images/go.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/msudhanshu/test/meddyserver/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-10 12:53:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php/images/go.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-10 12:53:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php/images/go.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/msudhanshu/test/meddyserver/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-10 12:53:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/gyanikaunserver/assets/images/go.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-10 12:53:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/gyanikaunserver/assets/images/go.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/msudhanshu/test/meddyserver/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-10 12:53:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/tempstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-10 12:53:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php/images/go.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-10 12:53:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/tempstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/msudhanshu/test/meddyserver/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-10 12:53:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php/images/go.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/msudhanshu/test/meddyserver/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-10 12:53:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/gyanikaunserver/assets/css/style ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-10 12:53:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/gyanikaunserver/assets/css/style ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/msudhanshu/test/meddyserver/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-10 12:53:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/gyanikaunserver/assets/css/style ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-10 12:53:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/gyanikaunserver/assets/css/style ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/msudhanshu/test/meddyserver/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-10 12:53:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/tempstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-10 12:53:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/tempstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/msudhanshu/test/meddyserver/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-10 12:53:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/gyanikaunserver/assets/images/go.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-10 12:53:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/gyanikaunserver/assets/images/go.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/msudhanshu/test/meddyserver/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-10 12:53:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php/images/go.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-10 12:53:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php/images/go.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/msudhanshu/test/meddyserver/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-10 12:53:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/gyanikaunserver/assets/images/go.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-10 12:53:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/gyanikaunserver/assets/images/go.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/msudhanshu/test/meddyserver/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-10 12:53:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/tempstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-10 12:53:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/tempstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/msudhanshu/test/meddyserver/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-10 12:53:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/gyanikaunserver/assets/css/style ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-10 12:53:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/gyanikaunserver/assets/css/style ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/msudhanshu/test/meddyserver/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-10 12:53:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php/images/go.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-10 12:53:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php/images/go.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/msudhanshu/test/meddyserver/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-10 12:53:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/gyanikaunserver/assets/css/style ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-10 12:53:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/gyanikaunserver/assets/css/style ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/msudhanshu/test/meddyserver/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-10 12:53:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/gyanikaunserver/assets/images/go.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-10 12:53:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/tempstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-10 12:53:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/gyanikaunserver/assets/images/go.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/msudhanshu/test/meddyserver/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-10 12:53:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/tempstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/msudhanshu/test/meddyserver/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-10 12:53:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php/images/go.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-10 12:53:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php/images/go.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/msudhanshu/test/meddyserver/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-10 12:53:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/gyanikaunserver/assets/images/go.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-10 12:53:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/tempstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-10 12:53:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/gyanikaunserver/assets/images/go.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/msudhanshu/test/meddyserver/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-10 12:53:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/tempstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/msudhanshu/test/meddyserver/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-10 12:53:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/gyanikaunserver/assets/css/style ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-10 12:53:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/gyanikaunserver/assets/css/style ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/msudhanshu/test/meddyserver/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-10 12:53:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php/images/go.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-10 12:53:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php/images/go.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/msudhanshu/test/meddyserver/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-10 12:54:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/gyanikaunserver/assets/images/go.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-10 12:54:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/gyanikaunserver/assets/images/go.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/msudhanshu/test/meddyserver/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-10 12:54:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/tempstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-10 12:54:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/tempstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/msudhanshu/test/meddyserver/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-10 12:54:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/gyanikaunserver/assets/css/style ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-10 12:54:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/gyanikaunserver/assets/css/style ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/msudhanshu/test/meddyserver/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-10 12:54:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php/images/go.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-10 12:54:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php/images/go.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/msudhanshu/test/meddyserver/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-10 12:54:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/gyanikaunserver/assets/images/go.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-10 12:54:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/gyanikaunserver/assets/images/go.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/msudhanshu/test/meddyserver/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-10 12:54:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/gyanikaunserver/assets/css/style ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-10 12:54:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/gyanikaunserver/assets/css/style ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/msudhanshu/test/meddyserver/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-10 12:54:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/tempstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-10 12:54:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php/images/go.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-10 12:54:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/tempstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/msudhanshu/test/meddyserver/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-10 12:54:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php/images/go.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/msudhanshu/test/meddyserver/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-10 12:54:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/gyanikaunserver/assets/images/go.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-10 12:54:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/gyanikaunserver/assets/images/go.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/msudhanshu/test/meddyserver/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-10 12:54:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/tempstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-10 12:54:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/tempstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/msudhanshu/test/meddyserver/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-10 12:54:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/gyanikaunserver/assets/css/style ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-10 12:54:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/gyanikaunserver/assets/css/style ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/msudhanshu/test/meddyserver/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-10 12:54:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/gyanikaunserver/assets/images/go.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-10 12:54:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/gyanikaunserver/assets/images/go.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/msudhanshu/test/meddyserver/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-10 12:54:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php/images/go.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-10 12:54:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php/images/go.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/msudhanshu/test/meddyserver/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-10 12:54:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/gyanikaunserver/assets/css/style ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-10 12:54:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/gyanikaunserver/assets/css/style ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/msudhanshu/test/meddyserver/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-10 12:54:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/tempstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-10 12:54:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/tempstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/msudhanshu/test/meddyserver/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-10 12:54:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/gyanikaunserver/assets/images/go.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-10 12:54:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/gyanikaunserver/assets/images/go.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/msudhanshu/test/meddyserver/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-10 12:54:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php/images/go.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-10 12:54:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php/images/go.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/msudhanshu/test/meddyserver/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-10 12:55:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/gyanikaunserver/assets/images/go.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-10 12:55:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/gyanikaunserver/assets/css/style ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-10 12:55:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/gyanikaunserver/assets/images/go.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/msudhanshu/test/meddyserver/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-10 12:55:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/gyanikaunserver/assets/css/style ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/msudhanshu/test/meddyserver/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-10 12:55:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php/images/go.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-10 12:55:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php/images/go.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/msudhanshu/test/meddyserver/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-10 12:55:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/tempstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-10 12:55:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/tempstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/msudhanshu/test/meddyserver/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-10 12:55:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/gyanikaunserver/assets/css/style ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-10 12:55:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/gyanikaunserver/assets/css/style ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/msudhanshu/test/meddyserver/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-10 12:55:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php/images/go.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-10 12:55:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/gyanikaunserver/assets/images/go.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-10 12:55:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php/images/go.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/msudhanshu/test/meddyserver/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-10 12:55:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/gyanikaunserver/assets/images/go.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/msudhanshu/test/meddyserver/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-10 12:55:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/tempstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-10 12:55:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/tempstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/msudhanshu/test/meddyserver/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-10 12:56:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/gyanikaunserver/assets/css/style ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-10 12:56:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/gyanikaunserver/assets/css/style ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/msudhanshu/test/meddyserver/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-10 12:56:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/tempstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-10 12:56:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/tempstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/msudhanshu/test/meddyserver/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-10 12:56:13 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/ ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2013-01-10 12:56:13 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/ ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /home/msudhanshu/test/meddyserver/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/msudhanshu/test/meddyserver/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /home/msudhanshu/test/meddyserver/index.php(109): Kohana_Request->execute()
#3 {main}
2013-01-10 12:56:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php/images/go.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-10 12:56:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php/images/go.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/msudhanshu/test/meddyserver/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-10 12:56:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/gyanikaunserver/assets/css/style ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-10 12:56:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/gyanikaunserver/assets/css/style ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/msudhanshu/test/meddyserver/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-10 12:56:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/tempstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-10 12:56:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/tempstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/msudhanshu/test/meddyserver/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-10 12:56:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php/images/go.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-10 12:56:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php/images/go.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/msudhanshu/test/meddyserver/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-10 12:56:15 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/ ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2013-01-10 12:56:15 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/ ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /home/msudhanshu/test/meddyserver/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/msudhanshu/test/meddyserver/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /home/msudhanshu/test/meddyserver/index.php(109): Kohana_Request->execute()
#3 {main}
2013-01-10 12:56:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/tempstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-10 12:56:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/tempstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/msudhanshu/test/meddyserver/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-10 12:56:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/gyanikaunserver/assets/css/style ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-10 12:56:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/gyanikaunserver/assets/css/style ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/msudhanshu/test/meddyserver/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-10 12:56:16 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/ ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2013-01-10 12:56:16 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/ ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /home/msudhanshu/test/meddyserver/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/msudhanshu/test/meddyserver/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /home/msudhanshu/test/meddyserver/index.php(109): Kohana_Request->execute()
#3 {main}
2013-01-10 12:56:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php/images/go.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-10 12:56:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php/images/go.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/msudhanshu/test/meddyserver/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-10 12:56:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/tempstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-10 12:56:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/tempstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/msudhanshu/test/meddyserver/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-10 12:56:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php/images/go.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-10 12:56:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/gyanikaunserver/assets/css/style ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-10 12:56:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php/images/go.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/msudhanshu/test/meddyserver/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-10 12:56:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/gyanikaunserver/assets/css/style ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/msudhanshu/test/meddyserver/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-10 12:56:16 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/ ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2013-01-10 12:56:16 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/ ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /home/msudhanshu/test/meddyserver/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/msudhanshu/test/meddyserver/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /home/msudhanshu/test/meddyserver/index.php(109): Kohana_Request->execute()
#3 {main}
2013-01-10 12:56:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php/images/go.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-10 12:56:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php/images/go.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/msudhanshu/test/meddyserver/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-10 12:56:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/gyanikaunserver/assets/css/style ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-10 12:56:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/gyanikaunserver/assets/css/style ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/msudhanshu/test/meddyserver/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-10 12:56:16 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/ ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2013-01-10 12:56:16 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/ ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /home/msudhanshu/test/meddyserver/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/msudhanshu/test/meddyserver/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /home/msudhanshu/test/meddyserver/index.php(109): Kohana_Request->execute()
#3 {main}
2013-01-10 12:56:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/tempstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-10 12:56:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/tempstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/msudhanshu/test/meddyserver/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-10 12:56:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/gyanikaunserver/assets/css/style ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-10 12:56:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/gyanikaunserver/assets/css/style ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/msudhanshu/test/meddyserver/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-10 12:56:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/tempstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-10 12:56:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/tempstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/msudhanshu/test/meddyserver/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-10 12:56:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php/images/go.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-10 12:56:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php/images/go.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/msudhanshu/test/meddyserver/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-10 12:56:43 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/ ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2013-01-10 12:56:43 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/ ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /home/msudhanshu/test/meddyserver/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/msudhanshu/test/meddyserver/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /home/msudhanshu/test/meddyserver/index.php(109): Kohana_Request->execute()
#3 {main}
2013-01-10 12:56:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/tempstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-10 12:56:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/tempstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/msudhanshu/test/meddyserver/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-10 12:56:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php/images/go.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-10 12:56:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php/images/go.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/msudhanshu/test/meddyserver/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-10 12:56:44 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/ ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2013-01-10 12:56:44 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/ ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /home/msudhanshu/test/meddyserver/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/msudhanshu/test/meddyserver/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /home/msudhanshu/test/meddyserver/index.php(109): Kohana_Request->execute()
#3 {main}
2013-01-10 12:56:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/gyanikaunserver/assets/css/style ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-10 12:56:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/gyanikaunserver/assets/css/style ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/msudhanshu/test/meddyserver/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-10 12:56:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/gyanikaunserver/assets/css/style ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-10 12:56:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/gyanikaunserver/assets/css/style ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/msudhanshu/test/meddyserver/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-10 12:56:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/tempstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-10 12:56:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/tempstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/msudhanshu/test/meddyserver/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-10 12:56:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php/images/go.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-10 12:56:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php/images/go.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/msudhanshu/test/meddyserver/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-10 12:56:45 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/ ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2013-01-10 12:56:45 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/ ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /home/msudhanshu/test/meddyserver/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/msudhanshu/test/meddyserver/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /home/msudhanshu/test/meddyserver/index.php(109): Kohana_Request->execute()
#3 {main}
2013-01-10 12:56:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/tempstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-10 12:56:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/tempstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/msudhanshu/test/meddyserver/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-10 12:56:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php/images/go.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-10 12:56:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php/images/go.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/msudhanshu/test/meddyserver/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-10 12:56:45 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/ ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2013-01-10 12:56:45 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/ ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /home/msudhanshu/test/meddyserver/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/msudhanshu/test/meddyserver/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /home/msudhanshu/test/meddyserver/index.php(109): Kohana_Request->execute()
#3 {main}
2013-01-10 12:56:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/gyanikaunserver/assets/css/style ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-10 12:56:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/gyanikaunserver/assets/css/style ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/msudhanshu/test/meddyserver/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-10 12:56:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/gyanikaunserver/assets/css/style ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-10 12:56:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/gyanikaunserver/assets/css/style ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/msudhanshu/test/meddyserver/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-10 12:56:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/tempstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-10 12:56:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/tempstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/msudhanshu/test/meddyserver/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-10 12:56:45 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/ ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2013-01-10 12:56:45 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/ ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /home/msudhanshu/test/meddyserver/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/msudhanshu/test/meddyserver/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /home/msudhanshu/test/meddyserver/index.php(109): Kohana_Request->execute()
#3 {main}
2013-01-10 12:56:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php/images/go.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-10 12:56:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php/images/go.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/msudhanshu/test/meddyserver/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-10 12:56:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/gyanikaunserver/assets/css/style ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-10 12:56:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/gyanikaunserver/assets/css/style ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/msudhanshu/test/meddyserver/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-10 12:56:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/tempstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-10 12:56:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/tempstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/msudhanshu/test/meddyserver/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-10 12:56:46 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/ ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2013-01-10 12:56:46 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/ ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /home/msudhanshu/test/meddyserver/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/msudhanshu/test/meddyserver/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /home/msudhanshu/test/meddyserver/index.php(109): Kohana_Request->execute()
#3 {main}
2013-01-10 12:56:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php/images/go.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-10 12:56:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php/images/go.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/msudhanshu/test/meddyserver/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-10 12:56:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/gyanikaunserver/assets/css/style ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-10 12:56:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/gyanikaunserver/assets/css/style ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/msudhanshu/test/meddyserver/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-10 12:56:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/tempstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-10 12:56:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/tempstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/msudhanshu/test/meddyserver/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-10 12:56:46 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/ ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2013-01-10 12:56:46 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/ ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /home/msudhanshu/test/meddyserver/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/msudhanshu/test/meddyserver/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /home/msudhanshu/test/meddyserver/index.php(109): Kohana_Request->execute()
#3 {main}
2013-01-10 12:56:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php/images/go.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-10 12:56:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php/images/go.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/msudhanshu/test/meddyserver/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-10 12:56:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/gyanikaunserver/assets/css/style ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-10 12:56:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/gyanikaunserver/assets/css/style ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/msudhanshu/test/meddyserver/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-10 12:56:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/tempstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-10 12:56:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/tempstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/msudhanshu/test/meddyserver/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-10 12:56:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php/images/go.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-10 12:56:46 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/ ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2013-01-10 12:56:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php/images/go.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/msudhanshu/test/meddyserver/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-10 12:56:46 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/ ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /home/msudhanshu/test/meddyserver/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/msudhanshu/test/meddyserver/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /home/msudhanshu/test/meddyserver/index.php(109): Kohana_Request->execute()
#3 {main}
2013-01-10 12:59:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/gyanikaunserver/assets/images/go.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-10 12:59:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/gyanikaunserver/assets/images/go.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/msudhanshu/test/meddyserver/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-10 12:59:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/gyanikaunserver/assets/css/style ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-10 12:59:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/gyanikaunserver/assets/css/style ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/msudhanshu/test/meddyserver/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-10 12:59:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/tempstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-10 12:59:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/tempstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/msudhanshu/test/meddyserver/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-10 12:59:21 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/ ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2013-01-10 12:59:21 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/ ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /home/msudhanshu/test/meddyserver/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/msudhanshu/test/meddyserver/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /home/msudhanshu/test/meddyserver/index.php(109): Kohana_Request->execute()
#3 {main}
2013-01-10 12:59:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php/images/go.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-10 12:59:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php/images/go.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/msudhanshu/test/meddyserver/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-10 12:59:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/gyanikaunserver/assets/css/style ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-10 12:59:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/gyanikaunserver/assets/css/style ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/msudhanshu/test/meddyserver/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-10 12:59:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/tempstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-10 12:59:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/tempstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/msudhanshu/test/meddyserver/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-10 12:59:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php/images/go.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-10 12:59:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php/images/go.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/msudhanshu/test/meddyserver/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-10 12:59:22 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/ ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2013-01-10 12:59:22 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/ ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /home/msudhanshu/test/meddyserver/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/msudhanshu/test/meddyserver/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /home/msudhanshu/test/meddyserver/index.php(109): Kohana_Request->execute()
#3 {main}
2013-01-10 12:59:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/gyanikaunserver/assets/css/style ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-10 12:59:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/gyanikaunserver/assets/css/style ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/msudhanshu/test/meddyserver/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-10 12:59:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/tempstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-10 12:59:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/tempstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/msudhanshu/test/meddyserver/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-10 12:59:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php/images/go.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-10 12:59:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php/images/go.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/msudhanshu/test/meddyserver/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-10 12:59:23 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/ ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2013-01-10 12:59:23 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/ ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /home/msudhanshu/test/meddyserver/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/msudhanshu/test/meddyserver/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /home/msudhanshu/test/meddyserver/index.php(109): Kohana_Request->execute()
#3 {main}
2013-01-10 12:59:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/gyanikaunserver/assets/css/style ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-10 12:59:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/gyanikaunserver/assets/css/style ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/msudhanshu/test/meddyserver/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-10 12:59:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/tempstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-10 12:59:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/tempstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/msudhanshu/test/meddyserver/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-10 12:59:23 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/ ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2013-01-10 12:59:23 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/ ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /home/msudhanshu/test/meddyserver/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/msudhanshu/test/meddyserver/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /home/msudhanshu/test/meddyserver/index.php(109): Kohana_Request->execute()
#3 {main}
2013-01-10 12:59:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php/images/go.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-10 12:59:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php/images/go.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/msudhanshu/test/meddyserver/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-10 12:59:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/gyanikaunserver/assets/css/style ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-10 12:59:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/gyanikaunserver/assets/css/style ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/msudhanshu/test/meddyserver/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-10 12:59:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/tempstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-10 12:59:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/tempstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/msudhanshu/test/meddyserver/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-10 12:59:23 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/ ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2013-01-10 12:59:23 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/ ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /home/msudhanshu/test/meddyserver/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/msudhanshu/test/meddyserver/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /home/msudhanshu/test/meddyserver/index.php(109): Kohana_Request->execute()
#3 {main}
2013-01-10 12:59:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php/images/go.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-10 12:59:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php/images/go.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/msudhanshu/test/meddyserver/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-10 13:00:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/gyanikaunserver/assets/css/style ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-10 13:00:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/gyanikaunserver/assets/css/style ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/msudhanshu/test/meddyserver/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-10 13:00:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/tempstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-10 13:00:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/tempstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/msudhanshu/test/meddyserver/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-10 13:00:19 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/ ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2013-01-10 13:00:19 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/ ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /home/msudhanshu/test/meddyserver/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/msudhanshu/test/meddyserver/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /home/msudhanshu/test/meddyserver/index.php(109): Kohana_Request->execute()
#3 {main}
2013-01-10 13:00:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/gyanikaunserver/assets/css/style ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-10 13:00:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/gyanikaunserver/assets/css/style ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/msudhanshu/test/meddyserver/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-10 13:00:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/tempstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-10 13:00:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/tempstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/msudhanshu/test/meddyserver/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-10 13:00:20 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/ ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2013-01-10 13:00:20 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/ ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /home/msudhanshu/test/meddyserver/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/msudhanshu/test/meddyserver/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /home/msudhanshu/test/meddyserver/index.php(109): Kohana_Request->execute()
#3 {main}
2013-01-10 13:00:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/gyanikaunserver/assets/css/style ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-10 13:00:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/gyanikaunserver/assets/css/style ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/msudhanshu/test/meddyserver/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-10 13:00:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/tempstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-10 13:00:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/tempstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/msudhanshu/test/meddyserver/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-10 13:00:20 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/ ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2013-01-10 13:00:20 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/ ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /home/msudhanshu/test/meddyserver/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/msudhanshu/test/meddyserver/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /home/msudhanshu/test/meddyserver/index.php(109): Kohana_Request->execute()
#3 {main}
2013-01-10 13:00:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/tempstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-10 13:00:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/tempstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/msudhanshu/test/meddyserver/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-10 13:00:49 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/ ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2013-01-10 13:00:49 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/ ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /home/msudhanshu/test/meddyserver/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/msudhanshu/test/meddyserver/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /home/msudhanshu/test/meddyserver/index.php(109): Kohana_Request->execute()
#3 {main}
2013-01-10 13:00:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/tempstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-10 13:00:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/tempstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/msudhanshu/test/meddyserver/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-10 13:00:50 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/ ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2013-01-10 13:00:50 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/ ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /home/msudhanshu/test/meddyserver/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/msudhanshu/test/meddyserver/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /home/msudhanshu/test/meddyserver/index.php(109): Kohana_Request->execute()
#3 {main}
2013-01-10 13:00:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/tempstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-10 13:00:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/tempstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/msudhanshu/test/meddyserver/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-10 13:00:51 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/ ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2013-01-10 13:00:51 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/ ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /home/msudhanshu/test/meddyserver/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/msudhanshu/test/meddyserver/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /home/msudhanshu/test/meddyserver/index.php(109): Kohana_Request->execute()
#3 {main}
2013-01-10 13:00:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/tempstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-10 13:00:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/tempstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/msudhanshu/test/meddyserver/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-10 13:00:51 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/ ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2013-01-10 13:00:51 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/ ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /home/msudhanshu/test/meddyserver/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/msudhanshu/test/meddyserver/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /home/msudhanshu/test/meddyserver/index.php(109): Kohana_Request->execute()
#3 {main}
2013-01-10 13:00:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/tempstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-10 13:00:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/tempstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/msudhanshu/test/meddyserver/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-10 13:00:52 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/ ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2013-01-10 13:00:52 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/ ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /home/msudhanshu/test/meddyserver/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/msudhanshu/test/meddyserver/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /home/msudhanshu/test/meddyserver/index.php(109): Kohana_Request->execute()
#3 {main}
2013-01-10 13:00:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/tempstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-10 13:00:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/tempstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/msudhanshu/test/meddyserver/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-10 13:00:52 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/ ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2013-01-10 13:00:52 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/ ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /home/msudhanshu/test/meddyserver/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/msudhanshu/test/meddyserver/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /home/msudhanshu/test/meddyserver/index.php(109): Kohana_Request->execute()
#3 {main}
2013-01-10 13:00:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/tempstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-10 13:00:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/tempstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/msudhanshu/test/meddyserver/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-10 13:00:52 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/ ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2013-01-10 13:00:52 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/ ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /home/msudhanshu/test/meddyserver/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/msudhanshu/test/meddyserver/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /home/msudhanshu/test/meddyserver/index.php(109): Kohana_Request->execute()
#3 {main}
2013-01-10 13:01:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/tempstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-10 13:01:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/tempstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/msudhanshu/test/meddyserver/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-10 13:01:10 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/ ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2013-01-10 13:01:10 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/ ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /home/msudhanshu/test/meddyserver/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/msudhanshu/test/meddyserver/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /home/msudhanshu/test/meddyserver/index.php(109): Kohana_Request->execute()
#3 {main}
2013-01-10 13:04:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/tempstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-10 13:04:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/tempstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/msudhanshu/test/meddyserver/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-10 13:04:06 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/ ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2013-01-10 13:04:06 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/ ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /home/msudhanshu/test/meddyserver/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/msudhanshu/test/meddyserver/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /home/msudhanshu/test/meddyserver/index.php(109): Kohana_Request->execute()
#3 {main}
2013-01-10 13:04:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/tempstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-10 13:04:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/tempstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/msudhanshu/test/meddyserver/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-10 13:04:07 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/ ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2013-01-10 13:04:07 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/ ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /home/msudhanshu/test/meddyserver/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/msudhanshu/test/meddyserver/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /home/msudhanshu/test/meddyserver/index.php(109): Kohana_Request->execute()
#3 {main}
2013-01-10 13:04:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/tempstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-10 13:04:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/tempstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/msudhanshu/test/meddyserver/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-10 13:04:07 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/ ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2013-01-10 13:04:07 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/ ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /home/msudhanshu/test/meddyserver/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/msudhanshu/test/meddyserver/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /home/msudhanshu/test/meddyserver/index.php(109): Kohana_Request->execute()
#3 {main}
2013-01-10 13:04:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/tempstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-10 13:04:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/tempstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/msudhanshu/test/meddyserver/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-10 13:04:07 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/ ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2013-01-10 13:04:07 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/ ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /home/msudhanshu/test/meddyserver/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/msudhanshu/test/meddyserver/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /home/msudhanshu/test/meddyserver/index.php(109): Kohana_Request->execute()
#3 {main}
2013-01-10 13:04:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/tempstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-10 13:04:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/tempstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/msudhanshu/test/meddyserver/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-10 13:04:08 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/ ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2013-01-10 13:04:08 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/ ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /home/msudhanshu/test/meddyserver/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/msudhanshu/test/meddyserver/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /home/msudhanshu/test/meddyserver/index.php(109): Kohana_Request->execute()
#3 {main}
2013-01-10 13:04:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/tempstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-10 13:04:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/tempstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/msudhanshu/test/meddyserver/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-10 13:04:08 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/ ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2013-01-10 13:04:08 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/ ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /home/msudhanshu/test/meddyserver/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/msudhanshu/test/meddyserver/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /home/msudhanshu/test/meddyserver/index.php(109): Kohana_Request->execute()
#3 {main}
2013-01-10 13:04:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/tempstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-10 13:04:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/tempstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/msudhanshu/test/meddyserver/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-10 13:04:09 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/ ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2013-01-10 13:04:09 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/ ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /home/msudhanshu/test/meddyserver/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/msudhanshu/test/meddyserver/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /home/msudhanshu/test/meddyserver/index.php(109): Kohana_Request->execute()
#3 {main}
2013-01-10 13:04:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/tempstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-10 13:04:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/tempstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/msudhanshu/test/meddyserver/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-10 13:04:52 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/ ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2013-01-10 13:04:52 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/ ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /home/msudhanshu/test/meddyserver/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/msudhanshu/test/meddyserver/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /home/msudhanshu/test/meddyserver/index.php(109): Kohana_Request->execute()
#3 {main}
2013-01-10 13:04:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/tempstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-10 13:04:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/tempstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/msudhanshu/test/meddyserver/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-10 13:04:53 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/ ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2013-01-10 13:04:53 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/ ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /home/msudhanshu/test/meddyserver/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/msudhanshu/test/meddyserver/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /home/msudhanshu/test/meddyserver/index.php(109): Kohana_Request->execute()
#3 {main}
2013-01-10 13:04:53 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/ ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2013-01-10 13:04:53 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/ ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /home/msudhanshu/test/meddyserver/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/msudhanshu/test/meddyserver/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /home/msudhanshu/test/meddyserver/index.php(109): Kohana_Request->execute()
#3 {main}
2013-01-10 13:04:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/tempstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-10 13:04:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/tempstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/msudhanshu/test/meddyserver/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-10 13:04:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/tempstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-10 13:04:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/tempstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/msudhanshu/test/meddyserver/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-10 13:04:54 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/ ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2013-01-10 13:04:54 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/ ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /home/msudhanshu/test/meddyserver/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/msudhanshu/test/meddyserver/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /home/msudhanshu/test/meddyserver/index.php(109): Kohana_Request->execute()
#3 {main}
2013-01-10 13:04:54 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/ ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2013-01-10 13:04:54 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/ ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /home/msudhanshu/test/meddyserver/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/msudhanshu/test/meddyserver/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /home/msudhanshu/test/meddyserver/index.php(109): Kohana_Request->execute()
#3 {main}
2013-01-10 13:04:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/tempstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-10 13:04:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/tempstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/msudhanshu/test/meddyserver/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-10 13:04:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/tempstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-10 13:04:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/tempstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/msudhanshu/test/meddyserver/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-10 13:04:54 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/ ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2013-01-10 13:04:54 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/ ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /home/msudhanshu/test/meddyserver/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/msudhanshu/test/meddyserver/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /home/msudhanshu/test/meddyserver/index.php(109): Kohana_Request->execute()
#3 {main}
2013-01-10 13:05:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/tempstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-10 13:05:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/tempstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/msudhanshu/test/meddyserver/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-10 13:05:16 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/ ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2013-01-10 13:05:16 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/ ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /home/msudhanshu/test/meddyserver/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/msudhanshu/test/meddyserver/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /home/msudhanshu/test/meddyserver/index.php(109): Kohana_Request->execute()
#3 {main}
2013-01-10 13:05:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/tempstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-10 13:05:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/tempstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/msudhanshu/test/meddyserver/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-10 13:05:17 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/ ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2013-01-10 13:05:17 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/ ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /home/msudhanshu/test/meddyserver/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/msudhanshu/test/meddyserver/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /home/msudhanshu/test/meddyserver/index.php(109): Kohana_Request->execute()
#3 {main}
2013-01-10 13:05:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/tempstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-10 13:05:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/tempstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/msudhanshu/test/meddyserver/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-10 13:05:17 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/ ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2013-01-10 13:05:17 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/ ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /home/msudhanshu/test/meddyserver/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/msudhanshu/test/meddyserver/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /home/msudhanshu/test/meddyserver/index.php(109): Kohana_Request->execute()
#3 {main}
2013-01-10 13:05:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/tempstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-10 13:05:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/tempstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/msudhanshu/test/meddyserver/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-10 13:05:18 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/ ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2013-01-10 13:05:18 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/ ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /home/msudhanshu/test/meddyserver/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/msudhanshu/test/meddyserver/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /home/msudhanshu/test/meddyserver/index.php(109): Kohana_Request->execute()
#3 {main}
2013-01-10 13:07:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/tempstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-10 13:07:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/tempstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/msudhanshu/test/meddyserver/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-10 13:07:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/gyanikaunserver/meddyserver/assets/images/go.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-10 13:07:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/gyanikaunserver/meddyserver/assets/images/go.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/msudhanshu/test/meddyserver/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-10 13:07:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/gyanikaunserver/meddyserver/assets/images/go.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-10 13:07:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/gyanikaunserver/meddyserver/assets/images/go.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/msudhanshu/test/meddyserver/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-10 13:07:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/tempstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-10 13:07:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/tempstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/msudhanshu/test/meddyserver/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-10 13:07:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/gyanikaunserver/meddyserver/assets/images/go.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-10 13:07:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/gyanikaunserver/meddyserver/assets/images/go.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/msudhanshu/test/meddyserver/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-10 13:07:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/tempstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-10 13:07:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/tempstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/msudhanshu/test/meddyserver/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-10 13:07:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/gyanikaunserver/meddyserver/assets/images/go.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-10 13:07:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/tempstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-10 13:07:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/gyanikaunserver/meddyserver/assets/images/go.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/msudhanshu/test/meddyserver/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-10 13:07:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/tempstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/msudhanshu/test/meddyserver/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-10 13:07:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/tempstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-10 13:07:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/tempstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/msudhanshu/test/meddyserver/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-10 13:07:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/gyanikaunserver/meddyserver/assets/images/go.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-10 13:07:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/gyanikaunserver/meddyserver/assets/images/go.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/msudhanshu/test/meddyserver/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-10 13:07:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/tempstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-10 13:07:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/tempstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/msudhanshu/test/meddyserver/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-10 13:07:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/gyanikaunserver/meddyserver/assets/images/go.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-10 13:07:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/gyanikaunserver/meddyserver/assets/images/go.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/msudhanshu/test/meddyserver/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-10 13:09:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/tempstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-10 13:09:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/tempstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/msudhanshu/test/meddyserver/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-10 13:09:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/tempstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-10 13:09:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/tempstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/msudhanshu/test/meddyserver/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-10 13:09:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/tempstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-10 13:09:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/tempstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/msudhanshu/test/meddyserver/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-10 13:09:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/tempstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-10 13:09:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/tempstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/msudhanshu/test/meddyserver/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-10 13:09:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/tempstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-10 13:09:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/tempstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/msudhanshu/test/meddyserver/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-10 13:09:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/tempstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-10 13:09:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/tempstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/msudhanshu/test/meddyserver/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-10 13:09:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/tempstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-10 13:09:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/tempstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/msudhanshu/test/meddyserver/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-10 13:11:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/tempstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-10 13:11:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/tempstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/msudhanshu/test/meddyserver/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-10 13:11:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/tempstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-10 13:11:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/tempstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/msudhanshu/test/meddyserver/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-10 13:11:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/tempstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-10 13:11:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/tempstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/msudhanshu/test/meddyserver/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-10 13:11:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/tempstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-10 13:11:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/tempstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/msudhanshu/test/meddyserver/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-10 13:11:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/tempstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-10 13:11:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/tempstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/msudhanshu/test/meddyserver/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-10 13:11:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/tempstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-10 13:11:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/tempstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/msudhanshu/test/meddyserver/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-10 13:11:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/tempstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-10 13:11:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/tempstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/msudhanshu/test/meddyserver/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-10 13:11:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/tempstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-10 13:11:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/tempstyle.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/msudhanshu/test/meddyserver/index.php(109): Kohana_Request->execute()
#1 {main}