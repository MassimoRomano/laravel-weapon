@extends('layouts.app')


@section('content')
    <div class="container">
        <div class="row">
            {{-- @dd($weapons) --}}
            @foreach ($weapons as $weapon)  
                <div class="col-4 my-3">
                    <div class="card">
                        <div class="card-body">
                            <h2 class="card-title">{{$weapon->name}}</h2>
                            <h5 class="card-text">{{$weapon->category}}</h5>
                            <h5 class="card-text">{{$weapon->weight}}</h5>
                            <h5 class="card-text">{{$weapon->cost}}</h5>
                            <h5 class="card-text">{{$weapon->damage_dice}}</h5>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection

