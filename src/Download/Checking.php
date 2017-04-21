<?php 
namespace Download;

interface Checking
{
	public function check($url);
	public function checkWithParam($url,$param);
	public function checkByTag($url,$params);
}


?>