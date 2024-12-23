@props(['name', 'type'=>'text'])
<div class="mt-2">
    <input type="{{ $type }}" name="{{ $name }}" id="{{ $name }}" autocomplete="{{ $name }}" placeholder="{{ ucfirst($name) }}" {{ $attributes->merge(['class'=>'w-full text-gray-300 bg-white/10 px-3 py-2 border rounded-lg focus:outline-none focus:ring focus:border-blue-300 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-blue-900']) }}>
    <x-form.form-error :name="$name" />
</div>