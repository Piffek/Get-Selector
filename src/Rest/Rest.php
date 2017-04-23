<?php 
namespace Src\Rest;
use Src\Rest\RestInterface;

class Rest implements RestInterface
{
	public function findHTTP(string $method, string $url)
	{
		echo $method;
	}

	
}

?>