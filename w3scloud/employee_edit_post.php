<?php
session_start();
require_once("includes/db.php");
$employee_name = $_POST['employee_name'];
$employee_email = $_POST['employee_email'];
$employee_number = $_POST['employee_number'];
$employee_id = $_POST['employee_id'];

echo $update_query = "UPDATE employee_list SET employee_name = '$employee_name', employee_email = '$employee_email', employee_number = '$employee_number' WHERE id = $employee_id";
mysqli_query($db_connect,$update_query);
header("location: employee_list.php");
?>