    <?php
     $users = ["Alice", "Bob", "Charlie", "David", "Eve", "Frank"]; 
     foreach ($users as $user){
        
        // continue 1; // Skip the first iteration
        if($user === "David"){
            continue;
        }

        echo $user . "<br>";
        
        // break 1; // Stop the loop when "David" is reached
        if($user === "Eve"){
            break; // Stop the loop when "David" is reached
        }
     }
    ?>