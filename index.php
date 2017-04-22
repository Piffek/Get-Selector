<?php 

require_once 'src/bootstrap.php';


$show = new Src\Parser\Trigger(new Src\Parser\Parser());

$array = $show->find('https://www.gpw.pl/','id', ['mainMenu']);
foreach($array as $row)
{
	echo $row['mainMenu'].'<br>';
}

$showRest = new Download\RepoAbstract\Trigger(new src\Rest);
$showRest->example('exampleREST');

?>