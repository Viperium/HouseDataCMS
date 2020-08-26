@extends('main')

@section('title', 'Create Listing')

@section('banner')

    <div class="content">
        <div class="title">
            Create Listing
        </div>
    </div>

@endsection

@section('content')
    <section id="listings">
        <div class="container">
            <h1>HUIS TOEVOEGEN</h1>
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

                    <form action="{{ route('listings.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <label for="name"><strong>Name</strong>
                            <input type="text" placeholder="Naam" name="name" required />
                        </label>
                        <br/>
                        <label for="type"><strong>Type</strong>
                            <input type="text" placeholder="Type" name="type" required />
                        </label>
                        <br/>
                        <label for="status"><strong>Status</strong>
                            <input type="text" placeholder="Status" name="status" required />
                        </label>
                        <br/>
                        <label for="rooms"><strong>Rooms</strong>
                            <input type="number" placeholder="Aantal kamers" name="rooms" required />
                        </label>
                        <br/>
                        <label for="image"><strong>Price</strong>
                            <input type="number" step="any" placeholder="Prijs" name="price" required />
                        </label>
                        <br/>
                        <label for="image"><strong>Image</strong>
                            <input id="image" type="file" name="image" alt="Thumbnail image" required />
                        </label>
                        <br/>
                        <input type="submit" name="save" class="btn btn-primary" value="Aanbod Opslaan" />
                    </form>

                @else
                    <h2>Not authorized to do this!</h2>
                @endauth
            @endif
        </div>
    </section>
@endsection
