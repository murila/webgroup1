<?php
session_start();
include_once 'dbcon.php';

if(isset($_SESSION['user_info'])) {
	header("location: index.php");
}

if (isset($_POST['submit']))
{
$email=$_POST['email'];
$pw=$_POST['pw'];
$sql = "SELECT * FROM users WHERE email = '$email' AND password = '$pw';";
$sql_result = mysqli_query ($conn, $sql) or die ('request "Could not execute SQL query" '.$sql);
		$user = mysqli_fetch_assoc($sql_result);
		if(!empty($user)){
			$_SESSION['user_info'] = $user['id'];
			$_SESSION['name'] = $user['fname'] . " " . $user['lname'];
			$_SESSION['email'] = $user['email']; 
			$message='Logged in successfully';
		}
		else{
			$message = 'Wrong email or password.';
		}

	echo "<script type='text/javascript'>alert('$message');</script>";
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<script type="text/javascript">
	function validate()	{
		var EmailId=document.getElementById("email");
		var atpos = EmailId.value.indexOf("@");
    	var dotpos = EmailId.value.lastIndexOf(".");
		var pw=document.getElementById("pw");
		if (atpos<1 || dotpos<atpos+2 || dotpos+2>=EmailId.value.length) 
		{
        	alert("Enter valid email-ID");
			EmailId.focus();
        	return false;
   		}
  //  		if(pw.value.length< 8)
		// {
		// 	alert("Password consists of atleast 8 characters");
		// 	pw.focus();
		// 	return false;
		// }
		return true;
	}
</script>
<style type="text/css">
	#loginarea{
		background-color: white;
		width: 30%;
		margin: auto;
		border-radius: 25px;
		
		margin-top: 100px;
		background-color: rgba(0,0,0,0.2);
	    box-shadow: inset -2px -2px rgba(0,0,0,0.5);
	    padding: 40px;
	    font-family:sans-serif;
		font-size: 20px;
		color: white;
	}
	html { 
		margin:0;
		background-image: url(images/25.jpg);
		background-repeat: no-repeat;
		background-size: cover;
		background-position: center;
		background-attachment: fixed;
		-webkit-background-size: cover;
		-moz-background-size: cover;
		-o-background-size: cover;
		background-size: cover;
	}
	#submit	{
		border-radius: 5px;
		background-color: rgba(0,0,0,0);
		padding: 7px 7px 7px 7px;
		box-shadow: inset -1px -1px rgba(0,0,0,0.5);
		font-family:"Comic Sans MS", cursive, sans-serif;
		font-size: 17px;
		margin:auto;
		margin-top: 20px;
  		display:block;
  		color: white;
	}
	#logintext	{
		text-align: center;
		color: #000000;
		font-family: Times new roman;
		font-size: 50px;
	}
	.data	{
		color: white;
	}
	body{
		margin:0;
		background-image: url(images/25.jpg);
		background-repeat: no-repeat;
		background-size: cover;
		background-position: center;
		background-attachment: fixed;
	}
</style>
<body>
	<div id="loginarea">
	<form id="login" action="login.php" onsubmit="return validate()" method="post" name="login">
	<div id="logintext">Login</div><br/><br/>
	<table>
		<tr><td><div class="data">Enter E-Mail ID:</div></td><td><input type="text" id="email" size="30" maxlength="30" name="email"/></td></tr>
		<tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
		<tr><td><div class="data">Enter Password:</div></td><td><input type="password" id="pw" size="30" maxlength="30" name="pw"/></td></tr>
		<tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
	</table>
	<INPUT TYPE="Submit" value="Submit" name="submit" id="submit" class="button">
	</form></div>
</body>
</html>