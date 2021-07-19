<?php
  ob_start();
	session_start();
  ob_end_clean(); 
  if(isset($_SESSION['username']))
  {
  }
  else
  {
    ob_start();
      header("location:home");
    ob_end_clean();
  }
if(isset($_POST['confirm']))
{

	$id=$_GET['buy'];
	$serna=$_SESSION['username'];
	$nam=$serna;
	$con = mysqli_connect('localhost','laxminarayana','GEETHIKASEERUM2349');
	mysqli_select_db($con,'books');
	$s="select * from bookslogin where username='$nam' ";
	$result=mysqli_query($con,$s);
	$rows=$result->fetch_assoc();
	$r1=$rows['phone'];
	$sq="select * from sellbook where id='$id' ";
	$resultq=mysqli_query($con,$sq);
	$rowsq=$resultq->fetch_assoc();
	$name=$rowsq['username'];
	$book=$rowsq['book'];
	$s1="select email from bookslogin where username='$name' ";
	$re=mysqli_query($con,$s1);
	$rows1=mysqli_fetch_array($re);
	$to=$rows1[0];
	$subject='BOOKS BUYING';
	$message=" USER '$nam' IS INTRESTED TO BUY YOUR BOOK('$book').BUYER'S CONTACT NO:'$r1'";
    $_SESSION['msg']=$message;
   	$_SESSION['to']=$to;
	require 'mail.php';
	mailing();
    echo"<script>alert('we sent your request to seller.');";
	echo"window.location.href='get.php';</script>";
	
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>BOOKS SEARCH</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="style.css">
	<style type="text/css">
		body
		{
			background: orange;
			overflow-x:hidden;
			overflow-y: hidden;
		}
		.h12
		{
			text-shadow: 3px 3px 3px pink;
			position:relative;
			top:2%;
			left:50%;
			font-size:35px;
			font-weight:500;
		}
		form
		{
			position: relative;
			margin-top:45px; 
			left:60%;
		}
		.confirm
		{
			background-color: green;
			color:white;
			padding:5px;
			border-radius:3px;
			font-size:20px;
			font-weight:500;
		}
		.close
		{
			position: relative;
			left:25px;
			background-color:red;
			color:white;
			padding:5px;
			border-radius:3px;
			font-size:20px;
			font-weight:500;
		}
	</style>
</head>
<body>
<div class="head">
<nav>
 	<div class="con">
      	<img src="img1.jpg" alt="" width="63" height="45">
     	<h5 class="heading"> ALL FOR BOOKS.COM</h5>
		<ul class="dropdown" >
    		<li><a class="dropdown1" href="log">HOME</a></li>
   			<li><a class="dropdown2" href="sell">SELL A BOOK</a></li>
        	<li><a class="dropdown2" href="get">GET A BOOK</a></li>
    		<li><a class="dropdown3" href="logout">LOGOUT</a></li>

  		</ul>
   	</div>
</nav>
</div>
<p class="h12">
	HEY PLEASE CONFIRM TO CONTINUE.
</p>

<form method="post">

	<input type="submit" name="confirm" class="confirm" id="confirm" value="confirm" >
	<input type="button" name="close"  class="close" id="close" value="close">
	
</form>

<script type="text/javascript">
	let va=document.getElementById('close');
	va.addEventListener('click',()=>
		{window.history.back();})
</script>
<script>
    if(window.history.replaceState)
    {
        window.history.replaceState(null,null,window.location.href)
    }
</script>


</body>
</html>