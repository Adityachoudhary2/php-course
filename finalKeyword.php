 <?php
    // This is a simple PHP script to demonstrate the use of the final keyword
 echo "Final Keyword in PHP\n";
echo "<br>";

//  final class honda{

//  }
//  class car extends honda{
  
//  }

class Honda {
   final  function companyName() {
        echo "Honda";
    }

}
class Car extends Honda {
    function companyName() {
        echo "Honda city";
    }
   
    }   

    $car = new Car();
    $car->companyName();

 ?>