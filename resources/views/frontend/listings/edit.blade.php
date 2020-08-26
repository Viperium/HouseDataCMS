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

                        <label for="name"><strong>Name</strong>
                            <input type="text" value="{{ $listing->name }}" name="name" required />
                        </label>
                        <br/>
                        <label for="type"><strong>Type</strong>
                            <input type="text" value="{{ $listing->type }}" name="type" required />
                        </label>
                        <br/>
                        <label for="status"><strong>Status</strong>
                            <input type="text" value="{{ $listing->status }}" name="status" required />
                        </label>
                        <br/>
                        <label for="rooms"><strong>Rooms</strong>
                            <input type="number" value="{{ $listing->rooms }}" name="rooms" required />
                        </label>
                        <br/>
                        <label for="price"><strong>Price</strong>
                            <input type="number" step="any" value="{{ $listing->price }}" name="price" required />
                        </label>
                        <br/>
                        <label for="image"><strong>Image</strong>
                            <input id="image" type="file" name="image" alt="Thumbnail image"/>
                        </label>
                        <br/>
                        <input type="submit" name="save" class="btn btn-primary" value="Aanbod Opslaan" />
                    </form>

                @else
                    <h2>Not authorized to do this!</h2>
                    <a class="button prime" href="{{ route('home') }}">Home</a>
                @endauth
            @endif
        </div>
    </section>
@endsection
