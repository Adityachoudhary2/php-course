 <?php
 //simple method
//  class Honda{
//     function companyName(){
//         echo "Honda";
//     }
//     //function 2
//  }

//  $Honda= new Honda();
//     $Honda->companyName();



//static method
class Honda {
    static function companyName() {
        echo "Honda";
    }
}
 Honda::companyName(); //calling static method


 ?>