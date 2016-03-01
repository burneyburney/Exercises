<!-- switch.php -->

<?php

// Set the default timezone
date_default_timezone_set('America/Chicago');

 // Get Day of Week as number
 // 1 (for Monday) through 7 (for Sunday)
 $dayOfWeek = date('N');

 switch($dayOfWeek) {
     case 1:
         // Output Monday
     	fwrite(STDOUT, "Mondayyy");
     	break;
     case 2:
         // Output Tuesday
     	fwrite(STDOUT, "Tuesday..");
     	break;
     case 3:
         // Output Wednesday
     	fwrite(STDOUT, "Wednesday.........");
     	break;
     case 4:
         // Output Wednesday
     	fwrite(STDOUT, "Thursday 8)");
     	break;
     case 5:
         // Output Wednesday
     	fwrite(STDOUT, "Friday it's FRIDAY!");
     	break;
     case 6:
         // Output SATURDAY!!!!
     	fwrite(STDOUT, "SATURDAY!!!!");
     	break;
     case 7:
         // Output Sunday
     	fwrite(STDOUT, "Sunday.");
     	break;
 }



?>


<!-- end of switch.php -->