<?php 
namespace Download\RepoAbstract;

use \DOMDocument;
use \DOMXPath;

abstract class Core
{
	
	public function selector($selectors)
	{
		$sel = isset($selectors) ? $selectors : '*';
		return $sel;
	}
	
	public function what($what)
	{
		$when = isset($what) ? $what : '';
		return $when;
	}
	
	public function loop($params=[], $what, $dom,$selectors)
	{
		if(is_array($params))
		{
			$review = array();
			foreach((array)$params as $param)
			{
				$results = $dom->query("//".$this->selector($selectors)."[@".$this->what($what)."='" . $param . "']");
			
			
				for($i=0; $results->length > $i; $i++) {
					$review[$i][$param] = $results->item($i)->nodeValue;
				}
			}
			return $review;
		}
		else 
		{
			$review = array();
			$result = $dom->query("//*[@".$this->what($what)."]");
			for($i=0; $result->length > $i; $i++)
			{
				$review[] = $result->item($i)->nodeValue.'<br>';
			}
			return $review;
		}
		
	}
	abstract function checkCurlOptions($ch);
	
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