<?php 

require_once 'src/bootstrap.php';

use Piffek\WebsiteParser\Hand;

$parser = new Hand(new Piffek\WebsiteParser\FindParam);

$array = $parser->get('https://webpage.pl/', 'id', ['this_id']);

echo $array[0]['this_id'];