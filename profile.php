<?php 
include ("../Model/Header.php"); 
?>

<?php
session_start();


if(!isset($_SESSION["uname"]))
{
    header("location:../Model/moderatorlogin.php");
}
?>

<html>
<body>
   <H1> Hi, <?php echo $_SESSION["uname"]; ?> <br> </H1>
   <H2> Click here for logout <a href="../Control/logout.php"> Logout </a> </H2> <br> <br> <br>
</body>
</html>

<?php
include ("../Model/Footer.php");
?>

