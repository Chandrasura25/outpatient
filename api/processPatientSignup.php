<?php
require "classes/users.php";
session_start();
if (isset($_POST['submit'])) {
    $fileName=$_FILES['myFile']['name'];
    $newName = time().$fileName;
    $full_name = $_POST['fullname'];
    $email = $_POST['email'];
    $phone_no=$_POST['number'];
    $dob = $_POST['dob'];
    $gender = $_POST['gender'];
    $password=$_POST['password'];
    $username=$_POST['username'];
    $uploading= move_uploaded_file($_FILES['myFile']['tmp_name'],'images/'.$newName);
    $hashpassword= password_hash($password, PASSWORD_DEFAULT);
    print_r($newName);
    if ($uploading) {
    $user = new Users();
    $insert = $user->signUpUser($full_name, $email, $phone_no, $dob, $gender, $hashpassword,$username,$newName);
    $resp = [];
    if ($insert) {
        echo "Registration is successful";
        header('Location: patientSignin.php');
    } else {
        $_SESSION['details_error']="Details is not inserted";
}   
} else {
    $_SESSION['details_error']="The Profile Picture is not saved";
} 
} else {
        header('Location: patientSignup.php');
    $_SESSION['details_error']="The Submit is not working";
}
?>