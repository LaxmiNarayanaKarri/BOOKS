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
$_SESSION['name']=$_POST['name'];
$_SESSION['pass']=$_POST['password'];
$_SESSION['email']=$_POST['email'];
$_SESSION['pin']=$_POST['pin'];
$pass=$_POST['password'];
$pass1=$_POST['pass1'];
$name=$_POST['name'];
$email=$_POST['email'];
$_SESSION['phone']=$_POST['phone'];
if($pass1==$pass)
{
	$s="select * from bookslogin where username ='$name' ";
	$result=mysqli_query($con,$s);
	$num=mysqli_num_rows($result);
	if($num>=1){
		echo"<script>alert('Username already taken.Try to add some numbers at the end .');";
		echo"self.close();</script>";
	}
	else
	{
		$token='qwertyuiopasdfghjklzxcvbnm1234567890';
		$token=str_shuffle($token);
		$token=substr($token,0,5);
		$_SESSION['token']=$token;
		$_SESSION['to']=$email;
		$subject='EMAIL VERIFICATION';
		$message=" Your Verification key is $token";
		$_SESSION['msg']=$message;
	    require 'mail.php';
	    mailing();
        
	}
}
else
{
	echo"<script>alert('Your passwords are not matching . Please re-submit the form.');";
	echo"self.close();</script>";
	
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Confirm</title>
	<style type="text/css">
		body
		{
			background:orange;
		}
		.co
		{
			position: relative;
			top:80px;
			left:550px;
			background-color:orange;
			color:black;
			height:25px;
			font-size:20px;
		}
		.co1
		{
			position: relative;
			top:80px;
			left:550px;
			background-color:black;
			color:white;
		}
		.co1:hover
		{
			background-color:red;
		}
		.led
		{
			position: relative;
			top:130px;
		}
	</style>
</head>
<body>
	<h1 class="hed">PLEASE VERIFY YOUR EMAIL. </h1>
<form method="post" action="confirm.php">
    <h2>PLEASE REFRESH YOUR MAIL.THIS MIGHT TAKE A  MINUTE OR DEPENDS ON YOUR CONNECTIVITY.</h2>
	<h2 class="led">ENTER THE CODE THAT SENT TO YOUR MAIL:</h2>
	<input type="text" name="code" class="co" required>
	<input type="submit" name="csub" class="co1" value="submit" >
</form>
<script>
    if(window.history.replaceState)
    {
        window.history.replaceState(null,null,window.location.href)
    }
</script>
</body>
</html>
 