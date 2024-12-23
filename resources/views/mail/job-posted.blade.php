<div>
    <h2>Your Job has been successfully posted</h2>
    <p>Dear {{ $job->employer->user->name }},</p>
    <p>View your job from <a href="{{ url() }}/jobs/{{ $job->identifier }}">here</a>.</p>
    <p>Thanks</p>
</div>
