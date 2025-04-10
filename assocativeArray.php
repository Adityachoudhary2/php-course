<?php
$userDetails = [
    "name" => "John Doe",
    "age" => 30,
    "city" => "New York",
    "gmail" => "abc@gmail.com",
    "phone" => "1234567890",
    "address" => [
        "street" => "123 Main St",
        "city" => "New York",
        "state" => "NY",
        "zip" => "10001",
    ],
];

// 1 method -----------------
// foreach($userDetails as  $key => $data){
//     echo $key . " is ". $data . "<br>";
// }


// 2 method -----------------
foreach($userDetails as  $key => $data):
echo $key . " is ". $data . "<br>";

endforeach;
  

// echo $userDetails["address"]["zip"]; // Output: 123 Main St
echo $userDetails["phone"]; // Output: 123 Main St
?>
 