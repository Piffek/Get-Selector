<?php 
use src\Parser;

require_once 'src/bootstrap.php';

$show = new Parser();
//echo $show->check('http://www.sklep.bielawa.pl');
//$show->curlInitWithParam('www.sklep.bielawa.pl/show_one_product.php/',['id'=>'176']);
/*
$review = $show->checkByID('http://www.onet.pl/', ['boxNews' ]);
foreach($review as $row)
{
	echo $row['boxNews'];
}
*/

<<<<<<< HEAD
/*
$array = $show->checkByClass('https://www.gpw.pl/', ['iconBhWiadomosci']);
foreach ($array as $row)
{
	echo $row['iconBhWiadomosci'];
}
=======


$array = $show->checkByClass('http://www.onet.pl/', ['boxContent']);
foreach ($array as $row)
{
	echo $row['boxContent'] . '<br>';
}

>>>>>>> 2d9264c2b9a07e614cbc089815c0e8984693f0b2

*/
/*
print_r($show->checkAllId('https://www.gpw.pl/'));
*/
<<<<<<< HEAD

$array = $show->find('class',['iconBhWiadomosci'],'h3','https://www.gpw.pl/');
=======
/*
$array = $show->checkAllClass('https://www.gpw.pl/');
>>>>>>> 2d9264c2b9a07e614cbc089815c0e8984693f0b2
foreach($array as $row)
{
	echo $row['iconBhWiadomosci'].'<br>';
}
<<<<<<< HEAD


/*$array = $show->checkAllClass('https://www.gpw.pl/');
foreach($array as $row)
{
	echo $row.'<br>';
}*/
=======
*/
>>>>>>> 2d9264c2b9a07e614cbc089815c0e8984693f0b2
//$show->curlInitWithParamByTag('http://www.filmweb.pl/', ['ul']);
?>