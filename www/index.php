<?php

ini_set('display_errors', 'on');

error_reporting(E_ALL);

require_once '../config/setup.ini';

class IndexController{
	
	function __construct(){
		
		$model = new IndexModel;

           $template = 'index.html';

           $data = $model->get_data();
           
		new IndexHtml($data, $template);
	}
}

new IndexController;