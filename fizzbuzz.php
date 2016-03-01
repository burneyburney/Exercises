<!-- michael burney -->
<!-- fizz buzz -->
<!-- feb 29th 2016 -->

<?php
// fizz buzz in php

// for loop
// multiples of 3
// 1 to 100
// 3 = fizz 5 = buzz  both = fizzbuzz
for($i = 1;$i < 100;$i++){

 	if ($i % 5 == 0 && $i % 3 == 0){
		echo "FizzBuzz\n";  
	} else if ($i % 5 == 0){
		echo "Buzz\n";
	} else if ($i % 3 == 0){
		echo "Fizz\n";
	}else  {
		echo "$i \n";
	}

}


?>