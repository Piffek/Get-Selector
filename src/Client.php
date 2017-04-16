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
		$domDocument = new DOMDocument('1.0', "UTF-8");
		$domDocument->loadHTML($this->checkWithParam($url,$param));
		echo $domDocument->saveHTML();	
	}
}

?>