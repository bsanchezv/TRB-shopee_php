<?php
include ('DBconect.php');
require ('helper.php');
// error variable.
$error = array();

$firstName = validate_input_text($_POST['firstName']);
if (empty($firstName)){
    $error[] = "You forgot to enter your first Name";
}

$lastName = validate_input_text($_POST['LastName']);
if (empty($lastName)){
    $error[] = "You forgot to enter your Last Name";
}

$email = validate_input_email($_POST['email']);
if (empty($email)){
    $error[] = "You forgot to enter your Email";
}

$password = validate_input_text($_POST['password']);
if (empty($password)){
    $error[] = "You forgot to enter your password";
}

$confirm_pwd = validate_input_text($_POST['confirm_pwd']);
if (empty($confirm_pwd)){
    $error[] = "You forgot to enter your Confirm Password";
}

$files = $_FILES['profileUpload'];
$profileImage = upload_profile('./assets/profile/', $files);

if(empty($error)){
    $hashed_pass = password_hash($password, PASSWORD_DEFAULT);

    // make a query
    $query = "INSERT INTO user (first_name, last_name, email, password, profileImage, register_date ) 
                VALUES('$firstName', '$lastName', '$email', '$hashed_pass', '$profileImage', NOW())";

    $resultado=mysqli_query($con,$query);

    // execute statement
    mysqli_stmt_execute($q);

    header('location: login.php');

    $con->close();

}else{
    echo 'not validate';
}


















