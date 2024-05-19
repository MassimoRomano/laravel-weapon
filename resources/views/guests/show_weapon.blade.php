@extends('layouts.app')


@section('content')
    <div class="container my-5">
        <div class="row">
            <div class="col-4 my-3">
                <div class="card">
                    <div class="card-body">
                        <h2 class="card-title text-center mb-4">{{$weapon->name}}</h2>
                        <h5 class="card-text"><strong>Category:</strong> {{$weapon->category}}</h5>
                        <h5 class="card-text"><strong>Weight:</strong> {{$weapon->weight}}</h5>
                        <h5 class="card-text"><strong>Cost:</strong> {{$weapon->cost}}</h5>
                        <h5 class="card-text"><strong>Damage:</strong> {{$weapon->damage_dice}}</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
