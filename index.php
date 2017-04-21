<?php 
use src\Parser;
use Download\RepoAbstract\Core;
use src\Rest;
require_once 'src/bootstrap.php';


$show = new Core(new Parser);

$array = $show->find('https://www.gpw.pl/','id', ['mainMenu']);
foreach($array as $row)
{
	echo $row['mainMenu'].'<br>';
}

$showRest = new Core(new Rest);
$showRest->example('exampleREST');

?>