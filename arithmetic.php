<?php

function add($a, $b)
{
    return $a + $b . PHP_EOL;
}

function subtract($a, $b)
{
	return $a - $b . PHP_EOL;
}

function multiply($a, $b)
{
	return $a * $b . PHP_EOL;	
}

function divide($a, $b)
{
	return $a / $b . PHP_EOL;	
}
function modulus($a, $b){
	return $a % $b . PHP_EOL;
}


echo add(1,3);
echo subtract(2,5);
echo multiply(2,3);
echo divide(10,4);
echo modulus(4,7);
