 <!--  to define mandatory features of child classes  -->

 <?php
 abstract class car{
    abstract function makeEngine();

 }
 class  Honda extends car{
    function makeEngine(){
        echo "Honda engine created";
    }
 }

 $product= new Honda();
 $product->makeEngine();
 
 ?>