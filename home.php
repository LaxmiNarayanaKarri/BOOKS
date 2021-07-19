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
    #img
    {
      max-height:100%; 
      max-width:100%;
      
    }
    .arra
    {
      width:80vw;
      height:50vh;
      position:absolute;
      left:50%;
      top:45%;
      transform:translate(-50%,-50%);
    }
    .p1
    {
      text-shadow: 3px 3px 3px pink;
      font-size:25px;
      font-weight:700;
      color:#800000;
    }
    .p2
    {
      text-shadow: 3px 3px 3px pink;
      font-size:25px;
      font-weight:700;
      color:#800000;
    }
    .p3
    {
      font-size:25px;
      font-weight:700;
      color:#800000;
    }
    .p4
    {
      margin-left:4px;
      font-size:22px;
      font-weight:650;
      color:#800000;
    }
    .p5
    {
      text-shadow: 3px 3px 3px pink;
      font-size:24px;
      font-weight:700;
      color:#800000;
    }
    .p6
    {

      font-size:25px;
      font-weight:700;
      color:#800000;
    }
    .p7
    {
      font-size:22px;
      font-weight:680;
      color:#800000;
    }
    .hre
    {
      text-shadow: 3px 3px 3px black;
     font-size:25px;
      font-weight:700;
      color:yellow; 
    }
    .p8
    {
      text-shadow: 3px 3px 3px black;
      font-size:25px;
      font-weight:700;
      color:yellow;
    }
    .p9
    {
      text-shadow: 3px 3px 3px black;
      font-size:25px;
      font-weight:700;
      color:yellow;
    }
    .p10
    {
      text-shadow: 3px 3px 3px black;
      font-size:25px;
      font-weight:700;
      color:yellow;
      
    }
    .h5
    {
      color:#800000;
      font-size:25px;
      font-weight:700;
    }
    .he
    {
       color:black;
      font-size:38px;
      font-weight:700;
    }
  </style>
</head>
<body>
<div class="head">
<nav>
 	<div class="con">
      	<img src="img1.jpg" alt="" width="63" height="45">
     	<h5 class="heading">  ALL FOR BOOKS.Co.in</h5>
		<ul class="dropdown" >
    		<li><a class="dropdown1" href="home">HOME</a></li>
   			<li><a class="dropdown2" href="login">LOGIN</a></li>
    		<li><a class="dropdown3" href="register">REGISTER</a></li>
    		<li><a class="dropdown5" href="aboutus">ABOUT US</a></li>

  		</ul>
   	</div>
</nav>
</div>
<div class="arra">
<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators" id="indi">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="4" aria-label="Slide 5"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="5" aria-label="Slide 6"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="6" aria-label="Slide 7"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="7" aria-label="Slide 8"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="8" aria-label="Slide 9"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="9" aria-label="Slide 10"></button>
  </div>
   <h1 class="he">GUIDE TO USE THIS WEBSITE:</h1>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="slide1.jpg" class="d-block w-100" alt="..." id="img">
      <br>
      <div class="carousel-caption d-none d-md-block">
        <h5 class="h5">First step</h5>
        <p class="p1">CLICK ON THE REGISTRATION BUTTON.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="slide2.jpg" class="d-block w-100" alt="..." id="img">
      <br>
      <div class="carousel-caption d-none d-md-block">

        <h5 class="h5">Second step</h5>
        <p class="p2">FILL THE FORM TO REGISTER.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="slide3.jpg" class="d-block w-100" alt="..." id="img">
      <div class="carousel-caption d-none d-md-block">
        <h5 class="h5">Third step</h5>
        <p class="p3">TIME FOR EMAIL VERIFICATION.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="slide4.jpg" class="d-block w-100" alt="..." id="img">
      <br>
      <div class="carousel-caption d-none d-md-block">
          
        <h5 class="h5">Fouth step</h5>
        <p class="p4">ENTER THE CODE THAT SENT TO YOUR MAIL.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="slide 5.jpg" class="d-block w-100" alt="..." id="img">
      <br>
      <div class="carousel-caption d-none d-md-block">
        <h5 class="h5">Fivth step</h5>
        <p class="p5">LOGIN WITH YOUR USERNAME AND PASSWORD.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="slide 6.jpg" class="d-block w-100" alt="..." id="img">
      <br>
      <br>
      <div class="carousel-caption d-none d-md-block">
        <p class="p6">YOUR INFO.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="slide 7.jpg" class="d-block w-100" alt="..." id="img">
      <br>
      <div class="carousel-caption d-none d-md-block">
        <p class="p7">CLICK ON THE SELL BUTTON TO SELL A BOOK.</p>
      </div> 
    </div>
    <div class="carousel-item">
      <img src="slide 8.jpg" class="d-block w-100" alt="..." id="img">
      <div class="carousel-caption d-none d-md-block">
        <p class="p8">CLICK ON THE GET BUTTON TO BUY A BOOK.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="slide 9.jpg" class="d-block w-100" alt="..." id="img">
      <div class="carousel-caption d-none d-md-block">
        <p class="p9">CLICK ON THE SEARCH BUTTON TO SEE ALL THE BOOKS AVAILABLE.YOU CAN FILL THE FORM TO FILTER IT.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="slide 10.jpg" class="d-block w-100" alt="..." id="img">
      <div class="carousel-caption d-none d-md-block">
        <p class="p10">SELLER RECEIVES EMAIL WHEN YOU CLICK THE BUY BUTTON.</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev" id="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next" id="nex">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>