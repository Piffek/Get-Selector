<?php 
namespace src;
use \DOMDocument;
use \DOMXPath;
use src\Helper;

class Parser extends Helper 
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
	
	public function findParam($url,$what, $params, $selectors)
	{
		try {
			$ch =  curl_init($url);
			$this->checkCurlOptions($ch);
			$f = curl_exec($ch);
			$domdocument = new DOMDocument();
			$searchPage = mb_convert_encoding($f, 'HTML-ENTITIES', "UTF-8");
			@$domdocument->loadHTML($searchPage);
			$dom = new DOMXPath($domdocument);
			
			return $this->loop($params, $what, $dom,$selectors);
			
			
		}catch(Exception $e){
			throw new Exception("Invalid URL",0,$e);
		}
	}
	
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