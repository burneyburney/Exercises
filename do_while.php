<?php
// Michael Burney
// do_while.php
// Feb 29, 2016



// Create a do-while loop that will count by 2's starting with 0 and ending at 100.
$number = 0;
do {
	echo "\$number = $number\n";
	$number += 2;

}while($number <= 100);

// Alter your loop to count backwards by 5's from 100 to -10.
$number2 = 100;
do {
	echo "actually its $number2\n";
	$number2 -= 5;
}while($number2 >= -10);

// Create a do-while loop that starts at 2, and displays the result $a * $a on each line while $a is 
// less than 1,000,000.
$number3 = 2;
do{
	echo "another number $number3\n";
	$number3 = $number3 * $number3;
}while($number3 < 1000000);