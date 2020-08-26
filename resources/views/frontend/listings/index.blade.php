@extends('main')

@section('title', 'Listings')

@section('banner')

    <div class="content">
        <div class="title">
            House Listings
        </div>
    </div>

@endsection

@section('content')

    <section id="listings">
        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif

        <div class="container">
            <h1>HUIZEN AANBOD</h1>

            {{--@foreach ($listings as $listing)
                <div class="listing">
                    <div class="image">
                        <img class='img-responsive' src="{{ asset($listing->image) }}" alt="{{ $listing->name }}">
                    </div>
                    <div class="listing-content">
                        <table>
                            <tbody>
                                <tr>
                                    <td>Naam</td>
                                    <td>{{ $listing->name }}</td>
                                </tr>
                                <tr>
                                    <td>Type</td>
                                    <td>{{ $listing->type }}</td>
                                </tr>
                                <tr>
                                    <td>Kamers</td>
                                    <td>{{ $listing->rooms }}</td>
                                </tr>
                                <tr>
                                    <td>Status</td>
                                    <td>{{ $listing->status }}</td>
                                </tr>
                                <tr>
                                    <td>Prijs</td>
                                    <td>&euro; {{ $listing->price }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            @endforeach--}}

            <div class="wrap">
                <div class="table">
                    <table id="dataTable" class="display responsive nowrap">
                        <thead>
                            <tr>
                                <td>Afbeelding</td>
                                <td>Naam</td>
                                <td>Type</td>
                                <td>Kamers</td>
                                <td>Oppervlakte</td>
                                <td>Status</td>
                                <td>Prijs</td>
                                @if (Route::has('login'))
                                    @auth
                                        <td>Actions</td>
                                    @endauth
                                @endif
                            </tr>
                        </thead>
                        <tbody>
                        @foreach ($listings as $listing)
                            <tr>
                                <td>
                                    <div class="listing-image"><img class='img-responsive' src="{{ $listing->image }}" alt="{{ $listing->name }}">
                                        @if ($listing->status == 'Verkocht')
                                            <div class="overlay">Verkocht</div>
                                        @endif
                                    </div>
                                </td>
                                <td>{{ $listing->name }}</td>
                                <td>{{ $listing->type }}</td>
                                <td>{{ $listing->rooms }}</td>
                                <td>{{ $listing->surface }} m2</td>
                                <td>{{ $listing->status }}</td>
                                <td>&euro; {{ number_format($listing->price, 2, ',', '.') }}</td>
                                @if (Route::has('login'))
                                    @auth
                                        <td>
                                            <form action="{{ route('listings.destroy',$listing->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this listing?');">
                                                <a class="button prime" href="{{ route('listings.edit', $listing->id) }}">Aanpassen</a>
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="button btn-warning">Delete</button>
                                            </form>
                                        </td>
                                    @endauth
                                @endif
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            @if (Route::has('login'))
                @auth
                    <a class="button prime" href="{{ route('listings.create') }}">Nieuw aanbod toevoegen</a>
                @endauth
            @endif
        </div>
    </section>
@endsection

@section('javascript')
    <script
        src="//code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
        crossorigin="anonymous">
    </script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/datatables/1.10.21/js/jquery.dataTables.min.js"
            integrity="sha512-BkpSL20WETFylMrcirBahHfSnY++H2O1W+UnEEO4yNIl+jI2+zowyoGJpbtk6bx97fBXf++WJHSSK2MV4ghPcg=="
            crossorigin="anonymous">
    </script>
    <script type="text/javascript">
        $(document).ready( function () {
            $('#dataTable').DataTable( {
                responsive: true
            });
        } );
    </script>
@endsection
