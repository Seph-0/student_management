<div class="modal fade" id="viewUserModal" tabindex="-1" aria-labelledby="viewUserModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
        <div class="modal-header">
            <h1 class="modal-title fs-5" id="viewUserModalLabel">View User</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">   
            <div class="container">
                <div class="row">
                    <div class="col-3 d-flex justify-content-center align-items-center">
                        <img id="view_user_image_preview" src="../../student_management/uploads/users/<?php echo $user['user_image'] ?? 'default_user.jpg'; ?>" height="75px" alt="">
                    </div>
                </div>
                <div class="row">
                    <h5>User Number:<?php echo $user['user_number'] ?? ''; ?></h5>
                    <h5>Name: <?php echo $user['first_name'] . ' ' . $user['middle_name'] . ' ' . $user['last_name'] ?? ''; ?></h5>
                </div>
                <div class="row">
                    <h5>Address: <?php echo $user['address'] ?? ''; ?></h5>
                    <h5>Sex: <?php echo $user['sex'] ?? ''; ?></h5>
                    <h5>Date of Birth: <?php echo $user['birthdate'] ?? ''; ?></h5>
                </div>
                <div class="row">
                    <h5>Email: <?php echo $user['email'] ?? ''; ?></h5>
                    <h5>Phone: <?php echo $user['phone'] ?? ''; ?></h5>
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
        </div>
        </div>
    </div>
</div>