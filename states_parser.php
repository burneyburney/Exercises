<?php
// ` in the states.csv file
// write an array of associative arrays where each state's abbrevation as a key and the name as a value




// ask to input filename
echo "Please Input a filename \n > ";

// get filename and trim whitespace
$filename = trim(fgets(STDIN));

// starts cursor at beginning (listening to stream)
// set it to read only  / 'r'
$handle = fopen($filename, 'r');

// read contents from the handle to the end of the file
// look @ filesize($filename) = it reads the current size of the file
$contentString = fread($handle, filesize($filename));

// trim contentstring BEFORE we explode it
$contentString = trim($contentString);


// we need to close the file
fclose($handle);

// convert the single string into an array of strings
$arrayOfStrings = explode(PHP_EOL, $contentString);

// anytime running through array, we should foreach
foreach($arrayOfStrings as $string){

	$stateASsociativeArray = [];

	// explode $string on comma
	$stateInfo = explode(",", $string);

	$abbrevation = $stateInfo[0];
	$stateName = $stateInfo[1];

	$stateAssociativeArray[$abbrevation] = $stateName;

	// new array 
	$arrayOfStates[] = $stateAssociativeArray;

	print_r($stateAssociativeArray);

}
// need handle = string structuraly similar to a string, {konami code}, as we got interaction from user


// $states = [ 
// 	['TX' => 'Texas'],
// 	['UT' =>  'Utah']


// ];
