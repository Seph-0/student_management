$(document).ready(function () {
    addUser();
    updateUser();
    deleteUser();
    getAllUsers();
});

function addUser() {
    $('#create_user_form').on('submit', function (e) {
        e.preventDefault();
        let formData = new FormData(this);
        formData.append('action', 'createUser'); 
        $.ajax({
            type: 'POST',
            url: '../../../student_management/functions/user_functions.php',
            data: formData,
            processData: false,
            contentType: false,
            success: function (response) {
                if (response.success) {
                    alert('User added successfully!');
                    $('#create_user_form')[0].reset();
                    $('#addUserModal').modal('hide');
                } else {
                    alert('Error adding user: ' + response.message);
                }
            },
            error: function (xhr, status, error) {
                alert('An error occurred: ' + error);
            }
        });
    });
}

function updateUser() {
    $('#edit_user_form').on('submit', function (e) {
        e.preventDefault();
        let formData = new FormData(this);
        formData.append('action', 'updateUser'); 
        $.ajax({
            type: 'POST',
            url: '../../../student_management/functions/user_functions.php',
            data: formData,
            processData: false,
            contentType: false,
            success: function (response) {
                if (response.success) { 
                    alert('User updated successfully!');
                    $('#edit_user_form')[0].reset();
                    $('#editUserModal').modal('hide');
                } else {
                    alert('Error updating user: ' + response.message);
                }
            },
            error: function (xhr, status, error) {
                alert('An error occurred: ' + error);
            }
        });
    });
}

function deleteUser() {
    $('#delete_user_form').on('submit', function (e) {
        e.preventDefault();
        let formData = new FormData(this);
        formData.append('action', 'deleteUser'); 
        $.ajax({
            type: 'POST',
            url: '../../../student_management/functions/user_functions.php',
            data: formData,
            processData: false,
            contentType: false,
            success: function (response) {
                if (response.success) {
                    alert('User deleted successfully!');
                    $('#delete_user_form')[0].reset();
                } else {
                    alert('Error deleting user: ' + response.message);
                }
            },
            error: function (xhr, status, error) {
                alert('An error occurred: ' + error);
            }
        });
    });
}

function getAllUsers() {
    $.ajax({
        type: 'GET',
        url: '../../../student_management/functions/user_functions.php',
        data: { action: 'getAllUsers' },
        success: function (response) {
            let res;
            try {
                res = typeof response === 'string' ? JSON.parse(response) : response;
            } catch (e) {
                console.error("Invalid JSON response", response);
                alert("Server returned invalid JSON.");
                return;
            }
        
            if (res.success) {
                $('#user_table_body').html(res.data);
            } else {
                alert('Error fetching users: ' + res.message);
            }
        },
        
        error: function (xhr, status, error) {
            console.log('An error occurred: ' + error);
        }
    });
}