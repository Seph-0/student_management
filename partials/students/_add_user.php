<div class="modal fade" id="addUserModal" tabindex="-1" aria-labelledby="addUserModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <form action="" id="create_user_form" enctype="multipart/form-data">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="addUserModalLabel">Add User</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-3 d-flex justify-content-center align-items-center">
                            <img src="../../student_management/assets/media/default_user.jpg" height="75px" alt="">
                        </div>
                        <div class="col-5 form-group">
                            <label for="user_image" class="form-label">User Image</label>
                            <input type="file" class="form-control" id="user_image" name="user_image" accept="image/*">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4 form-group">
                            <label for="first_name" class="form-label">First Name</label>
                            <input type="text" class="form-control" id="first_name" name="first_name" placeholder="First Name" required>
                        </div>
                        <div class="col-4 form-group">
                            <label for="middle_name" class="form-label">Middle Name</label>
                            <input type="text" class="form-control" id="middle_name" name="middle_name" placeholder="Middle Name">
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
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>

            </form>
        </div>
    </div>
</div>