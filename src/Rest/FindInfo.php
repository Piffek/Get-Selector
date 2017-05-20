<?php
namespace Src\Rest;
use Src\Rest\RestInterface;

class FindInfo implements RestInterface
{
	public function find(string $url, $method){
	
		$curl = curl_init($url);
		curl_setopt_array($curl, array(
				CURLOPT_RETURNTRANSFER => 1,
				CURLOPT_URL => $url,
				CURLOPT_TIMEOUT, 5
		));
		curl_exec($curl);
		echo '<pre>';
		print_r(curl_getinfo($curl));
		echo '</pre>';
		curl_close($curl);
	}
}