<li class='active' style='float:right;'>
  <?php 
  session_start();
    if($_SESSION['logged']==true){ 
        echo $_SESSION["username"];
        echo '<a href="logout.php"><span>Logout</span></a></li>';
        }
    elseif($_SESSION['logged']==false) 
        echo '<a href="registerform.html"><span>Login/Register</span></a></li>';
    ?>

    