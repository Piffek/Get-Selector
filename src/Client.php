<?php 
namespace src;
use Download\Load\Download;
class Client extends Download
{
	/*
	 * check the webside
	 * $url = string
	 */
	public function curlINIT($url){
		$this->check($url);
	}
	
	/*
	 * check the webside
	 * $url = string
	 * $param = array assoc
	 */
	public function curlInitWithParam($url,$param)
	{
		$this->checkWithParam($url,$param);
	}
}

?>