<?php

class IndexModel extends CommonFunction{
	
	function __construct(){
		
		$this->db_connect();
		
	}
	
	public function get_data(){
		
		$result = array();

		$sql = "SELECT title FROM pro";
		$sth = $this->db->prepare($sql);
		$sth->execute(array());
		$result = $sth->fetchAll();
		echo json_encode($result);

		return $result;
	}

}