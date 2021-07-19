<?php
session_start();
$con = mysqli_connect('localhost','laxminarayana','GEETHIKASEERUM2349');
mysqli_select_db($con,'books');
if(isset($_POST['csub']))
{
	$tok=$_POST['code'];
	$token=$_SESSION['token'];
	$name=$_SESSION['name'];
	$pass=$_SESSION['pass'];
	$email=$_SESSION['email'];
	$pin=$_SESSION['pin'];
	$phone=$_SESSION['phone'];
	if($token==$tok)
	{
		$reg="insert into bookslogin(username,password,email,pin,phone) values('$name','$pass','$email','$pin','$phone')";
		mysqli_query($con,$reg);
		echo"<script>alert('Registration Successful.You may Login now.');";
		echo"window.location.href='login';</script>";
	}
	else
	{
		echo"<script>alert('Registration Unsuccessful.Please try again.');";
		echo"window.location.href='register';</script>";
	}
}
?>