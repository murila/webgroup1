<?php
session_start();
include_once 'dbcon.php';

if(isset($_SESSION['user_info'])) {
	header("location: index.php");
}

if (isset($_POST['submit']))
{
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$username=$_POST['username'];
$pw=$_POST['pw'];
//$hashed_password=password_hash($pw, PASSWORD_DEFAULT);

$sql = "INSERT INTO users(fname,lname,phone,email,password) VALUES ('$fname', '$lname','$phone','$email', '$pw');";
	if(mysqli_query($conn, $sql))
{  
	$message = "You have been successfully registered";
}
else
{  
	$message = "Could not insert record"; 
}
	echo "<script type='text/javascript'>alert('$message');</script>";
}
?>
<HTML>
<HEAD>
<TITLE>Sign up</TITLE>
<style type="text/css">
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

#register_form	{
	width: 40%;
	margin: auto;
	border-radius: 25px;
	margin-top: 30px;
	padding-bottom: 20px;
	background-color: rgba(0,0,0,0.2);
    box-shadow: inset -2px -2px rgba(0,0,0,0.5);
}
.button	{
	border-radius: 5px;
	background-color: rgba(0,0,0,0);
 	padding: 7px 7px 7px 7px;
 	box-shadow: inset -1px -1px rgba(0,0,0,0.5);
 	font-family:"Comic Sans MS", cursive, sans-serif;
	font-size: 15px;
}
</style>
<script src="validation.js"></script>
</HEAD>
<BODY>

<div id="register_form" align="center" height="200" width="200">
<FORM name="register" method="post" action="register.php" onsubmit="return validate()">
<TABLE border="0">
<CAPTION><FONT size="6"><br/>Enter your details:</FONT></CAPTION>
<tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
<TR class="left">
<TD><FONT size="5">First name:</FONT></TD>
<TD><INPUT name="fname" type="TEXT" placeholder="Enter your first name" size="30" maxlength="30" align="center" id="fname"></TD>
</TR><tr></tr><tr></tr>
<TR class="left">
<TD><FONT size="5">Last name:</FONT></TD>
<TD><INPUT type="TEXT" name="lname" align="center" size="30" maxlength="30" placeholder="Enter your last name" id="lname"></TD>
</TR><tr></tr><tr></tr>
<TR class="left">
<TD><FONT size="5">Phone :</FONT></TD>
<TD><INPUT name="phone" type="TEXT" placeholder="Enter your phone number" size="30" maxlength="30" align="center" id="phone"></TD>
</TR><tr></tr><tr></tr>
<TR class="left">
<tr></tr><tr></tr>
<TR class="left">
<TD><FONT size="5">E-Mail ID:</FONT></TD>
<TD><INPUT name="email" type="TEXT" id="email" placeholder="Enter your E-Mail ID" size="30" maxlength="30"></TD>
</TR><tr></tr><tr></tr>
<TR class="left">
<TD><FONT size="5">Username:</FONT></TD>
<TD><INPUT name="username" type="TEXT" placeholder="Enter your username" size="30" maxlength="30" align="center" id="username"></TD>
</TR><tr></tr><tr></tr>
<TR class="left">
<TD><FONT size="5">Password:</FONT></TD>
<TD><INPUT type="PASSWORD" name="pw" size="30"  id="pw"></TD>
</TR><tr></tr><tr></tr>
<TR class="left">
<TD><FONT size="5">Confirm Password:</FONT></TD>
<TD><INPUT type="PASSWORD" name="cpw" size="30" id="cpw"></TD>
</TR><tr></tr><tr></tr><tr></tr><tr></tr>
<tr></tr>
</TABLE>
<P><INPUT TYPE="Submit" value="Submit" name="submit" id="submit" class="button">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<INPUT TYPE="Reset" value="Reset" id="reset" class="button"></P></FORM>
<HR width="450" style="border-color: black;display: block;" noshade>
<FORM action="login.php">
<P align="CENTER"><FONT size="6" face="Arial">
Already have an account with us?<BR></FONT><br/><br/>
<INPUT TYPE="submit" value="Login" id="login" class="button">
</P>
</FORM></div>
</BODY>
</HTML>