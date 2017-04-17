<?php 
use src\Client;

require_once 'src/bootstrap.php';

$show = new Client();
//echo $show->curlINIT('http://www.sklep.bielawa.pl');
//$show->curlInitWithParam('www.sklep.bielawa.pl/show_one_product.php/',['id'=>'176']);

print_r($review = $show->getWithParamsById('https://www.gpw.pl/', ['mainMenu'], 'body'));


/*
$array = $show->getWithParamsByClass('https://www.gpw.pl/', ['box']);
foreach ($array as $row)
{
	echo $row['box'];
}
*/
//$show->getAllId('https://www.gpw.pl/'));
/*
 * $array = $show->getAllClass('https://www.gpw.pl/');
foreach($array as $row)
{
	echo $row.'<br>';
}
*/
//$show->curlInitWithParamByTag('http://www.filmweb.pl/', ['ul']);
?>