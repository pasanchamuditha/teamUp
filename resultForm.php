<?php
        $conn = mysqli_connect("localhost", "root", "", "teamup");

        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. "
                . mysqli_connect_error());
        }

        // Taking all 5 values from the form data(input)
        $computer_projects = $_REQUEST['computer_projects'];
        $aerospace_projects = $_REQUEST['aerospace_projects'];
        $chemical_projects = $_REQUEST['chemical_projects'];
        $mechanical_projects = $_REQUEST['mechanical_projects'];
        $ongoing_projects = $_REQUEST['ongoing_projects'];
        $field_project = $_REQUEST['field_project'];
        $university_projects = $_REQUEST['university_projects'];
        $leadership_role = $_REQUEST['leadership_role'];
        $gender = $_REQUEST['gender'];
        $persanality = $_REQUEST['persanality'];
        $contribute_finansal = $_REQUEST['contribute_finansal'];
        $english_proficiency = $_REQUEST['english_proficiency'];

        // We are going to insert the data into our sampleDB table
        
        $sql = "INSERT INTO register_projects (computer_projects, aerospace_projects, chemical_projects,mechanical_projects,ongoing_projects,field_project,university_projects,leadership_role,gender,persanality,contribute_finansal,english_proficiency) VALUES ('$computer_projects','$aerospace_projects','$chemical_projects','$mechanical_projects','$ongoing_projects','$field_project','$university_projects','$leadership_role','$gender','$persanality','$contribute_finansal','$english_proficiency');";

        // Check if the query is successful
        if(mysqli_query($conn, $sql)){
            header("Location: userdashboard.php?computer_projects=".$computer_projects."&aerospace_projects=".$aerospace_projects);
            exit();
        } else{
            echo "ERROR: Hush! Sorry $sql. "
                . mysqli_error($conn);
        }

        // Close connection
        mysqli_close($conn);

        ?>

