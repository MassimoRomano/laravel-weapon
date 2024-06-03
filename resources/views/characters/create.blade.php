@extends('layouts.app')

@section('content')
<div class="container py-5">
    <h1>Add new Character</h1>

    @include('partials.validate-errors')

    <form action="{{ route('characters.create') }}" method="post">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Name</label>
            <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name" aria-describedby="titleHelper"
                placeholder="New Character" value="{{old('name')}}" required />
            <small id="titleHelper" class="form-text text-muted">Type a name</small>

            @error('name')
                <div class="text-damange">{{$message}}</div>                
            @enderror
        </div>

        <div class="mb-3">
            <label for="thumb" class="form-label">Attack</label>
            <input type="text" class="form-control @error('attack') is-invalid @enderror"" name="attack" id="attack" aria-describedby="thumbHelper"
                placeholder="Number 1 to 100" value="{{old('attack')}}"/>
            <small id="thumbHelper" class="form-text text-muted">Type a number for attack</small>

            @error('attack')
                <div class="text-damange">{{$message}}</div>                
            @enderror
        </div>

        <div class="mb-3">
            <label for="thumb" class="form-label">Defense</label>
            <input type="text" class="form-control @error('defense') is-invalid @enderror"" name="defense" id="defense" aria-describedby="thumbHelper"
                placeholder="Number 1 to 100" value="{{old('defense')}}"/>
            <small id="thumbHelper" class="form-text text-muted">Type a number for defense</small>

            @error('attack')
                <div class="text-damange">{{$message}}</div>                
            @enderror
        </div>

        <div class="mb-3">
            <label for="thumb" class="form-label">Speed</label>
            <input type="text" class="form-control @error('speed') is-invalid @enderror"" name="speed" id="speed" aria-describedby="thumbHelper"
                placeholder="Number 1 to 100" value="{{old('speed')}}"/>
            <small id="thumbHelper" class="form-text text-muted">Type a number for defense</small>

            @error('speed')
                <div class="text-damange">{{$message}}</div>                
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">
            Create
        </button>


    </form>
</div>
    
@endsection