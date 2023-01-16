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
                Create New Manhunt Quest
            </a>               
        </button>
        @endif
    </div>
    @foreach ($outlaws as $outlaw)
    
        <div class="card mb-3" style="max-width: 540px;">
        <a class="bt-adm m-1 " href="{{ route('showOutlaw', ['id' => $outlaw->id]) }}">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="{{ $outlaw->img }}" class="img-fluid rounded-start" style="width: auto; height: 100%" alt="photo {{ $outlaw->name }}">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h2 class="card-title">Reward ${{ $outlaw->reward }}</h2>
                        <h3 class="card-title">{{ $outlaw->name }}</h3>
                        <h4 class="card-title">{{ $outlaw->alias }}</h4>
                        <!-- <p class="card-text text-white">{{ $outlaw->description }}</p> -->
                        <p class="card-text text-brown">Gang number: {{ $outlaw->gang }}</p>
                        <p class="card-text"><small >{{ $outlaw->deadline }}</small></p>
                        <form action="{{ route('deleteOutlaw', ['id' => $outlaw->id]) }}" method="post">
                            @method('delete')
                            @csrf
                            @if(Auth::check() && Auth::user()->isAdmin)
                            <button type="submit"
                                class="bt-adm m-1 d-flex justify-content-center align-item-center"
                                onclick="return confirm('Are you sure you wish to delete this hunt request? {{ $outlaw->name }} - ID {{ $outlaw->id }} ')">
                                 🌵 delete manhunt
                            </button>
                            @endif
                            @if(Auth::check() && Auth::user()->isAdmin)
                            <button class="bt-adm m-1 d-flex justify-content-center align-item-center">
                                <a  href="{{ route('editOutlaw', ['id' => $outlaw->id]) }}"><img src="https://img.freepik.com/iconos-gratis/herradura_318-916026.jpg?t=st=1673278604~exp=1673279204~hmac=5330c070d21109f0999201c5864e60bf05a67a985e10fa058069cac163ea0dc5" width="5%" height="5%"> modify manhunt</a>
                            </button>
                            @endif
                        </form>
                    </div>                               
                </div>
            </a>

            <div>
                <button>
                    <a href="{{ route('join', $outlaw->id)}}">💰 Join</a>
                </button>
                <button>
                    <a href="{{ route('leave', $outlaw->id)}}">🧨 Leave</a>
                </button>
            </div>
        </div>       
    @endforeach
    </div>
    <div>
        {!! $outlaws->links()!!}
    </div>
    
@endsection
