<?php 
require_once ("config.php");

if(isset($_POST["username"]) && isset($_POST["password"])) {
    $username = trim($_POST["username"]);
    $password = trim($_POST["password"]);


     // Check if any form data is empty
     if(empty($username) || empty($password)) {
        die("All fields are required");
    }

    $sql = "SELECT * FROM  user WHERE username='$username' OR email='$username'";

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {

        $data = $result->fetch_assoc();

        if($data["password"] !== $password) {
            die("Username or password is incorrect");
        }

        // Store user info in session
        // Set session variables
        $_SESSION["id"] = $data["id"];
        $_SESSION["username"] =  $data["username"];
        $_SESSION["email"] = $data["email"];
        $_SESSION["regAt"] = $data["createdAT"];

        
        header('Location: ../dashboard.php');


    } else {
        die("Username or password is incorrect");
    }

    $conn->close();
}



?>