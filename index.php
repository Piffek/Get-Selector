<?php 
use src\Client;

require_once 'src/bootstrap.php';

$show = new Client();
//$show->curlINIT('http://www.sklep.bielawa.pl');
//$show->curlInitWithParam('www.sklep.bielawa.pl/show_one_product.php/',['id'=>'176']);
//$show->checkDOMWithParamById('http://stackoverflow.com/questions/18182857/using-php-dom-document-to-select-html-element-by-its-class-and-get-its-text', ['question-header']);
//$show->checkDOMWithParamByClass('https://www.gpw.pl/', ['banner02','content']);
$show->checkDOMallIdWithHTML('https://www.gpw.pl/');
//$show->curlInitWithParamByTag('http://www.filmweb.pl/', ['ul']);
?>