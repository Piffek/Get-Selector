<?php 
use src\Client;

require_once 'src/run.php';

$show = new Client;
//$show->cuINIT('www.google.pl');
$show->curlInitWithParam('www.sklep.bielawa.pl/show_one_product.php/',['id'=>'176']);

?>