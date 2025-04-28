<?php
$host="localhost"; // Host name
$username="root"; // Mysql username
$password= null; // Mysql password


$conn = new PDO("mysql:host=$host;dbname=college", $username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
// echo "✅ Connected to database successfully<br>";



?>