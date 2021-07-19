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
	$book=$_POST['book'];
	$std=$_POST['stds'];
	$year=$_POST['year'];
	$pub=$_POST['pub'];
	$author=$_POST['author'];
	$price=$_POST['price'];
	$reg="insert into sellbook(username,book,std,year,pub,author,price) values('$name','$book','$std','$year','$pub','$author',
		 	'$price')";
	mysqli_query($con,$reg);
	header("location:sell");
?>