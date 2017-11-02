<?php 

namespace Piffek\WebsiteParser;

use DOMDocument;
use DOMXPath;

/**
 * Find url and param and add to curl.
 */
class FindParam extends HelperForParser implements ParserInterface
{
    /**
     * Find param which add user.
     *
     * @param string $url      name of webpage.
     * @param string $selector id or class.
     * @param array  $params   name of id or class.
     * @param string $tag      optional (div, br etc...).
     *
     * @return array
     */
    public function find(string $url, string $selector, array $params, $tag)
    {
        $ch =  curl_init($url);
        $this->checkCurlOptions($ch);
        $f = curl_exec($ch);
        $domdocument = new DOMDocument;
        $searchPage = mb_convert_encoding($f, 'HTML-ENTITIES', "UTF-8");
        @$domdocument->loadHTML($searchPage);
        $dom = new DOMXPath($domdocument);
    
        return $this->loop($params, $selector, $dom, $tag); 
    }
}
