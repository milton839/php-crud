    <?php
    session_start();
    require_once("includes/header.php");    
    require_once("includes/navbar.php");    
    ?>

    <div class="container mt-2">
        <div class="row">
            <div class="col-md-6 m-auto">
                <div class="card">
                    <h1 class="card-header text-uppercase text-center">Add Employee</h1>
                    <div class="card-body">
                        <form action="employee_post.php" method="POST">
                            <div class="mb-3">
                                <label for="inputname" class="form-label">Your Name</label>
                                <input type="text" class="form-control" id="inputname" name="employee_name" value="<?php
                                if(isset($_SESSION['employee_name'])){
                                    echo $_SESSION['employee_name'];
                                    unset($_SESSION['employee_name']);
                                }
                                ?>">
                            </div>
                            <?php if(isset($_SESSION['name_error'])): ?>
                            <div class="alert alert-danger">
                                <?php
                                    echo $_SESSION['name_error'];
                                    unset($_SESSION['name_error'])
                                ?>
                            </div>
                            <?php endif;?>
                            <div class="mb-3">
                                <label for="inputemail" class="form-label">Email address</label>
                                <input type="text" class="form-control" id="inputemail" name="employee_email" value="<?php
                                if(isset($_SESSION['employee_email'])){
                                    echo $_SESSION['employee_email'];
                                    unset($_SESSION['employee_email']);
                                }
                                ?>">
                            </div>
                            <?php if(isset($_SESSION['email_error'])): ?>
                            <div class="alert alert-danger">
                                <?php
                                    echo $_SESSION['email_error'];
                                    unset($_SESSION['email_error'])
                                ?>
                            </div>
                            <?php endif;?>
                            <?php if(isset($_SESSION['error_email'])): ?>
                            <div class="alert alert-danger">
                                <?php
                                    echo $_SESSION['error_email'];
                                    unset($_SESSION['error_email'])
                                ?>
                            </div>
                            <?php endif;?>
                            <div class="mb-3">
                                <label for="inputname" class="form-label">Your Mobile Number</label>
                                <input type="number" class="form-control" id="inputname" name="employee_number" value="<?php
                                if(isset($_SESSION['employee_number'])){
                                    echo $_SESSION['employee_number'];
                                    unset($_SESSION['employee_number']);
                                }
                                ?>">
                            </div>
                            <?php if(isset($_SESSION['number_error'])): ?>
                            <div class="alert alert-danger">
                                <?php
                                    echo $_SESSION['number_error'];
                                    unset($_SESSION['number_error'])
                                ?>
                            </div>
                            <?php endif;?>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php
    require_once("includes/footer.php");
    ?>