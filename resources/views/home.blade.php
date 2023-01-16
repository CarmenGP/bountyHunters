@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div id="carouselExampleControlsNoTouching" class="carousel slide" data-bs-touch="false">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                    <img src="https://img.freepik.com/vector-gratis/cartel-vintage-deseado_225004-1070.jpg?w=360" class="d-block w-100" alt="Most Wanted Outlaw photo" width="580px" height="350px">
                    </div>
                    <div class="carousel-item">
                    <img src="https://img.freepik.com/vector-gratis/cartel-vintage-deseado_225004-1070.jpg?w=360" class="d-block w-100" alt="Most Wanted Outlaw photo" width="580px" height="350px">
                    </div>
                    <div class="carousel-item">
                    <img src="https://img.freepik.com/vector-gratis/vintage-queria-cartel-salvaje-oeste_225004-79.jpg" class="d-block w-100" alt="Most Wanted Outlaw photo" width="580px" height="350px">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </div>
    <div class="createButton">
        @if(Auth::check() && Auth::user()->isAdmin)
        <button>
            <a href="{{ route('createOutlaw') }}">        
                🛞Create New Manhunt Quest🛞
            </a>               
        </button>
        @endif
    </div>

    <div class="containerCard">
    @foreach ($outlaws as $outlaw)
    
        <div class="outlawCard">
            <a  href="{{ route('showOutlaw', ['id' => $outlaw->id]) }}">
            <h2 class="wanted"><b>WANTED</b></h2>
            <h4 class="alias"><b>{{ $outlaw->alias }}</b></h4>
            <img src="{{ $outlaw->img }}" class="img-fluid rounded-start" style="width: 60%; height: 30%" alt="photo {{ $outlaw->name }}"> 
            <h5 class="reward" ><b>Reward ${{ $outlaw->reward }}</b></h5>
            </a>
        
    
        <form class="deleteModify" action="{{ route('deleteOutlaw', ['id' => $outlaw->id]) }}" method="post">
            @method('delete')
            @csrf
            @if(Auth::check() && Auth::user()->isAdmin)
            <button class="buttonDelete" type="submit"  onclick="return confirm('Are you sure you wish to delete this hunt request? {{ $outlaw->name }} - ID {{ $outlaw->id }} ')">
                <a>🌵 delete</a>
            </button>
            @endif
            @if(Auth::check() && Auth::user()->isAdmin)
            <button>
                <a  class="buttonModify" href="{{ route('editOutlaw', ['id' => $outlaw->id]) }}"><img src="https://img.freepik.com/iconos-gratis/herradura_318-916026.jpg?t=st=1673278604~exp=1673279204~hmac=5330c070d21109f0999201c5864e60bf05a67a985e10fa058069cac163ea0dc5" width="9px" height="9px"> modify </a>
            </button>
            @endif
        </form>   
        </div>                        
    @endforeach
    </div>


@endsection
