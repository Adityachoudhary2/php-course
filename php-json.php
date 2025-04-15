 <?php
//  $user=["name"=>"John", "age"=>30, "city"=>"New York"];
//  $userjson= json_encode($user);
//  echo $userjson
 
 
$data = '{"name":"John", "age":30, "city":"New York"}';
$dataArray =json_decode($data, true);
echo $dataArray["name"]."<br>";
 ?>