<?php 

require_once 'src/bootstrap.php';


$show = new Src\Parser\Trigger(new Src\Parser\Parser());

$array = $show->find('https://www.gpw.pl/','id', ['mainMenu','grupaKapitalowa']);
foreach($array as $row)
{
	echo $row['mainMenu'].'<br>';
}
foreach($array as $row)
{
	echo $row['grupaKapitalowa'].'<br>';
}

$showRest = new Download\RepoAbstract\Trigger(new src\Rest);
$showRest->example('exampleREST');

?>