<?php
include './config.php';
$getStudent = $conn->prepare("SELECT id,name FROM students");
$getStudent->execute();
$studentData = $getStudent->fetchAll();

echo '<select >';
echo '<option value="">Select Student</option>';
foreach($studentData as $student){
  echo '<option value="'.$student['id'].'">'.$student['name'].'</option>';

}
echo '</select >';


?>