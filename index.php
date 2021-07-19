<?php
$con = mysqli_connect('localhost','laxminarayana','GEETHIKASEERUM2349');
mysqli_select_db($con,'books');
$r1='';
$r2='';
$r3='';
$r4='';
$r5='';
$r6='';
$id=0;
$update=true;

if(isset($_GET['delete']))
{
	$id=$_GET['delete'];
	$s="delete  from sellbook where id='$id'";
	$result=mysqli_query($con,$s);
	header("location:sell");
}
if(isset($_GET['edit']))
{
	$update=false;
	$id=$_GET['edit'];
	$s="select * from sellbook where id='$id' ";
	$result=mysqli_query($con,$s);
	$rows=$result->fetch_assoc();
	$r1=$rows['book'];
	$r2=$rows['std'];
	$r3=$rows['pub'];
	$r4=$rows['year'];
	$r5=$rows['author'];
	$r6=$rows['price'];
	$id=$rows['id'];
}
if(isset($_POST['sub']))
{
	$name=$_POST['name'];
	$book=$_POST['book'];
	$std=$_POST['stds'];
	$year=$_POST['year'];
	$pub=$_POST['pub'];
	$author=$_POST['author'];
	$price=$_POST['price'];
	$s="select * from bookslogin where username='$name' ";
	$result=mysqli_query($con,$s);
	$rows=$result->fetch_assoc();
	$pin=$rows['pin'];
	$reg="insert into sellbook(username,book,std,year,pub,author,price,pin) values('$name','$book','$std','$year','$pub','$author',
		 	'$price','$pin')";
	$resu=mysqli_query($con,$reg);
	header("location:sell");
	
}
if(isset($_POST['up']))
{
	$id=$_POST['id'];
	$book=$_POST['book'];
	$std=$_POST['stds'];
	$year=$_POST['year'];
	$pub=$_POST['pub'];
	$author=$_POST['author'];
	$price=$_POST['price'];
	$q="UPDATE sellbook SET book='$book',std='$std',pub='$pub',year='$year',author='$author',price='$price' WHERE id='$id' ";
	$result=mysqli_query($con,$q);
	header("location:sell");
}
elseif(!(isset($name)))
  {
    ob_start();
      header("location:home");
    ob_end_clean();
  }
?>