 <?php
 include("./config.php");

 $getstudents=$conn->prepare("SELECT * FROM students");
 $getstudents->execute();
 $students=$getstudents->fetchAll();

 echo "<table border='4'>";
 echo "<tr>
 <th>ID</th>
 <th>Name</th>
 <th>Email</th>
 <th>City</th>
 <th>Course</th>
 <th>Batch</th>
 </tr>";
 foreach($students as $student){
    echo "<tr>
    <td>".$student['id']."</td>
    <td>".$student['name']."</td>
    <td>".$student['email']."</td>
    <td>".$student['city']."</td>
    <td>".$student['course']."</td>
    <td>".$student['batch']."</td>
</tr>";

}
echo "</table>";
 ?>