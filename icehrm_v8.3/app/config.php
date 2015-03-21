<?php 

define('PATH_WEB', 'D:\project\mysvn\icehrm\icehrm_v8.3\icehrm_v8.3');
ini_set('error_log', PATH_WEB.'\log.log');

define('CLIENT_NAME', 'app');
define('APP_BASE_PATH', PATH_WEB.'/');
define('CLIENT_BASE_PATH', PATH_WEB.'\app/');
define('BASE_URL','http://localhost:8222/');
define('CLIENT_BASE_URL','http://localhost:8222/app/');

define('APP_DB', 'hrm1');
define('APP_USERNAME', 'root');
define('APP_PASSWORD', '123456789');
define('APP_HOST', '192.168.0.100');
define('APP_CON_STR', 'mysql://'.APP_USERNAME.':'.APP_PASSWORD.'@'.APP_HOST.'/'.APP_DB);

//file upload
define('FILE_TYPES', 'jpg,png,jpeg');
define('MAX_FILE_SIZE_KB', 10 * 1024);
