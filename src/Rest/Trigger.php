<?php 
namespace Src\Rest;
use Src\Rest\Rest;
use Src\Exception;

class Trigger extends Exception  implements RestInterface
{
	public function __construct(Rest $rest){
		
		$this->rest = $rest;
		
	}
	
	public function find(string $url = NULL ,string $method = NULL){
		
		return $this->rest->findMethod($url, $method);
		
	}
	
	
}
?>