<?php 
namespace Download\Load;
use \DOMDocument;
use \DOMXPath;
abstract class Download
{
	public function check($url)
	{
		try {
			$ch = curl_init($url);
			curl_setopt($ch, CURLOPT_URL, $url);
			curl_exec($ch);
			curl_close($ch);
		}catch(Exception $e){
				throw new Exception("Invalid URL",0,$e);
		}
	}
	
	public function checkWithParam($url, $param)
	{
		try {
			$name = array();
			$ch = curl_init($url);
			foreach($param as $key=>$par)
			{
				$name[] = '?'.$key.'='.$par;
			}
			$implodeParam = implode('',$name);
			curl_setopt($ch, CURLOPT_URL, $url.''.$implodeParam);
			curl_close($ch);
		}catch(Exception $e){
			throw new Exception("Invalid URL",0,$e);
		}
	}
	
	
	/*
	 * Method to check this id with HTML file and parse to text
	 */
	public function checkByID($url, $params)
	{
		try {
			$f = file_get_contents($url, false);
			$domdocument = new DOMDocument();
			$searchPage = mb_convert_encoding($f, 'HTML-ENTITIES', "UTF-8"); 
			@$domdocument->loadHTML($searchPage);
			$dom = new DOMXPath($domdocument);
			$data=array();

			foreach($params as $param)
			{
				$results = $dom->query("//*[@id='" . $param . "']");
				
				for($i=0; $results->length > $i; $i++) {
					$review[] = $results->item($i)->nodeValue;
				}
			}
			return $review;
		}catch(Exception $e){
			throw new Exception("Invalid URL",0,$e);
		}
	}
	
	/*
	 * Method to check all class with HTML file and parse to text
	 */
	public function checkByClass($url, $params)
	{
		try {
			$f = file_get_contents($url,false);
			$domdocument = new DOMDocument();
			$searchPage = mb_convert_encoding($f, 'HTML-ENTITIES', "UTF-8"); 
			@$domdocument->loadHTML($searchPage);
			$dom = new DOMXPath($domdocument);
			$data=array();
			foreach($params as $param)
			{
				$results = $dom->query("//*[@class='" . $param . "']");
				for($i=0; $results->length > $i; $i++) {
					$review[] = $results->item($i)->nodeValue;
				}
			}
			return $review;
		}catch(Exception $e){
			throw new Exception("Invalid URL",0,$e);
		}
	}
	
	/*
	 * Method to check all ID with HTML and parse to text
	 */
	public function checkAllId($url)
	{
		try {
			$f = file_get_contents($url, false);
			$domdocument =  new DOMDocument();
			@$domdocument->loadHTML($f);
			$dom = new DOMXPath($domdocument);
			$result = $dom->query("//*[@id]");
			for($i=0; $result->length > $i; $i++)
			{
				$review[] = $result->item($i)->nodeValue.'<br>';
			}
			return $review;
		}catch (\Exception $e){
			throw new \Exception("Invalid URL",0,$e);
		}
	}
	
	/*
	 * Method to check all CLASS with HTML and parse to text
	 */
	public function checkAllClass($url)
	{
		try {
			$f = file_get_contents($url, false);
			$domdocument =  new DOMDocument();
			@$domdocument->loadHTML($f);
			$dom = new DOMXPath($domdocument);
			$result = $dom->query("[@class]");
			for($i=0; $result->length > $i; $i++)
			{
				$review[] = $result->item($i)->nodeValue.'<br>';
			}
			return $review;
		}catch (\Exception $e){
			throw new \Exception("Invalid URL",0,$e);
		}
	}
	
	/*
	 * Method to check this tag with HTML file and parse to text
	 */
	public function checkByTag($url, $params)
	{
		try {
			$f = file_get_contents($url, false);
			$dom = new DOMDocument();
			@$dom->loadHTML($f);
			$data=array();
			
			foreach($params as $param)
			{
				$data = $dom->getElementsByTagName($param);
				$html2 = $dom->saveHTML($data);
				echo $html2;
			}
		}catch(Exception $e){
			throw new Exception("Invalid URL",0,$e);
		}
	}

}
?>