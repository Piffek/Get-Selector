<?php 
namespace Download;

interface HelpInterface
{
	public function selector($selectors);
	public function what($what);
	public function loop($params=[], $what, $dom,$selectors);
}


?>