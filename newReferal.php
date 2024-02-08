<?php

    if(($_POST['name']=="") or ($_POST['contact']=="") or ($_POST['referalName']=="") or ($_POST['referalContact']=="")){
        header("location:portfolio.php?message='Please do not keep fields empty'#referal");
    }

    else{

        $admin="shruti@gmail.com";
        $header="From: shruti@gmail.com";
    
        $name=$_POST['name'];
        $contact=$_POST['contact'];
        $referalName=$_POST['referalName'];
        $referalContact=$_POST['referalContact'];
    
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
    
        $sql = "INSERT INTO referal (name, contact, referalName, referalContact)
        VALUES ('$name', '$contact', '$referalName', '$referalContact')";
    
        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
    
            // to, subject, message, header=from
            // mail($admin,"A new referal.", $query, $header);
    
            header("location:portfolio.php");
        } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
        }
    
        $conn->close();
    }



?>