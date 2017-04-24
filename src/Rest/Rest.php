<?php 
namespace Src\Rest;
use Src\Rest\RestInterface;


class Rest
{
	protected  $function;
	public function __construct($function){
		$this->function = $function;
	}
	
	public function findMethod($url, $method)
	{
		if(method_exists(self::class,$this->function))
		{
			return $this->{$this->function}($url, $method);
		}
	}
	
	public function findHTTP(string $url ,string $method)
	{
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
	
	public function header(string $url)
	{
		$curl = curl_init();
		curl_setopt_array($curl, array(
				CURLOPT_NOBODY => 1,
				CURLOPT_HEADER => 1,
				CURLOPT_URL => $url,
		));
		$resp = curl_exec($curl);
		curl_close($curl);
	}
	public function info($url)
	{
		$curl = curl_init($url);
		echo '<pre>';
		print_r(curl_getinfo($curl));
		echo '</pre>';
		curl_close($curl);
	}

	
}

?>