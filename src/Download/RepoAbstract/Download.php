<?php 
namespace Download\RepoAbstract;

use \DOMDocument;
use \DOMXPath;
use Download\REST\DownloadREST;

abstract class Download extends DownloadREST
{
	
	public function selector($selectors)
	{
		$sel = isset($selectors) ? $selectors : '*';
		return $sel;
	}
	
	abstract function checkCurlOptions($ch);
	
	public function checkCurl($url)
	{
		try {
			$ch =  curl_init($url);
			$this->checkCurlOptions($ch);
			$f = curl_exec($ch);
			$domdocument = new DOMDocument();
			$searchPage = mb_convert_encoding($f, 'HTML-ENTITIES', "UTF-8");
			@$domdocument->loadHTML($searchPage);
			$dom = new DOMXPath($domdocument);
			$results = $dom->query('//*');
			for($i=0; $results->length > $i; $i++) {
				$review = $results->item($i)->nodeValue;
			}
			return $review;
		}catch(Exception $e){
			throw new Exception("Invalid URL",0,$e);
		}
	}
	
	public function checkCurlWithParam($url, $param)
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
	public function checkCurlByID($url, $params, $selectors)
	{
		try {
			$ch =  curl_init($url);
			$this->checkCurlOptions($ch);
			$f = curl_exec($ch);
			$domdocument = new DOMDocument();
			$searchPage = mb_convert_encoding($f, 'HTML-ENTITIES', "UTF-8");
			@$domdocument->loadHTML($searchPage);
			$dom = new DOMXPath($domdocument);
			$review = array();
			foreach($params as $param)
			{
				$results = $dom->query("//".$this->selector($selectors)."[@id='" . $param . "']");
		
				for($i=0; $results->length > $i; $i++) {
					$review[$i][$param] = $results->item($i)->nodeValue.'<br>';
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
	public function checkCurlByClass($url, $params, $selectors)
	{
		try {
			$ch =  curl_init($url);
			$this->checkCurlOptions($ch);
			$f = curl_exec($ch);
			$domdocument = new DOMDocument();
			$searchPage = mb_convert_encoding($f, 'HTML-ENTITIES', "UTF-8");
			@$domdocument->loadHTML($searchPage);
			$dom = new DOMXPath($domdocument);
			$data=array();
			$review = array();
			foreach($params as $param)
			{
				$results = $dom->query("//".$this->selector($selectors)."[@class='" . $param . "']");
				for($i=0; $results->length > $i; $i++) {
					$review[$i][$param] = $results->item($i)->nodeValue;
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
	public function checkCurlAllId($url)
	{
		try {
			$ch =  curl_init($url);
			$this->checkCurlOptions($ch);
			$f = curl_exec($ch);
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
	public function checkCurlAllClass($url)
	{
		try {
			$ch =  curl_init($url);
			$this->checkCurlOptions($ch);
			$f = curl_exec($ch);
			$domdocument =  new DOMDocument();
			@$domdocument->loadHTML($f);
			$dom = new DOMXPath($domdocument);
			$result = $dom->query("//*[@class]");
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
	public function checkCurlByTag($url, $params)
	{
		try {
			$ch =  curl_init($url);
			$this->checkCurlOptions($ch);
			$f = curl_exec($ch);
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