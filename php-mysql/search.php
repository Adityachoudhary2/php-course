<form action="" method="post">
    <input type="text" name="search" placeholder="Search...">
    <br>
    <br>
    <button>search</button>

</form>
<?php
include './config.php';
if(isset($_POST['search'])){
    $search = $_POST['search'];
    $student=$conn->prepare("SELECT * FROM students WHERE name LIKE :search");
    $search = $search . '%';
    $student->bindParam(':search', $search, PDO::PARAM_STR);
    $student->execute();
    $result = $student->fetchAll();
    echo "<table border='4'>";
    echo "<tr>
    <th>ID</th>
    <th>Name</th>
    <th>Email</th>
    <th>City</th>
    <th>Course</th>
    
    </tr>";
    foreach($result as $student){
       echo "<tr>
       <td>".$student['id']."</td>
       <td>".$student['name']."</td>
       <td>".$student['email']."</td>
       <td>".$student['city']."</td>
       <td>".$student['course']."</td>
   
   </tr>";
   
   }
   echo "</table>";
        }   
    


?>