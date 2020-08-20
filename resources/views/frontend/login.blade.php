@extends('main')

@section('title', 'Login')

@if(isset(Auth::user()->email))
    <script>window.location="{{ route('home') }}";</script>
@endif

@section('banner')

    <div class="content">
        <div class="title">
            Login System
        </div>
        <div class="container">
            <form method="post" action="{{ url('/checklogin') }}">
                {{ csrf_field() }}
                <label for="uname"><strong>Username</strong>
                    <input type="text" placeholder="Enter Username" name="name" required />
                </label>
                <br/>
                <label for="psw"><strong>Password</strong>
                    <input type="password" placeholder="Enter Password" name="password" required />
                </label>
                <br/>
                @if ($message = Session::get('error'))
                    <div class="alert alert-danger alert-block">
                        <strong>{{ $message }}</strong>
                    </div>
                    <br/>
                @endif
                <input type="submit" name="login" value="Login" />
                <br/>
                <label>
                    <input type="checkbox" checked="checked" name="remember"> Remember me
                </label>
            </form>
        </div>
    </div>
@endsection

@section('footerclass','class=sticky')
