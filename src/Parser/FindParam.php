<?php 
namespace Piffek\WebsiteParser;
use DOMDocument;
use DOMXPath;

class FindParam extends HelperForParser implements ParserInterface
{
	public function find(string $url,$what, $params, $selectors){
	
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