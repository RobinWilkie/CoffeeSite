<?php

//Robin Wilkie
//built 16-12-16
//set variables for database connection
    $db = "robinwilkie";
    $username = "rob";
    $password = "1234";
    $table = "users";
    $servername = "localhost";

//set variables for form data
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $email = $_POST["email"];
    $pass = $_POST["password"];
    $message = $_POST["message"];

//make a connection to the database
    $conn = new mysqli($servername, $username, $password, $db);

//check connection is ok
    if($conn->connect_error){
        die("connection failed: " . $conn->connect_error); 
    }
    echo "Connected successfully";

//insert form values into table
    $sql = "INSERT INTO users (firstname, lastname, email, password, message) VALUES ('$firstname', '$lastname', '$email', '$pass', '$message')";

//check if values have been added successfully otherwise give an error message
    if($conn->query($sql) === TRUE){
        echo " New record created successfully";
    }
    else{
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
?>