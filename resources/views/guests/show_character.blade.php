@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-4 my-3">
                <div class="card">
                    <div class="card-body">
                        <h2 class="card-title mb-4">Nome: {{ $character->name }}</h2>
                        <h5 class="card-text"><strong>Descrizione:</strong> {{ $character->description }}</h5>
                        <h5 class="card-text"><strong>Atk:</strong>{{ $character->attack }}</h5>
                        <h5 class="card-text"><strong>Df:</strong> {{ $character->defense }}</h5>
                        <h5 class="card-text"><strong>Spe:</strong> {{ $character->speed }}</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
