<!-- {WORK IN PROGRESS } NEEDS WORK -->
<!-- foreach_books.php -->

<?php

$books = array(
    'The Hobbit' => array(
        'published' => 1937,
        'author' => 'J. R. R. Tolkien',
        'pages' => 310
    ),
    'Game of Thrones' => array(
        'published' => 1996,
        'author' => 'George R. R. Martin',
        'pages' => 835
    ),
    'The Catcher in the Rye' => array(
        'published' => 1951,
        'author' => 'J. D. Salinger',
        'pages' => 220
    ),
    'A Tale of Two Cities' => array(
        'published' => 1859,
        'author' => 'Charles Dickens',
        'pages' => 544
    )
);


// iterate through each book and then each book's keys and values.

// iterate through each book
foreach($books as $book){

	echo "{$book} title is {$books[$book]}" . PHP_EOL;

		foreach($book as $key => $value){

			echo "{$book} key is: {$key} AND value is: {$value}" . PHP_EOL;

		}

}

foreach ($books as $title =>){
	echo "title: " . $title . PHP_EOL;

	foreach ($book as $info => $value){
			echo "{$info}: $value"
	}

}



// Have it output the book's title, 
// then list the key value pairs for the data about each book.

?>

<!-- end of foreach_books.php -->


foreach ($books as $title => $book){
	if ($book['published'] > 1950){
		echo "title: " . $title . PHP_EOL;
		foreach ($book as $info => $value){
			echo "{$info}: $value";

	}

	echo PHP_EOL;

	echo "published: " ." $book
	}
}