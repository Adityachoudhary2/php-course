 <?php
 $host="localhost"; // Host name
 $username="root"; // Mysql username
 $password= null; // Mysql password
 $db_name="college"; // Database name


 $conn = new mysqli($host, $username, $password, $db_name);
 // Check connection
 if($conn->connect_error) {
     echo "Connection failed: ". $conn->connect_error;
    } else {
        echo "Connected successfully";
    }

 echo "<br>";
 $result=$conn->query("show tables")->fetch_all();
 print_r($result);
 
 ?>