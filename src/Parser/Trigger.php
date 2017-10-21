<?php 
namespace Piffek\WebsiteParser;
use Piffek\WebsiteParser\Exception;
use Piffek\WebsiteParser\ParserInterface;


class Trigger extends Exception
{
	protected $parser;
	public function __construct(ParserInterface $parser)
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
	public function get(string $url = NULL, $what = NULL, $params=NULL, $selectors = NULL){
			return $this->parser->find($url,$what, $params, $selectors);
	}
	
}
