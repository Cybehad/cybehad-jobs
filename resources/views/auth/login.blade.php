<x-layout>
    <div class="flex items-center flex-col justify-center">
        <div class="mt-2 sm:mx-auto sm:w-full sm:max-w-sm">
            <h2 class="text-2xl font-bold mb-6 text-gray-300 text-center">Register</h2>
            <x-form.form action="{{ route('login') }}">
                <x-form.form-field>
                    <x-form.form-label name="email" />
                    <x-form.form-input type="email" name="email" required/>
                </x-form.form-field>
                <x-form.form-field>
                    <x-form.form-field class="flex items-center justify-between">
                        <x-form.form-label name="password"/>
                        <div class="text-sm"><a href="/forgot-password" class="font-semibold text-blue-600 hover:text-indigo-500">Forgot password?</a></div>
                    </x-form.form-field>
                    <x-form.form-input name="password" type="password" required/>
                </x-form.form-field>
                <x-form.form-field>
                    <x-form.form-button type="submit" class="w-full">Login</x-form.form-button>
                </x-form.form-field>
            </x-form.form>
            <p class="mt-6 text-center text-sm/6 text-gray-300">
                Not a member? <a href="{{ route('register') }}" class="font-semibold text-blue-500 hover:text-blue-600">Create a free account!</a>
            </p>
        </div>
    </div>
    <x-footer />
</x-layout>