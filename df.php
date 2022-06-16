<form action ="df1.php" method ="post">
<!DOCTYPE html>
<html>
<style>


</style>
 <h1><center> Login form </center></title></h1>
<?php
$isPost=false;
$username="";
if(isset($_POST["btnClick"]))
{
	$isPost=true;
	if($_POST["uname"]="")
		$username=$_POST["uname"];
	//echo "button clicked";
}
?>
<form action="#" method="post">
Username:<input type="text" id="uname" name="uname">
<?php
if($isPost==true && $username=="")
 echo "<span style='color:red;'>Required</span>";
?>
<br><br>

<?php
$isPost=false;
$password="";
if(isset($_POST["btnClick"]))
{
	$isPost=true;
	if($_POST["pass"]="")
		$password=$_POST["pass"];
	//echo "button clicked";
}
?>
<form action="#" method="post">
Password:<input type="password" id="pass" name="pass"><br><br>
<?php
if($isPost==true && $password=="")
echo "<span style='color:red;'>Required</span>";
?>
<br><br>
<left><input type="submit" value="Login" name="btnClick"></left>
<right><input type="submit" value="Registration" name="btnClick1"></right>
</form>
</html>