<?php 
namespace Download;

interface Checking
{
	public function check($url);
	public function checkWithParam($url,$param);
	public function checkAllId($url);
	public function checkAllClass($url);
	public function checkByTag($url,$params);
}


?>