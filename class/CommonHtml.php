<?php

class CommonHtml{
	
	protected $template;
	
	protected function loadHtml($name){
		
		$this->template = file_get_contents(TEMPLATE_PATH. $name);
	}
	
	protected function h($text){
		return htmlspecialchars($text, ENT_QUOTES, 'UTF-8');
	}
	
	protected function process(){

		$this->template = str_replace('@header@', file_get_contents(TEMPLATE_PATH.'/parts/header.html'), $this->template);

		$this->template = str_replace('@nav@', file_get_contents(TEMPLATE_PATH.'/parts/nav.html'), $this->template);

		$this->template = str_replace('@footer@', file_get_contents(TEMPLATE_PATH.'/parts/footer.html'), $this->template);
		
		$this->template = preg_replace("/@(.*?)@/", "", $this->template);
		
		print $this->template;
		exit;
	}
}