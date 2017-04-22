<?php

namespace Piffek\WebsiteParser;

use DOMDocument;

interface HtmlParserInterface
{
    /**
     * Parse HTML string to nice, usable objects.
     *
     * @param  string $html
     * @return \DOMDocument
     */
    public function parse(string $html) : DOMDocument;
}
