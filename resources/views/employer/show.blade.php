@php use Illuminate\Support\Facades\Storage; @endphp
<x-layout>
    <x-slot:heading>Employer Profile - Cybehad Jobs</x-slot:heading>
    <div class="space-y-10">
        <section class="pt-4 w-[80%] my-0 mx-auto text-center">
            <h1 class="text-3xl text-bold">Employer Profile</h1>
            <div class="flex flex-col items-center mt-5 pb-5">
                <img class="w-[55px] h-[55px] rounded-xl" src="{{ Storage::url($employer->logo) }}" alt="{{ $employer->name }}">
                <div class="text-left left-0">
                    <div class="mt-5">
                        Name: {{ $employer->name }}
                    </div>
                    <div class="mt-5">
                        Email: {{ $employer->email }}
                    </div>
                    <div class="mt-5">
                        Phone Number: {{ $employer->phone_number }}
                    </div>
                    <div class="mt-5">
                        Website: <a href="{{ $employer->website }}">{{ $employer->website }}</a>
                    </div>
                    <div class="mt-5">
                        Location: {{ $employer->location }}
                    </div>
                    <div class="mt-5 flex space-x-2">
                        <x-form.button href="{{ request()->url() }}/edit">Edit Profile</x-form.button>
                        <form action="{{ request()->url() }}/edit" method="POST">
                            @csrf
                            @method('DELETE')
                            <x-form.form-button type="submit" class="bg-red-900 hover:bg-red-700">Delete Profile</x-form.form-button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <x-footer />
</x-layout>