<?php
include ("../View/Header.php");
include ("../Control/logincheck.php");
?>


<html>
<center>
<body>
<fieldset>
    <legend> Sign In as Moderator </Legend>
   
    
<form action="" method="post" enctype="multipart/form-data">
    
<table>
<tr>
<td> Username : </td>
<td> <input type = "text" name= "uname" ><br> </td> 
</tr>
<tr>
<td> Password : </td>
<td> <input type = "password" name= "password" > <br> </td> 
</tr>
<tr>
<td> <input type="checkbox" value="rememberme" id="rememberme"> <label for="rememberme">Remember me </td>
<tr>
<td> <input type="submit" value="Submit" name="submit"> 
</td>
<td> <a href="../View/forgotpassword.php"> Forget Password? </a> </td> </tr>
<td> Don't have an account? <a href="../View/registration.php"> Register </a> </td> </tr>
<tr> <td> <br> <br> <br> <br> </td> </tr>
</table>
</fieldset>
</body>
</center>
</html>

<?php
include ("../View/Footer.php");
?>
