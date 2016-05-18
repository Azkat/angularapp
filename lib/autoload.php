<?php

function __autoload($class_name){
	if(is_file(CLASS_PATH . $class_name . '.php')){
		require_once CLASS_PATH . $class_name . '.php';
	} else {
		throw new Exception('Class \'' . $class_name . '\' not found.');
	}
	return true;
}