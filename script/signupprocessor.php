<?php

require_once "config.php";


if(isset($_POST["username"]) && isset($_POST["email"]) && isset($_POST["password"])) {
   
    $username = trim($_POST["username"]);
    $email = trim($_POST["email"]);
    $password = trim($_POST["password"]);

    // Check if any form data is empty
    if(empty($username) || empty($email) || empty($password)) {
        die("All fields are required");
    }



    // Check if email and username already exist



    // the message
    $msg = "Thank your $username for registering in our demo project.";

    // use wordwrap() if lines are longer than 70 characters
    $msg = wordwrap($msg,70);

    // send email
    if(mail($email,"Welcome message",$msg)) {
        $sql = "INSERT INTO user (username, email, password)
        VALUES ('$username', '$email', '$password')";
    
        if ($conn->query($sql) === TRUE) {
            // echo "You have successfully signed up.";
            header('Location: ../login.php?success=You have successfully signed up. Please login');
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    
        $conn->close();
    
    } else {
        die("Something went wrong. Please try again later") ;
    }
    

   
}
?>