<?php 
namespace Src\Rest;
use Src\Exception;
use Src\Rest\RestInterface;

class Trigger extends Exception
{
	protected $rest;
	public function __construct(RestInterface $rest){
		
		$this->rest = $rest;
		
	}
	
	public function checkMethod($url = NULL, $method = NULL){
		return $this->rest->find($url, $method);
	}
	
	
}
?>