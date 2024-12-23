<x-layout>
    <div class="space-y-10">
        <section class="pt-4 text-center">
            <h1 class="text-3xl text-bold">Find Your Favorite Job</h1>
            <form action="/search" method="GET" class="mt-6">
                <input type="text" name="q" placeholder="Web Developer..." class="w-full max-w-xl px-8 py-3 rounded-xl bg-white/5 border-white/10"/>
            </form>
        </section>
        <section class="pt-6">
            <x-section-heading>Featured Jobs</x-section-heading>
            <div class="grid gap-8 mt-6 md:grid-cols-3">
                @foreach($featuredJobs as $job)
                    <x-job-card :$job />
                @endforeach
            </div>
        </section>
        <section>
            <x-section-heading>Tags</x-section-heading>
            <div class="mt-6 space-y-1">
                @foreach($tags as $tag)
                    <x-tag :$tag />
                @endforeach
            </div>
        </section>
        <section>
            <x-section-heading>Recent Jobs</x-section-heading>
            <div class="mt-6 space-y-6">
                @foreach($jobs as $job)
                    <x-job-card-wide :$job />
                @endforeach
            </div>
        </section>
    </div>
    <div class="mt-2 mb-2">
        {{ $jobs->links() }}
    </div>
    <x-footer />
</x-layout>
