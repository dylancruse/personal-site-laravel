
<div id="navbar" class="navbar full-width white purple-background">
    <div class="flex justify-content-end full-width px-6">
        @auth
            <a href="{{ url('/home') }}" class="text-md underline">Home</a>
        @else
            <a href="{{ route('login') }}" class="text-md underline">Log in</a>
    
            @if (Route::has('register'))
                <a href="{{ route('register') }}" class="ml-4 text-md underline">Register</a>
            @endif
        @endauth
    </div>
</div>
