<x-layout>
    <div class="flex items-center flex-col justify-center">
        <div class="mt-2 sm:mx-auto sm:w-full sm:max-w-sm">
            <h2 class="text-2xl font-bold mb-6 text-gray-300 text-center">Create Employer Profile</h2>
            <x-form.form id="registerForm" action="{{ route('employers.create') }}" enctype="multipart/form-data">
                @csrf
                <x-form.form-field class="mb-4">
                    <x-form.form-label-input name="name" label="Company name"/>
                </x-form.form-field>
                <x-form.form-field class="mb-4">
                    <x-form.form-label-input type="email" name="email" label="Company email"/>
                </x-form.form-field>
                <x-form.form-field class="mb-4">
                    <x-form.form-label-input label="Phone number" name="tel"/>
                </x-form.form-field>
                <x-form.form-field class="mb-4">
                    <x-form.form-label-input label="Website" name="url"/>
                </x-form.form-field>
                <x-form.form-field class="mb-4">
                    <x-form.form-label-input label="Location" name="location"/>
                </x-form.form-field>
                <x-form.form-field class="mb-4">
                    <x-form.form-label-input type="file" name="file" label="Logo"/>
                </x-form.form-field>
                <x-form.form-field>
                    <x-form.form-button type="submit" class="w-full">Submit</x-form.form-button>
                </x-form.form-field>
            </x-form.form>
        </div>
    </div>
    <x-footer />
</x-layout>