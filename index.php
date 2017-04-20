<?php 
use src\Client;

require_once 'src/bootstrap.php';

$show = new Client();
//echo $show->check('http://www.sklep.bielawa.pl');
//$show->curlInitWithParam('www.sklep.bielawa.pl/show_one_product.php/',['id'=>'176']);
/*
$review = $show->checkByID('http://www.onet.pl/', ['boxNews' ]);
foreach($review as $row)
{
	echo $row['boxNews'];
}
*/



$array = $show->checkByClass('http://www.onet.pl/', ['boxContent']);
foreach ($array as $row)
{
	echo $row['boxContent'] . '<br>';
}


/*
print_r($show->checkAllId('https://www.gpw.pl/'));
*/
/*
$array = $show->checkAllClass('https://www.gpw.pl/');
foreach($array as $row)
{
	echo $row.'<br>';
}
*/
//$show->curlInitWithParamByTag('http://www.filmweb.pl/', ['ul']);
?>