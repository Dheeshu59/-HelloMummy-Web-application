<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title> Web Based Application for Pregnant mothers</title>
</head>
</head>

<style>
    body {
        margin: 0%;
        background-image:url(img/login2.gif);
        height: 110%;
        width: 90%;
        position: absolute;
        background-size: cover;
    
    }
    
    #wrapper {
        font-family: tahoma;
    }
    
    .container {
        width: 100%;
        max-width: 1280px;
        margin: 0 auto;
    }
    

#ist
{	color:black;
	font-size:45px;
	font-weight:bold;
	margin-left:15px;
	font-family:cursive;  
}



/*user menu stylings*/
#user-menu
{
	width:300px;
	float:left;
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


.menu-bar ul {
    list-style:none;
    display: flex;
    width: 108%;
	height: 45px;
    background-image: linear-gradient(75deg, rgba(155, 155, 155, 0.31) 0%, rgba(155, 155, 155, 0.31) 12.5%,rgba(134, 134, 134, 0.31) 12.5%, rgba(134, 134, 134, 0.31) 25%,rgba(113, 113, 113, 0.31) 25%, rgba(113, 113, 113, 0.31) 37.5%,rgba(92, 92, 92, 0.31) 37.5%, rgba(92, 92, 92, 0.31) 50%,rgba(70, 70, 70, 0.31) 50%, rgba(70, 70, 70, 0.31) 62.5%,rgba(49, 49, 49, 0.31) 62.5%, rgba(49, 49, 49, 0.31) 75%,rgba(28, 28, 28, 0.31) 75%, rgba(28, 28, 28, 0.31) 87.5%,rgba(7, 7, 7, 0.31) 87.5%, rgba(7, 7, 7, 0.31) 100%),linear-gradient(55deg, rgb(16, 16, 16) 0%, rgb(16, 16, 16) 12.5%,rgb(25, 25, 25) 12.5%, rgb(25, 25, 25) 25%,rgb(35, 35, 35) 25%, rgb(35, 35, 35) 37.5%,rgb(44, 44, 44) 37.5%, rgb(44, 44, 44) 50%,rgb(53, 53, 53) 50%, rgb(53, 53, 53) 62.5%,rgb(62, 62, 62) 62.5%, rgb(62, 62, 62) 75%,rgb(72, 72, 72) 75%, rgb(72, 72, 72) 87.5%,rgb(81, 81, 81) 87.5%, rgb(81, 81, 81) 100%);
	float:left;
	box-shadow:10px 14px 50px 2px #0a0a0a;
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
  


    /* start login-page */
    
    .form-box {
        width: 350px;
        height: 490px;
        position: relative;
        margin: 300px;;
        background-color: #1817171f;
        background-image: linear-gradient(75deg, rgba(155, 155, 155, 0.31) 0%, rgba(155, 155, 155, 0.31) 12.5%,rgba(134, 134, 134, 0.31) 12.5%, rgba(134, 134, 134, 0.31) 25%,rgba(113, 113, 113, 0.31) 25%, rgba(113, 113, 113, 0.31) 37.5%,rgba(92, 92, 92, 0.31) 37.5%, rgba(92, 92, 92, 0.31) 50%,rgba(70, 70, 70, 0.31) 50%, rgba(70, 70, 70, 0.31) 62.5%,rgba(49, 49, 49, 0.31) 62.5%, rgba(49, 49, 49, 0.31) 75%,rgba(28, 28, 28, 0.31) 75%, rgba(28, 28, 28, 0.31) 87.5%,rgba(7, 7, 7, 0.31) 87.5%, rgba(7, 7, 7, 0.31) 100%),linear-gradient(55deg, rgb(16, 16, 16) 0%, rgb(16, 16, 16) 12.5%,rgb(25, 25, 25) 12.5%, rgb(25, 25, 25) 25%,rgb(35, 35, 35) 25%, rgb(35, 35, 35) 37.5%,rgb(44, 44, 44) 37.5%, rgb(44, 44, 44) 50%,rgb(53, 53, 53) 50%, rgb(53, 53, 53) 62.5%,rgb(62, 62, 62) 62.5%, rgb(62, 62, 62) 75%,rgb(72, 72, 72) 75%, rgb(72, 72, 72) 87.5%,rgb(81, 81, 81) 87.5%, rgb(81, 81, 81) 100%);
        overflow:hidden;
       
    }
    
    .button-box {
        width: 220px;
        margin: 35px auto;
        position: relative;
        box-shadow: 0 0 20px 9px #1817171f;
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
        background: #050507;
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
        border-bottom: 1px solid gray;
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
        color: black;
        font-size: 15;
    }
    
    #register {
        left: 450px;
        
    }
    
    #register input {
        color: black;
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
        color: rgb(5, 5, 5);
        text-decoration: none;
        margin-left: 30px;
    }
   #emailecho {
       font-size: larger;
       color: #ff0000;
       font-style: italic;
       text-align: center;
   }
   #registerecho {
       font-size: larger;
       color: #ff0000;
       font-style: italic;
       text-align: center;
   }
   #logecho{
    font-size: larger;
       color: #ff0000;
       font-style: italic;
       text-align: center;
   }
   #loginecho{
    font-size: larger;
       color: #ff0000;
       font-style: italic;
       text-align: center;
   }
   
</style>

<body>


    <div class="full-page">
  
	
            <!---------logo------->
                <div id="logo">
              
                
                <!---------=======navigation bar========----->	
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
                                <li><a href="Babyproducts/Babyproducts.html">Baby products</a></li>
                                <li><a href="genderquiz/genderquiz.html">Gender Prediction Quiz</a></li>
                                <li><a href="puzzle/puzzle.html">Puzzle Game</a></li>
                               
                    
                                <li>
                                  <a href="#">Gallery <i class="fas fa-caret-right"></i></a>
                                  
                                  <div class="dropdown-menu-1">
                                    <ul>
                                      <li><a href="photogallery/photogallery.html">Photo Gallery</a></li>
                                      <li><a href="mp3/musicgallery.html">Music Gallery</a></li>
                                      <li><a href="videos/videogallery.html">Video Gallery</a></li>
                                    </ul>
                                  </div>
                                </li>
                                
                            </div>
                            <li><a  href="checkreport.php">Check Reports</a></li>
                               <li> <a href="forum/forum.php">Q&A forum</a></li>
                              <li><a href="Articles.html">Read Articles</a></li>
                          <li><a href="map.html">Find Channelling center</a></li>
                      <li><a href="about.html">About</a></li>
                    <li><a href="chatbot/contactus.html">Contact us</a></li>
                    <li><a href="logout.php" ><i style="color:#81C3D7" class="fas fa-sign-out-alt"></i></a></li>
                              </ul>
                      
                    </div>
        </div>
     
          
        <div id='login-form' class='login-page'>

            <div class="form-box">

                <div class='button-box'>
                    <div id='btn'></div>
                    <button type='button' onclick='login()' class='toggle-btn'>Log In</button>
                    <button type='button' onclick='register()' class='toggle-btn'>Register</button>
                </div>
                <?php
                if (isset($_GET['reg'])) {
                    if ($_GET['reg'] == 'false') {
                        echo '<p id= "emailecho"> Email Already Exist </p>';
                    };
                    if ($_GET['reg'] == 'true') {
                        echo '<p id= "registerecho">Registration Successful</p>';
                    };
                }
                if (isset($_GET['log'])) {
                    if ($_GET['log'] == 'false') {
                        echo '<p id= "logecho">Login Failed! <br> Check Your Credentials Again! </p>';
                    };
                    if ($_GET['log'] == 'true') {
                        echo '<p id= "loginecho">Login Successfully</p>';
                    };
                }
                ?>
                
                <form id='login' class='input-group-login' method="post" action="Login.php">
                    <input type='text' name='Email' class='input-field' placeholder='Email Id' required>
                    <input type='password' name='Password' class='input-field' placeholder='Enter Password' required>
                    <input type='checkbox' class='check-box'><span>Remember Password</span>
                    <button type='submit' class='submit-btn'>Log in </button>
                </form>
                <form id='register' class='input-group-register' action="SignUp.php" method="post" enctype="multipart/form-data">
                    <input type='text' name='FirstName' class='input-field' placeholder='First Name' required>
                    <input type='text' name='LastName' class='input-field' placeholder='Last Name ' required>
                    <input type='email' name='Email' class='input-field' placeholder='Email Id' required>
                    <input type='password' name='Password' class='input-field' placeholder='Enter Password' required>
                    <input type='password' name='SecondPassword' class='input-field' placeholder='Type: Patient, Doctor' required>
                    <input type='checkbox' class='check-box'><span>I agree to the terms conditions</span>
                    <button type='submit' class='submit-btn'>Register</button>

                </form>
            </div>
        </div>
    </div>

    <script>
        var x = document.getElementById('login');
        var y = document.getElementById('register');
        var z = document.getElementById('btn');

        function register() {
            x.style.left = '-400px';
            y.style.left = '50px';
            z.style.left = '110px';
        }

        function login() {
            x.style.left = '50px';
            y.style.left = '450px';
            z.style.left = '0px';
        }
    </script>

</body>

</html>