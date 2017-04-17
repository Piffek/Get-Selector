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
		return $this->check($url);
		
	}
	
	/*
	 * check the webside
	 * $url = string
	 * $param = array assoc
	 */
	public function curlInitWithParam($url,$param)
	{
		return $this->checkWithParam($url,$param);
	}
	
	/*
	 * check the webside
	 * $url = string
	 * $param = array
	 */
	public function checkDOMWithParamById($url,$param)
	{
		return $this->checkByID($url,$param);
	}
	
	
	/*
	 * check the webside
	 * $url = string
	 * $param = array
	 */
	public function checkDOMWithParamByClass($url,$param)
	{
		return $this->checkByClass($url,$param);
	}
	
	/*
	 * check the webside
	 * $url = string
	 */
	public function checkDOMallIdWithHTML($url)
	{
		return $this->checkAllId($url);
	}
	
	/*
	 * check the webside
	 * $url = string
	 * $param = array
	 */
	public function curlInitWithParamByTag($url,$param)
	{
		return $this->checkByTag($url,$param);
	}
	
	
}

?>