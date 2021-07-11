<?php 
session_start();
require_once("includes/db.php");
?>

<?php
    $has_error = False;
    $_SESSION['employee_name'] = $_POST['employee_name'];
    if(!$_POST['employee_name']){
        $_SESSION['name_error'] = "Name is required";
        $has_error = true;
    }
    $_SESSION['employee_email'] = $_POST['employee_email'];
    if(!$_POST['employee_email']){
        $_SESSION['email_error'] = "Email is required";
        $has_error = true;
    }
    elseif(!filter_var($_POST['employee_email'], FILTER_VALIDATE_EMAIL)){
        $_SESSION['error_email'] = "Please enter a valid email address";
        $has_error = true;
    }
    $_SESSION['employee_number'] = $_POST['employee_number'];
    if(!$_POST['employee_number']){
        $_SESSION['number_error'] = "Number is required";
        $has_error = true;
    }
    if($has_error){
        header("location: index.php");
    }
    else{
        $name = $_POST['employee_name'];
        $email = $_POST['employee_email'];
        $number = $_POST['employee_number'];
        $insert_query = "INSERT INTO employee_list (employee_name,employee_email,employee_number) VALUES ('$name','$email','$number')";
        mysqli_query($db_connect,$insert_query);
        $_SESSION['data_added_success'] = "Employee added successfully";
        header("location: employee_list.php");
    }
?>