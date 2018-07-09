<?php
include_once 'dbcon.php';
include_once 'header.php';
?>
<style type="text/css">
  :root{
    --primary:#808080;
    --dark:#000000;
    --light:#ffffff;
    --shadow:0 1px 5px rgba(104,104,104,0.8);
  }
  html{
    box-sizing: border-box;
    font-family: sans-serif;
    color: var(--dark);
  }
  body{
    line-height: 1.4px;
    margin:0;
    /*background-image: url(images/london.jpg);*/
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
    background-attachment: fixed;
  }
  .btn{
    background:var(--dark);
    color: var(--light);
    padding: 0.6rem 1.3rem;
    text-decoration: none;
    border: 0;
  }
  .btn:hover{
    background-color:var(--light);
    color: var(--dark);
  }
  img{
    max-width: 100%;
  }
  .wrapper{
    display: grid;
    grid-gap: 20px;
    margin-left: 30px;
    margin-right:30px;
    margin-top: 50px;

  }
  .boxes{
    display: grid;
    grid-gap: 20px;
    grid-template-columns: repeat(auto-fit,minmax(200px,1fr));
  }
  .box{
    background:var(--primary);
    text-align: center;
    padding: 1.5rem 2rem;
    box-shadow: :var(--shadow);
  }
  .box p{
    font-size: 20px;
  }
  /*footer*/
  footer{
  margin-top:20px; 
  background: rgba(0, 0, 0, 0.7);
  background-color:var(--dark);
  opacity: 0.8;
  color: var(--light);
  margin-left:0px;
  margin-right: 0px;
  display: grid;
  font-family: Times New Roman;
  grid-gap: 20px;
}
.mail{
  background-color:var(--primary);
  padding: 4px 25px 25px 25px;
  text-align: center;
  margin-left: 400px;
  margin-right: 400px;
}
h1{
  font-size: 35px;
  font-family: times new roman;
  color: #ffffff;
  }
.navigate{
  position: fixed;
  margin-right: 50px;
  margin-left: 250px;
}
  ul li a:hover{
  background-color: #808080;
  width: 200px;
  height: 40px;
}
.footdetails{
  font-size: 20px;
  font-family: Times New Roman;
  text-decoration: none;
}
hr{
  height: 0px;
  width: 200px;
}
  .bookbtn{
   background-color:var(--primary);
    color: var(--light);
    padding: 0.7rem 1.5rem;
    text-decoration: none;
    border: 0;
}
.bookbtn:hover{
   background-color:rgba(0,0,0,0.9);
  }
.ajab{
    display: inline-block;
    padding: 30px;
    background-color: rgba(255,255,255,0.9);
    margin-top: 47px;
    margin-left: 15px;


 
}
.btnbtnb{
  margin-top: 30px;
}
  
  </style>
  


<?php
$query = "SELECT * FROM conf_rooms";
$query2=mysqli_query($conn,$query);

$rooms = $query2;

?>


  <?php foreach($rooms as $room) { ?> 

?>

    <center><p><?php echo $room['stylec'];?></p></center><br>
   <center><p><?php echo $room['capacity'];?></p></center><br>
  
 
<?php } ; ?>
<?php
include_once 'footer.php';
?>