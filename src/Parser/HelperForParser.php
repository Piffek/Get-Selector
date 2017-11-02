<?php 

namespace Piffek\WebsiteParser;

use DOMXPath;

/**
 * Get node all website but add to array only choose selector.
 */
class HelperForParser
{
    
    /**
     * Make selector if not exist.
     * 
     * @param string $tag div, br.
     * @return string string
     */
    public function tag($tag)
    {
        $tags = isset($tag) ? $tag : '*';
        
        return $tags;
    }

    /**
     * Make parameters if not exists
     * 
     * @param string $what class or id.
     * @return string
     */
    public function selector(string $what) : string
    {
        $selector = isset($what) ? $what : '';
        
        return $selector;
    }
    
    /**
     * Get selector and add to userfriendly array.
     * 
     * @param array    $params   name of id or class.
     * @param string   $selector id or class.
     * @param DOMXPath $dom      node of whole page.
     * @param string   $tag      optional (div, br etc...).
     * @return array
     */
    public function loop(array $params, string $selector, DOMXPath $dom, $tag) : array
    {
        if (is_array($params)) {
            $review = array();
            foreach ((array)$params as $param) {
                $results = $dom->query(
                    "//".$this->tag($tag).
                    "[@".$this->selector($selector).
                    "='" . $param . "']"
                );
                for ($i=0; $results->length > $i; $i++) {
                    $review[$i][$param] = $results->item($i)->nodeValue;
                }
            }
            
            return $review;
            
        } else {
            $review = array();
            $result = $dom->query("//*[@".$this->what($what)."]");
            for ($i=0; $result->length > $i; $i++) {
                $review[] = $result->item($i)->nodeValue.'<br>';
            }
            return $review;
        }
    }
    
    /**
     * Checking globally CURL options.
     * 
     * @param CURL $ch parse url.
     * @return void
     */
    public function checkCurlOptions($ch)
    {
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
        curl_setopt($ch, CURLOPT_TIMEOUT, 3);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
    }
}