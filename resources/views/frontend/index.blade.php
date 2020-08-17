@extends('header')

        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        Username: {{ Auth::user()->name }}
                        <a href="{{ url('/home') }}">Home
                        <a href="{{ route('logout') }}">Logout</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Laravel
                </div>
            </div>
        </div>

@extends('footer')
