<?php 

require_once 'src/bootstrap.php';

$parser = new Piffek\WebsiteParser\Trigger(new Piffek\WebsiteParser\FindParam());

$array = $parser->get('https://webpage.pl/', 'id', ['this_id']);
echo $array[0]['this_id'];

?>
