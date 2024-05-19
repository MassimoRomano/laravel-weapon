@extends('layouts.app')


@section('content')
    <div class="container my-5">
        <div class="row">
            @foreach ($characters as $character)  
                <div class="col-4 my-3">
                    <div class="card">
                        <div class="card-body">
                            <h2 class="card-title mb-3">Nome: {{$character->name}}</h2>
                            <h5 class="card-text"><strong>Descrizione:</strong> {{$character->description}}</h5>
                            <h5 class="card-text"><strong>Atk:</strong> {{$character->attack}}</h5>
                            <h5 class="card-text"><strong>Df:</strong> {{$character->defense}}</h5>                       
                            <h5 class="card-text"><strong>Sp:</strong> {{$character->speed}}</h5>
                            <a class="btn btn-primary my-3" href="{{ route('guests.show_character', $character) }}">Show</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection

