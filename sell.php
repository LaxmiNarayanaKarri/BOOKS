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
?>
<!DOCTYPE html>
<html>
<head>
	<title>BOOKS SEARCH</title>
	 <link rel='icon' href="img1.jpg"/>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="style.css">
	<style type="text/css">
		body
		{
			background:orange;
			overflow-x: scroll;
		}
		.bookstable
		{
			margin-top:10px;
			width:200%;
			height:300px;
			margin-left:25px;
			overflow-y:scroll;
		}
		tr
		{
			height:35px;
			border:0.1px white;
		}
		.b1,.b2,.b3
		{
			position:absolute;
			top:425px;
			padding-left:8px;
			font-size:20px;
			border-radius:5px;
		}
		.b1
		{
			left:2px;
			width:250px;
		}
		.b2
		{
			height:35px;
			left:270px;
		}
		.b3
		{
		    width:210px;
			left:445px;
		}
		.b4
		{
			left:670px;
		}
		.b5
		{
		    width:190px;
			left:980px;
		}
		.b4,.b5
		{
			position:absolute;
			top:425px;
			padding-left:8px;
			font-size:20px;
			border-radius:5px;
		}
		.b4
		{
			width:290px;
		}
		tr th
		{
			position: sticky;
			top:0px;
		}
		.b6
		{
			position:absolute;
			width:95px;
			top:425px;
			left:1180px;
			padding-left:8px;
			font-size:20px;
			border-radius:5px;

		}
		#sub
		{
			position:absolute;
			top:500px;
			left:640px;
			color:white;
			background:#08609a;
		}
	</style>
</head>
<body>
<?php require_once 'index.php'; ?>
<div class="head">
<nav>
 	<div class="con">
      	<img src="img1.jpg" alt="" width="63" height="45">
     	<h5 class="heading"> ALL FOR BOOKS.Co.in</h5>
		<ul class="dropdown" >
    		<li><a class="dropdown1" href="log">HOME</a></li>
   			<li><a class="dropdown2" href="sell">SELL A BOOK</a></li>
        <li><a class="dropdown2" href="get">GET A BOOK</a></li>
    		<li><a class="dropdown3" href="logout">LOGOUT</a></li>

  		</ul>
   	</div>
</nav>
</div>
<div class="bookstable"> 
	<table class="table table-dark table-hover">
	  	<thread class="thread">
			<tr>
				<th>Book Name</th>
				<th>Standard</th>
				<th>Publisher</th>
				<th>Year</th>
				<th>Author</th>
				<th>Price</th>
				<th>Corrections</th>
			</tr>
	  	</thread>

	<tbody >
	<?php
		$s="select * from sellbook where username ='$name' ";
		$result=mysqli_query($con,$s);
		while ($rows=$result->fetch_assoc()): ?>
			<tr>
				<td><?php echo $rows['book']?></td>
				<td><?php echo $rows['std']?></td>
				<td><?php echo $rows['pub']?></td>
				<td><?php echo $rows['year']?></td>
				<td><?php echo $rows['author']?></td>
				<td><?php echo $rows['price']?></td>
				<td>
					<a href="sell?edit=<?php echo $rows['id'] ?>" class="btn btn-info">Edit</a>
					<a href="sell?delete=<?php echo $rows['id'] ?>" class="btn btn-info">Delete</a>
				</td>
			</tr>
		<?php endwhile; ?>
		<tr>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
		</tr>
		<tr>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
		</tr>
		<tr>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
		</tr>
		<tr>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
		</tr>
		<tr>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
		</tr>
		<tr>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
		</tr><tr>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
		</tr>

	</tbody>
	</table>
</div>
<form  action="index.php" method="post" >
<h1 class="hes">ENTER THE DETIALS:</h1>
	<input type="text" name="book" placeholder="BOOK NAME(required)" value="<?php echo $r1; ?>" class="b1" required>
	<select class="b2"  name="stds"  required>
		<?php if($r2!=''): ?>
			<option value="<?php echo $r2?>" selected><?php echo$r2?></option>
		<?php else: ?>
			<option disabled selected hidden>STD:(required)</option>
		<?php endif;?>
		<option value="Below 10th">BELOW 10TH</option>
		<option value="10TH">10TH</option>
		<option value="Inter">INTER</option>
		<option value="B.TECH">B.TECH</option>
		<option value="MBBS">MBBS</option>
		<option value="others">OTHERS</option>
	</select>
	<input type="text" name="pub" class="b3" value="<?php echo $r3; ?>" placeholder="PUBLISHER" >
	<input type="text" name="year" class="b4" value="<?php echo $r4;?>" placeholder="DATE OF PUBLISH(dd/mm/yy)" >
	<input type="text" name="author" class="b5" value="<?php echo $r5; ?>" placeholder="AUTHOR" >
	<input type="text" name="price" class="b6" value="<?php echo $r6;?>" placeholder="PRICE">
	<input type="hidden" name="id" value="<?php echo $id?>">
	<input type="hidden" name="name" value="<?php echo $name?>">
	<?php if($update==true): ?>
		<input type="submit" class="subs" id="sub" name='sub' value="Submit" >
	<?php else: ?>
		<input type="submit" class="subs" id="sub" name='up' value="Update" >
	<?php endif;?>
</form>
<script>
    if(window.history.replaceState)
    {
        window.history.replaceState(null,null,window.location.href)
    }
</script>
</body>
</html>