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

    {{-- Come fare a mandare una stringa per sostituire una classe css a seconda se abbiamo eliminato o creato? --}}
    <div class="row">
        <div class="col-12">
            @if(session('message'))
                <div class="alert alert-success">
                    {{ session('message') }}
                </div>
            @endif
        </div>
    </div>

    <div class="row ">
        <div class="col-12">
            <h2 class="d-block d-md-inline">Hello {{ Auth::user()->name }}, you are logged in!</h2>
            <a class="btn btn-primary float-left float-md-right mb-3 mb-md-5" href="{{ route('reservations.create') }}">Nuova Prenotazione</a>

            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Email</th>
                        <th scope="col">Data</th>
                        <th scope="col">Trattamento</th>
                        <th scope="col">Modifica</th>
                        <th scope="col">Elimina</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($reservations as $reservation)
                        <tr>
                            <th scope="row">{{ $reservation->user->id }}</th>
                            <td>{{ $reservation->user->name }}</td>
                            <td>{{ $reservation->user->email }}</td>
                            <td>{{ $reservation->data }}</td>
                            <td>{{ $reservation->trattamento }}</td>
                            <td>
                                <a class="btn btn-success"
                                    href="{{ route('reservations.edit',compact('reservation')) }}">Modifica</a>
                            </td>
                            <td>
                                <form action="{{ route('reservations.destroy',compact('reservation')) }}" method="POST">
                                    @method('DELETE')
                                    @csrf
                                    <button class="btn btn-danger" onclick="return confirm('Are you sure?')">Elimina</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
