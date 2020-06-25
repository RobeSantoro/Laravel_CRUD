@extends('layouts.app')
@section('content')

<div class="container mt-5">

    <div class="row">
        <div class="col-12">
            @if($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            @if(session('message'))
                <div class="alert alert-success">
                    {{ session('message') }}
                </div>
            @endif
        </div>
    </div>


    <div class="row">
        <div class="col-12">
            <form action="{{ route('reservations.update', compact('reservation')) }}" method="POST">
                @method('PUT')
                @csrf
                <div class="form-group">
                    <label for="1">Nome</label>
                    <input type="text" name="name" class="form-control" id="1" value="{{ $reservation->user->name, old('name') }}">
                </div>
                <div class="form-group">
                    <label for="2">Email</label>
                    <input type="email" name="email" class="form-control" id="2" value="{{ $reservation->user->email, old('email') }}">
                </div>

                <div class="form-group">
                    <label for="3">Data</label>
                    <input type="date" name="data" class="form-control" id="3" value="{{ $reservation->data, old('data') }}">
                </div>
                <div class="form-group">
                    <label for="4">Trattamento</label>
                    <input type="text" name="trattamento" class="form-control" id="4" value="{{ $reservation->trattamento, old('trattamento') }}">
                </div>
                <button type="submit" class="btn btn-primary">Modifica</button>
            </form>
        </div>
    </div>
</div>


@endsection
