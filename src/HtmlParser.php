<?php

namespace Piffek\WebsiteParser;

use DOMDocument;

class HtmlParser implements HtmlParserInterface
{
    /**
     * Parse HTML string to nice, usable objects.
     *
     * @param  string $html
     * @return \DOMDocument
     */
    public function parse(string $html) : DOMDocument
    {
        $dom = new DOMDocument;

        @$dom->loadHTML($html);

        return $dom;
    }
}
