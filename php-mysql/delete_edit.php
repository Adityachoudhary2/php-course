<?php
 include("./config.php");

 $students=$conn->prepare("SELECT * FROM students");
 $students->execute();
 $result=$students->fetchAll();

 echo "<table border='4'>";
 echo "<tr>
 <th>ID</th>
 <th>Name</th>
 <th>Email</th>
 <th>City</th>
 <th>Course</th>
 <th>Delete</th>
 <th>Edit</th>
 
 </tr>";
 foreach($result as $student){
    echo "<tr>
    <td>".$student['id']."</td>
    <td>".$student['name']."</td>
    <td>".$student['email']."</td>
    <td>".$student['city']."</td>
    <td>".$student['course']."</td>

    <td>
    <form  method='POST'>
    <button name='delete' value=".$student['id']."'>Delete</button>
    </form></td>
    <td><a href='update.php?id=".$student['id']."'>Edit</a></td>
    

    
</tr>";

}
echo "</table>";
if(isset($_POST['delete'])){
    $id=$_POST['delete'];
    $students=$conn->prepare("delete from students where id=:id");
    if($students->execute([':id'=>$id])){
        echo "Deleted successfully";
    }
}


 ?>