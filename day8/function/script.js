function validateForm() {
    var username = document.getElementById('Username').value;
    var password = document.getElementById('Password').value;

    var usernameRegex = /^[a-zA-Z]{8,12}$/;
    if (!usernameRegex.test(username)) {
        Swal.fire({
            icon: 'error',
            title: 'Username is wrong',
            text: 'Username must use 8-12 characters and contain only letters (a-zA-Z)'
        });
        return false;
    }

    if (password === "") {
        Swal.fire({
            icon: 'error',
            title: 'Password is wrong',
            text: 'Password cannot be empty.'
        });
        return false;
    }

    var form = document.getElementById('numberForm');
    var formData = new FormData(form);

    $.ajax({
        type: 'POST',
        url: 'process.php',
        data: formData,
        processData: false,
        contentType: false,
        dataType: 'json',
        success: function(response) {
            if (response.success) {
                Swal.fire({
                    icon: 'success',
                    title: 'Success',
                    text: 'Username: ' + response.message
                });
            } else {
                Swal.fire({
                    icon: 'error',
                    title: 'Registration Failed!',
                    text: 'Failed to register'
                });
            }
        },
        error: function(xhr, status, error) {
            Swal.fire({
                icon: 'error',
                title: 'Registration Failed!',
                text: 'An error occurred while processing your request: ' + error
            });
        }
    });

    return false;
}







