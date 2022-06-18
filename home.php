<!DOCTYPE html>
<html lang="en">
  <head>
  <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <title> Web Based Application for Pregnant mothers</title>
      <!-- Latest compiled and minified CSS -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
      <!-- jQuery library -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
      <!-- Latest compiled JavaScript -->
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

  </head>
  <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
<style>
 body{
    background-image: linear-gradient(187deg, rgba(236, 236, 236, 0.07) 0%, rgba(236, 236, 236, 0.07) 50%,rgba(160, 160, 160, 0.07) 50%, rgba(160, 160, 160, 0.07) 100%),linear-gradient(255deg, rgba(79, 79, 79, 0.09) 0%, rgba(79, 79, 79, 0.09) 50%,rgba(134, 134, 134, 0.09) 50%, rgba(134, 134, 134, 0.09) 100%),linear-gradient(191deg, rgba(80, 80, 80, 0.08) 0%, rgba(80, 80, 80, 0.08) 50%,rgba(132, 132, 132, 0.08) 50%, rgba(132, 132, 132, 0.08) 100%),linear-gradient(339deg, rgba(210, 210, 210, 0.04) 0%, rgba(210, 210, 210, 0.04) 50%,rgba(36, 36, 36, 0.04) 50%, rgba(36, 36, 36, 0.04) 100%),linear-gradient(173deg, rgba(68, 68, 68, 0.09) 0%, rgba(68, 68, 68, 0.09) 50%,rgba(57, 57, 57, 0.09) 50%, rgba(57, 57, 57, 0.09) 100%),linear-gradient(317deg, rgba(10, 10, 10, 0.01) 0%, rgba(10, 10, 10, 0.01) 50%,rgba(17, 17, 17, 0.01) 50%, rgba(17, 17, 17, 0.01) 100%),linear-gradient(173deg, rgba(25, 25, 25, 0.07) 0%, rgba(25, 25, 25, 0.07) 50%,rgba(127, 127, 127, 0.07) 50%, rgba(127, 127, 127, 0.07) 100%),linear-gradient(222deg, rgba(199, 199, 199, 0.05) 0%, rgba(199, 199, 199, 0.05) 50%,rgba(59, 59, 59, 0.05) 50%, rgba(59, 59, 59, 0.05) 100%),linear-gradient(232deg, rgba(161, 161, 161, 0.01) 0%, rgba(161, 161, 161, 0.01) 50%,rgba(28, 28, 28, 0.01) 50%, rgba(28, 28, 28, 0.01) 100%),linear-gradient(90deg, rgb(0,2,29),rgb(4,150,89),rgb(0,0,0));
    box-shadow:0 05px 10px #000000;
    color: rgb(219, 181, 181);
    
  
  }
  #wrapper{font-family:tahoma; }
  
  .container{
    width:100%;
    max-width:1280px;  
    margin: 0 auto;
    margin-top: 100px;
  }
  
  .full-page
  {
    height: 100%;
      width: 100%;
      background-position: center;
      background-size: cover;
      position: absolute;
  }
  
  
  /*logo styling */
  #main-header{
    width:100%;
    height:100px;
    background-image: linear-gradient(187deg, rgba(236, 236, 236, 0.07) 0%, rgba(236, 236, 236, 0.07) 50%,rgba(160, 160, 160, 0.07) 50%, rgba(160, 160, 160, 0.07) 100%),linear-gradient(255deg, rgba(79, 79, 79, 0.09) 0%, rgba(79, 79, 79, 0.09) 50%,rgba(134, 134, 134, 0.09) 50%, rgba(134, 134, 134, 0.09) 100%),linear-gradient(191deg, rgba(80, 80, 80, 0.08) 0%, rgba(80, 80, 80, 0.08) 50%,rgba(132, 132, 132, 0.08) 50%, rgba(132, 132, 132, 0.08) 100%),linear-gradient(339deg, rgba(210, 210, 210, 0.04) 0%, rgba(210, 210, 210, 0.04) 50%,rgba(36, 36, 36, 0.04) 50%, rgba(36, 36, 36, 0.04) 100%),linear-gradient(173deg, rgba(68, 68, 68, 0.09) 0%, rgba(68, 68, 68, 0.09) 50%,rgba(57, 57, 57, 0.09) 50%, rgba(57, 57, 57, 0.09) 100%),linear-gradient(317deg, rgba(10, 10, 10, 0.01) 0%, rgba(10, 10, 10, 0.01) 50%,rgba(17, 17, 17, 0.01) 50%, rgba(17, 17, 17, 0.01) 100%),linear-gradient(173deg, rgba(25, 25, 25, 0.07) 0%, rgba(25, 25, 25, 0.07) 50%,rgba(127, 127, 127, 0.07) 50%, rgba(127, 127, 127, 0.07) 100%),linear-gradient(222deg, rgba(199, 199, 199, 0.05) 0%, rgba(199, 199, 199, 0.05) 50%,rgba(59, 59, 59, 0.05) 50%, rgba(59, 59, 59, 0.05) 100%),linear-gradient(232deg, rgba(161, 161, 161, 0.01) 0%, rgba(161, 161, 161, 0.01) 50%,rgba(28, 28, 28, 0.01) 50%, rgba(28, 28, 28, 0.01) 100%),linear-gradient(90deg, rgb(0,2,29),rgb(4,150,89),rgb(0,0,0));
    float:left;
    margin-top:-15px;
      
  }
  
  #logo
  {
    width:250px;
    margin-top:10px;
    float:left;
  }
  
  #ist
  {	color:#b9c0c5;
    font-size:40px;
    font-weight:bold;
    margin-left:15px;
    font-family:cursive;  
  }
  
  #iist
  {
    color:black;
    font-size:35px;
    font-weight:bold;
    font-family:cursive;
    
  }
    .menu-bar ul {
      list-style: none;
      display: flex;
      width: 100%;
    height: 35px;
    background-image: linear-gradient(75deg, rgba(155, 155, 155, 0.31) 0%, rgba(155, 155, 155, 0.31) 12.5%,rgba(134, 134, 134, 0.31) 12.5%, rgba(134, 134, 134, 0.31) 25%,rgba(113, 113, 113, 0.31) 25%, rgba(113, 113, 113, 0.31) 37.5%,rgba(92, 92, 92, 0.31) 37.5%, rgba(92, 92, 92, 0.31) 50%,rgba(70, 70, 70, 0.31) 50%, rgba(70, 70, 70, 0.31) 62.5%,rgba(49, 49, 49, 0.31) 62.5%, rgba(49, 49, 49, 0.31) 75%,rgba(28, 28, 28, 0.31) 75%, rgba(28, 28, 28, 0.31) 87.5%,rgba(7, 7, 7, 0.31) 87.5%, rgba(7, 7, 7, 0.31) 100%),linear-gradient(55deg, rgb(16, 16, 16) 0%, rgb(16, 16, 16) 12.5%,rgb(25, 25, 25) 12.5%, rgb(25, 25, 25) 25%,rgb(35, 35, 35) 25%, rgb(35, 35, 35) 37.5%,rgb(44, 44, 44) 37.5%, rgb(44, 44, 44) 50%,rgb(53, 53, 53) 50%, rgb(53, 53, 53) 62.5%,rgb(62, 62, 62) 62.5%, rgb(62, 62, 62) 75%,rgb(72, 72, 72) 75%, rgb(72, 72, 72) 87.5%,rgb(81, 81, 81) 87.5%, rgb(81, 81, 81) 100%);
    float:left;
    box-shadow:10px 14px 50px 2px #0c0c0c;
    }
    
    .menu-bar ul li {
      /* width: 120px; */
      padding: 10px 30px;
      /* text-align: center; */
    
      position: relative;
    }
    
    .menu-bar ul li a {
      font-size: 12px;
      color: white;
      text-decoration: none;
    
      transition: all 0.3s;
    }
    
    .menu-bar ul li a:hover {
      color:rgb(15, 1, 1);
    transition:all .7s  ease;
    text-decoration: none;
    }
    
    /* dropdown menu style */
    .dropdown-menu {
      display: none;
    }
    
    .menu-bar ul li:hover .dropdown-menu {
      display: block;
      position: absolute;
      left: 0;
      top: 100%;
      background-color: var(--color-black);
    }
    
    .menu-bar ul li:hover .dropdown-menu ul {
      display: block;
      margin: 10px;
    }
    
    .menu-bar ul li:hover .dropdown-menu ul li {
      width: 150px;
      padding: 10px;
    }
    
    .dropdown-menu-1 {
      display: none;
    }
    
    .dropdown-menu ul li:hover .dropdown-menu-1 {
      display: block;
      position: absolute;
      left: 150px;
      top: 0;
      background-color: var(--color-black);
    }
    
  
  /* end main-header */
  
  #subheader p
  {
    
    float:left;
    margin-top:7px;
     
  }
  
  #subheader a{ 
    float:right;
    line-height:30px;
    color:#766d7e;
    text-decoration:none;  
    margin-left:30px;
    
  }
  
  /*user menu stylings*/
  #user-menu
  {
    width:300px;
    float:right;
    margin-top:20px;
  }
  /*list stylings*/
  #user-menu li
  {
    float:left;
    width:140px;
    text-align:center;
    list-style:none;
    font-size:25px;
    border-left: 1px solid black;
    
  }
  
  #user-menu li:hover
  {
    font-size:30px;
    transition:all .5s ease;
  }
  
  #user-menu li a{
    color: white;
    text-decoration:none;
  }
  
  .welcome{
    font-size: 40px;
    text-align: center;
  }
  
  .this-website{
    font-size: 20px;
    text-align: center;
    padding: 20px;
    margin-top: 20px;
  }
  
  /**********************/
  
  /*=========categories======*/
  #headingblock
  {
    width:100%;
    height:auto;
    float:left;
    color:#859faa;
    font-size: 22px;
    font-weight:bold;
  }
  
  #headingblock h2
  {
    line-height:35px;
    border-left:20px solid #b9c0c5;
    padding-left:10px;
  }
  
  .text-center{
    font-size: 20px;
    margin-top: 100px;
    margin-bottom: 40px;
  }
  .right-col{
    float:right;
    margin-right: 6px;
    margin-top: 0px;
    display:flex;
    align-items: center;
  }
  
  .right-col p{
    font-size: 18px;
    color: white;
    font-weight: 300;
    margin-right: 15px;
  }
  #icon{
    width: 80px;
    cursor: pointer;
  }
  /*=======category box=====*/
  .catbox{
    width:198px;
    height:225px;
    float:left;
    overflow:hidden;
    position:relative;
    margin-left: 30px;
    margin-top: 2px;
    margin-bottom: 10px;
    margin-right: 20px;
    
  }
  
  .catbox span{
    width:100%;
    height:35px;
    line-height:35px;
    background:rgba(0,0,0,0.6);
    color:white;
    display:block;
    bottom:30px;
    position: absolute;
    z-index:999;
    text-align:center;
  }
  
  .catbox img{
    max-width:100%;
    transition:all .5s ease;
  }
  
  .catbox:hover img{
    transform:scale(1.9,1.9);
    transition:all .5s ease;
  }
  
  /*=======Quiz box====*/
  .catbox2{
    width:315px;
    height:270px;
    float:left;
    overflow:hidden;
    position:relative;
    margin-left: 30px;
    margin-top: 2px;
    margin-bottom: 10px;
    margin-right: 20px;
    border-radius: 20%;
  }
  
  .catbox2 span{
    width:100%;
    height:35px;
    line-height:15px;
    background:rgba(0,0,0,0.6);
    color:white;
    display:block;
    bottom:30px;
    position: absolute;
    z-index:999;
    text-align:center;
  }
  
  .catbox2 img{
    max-width:100%;
    transition:all .5s ease;
  }
  
  .catbox2:hover img{
    transform:scale(1.9,1.9);
    transition:all .5s ease;
  }
  /*=======More And More====*/
  .catbox3{
    width:262px;
    height:300px;
    float:left;
    overflow:hidden;
    position:relative;
    margin-left: 30px;
    margin-top: 2px;
    margin-bottom: 10px;
    margin-right: 20px;
  
  }
  
  
  
  .catbox3 span{
    width:100%;
    height:35px;
    line-height:15px;
    background:rgba(0,0,0,0.6);
    color:white;
    display:block;
    bottom:30px;
    position: absolute;
    z-index:999;
    text-align:center;
  }
  
  .catbox3 img{
    max-width:100%;
    transition:all .5s ease;
  }
  
  .catbox3:hover img{
    transform:scale(1.9,1.9);
    transition:all .5s ease;
  }
  /* footer*/
  footer {
      position: fixed;
      bottom: 0;
  }
  
  @media (max-height:800px) {
      footer {
          position: static;
      }
      header {
          padding-top: 40px;
      }
  }
  
  .footer-distributed {
    background-image: linear-gradient(75deg, rgba(155, 155, 155, 0.31) 0%, rgba(155, 155, 155, 0.31) 12.5%,rgba(134, 134, 134, 0.31) 12.5%, rgba(134, 134, 134, 0.31) 25%,rgba(113, 113, 113, 0.31) 25%, rgba(113, 113, 113, 0.31) 37.5%,rgba(92, 92, 92, 0.31) 37.5%, rgba(92, 92, 92, 0.31) 50%,rgba(70, 70, 70, 0.31) 50%, rgba(70, 70, 70, 0.31) 62.5%,rgba(49, 49, 49, 0.31) 62.5%, rgba(49, 49, 49, 0.31) 75%,rgba(28, 28, 28, 0.31) 75%, rgba(28, 28, 28, 0.31) 87.5%,rgba(7, 7, 7, 0.31) 87.5%, rgba(7, 7, 7, 0.31) 100%),linear-gradient(55deg, rgb(16, 16, 16) 0%, rgb(16, 16, 16) 12.5%,rgb(25, 25, 25) 12.5%, rgb(25, 25, 25) 25%,rgb(35, 35, 35) 25%, rgb(35, 35, 35) 37.5%,rgb(44, 44, 44) 37.5%, rgb(44, 44, 44) 50%,rgb(53, 53, 53) 50%, rgb(53, 53, 53) 62.5%,rgb(62, 62, 62) 62.5%, rgb(62, 62, 62) 75%,rgb(72, 72, 72) 75%, rgb(72, 72, 72) 87.5%,rgb(81, 81, 81) 87.5%, rgb(81, 81, 81) 100%);
      box-sizing: border-box;
      width: 100%;
      text-align: left;
      font: bold 16px sans-serif;
      padding: 50px 50px 60px 50px;
      margin-top: 80px;
  }
  
  .footer-distributed .footer-left, .footer-distributed .footer-center, .footer-distributed .footer-right {
      display: inline-block;
      vertical-align: top;
  }
  
  /* Footer left */
  
  .footer-distributed .footer-left {
      width: 30%;
  }
  
  .footer-distributed h3 {
      color: #ffffff;
      font: normal 36px 'Cookie', cursive;
      margin: 0;
  }
  
  
  .footer-distributed h3 span {
      color: #e0ac1c;
  }
  
  /* Footer links */
  
  .footer-distributed .footer-links {
      color: #ffffff;
      margin: 20px 0 12px;
  }
  
  .footer-distributed .footer-links a {
      display: inline-block;
      line-height: 1.8;
      text-decoration: none;
      color: inherit;
  }
  
  .footer-distributed .footer-company-name {
      color: #8f9296;
      font-size: 14px;
      font-weight: normal;
      margin: 0;
  }
  
  /* Footer Center */
  
  .footer-distributed .footer-center {
      width: 35%;
  }
  
  .footer-distributed .footer-center i {
      background-color: #33383b;
      color: #ffffff;
      font-size: 25px;
      width: 38px;
      height: 38px;
      border-radius: 50%;
      text-align: center;
      line-height: 42px;
      margin: 10px 15px;
      vertical-align: middle;
  }
  
  .footer-distributed .footer-center i.fa-envelope {
      font-size: 17px;
      line-height: 38px;
  }
  
  .footer-distributed .footer-center p {
      display: inline-block;
      color: #ffffff;
      vertical-align: middle;
      margin: 0;
  }
  
  .footer-distributed .footer-center p span {
      display: block;
      font-weight: normal;
      font-size: 14px;
      line-height: 2;
  }
  
  .footer-distributed .footer-center p a {
      color: #e0ac1c;
      text-decoration: none;
      ;
  }
  
  /* Footer Right */
  
  .footer-distributed .footer-right {
      width: 30%;
  }
  
  .footer-distributed .footer-company-about {
      line-height: 20px;
      color: #92999f;
      font-size: 13px;
      font-weight: normal;
      margin: 0;
  }
  
  .footer-distributed .footer-company-about span {
      display: block;
      color: #ffffff;
      font-size: 18px;
      font-weight: bold;
      margin-bottom: 20px;
  }
  
  .footer-distributed .footer-icons {
      margin-top: 25px;
  }
  
  .footer-distributed .footer-icons a {
      display: inline-block;
      width: 35px;
      height: 35px;
      cursor: pointer;
      background-color: #33383b;
      border-radius: 2px;
      font-size: 20px;
      color: #ffffff;
      text-align: center;
      line-height: 35px;
      margin-right: 3px;
      margin-bottom: 5px;
  }
  
  .footer-distributed .footer-icons a:hover {
      background-color: #3F71EA;
  }
  
  .footer-links a:hover {
      color: #3F71EA;
  }
  
  @media (max-width: 880px) {
      .footer-distributed .footer-left, .footer-distributed .footer-center, .footer-distributed .footer-right {
          display: block;
          width: 100%;
          margin-bottom: 40px;
          text-align: center;
      }
      .footer-distributed .footer-center i {
          margin-left: 0;
      }
    } 

</style>
<body>
  
  <div id="navigation" class="navbar navbar-inverse navbar-fixed-top default" role="navigation">
      <div class="full-page">
        <!----------===== main  header=====----------->        
        <div id="main-header">
          <!---------logo------->
          <div id="logo" >             
            <span id="ist">HELLO</span><span id="ist">MUMMY </span>            
          </div>    
<div class="menu-bar">

<ul>
<li><a href="home.php"> Home</a></li>
  <li><a href="advices.html">Advices</a></li>
  <li><a href="Bmicalculator.html">BMI Calculator</a></li>
  <li><a href="#">Quizzes <i class="fas fa-caret-down"></i></a>

      <div class="dropdown-menu">
          <ul>
            <li><a href="mathquiz/mathquiz.html">Mathquiz</a></li>
            <li><a href="randomquote.html">Random Quotes</a></li>
            <li><a href="babynamegenerator.html">Name Generator</a></li>
            <li><a href="Babyproducts.html">Baby products</a></li>
            <li><a href="genderquiz/genderquiz.html">Gender Prediction Quiz</a></li>
            <li><a href="puzzle/puzzle.html">Puzzle Game</a></li>
           

            <li>
              <a href="#">Gallery <i class="fas fa-caret-right"></i></a>
              
              <div class="dropdown-menu-1">
                <ul>
                  <li><a href="photogallery/photogallery.html">Photo Gallery</a></li>
                  <li><a href="musicgallery.html">Music Gallery</a></li>
                  <li><a href="videos/videogallery.html">Video Gallery</a></li>
                </ul>
              </div>
            </li>
            
        </div>
        <li><a href="#">Check Report <i class="fas fa-caret-down"></i></a>
          <div class="dropdown-menu">
            <ul>
        <li><a  href="checkreport.php">Upload Reports</a></li>
        <li><a  href="doctors.html">Doctors Profile</a></li>
        </ul>
      </li>
           <li> <a href="forum/forum.php">Q&A forum</a></li>
          <li><a href="Articles.html">Read Articles</a></li>
      <li><a href="map.html">Find Channelling center</a></li>
  <li><a href="about.html">About</a></li>
<li><a href="chatbot/contactus.html">Contact us</a></li>
<li><a href="logout.php" ><i style="color:#81C3D7" class="fas fa-sign-out-alt"></i></a></li>
          </ul>
  
</div>
          </div>
          <!-- /.navbar-collapse -->
        </div>
    </div>


    <div class=" container-fluid">
      <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
          <div class="right-col">
          <p> Click here to listen </p>
            <img src="img/play.png" id="icon" >
          </div>
          <audio id= "mysong">
            <source src="music.mp3" type=" audio/mp3">
          </audio>
        </ol>
      
        <!-- Wrapper for slides -->
        <div class="carousel-inner">
          <div class="item active">
            <img src="img/log (2).jpg" alt="Los Angeles">
          </div>
          <div class="item">
            <img src="img/log (16).jpg" alt="Chicago">
          </div>
          <div class="item">
            <img src="img/log (3).jpg" alt="New york">
          </div>
        </div>
      </div>
</div>      
    <br>
    <h2 class="welcome"> WELCOME TO HELLO MUMMY</h2>
    <p  class="this-website"> 
      This website is for currently pregnant women as well as for those who are wishing to be pregnant in the future. This will support mentally and physically and provide necessary guidelines to encourage them to deliver a 
      healthy baby..<br>
    </p>

    <!----categories-------->
    <div class="container">

        <div id="headingblock">
          <h2>Month By Month</h2>	
        </div>

        <p class="text-center"> 
          From the first month of pregnancy to the last, your baby is getting ready for life in the outside world.
          <br>
          Track your pregnancy as the months progress.
        </p> 

        <!-------1st catbox------>
        <a href="1month.html">
          <div class="catbox">
            <img src="img/Pregnant (1).png" alt="equipments"> 
            <span>CLICK HERE</span>
          </div>
        </a>

        <!-------2nd catbox------>
        <a href="2month.html">
          <div class="catbox">
            <img src="img/month (1).png"> 
            <span>CLICK HERE</span>
          </div>
        </a>	

        <!-------3rd catbox------>
        <a href="3month.html">
          <div class="catbox">
            <img src="img/month (2).png"> 
            <span>CLICK HERE</span>
          </div>
        </a>

        <!-------4rd catbox------>
        <a href="4month.html">
          <div class="catbox">
            <img src="img/month (3).png"> 
            <span>CLICK HERE</span>
          </div>
        </a>	

        <!-------5rd catbox------>
        <a href="5month.html">
          <div class="catbox">
            <img src="img/month (4).png"> 
            <span>CLICK HERE</span>
          </div>
        </a>

        <!-------6rd catbox------>
        <a href="6month.html">
          <div class="catbox">
            <img src="img/month (5).png"> 
            <span>CLICK HERE</span>
          </div>
        </a>

        <!-------7rd catbox------>
        <a href="7month.html">
          <div class="catbox">
            <img src="img/month (6).png"> 
            <span>CLICK HERE</span>
          </div>
        </a>

        <!-------7rd catbox------>
        <a href="8month.html">
          <div class="catbox">
            <img src="img/month (7).png"> 
            <span>CLICK HERE</span>
          </div>
        </a>
        <!-------8rd catbox------>
        <a href="9month.html">
          <div class="catbox">
            <img src="img/month (8).png"> 
            <span>CLICK HERE</span>
          </div>	
        </a>
    </div>
    <div class="container">
<div id="headingblock">
  <h2>Quizzes</h2>
<p class="text-center"> Are you ready to proceed? We've got all of your favorite quizzes!
Come on in and get yourself in a good mood and enjoy your quiz to the fullest!
Good Luck and Hope you enjoy! 
</p> 
 <br>
        <!-------1st catbox------>
          <a href="mathquiz/mathquiz.html">
          <div class="catbox2">
          <img src="img/Quiz1.gif"> 
            <span>START</span>
          </div>
        </a>

        <!-------2nd catbox------>
        <a href="genderquiz/genderquiz.html">
          <div class="catbox2">
          <img src="genderquiz/quiz (2).gif "> 
            <span>START</span>
          </div>
        </a>	

        <!-------3rd catbox------>
        <a href="puzzle/puzzle.html">
          <div class="catbox2">
          <img src="img/Quizz (2).gif"> 
            <span>START</span>
          </div>
        </a>

        <!-------4rd catbox------>
        <a href="babynamegenerator.html">
          <div class="catbox2">
          <img src="img/Quiz2.gif"> 
            <span>START</span>
          </div>
        </a>	

        <!-------5rd catbox------>
        <a href="randomquote.html">
          <div class="catbox2">
          <img src="img/Quizz (1).gif"> 
            <span>START</span>
          </div>
        </a>
 <!-------6rd catbox------>
 <a href="videos/videogallery.html">
          <div class="catbox2">
          <img src="img/quiz3.gif"> 
            <span>CLICK HERE</span>
          </div>
        </a>

         <!-------7rd catbox------>
 <a href="photogallery/photogallery.html">
          <div class="catbox2">
          <img src="img/quiz (1).gif"> 
            <span>CLICK HERE</span>
          </div>
        </a> <!-------8rd catbox------>
        <a href="musicgallery.html">
          <div class="catbox2">
          <img src="img/Quiz.gif"> 
            <span>CLICK HERE</span>
          </div>
        </a>

        <img src = "mm1.gif" align= "right" >
    </div>
    </div>

    <div class="container">
      <div id="headingblock">
       <h2>More And More</h2>
       <br>
      <!-------1st catbox------>
      <a href="Articles.html">
        <div class="catbox3">
        <img src="img/read.gif"> 
          <span>READ ARTICLES</span>
        </div>
      </a>

      <!-------2nd catbox------>
      <a href="Babyproducts.html">
        <div class="catbox3">
        <img src="img/more (2).gif"> 
          <span>BABY ESSENTIALS</span>
        </div>
      </a>	

      <!-------3rd catbox------>
      <a href="checkreport.php">
        <div class="catbox3">
        <img src="img/more (1).png"> 
          <span>CHECK REPORT </span>
        </div>
      </a>
       <!-------4rd catbox------>
       <a href="chatbot/contactus.html">
        <div class="catbox3">
        <img src="img/more (3).gif"> 
          <span>TALK WITH CHATBOT</span>
        </div>
      </a>
       <!-------5rd catbox------>
       <a href="map.html">
        <div class="catbox3">
        <img src="img/more (1).gif"> 
          <span>MAP SERVICE</span>
        </div>
      </a>
       <!-------5rd catbox------>
       <a href="Bmicalculator.html">
        <div class="catbox3">
        <img src="img/more (2).png"> 
          <span>CHECK YOUR BMI</span>
        </div>
      </a>
          <!-------6rd catbox------>
          <a href="forum/forum.php">
            <div class="catbox3">
            <img src="img/more (3).png"> 
              <span>Q&A FORUM </span>
            </div>
          </a>
           <!-------6rd catbox------>
       <a href="advices.html">
        <div class="catbox3">
        <img src="img/advices.png"> 
          <span>ADVICES</span>
        </div>
      </a>
      </div>
    </div>
    <script>
      $('.carousel').carousel({
        interval:1500
      })
    </script> 
<script> 
        var mysong = document.getElementById("mysong");
        var icon=document.getElementById("icon");

        icon.onclick=function(){
          if(mysong.paused){
            mysong.play();
            icon.src="img/pause.png";
          } else{
            mysong.pause();
            icon.src="img/play.png";
          }
        }
        </script>
          <!---------footer------->
<footer class="footer-distributed">

  <div class="footer-left">
      <h3>Hello<span>Mummy</span></h3>

      <p class="footer-links">
          <a href="home.php">Home</a>
          |
          <a href="about.html">About</a>
          |
          <a href="contactus.html">Contact</a>
          |
          <a href="index.php">Login</a>
          |
          <a href="checkreport.php">Check Report</a>
          |
          <a href="forum/forum.php">Q&A Forum</a>
          |
          <a href="Babyproducts.html">Baby Essentials</a>
          |
          <a href="Bmicalculator.html">BMI Calculator</a>
          |
          <a href="advices.html">Advices</a>
          |
          <a href="Articles.html">Read Articles</a>
          |
          <a href="map.html">Find Location</a>
      </p>

     
  </div>

  <div class="footer-center">
    <span>Fun Time</span>
    <ul>
      <li><a href="mathquiz/mathquiz.html">Mathquiz</a></li>
      <li><a href="randomquote.html">Random Quotes</a></li>
      <li><a href="babynamegenerator.html">Name Generator</a></li>
      <li><a href="genderquiz/genderquiz.html">Gender Prediction Quiz</a></li>
      <li><a href="puzzle/puzzle.html">Puzzle Game</a></li>
      <li><a href="photogallery/photogallery.html">Photo Gallery</a></li>
      <li><a href="musicgallery.html">Music Gallery</a></li>
      <li><a href="videos/videogallery.html">Video Gallery</a></li>

</ul>
  </div>
  </div>
  
  <div class="footer-right">
      <p class="footer-company-about">
          <span>Our Mission</span>
          <strong>Hello Mummy</strong> is a web based application which support Pregnant women with mentally, physically and provide necessary guidelines to encourage them to deliver a healthy baby.
      </p>
      <div>
        <br>
        <i class="fa fa-envelope"></i>
        <p>hellomummyrep2022@gmail.com</p>
    </div>
  </div>
</footer>

  </body>
</html>


