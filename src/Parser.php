<?php 
namespace src;
use Download\RepoAbstract\Core;
use Download\Checking;
class Parser extends Core implements Checking
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

	/*
	 * parse the webside
	 * $what = string
	 * $param = array
	 * $selectors = string
	 * $url = string
	 */
	public function find($url,$what = NULL, $params=NULL, $selectors = NULL)
	{
		return  $this->findParam($url,$what, $params, $selectors);
	}
	
}

?>