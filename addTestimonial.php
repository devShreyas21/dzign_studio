<?php

    if(($_POST['name']=="") or ($_POST['email']=="") or ($_POST['testimonial']=="")){
        header("location:writeTestimonial.php?message='Please do not keep fields empty'");
    }
    else{

        $admin="shruti@gmail.com";
        $header="From: shruti@gmail.com";
    
        $name=$_POST['name'];
        $email=$_POST['email'];
        $testimonial=$_POST['testimonial'];
    
        $servername = "localhost:3306";
        $username = "root";
        $password = "";
        $dbname = "dzign_story";
    
        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
        }
    
        $sql = "INSERT INTO testimonials (name, email, testimonial)
        VALUES ('$name', '$email', '$testimonial')";
    
        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
    
            // to, subject, message, header=from
            // mail($admin,"A new testimonial.", $query, $header);
    
            header("location:index.php");
        } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
        }
    
        $conn->close();
    }



?>