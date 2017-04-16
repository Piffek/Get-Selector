<?php 
namespace Download\Load;
abstract class Download
{
	public function check($url)
	{
		$ch = curl_init($url);
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_exec($ch);
		curl_close($ch);
	}
	
	public function checkWithParam($url, $param=[])
	{
		$name = array();
		$ch = curl_init($url);
		foreach($param as $key=>$par)
		{
			$name[] = '?'.$key.'='.$par;
		}
		$implodeParam = implode('',$name);
		curl_setopt($ch, CURLOPT_URL, $url.''.$implodeParam);
		curl_exec($ch);
		curl_close($ch);

	
	}

}
?>