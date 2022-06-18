  <!---------database connection------->
<?php 
session_start();
include("database_connection.php");

if(isset($_POST['Email'])){
    
    $Email=$_POST['Email'];
    $Password=$_POST['Password'];
    
    $sql="select * from user where Email='".$Email."'AND Password='".$Password."' limit 1";
    
    $result = $conn->query($sql);
    
    if($result->num_rows==1){
        $row = $result->fetch_assoc();
        $_SESSION['user_ID'] = $row["ID"];
        $_SESSION['Email'] = $row["Email"];
        $_SESSION['Password'] = $row["Password"];
        $_SESSION['FirstName'] = $row["FirstName"];
        $_SESSION['LastName'] = $row["LastName"];
        if($row["Type"] == 'patient')
        header("Location: home.php");
        else if($row["Type"] == 'doctor')
        header("Location: doctorprofile.php");
        else
        header("Location: adminProfile.php");
}
        else{
        header("Location: index.php?log=false"); 
        exit();
    }
        
}
?>