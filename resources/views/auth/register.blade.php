<x-layout>
    <div class="flex items-center flex-col justify-center">
        <div class="mt-2 sm:mx-auto sm:w-full sm:max-w-sm">
            <h2 class="text-2xl font-bold mb-6 text-gray-300 text-center">Register</h2>
            <x-form.form id="registerForm" action="{{ route('register') }}" enctype="multipart/form-data">
                @csrf
                <x-form.form-field class="mb-4">
                    <x-form.form-label-input name="username" label="username"/>
                </x-form.form-field>
                <x-form.form-field class="mb-4">
                    <x-form.form-label-input label="email" name="email"/>
                </x-form.form-field>
                <x-form.form-field class="mb-4">
                    <x-form.form-label-input name="password" type="password" label="password"/>
                </x-form.form-field>
                <x-form.form-field class="mb-4">
                    <x-form.password-confirm />
                </x-form.form-field>
                <x-form.form-field class="mb-4">
                    <label for="file" class="block text-gray-300">Profile Picture (optional)</label>
                    <x-form.form-input name="file" type="file" />
                </x-form.form-field>
                <x-form.form-field>
                    <x-form.form-button type="submit" class="w-full">Login</x-form.form-button>
                </x-form.form-field>
            </x-form.form>
            <p class="mt-4 text-center text-gray-600">Already have an account? <a href="{{ route('login') }}" class="text-blue-500 hover:underline">Login</a></p>
        </div>
    </div>
    <x-footer />
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const form = document.getElementById('registerForm');
            const usernameInput = document.getElementById('username');
            const emailInput = document.getElementById('email');
            const passwordInput = document.getElementById('password');
            const confirmPasswordInput = document.getElementById('confirmPassword');
            const usernameError = document.getElementById('usernameError');
            const emailError = document.getElementById('emailError');
            const passwordError = document.getElementById('passwordError');
            const confirmPasswordError = document.getElementById('confirmPasswordError');

            form.addEventListener('submit', function (event) {
                let valid = true;

                // Validate username
                if (!usernameInput.value) {
                    usernameError.classList.remove('hidden');
                    valid = false;
                } else {
                    usernameError.classList.add('hidden');
                }

                // Validate email
                const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                if (!emailInput.value || !emailPattern.test(emailInput.value)) {
                    emailError.classList.remove('hidden');
                    valid = false;
                } else {
                    emailError.classList.add('hidden');
                }

                // Validate password
                // const passwordPattern = /^(?=.*[0-9])(?=.*[!@#$%^&*])/;
                // if (!passwordInput.value || passwordInput.value.length < 8 || !passwordPattern.test(passwordInput.value)) {
                //     passwordError.classList.remove('hidden');
                //     valid = false;
                // } else {
                //     passwordError.classList.add('hidden');
                // }

                // Confirm password
                if (passwordInput.value !== confirmPasswordInput.value) {
                    confirmPasswordError.classList.remove('hidden');
                    valid = false;
                } else {
                    confirmPasswordError.classList.add('hidden');
                }

                // Show confirmation dialog
                if (valid) {
                    if (!confirm('Are you sure you want to register with the provided details?')) {
                        event.preventDefault();
                    }
                } else {
                    event.preventDefault();
                }
            });
        });
    </script>
</x-layout>