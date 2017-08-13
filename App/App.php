<?php
define('DS'      , DIRECTORY_SEPARATOR);
define('APP'     , dirname(__FILE__));
define('ROOT'    , dirname(APP));
define('CORE'    , ROOT.DS.'Core');
define('BASE_URL', rtrim(dirname(dirname($_SERVER['SCRIPT_NAME'])), DS));

use Core\Config;
use Core\Database\MySQLDatabase;
use Core\Routing\Dispatcher;

class App {

	private static $_dbInstance;


	public static function load() {
		require CORE . DS . 'Autoloader.php';
		require  APP . DS . 'Autoloader.php';

		Core\Autoloader::register();
		App\Autoloader::register();

		new Dispatcher();
	}


	public static function getDb() {
		if (is_null(self::$_dbInstance))
			self::$_dbInstance = MySQLDatabase::newInstance(Config::getInstance()->getDbConfig());

		return self::$_dbInstance;
	}

}