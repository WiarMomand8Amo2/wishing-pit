@extends('layout.app')

@section('content')

    <h1 class="font-weight-bold">
        Create Wish
    </h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="m-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="post" action="{{ url()->current() . '/create' }}">
        @csrf
        <div class="form-group">
            <label for="naam">Enter Wish Name</label>
            <input type="text" class="form-control" id="naam" name="naam" placeholder="Wish Name">
        </div>
        <div class="form-group">
            <label for="beschrijving">Beschrijving</label>
            <input type="text" class="form-control" id="beschrijving" name="beschrijving" placeholder="beschrijving">
        </div>
        <div class="form-group">
            <label for="prijs">Prijs</label>
            <input type="text" class="form-control" id="prijs"  name="prijs" placeholder="Prijs">
        </div>
        <div class="form-group">
            <label for="plaatje">Plaatje</label>
            <input type="file" class="form-control-file" id="plaatje" name="plaatje">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

@endsection()