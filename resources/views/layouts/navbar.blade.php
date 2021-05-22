<navbar-component
    is-logged-in="{{ json_encode(\Auth::check()) }}"
    home-route="{{ route('home') }}"
    logout-route="{{ route('logout') }}"
    login-route="{{ route('login') }}"
    register-route="{{ route('register') }}"
></navbar-component>
