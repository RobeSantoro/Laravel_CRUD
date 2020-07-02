@extends('layouts.app')
@section('content')

<div class="container mt-5">

    <div class="row justify-content-center">
        <div class="col-8">
            <form action="{{ route('reservations.update', compact('reservation')) }}" method="POST">
                @method('PUT')
                @csrf

                <div class="form-group">
                    <label for="3">Data</label>
                    <input type="date" name="data" class="form-control" id="3" value="{{ $reservation->data, old('data') }}">
                </div>

                @if($errors->has('data'))
                    <p style="color:red;">{{ $errors->first('data') }}</p>
                @endif

                <div class="form-group m-0 mt-2">
                    <label for="role" class="mb-0">Trattamento</label>

                    <div class="col-12 px-0">
                        <select id="role" class="form-control" name="trattamento">
                            {{-- Sarà il @foreach della table Trattamenti --}}
                            <option>Carie</option>
                            <option>Pulizia</option>
                            <option>Dentiera</option>
                        </select>
                    </div>
                </div>

                @if($errors->has('trattamento'))
                    <p style="color:red;">{{ $errors->first('trattamento') }}</p>
                @endif

                <button type="submit" class="btn btn-primary my-3">Modifica</button>

            </form>
        </div>
    </div>
</div>


@endsection
