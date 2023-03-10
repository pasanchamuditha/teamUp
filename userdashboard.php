<?php
        $conn = mysqli_connect("localhost", "root", "", "teamup");

        if($_GET){
          $computer_projects =  $_GET['computer_projects'];  
          $aerospace_projects =  $_GET['aerospace_projects'];  

      }else{
        echo "Url has no user";
      }

        // Check connection
        if($conn === false){
            die("ERROR: Could not connect."
                . mysqli_connect_error());
        }
        
        $sql = "SELECT user.email,register_projects.computer_projects FROM user LEFT JOIN register_projects ON user.id = register_projects.user_id WHERE register_projects.computer_projects = $computer_projects and register_projects.aerospace_projects = $aerospace_projects";
        $result = $conn->query($sql);
        return $result;
        $conn->close();

        ?>
