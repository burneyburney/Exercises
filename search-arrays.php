<?php



$names = ['Tina', 'Dana', 'Mike', 'Amy', 'Adam'];

$compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael'];

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