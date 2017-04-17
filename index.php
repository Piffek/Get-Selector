<?php 
use src\Client;

require_once 'src/bootstrap.php';

$show = new Client();
//$show->curlINIT('http://www.sklep.bielawa.pl');
//$show->curlInitWithParam('www.sklep.bielawa.pl/show_one_product.php/',['id'=>'176']);
/*$review = $show->checkDOMWithParamById('https://www.gpw.pl/', ['contentArea','mainMenu']);
foreach($review as $rew)
{
	echo $rew['mainMenu'];
}*/
$array = $show->checkDOMWithParamByClass('https://www.gpw.pl/', ['box']);
foreach ($array as $row)
{
	echo $row['box'];
}
//print_r($show->checkDOMallIdWithHTML('https://www.gpw.pl/'));
//$show->checkDOMallClassWithHTML('https://www.gpw.pl/');
//$show->curlInitWithParamByTag('http://www.filmweb.pl/', ['ul']);
?>