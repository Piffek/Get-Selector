<?php

namespace Piffek\WebsiteParser;

use DOMDocument;

interface ParserInterface
{
    /**
     * Parse website given its url.
     *
     * @param  string $url
     * @return \DOMDocument
     *
     * @throws \Piffek\WebsiteParser\ParsingException
     */
    public function parse(string $url) : DOMDocument;
}
