<?php 
namespace Src\Parser;

interface ParserInterface
{
	public function findParam(string $url,$what, $params, $selectors);
}

?>