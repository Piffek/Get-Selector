<?php 

require_once 'src/bootstrap.php';

$parser = new Src\Parser\Trigger(new Src\Parser\FindParam());

$array = $parser->checkMethod('https://www.gpw.pl/', 'id', ['this_id']);
echo $array[0]['this_id'];


?>
