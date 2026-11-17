<?php
	echo "<h1> REFRESH PAGE</h1>";
	echo "<link rel='stylesheet' href='5.style.css'>";
	$file = 'count.txt';
	$c = file_get_contents($file);
	file_put_contents($file, $c+1);
	echo "The number of users visited:".$c ;
?>
