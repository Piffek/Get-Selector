<?php 
namespace Src\Rest;
use Src\Rest\RestInterface;


class Rest implements RestInterface
{
	public function findHTTP(string $method, string $url)
	{
		$curl = curl_init();
		curl_setopt_array($curl, array(
				CURLOPT_RETURNTRANSFER => 0,
				CURLOPT_URL => $url,
				CURLOPT_USERAGENT => 'Codular Sample cURL Request'
		));
		$resp = curl_exec($curl);
		curl_close($curl);
		return $resp;
	}

	
}

?>