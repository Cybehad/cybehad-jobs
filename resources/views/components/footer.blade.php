<footer {{ $attributes->merge(['class' => 'pt-8 pb-4 text-center w-full']) }}>
    <h3>&copy; 2024 Cybehad Jobs Center</h3>
    <div class="my-2">
        <ul class="md:flex md:items-center space-x-4">
            <li><a href="{{ route('home') }}">Home</a></li>
            <li><a href="{{ route('home') }}">Jobs</a></li>
            <li><a href="#">Careers</a></li>
            <li><a href="#">Companies</a></li>
            <li><a href="#">Terms &amp; Conditions</a></li>
            <li><a href="#">Privacy Policy</a></li>
        </ul>
    </div>
</footer>