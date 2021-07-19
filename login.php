<?php
  session_start();
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
      background: url(img5.jpg);
      overflow-x:hidden;
      background-size:130% 100%;
      background-position:center;
      background-attachment: fixed;
      background-repeat: no-repeat;
    }
     button
    {
      position: relative;
      top:155px;
      left:350px;
    }
     .lab
    {
      position:relative;
      left:51%;
      bottom:-155px;
      color:gold;
      text-shadow:3px 3px 3px black;
    }
    .show,.hide
    {
      position:relative;
      top:-37px;
      left:414px;
    }
    .hide
    {
      left:390px;
      visibility:hidden;
    }
    #sub
    {
      left:51%;
      top:126px;
    }
    .form-floating
  {
     position:relative;
     left:51%;
     width:450px;
  }
  .divi
  {
    position: relative;
    left:10%;
    top:15px;
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
    		<li><a class="dropdown1" href="home">HOME</a></li>
        <li><a class="dropdown2" href="login">LOGIN</a></li>
        <li><a class="dropdown3" href="register">REGISTER</a></li>
        <li><a class="dropdown5" href="aboutus">ABOUT US</a></li>

  		</ul>
   	</div>
</nav>
</div>
<div class="divi">
<h1 class="lab" >LOGIN HERE:</h1>
<form action="loginphp" method="post">
  <div class="form-floating">
    <input type="text" class="form-control" id="name"  name='name' placeholder="NAME">
    <label for="floatingInput" >User Name</label>
  </div>
  <div class="form-floating">
      <input type="password" class="pass form-control" id="floatingPassword" name="password" placeholder="Password">
      <label for="floatingPassword">Password</label>
      <i class="show far fa-eye"></i>
      <i class="hide far fa-eye-slash"></i>

  </div>
  <button type="submit" class="btn btn-primary" id="sub">Submit</button>
</form>
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
<script>
    if(window.history.replaceState)
    {
        window.history.replaceState(null,null,window.location.href)
    }
</script>
</body>
</html>