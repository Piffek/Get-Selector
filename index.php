<?php 
use src\Client;

require_once 'src/bootstrap.php';

$show = new Client();
//$show->curlINIT('http://www.sklep.bielawa.pl');
//$show->curlInitWithParam('www.sklep.bielawa.pl/show_one_product.php/',['id'=>'176']);
$show->curlInitWithParamByID('http://www.filmweb.pl/', ['wrapperSite']);
//$show->curlInitWithParamByClass('http://www.filmweb.pl/', ['section__title']);
?>