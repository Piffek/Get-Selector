<?php 
use src\Client;

require_once 'src/bootstrap.php';

$show = new Client();
//echo $show->check('http://www.sklep.bielawa.pl');
//$show->curlInitWithParam('www.sklep.bielawa.pl/show_one_product.php/',['id'=>'176']);

/*$review = $show->checkByID('https://www.gpw.pl/', ['mainMenu', 'header' ]);
foreach($review as $row)
{
	echo $row['mainMenu'].'<br>';
}

foreach($review as $row)
{
	echo $row['header'].'<br>';
}
*/

/*
$array = $show->checkByClass('https://www.gpw.pl/', ['box']);
foreach ($array as $row)
{
	echo $row['box'];
}
*/

/*
print_r($show->checkAllId('https://www.gpw.pl/'));
*/

$array = $show->checkAllClass('https://www.gpw.pl/');
foreach($array as $row)
{
	echo $row.'<br>';
}
//$show->curlInitWithParamByTag('http://www.filmweb.pl/', ['ul']);
?>