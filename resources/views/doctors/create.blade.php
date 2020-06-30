@extends('layouts.app')
@section('content')

<div class="container mt-5">

    <div class="row justify-content-center">
        <div class="col-8">
            <form action="{{ route('reservations.store') }}" method="POST">
                @csrf
                <div class="form-group m-0 mt-2">
                    <label class="m-0" for="exampleInputEmail1">Data</label>
                    <input type="date" name="data" class="form-control" id="exampleInputEmail1"
                        aria-describedby="emailHelp">
                </div>
                @if($errors->has('data'))
                    <p style="color:red;">{{ $errors->first('data') }}</p>
                @endif
                <div class="form-group m-0 mt-2">
                    <label class="m-0" for="exampleInputEmail1">Trattamento</label>
                    <input type="text" name="trattamento" class="form-control" id="exampleInputEmail1"
                        aria-describedby="emailHelp">
                </div>
                @if($errors->has('trattamento'))
                    <p style="color:red;">{{ $errors->first('trattamento') }}</p>
                @endif
                <button type="submit" class="btn btn-primary mt-4">Submit</button>
            </form>
        </div>
    </div>
</div>


@endsection
