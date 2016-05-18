<?php

class IndexHtml extends CommonHtml{
	
  function __construct($data, $template){
  	
    $this->loadHtml($template);

    $this->set_data($data);

    $this->process();

  }

  public function set_data($data){
    $text = "";
    foreach ($data as $value) {
      $text .= '<li>'. $value['title'] .'</li>';
    }

    $this->template = str_replace('@data@', $text, $this->template);
  }

}