<?php
include_once 'dbcon.php';

if(isset($_POST['news'])){
  $name= $_POST['name'];
  $email=$_POST['email'];

//inserting values to database
$query=mysqli_query($conn,"INSERT INTO newsletter(name,email)VALUES('$name','$email')");
}else{
  echo "<script type='text/javascript'>
              alert('Error in subscribing!');
         </script>";
}