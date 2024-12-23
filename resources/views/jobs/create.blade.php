<x-layout>
    <div class="flex items-center flex-col justify-center">
        <div class="mt-2 sm:mx-auto sm:w-full sm:max-w-sm">
            <h2 class="text-2xl font-bold mb-6 text-gray-300 text-center">Post a Job</h2>
            <form id="registerForm" action="{{ route('jobs.create') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <x-form.form-field class="mb-4">
                    <x-form.form-label-input label="title" name="title"/>
                </x-form.form-field>
                <x-form.form-field class="mb-4">
                    <x-form.form-label-input label="Description" name="description"/>
                </x-form.form-field>
                <x-form.form-field class="mb-4">
                    <x-form.form-label-input label="salary" name="salary"/>
                </x-form.form-field>
                <x-form.form-field class="mb-4">
                    <x-form.form-label-input label="location" name="location"/>
                </x-form.form-field>
                <x-form.form-field class="mb-4">
                    <x-form.form-label-input label="schedule" name="schedule"/>
                </x-form.form-field>
                <x-form.form-field class="mb-4">
                    <x-form.form-label-input label="url (http...)" name="url"/>
                </x-form.form-field>
                <div class="mb-4">
                    <label for="featured" class="block text-sm/6 font-medium text-gray-300">Featured</label>
                    <div class="my-2">
                        <input type="checkbox" id="featured" name="featured" class="bg-white/10 border rounded-lg focus:outline-none focus:ring focus:border-blue-300" placeholder="featured">
                        <p class="text-red-500 text-sm mt-1 hidden" id="featuredError">featured is required.</p>
                        @error('featured') <p class="text-white/30"> {{ $message }} </p> @enderror
                    </div>
                </div>
                <x-form.form-field class="mb-4">
                    <x-form.form-label-input label="Tags (ex: graphics, marketing)" name="tags"/>
                </x-form.form-field>
                <x-form.form-button type="submit" class="bg-blue-500 rounded p-2 w-full">Publish</x-form.form-button>
            </form>
        </div>
    </div>
    <x-footer />
</x-layout>