@extends('main')

@section('title', 'Edit Listing')

@section('banner')

    <div class="content">
        <div class="title">
            Edit Listing
        </div>
    </div>

@endsection

@section('content')
    <section id="listings">
        <div class="container">
            <h1>HUIS AANPASSEN</h1>
            @if (Route::has('login'))
                @auth
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <strong>Warning!</strong> Please check input field code<br><br>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="{{ route('listings.update',$listing->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="form-control">
                            <div class="form-colums">
                                <div class="form-colum-1">
                                    <div class="form-fields">
                                        <div class="form-field">
                                            <label for="name"><strong>Naam</strong></label>
                                            <input type="text" value="{{ $listing->name }}" name="name" required />
                                        </div>
                                        <div class="form-field">
                                            <label for="type"><strong>Type</strong></label>
                                            <select name="type" id="type" required>
                                                <option value="{{ $listing->type }}" selected>{{ ucfirst($listing->type) }}</option>
                                                <option value="" disabled>---</option>
                                                <option value="rijtjeshuis">Rijtjeshuis</option>
                                                <option value="apartement">Apartement</option>
                                                <option value="vrijstaand">Vrijstaand</option>
                                                <option value="villa">Villa</option>
                                            </select>
                                        </div>
                                        <div class="form-field">
                                            <label for="status"><strong>Status</strong></label>
                                            <select name="status" id="status" required>
                                                <option value="{{ $listing->status }}" selected>{{ ucfirst($listing->status) }}</option>
                                                <option value="" disabled>---</option>
                                                <option value="in verkoop">In verkoop</option>
                                                <option value="in optie/verkocht onder voorbehoud">In optie/verkocht onder voorbehoud</option>
                                                <option value="verkocht">Verkocht</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-colum-2">
                                    <div class="form-fields">
                                        <div class="form-field">
                                            <label for="rooms"><strong>Kamers</strong></label>
                                            <input type="number" value="{{ $listing->rooms }}" name="rooms" required />
                                        </div>
                                        <div class="form-field">
                                            <label for="surface"><strong>Oppervlakte</strong></label>
                                            <input type="number" step="any" value="{{ $listing->surface }}" name="surface" required />
                                        </div>
                                        <div class="form-field">
                                            <label for="image"><strong>Prijs</strong></label>
                                            <input type="number" step="any" value="{{ $listing->price }}" name="price" required />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-image">
                                <label for="image"><strong>Afbeelding</strong></label>
                                <input id="image" type="file" name="image" alt="Thumbnail image" required />
                            </div>
                            <div class="form-submit">
                                <input type="submit" name="save" class="btn btn-primary" value="Aanbod Updaten" />
                            </div>
                        </div>
                    </form>

                @else
                    <h2>Not authorized to do this!</h2>
                    <a class="button prime" href="{{ route('home') }}">Home</a>
                @endauth
            @endif
        </div>
    </section>
@endsection
