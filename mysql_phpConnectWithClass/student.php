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
        <th>City</th>
        <th>Course</th>
        </tr>";

        foreach ($result as $student) {
            echo "<tr>
            <td>" . $student['id'] . "</td>
            <td>" . $student['name'] . "</td>
            <td>" . $student['email'] . "</td>
            <td>" . $student['city'] . "</td>
            <td>" . $student['course'] . "</td>
            </tr>";
        }

        echo "</table>";
    }
}

$student = new Student($conn);
$student->getData();



?>