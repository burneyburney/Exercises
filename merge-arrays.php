<?php



$names = ['Tina', 'Dana', 'Mike', 'Amy', 'Adam', 'added4' , 'added5'];

$compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael', 'added1' , 'added2' , 'added3' ];

function isInArray($value, $array){
	$name = array_search($value, $array);
	if ($name === FALSE){
		return FALSE;

	} else {
		 return TRUE;
	}
}



echo isInArray('Tina', $names) . PHP_EOL;
echo isInArray('Bob', $names). PHP_EOL;

function compareArrays($array1, $array2){
	$namesMessage = 0;
	foreach($array1 as $key => $value){
		$check = array_search($value, $array2);
		if ($check !== FALSE){
			$namesMessage++;
		}
	}
	return $namesMessage;
}

echo compareArrays($compare, $names) . PHP_EOL;









// function combineArrays($names , $compare){

// empty array
$fillmeup = [];

// iterate through array
for ($i = 0; $i < count($names) || $i < count($compare); $i++ ){

	// if values are same add ONCE
	if ($names[$i] == $compare[$i]){
		array_push($fillmeup, $compare[$i]);

	// if values are different then add
	} else if ($names[$i] != $compare[$i]){
			if ($names[$i] == ''){

			}
			array_push($fillmeup, $names[$i]);
			array_push($fillmeup, $compare[$i]);
		}
	}



print_R($fillmeup);



/*  proper answer
function mergeArrays($firstArray, $secondArray){
	$combinedArray = [];
		foreach($firstArray as $key => $value){
			if($firstArray[$key] == $secondArray[$key]){
				$combinedArray[] = $firstArray[$key];
			} else {
				$combinedArray[] = $firstArray[$key];
				$combinedArray[] = $secondArray[$key]
			}
		}
		return $combinedArray;
}
$result = mergeArrays($names, $compare)

print_r($result);
*/