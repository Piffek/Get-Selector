<?php 
namespace App\Display;
use Download\Load\Download;

class Show extends Download
{
	public function open(){
		foreach($this->check() as $page)
		{
			echo $page;
		}
	}
}

?>