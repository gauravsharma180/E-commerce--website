


document.addEventListener('DOMContentLoaded', () => {
    const togglePassword = document.getElementById('togglePassword');
    const toggleConfirmPassword = document.getElementById('toggleConfirmPassword');
    const password = document.getElementById('password');
    const confirmPassword = document.getElementById('confirm_password');

    if (togglePassword && password) {
        togglePassword.addEventListener('click', () => {
            // Toggle the type attribute of the password field
            const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
            password.setAttribute('type', type);

            // Toggle the eye icon
            togglePassword.classList.toggle('fa-eye-slash');
        });
    }

    if (toggleConfirmPassword && confirmPassword) {
        toggleConfirmPassword.addEventListener('click', () => {
            // Toggle the type attribute of the confirm password field
            const type = confirmPassword.getAttribute('type') === 'password' ? 'text' : 'password';
            confirmPassword.setAttribute('type', type);

            // Toggle the eye icon
            toggleConfirmPassword.classList.toggle('fa-eye-slash');
        });
    }
});
