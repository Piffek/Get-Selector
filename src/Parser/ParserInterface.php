<?php 
namespace Src\Parser;
use DOMDocument;

interface ParserInterface
{
	/**
	 * Parse HTML string to nice, usable objects.
	 *
	 * @param  string $url
	 * @param  string $what
	 * @param  array $param
	 * @param  string $selectors
	 * @return \DOMDocument
	 */
	public function find(string $url,$what, $params, $selectors);
}

?>