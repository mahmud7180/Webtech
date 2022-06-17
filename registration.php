<?php
include ("../View/Header.php");
include "../Control/regcheck.php"
?>

<html>
<center>
<body>
    <fieldset>
    <legend> Register Your Moderator Account </legend> 
    
<form action="" method="post" enctype="multipart/form-data">
<table>
<tr>
<td> Name : </td>
<td> <input type="text" name="name" required > </td>
<td> <?php echo $nameerr ?> </td>
</tr>
<tr>
<td> Email : </td>
<td> <input type = "text" name= "email" required  > </td>
<td> <?php echo $emailerr ?> </td>
</tr>
<tr>
<td> User Name : </td>
<td> <input type="text" name="uname" required > </td>
<td> <?php echo $unameerr ?> </td>
</tr>
<tr>
<tr>
<td> Password : </td>
<td> <input type = "password" name= "password" required  > </td>
<td> <?php echo $cp ?> </td>
</tr>
<tr>
<td> Confirm Password : </td>
<td> <input type = "confirmpassword" name= "confirmpassword" required > </td>
<td> <?php echo $cp ?> </td>
</tr>
<td> Gender: </td>
<td> 
<input type="radio" name="gender" value="Male"  >Male
<input type="radio" name="gender" value="Female" >female 
<input type="radio" name="gender" value="Other" >Other 
</td>
</tr>
<tr>
<td> Date of Birth </td>
<td> <input type="date" name="dateofbirth">  </td>
</tr>
<tr>
<td> <input type="submit" value="Submit" name="submit" >
<input type="reset" value="Reset" > </td>
</tr>
</fieldset>
</table>
</body>
</center>
</html>

<?php
include ("../View/Footer.php");
?>
