<?php
require "classes/nurses.php";
session_start();
if (isset($_POST['submit'])) {
    print_r($_POST);
    $fileName=$_FILES['myFile']['name'];
    $newName = time().$fileName;
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $dept_id=$_POST['dept_id'];
    $email = $_POST['email'];
    $phone_no=$_POST['phone'];
    $password=$_POST['password'];
    $address = $_POST['address'];
    print_r($_POST);
    $uploading= move_uploaded_file($_FILES['myFile']['tmp_name'],'images/'.$newName);
    $hashpassword= password_hash($password, PASSWORD_DEFAULT);
    if ($uploading) {
    $nurse = new Nurses();
    $insert = $nurse->signUpNurse($firstname,$lastname, $dept_id, $email, $phone_no, $hashpassword, $address, $newName);
    if ($insert) {
        echo "Registration is successful";
        header('Location: nurseSignin.php');
    } else {
        $_SESSION['details_error']="Details is not inserted";
        header('Location: nurseSignup.php');
}   
} else {
    $_SESSION['details_error']="The Profile Picture is not saved";
} 
} else {
    header('Location: nurseSignup.php');
    $_SESSION['details_error']="The Submit is not working";
}
?>