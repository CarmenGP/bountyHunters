@extends('layouts.app')

@section('content')
<div class="sheriffOffice">
    <div class="containerCarrousel">
            <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner vipClass">
            @foreach ($sliders as $key => $outlaw)
                            <div class="carrouselVip carousel-item {{ $key == 0 ? 'active' : ''}}">
                @if ($outlaw->img)
                                    <h4 class="alias"><b>{{ ("$outlaw->alias") }}</b></h4>
                                    <img src='{{ asset("$outlaw->img") }}' class="d-block w-100 imgCarousel" alt="Most Wanted Outlaw Photo">
                                    <h5 class="reward"><b>Reward ${{ ("$outlaw->reward") }}</b></h5>
                            </div>
                @endif

                            <div class="carousel-caption d-none d-md-block">
                            
                            <div>
                </div>
            </div>

            @endforeach
      
    </div>

</div>
    <div class="createButton">
        @if(Auth::check() && Auth::user()->isAdmin)
        <button>
            <a class="createButtonAnchor" href="{{ route('createOutlaw') }}">
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
    <div>
        {!! $outlaws->links()!!}
    </div>

@endsection
