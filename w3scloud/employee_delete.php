<?php
require_once("includes/db.php");
$id = $_GET['employee_id'];
if($_GET['delete_type'] == "single"){
    $delete_query = "DELETE FROM employee_list WHERE id = $id";
}
else{
    $delete_query = "DELETE FROM employee_list";
}

mysqli_query($db_connect,$delete_query);
header("location: employee_list.php");
?>