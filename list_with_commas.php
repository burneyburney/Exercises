<!-- Michael Burney -->
<!-- March 3rd 2016 -->
<!-- list_with_commas.php -->
<?php

$famousFakePhysicists = [];
$physicistsString = 'Gordon Freeman, Samantha Carter, Sheldon Cooper, Quinn Mallory, Bruce Banner, Tony Stark';
$array = explode(", ", $physicistsString);




function humanizedList($array){

	$string2 = array_pop($array);

	$string = implode(", ", $array);

	$var = $string . ' and ' . $string2;

 	echo "Some of the most famous fictional theoretical physicists are {$var}." . PHP_EOL;
 };


humanizedList($array);