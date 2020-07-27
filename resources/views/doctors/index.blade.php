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
            <a class="btn btn-primary float-left float-md-right mb-3 mb-md-5" href="{{ route('doctors.create') }}">Nuova Prenotazione</a>

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
                    @foreach($doctors as $doctor)
                        <tr>
                            <th scope="row">{{ $doctor->user->id }}</th>
                            <td>{{ $doctor->user->name }}</td>
                            <td>{{ $doctor->user->email }}</td>
                            <td>{{ $doctor->data }}</td>
                            <td>{{ $doctor->trattamento }}</td>
                            <td>
                                <a class="btn btn-success"
                                    href="{{ route('doctors.edit',compact('doctor')) }}">Modifica</a>
                            </td>
                            <td>
                                <form action="{{ route('doctors.destroy',compact('doctor')) }}" method="POST">
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
