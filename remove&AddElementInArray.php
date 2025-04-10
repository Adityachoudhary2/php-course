 <?php
   $users = ["John", "Jane", "Doe", "Smith", "Emily"];

   array_push($users, "Michael", "Sarah"); // Add elements to the end of the array
   array_unshift($users, "Alice", "Bob"); // Add elements to the beginning of the array
   array_splice($users, 2, 1); // Remove one element starting from index 2
   array_pop($users); // Remove the last element from the array

 ?>