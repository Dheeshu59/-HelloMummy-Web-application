<?php 
include 'session.php';
include("database_connection.php");   
?>

<?php
    $sql="select * from user where ID='".$_POST['user_id']."' limit 1";
    
    $result = $conn->query($sql);
    
    $row = $result->fetch_assoc();
?>  


<!DOCTYPE html>
<html lang="en">
<head>
    <title> Web Based Application for Pregnant mothers</title>
</head>

<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
<style>
  body{
	background-color: #0B1027;
	box-shadow:0 05px 10px #000000;
	color: #CFA9AA;
	
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
	background-image: url(dd.webp);
}


/* start main-header */
#main-header{
	width: 100%;
	background-image: linear-gradient(187deg, rgba(236, 236, 236, 0.07) 0%, rgba(236, 236, 236, 0.07) 50%,rgba(160, 160, 160, 0.07) 50%, rgba(160, 160, 160, 0.07) 100%),linear-gradient(255deg, rgba(79, 79, 79, 0.09) 0%, rgba(79, 79, 79, 0.09) 50%,rgba(134, 134, 134, 0.09) 50%, rgba(134, 134, 134, 0.09) 100%),linear-gradient(191deg, rgba(80, 80, 80, 0.08) 0%, rgba(80, 80, 80, 0.08) 50%,rgba(132, 132, 132, 0.08) 50%, rgba(132, 132, 132, 0.08) 100%),linear-gradient(339deg, rgba(210, 210, 210, 0.04) 0%, rgba(210, 210, 210, 0.04) 50%,rgba(36, 36, 36, 0.04) 50%, rgba(36, 36, 36, 0.04) 100%),linear-gradient(173deg, rgba(68, 68, 68, 0.09) 0%, rgba(68, 68, 68, 0.09) 50%,rgba(57, 57, 57, 0.09) 50%, rgba(57, 57, 57, 0.09) 100%),linear-gradient(317deg, rgba(10, 10, 10, 0.01) 0%, rgba(10, 10, 10, 0.01) 50%,rgba(17, 17, 17, 0.01) 50%, rgba(17, 17, 17, 0.01) 100%),linear-gradient(173deg, rgba(25, 25, 25, 0.07) 0%, rgba(25, 25, 25, 0.07) 50%,rgba(127, 127, 127, 0.07) 50%, rgba(127, 127, 127, 0.07) 100%),linear-gradient(222deg, rgba(199, 199, 199, 0.05) 0%, rgba(199, 199, 199, 0.05) 50%,rgba(59, 59, 59, 0.05) 50%, rgba(59, 59, 59, 0.05) 100%),linear-gradient(232deg, rgba(161, 161, 161, 0.01) 0%, rgba(161, 161, 161, 0.01) 50%,rgba(28, 28, 28, 0.01) 50%, rgba(28, 28, 28, 0.01) 100%),linear-gradient(90deg, rgb(0,2,29),rgb(4,150,89),rgb(0,0,0));
    margin-top: -15px;
		
}
/*logo styling */

#logo
{
	width:250px;
	margin-top:10px;
}

#ist {
	color:#b9c0c5;
    font-size: 35px;
    font-weight: bold;
    font-family: cursive;
    margin-left: 15px;
}

/*Navigation Bar*/
#navigation{
	width: 100%;
	height: 35px;
	background-image: linear-gradient(75deg, rgba(155, 155, 155, 0.31) 0%, rgba(155, 155, 155, 0.31) 12.5%,rgba(134, 134, 134, 0.31) 12.5%, rgba(134, 134, 134, 0.31) 25%,rgba(113, 113, 113, 0.31) 25%, rgba(113, 113, 113, 0.31) 37.5%,rgba(92, 92, 92, 0.31) 37.5%, rgba(92, 92, 92, 0.31) 50%,rgba(70, 70, 70, 0.31) 50%, rgba(70, 70, 70, 0.31) 62.5%,rgba(49, 49, 49, 0.31) 62.5%, rgba(49, 49, 49, 0.31) 75%,rgba(28, 28, 28, 0.31) 75%, rgba(28, 28, 28, 0.31) 87.5%,rgba(7, 7, 7, 0.31) 87.5%, rgba(7, 7, 7, 0.31) 100%),linear-gradient(55deg, rgb(16, 16, 16) 0%, rgb(16, 16, 16) 12.5%,rgb(25, 25, 25) 12.5%, rgb(25, 25, 25) 25%,rgb(35, 35, 35) 25%, rgb(35, 35, 35) 37.5%,rgb(44, 44, 44) 37.5%, rgb(44, 44, 44) 50%,rgb(53, 53, 53) 50%, rgb(53, 53, 53) 62.5%,rgb(62, 62, 62) 62.5%, rgb(62, 62, 62) 75%,rgb(72, 72, 72) 75%, rgb(72, 72, 72) 87.5%,rgb(81, 81, 81) 87.5%, rgb(81, 81, 81) 100%);
	float:left;
	box-shadow:10px 14px 50px 2px #0c0c0c;
	margin-bottom: 100px;

}

nav{
	width:1280px;
	margin: 10px auto;
}

nav a {
	margin-left: 35px;
	color:white;
	text-decoration:none; 
	
}

nav a:hover{
	color:rgb(15, 1, 1);
	transition:all .7s  ease;
	text-decoration: none;
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
	color:#fff;
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

/*=======category box=====*/
.catbox{
	width:178px;
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
/*******************/

form  {
    position: relative;
    margin: 63px 50px 0;
    border-radius: 5px;
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
            <!---------=======navigation bar========----->	    
            <div id="navigation">
              <nav>
			  <a href="home.php"> Home</a>
				<a href="babyproducts.html">Baby products</a>
				<a href="Management Faculty.php">Q&A forum</a>
       		 	<a  href="doctorprofile.php">Doctor's Profile</a>
				<a href="Articles.html">Read Articles</a>
				<a href="map.html">Find Channelling center</a>
				<a href="about.html">About</a>
				<a href="chatbot/contactus.html">Contact us</a>
                <a href="logout.php" ><i style="color:#81C3D7" class="fas fa-sign-out-alt"></i></a>
              </nav>          
            </div>
          </div>
          <!-- /.navbar-collapse -->
        </div>
    </div>
  <!---------send email form------->
<p>This example shows how to send an e-mail from a form:</p>

<form action="SendingEmail.php" method="post" >
  <label style="
    color: black;
" for="email">Email:</label>
  <input type="text" id="email" name="email" value="<?php echo $row['Email'] ?>" readonly><br><br>
  <label style="
    color: black;
"  for="subject">Subject:</label>
  <input type="text" id="subject" name="subject" size="50"><br><br>
  <label style="
    color: black;
" for="comment">Comment:</label>
  <input type="text" id="comment" name="comment" size="80" ><br><br>
  <input type="submit" value="Send">
  <input type="reset" value="Reset">
</form>

</body>
</html>

