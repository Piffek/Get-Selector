<?php 
namespace Download\Load;
abstract class Download
{
	public function check($url)
	{
		$ch = curl_init($url);
		curl_exec($ch);
	}

}
?>