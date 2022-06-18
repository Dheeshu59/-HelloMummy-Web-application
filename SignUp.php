<?php 
//database connection
include("database_connection.php");
if(isset($_POST['Email'])){
    
    $Email=$_POST['Email'];
    $sql="select * from user where Email='".$Email."' limit 1";

    $result = $conn->query($sql);

    if($result->num_rows > 0)
    {
        header("Location: index.php?reg=false");
        
        exit;
    }
    else
    {
        $FirstName =$_POST['FirstName'];
        $LastName=$_POST['LastName'];
        $Type=$_POST['Type'];
        $Password=$_POST['Password'];
        $query="insert into user(`FirstName`, `LastName`, `Email`, `Password`, `Type` ) VALUES ('$FirstName', '$LastName', '$Email', '$Password', 'patient')";
        $conn->query($query);
        header("Location: index.php?reg=true");
        exit;
    }
}