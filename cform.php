<?php
$servername = "localhost";
$username = "root";
$password = "";
$database="project";
$conn = mysqli_connect($servername, $username, $password,$database);
if (!$conn) 
echo  "Connection failed: " . mysqli_connect_error();

$a= $_POST["a"];
$b= $_POST["b"];
$c= $_POST["c"];
$d =$_POST["d"];
$e= $_POST["e"];
$f= $_POST["f"];
$g= $_POST["g"];
$h= $_POST["h"];
$i= $_POST["i"];
$j= $_POST["j"];

$sql = "INSERT INTO cform (vegan,allergy,spicy,cuisine,nutrition,ingre,taste,goals,health,occasion) VALUES ('$a','$b','$c','$d','$e','$f','$g','$h','$i','$j')";

$s= $conn->query($sql);
if ($s === TRUE) {
    header("Location:landingPage.html");
    exit();
}

else 
echo "Error: " . $sql . "<br>" . $conn->error;
mysqli_close($conn);
?>