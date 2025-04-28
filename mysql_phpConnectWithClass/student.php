<?php
include 'config.php';

class Student {
    public $DBconn;

    function __construct($conn) {
        $this->DBconn = $conn;
    }

    function getData() {
        $getData = $this->DBconn->prepare("SELECT * FROM students");
        $getData->execute();
        $result = $getData->fetchAll();

        echo "<table border='4'>";
        echo "<tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Number</th>
        <th>City</th>
        <th>Course</th>
        </tr>";

        foreach ($result as $student) {
            echo "<tr>
            <td>" . $student['id'] . "</td>
            <td>" . $student['name'] . "</td>
            <td>" . $student['email'] . "</td>
            <td>" . $student['number'] . "</td>
            <td>" . $student['city'] . "</td>
            <td>" . $student['course'] . "</td>
            </tr>";
        }

        echo "</table>";
    }
    function insertDataWithRequest($request){
        // print_r($request);
        $name = $request['name'];
        $number = $request['number'];
        $email = $request['email'];
        $course = $request['course'];
        $city = $request['city'];

        $sqlQuery = "INSERT INTO students (id ,name, number, email, course, city) VALUES (null, '$name', '$number','$email', '$course', '$city')";
        $student = $this->DBconn->prepare($sqlQuery);
        $result=$student->execute();
        if($result){
            echo "Data Inserted successfully";
        }else{
            echo "Data not Inserted";
        }
    }
    function updateData(){
        $sqlQuery = "UPDATE students SET name='Cademy', number=9528950464";
        $student = $this->DBconn->prepare($sqlQuery);
        $result=$student->execute();
        if($result){
            echo " Update Data Inserted successfully";
        }else{
            echo " Update Data not Inserted";
        }
    }
    function deleteData(){
       $id=29;

        $sqlQuery = "DELETE FROM students WHERE id=$id";
        $student = $this->DBconn->prepare($sqlQuery);
        $result=$student->execute();
        if($result){
            echo " delete successfully";
        }else{
            echo " delete Data not Inserted";
        }
    }
}


$student = new Student($conn);
$student->getData();
// $student->insertData();
// $student->updateData();
// $student->deleteData();

if(isset($_POST['name'])){
    $student->insertDataWithRequest($_POST);
}

?>