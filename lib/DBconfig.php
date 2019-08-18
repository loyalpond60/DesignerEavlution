<?php
use Monolog\Logger;
use Monolog\Handler\StreamHandler;
class DB
{
	static function connect(){
		$db_ip="127.0.0.1";
		$db_user="root";
		$db_password="";
		$db_select="DesignerEavluation";
		$db_charset = "UTF8";

		$DSN="mysql:host=$db_ip;dbname=$db_select;charset=$db_charset";
		try{
			$db=new PDO($DSN,$db_user,$db_password);
			$db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

            $log = new Logger('SERVER');
            $log->pushHandler(new StreamHandler('storage/DB.log', Logger::DEBUG));
            $log->addInfo('DB connected.',array());
		}
		catch(PDOException $e){
			echo "連接失敗 ： " . $e->getMessage();
		}
		return $db;
	}
}

 ?>
