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
	public function find(string $url, string $method);
}
?>