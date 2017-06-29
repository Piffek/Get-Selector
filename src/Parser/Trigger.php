<?php 
namespace Src\Parser;
use Src\Exception;


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
	public function checkMethod(string $url = NULL, $what = NULL, $params=NULL, $selectors = NULL){
			return $this->parser->find($url,$what, $params, $selectors);
	}
	
}
