layouts

@extends('layouts.app')

@section('content')
    <h2>You are in</h2>
@foreach($outlaw as $outlaws)
        <div>
            <h2 class="wantedShow"><b>WANTED</b></h2>            
            <div class="bullet">
                <img  src="{{ $outlaw->img}}" style="width: 20%; height: 30%;" alt="{{ $outlaw->name }}">
                <div class="information">
                    <h3> Alias: {{ $outlaw->alias }}</h3>                
<!--                     <h3>{{ $outlaw->name }}</h3> 
                    <h5>Hint: {{ $outlaw->hint }}</h5>
                    <h4>${{ $outlaw->reward }}</h4>
                    <h6> {{ $outlaw->deadline }}</h6>
                    <p>{{ $outlaw->description }}</p>-->
                </div> 
            </div>
@endforeach

@endsection