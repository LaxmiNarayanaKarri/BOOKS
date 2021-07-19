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
			background: orange;
			overflow-x:scroll;
			overflow-y: hidden;
		}
		#sub
		{
			position:absolute;
			color:white;
			background:#08609a;
			top:205px;
			left:1050px;
			
		}
		.b1
		{

			position:relative;
			border-radius:5px;
			width:250px;
			font-size: 20px;
			padding:5px;
			top:80px;
			margin-left:25px;
			margin-right:1200px;
		}
		.b2
		{

			position:relative;
			border-radius:5px;
			font-size: 21px;
			padding:5px;
			top:37px;
			margin-left:300px; 
			margin-right:1000px;
		}
		.b3
		{

			position:relative;
			border-radius:5px;
			font-size: 20px;
			padding:5px;
			width:240px;
			top:-4px;
			margin-left:500px;
			margin-right:700px;
		}
		.b4
		{

			position:relative;
			border-radius:5px;
			font-size: 20px;
			width:240px;
			padding:5px;
			top:-48px;
			margin-right:700px; 
			margin-left:770px;
			
		}
		input,select 
		{
			background-color: rgba(255,255,255,0.7);
		}
		.l1
		{
			position: relative;
			font-size:45px;
			margin-left:20px;
			margin-right:10px;
			top:78px;
			color:white;
			text-shadow:3px 3px 3px black;
    

		}
		.bookstable	
		{
			position: relative;
			top:-5px;
		}
		.bookstable
		{
			margin-top:3px;
			width:200%;
			margin-left:25px;
			height:350px;
			overflow-y:scroll;
		}
		tr th
		{
			position: sticky;
			top:0px;
		}
		tr
		{
			height:35px;
			border:0.1px white;
		}
	</style>
</head>
<body>
<?php require_once 'buy.php'; ?>
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
<label class="l1">Fill Any To Filter:</label>
<form action="get.php" method="post">
	<input type="text" name="book" class="b1" placeholder="BOOKNAME" >
	<select class="b2"  name="stds" required>
		<option disabled selected hidden>STD:</option>
		<option value="Below 10th">BELOW 10TH</option>
		<option value="10TH">10TH</option>
		<option value="Inter">INTER</option>
		<option value="B.TECH">B.TECH</option>
		<option value="MBBS">MBBS</option>
		<option value="others">OTHERS</option>
	</select>
	<input type="text" name="pin" class="b3" placeholder="PINCODE">
	<input type="text" name="author" class="b4"  placeholder="AUTHOR" >
	<input type="submit" class="subs" id="sub" name="sub" value="Search" >
</form>
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
		 if($update==false): 
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
						<a href="confirmbuy.php?buy=<?php echo $rows['id'] ?> " class="btn btn-info">BUY</a>
					</td>
				</tr>

			<?php endwhile; ?>
		<?php else: ?>
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
		<?php endif;?>
		
	</tbody>
	</table>
</div>
<script>
    if(window.history.replaceState)
    {
        window.history.replaceState(null,null,window.location.href)
    }
</script>

</body>
</html>