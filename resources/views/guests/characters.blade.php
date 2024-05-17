@extends('layouts.app')


@section('content')
    <div class="container">
        <div class="row">
            @foreach ($characters as $character)
                <div class="col-4 my-3">
                    <div class="card">
                        <div class="card-body">
                            <h2 class="card-title">Nome: {{ $character->name }}</h2>
                            <h5 class="card-text">Descrizione: {{ $character->description }}</h5>
                            <h5 class="card-text">Atk:{{ $character->attack }}</h5>
                            <h5 class="card-text">Df: {{ $character->defense }}</h5>
                            <h5 class="card-text">Sp: {{ $character->speed }}</h5>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
