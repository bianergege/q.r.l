<?php
class DB {
	private static $obj = null;
	private function __construct(){
		echo "连接数据库成功<br>";
	}

	static function getInstance(){
		if(is_null(self::$obj))
			self::$obj = new self();
		return self::$obj;
	}

	function query($sql){
		echo $sql;
	}
}

$db = DB::getInstance();
$db -> query("select*from user");

?>