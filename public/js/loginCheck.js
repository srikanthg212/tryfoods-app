document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('loginForm');
    const submitBtn = document.getElementById('submitBtn01');
    const formAction = form.getAttribute('action');

    submitBtn.addEventListener('click', function(e) {
        e.preventDefault();
        
        // Reset previous error messages
        clearErrors();
        
        // Get form data
        const formData = new FormData(form);
        
        // Disable submit button and show loading state
        submitBtn.disabled = true;
        submitBtn.innerHTML = '<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Processing...';
        
        // Send AJAX request
        fetch(formAction, {
            method: 'POST',
            body: formData,
            headers: {
                'X-Requested-With': 'XMLHttpRequest',
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
            }
        })
        .then(response => response.json())
        .then(data => {
            console.log(data);
            if (data.success) {
                // Show success message
                Swal.fire({
                    icon: 'success',
                    title: 'Success!',
                    text: 'Login successfull Redirecting to dashboard...',
                    showConfirmButton: false,
                    timer: 2000
                }).then(() => {
                    window.location.href = './dashboard';
                });
            } else { 
                // Show validation errors
                if (data.errors) {
                    Object.keys(data.errors).forEach(field => {
                        const errorElement = document.getElementById(`${field}_error`);
                        if (errorElement) {
                            errorElement.textContent = data.errors[field][0];
                            errorElement.style.display = 'block';
                        }
                    });
                } else if (data.message === 'Invalid credentials') {
                    Swal.fire({
                        icon: 'error',
                        title: 'Login Failed',
                        text: 'Email or password is incorrect.',
                        showConfirmButton: false,
                        timer: 2000
                    }).then(() => {
                        window.location.reload();
                    });
                }
            }
        })
        .catch(error => {
            console.error('Error:', error);
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Something went wrong! Please try again.'
            });
        })
        .finally(() => {
            // Re-enable submit button
            submitBtn.disabled = false;
            submitBtn.innerHTML = 'Login Error';
        });
    });

    function clearErrors() {
        const errorElements = document.querySelectorAll('.invalid-feedback');
        errorElements.forEach(element => {
            element.textContent = '';
            element.style.display = 'none';
        });
    }

}); 


