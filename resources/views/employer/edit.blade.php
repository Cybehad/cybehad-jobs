@php use Illuminate\Support\Facades\Storage; @endphp
<x-layout>
    <x-slot:heading>Employer Profile - Cybehad Jobs</x-slot:heading>
    <div class="space-y-10">
        <section class="pt-4">
            <h1 class="text-3xl text-bold text-center">Edit Employer Profile</h1>
            <div class="flex flex-col items-center mt-5 pb-5">
                <x-form.form id="registerForm" action="{{ request()->url() }}" enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')
                    <x-form.form-field class="mb-4">
                        <x-form.form-label-input name="name" value="{{ $employer->name }}" label="Company name"/>
                    </x-form.form-field>
                    <x-form.form-field class="mb-4">
                        <x-form.form-label-input type="email" name="email" value="{{ $employer->email }}" label="Company email"/>
                    </x-form.form-field>
                    <x-form.form-field class="mb-4">
                        <x-form.form-label-input label="Phone number" value="{{ $employer->phone_number }}" name="tel"/>
                    </x-form.form-field>
                    <x-form.form-field class="mb-4">
                        <x-form.form-label-input label="Website" value="{{ $employer->website }}" name="url"/>
                    </x-form.form-field>
                    <x-form.form-field class="mb-4">
                        <x-form.form-label-input label="Location" value="{{ $employer->location }}" name="location"/>
                    </x-form.form-field>
                    <x-form.form-field class="mb-4">
                        <x-form.form-label-input type="file" name="file" label="Logo"/>
                    </x-form.form-field>
                    <x-form.form-field>
                        <x-form.form-button type="submit" class="w-full">Submit</x-form.form-button>
                    </x-form.form-field>
                </x-form.form>
            </div>
        </section>
    </div>
    <x-footer />
</x-layout>