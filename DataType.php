<!-- <?php
// Data types in PHP

$string = "Hello, World!"; // string
$integer = 123;            // integer
$float = 3.14;             // float
$boolean = true;           // boolean
$array = array(1, 2, 3);   // array
$object = new stdClass();  // object// resource
$null = null;              // null
?> -->


 <?php
 
    $name = "DataType";
    $age = 25; 
    $height = 5.9;
    $isStudent = true;
    $hobbies = array("reading", "coding", "hiking");
    $nothing = null;



    // Displaying the values and their types using var_dump----------

    echo var_dump($name); // string(8) "DataType"
    echo var_dump($age); // int(25)
    echo var_dump($height); // float(5.9)
    echo var_dump($isStudent); // bool(true)
    echo var_dump($hobbies); // array(3) { [0]=> string(6) "reading" [1]=> string(6) "coding" [2]=> string(6) "hiking" }
    echo var_dump($nothing); // NULL
 ?>
