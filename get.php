<?php

$file = file("./entry.txt");

foreach($file as $key=>$value){
	echo ($key+1).",$value-";
}
?>
