<?php 
use src\Client;

require_once 'src/run.php';

$show = new Client;
$show->open('www.google.pl');

?>