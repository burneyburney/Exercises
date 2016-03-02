<?php



function add($a, $b){
	if (is_numeric($a) && is_numeric($b)){
    	return $a + $b . PHP_EOL;
	}
	else {
		return throwErrorMessage($a, $b);
	}
}

function subtract($a, $b){
	if (is_numeric($a) && is_numeric($b)){
    	return $a - $b . PHP_EOL;
	} 
	else {
		return "Error! Error! Error! NUMBERS NEEDED" . PHP_EOL;		
	}
}

function multiply($a, $b){
	if (is_numeric($a) && is_numeric($b)){
    	return $a * $b . PHP_EOL;
	} 
	else {
		return "Error! Error! Error! NUMBERS NEEDED" . PHP_EOL;		
	}
}

function divide($a, $b){
	if (is_numeric($a) && is_numeric($b) && $a != 0 && $b != 0){
    	return $a / $b . PHP_EOL;
	} 
	else {
		return "Error! Error! Error! NUMBERS NEEDED NOT ZERO!" . PHP_EOL;		
	}
}

function modulus($a, $b){
	if (is_numeric($a) && is_numeric($b)){
    	return $a % $b . PHP_EOL;
	} 
	else {
		return "Error! Error! Error! NUMBERS NEEDED" . PHP_EOL;		
			return throwErrorMessage($a, $b, 'divisorError');
	}
} 

function throwErrorMessage($a , $b , $error = 'numberError'){
	if ($error == 'number'){
		return  "number problem {$a} {$b}"
	}else if ($error == 'divisorError'){
		return "no dividing by zero {$a} {$b}"
	}
}



echo add(1,z);
echo subtract(2,5);
echo multiply(2,3);
echo divide(2,0);
echo modulus(4,7);
