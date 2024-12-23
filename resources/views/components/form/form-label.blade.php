@props(['name', 'label'])
<div class="inline-flex items-center gap-x-1">
    <span class="inline-block w-2 h-2 bg-white"></span>
    <label for="{{ $name }}" {{ $attributes->merge(['class'=>'block text-sm/6 font-medium text-gray-300']) }}>{{ ucfirst( $label ?? $name) }}</label>
</div>