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
	$con = mysqli_connect('localhost','laxminarayana','GEETHIKASEERUM2349');
	mysqli_select_db($con,'books');
	$name=$_SESSION['username'];
	$hg="select * from bookslogin where username ='$name'";
	$re=mysqli_query($con,$hg);
	$r=mysqli_fetch_array($re);
	$pass1=$r["password"];
	$email1=$r["email"];
	$pin1=$r["pin"];
	$phone1=$r['phone'];
	if(isset($_POST['email']))
	{

		$email=$_POST['email'];
		if($email!=$email1)
		{
			$email1=$email;
		}
	}
	if(isset($_POST['password']))
	{
		$pass=$_POST['password'];
		if($pass!=$pass1)
		{
			$pass1=$pass;
		}
	}
	if(isset($_POST['pin']))
	{
		$pin=$_POST['pin'];
		if($pin!=$pin1)
		{
			$pin1=$pin;
		}
	}
	if(isset($_POST['phone']))
	{
		$phone=$_POST['phone'];
		if($phone!=$phone1)
		{
			$phone1=$phone;
		}
	}

	$q="UPDATE bookslogin SET username='$name',password='$pass1',email='$email1',pin='$pin1',phone='$phone1' WHERE username='$name' ";
	$qu=mysqli_query($con,$q);
	if($qu)
	{	
		echo"<script>alert('updated successfully.');";
		echo"window.location.href='login';</script>";
	}
?>