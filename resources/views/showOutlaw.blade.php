@extends('layouts.app')

@section('content')
<section>
    <div class="containerCard">
        <div class="outlawCardshow">
            <h2 class="wantedShow"><b>WANTED</b></h2> 
            <h3 class="aliasShow"> Alias: {{ $outlaw->alias }}</h3>                
            <h3 class="name">{{ $outlaw->name }}</h3>            
            <div class="bullet">
                <img  src="{{ $outlaw->img}}" style="width: 40%; height: 30%;" alt="{{ $outlaw->name }}">
                <div class="information">
                    <h5 class="crime">Crime: {{ $outlaw->crime }}</h5>
                    <h5 >Hint: {{ $outlaw->hint }}</h5>
                    <h4>${{ $outlaw->reward }}</h4>
                    <h6> Gang: {{ $outlaw->gang }}</h6>
                    <h6> {{ $outlaw->deadline }}</h6>
                </div>
            </div>
                <p class="description">{{ $outlaw->description }}</p>
        </div>            
        <div class="showButtons">
            <button>
                <a class="join" href="{{ route('join', $outlaw->id)}}">💰 Join</a>
            </button>
            <button>
                <a class="leave" href="{{ route('leave', $outlaw->id)}}">🧨 Leave</a>
            </button>    
            <div class="return">
                <a class="" href="{{ route('home') }}"> ↩ </a>
            </div>
        </div>
    </div>
        

            
    </section>



@endsection