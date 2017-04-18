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
	public function getWithParamsById($url,$param,$selectors= NULL)
	{
		return $this->checkByID($url,$param, $selectors);
	}
	
	
	/*
	 * check the webside
	 * $url = string
	 * $param = array
	 */
	public function getWithParamsByClass($url,$param, $selectors = NULL)
	{
		return $this->checkByClass($url,$param, $selectors);
	}
	
	/*
	 * check the webside
	 * $url = string
	 */
	public function getAllId($url)
	{
		return $this->checkAllId($url);
	}
	
	/*
	 * check the webside
	 * $url = string
	 */
	public function getAllClass($url)
	{
		return $this->checkAllClass($url);
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