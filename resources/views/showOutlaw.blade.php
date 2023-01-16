@extends('layouts.app')

@section('content')
    <section>
        <div class="text-center">
            <div>
                <h2>{{ $outlaw->name }}</h2>
                <h3> alias {{ $outlaw->alias }}</h3>
                <img class="img-thumbnail" src="{{ $outlaw->img}}" alt="{{ $outlaw->name }}">
                <h3>{{ $outlaw->crime }}</h3>
                <h4>hint {{ $outlaw->hint }}</h4>
                <h3>$ {{ $outlaw->reward }}</h3>
                <p>{{ $outlaw->description }}</p>
                <h5>gang {{ $outlaw->gang }}</h5>
                <h4>{{ $outlaw->deadline }}</h4>
            </div>
            <div>
                <button>
                    <a href="{{ route('join', $outlaw->id)}}">💰 Join</a>
                </button>
                <button>
                    <a href="{{ route('leave', $outlaw->id)}}">🧨 Leave</a>
                </button>
            </div>
            <div class="float-right">
                <a class="btn btn-primary" href="{{ route('home') }}"> ↩ </a>
            </div>
        </div>

            
    </section>

@endsection