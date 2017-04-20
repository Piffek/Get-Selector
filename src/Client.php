<?php 
namespace src;
use Download\RepoAbstract\Download;
use Download\Checking;
class Client extends Download implements Checking
{
	
	public function checkCurlOptions($ch)
	{
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
		curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
		curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
		curl_setopt($ch, CURLOPT_TIMEOUT, 3);
		curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
	}
	
	/*
	 * check the webside
	 * $url = string
	 */
	public function check($url){
		return $this->checkCurl();
		
	}
	
	/*
	 * check the webside
	 * $url = string
	 * $param = array assoc
	 */
	public function checkWithParam($url,$param)
	{
		return $this->checkCurlWithParam($url,$param);
	}
	
	/*
	 * check the webside
	 * $url = string
	 * $param = array
	 */
	public function checkById($url,$params,$selectors= NULL)
	{
		return $this->checkCurlById($url, $params, $selectors=NULL);
	}
	
	
	/*
	 * check the webside
	 * $url = string
	 * $param = array
	 */
	public function checkByClass($url,$params, $selectors = NULL)
	{
		return  $this->checkCurlByClass($url, $params, $selectors = NULL);
	}
	
	/*
	 * check the webside
	 * $url = string
	 */
	public function checkAllId($url)
	{
		return $this->checkCurlAllId($url);
	}
	
	/*
	 * check the webside
	 * $url = string
	 */
	public function checkAllClass($url)
	{
		return $this->checkCurlAllClass($url);
	}
	
	/*
	 * check the webside
	 * $url = string
	 * $param = array
	 */
	public function checkByTag($url,$params)
	{
		return $this->checkCurlByTag($url, $params);
	}
	
	
}

?>