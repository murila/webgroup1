<?php
include_once 'header.php';
?>
<!--insert your code here-->
<style type="text/css">
.contactd{
	background-color: rgba(0,0,0,0.7);
	color: #ffffff;
	font-size: 20px;
	font-family: Times New Roman;
	padding-right: 200px;
	padding-left: 200px;
	padding-top: 30px;
	padding-bottom: 30px;
	margin-left: 40px;


}
body{
		background-image: url(images/london.jpg);
		line-height: 1.4px;
		margin:0;
		background-repeat: no-repeat;
		background-size: cover;
		background-position: center;
		background-attachment: fixed;
}
.enquirie{
	padding: 4px 25px 25px 25px;
	margin-left: 40px;
	margin-right: 60px;
	text-align: center;
	color: #000000;
	background-color: rgba(255,255,255,0.9);
}
</style>
<center> <p><h2 style="font-family: Times new Roman; font-size: 60px; font-style: italic; margin-top: 70px;">Talk to us!</h2></p></center>
	  <center> <p style="font-family: brush script-md; font-size: 30px;">At your service always.</p></center>
	<center>	 <p style="font-family: brush script-md; font-size: 30px;">Let us know what you think of us!</p></center>
<div class="main_contact" style="float: left;">
	<div class="contactd">
        <center><h3>POSTAL ADDRESS</h3>
		<p>NEVIS VILLA HOTEL</p>
		<p>P.O BOX 12345-00100 </p>
		<p>NAIROBI</p></div></center>
		<br />
		<div class="contactd">
		<center><h3>OUR CONTACTS</h3>
			<p>Leah Murila: +254702588348</p>
			<p>Lynn Rotich: +254723354577</p>
			<p>Mercy Sawe: +254799213484</p>
			</div></center>
			<br />
			<div class="contactd">
			 <center><h3>EMAIL</h3>
			 <p>nevisvilla@gmail.com</p></div></center>
     </div>
			 			 <center><h3 style="color: #ffffff;">OUR LOCATION</h3>  
	<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d15954.148168690224!2d36.79941347671153!3d-1.3037642847852862!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2ske!4v1530802352026" width="700" height="460" frameborder="0" style="border:0" allowfullscreen></iframe>

	<br /><br />
	
  <div class="enquirie">
	<form method="POST" action="enquiries.php">
		<p style="font-size: 30px; font-family: times New roman">SEND ENQUIRY</p>
		<label style="font-size: 19px; color: var(--dark);" > Name:&nbsp;</label><input type="text" name="name" id="name" style="width: 200px; height: 30px;" >
		<br><br><br><br>
		<label style="font-size: 19px;color: var(--dark);"> Email:&nbsp;</label><input type="email" name="email" id="email" style="width: 200px; height: 30px;"><br><br><br><br>
		<label style="font-size: 19px; color: var(--dark);" > Message:&nbsp;</label><textarea type="text" name="message" id="message" style="width: 170px; height: 30px;" ></textarea> <br><br><br><br>
		<button name="enquire" type="Submit" class="btn">Send</button>
	</form>
	</div>
<br/>
<br/>
</form> 		
<?php
include_once 'footer.php';
?>