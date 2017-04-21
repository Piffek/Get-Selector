<?php 
namespace Download\RepoAbstract;

class Core
{
	protected $class;
	public function __construct($class)
	{
		$this->class = $class;
	}
	
	
	/*
	 * parse the webside
	 * $what = string
	 * $param = array
	 * $selectors = string
	 * $url = string
	 */
	public function find($url,$what = NULL, $params=NULL, $selectors = NULL)
	{
		return $this->class->findParam($url,$what, $params, $selectors);
	}
	
	/*
	 * check the webside
	 * $url = string
	 */
	public function check($url){
		return $this->class->checkCurl();
		
	}
	
	/*
	 * check the webside
	 * $url = string
	 * $param = array assoc
	 */
	public function checkWithParam($url,$param)
	{
		return $this->class->checkCurlWithParam($url,$param);
	}
	
	
	
	/*
	 * check the webside
	 * $url = string
	 * $param = array
	 */
	public function checkByTag($url,$params)
	{
		return $this->class->checkCurlByTag($url, $params);
	}
	
	public function example($param)
	{
		return $this->class->ex($param);
	}
	
	
}
?>