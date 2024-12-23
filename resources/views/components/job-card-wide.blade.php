@props(['job'])
<div class="flex p-4 transition-colors duration-300 border border-transparent rounded-lg gap-x-6 bg-white/10 hover:border-blue-700 group">
    <div>
        <x-employer-logo :logo="$job->employer->logo" :width="90"/>
    </div>

    <div class="flex flex-col flex-1">
        <a href="#" class="self-start text-sm text-gray-300 transition-colors duration-300 group-hover:text-blue-700">{{ $job->employer->name }}</a>
        <h3 class="mt-3 text-lg font-bold">{{ $job->title }}</h3>
        <div class="mt-auto text-sm text-gray-400">{{ $job->schedule }} - From {{ $job->salary }}</div>
    </div>

    <div>
        <div class="space-y-1">
            @foreach($job->tags as $tag)
                <x-tag :$tag size="small" />
            @endforeach
        </div>
    </div>
</div>
