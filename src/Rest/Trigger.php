<?php 
namespace Src\Rest;
use Src\Rest\Rest;
use Src\Exception;

class Trigger extends Exception
{
	public function __construct(Rest $rest)
	{
		$this->rest = $rest;
	}
	public function find(string $method, string $url)
	{
		return $this->rest->findHTTP($method, $url);
	}
	
	public function getHeader(string $url)
	{
		return $this->rest->header($url);
	}
	
}
?>