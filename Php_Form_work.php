<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<style type="text/css">
		.err{
			color: red;
		}
	</style>
</head>
<body>

	<?php

	
	$nameErr = $emailErr = $genderErr = $websiteErr = "";
	$name = $email = $gender = $comment = $website = "";

	if ($_SERVER["REQUEST_METHOD"] == "POST") {
	  if (empty($_POST["name"])) {
	    $nameErr = "Name is required";
	  } else {
	    $name = test_input($_POST["name"]);
	    
	    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
	      $nameErr = "Only letters and white space allowed";
	    }
	  }

	  if (empty($_POST["email"])) {
	    $emailErr = "Email is required";
	  } else {
	    $email = test_input($_POST["email"]);
	 
	    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
	      $emailErr = "Invalid email format";
	    }
	  }

	  if (empty($_POST["website"])) {
	    $website = "";
	  } else {
	    $website = test_input($_POST["website"]);
	   
	    if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
	      $websiteErr = "Invalid URL";
	    }
	  }

	  if (empty($_POST["comment"])) {
	    $comment = "";
	  } else {
	    $comment = test_input($_POST["comment"]);
	  }

	  if (empty($_POST["gender"])) {
	    $genderErr = "Gender is required";
	  } else {
	    $gender = test_input($_POST["gender"]);
	  }
	  

	}


	function test_input($data) {
	  $data = trim($data);
	  $data = stripslashes($data);
	  $data = htmlspecialchars($data);
	  return $data;
	}



?>


	 <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
	 	
	  <b>EXPERIMENT NAME</b> <br>
	  Designing HTML form using PHP with validation of user inputs. <br> <br>

	  <b>OBJECTIVE</b><br>
	  This assessment item is designed to give you some practice on validating user inputs usung PHP. <br> <br>
	  
	  <b>ASSESSMENT TASK</b> <br>
	  <b>1.</b> Design the following HTML form and perform the following validations. <br> <br>
	
	 	<b>Name:</b> <input type="text" name="name">
	 	<span class="err">*
	 		<?php echo $nameErr;?>
	 	</span><br> <br>
		<b>E-mail:</b> <input type="text" name="email">
		<span class="err">*
	 		<?php echo $emailErr;?>
	 	</span><br><br>
	 	
		<b>Website:</b> <input type="text" name="website">
		<span class="err">
	 		<?php echo $websiteErr;?>
	 	</span><br><br>
		<b>Comment:</b> <textarea name="comment" rows="5" cols="40"></textarea><br> <br>                   
		<b>Gender:</b>
		<input type="radio" name="gender" value="female">Female
		<input type="radio" name="gender" value="male">Male
		<input type="radio" name="gender" value="other">Other
		<span class="err">*
	 		<?php echo $genderErr;?>
	 	</span>
		<br><br>


	 	<input type="submit" value="Submit">
	 </form>

	 <?php 

	 	echo "<h1>Your input</h1>";
	 	echo $name . "<br>";
	 	echo $email . "<br>";
	 	echo $gender . "<br>";
	 	echo $comment . "<br>";
	 	echo $website;

	  ?>
</body>
</html>