<header>
    <div class="top-left links">
        <a href="{{ route('home') }}">Home</a>
        <a href="{{ route('home') }}">Houses</a>
    </div>
    <div id="logo">
        <img src="{{ asset('images/logo/logoHD-CMS.png') }}"  alt="Logo HouseData-CMS"/>
    </div>
    <div class="top-right links">
        <a href="{{ route('home') }}">Contact</a>
        @include('links')
    </div>

</header>
