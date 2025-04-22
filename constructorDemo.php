 <?php
 class ConstructorDemo{
    public $name;
   function __construct(){
        $this->name=$name;


    }
    function displayName(){
        echo "Name is: " . $this->name . "<br>";
    }
 }
 
$cd= new ConstructorDemo("John Doe");
$cd->displayName(); // Output: Name is: John Doe
 ?>