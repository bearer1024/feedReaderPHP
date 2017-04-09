<?php

define('FEEDREADER_PATH', dirname(__FILE__));

	define('PUBLIC_PATH', FEEDREADER_PATH . '/public');
        define('INDEX_PATH',PUBLIC_PATH.'/index.php');
		define('PUBLIC_RELATIVE', '..');

	define('DATA_PATH', FEEDREADER_PATH . '/data');
		define('UPDATE_FILENAME', DATA_PATH . '/update.php');
		define('USERS_PATH', DATA_PATH . '/users');
		define('CACHE_PATH', DATA_PATH . '/cache');
		define('PSHB_PATH', DATA_PATH . '/PubSubHubbub');

	define('LIB_PATH', FEEDREADER_PATH . '/lib');
	define('APP_PATH', FEEDREADER_PATH . '/app');
	define('EXTENSIONS_PATH', FEEDREADER_PATH . '/extensions');

define('TMP_PATH', sys_get_temp_dir());
