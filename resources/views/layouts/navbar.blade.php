
<div id="navbar" class="navbar px-4">
    <div class="flex half-width">
            <a href="{{ url('/') }}" class="nav-link">
                <i class="fas fa-cat fa-2x"></i>
            </a>
    </div>
    <div class="flex justify-content-end half-width">
        @auth
            <form action="{{ route('logout') }}" method="post">
                @csrf
                <div class="nav-link text-md white">
                    <button type="submit" class="nav-link__button ml-4">Logout</button>
                </div>
            </form>
        @else
                <a href="{{ route('login') }}" class="nav-link text-md white">
                    <button class="nav-link__button">Login</button>
                </a>
                <a href="{{ route('register') }}" class="nav-link text-md white ml-4">
                    <button class="nav-link__button">Register</button>
                </a>
        @endauth
    </div>
</div>
