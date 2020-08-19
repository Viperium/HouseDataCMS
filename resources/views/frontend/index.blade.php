@extends('main')

@section('title', 'Home')
@section('banner')
    <div class="banner">
        <h1>House Data CMS</h1>
        <p>"Maximaal profiteren van de huizenmarkt!"</p>
        <button class="button prime" type="button">Contact</button>
        <button class="button second" type="button">Meer weten</button>
    </div>
@endsection

@section('content')
    <section id="boxes">
        @include('frontend.boxes')
    </section>
    <hr/>
    <section id="information">
        @include('frontend.information')
    </section>
    <section id="explanation">
        @include('frontend.explanation')
    </section>
    <section id="prices">
        @include('frontend.prices')
    </section>
    <section id="contact">
        @include('frontend.contact')
    </section>
@endsection



