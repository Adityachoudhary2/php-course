 <?php
  

//   break case ------------------------------

//   $user_need = 5;
//  for($i=0; $i<=10; $i++){
//     echo $i;
//     echo "<br>";
//     if($i==$user_need){
//         break;
//     }

//  }


// continue case ------------------------------

for($i=0; $i<10; $i++){
    if($i==3  || $i==5){
        continue; // skip the current iteration when $i is 3

    }
    echo $i;
    echo "<br>";

}
 ?>