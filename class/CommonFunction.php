<?php

class CommonFunction {
	
	//DBインスタンス
	protected $db;

	protected $spdb;
	
	//DB接続
	protected function db_connect($dsn = false){
		if(is_object($this->db)){
			return true;
		}
		try {
			$this->db = new PDO('mysql:dbname='. DB_NAME .';host=' . DB_HOST, DB_USER, DB_PSWD);
			$this->db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
			$this->db->setAttribute(PDO::MYSQL_ATTR_INIT_COMMAND, 'SET @key_string:="' . AUTH_KEY . '"');
			$this->db->exec('set names utf8');
		} catch(PDOException $e){
			print 'Connection failed: ' . $e->getMessage();
		}
		return true;
	}
	
	public static function request($query){
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $query);
		curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows; U; Windows NT 5.1; rv:1.7.3) Gecko/20041001 Firefox/0.10.1" );
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true );
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
		
		$res = curl_exec($ch);
		
		if(curl_errno($ch)){
			return false;
		}
		curl_close($ch);
		return $res;
	}
	
	public function is_domain($text){
		
		if(preg_match('/^[\w][\w._\-]{1,61}[\w]$/', $text)){
		
		//if(preg_match("/^[\w\.\-]+$/", $text)){
			return true;
		}
		return false;
	}
	
	public function is_mail($text){
		if(preg_match("/^[a-z0-9_.+-]+[@][a-z0-9.-]+$/i", $text)){
			return true;
		}
		return false;
	}
	
	public function base64urlencode($data){
	  return strtr(rtrim(base64_encode($data), '='), '+/', '-_');
	}
	
	public function base64urldecode($base64){
	  return base64_decode(strtr($base64, '-_', '+/'));
	}
	
	public function get_info(){
		return array();
	}
}