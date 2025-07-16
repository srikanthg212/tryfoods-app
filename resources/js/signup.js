document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('signupForm');
    const submitBtn = document.getElementById('submitBtn');

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
        fetch('/signup', {
            method: 'POST',
            body: formData,
            headers: {
                'X-Requested-With': 'XMLHttpRequest'
            }
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                // Show success message
                Swal.fire({
                    icon: 'success',
                    title: 'Success!',
                    text: 'Registration successful! Redirecting to login...',
                    showConfirmButton: false,
                    timer: 2000
                }).then(() => {
                    window.location.href = '/login';
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
            submitBtn.innerHTML = 'Register Account';
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