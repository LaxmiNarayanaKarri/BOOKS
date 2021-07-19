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
$serna=$_SESSION['username'];
$con = mysqli_connect('localhost','laxminarayana','GEETHIKASEERUM2349');
mysqli_select_db($con,'books');
$update=true;
if(isset($_POST['sub']))
{
$book=$_POST['book'];
$author=$_POST['author'];
$pin=$_POST['pin'];
$s="select * from sellbook";
$q=0;
$w="w";
if($pin!='')
{
    if($q==0)
    {
        $w="where";
         $q=1;
    }
   
	$pin=$_POST['pin'];
	$s=$s." ".$w." "."pin='$pin'";
}
if(isset($_POST['stds']))
{
    if($q==0)
    {
        $w="where";
         $q=1;
    }
    else
    {
        $w="and";
    }
	$std=$_POST['stds'];
	$s=$s." ". $w." "."std='$std'";
}
if($book!='')
{
     if($q==0)
    {
        $w="where";
         $q=1;
    }
    else
    {
        $w="and";
    }
	$s=$s." ". $w." "."book='$book'";
}
if($author!='')
{
     if($q==0)
    {
        $w="where";
         $q=1;
    }
    else
    {
        $w="and";
    }
	$s=$s." ".$w." "."author='$author'";
	
}


$update=false;
}


	


?>