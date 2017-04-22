<?php 
namespace Src\Parser;

class Trigger
{
	protected $class;
	public function __construct($class)
	{
		$this->class = $class;
	}
	
	
	/**
	 * Parse website given its url.
	 *
	 * @param  string $url
	 * @return \DOMDocument
	 *
	 * @throws \Piffek\WebsiteParser\ParsingException
	 */
	public function find(string $url,$what = NULL, $params=NULL, $selectors = NULL)
	{
		return $this->class->findParam($url,$what, $params, $selectors);
	}
	
}
?>