<header>
    <div class="top-left links">
        <a href="{{ route('home') }}">Home</a>
        <a href="{{ route('listings.index') }}">Houses</a>
    </div>
    <div id="logo">
        <img src="{{ asset('images/logo/logoHD-CMS.png') }}"  alt="Logo HouseData-CMS"/>
    </div>
    <div class="top-right links">
        <a href="{{ route('home') }}">Contact</a>
        @include('links')
    </div>

</header>
