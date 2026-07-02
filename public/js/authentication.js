document.addEventListener('DOMContentLoaded', function () {
    const form = document.getElementById('authForm');
    if (!form) return;

    const nameInput = document.getElementById('name');
    const emailInput = document.getElementById('email');
    const passwordInput = document.getElementById('password');
    const confirmInput = document.getElementById('password_confirmation');

    const nameError = document.getElementById('nameError');
    const emailError = document.getElementById('emailError');
    const passwordError = document.getElementById('passwordError');
    const confirmPasswordError = document.getElementById('confirmPasswordError');

    function showError(element, message) {
        if (!element) return;
        element.textContent = message;
        element.classList.remove('d-none');
    }

    function clearError(element) {
        if (!element) return;
        element.textContent = '';
        element.classList.add('d-none');
    }

    function validateName() {
        if (!nameInput) return true;
        if (!nameInput.value.trim()) {
            showError(nameError, 'Full name is required.');
            return false;
        }
        clearError(nameError);
        return true;
    }

    function validateEmail() {
        if (!emailInput) return true;
        if (!emailInput.value.trim()) {
            showError(emailError, 'Email is required.');
            return false;
        }
        if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(emailInput.value.trim())) {
            showError(emailError, 'Please enter a valid email address.');
            return false;
        }
        clearError(emailError);
        return true;
    }

    function validatePassword() {
        if (!passwordInput) return true;
        if (!passwordInput.value) {
            showError(passwordError, 'Password is required.');
            return false;
        }
        if (passwordInput.value.length < 8) {
            showError(passwordError, 'Password must be at least 8 characters.');
            return false;
        }
        clearError(passwordError);
        return true;
    }

    function validateConfirmPassword() {
        if (!confirmInput) return true;
        if (!confirmInput.value) {
            showError(confirmPasswordError, 'Please confirm your password.');
            return false;
        }
        if (confirmInput.value !== passwordInput.value) {
            showError(confirmPasswordError, 'Passwords do not match.');
            return false;
        }
        clearError(confirmPasswordError);
        return true;
    }

    function validateForm() {
        const isNameValid = validateName();
        const isEmailValid = validateEmail();
        const isPasswordValid = validatePassword();
        const isConfirmValid = validateConfirmPassword();
        return isNameValid && isEmailValid && isPasswordValid && isConfirmValid;
    }

    [nameInput, emailInput, passwordInput, confirmInput].forEach((input) => {
        if (!input) return;
        input.addEventListener('input', () => {
            if (input === nameInput) validateName();
            if (input === emailInput) validateEmail();
            if (input === passwordInput) {
                validatePassword();
                if (confirmInput) validateConfirmPassword();
            }
            if (input === confirmInput) validateConfirmPassword();
        });
    });

    form.addEventListener('submit', function (event) {
        event.preventDefault();

        if (validateForm()) {
            form.submit();
        }
    });
});
