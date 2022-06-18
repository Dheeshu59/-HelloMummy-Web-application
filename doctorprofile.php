<?php 
include 'session.php';
include("database_connection.php");   
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title> Web Based Application for Pregnant mothers</title>
    <link rel="stylesheet" href="style2.css">
</head>

<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
<style>
  body{
	background-color: whitesmoke;
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
	background-image: url(docc.jpg);
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
    margin:70px 110px 20px ;
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
	<?php 
    $dr_ID = $_SESSION["user_ID"];
    $sql = "SELECT * FROM report where doctor_id ='".$dr_ID."'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
      // output data of each row
      while($row = $result->fetch_assoc()) {
        echo "<a style='
		margin-left: 12px;
		color: black;
		position: relative;
	' href='"."uploads/".$row['fileName']."' target='_blank'>".$row['fileName']."</a>";
          ?>
        <form action="SendEmail.php" method="post">
  <button name="user_id" type="submit" value="<?php echo $row['patient_ID'] ?>">Send Mail</button>
</form>
        <?php
      }
    } else {
		echo '<script>alert("There is no patient reports")</script>';
    }
    $conn->close();
?> 

        </div>
</body>
</html>