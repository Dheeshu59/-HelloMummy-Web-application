<?php
include 'session.php';
include("database_connection.php");

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Web Based Application for Pregnant mothers</title>
  <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
  <style>
    body {
      color: white;
    }

    #wrapper {
      font-family: tahoma;
    }

    .full-page {
      height: 100%;
      width: 100%;
      background-position: center;
      background-size: cover;
      position: absolute;
      background-image: url(img/rrr.jpg);
    }

    /*logo styling */

    #logo {
      width: 250px;
      margin-top: 10px;
    }

    #ist {
      color: #0c0c0c;
      font-size: 35px;
      font-weight: bold;
      font-family: cursive;
      margin-left: 15px;
    }

    .menu-bar ul {
      list-style: none;
      display: flex;
      width: 100%;
      height: 40px;
      background-image: linear-gradient(75deg, rgba(155, 155, 155, 0.31) 0%, rgba(155, 155, 155, 0.31) 12.5%, rgba(134, 134, 134, 0.31) 12.5%, rgba(134, 134, 134, 0.31) 25%, rgba(113, 113, 113, 0.31) 25%, rgba(113, 113, 113, 0.31) 37.5%, rgba(92, 92, 92, 0.31) 37.5%, rgba(92, 92, 92, 0.31) 50%, rgba(70, 70, 70, 0.31) 50%, rgba(70, 70, 70, 0.31) 62.5%, rgba(49, 49, 49, 0.31) 62.5%, rgba(49, 49, 49, 0.31) 75%, rgba(28, 28, 28, 0.31) 75%, rgba(28, 28, 28, 0.31) 87.5%, rgba(7, 7, 7, 0.31) 87.5%, rgba(7, 7, 7, 0.31) 100%), linear-gradient(55deg, rgb(16, 16, 16) 0%, rgb(16, 16, 16) 12.5%, rgb(25, 25, 25) 12.5%, rgb(25, 25, 25) 25%, rgb(35, 35, 35) 25%, rgb(35, 35, 35) 37.5%, rgb(44, 44, 44) 37.5%, rgb(44, 44, 44) 50%, rgb(53, 53, 53) 50%, rgb(53, 53, 53) 62.5%, rgb(62, 62, 62) 62.5%, rgb(62, 62, 62) 75%, rgb(72, 72, 72) 75%, rgb(72, 72, 72) 87.5%, rgb(81, 81, 81) 87.5%, rgb(81, 81, 81) 100%);
      float: left;
      box-shadow: 10px 14px 50px 2px #0c0c0c;
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
      color: rgb(15, 1, 1);
      transition: all .7s ease;
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



    /**********************/

    /*=========categories======*/
    #headingblock {
      width: 100%;
      height: auto;
      float: left;
      color: #859faa;
      font-size: 22px;
      font-weight: bold;
    }

    #headingblock h2 {
      line-height: 35px;
      border-left: 20px solid #b9c0c5;
      padding-left: 10px;

    }

    .text-center {
      font-size: 20px;
      margin-top: 100px;
      margin-bottom: 40px;
    }

    /*=======category box=====*/
    .catbox {
      width: 178px;
      height: 225px;
      float: left;
      overflow: hidden;
      position: relative;
      margin-left: 30px;
      margin-top: 2px;
      margin-bottom: 10px;
      margin-right: 20px;

    }

    .catbox span {
      width: 100%;
      height: 35px;
      line-height: 35px;
      background: rgba(0, 0, 0, 0.6);
      color: white;
      display: block;
      bottom: 30px;
      position: absolute;
      z-index: 999;
      text-align: center;
    }

    .catbox img {
      max-width: 100%;
      transition: all .5s ease;
    }

    .catbox:hover img {
      transform: scale(1.9, 1.9);
      transition: all .5s ease;
    }

    /*******************/

    form {
      position: absolute;
      text-align: center;
      margin: 200px;
      background: #0000009c;
      padding: 80px;
      border-radius: 5px;
    }
  </style>
</head>

<body>

  <div id="navigation" class="navbar navbar-inverse navbar-fixed-top default" role="navigation">
    <div class="full-page">
      <!----------===== main  header=====----------->
      <div id="main-header">
        <!---------logo------->
        <div id="logo">
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
                  <li><a href="babynamegenerator/babynamegenerator.html">Name Generator</a></li>
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
                  <li><a href="checkreport.php">Upload Reports</a></li>
                  <li><a href="doctors.html">Doctors Profile</a></li>
                </ul>
            </li>
            <li> <a href="forum/forum.php">Q&A forum</a></li>
            <li><a href="Articles.html">Read Articles</a></li>
            <li><a href="map.html">Find Channelling center</a></li>
            <li><a href="about.html">About</a></li>
            <li><a href="chatbot/contactus.html">Contact us</a></li>
            <li><a href="logout.php"><i style="color:#81C3D7" class="fas fa-sign-out-alt"></i></a></li>
          </ul>

        </div>
        <!-- /.navbar-collapse -->
      </div>
    </div>

   <!---------upload form------->
    <form action="" method="post" enctype="multipart/form-data">
      Select pdf to upload with your name:

      <input type="file" name="fileToUpload" id="fileToUpload">

      <select name="doctor">
        <option value="">Choose option</option>
        <?php
        $sql = "SELECT * FROM user where Type ='doctor'";
        $result = $conn->query($sql);

        // output data of each row
        while ($row = $result->fetch_assoc()) {
        ?>
          <option value="<?php echo $row['ID'] ?>"><?php echo $row['FirstName'] . " " . $row['LastName'] ?></option>
        <?php
        } ?>
      </select>

      <input type="submit" value="Upload File" name="submit">

    </form>
  </div>

</body>

</html>
<?php
if (isset($_POST["submit"])) {
  $target_dir = "uploads/";
  $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
  $fileName = $_FILES["fileToUpload"]["name"];
  $uploadOk = 1;
  $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

  // Check if image file is a actual image or fake image
  if (isset($_POST["submit"])) {
    $check = filesize($_FILES["fileToUpload"]["tmp_name"]);
    if ($check !== false) {
      echo '<script>alert("File is an image - " ' . mime_content_type($_FILES["fileToUpload"]["tmp_name"]) . '"<Br>")</script>';
      $uploadOk = 1;
    } else {
      echo '<script>alert("File is not an pdf")</script>';
      $uploadOk = 0;
    }
  }

  // Check if file already exists
  if (file_exists($target_file)) {
    echo '<script>alert("Sorry, file already exists")</script>';
    $uploadOk = 0;
  }

  // Check file size
  if ($_FILES["fileToUpload"]["size"] > 1000000) {
    echo '<script>alert("Sorry, your file is too large")</script>';
    $uploadOk = 0;
  }

  // Allow certain file formats
  if (
    $imageFileType != "pdf"
  ) {
    echo '<script>alert("Sorry, only pdf files are allowed.")</script>';
    $uploadOk = 0;
  }

  // Check if $uploadOk is set to 0 by an error
  if ($uploadOk == 0) {
    echo '<script>alert("Sorry, your file was not uploaded.")</script>';
    // if everything is ok, try to upload file
  } else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {

      include("database_connection.php");
      session_start();
      $patient_ID = $_SESSION["user_ID"];
      $selected = $_POST['doctor'];
      $query = "insert into report(`patient_ID`, `doctor_id`, `fileName`) VALUES('$patient_ID', '$selected','$fileName')";
      $conn->query($query);
      echo '<script>alert("The file has been uploaded.")</script>';
    } else {
      echo '<script>alert("Sorry, there was an error uploading your file.")</script>';
    }
  }
}
?>