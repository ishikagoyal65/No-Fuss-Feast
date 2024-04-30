<?php
$servername = "localhost";
$username = "root";
$password = "";
$database="project";
$conn = mysqli_connect($servername, $username, $password,$database);
if (!$conn) 
echo  "Connection failed: " . mysqli_connect_error();

$a= $_POST["first"];
$b= $_POST["last"];
$c= $_POST["email"];
$d = date('Y-m-d', strtotime($_POST['dob']));
$e= $_POST["password"];
$f= $_POST["repassword"];
if($e!=$f)
{
exit;
}
$g= $_POST["mobile"];
$h= $_POST["gender"];

$sql = "INSERT INTO userinfo (Fname,Lname,mail,dob,pass,rpass,mno,gen) VALUES ('$a','$b','$c','$d','$e','$f',$g,'$h')";

$s= $conn->query($sql);
if ($s === TRUE) {
    header("Location: demologin.html");
    exit();
}

else 
echo "Error: " . $sql . "<br>" . $conn->error;
mysqli_close($conn);
?>