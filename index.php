<?php 
use src\Client;

require_once 'src/bootstrap.php';

$show = new Client();
$show->curlINIT('www.google.pl');
//$show->curlInitWithParam('www.sklep.bielawa.pl/show_one_product.php/',['id'=>'176']);

?>