<?php 
function sanitize_my_email($field) {
    $field = filter_var($field, FILTER_SANITIZE_EMAIL);
    if (filter_var($field, FILTER_VALIDATE_EMAIL)) {
        return true;
    } else {
        return false;
    }
}
$to_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['comment'];

//check if the email address is invalid $secure_check
$secure_check = sanitize_my_email($to_email);
if ($secure_check == false) {
    echo "Invalid input";
} else { //send email 
   $retval = mail($to_email, $subject, $message);
    if( $retval == true ) {
        echo "<script> alert('Message sent successfully...');window.location.href='doctorprofile.php';</script>";        
     }else {
        echo "<script> alert('Message could not be sent...');window.location.href='doctorprofile.php';</script>";        
     }    
}
