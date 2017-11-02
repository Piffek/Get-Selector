<?php 

namespace Piffek\WebsiteParser;

use DOMDocument;

/**
 * Interface for finding url and param.
 */
interface ParserInterface
{
    /**
     * Parse HTML string to nice, usable objects.
     *
     * @param string $url      name of webpage.
     * @param string $selector id or class.
     * @param array  $params   name of id or class.
     * @param string $tag      optional (div, br etc...).
     * @return DOMDocument
     */
    public function find(string $url, string $selector, array $params, $tag);
}