
<div id="navbar" class="navbar">
    <div class="flex half-width px-6">
        <a href="{{ url('/home') }}">
            <i class="fas fa-cat fa-2x"></i>
        </a>
        {{-- <i class="fab fa-angellist fa-2x"></i> --}}
        
    </div>
    <div class="flex justify-content-end half-width px-6">
        @auth
            <a href="{{ url('/home') }}" class="text-md white nav-link">Home</a>
            <form action="{{ route('logout') }}" method="post">
                @csrf
                <button type="submit" class="nav-button text-md ml-4">Logout</button>
            </form>
        @else
            <a href="{{ route('login') }}" class="nav-link text-md white">Log in</a>
            <a href="{{ route('register') }}" class="nav-link text-md white ml-4">Register</a>
        @endauth
    </div>
</div>
