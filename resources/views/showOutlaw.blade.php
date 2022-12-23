@extends('layouts.app')

@section('content')

    <div class="text-center">
        <img class="img-thumbnail" src="{{ $outlaw->img}}" alt="">
        <div>
            <h2>{{ $outlaw->name }}</h2>
            <h2>{{ $outlaw->alias }}</h2>
            <h2>{{ $outlaw->crime }}</h2>
            <h2>{{ $outlaw->hint }}</h2>
            <h2>{{ $outlaw->reward }}</h2>
            <h2>{{ $outlaw->description }}</h2>
            <h2>{{ $outlaw->gang }}</h2>
            <h2>{{ $outlaw->img }}</h2>
            <h2>{{ $outlaw->deadline }}</h2>
        </div>
        <div class="float-right">
            <a class="btn btn-primary" href="{{ route('home') }}"> ↩ </a>
        </div>
    </div>

@endsection