<?php 
namespace Download\Load;
use \DOMDocument;
abstract class Download
{
	public function check($url)
	{
		try {
			$ch = curl_init($url);
			curl_setopt($ch, CURLOPT_URL, $url);
			curl_exec($ch);
			curl_close($ch);
		}catch(Exception $e){
				throw new Exception("Invalid URL",0,$e);
			}
	}
	
	public function checkWithParam($url, $param)
	{
		$name = array();
		$ch = curl_init($url);
		foreach($param as $key=>$par)
		{
			$name[] = '?'.$key.'='.$par;
		}
		$implodeParam = implode('',$name);
		curl_setopt($ch, CURLOPT_URL, $url.''.$implodeParam);
		curl_close($ch);
	}
	
	public function checkByID($url, $params)
	{
		$f = file_get_contents($url, false);
		$data=array();
		$dom = new DOMDocument();
		@$dom->loadHTML($f);
		foreach($params as $param)
		{
			$data = $dom->getElementById($param);
			$html2 = $dom->saveHTML($data);
			echo $html2;
		}
	}
	

}
?>