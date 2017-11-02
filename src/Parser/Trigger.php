<?php 

namespace Piffek\WebsiteParser;

use Piffek\WebsiteParser\Exception;
use Piffek\WebsiteParser\ParserInterface;

/**
 * Userfriendly method.
 */
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
     * @param string $url      name of webpage.
     * @param string $selector id or class.
     * @param array  $params   name of id or class.
     * @param string $tag      optional (div, br etc...).
     * @return \DOMDocument
     * @throws Exception
     */
    public function get(string $url = null, $selector = null, $params = null, $tag = null)
    {
        try{
            return $this->parser->find($url, $selector, $params, $tag);
        } catch(Exception $e) {
            echo $e->getMessage();
        }
    }
}