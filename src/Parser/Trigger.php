<?php 
namespace Src\Parser;

class Trigger
{
	protected $parser;
	public function __construct(Parser $parser)
	{
		$this->parser= $parser;
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
		return $this->parser->findParam($url,$what, $params, $selectors);
	}
	
}
?>