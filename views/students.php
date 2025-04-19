<?php
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="container-fluid px-0">
        <div class="d-flex flex-row ">
            <div class=" bg-warning vh-100 px-0">
                <?php
                    include '../includes/sidebar.php';
                ?>
            </div>
            <div class="w-100 px-0">
                <div class="bg-success px-0">
                    <?php
                        include '../includes/header.php';
                    ?>
                </div>
                            
                <div class="container">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addUserModal">
                        Add User
                    </button>
                    <table class="table table-striped table-bordered mt-3" id="user_table">
                        <thead>
                            <tr>
                                <th>User Number</th>
                                <th>User Image</th>
                                <th>Name</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody id="user_table_body">
                            <!-- User data will be populated here by JavaScript -->
                        </tbody>
                    </table>
                    <!-- Modal -->
                    <?php
                        include '../../student_management/partials/students/_add_user.php';
                        include '../../student_management/partials/students/_edit_user.php';
                        include '../../student_management/partials/students/_view_user.php';
                    ?>
                </div>
            </div>
        </div>
    </div>
    <script src="../../student_management/assets/js/user_form.js"></script>
    <script src="../../student_management/assets/js/user_table.js"></script>
</body>
</html>