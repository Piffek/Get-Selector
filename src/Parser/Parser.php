<?php 
namespace Src\Parser;
use DOMDocument;
use \DOMXPath;

class Parser
{
	
	public function __construct($function){
		$this->function = $function;
	}
	
	public function findMethod($url,$what, $params, $selectors){
		
		if(method_exists(self::class, $this->function)){
			
			return $this->{$this->function}($url, $what, $params, $selectors);
			
		}
		
	}
	
	public function example(){
		return 'cos';
	}

	public function selector($selectors){
		$sel = isset($selectors) ? $selectors : '*';
		
		return $sel;
	}
	
	public function what($what){
		
		$when = isset($what) ? $what : '';
		
		return $when;
	}
	
	public function loop($params=[], $what, $dom, $selectors){
		if(is_array($params)){
			
			$review = array();
			foreach((array)$params as $param){
				
				$results = $dom->query("//".$this->selector($selectors)."[@".$this->what($what)."='" . $param . "']");
				
				for($i=0; $results->length > $i; $i++) {
					
					$review[$i][$param] = $results->item($i)->nodeValue;
					
				}
			}
			return $review;
		}
		else{
			
			$review = array();
			$result = $dom->query("//*[@".$this->what($what)."]");
			for($i=0; $result->length > $i; $i++){
				
				$review[] = $result->item($i)->nodeValue.'<br>';
				
			}
			return $review;
		}
		
	}
	
	public function checkCurlOptions($ch){
		
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
		curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
		curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
		curl_setopt($ch, CURLOPT_TIMEOUT, 3);
		curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
	}
	
	public function findParam(string $url,$what, $params, $selectors){
		
			$ch =  curl_init($url);
			$this->checkCurlOptions($ch);
			$f = curl_exec($ch);
			$domdocument = new DOMDocument;
			$searchPage = mb_convert_encoding($f, 'HTML-ENTITIES', "UTF-8");
			@$domdocument->loadHTML($searchPage);
			$dom = new DOMXPath($domdocument);
			
			return $this->loop($params, $what, $dom, $selectors);	
	}
	
	
	
}