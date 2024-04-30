<?php
// Replace these variables with your actual database credentials

$servername = "localhost";
$username = "root";
$password = "";
$database = "project";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // username and password sent from form 
    $myemail = mysqli_real_escape_string($conn,$_POST['email']);
    $mypassword = mysqli_real_escape_string($conn,$_POST['password']); 

    $sql = "SELECT fname FROM userinfo WHERE mail = '$myemail' and pass = '$mypassword'";
   $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);

    $count = mysqli_num_rows($result);

    // If result matched $myusername and $mypassword, table row must be 1 row
    session_start();
    if($count == 1) {
      
header("location:landingPage.html");
    }
}else {
        $error = "Your Login Name or Password is invalid";
    }
?>
