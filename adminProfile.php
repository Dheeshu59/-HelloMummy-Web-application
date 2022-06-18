<?php 
include 'session.php';
include("database_connection.php");   
?><!DOCTYPE html>
<html lang="en">

<head>
    <title> Web Based Application for Pregnant mothers</title>
</head>
</head>
<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>

<style>
    body {
        
        margin: 0%;
    }
    
    #wrapper {
        font-family: tahoma;
    }
    
    .container {
        width: 100%;
        max-width: 1280px;
        margin: 0 auto;
    }
    
  
    
    
  
    /*logo styling */
    
    #logo {
        width: 250px;
        margin-top: 10px;
    }
    
    #ist {
        color:#b9c0c5;
        font-size: 35px;
        font-weight: bold;
        font-family: cursive;
        margin-left: 15px;
    }
    /*Navigation Bar*/
    
    #navigation {
        width: 100%;
        height: 35px;
        background-image: linear-gradient(75deg, rgba(155, 155, 155, 0.31) 0%, rgba(155, 155, 155, 0.31) 12.5%,rgba(134, 134, 134, 0.31) 12.5%, rgba(134, 134, 134, 0.31) 25%,rgba(113, 113, 113, 0.31) 25%, rgba(113, 113, 113, 0.31) 37.5%,rgba(92, 92, 92, 0.31) 37.5%, rgba(92, 92, 92, 0.31) 50%,rgba(70, 70, 70, 0.31) 50%, rgba(70, 70, 70, 0.31) 62.5%,rgba(49, 49, 49, 0.31) 62.5%, rgba(49, 49, 49, 0.31) 75%,rgba(28, 28, 28, 0.31) 75%, rgba(28, 28, 28, 0.31) 87.5%,rgba(7, 7, 7, 0.31) 87.5%, rgba(7, 7, 7, 0.31) 100%),linear-gradient(55deg, rgb(16, 16, 16) 0%, rgb(16, 16, 16) 12.5%,rgb(25, 25, 25) 12.5%, rgb(25, 25, 25) 25%,rgb(35, 35, 35) 25%, rgb(35, 35, 35) 37.5%,rgb(44, 44, 44) 37.5%, rgb(44, 44, 44) 50%,rgb(53, 53, 53) 50%, rgb(53, 53, 53) 62.5%,rgb(62, 62, 62) 62.5%, rgb(62, 62, 62) 75%,rgb(72, 72, 72) 75%, rgb(72, 72, 72) 87.5%,rgb(81, 81, 81) 87.5%, rgb(81, 81, 81) 100%);
        float: left;
        box-shadow: 10px 14px 50px 2px #0c0c0c;
    }
    
    nav {
        width: 1280px;
        margin: 10px auto;
    }
    
    nav a {
        margin-left: 35px;
        color: white;
        text-decoration: none;
    }
    
    nav a:hover {
        color: rgb(15, 1, 1);
        transition: all .7s ease;
    }
    /* end main-header */
    /* start login-page */
    
    .form-box {
        width: 380px;
        height: 480px;
        position: relative;
        margin: 100px auto;
        background: rgb(0 0 0 / 78%);
        padding: 10px;
        overflow: hidden;
    }
    
    .button-box {
        width: 220px;
        margin: 35px auto;
        position: relative;
        box-shadow: 0 0 20px 9px #ff61241f;
        border-radius: 30px;
    }
    
    .toggle-btn {
        padding: 10px 30px;
        cursor: pointer;
        background: transparent;
        border: 0;
        outline: none;
        position: relative;
        color: white;
    }
    
    #btn {
        top: 0;
        left: 0;
        position: absolute;
        width: 110px;
        height: 100%;
        background: #F3C693;
        border-radius: 30px;
        transition: .5s;
    }
    
    .input-group-login {
        top: 150px;
        position: absolute;
        width: 280px;
        transition: .5s;
    }
    
    .input-group-register {
        top: 120px;
        position: absolute;
        width: 280px;
        transition: .5s;
    }
    
    .input-field {
        width: 100%;
        padding: 10px 0;
        margin: 5px 0;
        border-left: 0;
        border-top: 0;
        border-right: 0;
        border-bottom: 1px solid #999;
        outline: none;
        background: transparent;
    }
    
    .submit-btn {
        width: 85%;
        padding: 10px 30px;
        cursor: pointer;
        display: block;
        margin: auto;
        background: #F3C693;
        border: 0;
        outline: none;
        border-radius: 30px;
    }
    
    .check-box {
        margin: 30px 10px 34px 0;
    }
    
    #login {
        left: 50px;
    }
    
    #login input {
        color: white;
        font-size: 15;
    }
    
    #register {
        left: 450px;
    }
    
    #register input {
        color: white;
        font-size: 15;
    }
    /* end login-page */
    
    #subheader p {
        float: left;
        margin-top: 7px;
    }
    
    #subheader a {
        float: right;
        line-height: 30px;
        color: #fff;
        text-decoration: none;
        margin-left: 30px;
    }
    /*user menu stylings*/
    
    #user-menu {
        width: 300px;
        float: right;
        margin-top: 20px;
    }
    /*list stylings*/
    
    #user-menu li {
        float: left;
        width: 140px;
        text-align: center;
        list-style: none;
        font-size: 25px;
        border-left: 1px solid black;
    }
    
    #user-menu li:hover {
        font-size: 30px;
        transition: all .5s ease;
    }
    
    #user-menu li a {
        color: white;
        text-decoration: none;
    }
    #customers {
      padding: 20px;
      margin-top:30px;
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 45%;
}
    
#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}
</style> 
	
<body>
    <style>
		body{
			background-image: url(img/admin.gif);
			box-shadow:0 05px 10px #000000;
			color: #000000;;
			
		}
		</style>
	
	<div class="full-page">
	<!----------===== main  header=====----------->
		
		<div id="main-header">
		<!---------logo------->
			<div id="logo">
               
			<span id="ist">HELLO</span><span id="ist">MUMMY </span>
            
			</div>
     
		
			
			
			<!---------=======navigation bar========----->	
           
            
		<div id="navigation">
		<nav>
                <a href="home.php"> Home</a>
                <a href="adminProfile.php">Admin </a>
                <a href="logout.php" ><i style="color:#81C3D7" class="fas fa-sign-out-alt"></i></a>
			</nav>
		</div>
            </div>

            <table id="customers">
  


<?php 
    $sql = "SELECT * FROM user where Type <> 'admin'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
      // output data of each row
      while($row = $result->fetch_assoc()) {
          ?>
        <tr>
    <th><?php echo $row['FirstName']." ".$row['LastName'] ?></th>
    <th><?php echo $row['Email'] ?></th>
    <th><?php echo $row['Type'] ?></th>
  </tr>
        <?php
      }
    } else {
      echo "There is no users";
    }
    $conn->close();
?>  
</table>
        </div>
</body>
</html>