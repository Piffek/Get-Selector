<?php 
namespace Download\RepoAbstract;

abstract class ClientAbstract
{
	
	public function selector($selectors)
	{
		$sel = isset($selectors) ? $selectors : '*';
		return $sel;
	}
	
	public function curlOptions($ch)
	{
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
		curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
		curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
		curl_setopt($ch, CURLOPT_TIMEOUT, 3);
		curl_setopt($ch, CURLOPT_HTTPHEADER, array('Accept: application/json'));
	}
	
	abstract function check($url);
	
	abstract function checkWithParam($url, $param);
	
	
	/*
	 * Method to check this id with HTML file and parse to text
	 */
	abstract function checkByID($url, $params, $selectors);
	
	/*
	 * Method to check all class with HTML file and parse to text
	 */
	abstract function checkByClass($url, $params);
	
	/*
	 * Method to check all ID with HTML and parse to text
	 */
	abstract function checkAllId($url);
	
	/*
	 * Method to check all CLASS with HTML and parse to text
	 */
	abstract function checkAllClass($url);
	
	/*
	 * Method to check this tag with HTML file and parse to text
	 */
	abstract function checkByTag($url, $params);

}
?>