<?php
$servername = "localhost";
$username = "root";
$password = "";
$database="project";
$conn = mysqli_connect($servername, $username, $password,$database);
if (!$conn) 
echo  "Connection failed: " . mysqli_connect_error();

$a= $_POST["fname"];
$b= $_POST["email"];
$c= $_POST["message"];


$sql = "INSERT INTO contactpage (fname,mail,feedback) VALUES ('$a','$b','$c')";

$s= $conn->query($sql);
if ($s === TRUE) {
    header("Location: landingPage.html");
    exit();
}

else 
echo "Error: " . $sql . "<br>" . $conn->error;
mysqli_close($conn);
?>