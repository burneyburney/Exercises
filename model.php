<?php
//  Michael Burney
//  model.php
//  9.2.4

class Data
{
    // empty array
    private $data = [];
    protected static $table = 'Darth Vader';

    // populate the data array, magic setter
    public function __set($name, $value)
    {
        // Set the $name key to hold $value in $data
        $this->data[$name] = $value;
    }

    // Magic getter to retrieve values from $data
    public function __get($name)
    {
        // Check for existence of array key $name
        if (array_key_exists($name, $this->data)) {
            return $this->data[$name];
        }
        // if it gets here return NULL
        return null;
    }

}

// THIS IS A OBJECT MOFO!
$test_data = new Data();
// we gave it some stuff
$test_data->information = 'string of information';
$test_data->moreInformation = 'additional information';

// now we wanna see it on the screen
var_dump($test_data);


?>
