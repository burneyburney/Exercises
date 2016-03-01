<!-- foreach.php -->

<?php

$things = array('Sgt. Pepper', "11", null, array(1,2,3), 3.14, "12 + 7", false, (string) 11);

foreach($things as $item){

	if ( is_scalar($item) ) {
		echo $item . PHP_EOL;

	}
	if (is_array($item)){
		foreach($item as $it){
			echo $it . PHP_EOL;
		}
	}

}

?>


<!-- end of foreach.php -->

