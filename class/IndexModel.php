<?php

class IndexModel extends CommonFunction{
	
	function __construct(){
		
		$this->db_connect();
		
	}
	
	public function get_all_data(){	
		$result = array();

		$sql = "SELECT id, title FROM pro";
		$sth = $this->db->prepare($sql);
		$sth->execute(array());
		$result = $sth->fetchAll();

		return $result;
	}

	public function create_data($title) {
		$sql = 'INSERT INTO pro (title) VALUES (?)';
		$sth = $this->db->prepare($sql);
		$sth->execute(array(
			$title,
		));
		header('Location: http://'.$_SERVER["SERVER_NAME"].':' . $_SERVER['SERVER_PORT'] . '/');
		exit;
	}

	public function get_data($id){	
		$result = array();

		$sql = "SELECT id, title FROM pro WHERE id = ?";
		$sth = $this->db->prepare($sql);
		$sth->execute(array(
			$id,
			));
		$result = $sth->fetchAll();

		return $result;
	}

}