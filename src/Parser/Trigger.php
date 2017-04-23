<?php 
namespace Src\Parser;
use Src\Exception;

class Trigger extends Exception
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
	public function find(string $url, $what = NULL, $params=NULL, $selectors = NULL)
	{
		try {
			
			return $this->parser->findParam($url,$what, $params, $selectors);
			
		} catch (DOMException $e) {
			throw new ParsingException('Invalid HTML provided', 0, $e);
		} catch (ClientException $e) {
			throw new ParsingException(sprintf('Cannot access page at [%s]', $url), 0, $e);
		} catch (RuntimeException $e) {
			throw new ParsingException('Cannot read page contents', 0, $e);
		}
	}
	
}
?>