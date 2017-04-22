<?php

namespace Piffek\WebsiteParser;

use DOMDocument;
use DOMException;
use RuntimeException;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\ClientException;

class Parser implements ParserInterface
{
    /** @var \GuzzleHttp\ClientInterface */
    protected $http_client;

    /** @var \Piffek\WebsiteParser\HtmlParserInterface */
    protected $html_parser;

    public function __construct(ClientInterface $http_client, HtmlParserInterface $html_parser)
    {
        $this->http_client = $http_client;
        $this->html_parser = $html_parser;
    }

    /**
     * Parse website given its url.
     *
     * @param  string $url
     * @return \DOMDocument
     *
     * @throws \Piffek\WebsiteParser\ParsingException
     */
    public function parse(string $url) : DOMDocument
    {
        try {
            $page = $this->http_client->get($url)->getBody();

            $html = $page->getContents();

            return $this->html_parser->parse($html);

        } catch (DOMException $e) {
            throw new ParsingException('Invalid HTML provided', 0, $e);
        } catch (ClientException $e) {
            throw new ParsingException(sprintf('Cannot access page at [%s]', $url), 0, $e);
        } catch (RuntimeException $e) {
            throw new ParsingException('Cannot read page contents', 0, $e);
        }
    }
}
