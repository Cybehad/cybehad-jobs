@props(['job'])
<div class="flex flex-col p-4 text-center transition-colors duration-300 border border-transparent rounded-lg bg-white/10 hover:border-blue-700 group">
    <div class="self-start text-sm">{{ $job->employer->name }}</div>
    <div class="py-8">
        <h3 class="text-xl font-bold transition-colors duration-300 group-hover:text-blue-700">{{ $job->title }}</h3>
        <div class="mt-4 text-sm">{{ $job->schedule }} - From {{ $job->salary }}</div>
    </div>
    <div class="flex items-center justify-between mt-auto">
        <div>
            @foreach($job->tags as $tag)
                <x-tag :$tag size="small" />
            @endforeach
        </div>
        <x-employer-logo :logo="$job->employer->logo" :width='42'/>
    </div>
</div>