@if (Route::has('login'))
    @auth
        User: {{ Auth::user()->name }}
        <a href="{{ route('logout') }}">Logout</a>
    @else
        <a href="{{ route('login') }}">Login</a>
    @endauth
@endif
