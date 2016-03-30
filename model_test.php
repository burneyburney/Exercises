<?php
require_once 'User.php';


define('DB_HOST', '127.0.0.1');
define('DB_NAME', 'parks_db');
define('DB_USER', 'vagrant');
define('DB_PASS', 'vagrant');

// Create a new user using the User model.

// Find the new user by its id.
//
// 1,Kelly,Miller,kmiller0@nyu.edu,PhGa55sAKKcc
// 2,Gary,Franklin,gfranklin1@wisc.edu,NqeSFX

$user = new User();
$user->first_name = "Kelly";
$user->last_name = "Miller";
$user->email = "kmiller@nyu.edu";
$user->password = "OOBYgucci";

[first_name=>'kelly',
first_name=>'kelly']

// $user->first_name = "Gary";
// $user->last_name = "Mcfatton";
// $user->email = "gmacBB@gfranklin.edu";
// $user->password = "gucciOOBY";
