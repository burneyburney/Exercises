<?php

$x = 0;
$y = 5;
$z = 10;

// TODO:
if($x < $y && $y < $z){
  echo "{$x} < {$y} < {$z}\n";
}
// TODO:

// If 0 is less than $x OR $x is less than 10
if(0 < $x || $x < 10){
// then echo the result as a sentence "0 is less than {$x} OR {$x} is less than 10".
	echo "0 is less than {$x} OR {$x} < 10\n";
}
// TODO:
// repeat the if statement for $y and $z.
if(0 < $y || $y < 10){
	echo "0 is less than {$y} OR {$y} < 10\n";
}

if(0 < $z || $z < 10){
	echo "0 is less than {$z} OR {$z} < 10\n";
}

// TODO:
// If 0 is less than $x AND $x is less than 10
if(0 < $x && $x < 10){
	echo "0 is less than {$x} AND is less than 10\n";
}

if(0 < $y && $y < 10){
	echo "0 is less than {$y} AND is less than 10\n";
}

if(0 < $z && $z < 10){
	echo "0 is less than {$z} AND is less than 10\n";
}
// then echo the result as a sentence "0 is less than {$x} AND {$x} is less than 10".

// TODO:
// repeat the if statement for $y and $z.
