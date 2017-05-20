<?php

namespace Src\Rest;
use Src\Rest\RestInterface;

class FindHttp implements RestInterface
{
	public function find(string $url, $method){
	
		$curl = curl_init();
		curl_setopt_array($curl, array(
				CURLOPT_ENCODING => 'deflate',
				CURLOPT_RETURNTRANSFER => 0,
				CURLOPT_URL => $url,
				CURLOPT_USERAGENT => 'Codular Sample cURL Request'
		));
		$resp = curl_exec($curl);
		curl_close($curl);
	}
}