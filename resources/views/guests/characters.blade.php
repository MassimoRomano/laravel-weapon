@extends('layouts.app')


@section('content')
    <div class="container">
        <div class="row">
            {{-- @dd($weapons) --}}
            @foreach ($characters as $character)  
                <div class="col-4 my-3">
                    <div class="card">
                        <div class="card-body">
                            <h2 class="card-title">{{$character->name}}</h2>
                            <h5 class="card-text">{{$character->description}}</h5>
                            <h5 class="card-text">{{$character->attack}}</h5>
                            <h5 class="card-text">{{$character->defense}}</h5>                       
                            <h5 class="card-text">{{$character->speed}}</h5>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection

