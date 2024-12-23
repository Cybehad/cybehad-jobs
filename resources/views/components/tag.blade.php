@props(['tag', 'size' => 'base'])
@php
    $default =
        'font-bold capitalize transition-colors duration-300 bg-white/10 rounded-xl hover:bg-white/25 ';
    if ($size == 'base') {
        $default .= 'px-3 py-1 text-sm';
    }
    if ($size=='small') {
        $default .= 'px-2 py-1 text-2xs';
    }
@endphp
<a href="/tags/{{ strtolower($tag->name) }}" class="{{ $default }}">{{ $tag->name }}</a>
