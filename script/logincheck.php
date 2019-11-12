<?php 

require_once "script/config.php";

if(!isset($_SESSION["username"])) {
    header("Location: login.php");  
    exit;
}

// Check if user is real
$sql = "SELECT * FROM  user WHERE username='{$_SESSION["username"]}'";

$result = $conn->query($sql);

if ($result->num_rows < 1) {
    session_destroy();
    header('Location: ../login.php');
} 

$conn->close();

$userId = $_SESSION["id"];
$username = $_SESSION["username"];
$email = $_SESSION["email"];
$regAt = $_SESSION["regAt"];


?>