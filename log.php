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

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>BOOKS SEARCH</title>
	 <link rel='icon' href="img1.jpg"/>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="style.css">
  <style type="text/css">
    .WELCOME
    {
      text-shadow:3px 3px 3px black;
      color:white;
    }
    body
  {
    background:orange;
    overflow:hidden;
  }
      
     .show,.hide
    {
      position:absolute;
      top:20px;
      left:414px;
    }
    .hide
    {
     left:414px;
      visibility:hidden;
    }
    #s1,#s2,#s3
    {
      display:block;
      padding-bottom:5px;
    }
    .edit
    {
      position: relative;
      top:-320px;
      padding:5px;
      left:800px;
    }
    .top
    {
      position: relative;
      top:20px;
      left:350px;
      color:gold;
      text-shadow:3px 3px 3px black;
    }
    #s
    {
      position: relative;
      top:-30px;
      left:350px;
      
    }
    .form-floating
    {
      position: relative;
      top:30px;
    }
    #q
    {
      position: relative;
      top:-42px;
    }

  </style>
</head>
<body>
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
<h1 class="WELCOME"> WELCOME <?php echo $_SESSION['username']; ?></h1> 
  <h1 class="top"> YOUR'S INFORMATION</h1>
<form action="logphp.php" method="post">
  <div class="form-floating">
    <input type="text" class="form-control" id="name"  name='name' placeholder="NAME" value="<?php echo $_SESSION['username']; ?>">
    <label for="floatingInput">User Name:</label>
  </div>
  <div class="form-floating">
      <input type="password" class="pass form-control" id="password" name="password" placeholder="Password" value="<?php echo $_SESSION['password']; ?>">
      <label for="floatingPassword">Your Password:</label>
       <i class="show far fa-eye"></i>
      <i class="hide far fa-eye-slash"></i>
     
  </div>
  <div class="form-floating mb-3">
    <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com" value="<?php echo $_SESSION['email']; ?>">
   <label for="floatingInput">Email Address:</label>
    
  </div>
  <div class="form-floating" >
    <input type="text" class="form-control" id="pin"  name='pin' placeholder="Pincode" value="<?php echo $_SESSION['pin']; ?>">
    <label for="floatingInput" id="pinl">Pin Code:</label>
  </div>
  <div class="form-floating" id="q">
    <input type="text" class="form-control" id="phone"  name='phone' placeholder="Phone Number" value="<?php echo $_SESSION['phone']; ?>">
    <label for="floatingInput" id="pin2">Phone Number:</label>
  </div>
<button type="submit" class="btn btn-primary" name="s" id="s">Save</button>
</form>
<div class="edit">
   <button  class="btn btn-primary" id="s1">Edit</button>
   <br>
   <button  class="btn btn-primary" id="s2">Edit</button>
   <br>
   <button  class="btn btn-primary" id="s3">Edit</button>
   <br>
   <button  class="btn btn-primary" id="s4">Edit</button>
</div>
<script src="https://kit.fontawesome.com/5283fdf09a.js" crossorigin="anonymous"></script>

<script>
  var paa=document.querySelector('.pass');
  var ey=document.querySelector('.show');
  var eye=document.querySelector('.hide');
  ey.onclick=function()
  {
    paa.setAttribute("type","test");
    eye.style.visibility="visible";
  }
  eye.onclick=function()
  {
    paa.setAttribute("type","password");
    ey.style.visibility="visible";
    eye.style.visibility="hidden";
  }
</script>
<script type="text/javascript">
  document.getElementById("name").disabled=true;
  document.getElementById("password").disabled=true;
  document.getElementById("email").disabled=true;
  document.getElementById("pin").disabled=true;
  document.getElementById("s").disabled=true;
  document.getElementById("phone").disabled=true;
</script>
<script type="text/javascript">
  let aqa=document.getElementById("s1");
  aqa.addEventListener('click',()=>
  {
     document.getElementById("password").disabled=false;
     document.getElementById("s").disabled=false;
  });
</script>
<script type="text/javascript">
  let aq=document.getElementById("s2");
  aq.addEventListener('click',()=>
  {
    document.getElementById("email").disabled=false;
    document.getElementById("s").disabled=false;
  });
</script>
<script>
    if(window.history.replaceState)
    {
        window.history.replaceState(null,null,window.location.href)
    }
</script>
<script type="text/javascript">
  let a=document.getElementById("s3");
  a.addEventListener('click',()=>
  {
     document.getElementById("pin").disabled=false;
     document.getElementById("s").disabled=false;
  });
</script>
<script type="text/javascript">
  let a1=document.getElementById("s4");
  a1.addEventListener('click',()=>
  {
     document.getElementById("phone").disabled=false;
     document.getElementById("s").disabled=false;
  });
</script>
</body>
</html>