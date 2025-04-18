$(document).ready(function () {
    addUser();
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