 <?php

//  pdo= php data object
 $host="localhost"; // Host name
 $username="root"; // Mysql username
 $password = null; // Mysql password


 try{
    $conn=new PDO("mysql:host=$host;dbname=college", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully"; // Connection successful message
 }catch(PDOException $err){
        echo "Connection failed:  $err->getMessage() "; // Connection failed message
    }

    echo "<br>";
    $result= $conn->query("show tables");
    while($row = $result->fetch(PDO::FETCH_NUM)){
        print_r($row);
    }
    
    
 ?>