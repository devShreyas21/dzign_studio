<?php

    if(($_POST['name']=="") or ($_POST['company']=="") or ($_POST['email']=="") or ($_POST['contact']=="") or ($_POST['query']=="") ){
        header("location:index.php?message='Please do not keep fields empty'#Requirement");
    }
  
    else{
        $admin="shruti@gmail.com";
        $header="From: shruti@gmail.com";
    
        $name=$_POST['name'];
        $company=$_POST['company'];
        $email=$_POST['email'];
        $contact=$_POST['contact'];
        $query=$_POST['query'];
    
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
    
        $sql = "INSERT INTO query (name, company, email, contact, query)
        VALUES ('$name', '$company', '$email', '$contact', '$query')";
    
        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
    
            // to, subject, message, header=from
            // mail($admin,"A new query.", $query, $header);
    
            header("location:index.php");
        } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
        }
    
        $conn->close();
    }



?>