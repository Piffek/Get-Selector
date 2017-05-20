<?php

namespace Src\Rest;
use Src\Rest\RestInterface;

class FindHeader implements RestInterface
{
	public function find(string $url, $method){
	
		$curl = curl_init();
		curl_setopt_array($curl, array(
				CURLOPT_NOBODY => 1,
				CURLOPT_HEADER => 1,
				CURLOPT_URL => $url,
		));
		$resp = curl_exec($curl);
		curl_close($curl);
	}
}