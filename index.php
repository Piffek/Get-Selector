<?php 

require_once 'src/bootstrap.php';


$show = new Src\Parser\Trigger(new Src\Parser\Parser);
/*
$array = $show->find('https://www.gpw.pl/', 'id');
foreach($array as $row)
{
	echo $row.'<br>';
}
*/

$rest = new Src\Rest\Trigger(new Src\Rest\Rest);
$restHTML = $rest->find('GET', 'http://www.sklep.bielawa.pl');




?>