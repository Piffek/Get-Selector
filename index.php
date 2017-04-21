<?php 
use src\Parser;

require_once 'src/bootstrap.php';

$show = new Parser();
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
$array = $show->checkByClass('https://www.gpw.pl/', ['iconBhWiadomosci']);
foreach ($array as $row)
{
	echo $row['iconBhWiadomosci'];
}

*/
/*
print_r($show->checkAllId('https://www.gpw.pl/'));
*/

$array = $show->find('https://www.gpw.pl/','id', ['mainMenu']);
foreach($array as $row)
{
	echo $row['mainMenu'].'<br>';
}


//$show->curlInitWithParamByTag('http://www.filmweb.pl/', ['ul']);
?>