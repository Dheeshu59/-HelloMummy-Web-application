  <!---------logout------->
<?php
    session_start();
    unset($_SESSION["Email"]);
    unset($_SESSION["Password"]);
    unset($_SESSION["FirstName"]);
    unset($_SESSION["LastName"]);
    header("Location:index.php");
    
?>