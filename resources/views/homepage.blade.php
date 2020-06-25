@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{-- Questo mi obbliga a mettere il middleware --}}
                    <p class="">Hello {{ Auth::user()->name }}, you are logged in!</p>

                    <a class="btn btn-primary float-right" href="{{ route('reservations.create') }}">Prenota</a>
                    <a class="btn btn-secondary float-left" href="{{ route('reservations.index') }}">Lista Prenotazioni</a>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
