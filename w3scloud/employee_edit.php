<?php
session_start();
require_once("includes/header.php");
require_once("includes/navbar.php");
require_once("includes/db.php");
$id = $_GET['employee_id'];
$select_query = "SELECT * FROM employee_list WHERE id = $id";
$from_db = mysqli_query($db_connect, $select_query);
$after_fetch_assoc = mysqli_fetch_assoc($from_db);
?>

<div class="container mt-2">
    <div class="row">
        <div class="col-md-6 m-auto">
            <div class="card">
                <h1 class="card-header text-uppercase text-center">Update Employee</h1>
                <div class="card-body">
                    <form action="employee_edit_post.php" method="POST">
                        <input type="hidden" name="employee_id" value="<?= $_GET['employee_id'] ?>">
                        <div class="mb-3">
                            <label for="inputname" class="form-label">Your Name</label>
                            <input type="text" class="form-control" id="inputname" name="employee_name" value="<?=$after_fetch_assoc['employee_name']?>">
                        </div>
                        <div class="mb-3">
                            <label for="inputemail" class="form-label">Email address</label>
                            <input type="text" class="form-control" id="inputemail" name="employee_email" value="<?=$after_fetch_assoc['employee_email']?>">
                        </div>
                        <div class="mb-3">
                            <label for="inputname" class="form-label">Your Mobile Number</label>
                            <input type="number" class="form-control" id="inputname" name="employee_number" value="<?=$after_fetch_assoc['employee_number']?>">
                        </div>
                        <button type="submit" class="btn btn-primary text-uppercase">Update Employee</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
require_once("includes/footer.php");
?>