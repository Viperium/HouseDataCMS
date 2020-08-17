@extends('header')

@if(isset(Auth::user()->email))
    <script>window.location="{{ route('home') }}";</script>
@endif

@if ($message = Session::get('error'))
    <div class="alert alert-danger alert-block">
        <button type="button" class="close" data-dismiss="alert">×</button>
        <strong>{{ $message }}</strong>
    </div>
@endif

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
            HouseDataCMS<br/>
            Login System
        </div>
        <main>
            @if (count($errors) > 0)
                <div class="container">
                    <div class="alert alert-danger">
                        <ul>
                            @foreach($errors->all() as $error)

                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            @endif
            <form method="post" action="{{ url('/checklogin') }}">
                {{ csrf_field() }}
                <div class="container">
                    <label for="uname"><b>Username</b>
                        <input type="text" placeholder="Enter Username" name="name" required />
                    </label>
                    <br/>
                    <label for="psw"><b>Password</b>
                        <input type="password" placeholder="Enter Password" name="password" required />
                    </label>

                    <input type="submit" name="login" class="btn btn-primary" value="Login" />
                    <br/>
                    <label>
                        <input type="checkbox" checked="checked" name="remember"> Remember me
                    </label>
                </div>
            </form>
        </main>
    </div>
</div>

@extends('footer')
