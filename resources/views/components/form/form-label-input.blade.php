@props(['name', 'label', 'value' => '', 'type'=>'text'])
<div class="inline-flex items-center gap-x-1">
    <span class="inline-block w-2 h-2 bg-white"></span>
<label for="{{ $name }}" class="block text-sm/6 font-medium text-gray-300">{{ ucfirst($label) }}</label>
</div>
<div class="mt-2">
    <input type="{{ $type }}" name="{{ $name }}" value="{{ $value }}" id="{{ $name }}" autocomplete="{{ $name }}" placeholder="{{ ucfirst($name) }}" {{ $attributes->merge(['class'=>'w-full text-gray-900 bg-white/10 px-3 py-2 border rounded-lg focus:outline-none focus:ring focus:border-blue-300 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-blue-900']) }}>
    <x-form.form-error :name="$name" />
</div>