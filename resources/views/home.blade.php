@extends('layouts.app')

@section('content')

    @foreach ($outlaws as $outlaw)
        <div>{{ $outlaw->name }} / {{ $outlaw->alias }} / {{ $outlaw->crime }} / {{ $outlaw->hint }} / {{ $outlaw->reward }} / {{ $outlaw->description }} / {{ $outlaw->deadline }} / {{ $outlaw->gang }} / {{ $outlaw->img }}</div>

        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
        <img src="./public/img/Jm.jpg" class="d-block w-100" alt="photo JM">
    </div>
    <div class="carousel-item">
        <img src="public\img\Celia M.jpg" class="d-block w-100" alt="photo Celia">
    </div>
    <div class="carousel-item">
        <img src="..\public\img\Celia M.jpg" class="d-block w-100" alt="...">
    </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
    </div>

    @endforeach

@endsection
