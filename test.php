<?php
Class Helper{
  $get = $post = $request [];	

  public function construct(){
	$this->get = $_GET;
	$this->post = $_POST;
	$this->request = $_REQUEST;
  }	

  public function getPost($param){
return  $_POST;
die();
	return isset($_POST[$param]) && !empty($_POST[$param])? $_POST[$param]:NULL;	
  }	

  public function getQueryString($param){
	return isset($_GET[$param]) && !empty($_GET[$param])? $_GET[$param]:NULL;	
  }	

  public function getRequest($param){
	return isset($_RQUEST[$param]) && !empty($_RQUEST[$param])? $_RQUEST[$param]:NULL;	
  }	

	
}


class Teseb{

	public  function test_z(){
	
	}
}
?>
