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
            <form action="{{ route('reservations.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="exampleInputEmail1">Data</label>
                    <input type="date" name="data" class="form-control" id="exampleInputEmail1"
                        aria-describedby="emailHelp">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Trattamento</label>
                    <input type="text" name="trattamento" class="form-control" id="exampleInputEmail1"
                        aria-describedby="emailHelp">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>


@endsection
