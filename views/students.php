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
                    <form action=""  id="create_user_form">
                        <div class="row">
                            <div class="col-3 d-flex justify-content-center align-items-center">
                                <img src="../../student_management/assets/media/default_user.jpg" height="75px" alt="">
                            </div>
                            <div class="col-5 form-group">
                                <label for="user_image" class="form-label">User Image</label>
                                <input type="file" class="form-control" id="user_image" name="user_image" accept="image/*" >
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-4 form-group">
                                <label for="first_name" class="form-label">First Name</label>
                                <input type="text" class="form-control" id="first_name" name="first_name" placeholder="First Name" required>
                            </div>
                            <div class="col-4 form-group">
                                <label for="middle_name" class="form-label">Middle Name</label>
                                <input type="text" class="form-control" id="middle_name" name="middle_name" placeholder="Middle Name" >
                            </div>
                            <div class="col-4 form-group ">
                                <label for="last_name" class="form-label">Last Name</label>
                                <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Last Name" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6 form-group">
                                <label for="address" class="form-label">Address</label>
                                <input type="text" class="form-control" id="address" name="address" placeholder="Address">
                            </div>
                            <div class="col-2 form-group">
                                <label for="sex" class="form-label">Sex</label>
                                <div>
                                    <input type="radio" name="sex" id="male" value="Male" required>
                                    <label for="male" class="form-label">Male</label>
                                    <input type="radio" name="sex" id="female" value="Female" required>
                                    <label for="female" class="form-label">Female</label>
                                </div>
                            </div>
                            <div class="col-4 form-group">
                                <label for="birthdate" class="form-label">Date of Birth</label>
                                <input type="date" class="form-control" id="birthdate" name="birthdate" placeholder="Date of Birth" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-4 form-group">
                                <label for="user_number" class="form-label">User Number</label>
                                <input type="text" class="form-control" id="user_number" name="user_number" placeholder="User Number" required>
                            </div>
                            <div class="col-4 form-group">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                            </div>
                            <div class="col-4 form-group">
                                <label for="phone" class="form-label">Phone</label>
                                <input type="text" class="form-control" id="phone" name="phone" placeholder="Phone" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-4 form-group">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control" id="password" name="password">
                            </div>
                            <div class="col-4 form-group">
                                <label for="confirm_password" class="form-label">Confirm Password</label>
                                <input type="password" class="form-control" id="confirm_password" name="confirm_password">
                            </div>
                            <div class="col-4 form-group">
                                <button class="btn btn-primary">Generate Password</button>
                            </div>
                        </div>
                        <div class="row">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="../../student_management/assets/js/user_form.js"></script>
</body>
</html>