<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-09-08 06:16:22 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 3 ~ MODPATH\simplex\classes\Kohana\Simplex.php [ 379 ] in D:\OpenServer\domains\mm.ru\www\modules\simplex\classes\Kohana\Simplex.php:379
2013-09-08 06:16:22 --- DEBUG: #0 D:\OpenServer\domains\mm.ru\www\modules\simplex\classes\Kohana\Simplex.php(379): Kohana_Core::error_handler(8, 'Undefined offse...', 'D:\OpenServer\d...', 379, Array)
#1 D:\OpenServer\domains\mm.ru\www\modules\simplex\classes\Kohana\Simplex.php(129): Kohana_Simplex->build_equation()
#2 D:\OpenServer\domains\mm.ru\www\application\classes\Controller\SelectMethod.php(23): Kohana_Simplex->view_enter()
#3 D:\OpenServer\domains\mm.ru\www\system\classes\Kohana\Controller.php(84): Controller_SelectMethod->action_decision()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\OpenServer\domains\mm.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_SelectMethod))
#6 D:\OpenServer\domains\mm.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\OpenServer\domains\mm.ru\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 D:\OpenServer\domains\mm.ru\www\index.php(118): Kohana_Request->execute()
#9 {main} in D:\OpenServer\domains\mm.ru\www\modules\simplex\classes\Kohana\Simplex.php:379
2013-09-08 06:16:24 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 3 ~ MODPATH\simplex\classes\Kohana\Simplex.php [ 379 ] in D:\OpenServer\domains\mm.ru\www\modules\simplex\classes\Kohana\Simplex.php:379
2013-09-08 06:16:24 --- DEBUG: #0 D:\OpenServer\domains\mm.ru\www\modules\simplex\classes\Kohana\Simplex.php(379): Kohana_Core::error_handler(8, 'Undefined offse...', 'D:\OpenServer\d...', 379, Array)
#1 D:\OpenServer\domains\mm.ru\www\modules\simplex\classes\Kohana\Simplex.php(129): Kohana_Simplex->build_equation()
#2 D:\OpenServer\domains\mm.ru\www\application\classes\Controller\SelectMethod.php(23): Kohana_Simplex->view_enter()
#3 D:\OpenServer\domains\mm.ru\www\system\classes\Kohana\Controller.php(84): Controller_SelectMethod->action_decision()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\OpenServer\domains\mm.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_SelectMethod))
#6 D:\OpenServer\domains\mm.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\OpenServer\domains\mm.ru\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 D:\OpenServer\domains\mm.ru\www\index.php(118): Kohana_Request->execute()
#9 {main} in D:\OpenServer\domains\mm.ru\www\modules\simplex\classes\Kohana\Simplex.php:379
2013-09-08 06:17:31 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 3 ~ MODPATH\simplex\classes\Kohana\Simplex.php [ 379 ] in D:\OpenServer\domains\mm.ru\www\modules\simplex\classes\Kohana\Simplex.php:379
2013-09-08 06:17:31 --- DEBUG: #0 D:\OpenServer\domains\mm.ru\www\modules\simplex\classes\Kohana\Simplex.php(379): Kohana_Core::error_handler(8, 'Undefined offse...', 'D:\OpenServer\d...', 379, Array)
#1 D:\OpenServer\domains\mm.ru\www\modules\simplex\classes\Kohana\Simplex.php(129): Kohana_Simplex->build_equation()
#2 D:\OpenServer\domains\mm.ru\www\application\classes\Controller\SelectMethod.php(23): Kohana_Simplex->view_enter()
#3 D:\OpenServer\domains\mm.ru\www\system\classes\Kohana\Controller.php(84): Controller_SelectMethod->action_decision()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\OpenServer\domains\mm.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_SelectMethod))
#6 D:\OpenServer\domains\mm.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\OpenServer\domains\mm.ru\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 D:\OpenServer\domains\mm.ru\www\index.php(118): Kohana_Request->execute()
#9 {main} in D:\OpenServer\domains\mm.ru\www\modules\simplex\classes\Kohana\Simplex.php:379
2013-09-08 09:42:14 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: step ~ APPPATH\views\intermediate_results\create_table.php [ 2 ] in D:\OpenServer\domains\mm.ru\www\application\views\intermediate_results\create_table.php:2
2013-09-08 09:42:14 --- DEBUG: #0 D:\OpenServer\domains\mm.ru\www\application\views\intermediate_results\create_table.php(2): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\OpenServer\d...', 2, Array)
#1 D:\OpenServer\domains\mm.ru\www\system\classes\Kohana\View.php(61): include('D:\OpenServer\d...')
#2 D:\OpenServer\domains\mm.ru\www\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\OpenServer\d...', Array)
#3 D:\OpenServer\domains\mm.ru\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 D:\OpenServer\domains\mm.ru\www\modules\simplex\classes\Kohana\Simplex.php(297): Kohana_View->__toString()
#5 D:\OpenServer\domains\mm.ru\www\modules\simplex\classes\Kohana\Simplex.php(270): Kohana_Simplex->dual_simplex()
#6 D:\OpenServer\domains\mm.ru\www\application\classes\Controller\SelectMethod.php(26): Kohana_Simplex->decision()
#7 D:\OpenServer\domains\mm.ru\www\system\classes\Kohana\Controller.php(84): Controller_SelectMethod->action_decision()
#8 [internal function]: Kohana_Controller->execute()
#9 D:\OpenServer\domains\mm.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_SelectMethod))
#10 D:\OpenServer\domains\mm.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 D:\OpenServer\domains\mm.ru\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 D:\OpenServer\domains\mm.ru\www\index.php(118): Kohana_Request->execute()
#13 {main} in D:\OpenServer\domains\mm.ru\www\application\views\intermediate_results\create_table.php:2
2013-09-08 09:46:35 --- CRITICAL: ErrorException [ 1 ]: Maximum execution time of 60 seconds exceeded ~ APPPATH\views\intermediate_results\create_table.php [ 2 ] in file:line
2013-09-08 09:46:35 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-09-08 09:46:54 --- CRITICAL: ErrorException [ 1 ]: Maximum execution time of 60 seconds exceeded ~ MODPATH\simplex\classes\Kohana\Simplex.php [ 296 ] in file:line
2013-09-08 09:46:54 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-09-08 09:46:55 --- CRITICAL: ErrorException [ 1 ]: Maximum execution time of 60 seconds exceeded ~ MODPATH\simplex\classes\Kohana\Simplex.php [ 296 ] in file:line
2013-09-08 09:46:55 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-09-08 09:46:55 --- CRITICAL: ErrorException [ 1 ]: Maximum execution time of 60 seconds exceeded ~ APPPATH\views\intermediate_results\create_table.php [ 2 ] in file:line
2013-09-08 09:46:55 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-09-08 09:47:20 --- CRITICAL: ErrorException [ 1 ]: Maximum execution time of 60 seconds exceeded ~ MODPATH\simplex\classes\Kohana\Simplex.php [ 296 ] in file:line
2013-09-08 09:47:20 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-09-08 10:18:07 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: col ~ MODPATH\simplex\classes\Kohana\Simplex.php [ 279 ] in D:\OpenServer\domains\mm.ru\www\modules\simplex\classes\Kohana\Simplex.php:279
2013-09-08 10:18:07 --- DEBUG: #0 D:\OpenServer\domains\mm.ru\www\modules\simplex\classes\Kohana\Simplex.php(279): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\OpenServer\d...', 279, Array)
#1 D:\OpenServer\domains\mm.ru\www\application\classes\Controller\SelectMethod.php(26): Kohana_Simplex->decision()
#2 D:\OpenServer\domains\mm.ru\www\system\classes\Kohana\Controller.php(84): Controller_SelectMethod->action_decision()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\OpenServer\domains\mm.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_SelectMethod))
#5 D:\OpenServer\domains\mm.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\OpenServer\domains\mm.ru\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 D:\OpenServer\domains\mm.ru\www\index.php(118): Kohana_Request->execute()
#8 {main} in D:\OpenServer\domains\mm.ru\www\modules\simplex\classes\Kohana\Simplex.php:279
2013-09-08 10:18:08 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: col ~ MODPATH\simplex\classes\Kohana\Simplex.php [ 279 ] in D:\OpenServer\domains\mm.ru\www\modules\simplex\classes\Kohana\Simplex.php:279
2013-09-08 10:18:08 --- DEBUG: #0 D:\OpenServer\domains\mm.ru\www\modules\simplex\classes\Kohana\Simplex.php(279): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\OpenServer\d...', 279, Array)
#1 D:\OpenServer\domains\mm.ru\www\application\classes\Controller\SelectMethod.php(26): Kohana_Simplex->decision()
#2 D:\OpenServer\domains\mm.ru\www\system\classes\Kohana\Controller.php(84): Controller_SelectMethod->action_decision()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\OpenServer\domains\mm.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_SelectMethod))
#5 D:\OpenServer\domains\mm.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\OpenServer\domains\mm.ru\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 D:\OpenServer\domains\mm.ru\www\index.php(118): Kohana_Request->execute()
#8 {main} in D:\OpenServer\domains\mm.ru\www\modules\simplex\classes\Kohana\Simplex.php:279
2013-09-08 10:21:25 --- CRITICAL: ErrorException [ 1 ]: Maximum execution time of 60 seconds exceeded ~ MODPATH\simplex\classes\Kohana\Simplex.php [ 279 ] in file:line
2013-09-08 10:21:25 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-09-08 12:24:57 --- CRITICAL: ErrorException [ 1 ]: Maximum execution time of 60 seconds exceeded ~ APPPATH\views\intermediate_results\create_table.php [ 2 ] in file:line
2013-09-08 12:24:57 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-09-08 12:24:58 --- CRITICAL: ErrorException [ 1 ]: Maximum execution time of 60 seconds exceeded ~ APPPATH\views\intermediate_results\create_table.php [ 2 ] in file:line
2013-09-08 12:24:58 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-09-08 12:25:00 --- CRITICAL: ErrorException [ 1 ]: Maximum execution time of 60 seconds exceeded ~ MODPATH\simplex\classes\Kohana\Simplex.php [ 284 ] in file:line
2013-09-08 12:25:00 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-09-08 12:25:05 --- CRITICAL: ErrorException [ 1 ]: Maximum execution time of 60 seconds exceeded ~ MODPATH\simplex\classes\Kohana\Simplex.php [ 284 ] in file:line
2013-09-08 12:25:05 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-09-08 12:25:05 --- CRITICAL: ErrorException [ 1 ]: Maximum execution time of 60 seconds exceeded ~ APPPATH\views\intermediate_results\create_table.php [ 2 ] in file:line
2013-09-08 12:25:05 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-09-08 12:25:05 --- CRITICAL: ErrorException [ 1 ]: Maximum execution time of 60 seconds exceeded ~ MODPATH\simplex\classes\Kohana\Simplex.php [ 284 ] in file:line
2013-09-08 12:25:05 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-09-08 12:32:58 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '    ', expecting endswitch (T_ENDSWITCH) or case (T_CASE) or default (T_DEFAULT) ~ APPPATH\views\methods\simplex.php [ 7 ] in file:line
2013-09-08 12:32:58 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-09-08 12:32:59 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '    ', expecting endswitch (T_ENDSWITCH) or case (T_CASE) or default (T_DEFAULT) ~ APPPATH\views\methods\simplex.php [ 7 ] in file:line
2013-09-08 12:32:59 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-09-08 12:32:59 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '    ', expecting endswitch (T_ENDSWITCH) or case (T_CASE) or default (T_DEFAULT) ~ APPPATH\views\methods\simplex.php [ 7 ] in file:line
2013-09-08 12:32:59 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-09-08 12:33:00 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '    ', expecting endswitch (T_ENDSWITCH) or case (T_CASE) or default (T_DEFAULT) ~ APPPATH\views\methods\simplex.php [ 7 ] in file:line
2013-09-08 12:33:00 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-09-08 12:33:34 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '    ', expecting endswitch (T_ENDSWITCH) or case (T_CASE) or default (T_DEFAULT) ~ APPPATH\views\methods\simplex.php [ 7 ] in file:line
2013-09-08 12:33:34 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-09-08 12:34:53 --- CRITICAL: ErrorException [ 1 ]: Maximum execution time of 60 seconds exceeded ~ MODPATH\simplex\classes\Kohana\Simplex.php [ 290 ] in file:line
2013-09-08 12:34:53 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-09-08 12:35:19 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '    ', expecting endswitch (T_ENDSWITCH) or case (T_CASE) or default (T_DEFAULT) ~ APPPATH\views\methods\simplex.php [ 7 ] in file:line
2013-09-08 12:35:19 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-09-08 12:35:20 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '    ', expecting endswitch (T_ENDSWITCH) or case (T_CASE) or default (T_DEFAULT) ~ APPPATH\views\methods\simplex.php [ 7 ] in file:line
2013-09-08 12:35:20 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-09-08 12:35:20 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '    ', expecting endswitch (T_ENDSWITCH) or case (T_CASE) or default (T_DEFAULT) ~ APPPATH\views\methods\simplex.php [ 7 ] in file:line
2013-09-08 12:35:20 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-09-08 12:35:20 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '    ', expecting endswitch (T_ENDSWITCH) or case (T_CASE) or default (T_DEFAULT) ~ APPPATH\views\methods\simplex.php [ 7 ] in file:line
2013-09-08 12:35:20 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-09-08 12:35:29 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '    ', expecting endswitch (T_ENDSWITCH) or case (T_CASE) or default (T_DEFAULT) ~ APPPATH\views\methods\simplex.php [ 7 ] in file:line
2013-09-08 12:35:29 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-09-08 12:35:35 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '    ', expecting endswitch (T_ENDSWITCH) or case (T_CASE) or default (T_DEFAULT) ~ APPPATH\views\methods\simplex.php [ 7 ] in file:line
2013-09-08 12:35:35 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-09-08 12:35:36 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '    ', expecting endswitch (T_ENDSWITCH) or case (T_CASE) or default (T_DEFAULT) ~ APPPATH\views\methods\simplex.php [ 7 ] in file:line
2013-09-08 12:35:36 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-09-08 12:35:36 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '    ', expecting endswitch (T_ENDSWITCH) or case (T_CASE) or default (T_DEFAULT) ~ APPPATH\views\methods\simplex.php [ 7 ] in file:line
2013-09-08 12:35:36 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-09-08 12:35:36 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '    ', expecting endswitch (T_ENDSWITCH) or case (T_CASE) or default (T_DEFAULT) ~ APPPATH\views\methods\simplex.php [ 7 ] in file:line
2013-09-08 12:35:36 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-09-08 12:35:52 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '    ', expecting endswitch (T_ENDSWITCH) or case (T_CASE) or default (T_DEFAULT) ~ APPPATH\views\methods\simplex.php [ 7 ] in file:line
2013-09-08 12:35:52 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-09-08 12:35:52 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '    ', expecting endswitch (T_ENDSWITCH) or case (T_CASE) or default (T_DEFAULT) ~ APPPATH\views\methods\simplex.php [ 7 ] in file:line
2013-09-08 12:35:52 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-09-08 12:35:52 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '    ', expecting endswitch (T_ENDSWITCH) or case (T_CASE) or default (T_DEFAULT) ~ APPPATH\views\methods\simplex.php [ 7 ] in file:line
2013-09-08 12:35:52 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-09-08 12:37:04 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '    ', expecting endswitch (T_ENDSWITCH) or case (T_CASE) or default (T_DEFAULT) ~ APPPATH\views\methods\simplex.php [ 7 ] in file:line
2013-09-08 12:37:04 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-09-08 12:37:05 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '    ', expecting endswitch (T_ENDSWITCH) or case (T_CASE) or default (T_DEFAULT) ~ APPPATH\views\methods\simplex.php [ 7 ] in file:line
2013-09-08 12:37:05 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-09-08 12:37:05 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '    ', expecting endswitch (T_ENDSWITCH) or case (T_CASE) or default (T_DEFAULT) ~ APPPATH\views\methods\simplex.php [ 7 ] in file:line
2013-09-08 12:37:05 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-09-08 12:37:56 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '    ', expecting case (T_CASE) or default (T_DEFAULT) or '}' ~ APPPATH\views\methods\simplex.php [ 7 ] in file:line
2013-09-08 12:37:56 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-09-08 12:37:57 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '    ', expecting case (T_CASE) or default (T_DEFAULT) or '}' ~ APPPATH\views\methods\simplex.php [ 7 ] in file:line
2013-09-08 12:37:57 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-09-08 12:37:59 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '    ', expecting case (T_CASE) or default (T_DEFAULT) or '}' ~ APPPATH\views\methods\simplex.php [ 7 ] in file:line
2013-09-08 12:37:59 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-09-08 12:37:59 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '    ', expecting case (T_CASE) or default (T_DEFAULT) or '}' ~ APPPATH\views\methods\simplex.php [ 7 ] in file:line
2013-09-08 12:37:59 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-09-08 12:37:59 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '    ', expecting case (T_CASE) or default (T_DEFAULT) or '}' ~ APPPATH\views\methods\simplex.php [ 7 ] in file:line
2013-09-08 12:37:59 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-09-08 12:38:10 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH\views\methods\simplex.php [ 11 ] in file:line
2013-09-08 12:38:10 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-09-08 12:38:10 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH\views\methods\simplex.php [ 11 ] in file:line
2013-09-08 12:38:10 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-09-08 12:38:11 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH\views\methods\simplex.php [ 11 ] in file:line
2013-09-08 12:38:11 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-09-08 12:38:11 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH\views\methods\simplex.php [ 11 ] in file:line
2013-09-08 12:38:11 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-09-08 12:40:49 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '    ', expecting endswitch (T_ENDSWITCH) or case (T_CASE) or default (T_DEFAULT) ~ APPPATH\views\methods\simplex.php [ 8 ] in file:line
2013-09-08 12:40:49 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-09-08 12:40:51 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '    ', expecting endswitch (T_ENDSWITCH) or case (T_CASE) or default (T_DEFAULT) ~ APPPATH\views\methods\simplex.php [ 8 ] in file:line
2013-09-08 12:40:51 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-09-08 12:40:51 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '    ', expecting endswitch (T_ENDSWITCH) or case (T_CASE) or default (T_DEFAULT) ~ APPPATH\views\methods\simplex.php [ 8 ] in file:line
2013-09-08 12:40:51 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-09-08 12:40:51 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '    ', expecting endswitch (T_ENDSWITCH) or case (T_CASE) or default (T_DEFAULT) ~ APPPATH\views\methods\simplex.php [ 8 ] in file:line
2013-09-08 12:40:51 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-09-08 12:40:51 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '    ', expecting endswitch (T_ENDSWITCH) or case (T_CASE) or default (T_DEFAULT) ~ APPPATH\views\methods\simplex.php [ 8 ] in file:line
2013-09-08 12:40:51 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-09-08 12:40:51 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '    ', expecting endswitch (T_ENDSWITCH) or case (T_CASE) or default (T_DEFAULT) ~ APPPATH\views\methods\simplex.php [ 8 ] in file:line
2013-09-08 12:40:51 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-09-08 12:40:52 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '    ', expecting endswitch (T_ENDSWITCH) or case (T_CASE) or default (T_DEFAULT) ~ APPPATH\views\methods\simplex.php [ 8 ] in file:line
2013-09-08 12:40:52 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-09-08 12:40:52 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '    ', expecting endswitch (T_ENDSWITCH) or case (T_CASE) or default (T_DEFAULT) ~ APPPATH\views\methods\simplex.php [ 8 ] in file:line
2013-09-08 12:40:52 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-09-08 12:40:52 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '    ', expecting endswitch (T_ENDSWITCH) or case (T_CASE) or default (T_DEFAULT) ~ APPPATH\views\methods\simplex.php [ 8 ] in file:line
2013-09-08 12:40:52 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-09-08 12:41:03 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '    ', expecting endswitch (T_ENDSWITCH) or case (T_CASE) or default (T_DEFAULT) ~ APPPATH\views\methods\simplex.php [ 8 ] in file:line
2013-09-08 12:41:03 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-09-08 12:41:03 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '    ', expecting endswitch (T_ENDSWITCH) or case (T_CASE) or default (T_DEFAULT) ~ APPPATH\views\methods\simplex.php [ 8 ] in file:line
2013-09-08 12:41:03 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-09-08 12:41:03 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '    ', expecting endswitch (T_ENDSWITCH) or case (T_CASE) or default (T_DEFAULT) ~ APPPATH\views\methods\simplex.php [ 8 ] in file:line
2013-09-08 12:41:03 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-09-08 12:41:04 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '    ', expecting endswitch (T_ENDSWITCH) or case (T_CASE) or default (T_DEFAULT) ~ APPPATH\views\methods\simplex.php [ 8 ] in file:line
2013-09-08 12:41:04 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-09-08 12:41:04 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '    ', expecting endswitch (T_ENDSWITCH) or case (T_CASE) or default (T_DEFAULT) ~ APPPATH\views\methods\simplex.php [ 8 ] in file:line
2013-09-08 12:41:04 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-09-08 12:41:04 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '    ', expecting endswitch (T_ENDSWITCH) or case (T_CASE) or default (T_DEFAULT) ~ APPPATH\views\methods\simplex.php [ 8 ] in file:line
2013-09-08 12:41:04 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-09-08 12:41:04 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '    ', expecting endswitch (T_ENDSWITCH) or case (T_CASE) or default (T_DEFAULT) ~ APPPATH\views\methods\simplex.php [ 8 ] in file:line
2013-09-08 12:41:04 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-09-08 12:41:11 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '    ', expecting endswitch (T_ENDSWITCH) or case (T_CASE) or default (T_DEFAULT) ~ APPPATH\views\methods\simplex.php [ 7 ] in file:line
2013-09-08 12:41:11 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-09-08 12:41:12 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '    ', expecting endswitch (T_ENDSWITCH) or case (T_CASE) or default (T_DEFAULT) ~ APPPATH\views\methods\simplex.php [ 7 ] in file:line
2013-09-08 12:41:12 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-09-08 12:41:12 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '    ', expecting endswitch (T_ENDSWITCH) or case (T_CASE) or default (T_DEFAULT) ~ APPPATH\views\methods\simplex.php [ 7 ] in file:line
2013-09-08 12:41:12 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-09-08 12:41:12 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '    ', expecting endswitch (T_ENDSWITCH) or case (T_CASE) or default (T_DEFAULT) ~ APPPATH\views\methods\simplex.php [ 7 ] in file:line
2013-09-08 12:41:12 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-09-08 12:41:19 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '    ', expecting endswitch (T_ENDSWITCH) or case (T_CASE) or default (T_DEFAULT) ~ APPPATH\views\methods\simplex.php [ 7 ] in file:line
2013-09-08 12:41:19 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-09-08 12:41:19 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '    ', expecting endswitch (T_ENDSWITCH) or case (T_CASE) or default (T_DEFAULT) ~ APPPATH\views\methods\simplex.php [ 7 ] in file:line
2013-09-08 12:41:19 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-09-08 12:41:19 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '    ', expecting endswitch (T_ENDSWITCH) or case (T_CASE) or default (T_DEFAULT) ~ APPPATH\views\methods\simplex.php [ 7 ] in file:line
2013-09-08 12:41:19 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-09-08 12:41:20 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '    ', expecting endswitch (T_ENDSWITCH) or case (T_CASE) or default (T_DEFAULT) ~ APPPATH\views\methods\simplex.php [ 7 ] in file:line
2013-09-08 12:41:20 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-09-08 12:41:36 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '    ', expecting endswitch (T_ENDSWITCH) or case (T_CASE) or default (T_DEFAULT) ~ APPPATH\views\methods\simplex.php [ 7 ] in file:line
2013-09-08 12:41:36 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-09-08 12:41:36 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '    ', expecting endswitch (T_ENDSWITCH) or case (T_CASE) or default (T_DEFAULT) ~ APPPATH\views\methods\simplex.php [ 7 ] in file:line
2013-09-08 12:41:36 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-09-08 12:41:36 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '    ', expecting endswitch (T_ENDSWITCH) or case (T_CASE) or default (T_DEFAULT) ~ APPPATH\views\methods\simplex.php [ 7 ] in file:line
2013-09-08 12:41:36 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-09-08 12:41:36 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '    ', expecting endswitch (T_ENDSWITCH) or case (T_CASE) or default (T_DEFAULT) ~ APPPATH\views\methods\simplex.php [ 7 ] in file:line
2013-09-08 12:41:36 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-09-08 14:02:11 --- CRITICAL: ErrorException [ 1 ]: Maximum execution time of 60 seconds exceeded ~ MODPATH\simplex\classes\Kohana\Simplex.php [ 290 ] in file:line
2013-09-08 14:02:11 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-09-08 14:02:12 --- CRITICAL: ErrorException [ 1 ]: Maximum execution time of 60 seconds exceeded ~ SYSPATH\classes\Kohana\Core.php [ 709 ] in file:line
2013-09-08 14:02:12 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-09-08 14:02:13 --- CRITICAL: ErrorException [ 1 ]: Maximum execution time of 60 seconds exceeded ~ MODPATH\simplex\classes\Kohana\Simplex.php [ 290 ] in file:line
2013-09-08 14:02:13 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-09-08 14:02:14 --- CRITICAL: ErrorException [ 1 ]: Maximum execution time of 60 seconds exceeded ~ MODPATH\simplex\classes\Kohana\Simplex.php [ 290 ] in file:line
2013-09-08 14:02:14 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-09-08 14:02:20 --- CRITICAL: ErrorException [ 1 ]: Maximum execution time of 60 seconds exceeded ~ MODPATH\simplex\classes\Kohana\Simplex.php [ 290 ] in file:line
2013-09-08 14:02:20 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-09-08 14:48:42 --- CRITICAL: ErrorException [ 1 ]: Maximum execution time of 60 seconds exceeded ~ MODPATH\simplex\classes\Kohana\Simplex.php [ 290 ] in file:line
2013-09-08 14:48:42 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-09-08 14:49:22 --- CRITICAL: ErrorException [ 1 ]: Maximum execution time of 60 seconds exceeded ~ MODPATH\simplex\classes\Kohana\Simplex.php [ 290 ] in file:line
2013-09-08 14:49:22 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-09-08 15:12:07 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: -1 ~ MODPATH\simplex\classes\Kohana\Simplex.php [ 380 ] in D:\OpenServer\domains\mm.ru\www\modules\simplex\classes\Kohana\Simplex.php:380
2013-09-08 15:12:07 --- DEBUG: #0 D:\OpenServer\domains\mm.ru\www\modules\simplex\classes\Kohana\Simplex.php(380): Kohana_Core::error_handler(8, 'Undefined offse...', 'D:\OpenServer\d...', 380, Array)
#1 D:\OpenServer\domains\mm.ru\www\modules\simplex\classes\Kohana\Simplex.php(322): Kohana_Simplex->conversion(-1, -1)
#2 D:\OpenServer\domains\mm.ru\www\modules\simplex\classes\Kohana\Simplex.php(281): Kohana_Simplex->simplex(3, 2, 1)
#3 D:\OpenServer\domains\mm.ru\www\application\classes\Controller\SelectMethod.php(26): Kohana_Simplex->decision()
#4 D:\OpenServer\domains\mm.ru\www\system\classes\Kohana\Controller.php(84): Controller_SelectMethod->action_decision()
#5 [internal function]: Kohana_Controller->execute()
#6 D:\OpenServer\domains\mm.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_SelectMethod))
#7 D:\OpenServer\domains\mm.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 D:\OpenServer\domains\mm.ru\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 D:\OpenServer\domains\mm.ru\www\index.php(118): Kohana_Request->execute()
#10 {main} in D:\OpenServer\domains\mm.ru\www\modules\simplex\classes\Kohana\Simplex.php:380
2013-09-08 15:12:08 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: -1 ~ MODPATH\simplex\classes\Kohana\Simplex.php [ 380 ] in D:\OpenServer\domains\mm.ru\www\modules\simplex\classes\Kohana\Simplex.php:380
2013-09-08 15:12:08 --- DEBUG: #0 D:\OpenServer\domains\mm.ru\www\modules\simplex\classes\Kohana\Simplex.php(380): Kohana_Core::error_handler(8, 'Undefined offse...', 'D:\OpenServer\d...', 380, Array)
#1 D:\OpenServer\domains\mm.ru\www\modules\simplex\classes\Kohana\Simplex.php(322): Kohana_Simplex->conversion(-1, -1)
#2 D:\OpenServer\domains\mm.ru\www\modules\simplex\classes\Kohana\Simplex.php(281): Kohana_Simplex->simplex(3, 2, 1)
#3 D:\OpenServer\domains\mm.ru\www\application\classes\Controller\SelectMethod.php(26): Kohana_Simplex->decision()
#4 D:\OpenServer\domains\mm.ru\www\system\classes\Kohana\Controller.php(84): Controller_SelectMethod->action_decision()
#5 [internal function]: Kohana_Controller->execute()
#6 D:\OpenServer\domains\mm.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_SelectMethod))
#7 D:\OpenServer\domains\mm.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 D:\OpenServer\domains\mm.ru\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 D:\OpenServer\domains\mm.ru\www\index.php(118): Kohana_Request->execute()
#10 {main} in D:\OpenServer\domains\mm.ru\www\modules\simplex\classes\Kohana\Simplex.php:380
2013-09-08 15:12:08 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: -1 ~ MODPATH\simplex\classes\Kohana\Simplex.php [ 380 ] in D:\OpenServer\domains\mm.ru\www\modules\simplex\classes\Kohana\Simplex.php:380
2013-09-08 15:12:08 --- DEBUG: #0 D:\OpenServer\domains\mm.ru\www\modules\simplex\classes\Kohana\Simplex.php(380): Kohana_Core::error_handler(8, 'Undefined offse...', 'D:\OpenServer\d...', 380, Array)
#1 D:\OpenServer\domains\mm.ru\www\modules\simplex\classes\Kohana\Simplex.php(322): Kohana_Simplex->conversion(-1, -1)
#2 D:\OpenServer\domains\mm.ru\www\modules\simplex\classes\Kohana\Simplex.php(281): Kohana_Simplex->simplex(3, 2, 1)
#3 D:\OpenServer\domains\mm.ru\www\application\classes\Controller\SelectMethod.php(26): Kohana_Simplex->decision()
#4 D:\OpenServer\domains\mm.ru\www\system\classes\Kohana\Controller.php(84): Controller_SelectMethod->action_decision()
#5 [internal function]: Kohana_Controller->execute()
#6 D:\OpenServer\domains\mm.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_SelectMethod))
#7 D:\OpenServer\domains\mm.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 D:\OpenServer\domains\mm.ru\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 D:\OpenServer\domains\mm.ru\www\index.php(118): Kohana_Request->execute()
#10 {main} in D:\OpenServer\domains\mm.ru\www\modules\simplex\classes\Kohana\Simplex.php:380
2013-09-08 15:12:08 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: -1 ~ MODPATH\simplex\classes\Kohana\Simplex.php [ 380 ] in D:\OpenServer\domains\mm.ru\www\modules\simplex\classes\Kohana\Simplex.php:380
2013-09-08 15:12:08 --- DEBUG: #0 D:\OpenServer\domains\mm.ru\www\modules\simplex\classes\Kohana\Simplex.php(380): Kohana_Core::error_handler(8, 'Undefined offse...', 'D:\OpenServer\d...', 380, Array)
#1 D:\OpenServer\domains\mm.ru\www\modules\simplex\classes\Kohana\Simplex.php(322): Kohana_Simplex->conversion(-1, -1)
#2 D:\OpenServer\domains\mm.ru\www\modules\simplex\classes\Kohana\Simplex.php(281): Kohana_Simplex->simplex(3, 2, 1)
#3 D:\OpenServer\domains\mm.ru\www\application\classes\Controller\SelectMethod.php(26): Kohana_Simplex->decision()
#4 D:\OpenServer\domains\mm.ru\www\system\classes\Kohana\Controller.php(84): Controller_SelectMethod->action_decision()
#5 [internal function]: Kohana_Controller->execute()
#6 D:\OpenServer\domains\mm.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_SelectMethod))
#7 D:\OpenServer\domains\mm.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 D:\OpenServer\domains\mm.ru\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 D:\OpenServer\domains\mm.ru\www\index.php(118): Kohana_Request->execute()
#10 {main} in D:\OpenServer\domains\mm.ru\www\modules\simplex\classes\Kohana\Simplex.php:380
2013-09-08 15:15:57 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 3 ~ MODPATH\simplex\classes\Kohana\Simplex.php [ 391 ] in D:\OpenServer\domains\mm.ru\www\modules\simplex\classes\Kohana\Simplex.php:391
2013-09-08 15:15:57 --- DEBUG: #0 D:\OpenServer\domains\mm.ru\www\modules\simplex\classes\Kohana\Simplex.php(391): Kohana_Core::error_handler(8, 'Undefined offse...', 'D:\OpenServer\d...', 391, Array)
#1 D:\OpenServer\domains\mm.ru\www\modules\simplex\classes\Kohana\Simplex.php(332): Kohana_Simplex->conversion(3, 3)
#2 D:\OpenServer\domains\mm.ru\www\modules\simplex\classes\Kohana\Simplex.php(281): Kohana_Simplex->simplex(3, 3, 1)
#3 D:\OpenServer\domains\mm.ru\www\application\classes\Controller\SelectMethod.php(26): Kohana_Simplex->decision()
#4 D:\OpenServer\domains\mm.ru\www\system\classes\Kohana\Controller.php(84): Controller_SelectMethod->action_decision()
#5 [internal function]: Kohana_Controller->execute()
#6 D:\OpenServer\domains\mm.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_SelectMethod))
#7 D:\OpenServer\domains\mm.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 D:\OpenServer\domains\mm.ru\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 D:\OpenServer\domains\mm.ru\www\index.php(118): Kohana_Request->execute()
#10 {main} in D:\OpenServer\domains\mm.ru\www\modules\simplex\classes\Kohana\Simplex.php:391
2013-09-08 15:15:58 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 3 ~ MODPATH\simplex\classes\Kohana\Simplex.php [ 391 ] in D:\OpenServer\domains\mm.ru\www\modules\simplex\classes\Kohana\Simplex.php:391
2013-09-08 15:15:58 --- DEBUG: #0 D:\OpenServer\domains\mm.ru\www\modules\simplex\classes\Kohana\Simplex.php(391): Kohana_Core::error_handler(8, 'Undefined offse...', 'D:\OpenServer\d...', 391, Array)
#1 D:\OpenServer\domains\mm.ru\www\modules\simplex\classes\Kohana\Simplex.php(332): Kohana_Simplex->conversion(3, 3)
#2 D:\OpenServer\domains\mm.ru\www\modules\simplex\classes\Kohana\Simplex.php(281): Kohana_Simplex->simplex(3, 3, 1)
#3 D:\OpenServer\domains\mm.ru\www\application\classes\Controller\SelectMethod.php(26): Kohana_Simplex->decision()
#4 D:\OpenServer\domains\mm.ru\www\system\classes\Kohana\Controller.php(84): Controller_SelectMethod->action_decision()
#5 [internal function]: Kohana_Controller->execute()
#6 D:\OpenServer\domains\mm.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_SelectMethod))
#7 D:\OpenServer\domains\mm.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 D:\OpenServer\domains\mm.ru\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 D:\OpenServer\domains\mm.ru\www\index.php(118): Kohana_Request->execute()
#10 {main} in D:\OpenServer\domains\mm.ru\www\modules\simplex\classes\Kohana\Simplex.php:391
2013-09-08 15:39:28 --- CRITICAL: ErrorException [ 1 ]: Allowed memory size of 134217728 bytes exhausted (tried to allocate 106171169 bytes) ~ MODPATH\simplex\classes\Kohana\Simplex.php [ 292 ] in file:line
2013-09-08 15:39:28 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-09-08 15:39:29 --- CRITICAL: ErrorException [ 1 ]: Allowed memory size of 134217728 bytes exhausted (tried to allocate 106171169 bytes) ~ MODPATH\simplex\classes\Kohana\Simplex.php [ 292 ] in file:line
2013-09-08 15:39:29 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-09-08 15:54:52 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: i ~ MODPATH\simplex\classes\Kohana\Simplex.php [ 325 ] in D:\OpenServer\domains\mm.ru\www\modules\simplex\classes\Kohana\Simplex.php:325
2013-09-08 15:54:52 --- DEBUG: #0 D:\OpenServer\domains\mm.ru\www\modules\simplex\classes\Kohana\Simplex.php(325): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\OpenServer\d...', 325, Array)
#1 D:\OpenServer\domains\mm.ru\www\modules\simplex\classes\Kohana\Simplex.php(281): Kohana_Simplex->simplex(1, 3, 1)
#2 D:\OpenServer\domains\mm.ru\www\application\classes\Controller\SelectMethod.php(26): Kohana_Simplex->decision()
#3 D:\OpenServer\domains\mm.ru\www\system\classes\Kohana\Controller.php(84): Controller_SelectMethod->action_decision()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\OpenServer\domains\mm.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_SelectMethod))
#6 D:\OpenServer\domains\mm.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\OpenServer\domains\mm.ru\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 D:\OpenServer\domains\mm.ru\www\index.php(118): Kohana_Request->execute()
#9 {main} in D:\OpenServer\domains\mm.ru\www\modules\simplex\classes\Kohana\Simplex.php:325
2013-09-08 15:54:54 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: i ~ MODPATH\simplex\classes\Kohana\Simplex.php [ 325 ] in D:\OpenServer\domains\mm.ru\www\modules\simplex\classes\Kohana\Simplex.php:325
2013-09-08 15:54:54 --- DEBUG: #0 D:\OpenServer\domains\mm.ru\www\modules\simplex\classes\Kohana\Simplex.php(325): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\OpenServer\d...', 325, Array)
#1 D:\OpenServer\domains\mm.ru\www\modules\simplex\classes\Kohana\Simplex.php(281): Kohana_Simplex->simplex(1, 3, 1)
#2 D:\OpenServer\domains\mm.ru\www\application\classes\Controller\SelectMethod.php(26): Kohana_Simplex->decision()
#3 D:\OpenServer\domains\mm.ru\www\system\classes\Kohana\Controller.php(84): Controller_SelectMethod->action_decision()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\OpenServer\domains\mm.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_SelectMethod))
#6 D:\OpenServer\domains\mm.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\OpenServer\domains\mm.ru\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 D:\OpenServer\domains\mm.ru\www\index.php(118): Kohana_Request->execute()
#9 {main} in D:\OpenServer\domains\mm.ru\www\modules\simplex\classes\Kohana\Simplex.php:325
2013-09-08 15:54:54 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: i ~ MODPATH\simplex\classes\Kohana\Simplex.php [ 325 ] in D:\OpenServer\domains\mm.ru\www\modules\simplex\classes\Kohana\Simplex.php:325
2013-09-08 15:54:54 --- DEBUG: #0 D:\OpenServer\domains\mm.ru\www\modules\simplex\classes\Kohana\Simplex.php(325): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\OpenServer\d...', 325, Array)
#1 D:\OpenServer\domains\mm.ru\www\modules\simplex\classes\Kohana\Simplex.php(281): Kohana_Simplex->simplex(1, 3, 1)
#2 D:\OpenServer\domains\mm.ru\www\application\classes\Controller\SelectMethod.php(26): Kohana_Simplex->decision()
#3 D:\OpenServer\domains\mm.ru\www\system\classes\Kohana\Controller.php(84): Controller_SelectMethod->action_decision()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\OpenServer\domains\mm.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_SelectMethod))
#6 D:\OpenServer\domains\mm.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\OpenServer\domains\mm.ru\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 D:\OpenServer\domains\mm.ru\www\index.php(118): Kohana_Request->execute()
#9 {main} in D:\OpenServer\domains\mm.ru\www\modules\simplex\classes\Kohana\Simplex.php:325
2013-09-08 15:54:54 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: i ~ MODPATH\simplex\classes\Kohana\Simplex.php [ 325 ] in D:\OpenServer\domains\mm.ru\www\modules\simplex\classes\Kohana\Simplex.php:325
2013-09-08 15:54:54 --- DEBUG: #0 D:\OpenServer\domains\mm.ru\www\modules\simplex\classes\Kohana\Simplex.php(325): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\OpenServer\d...', 325, Array)
#1 D:\OpenServer\domains\mm.ru\www\modules\simplex\classes\Kohana\Simplex.php(281): Kohana_Simplex->simplex(1, 3, 1)
#2 D:\OpenServer\domains\mm.ru\www\application\classes\Controller\SelectMethod.php(26): Kohana_Simplex->decision()
#3 D:\OpenServer\domains\mm.ru\www\system\classes\Kohana\Controller.php(84): Controller_SelectMethod->action_decision()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\OpenServer\domains\mm.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_SelectMethod))
#6 D:\OpenServer\domains\mm.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\OpenServer\domains\mm.ru\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 D:\OpenServer\domains\mm.ru\www\index.php(118): Kohana_Request->execute()
#9 {main} in D:\OpenServer\domains\mm.ru\www\modules\simplex\classes\Kohana\Simplex.php:325
2013-09-08 15:54:54 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: i ~ MODPATH\simplex\classes\Kohana\Simplex.php [ 325 ] in D:\OpenServer\domains\mm.ru\www\modules\simplex\classes\Kohana\Simplex.php:325
2013-09-08 15:54:54 --- DEBUG: #0 D:\OpenServer\domains\mm.ru\www\modules\simplex\classes\Kohana\Simplex.php(325): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\OpenServer\d...', 325, Array)
#1 D:\OpenServer\domains\mm.ru\www\modules\simplex\classes\Kohana\Simplex.php(281): Kohana_Simplex->simplex(1, 3, 1)
#2 D:\OpenServer\domains\mm.ru\www\application\classes\Controller\SelectMethod.php(26): Kohana_Simplex->decision()
#3 D:\OpenServer\domains\mm.ru\www\system\classes\Kohana\Controller.php(84): Controller_SelectMethod->action_decision()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\OpenServer\domains\mm.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_SelectMethod))
#6 D:\OpenServer\domains\mm.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\OpenServer\domains\mm.ru\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 D:\OpenServer\domains\mm.ru\www\index.php(118): Kohana_Request->execute()
#9 {main} in D:\OpenServer\domains\mm.ru\www\modules\simplex\classes\Kohana\Simplex.php:325
2013-09-08 15:54:54 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: i ~ MODPATH\simplex\classes\Kohana\Simplex.php [ 325 ] in D:\OpenServer\domains\mm.ru\www\modules\simplex\classes\Kohana\Simplex.php:325
2013-09-08 15:54:54 --- DEBUG: #0 D:\OpenServer\domains\mm.ru\www\modules\simplex\classes\Kohana\Simplex.php(325): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\OpenServer\d...', 325, Array)
#1 D:\OpenServer\domains\mm.ru\www\modules\simplex\classes\Kohana\Simplex.php(281): Kohana_Simplex->simplex(1, 3, 1)
#2 D:\OpenServer\domains\mm.ru\www\application\classes\Controller\SelectMethod.php(26): Kohana_Simplex->decision()
#3 D:\OpenServer\domains\mm.ru\www\system\classes\Kohana\Controller.php(84): Controller_SelectMethod->action_decision()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\OpenServer\domains\mm.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_SelectMethod))
#6 D:\OpenServer\domains\mm.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\OpenServer\domains\mm.ru\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 D:\OpenServer\domains\mm.ru\www\index.php(118): Kohana_Request->execute()
#9 {main} in D:\OpenServer\domains\mm.ru\www\modules\simplex\classes\Kohana\Simplex.php:325
2013-09-08 16:59:36 --- CRITICAL: ErrorException [ 2048 ]: Only variables should be passed by reference ~ MODPATH\simplex\classes\Kohana\Simplex.php [ 285 ] in D:\OpenServer\domains\mm.ru\www\modules\simplex\classes\Kohana\Simplex.php:285
2013-09-08 16:59:36 --- DEBUG: #0 D:\OpenServer\domains\mm.ru\www\modules\simplex\classes\Kohana\Simplex.php(285): Kohana_Core::error_handler(2048, 'Only variables ...', 'D:\OpenServer\d...', 285, Array)
#1 D:\OpenServer\domains\mm.ru\www\application\classes\Controller\SelectMethod.php(26): Kohana_Simplex->decision()
#2 D:\OpenServer\domains\mm.ru\www\system\classes\Kohana\Controller.php(84): Controller_SelectMethod->action_decision()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\OpenServer\domains\mm.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_SelectMethod))
#5 D:\OpenServer\domains\mm.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\OpenServer\domains\mm.ru\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 D:\OpenServer\domains\mm.ru\www\index.php(118): Kohana_Request->execute()
#8 {main} in D:\OpenServer\domains\mm.ru\www\modules\simplex\classes\Kohana\Simplex.php:285
2013-09-08 16:59:37 --- CRITICAL: ErrorException [ 2048 ]: Only variables should be passed by reference ~ MODPATH\simplex\classes\Kohana\Simplex.php [ 285 ] in D:\OpenServer\domains\mm.ru\www\modules\simplex\classes\Kohana\Simplex.php:285
2013-09-08 16:59:37 --- DEBUG: #0 D:\OpenServer\domains\mm.ru\www\modules\simplex\classes\Kohana\Simplex.php(285): Kohana_Core::error_handler(2048, 'Only variables ...', 'D:\OpenServer\d...', 285, Array)
#1 D:\OpenServer\domains\mm.ru\www\application\classes\Controller\SelectMethod.php(26): Kohana_Simplex->decision()
#2 D:\OpenServer\domains\mm.ru\www\system\classes\Kohana\Controller.php(84): Controller_SelectMethod->action_decision()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\OpenServer\domains\mm.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_SelectMethod))
#5 D:\OpenServer\domains\mm.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\OpenServer\domains\mm.ru\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 D:\OpenServer\domains\mm.ru\www\index.php(118): Kohana_Request->execute()
#8 {main} in D:\OpenServer\domains\mm.ru\www\modules\simplex\classes\Kohana\Simplex.php:285
2013-09-08 16:59:37 --- CRITICAL: ErrorException [ 2048 ]: Only variables should be passed by reference ~ MODPATH\simplex\classes\Kohana\Simplex.php [ 285 ] in D:\OpenServer\domains\mm.ru\www\modules\simplex\classes\Kohana\Simplex.php:285
2013-09-08 16:59:37 --- DEBUG: #0 D:\OpenServer\domains\mm.ru\www\modules\simplex\classes\Kohana\Simplex.php(285): Kohana_Core::error_handler(2048, 'Only variables ...', 'D:\OpenServer\d...', 285, Array)
#1 D:\OpenServer\domains\mm.ru\www\application\classes\Controller\SelectMethod.php(26): Kohana_Simplex->decision()
#2 D:\OpenServer\domains\mm.ru\www\system\classes\Kohana\Controller.php(84): Controller_SelectMethod->action_decision()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\OpenServer\domains\mm.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_SelectMethod))
#5 D:\OpenServer\domains\mm.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\OpenServer\domains\mm.ru\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 D:\OpenServer\domains\mm.ru\www\index.php(118): Kohana_Request->execute()
#8 {main} in D:\OpenServer\domains\mm.ru\www\modules\simplex\classes\Kohana\Simplex.php:285
2013-09-08 16:59:38 --- CRITICAL: ErrorException [ 2048 ]: Only variables should be passed by reference ~ MODPATH\simplex\classes\Kohana\Simplex.php [ 285 ] in D:\OpenServer\domains\mm.ru\www\modules\simplex\classes\Kohana\Simplex.php:285
2013-09-08 16:59:38 --- DEBUG: #0 D:\OpenServer\domains\mm.ru\www\modules\simplex\classes\Kohana\Simplex.php(285): Kohana_Core::error_handler(2048, 'Only variables ...', 'D:\OpenServer\d...', 285, Array)
#1 D:\OpenServer\domains\mm.ru\www\application\classes\Controller\SelectMethod.php(26): Kohana_Simplex->decision()
#2 D:\OpenServer\domains\mm.ru\www\system\classes\Kohana\Controller.php(84): Controller_SelectMethod->action_decision()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\OpenServer\domains\mm.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_SelectMethod))
#5 D:\OpenServer\domains\mm.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\OpenServer\domains\mm.ru\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 D:\OpenServer\domains\mm.ru\www\index.php(118): Kohana_Request->execute()
#8 {main} in D:\OpenServer\domains\mm.ru\www\modules\simplex\classes\Kohana\Simplex.php:285
2013-09-08 16:59:38 --- CRITICAL: ErrorException [ 2048 ]: Only variables should be passed by reference ~ MODPATH\simplex\classes\Kohana\Simplex.php [ 285 ] in D:\OpenServer\domains\mm.ru\www\modules\simplex\classes\Kohana\Simplex.php:285
2013-09-08 16:59:38 --- DEBUG: #0 D:\OpenServer\domains\mm.ru\www\modules\simplex\classes\Kohana\Simplex.php(285): Kohana_Core::error_handler(2048, 'Only variables ...', 'D:\OpenServer\d...', 285, Array)
#1 D:\OpenServer\domains\mm.ru\www\application\classes\Controller\SelectMethod.php(26): Kohana_Simplex->decision()
#2 D:\OpenServer\domains\mm.ru\www\system\classes\Kohana\Controller.php(84): Controller_SelectMethod->action_decision()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\OpenServer\domains\mm.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_SelectMethod))
#5 D:\OpenServer\domains\mm.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\OpenServer\domains\mm.ru\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 D:\OpenServer\domains\mm.ru\www\index.php(118): Kohana_Request->execute()
#8 {main} in D:\OpenServer\domains\mm.ru\www\modules\simplex\classes\Kohana\Simplex.php:285
2013-09-08 16:59:38 --- CRITICAL: ErrorException [ 2048 ]: Only variables should be passed by reference ~ MODPATH\simplex\classes\Kohana\Simplex.php [ 285 ] in D:\OpenServer\domains\mm.ru\www\modules\simplex\classes\Kohana\Simplex.php:285
2013-09-08 16:59:38 --- DEBUG: #0 D:\OpenServer\domains\mm.ru\www\modules\simplex\classes\Kohana\Simplex.php(285): Kohana_Core::error_handler(2048, 'Only variables ...', 'D:\OpenServer\d...', 285, Array)
#1 D:\OpenServer\domains\mm.ru\www\application\classes\Controller\SelectMethod.php(26): Kohana_Simplex->decision()
#2 D:\OpenServer\domains\mm.ru\www\system\classes\Kohana\Controller.php(84): Controller_SelectMethod->action_decision()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\OpenServer\domains\mm.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_SelectMethod))
#5 D:\OpenServer\domains\mm.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\OpenServer\domains\mm.ru\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 D:\OpenServer\domains\mm.ru\www\index.php(118): Kohana_Request->execute()
#8 {main} in D:\OpenServer\domains\mm.ru\www\modules\simplex\classes\Kohana\Simplex.php:285
2013-09-08 16:59:53 --- CRITICAL: ErrorException [ 2048 ]: Only variables should be passed by reference ~ MODPATH\simplex\classes\Kohana\Simplex.php [ 285 ] in D:\OpenServer\domains\mm.ru\www\modules\simplex\classes\Kohana\Simplex.php:285
2013-09-08 16:59:53 --- DEBUG: #0 D:\OpenServer\domains\mm.ru\www\modules\simplex\classes\Kohana\Simplex.php(285): Kohana_Core::error_handler(2048, 'Only variables ...', 'D:\OpenServer\d...', 285, Array)
#1 D:\OpenServer\domains\mm.ru\www\application\classes\Controller\SelectMethod.php(26): Kohana_Simplex->decision()
#2 D:\OpenServer\domains\mm.ru\www\system\classes\Kohana\Controller.php(84): Controller_SelectMethod->action_decision()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\OpenServer\domains\mm.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_SelectMethod))
#5 D:\OpenServer\domains\mm.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\OpenServer\domains\mm.ru\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 D:\OpenServer\domains\mm.ru\www\index.php(118): Kohana_Request->execute()
#8 {main} in D:\OpenServer\domains\mm.ru\www\modules\simplex\classes\Kohana\Simplex.php:285
2013-09-08 17:00:14 --- CRITICAL: ErrorException [ 2048 ]: Only variables should be passed by reference ~ MODPATH\simplex\classes\Kohana\Simplex.php [ 287 ] in D:\OpenServer\domains\mm.ru\www\modules\simplex\classes\Kohana\Simplex.php:287
2013-09-08 17:00:14 --- DEBUG: #0 D:\OpenServer\domains\mm.ru\www\modules\simplex\classes\Kohana\Simplex.php(287): Kohana_Core::error_handler(2048, 'Only variables ...', 'D:\OpenServer\d...', 287, Array)
#1 D:\OpenServer\domains\mm.ru\www\application\classes\Controller\SelectMethod.php(26): Kohana_Simplex->decision()
#2 D:\OpenServer\domains\mm.ru\www\system\classes\Kohana\Controller.php(84): Controller_SelectMethod->action_decision()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\OpenServer\domains\mm.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_SelectMethod))
#5 D:\OpenServer\domains\mm.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\OpenServer\domains\mm.ru\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 D:\OpenServer\domains\mm.ru\www\index.php(118): Kohana_Request->execute()
#8 {main} in D:\OpenServer\domains\mm.ru\www\modules\simplex\classes\Kohana\Simplex.php:287
2013-09-08 17:00:15 --- CRITICAL: ErrorException [ 2048 ]: Only variables should be passed by reference ~ MODPATH\simplex\classes\Kohana\Simplex.php [ 287 ] in D:\OpenServer\domains\mm.ru\www\modules\simplex\classes\Kohana\Simplex.php:287
2013-09-08 17:00:15 --- DEBUG: #0 D:\OpenServer\domains\mm.ru\www\modules\simplex\classes\Kohana\Simplex.php(287): Kohana_Core::error_handler(2048, 'Only variables ...', 'D:\OpenServer\d...', 287, Array)
#1 D:\OpenServer\domains\mm.ru\www\application\classes\Controller\SelectMethod.php(26): Kohana_Simplex->decision()
#2 D:\OpenServer\domains\mm.ru\www\system\classes\Kohana\Controller.php(84): Controller_SelectMethod->action_decision()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\OpenServer\domains\mm.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_SelectMethod))
#5 D:\OpenServer\domains\mm.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\OpenServer\domains\mm.ru\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 D:\OpenServer\domains\mm.ru\www\index.php(118): Kohana_Request->execute()
#8 {main} in D:\OpenServer\domains\mm.ru\www\modules\simplex\classes\Kohana\Simplex.php:287
2013-09-08 17:00:15 --- CRITICAL: ErrorException [ 2048 ]: Only variables should be passed by reference ~ MODPATH\simplex\classes\Kohana\Simplex.php [ 287 ] in D:\OpenServer\domains\mm.ru\www\modules\simplex\classes\Kohana\Simplex.php:287
2013-09-08 17:00:15 --- DEBUG: #0 D:\OpenServer\domains\mm.ru\www\modules\simplex\classes\Kohana\Simplex.php(287): Kohana_Core::error_handler(2048, 'Only variables ...', 'D:\OpenServer\d...', 287, Array)
#1 D:\OpenServer\domains\mm.ru\www\application\classes\Controller\SelectMethod.php(26): Kohana_Simplex->decision()
#2 D:\OpenServer\domains\mm.ru\www\system\classes\Kohana\Controller.php(84): Controller_SelectMethod->action_decision()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\OpenServer\domains\mm.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_SelectMethod))
#5 D:\OpenServer\domains\mm.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\OpenServer\domains\mm.ru\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 D:\OpenServer\domains\mm.ru\www\index.php(118): Kohana_Request->execute()
#8 {main} in D:\OpenServer\domains\mm.ru\www\modules\simplex\classes\Kohana\Simplex.php:287
2013-09-08 17:00:16 --- CRITICAL: ErrorException [ 2048 ]: Only variables should be passed by reference ~ MODPATH\simplex\classes\Kohana\Simplex.php [ 287 ] in D:\OpenServer\domains\mm.ru\www\modules\simplex\classes\Kohana\Simplex.php:287
2013-09-08 17:00:16 --- DEBUG: #0 D:\OpenServer\domains\mm.ru\www\modules\simplex\classes\Kohana\Simplex.php(287): Kohana_Core::error_handler(2048, 'Only variables ...', 'D:\OpenServer\d...', 287, Array)
#1 D:\OpenServer\domains\mm.ru\www\application\classes\Controller\SelectMethod.php(26): Kohana_Simplex->decision()
#2 D:\OpenServer\domains\mm.ru\www\system\classes\Kohana\Controller.php(84): Controller_SelectMethod->action_decision()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\OpenServer\domains\mm.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_SelectMethod))
#5 D:\OpenServer\domains\mm.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\OpenServer\domains\mm.ru\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 D:\OpenServer\domains\mm.ru\www\index.php(118): Kohana_Request->execute()
#8 {main} in D:\OpenServer\domains\mm.ru\www\modules\simplex\classes\Kohana\Simplex.php:287
2013-09-08 17:03:20 --- CRITICAL: ErrorException [ 1 ]: Maximum execution time of 60 seconds exceeded ~ APPPATH\views\intermediate_results\create_table.php [ 2 ] in file:line
2013-09-08 17:03:20 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-09-08 17:03:21 --- CRITICAL: ErrorException [ 1 ]: Maximum execution time of 60 seconds exceeded ~ MODPATH\simplex\classes\Kohana\Simplex.php [ 307 ] in file:line
2013-09-08 17:03:21 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-09-08 17:03:21 --- CRITICAL: ErrorException [ 1 ]: Maximum execution time of 60 seconds exceeded ~ APPPATH\views\intermediate_results\create_table.php [ 2 ] in file:line
2013-09-08 17:03:21 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-09-08 17:03:21 --- CRITICAL: ErrorException [ 1 ]: Maximum execution time of 60 seconds exceeded ~ MODPATH\simplex\classes\Kohana\Simplex.php [ 307 ] in file:line
2013-09-08 17:03:21 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-09-08 17:03:21 --- CRITICAL: ErrorException [ 1 ]: Maximum execution time of 60 seconds exceeded ~ APPPATH\views\intermediate_results\create_table.php [ 2 ] in file:line
2013-09-08 17:03:21 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-09-08 17:03:22 --- CRITICAL: ErrorException [ 1 ]: Maximum execution time of 60 seconds exceeded ~ APPPATH\views\intermediate_results\create_table.php [ 2 ] in file:line
2013-09-08 17:03:22 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-09-08 17:04:20 --- CRITICAL: ErrorException [ 1 ]: Maximum execution time of 60 seconds exceeded ~ MODPATH\simplex\classes\Kohana\Simplex.php [ 305 ] in file:line
2013-09-08 17:04:20 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-09-08 17:04:21 --- CRITICAL: ErrorException [ 1 ]: Maximum execution time of 60 seconds exceeded ~ APPPATH\views\intermediate_results\create_table.php [ 2 ] in file:line
2013-09-08 17:04:21 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-09-08 17:04:21 --- CRITICAL: ErrorException [ 1 ]: Maximum execution time of 60 seconds exceeded ~ APPPATH\views\intermediate_results\create_table.php [ 2 ] in file:line
2013-09-08 17:04:21 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-09-08 17:04:22 --- CRITICAL: ErrorException [ 1 ]: Maximum execution time of 60 seconds exceeded ~ APPPATH\views\intermediate_results\create_table.php [ 2 ] in file:line
2013-09-08 17:04:22 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-09-08 17:04:22 --- CRITICAL: ErrorException [ 1 ]: Maximum execution time of 60 seconds exceeded ~ APPPATH\views\intermediate_results\create_table.php [ 2 ] in file:line
2013-09-08 17:04:22 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-09-08 17:04:22 --- CRITICAL: ErrorException [ 1 ]: Maximum execution time of 60 seconds exceeded ~ MODPATH\simplex\classes\Kohana\Simplex.php [ 305 ] in file:line
2013-09-08 17:04:22 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-09-08 17:05:20 --- CRITICAL: ErrorException [ 1 ]: Maximum execution time of 60 seconds exceeded ~ SYSPATH\classes\Kohana\Profiler.php [ 53 ] in file:line
2013-09-08 17:05:20 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-09-08 17:05:22 --- CRITICAL: ErrorException [ 1 ]: Maximum execution time of 60 seconds exceeded ~ APPPATH\views\intermediate_results\create_table.php [ 2 ] in file:line
2013-09-08 17:05:22 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-09-08 17:05:22 --- CRITICAL: ErrorException [ 1 ]: Maximum execution time of 60 seconds exceeded ~ SYSPATH\classes\Kohana\View.php [ 73 ] in file:line
2013-09-08 17:05:22 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-09-08 17:05:22 --- CRITICAL: ErrorException [ 1 ]: Maximum execution time of 60 seconds exceeded ~ MODPATH\simplex\classes\Kohana\Simplex.php [ 305 ] in file:line
2013-09-08 17:05:22 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-09-08 17:05:22 --- CRITICAL: ErrorException [ 1 ]: Maximum execution time of 60 seconds exceeded ~ APPPATH\views\intermediate_results\create_table.php [ 2 ] in file:line
2013-09-08 17:05:22 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-09-08 17:05:22 --- CRITICAL: ErrorException [ 1 ]: Maximum execution time of 60 seconds exceeded ~ MODPATH\simplex\classes\Kohana\Simplex.php [ 305 ] in file:line
2013-09-08 17:05:22 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-09-08 17:06:20 --- CRITICAL: ErrorException [ 1 ]: Maximum execution time of 60 seconds exceeded ~ APPPATH\views\intermediate_results\create_table.php [ 2 ] in file:line
2013-09-08 17:06:20 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-09-08 17:06:22 --- CRITICAL: ErrorException [ 1 ]: Maximum execution time of 60 seconds exceeded ~ MODPATH\simplex\classes\Kohana\Simplex.php [ 305 ] in file:line
2013-09-08 17:06:22 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-09-08 17:06:22 --- CRITICAL: ErrorException [ 1 ]: Maximum execution time of 60 seconds exceeded ~ MODPATH\simplex\classes\Kohana\Simplex.php [ 305 ] in file:line
2013-09-08 17:06:22 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-09-08 17:06:22 --- CRITICAL: ErrorException [ 1 ]: Maximum execution time of 60 seconds exceeded ~ APPPATH\views\intermediate_results\create_table.php [ 2 ] in file:line
2013-09-08 17:06:22 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-09-08 17:06:22 --- CRITICAL: ErrorException [ 1 ]: Maximum execution time of 60 seconds exceeded ~ APPPATH\views\intermediate_results\create_table.php [ 2 ] in file:line
2013-09-08 17:06:22 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-09-08 17:06:23 --- CRITICAL: ErrorException [ 1 ]: Maximum execution time of 60 seconds exceeded ~ APPPATH\views\intermediate_results\create_table.php [ 2 ] in file:line
2013-09-08 17:06:23 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-09-08 17:07:21 --- CRITICAL: ErrorException [ 1 ]: Maximum execution time of 60 seconds exceeded ~ MODPATH\simplex\classes\Kohana\Simplex.php [ 305 ] in file:line
2013-09-08 17:07:21 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-09-08 17:07:22 --- CRITICAL: ErrorException [ 1 ]: Maximum execution time of 60 seconds exceeded ~ APPPATH\views\intermediate_results\create_table.php [ 2 ] in file:line
2013-09-08 17:07:22 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-09-08 17:07:22 --- CRITICAL: ErrorException [ 1 ]: Maximum execution time of 60 seconds exceeded ~ MODPATH\simplex\classes\Kohana\Simplex.php [ 305 ] in file:line
2013-09-08 17:07:22 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-09-08 17:07:23 --- CRITICAL: ErrorException [ 1 ]: Maximum execution time of 60 seconds exceeded ~ APPPATH\views\intermediate_results\create_table.php [ 2 ] in file:line
2013-09-08 17:07:23 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-09-08 17:07:23 --- CRITICAL: ErrorException [ 1 ]: Maximum execution time of 60 seconds exceeded ~ MODPATH\simplex\classes\Kohana\Simplex.php [ 305 ] in file:line
2013-09-08 17:07:23 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-09-08 17:07:23 --- CRITICAL: ErrorException [ 1 ]: Maximum execution time of 60 seconds exceeded ~ APPPATH\views\intermediate_results\create_table.php [ 2 ] in file:line
2013-09-08 17:07:23 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-09-08 17:07:35 --- CRITICAL: ErrorException [ 8 ]: Undefined index:  ~ MODPATH\simplex\classes\Kohana\Simplex.php [ 388 ] in D:\OpenServer\domains\mm.ru\www\modules\simplex\classes\Kohana\Simplex.php:388
2013-09-08 17:07:35 --- DEBUG: #0 D:\OpenServer\domains\mm.ru\www\modules\simplex\classes\Kohana\Simplex.php(388): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\OpenServer\d...', 388, Array)
#1 D:\OpenServer\domains\mm.ru\www\modules\simplex\classes\Kohana\Simplex.php(328): Kohana_Simplex->conversion()
#2 D:\OpenServer\domains\mm.ru\www\modules\simplex\classes\Kohana\Simplex.php(284): Kohana_Simplex->simplex(NULL, 3, 3, 1)
#3 D:\OpenServer\domains\mm.ru\www\application\classes\Controller\SelectMethod.php(26): Kohana_Simplex->decision()
#4 D:\OpenServer\domains\mm.ru\www\system\classes\Kohana\Controller.php(84): Controller_SelectMethod->action_decision()
#5 [internal function]: Kohana_Controller->execute()
#6 D:\OpenServer\domains\mm.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_SelectMethod))
#7 D:\OpenServer\domains\mm.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 D:\OpenServer\domains\mm.ru\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 D:\OpenServer\domains\mm.ru\www\index.php(118): Kohana_Request->execute()
#10 {main} in D:\OpenServer\domains\mm.ru\www\modules\simplex\classes\Kohana\Simplex.php:388
2013-09-08 17:07:36 --- CRITICAL: ErrorException [ 8 ]: Undefined index:  ~ MODPATH\simplex\classes\Kohana\Simplex.php [ 388 ] in D:\OpenServer\domains\mm.ru\www\modules\simplex\classes\Kohana\Simplex.php:388
2013-09-08 17:07:36 --- DEBUG: #0 D:\OpenServer\domains\mm.ru\www\modules\simplex\classes\Kohana\Simplex.php(388): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\OpenServer\d...', 388, Array)
#1 D:\OpenServer\domains\mm.ru\www\modules\simplex\classes\Kohana\Simplex.php(328): Kohana_Simplex->conversion()
#2 D:\OpenServer\domains\mm.ru\www\modules\simplex\classes\Kohana\Simplex.php(284): Kohana_Simplex->simplex(NULL, 3, 3, 1)
#3 D:\OpenServer\domains\mm.ru\www\application\classes\Controller\SelectMethod.php(26): Kohana_Simplex->decision()
#4 D:\OpenServer\domains\mm.ru\www\system\classes\Kohana\Controller.php(84): Controller_SelectMethod->action_decision()
#5 [internal function]: Kohana_Controller->execute()
#6 D:\OpenServer\domains\mm.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_SelectMethod))
#7 D:\OpenServer\domains\mm.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 D:\OpenServer\domains\mm.ru\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 D:\OpenServer\domains\mm.ru\www\index.php(118): Kohana_Request->execute()
#10 {main} in D:\OpenServer\domains\mm.ru\www\modules\simplex\classes\Kohana\Simplex.php:388
2013-09-08 17:07:36 --- CRITICAL: ErrorException [ 8 ]: Undefined index:  ~ MODPATH\simplex\classes\Kohana\Simplex.php [ 388 ] in D:\OpenServer\domains\mm.ru\www\modules\simplex\classes\Kohana\Simplex.php:388
2013-09-08 17:07:36 --- DEBUG: #0 D:\OpenServer\domains\mm.ru\www\modules\simplex\classes\Kohana\Simplex.php(388): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\OpenServer\d...', 388, Array)
#1 D:\OpenServer\domains\mm.ru\www\modules\simplex\classes\Kohana\Simplex.php(328): Kohana_Simplex->conversion()
#2 D:\OpenServer\domains\mm.ru\www\modules\simplex\classes\Kohana\Simplex.php(284): Kohana_Simplex->simplex(NULL, 3, 3, 1)
#3 D:\OpenServer\domains\mm.ru\www\application\classes\Controller\SelectMethod.php(26): Kohana_Simplex->decision()
#4 D:\OpenServer\domains\mm.ru\www\system\classes\Kohana\Controller.php(84): Controller_SelectMethod->action_decision()
#5 [internal function]: Kohana_Controller->execute()
#6 D:\OpenServer\domains\mm.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_SelectMethod))
#7 D:\OpenServer\domains\mm.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 D:\OpenServer\domains\mm.ru\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 D:\OpenServer\domains\mm.ru\www\index.php(118): Kohana_Request->execute()
#10 {main} in D:\OpenServer\domains\mm.ru\www\modules\simplex\classes\Kohana\Simplex.php:388
2013-09-08 17:07:36 --- CRITICAL: ErrorException [ 8 ]: Undefined index:  ~ MODPATH\simplex\classes\Kohana\Simplex.php [ 388 ] in D:\OpenServer\domains\mm.ru\www\modules\simplex\classes\Kohana\Simplex.php:388
2013-09-08 17:07:36 --- DEBUG: #0 D:\OpenServer\domains\mm.ru\www\modules\simplex\classes\Kohana\Simplex.php(388): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\OpenServer\d...', 388, Array)
#1 D:\OpenServer\domains\mm.ru\www\modules\simplex\classes\Kohana\Simplex.php(328): Kohana_Simplex->conversion()
#2 D:\OpenServer\domains\mm.ru\www\modules\simplex\classes\Kohana\Simplex.php(284): Kohana_Simplex->simplex(NULL, 3, 3, 1)
#3 D:\OpenServer\domains\mm.ru\www\application\classes\Controller\SelectMethod.php(26): Kohana_Simplex->decision()
#4 D:\OpenServer\domains\mm.ru\www\system\classes\Kohana\Controller.php(84): Controller_SelectMethod->action_decision()
#5 [internal function]: Kohana_Controller->execute()
#6 D:\OpenServer\domains\mm.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_SelectMethod))
#7 D:\OpenServer\domains\mm.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 D:\OpenServer\domains\mm.ru\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 D:\OpenServer\domains\mm.ru\www\index.php(118): Kohana_Request->execute()
#10 {main} in D:\OpenServer\domains\mm.ru\www\modules\simplex\classes\Kohana\Simplex.php:388
2013-09-08 17:08:21 --- CRITICAL: ErrorException [ 1 ]: Maximum execution time of 60 seconds exceeded ~ APPPATH\views\intermediate_results\create_table.php [ 2 ] in file:line
2013-09-08 17:08:21 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-09-08 17:08:22 --- CRITICAL: ErrorException [ 1 ]: Maximum execution time of 60 seconds exceeded ~ MODPATH\simplex\classes\Kohana\Simplex.php [ 304 ] in file:line
2013-09-08 17:08:22 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-09-08 17:08:23 --- CRITICAL: ErrorException [ 1 ]: Maximum execution time of 60 seconds exceeded ~ MODPATH\simplex\classes\Kohana\Simplex.php [ 304 ] in file:line
2013-09-08 17:08:23 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-09-08 17:08:23 --- CRITICAL: ErrorException [ 1 ]: Maximum execution time of 60 seconds exceeded ~ MODPATH\simplex\classes\Kohana\Simplex.php [ 349 ] in file:line
2013-09-08 17:08:23 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-09-08 17:08:23 --- CRITICAL: ErrorException [ 1 ]: Maximum execution time of 60 seconds exceeded ~ APPPATH\views\intermediate_results\create_table.php [ 2 ] in file:line
2013-09-08 17:08:23 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-09-08 17:10:03 --- CRITICAL: ErrorException [ 1 ]: Maximum execution time of 60 seconds exceeded ~ APPPATH\views\intermediate_results\create_table.php [ 2 ] in file:line
2013-09-08 17:10:03 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-09-08 17:10:04 --- CRITICAL: ErrorException [ 1 ]: Maximum execution time of 60 seconds exceeded ~ MODPATH\simplex\classes\Kohana\Simplex.php [ 304 ] in file:line
2013-09-08 17:10:04 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-09-08 17:10:04 --- CRITICAL: ErrorException [ 1 ]: Maximum execution time of 60 seconds exceeded ~ APPPATH\views\intermediate_results\create_table.php [ 2 ] in file:line
2013-09-08 17:10:04 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-09-08 17:10:04 --- CRITICAL: ErrorException [ 1 ]: Maximum execution time of 60 seconds exceeded ~ APPPATH\views\intermediate_results\create_table.php [ 2 ] in file:line
2013-09-08 17:10:04 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-09-08 17:10:04 --- CRITICAL: ErrorException [ 1 ]: Maximum execution time of 60 seconds exceeded ~ MODPATH\simplex\classes\Kohana\Simplex.php [ 304 ] in file:line
2013-09-08 17:10:04 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-09-08 17:10:04 --- CRITICAL: ErrorException [ 1 ]: Maximum execution time of 60 seconds exceeded ~ MODPATH\simplex\classes\Kohana\Simplex.php [ 304 ] in file:line
2013-09-08 17:10:04 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-09-08 17:11:42 --- CRITICAL: ErrorException [ 1 ]: Maximum execution time of 60 seconds exceeded ~ APPPATH\views\intermediate_results\create_table.php [ 2 ] in file:line
2013-09-08 17:11:42 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-09-08 17:12:04 --- CRITICAL: ErrorException [ 1 ]: Maximum execution time of 60 seconds exceeded ~ MODPATH\simplex\classes\Kohana\Simplex.php [ 305 ] in file:line
2013-09-08 17:12:04 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-09-08 17:12:05 --- CRITICAL: ErrorException [ 1 ]: Maximum execution time of 60 seconds exceeded ~ MODPATH\simplex\classes\Kohana\Simplex.php [ 305 ] in file:line
2013-09-08 17:12:05 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-09-08 17:12:05 --- CRITICAL: ErrorException [ 1 ]: Maximum execution time of 60 seconds exceeded ~ APPPATH\views\intermediate_results\create_table.php [ 2 ] in file:line
2013-09-08 17:12:05 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-09-08 17:12:05 --- CRITICAL: ErrorException [ 1 ]: Maximum execution time of 60 seconds exceeded ~ SYSPATH\classes\Kohana\View.php [ 73 ] in file:line
2013-09-08 17:12:05 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-09-08 17:12:05 --- CRITICAL: ErrorException [ 1 ]: Maximum execution time of 60 seconds exceeded ~ APPPATH\views\intermediate_results\create_table.php [ 2 ] in file:line
2013-09-08 17:12:05 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-09-08 17:14:48 --- CRITICAL: ErrorException [ 1 ]: Maximum execution time of 60 seconds exceeded ~ MODPATH\simplex\classes\Kohana\Simplex.php [ 305 ] in file:line
2013-09-08 17:14:48 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-09-08 17:14:50 --- CRITICAL: ErrorException [ 1 ]: Maximum execution time of 60 seconds exceeded ~ MODPATH\simplex\classes\Kohana\Simplex.php [ 305 ] in file:line
2013-09-08 17:14:50 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-09-08 17:14:50 --- CRITICAL: ErrorException [ 1 ]: Maximum execution time of 60 seconds exceeded ~ MODPATH\simplex\classes\Kohana\Simplex.php [ 407 ] in file:line
2013-09-08 17:14:50 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-09-08 17:14:50 --- CRITICAL: ErrorException [ 1 ]: Maximum execution time of 60 seconds exceeded ~ MODPATH\simplex\classes\Kohana\Simplex.php [ 305 ] in file:line
2013-09-08 17:14:50 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line