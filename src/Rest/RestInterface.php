<?php 
namespace Src\Rest;

interface RestInterface
{
	/**
	 * Parse HTML string to nice, usable objects.
	 *
	 * @param  string $method
	 * @param  string $url
	 * 
	 */
	public function findHTTP(string $method, string $url);
}
?>