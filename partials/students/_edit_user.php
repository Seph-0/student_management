<div class="modal fade" id="editUserModal" tabindex="-1" aria-labelledby="editUserModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            
        <form action=""  id="edit_user_form" enctype="multipart/form-data">
        <input type="hidden" name="id" id="user_id" value="<?php echo $user['id'] ?? ''; ?>">

        <div class="modal-header">
            <h1 class="modal-title fs-5" id="editUserModalLabel">Edit User</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">   
                <div class="row">
                    <div class="col-3 d-flex justify-content-center align-items-center">
                        <img id="edit_user_image_preview" src="../../student_management/uploads/users/default_user.jpg" height="75px" alt="">

                    </div>
                    <div class="col-5 form-group">
                        <label for="user_image" class="form-label">User Image</label>
                        <input type="file" class="form-control" id="edit_user_image" name="user_image" accept="image/*" value="<?php echo $user['user_image'] ?? 'default_user.jpg'; ?>">
                    </div>
                </div>
                <div class="row">
                    <div class="col-4 form-group">
                        <label for="first_name" class="form-label">First Name</label>
                        <input type="text" class="form-control" id="edit_first_name" name="first_name" placeholder="First Name" value="<?php echo $user['first_name'] ?? ''; ?>" required>
                    </div>
                    <div class="col-4 form-group">
                        <label for="middle_name" class="form-label">Middle Name</label>
                        <input type="text" class="form-control" id="edit_middle_name" name="middle_name" placeholder="Middle Name" value="<?php echo $user['middle_name'] ?? ''; ?>">
                    </div>
                    <div class="col-4 form-group ">
                        <label for="last_name" class="form-label">Last Name</label>
                        <input type="text" class="form-control" id="edit_last_name" name="last_name" placeholder="Last Name" value="<?php echo $user['last_name'] ?? ''; ?>" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6 form-group">
                        <label for="address" class="form-label">Address</label>
                        <input type="text" class="form-control" id="edit_address" name="address" placeholder="Address" value="<?php echo $user['address'] ?? ''; ?>" required>
                    </div>
                    <div class="col-2 form-group">
                        <label for="sex" class="form-label">Sex</label>
                        <div>
                            <input type="radio" name="sex" id="edit_male" value="Male" required>
                            <label for="male" class="form-label">Male</label>
                            <input type="radio" name="sex" id="edit_female" value="Female" required>
                            <label for="female" class="form-label">Female</label>
                        </div>
                    </div>
                    <div class="col-4 form-group">
                        <label for="birthdate" class="form-label">Date of Birth</label>
                        <input type="date" class="form-control" id="edit_birthdate" name="birthdate" placeholder="Date of Birth" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-4 form-group">
                        <label for="user_number" class="form-label">User Number</label>
                        <input type="text" class="form-control" id="edit_user_number" name="user_number" placeholder="User Number" required>
                    </div>
                    <div class="col-4 form-group">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="edit_email" name="email" placeholder="Email">
                    </div>
                    <div class="col-4 form-group">
                        <label for="phone" class="form-label">Phone</label>
                        <input type="text" class="form-control" id="edit_phone" name="phone" placeholder="Phone" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-4 form-group">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="edit_password" name="password">
                    </div>
                    <div class="col-4 form-group">
                        <label for="confirm_password" class="form-label">Confirm Password</label>
                        <input type="password" class="form-control" id="edit_confirm_password" name="confirm_password">
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