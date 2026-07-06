document.addEventListener('DOMContentLoaded', (): void => {
    const form = document.getElementById('authForm') as HTMLFormElement | null;
    if (!form) return;

    const nameInput = document.getElementById('name') as HTMLInputElement | null;
    const emailInput = document.getElementById('email') as HTMLInputElement | null;
    const passwordInput = document.getElementById('password') as HTMLInputElement | null;
    const confirmInput = document.getElementById('password_confirmation') as HTMLInputElement | null;

    const nameError = document.getElementById('nameError') as HTMLElement | null;
    const emailError = document.getElementById('emailError') as HTMLElement | null;
    const passwordError = document.getElementById('passwordError') as HTMLElement | null;
    const confirmPasswordError = document.getElementById('confirmPasswordError') as HTMLElement | null;

    function showError(element: HTMLElement | null, message: string): void {
        if (!element) return;
        element.textContent = message;
        element.classList.remove('d-none');
    }

    function clearError(element: HTMLElement | null): void {
        if (!element) return;
        element.textContent = '';
        element.classList.add('d-none');
    }

    function validateName(): boolean {
        if (!nameInput) return true;
        if (!nameInput.value.trim()) {
            showError(nameError, 'Full name is required.');
            return false;
        }
        clearError(nameError);
        return true;
    }

    function validateEmail(): boolean {
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

    function validatePassword(): boolean {
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

    function validateConfirmPassword(): boolean {
        if (!confirmInput) return true;
        if (!confirmInput.value) {
            showError(confirmPasswordError, 'Please confirm your password.');
            return false;
        }
        if (confirmInput.value !== passwordInput?.value) {
            showError(confirmPasswordError, 'Passwords do not match.');
            return false;
        }
        clearError(confirmPasswordError);
        return true;
    }

    function validateForm(): boolean {
        const isNameValid = validateName();
        const isEmailValid = validateEmail();
        const isPasswordValid = validatePassword();
        const isConfirmValid = validateConfirmPassword();
        return isNameValid && isEmailValid && isPasswordValid && isConfirmValid;
    }

    [nameInput, emailInput, passwordInput, confirmInput].forEach((input): void => {
        if (!input) return;
        input.addEventListener('input', (): void => {
            if (input === nameInput) validateName();
            if (input === emailInput) validateEmail();
            if (input === passwordInput) {
                validatePassword();
                if (confirmInput) validateConfirmPassword();
            }
            if (input === confirmInput) validateConfirmPassword();
        });
    });

    form.addEventListener('submit', (event: Event): void => {
        event.preventDefault();

        if (validateForm()) {
            form.submit();
        }
    });
});
