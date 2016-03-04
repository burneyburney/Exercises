<?php


function logMessage($logLevel, $message)
{
    $dateTime = getdate();
    $filename = 'log-YYYY-MM-DD.log';
    $handle = fopen($filename, 'a');
    foreach($dateTime as $dt){
    	// echo $dateTime . PHP_EOL;
    	echo $dt . PHP_EOL;
    };

}

logMessage("INFO", "This is an info message.");
logMessage("ERROR", "This is an info message.");


// Log to a file named log-YYYY-MM-DD.log where the Y, M, and D values are the 4-digit year, 
// 	2-digit month, and 2-digit day that the log is taking place.

print_r(getdate());

// If the log file for a given day does not yet exist, it should be created. 
// 	If it already exists, it should be appended to.

// Newer logs should appear at the end of the log file.


// The line starts with a date and time. Next is the $logLevel, 
//	 followed by the $message. Each log entry should be on its own line.


//  ---------------------------------------------------->>>
// write to a file
//  make sure... if file doesnt exist, we are creating it
//  append to it

//  use php... DATE function to get date WHEN script is running 
//  ------------------------------------------------------->>