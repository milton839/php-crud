<?php
session_start();
require_once("includes/header.php");
require_once("includes/navbar.php");
require_once("includes/db.php");
$select_query = "SELECT * FROM employee_list";
$from_db = mysqli_query($db_connect, $select_query);
?>

<div class="container">
    <div class="row mt-3">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h1 class="text-uppercase text-center fw-bold">Employee List</h1>
                    <div class="d-flex justify-content-end">
                        <a href="employee_delete.php?delete_type=all" type="button" class="btn btn-danger"><i class="fas fa-trash"></i> Delete all</a>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr class="text-center">
                                <th>SL.No.</th>
                                <th>Name</th>
                                <th>Email Address</th>
                                <th>Phone Number</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $serial_no = 1;
                            ?>
                            <?php foreach ($from_db as $employee_list) : ?>
                                <tr>
                                    <td><?= $serial_no++; ?></td>
                                    <td><?= $employee_list['employee_name'] ?></td>
                                    <td><?= $employee_list['employee_email'] ?></td>
                                    <td><?= $employee_list['employee_number'] ?></td>
                                    <td>
                                        <div class="me-auto" role="group" aria-label="Basic example">
                                            <a href="employee_edit.php?employee_id=<?= $employee_list['id'] ?>" type="button" class="btn btn-primary me-3"><i class="fas fa-edit"></i> Edit</a>
                                            <a href="employee_delete.php?employee_id=<?= $employee_list['id'] ?>&delete_type=single" type="button" class="btn btn-danger"><i class="fas fa-trash"></i> Delete</a>
                                        </div>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
                <div class="card-footer">
                    
                </div>
            </div>
        </div>
    </div>
</div>

<?php
require_once("includes/footer.php");
?>