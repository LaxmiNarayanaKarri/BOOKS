<?php

?>

<!DOCTYPE html>
<html>
<head>
	<title>BOOKS SEARCH</title>
	 <link rel='icon' href="img1.jpg"/>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="style.css">
  <style type="text/css">
    .lab
    {
      position: relative;
      top:43px;
      left:350px;
    }
    body
    {
      background: url(img3.jpg);
      width:50%;
      overflow-x:hidden;
     background-size:140% 100%;
      background-position:center;     
      background-repeat: no-repeat;
      background-attachment: fixed;
    }
    .lab
    {
      color:white;
      text-shadow:3px 3px 3px green;
    }
    .show,.hide
    {
      position:absolute;
      top:25px;
      left:414px;
    }
    .hide
    {
      visibility:hidden;
    }
    .slhow,.hlide
    {
      position:absolute;
      top:25px;
      left:414px;
    }
    .hlide
    {
      visibility:hidden;
    }
    .subs
    {
      position: relative;
      background:#08609a;
      color:white;
      top:-17px;
      left:350px;
      border-radius:5px;
      width:80px;
      height:40px;
    }
    .form-floating
    {
      position: relative;
      top:50px;
    }
    #phonex
    {
      position: relative;
      top:-23px;
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
<h1 class="lab" >REGISTER HERE:</h1>
<form action="regphp" method="post">
  <div class="form-floating">
    <input type="text" class="form-control" id="name"  name='name' placeholder="NAME" required>
    <label for="floatingInput">User Name:</label>
  </div>
  <div class="form-floating">
      <input type="password" class="pass form-control" id="password" name="password" placeholder="Password" required>
      <label for="floatingPassword">Create Password:</label>
       <i class="show far fa-eye"></i>
      <i class="hide far fa-eye-slash"></i>
  </div>
  <div class="form-floating" >
      <input type="password" class="plass form-control" id="pass1" name="pass1" placeholder="Confirm Password" required>
      <label for="floatingPassword">Confirm Password:</label>
       <i class="slhow far fa-eye"></i>
      <i class="hlide far fa-eye-slash"></i>
  </div>
  <div class="form-floating mb-3" >
    <input type="email" class="form-control" id="floatingInput" name="email" placeholder="name@example.com" required>
   <label for="floatingInput">Email Address:</label>
  </div>
  <div class="form-floating" >
    <input type="text" class="form-control" id="pin"  name='pin' placeholder="Pincode" required>
    <label for="floatingInput" id="pinl">Pin Code:</label>
  </div>
  <div class="form-floating" id="phonex">
    <input type="text" class="form-control" id="phone"  name='phone' placeholder="Phone Number" required>
    <label for="floatingInput" id="phone">Phone Number:</label>
  </div>
  <input type="submit" class="subs" id="sub" value="Submit" onclick="this.form.target='_blank';" >
</form>
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
  var paal=document.querySelector('.plass');
  var eyl=document.querySelector('.slhow');
  var eyel=document.querySelector('.hlide');
  eyl.onclick=function()
  {
    paal.setAttribute("type","test");
    eyel.style.visibility="visible";
  }
  eyel.onclick=function()
  {
    paal.setAttribute("type","password");
    eyl.style.visibility="visible";
    eyel.style.visibility="hidden";
  }
</script>
<script type="text/javascript">
  let su=document.getElementById("sub");
  su.addEventListener('click',()=>
  {
      var first=document.getElementById('password').value;
      var second=document.getElementById('pass1').value;
      if(first==second && first!='')
      {

        setTimeout(fune,1500);


      }
      else
      {
        setTimeout(funre,1300);

      }
      
  });
</script>
<script type="text/javascript">
  function funre() 
  {
          document.getElementById('password').style.border-color="red";
          document.getElementById('pass1').style.border-color="red";
          document.getElementById('password').value='';
          document.getElementById('pass1').value='';

  }
</script>
<script>
    if(window.history.replaceState)
    {
        window.history.replaceState(null,null,window.location.href)
    }
</script>
<script type="text/javascript">
  function fune()
  {
    window.location.href='register';
     
  }
</script>
</body>
</html>