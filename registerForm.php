<?php
        $conn = mysqli_connect("localhost", "root", "", "teamup");

        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. "
                . mysqli_connect_error());
        }

        // Taking all 5 values from the form data(input)
        $full_name = $_REQUEST['full_name'];
        $user_name = $_REQUEST['user_name'];
        $student_id = $_REQUEST['student_id'];
        $email = $_REQUEST['email'];
        $password = $_REQUEST['password'];

        // We are going to insert the data into our sampleDB table
        
        $sql = "INSERT INTO user (full_name, user_name, student_id,email,password) VALUES ('$full_name','$user_name','$student_id','$email','$password');";

        // Check if the query is successful
        if(mysqli_query($conn, $sql)){
            header("Location: page1-2.html");
            exit();
        } else{
            echo "ERROR: Hush! Sorry $sql. "
                . mysqli_error($conn);
        }

        // Close connection
        mysqli_close($conn);

        ?>
