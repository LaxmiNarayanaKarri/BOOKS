<?php
 ob_start();
  session_start();
  ob_end_clean(); 
  if(isset($_POST['name']))
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
$name=$_POST['name'];
$pass=$_POST['password'];
$s="select * from bookslogin where username ='$name' && password='$pass' ";
$result=mysqli_query($con,$s);
$num=mysqli_num_rows($result);
if($num==1)
{
	$hg="select * from bookslogin where username ='$name' && password='$pass' ";
	$re=mysqli_query($con,$hg);
	$r=mysqli_fetch_array($re);
	$_SESSION['username']=$name;
	$_SESSION['password']=$pass;
	$_SESSION['email']=$r["email"];
	$_SESSION['pin']=$r["pin"];
	$_SESSION['id']=$r['id'];
	$_SESSION['phone']=$r['phone'];
	header('location:log');
} 
else
{
	echo"<script>alert('login failed.please enter vailed username and password.');";
	echo"window.location.href='login';</script>";
}
?>


