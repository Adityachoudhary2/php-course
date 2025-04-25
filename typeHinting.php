 <?php
//  function  fruit(array | string $name){
//         // echo "I like $name <br>";
//         echo count($name);


//  }
//  fruit("apple");



 class  fruits{
    function getName(string $name){
        echo "I like $name <br>";
    }
 }
$f1= new fruits();
$f1->getName("apple");

 ?>