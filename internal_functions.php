<?php
// TODO: Create your inspect() function here
function inspect($x){
	// check if STRING and is EMPTY
	if(is_string($x) && $x == ""){
		echo "The String is empty" . PHP_EOL;

	// check if ARRAY
	} else if (is_array($x)){		
		if (empty($x) == '1'){
			echo "The array is EMPTY" . PHP_EOL;
		} else {
			echo "The value is an array" . PHP_EOL;
			// foreach iteration through ARRAY
			foreach($x as $i){
				echo $i . PHP_EOL;
			}
		}

	// check if value is NULL
	} else if ($x === null){
		echo "The value is NULL" . PHP_EOL;

	// check if BOOLEAN
	} else if(is_bool($x)){

		// return TRUE or FALSE
		if (is_bool($x) == '1'){
		echo "The value is: " . 'TRUE' . PHP_EOL;
		} else {
		echo "The value is: " . 'FALSE' . PHP_EOL;
		}

	// display TYPE and VALUE
	} else{
		echo "Type is: " . gettype($x) . " ------- Value is: {$x} " . PHP_EOL;
	}
};

// Do not mofify these variables!
$string1 = "I'm a little teapot";
$string2 = '';
$array1 = [];
$array2 = [1, 2, 3];
$bool1 = true;
$bool2 = false;
$num1 = 0;
$num2 = 0.0;
$num3 = 12;
$num4 = 14.4;
$null = NULL;



// run it BACK TO BACK
echo 'Inspecting $num1:' . PHP_EOL;
inspect($num1);

echo 'Inspecting $num2:' . PHP_EOL;
inspect($num2);

echo 'Inspecting $num3:' . PHP_EOL;
inspect($num3);

echo 'Inspecting $num4:' . PHP_EOL;
inspect($num4);

echo 'Inspecting $null:' . PHP_EOL;
inspect($null);

echo 'Inspecting $bool1' . PHP_EOL;
inspect($bool1);

echo 'Inspecting $bool2' . PHP_EOL;
inspect($bool2);

echo 'Inspecting $string1' . PHP_EOL;
inspect($string1);

echo 'Inspecting $string2' . PHP_EOL;
inspect($string2);

echo 'Inspecting $array1' . PHP_EOL;
inspect($array1);

echo 'Inspecting $array2' . PHP_EOL;
inspect($array2);
