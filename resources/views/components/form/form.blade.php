@props(['method'=>'POST'])
<form {{ $attributes->merge(['class'=>'space-y-4']) }} method="{{ $method }}">
    @csrf
    {{ $slot }}
</form>