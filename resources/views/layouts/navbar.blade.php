
<div id="navbar" class="navbar">
    <div class="flex half-width px-6">
        <a href="{{ url('/home') }}">
            <i class="fas fa-cat fa-2x"></i>
        </a>
        {{-- <i class="fab fa-angellist fa-2x"></i> --}}
        
    </div>
    <div class="flex justify-content-end half-width px-6">
        @auth
            <a href="{{ url('/home') }}" class="text-md white">Home</a>
        @else
            <a href="{{ route('login') }}" class="text-md white">Log in</a>
    
            @if (Route::has('register'))
                <a href="{{ route('register') }}" class="ml-4 text-md white">Register</a>
            @endif
        @endauth
    </div>
</div>
