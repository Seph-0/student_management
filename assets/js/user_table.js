$(document).ready(function () {

    // Listen for clicks on the Edit button
    $(document).on('click', '.edit_user_btn', function (e) {
        e.preventDefault();
        console.log("Edit button clicked");
        editUser.call(this, e);
    });

    $(document).on('click', '.view_user_btn', function (e) {
        e.preventDefault();
        console.log("View button clicked");
        viewUser.call(this, e);
    });

    $(document).on('click', '.delete_user_btn', function (e) {
        e.preventDefault();
        console.log("Delete button clicked");
        deleteUser.call(this, e);
    });
});

function editUser(e) {
    const userId = $(this).data('id');
    console.log("User ID clicked:", userId); 
    $.ajax({
        type: 'GET',
        url: '../../../student_management/functions/user_functions.php',
        data: { action: 'getUserById', id: userId }, 
        success: function (response) {
            const res = typeof response === 'string' ? JSON.parse(response) : response;
            console.log(res); 
            if (res.success) {
                const user = res.data;

                $('#user_id').val(user.id);
                $('#edit_first_name').val(user.first_name);
                $('#edit_middle_name').val(user.middle_name);
                $('#edit_last_name').val(user.last_name);
                $('#edit_address').val(user.address);
                $('#edit_birthdate').val(user.birthdate);
                $('#edit_user_number').val(user.user_number);
                $('#edit_email').val(user.email);
                $('#edit_phone').val(user.phone);

                // Clear the file input
                $('#edit_user_image').val('');

                // Set sex radio button
                if (user.sex === 'Male') {
                    $('#edit_male').prop('checked', true);
                } else if (user.sex === 'Female') {
                    $('#edit_female').prop('checked', true);
                }

                // Set image preview
                const imageSrc = `../../student_management/uploads/users/${user.user_image || 'default_user.jpg'}`;
                $('#edit_user_image_preview').attr('src', imageSrc);
            } else {
                alert('Failed to fetch user data');
            }
        },
        error: function (xhr, status, error) {
            console.error('AJAX error:', error);
            alert('An error occurred while fetching user data.');
        }
    });
}

function deleteUser(e) {
    
    const userId = $(this).data('id');
    console.log("User ID clicked:", userId);
    if (confirm('Are you sure you want to delete this user?')) {
        $.ajax({
            type: 'POST',
            url: '../../../student_management/functions/user_functions.php',
            data: { action: 'deleteUser', id: userId },
            success: function (response) {
                const res = typeof response === 'string' ? JSON.parse(response) : response;
                if (res.success) {
                    alert('User deleted successfully!');
                    getAllUsers(); 
                } else {
                    alert('Error deleting user: ' + res.message);
                }
            },
            error: function (xhr, status, error) {
                console.error('AJAX error:', error);
                alert('An error occurred while deleting the user.');
            }
        });
    }
}

function viewUser(e) {
    const userId = $(this).data('id');
    
    $.ajax({
        type: 'GET',
        url: '../../../student_management/functions/user_functions.php',
        data: { action: 'getUserById', id: userId },
        success: function (response) {
            const res = typeof response === 'string' ? JSON.parse(response) : response;
            if (res.success) {
                const user = res.data;
                const imageSrc = `../../student_management/uploads/users/${user.user_image || 'default_user.jpg'}`;
                $('#view_user_image').attr('src', imageSrc);
                $('#view_name').text('Name: ' + user.first_name + ' ' + user.middle_name + ' ' + user.last_name);
                $('#view_address').text('Address: ' + user.address);
                $('#view_birthdate').text('Birthdate: ' + user.birthdate);
                $('#view_user_number').text('User Number: ' + user.user_number);
                $('#view_email').text('Email: ' + user.email);
                $('#view_phone').text('Phone: ' + user.phone);
                $('#view_sex').text('Sex: ' + user.sex);
                $('#view_user_image').attr('src', `../../student_management/uploads/users/${user.user_image || 'default_user.jpg'}`);
                $('#viewUserModal').modal('show');
            } else {
                alert('Failed to fetch user data');
            }
        },
        error: function (xhr, status, error) {
            console.error('AJAX error:', error);
            alert('An error occurred while fetching user data.');
        }
    });
    
}
