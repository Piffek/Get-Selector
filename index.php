<?php 

require_once 'src/bootstrap.php';


$show = new Src\Parser\Trigger(new Src\Parser\Parser);

$array = $show->find('https://www.gpw.pl/','id', ['mainMenu','grupaKapitalowa']);
foreach($array as $row)
{
	echo $row['mainMenu'].'<br>';
}
foreach($array as $row)
{
	echo $row['grupaKapitalowa'].'<br>';
}

$rest = new Src\Rest\Trigger(new Src\Rest\Rest);
$rest->find('GET', 'https://www.gpw.pl/');

?>