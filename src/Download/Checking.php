<?php 
namespace Download;

interface Checking
{
	public function check($url);
	public function checkWithParam($url,$param);
	public function checkById($url,$params,$selectors= NULL);
	public function checkByClass($url,$params, $selectors = NULL);
	public function checkAllId($url);
	public function checkAllClass($url);
	public function checkByTag($url,$params);
}


?>