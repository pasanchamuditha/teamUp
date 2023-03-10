<?php
        $conn = mysqli_connect("localhost", "root", "", "teamup");

        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. "
                . mysqli_connect_error());
        }

        // Taking all 5 values from the form data(input)
        $email = $_POST['email'];
        $password = $_POST['password'];

        // We are going to insert the data into our sampleDB table
        
        $sql= "SELECT * FROM user WHERE email = '$email' AND password = '$password' ";
        $result = mysqli_query($conn,$sql);
        $check = mysqli_fetch_array($result);
    if(isset($check)){
        echo "suecess";
    //   header("Location: userdashboard.php");
    }else{
    echo 'failure';
    }

   mysqli_close($conn);
