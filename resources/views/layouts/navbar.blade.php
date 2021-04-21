
<div id="navbar" class="navbar full-width white sky-blue-background">
    <div class="flex half-width px-6">
        <i class="fas fa-cat fa-2x"></i>
        {{-- <i class="fab fa-angellist fa-2x"></i> --}}
        
    </div>
    <div class="flex justify-content-end half-width px-6">
        @auth
            <a href="{{ url('/home') }}" class="text-md underline white">Home</a>
        @else
            <a href="{{ route('login') }}" class="text-md underline white">Log in</a>
    
            @if (Route::has('register'))
                <a href="{{ route('register') }}" class="ml-4 text-md underline white">Register</a>
            @endif
        @endauth
    </div>
</div>
