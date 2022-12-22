@extends('layouts.app')

@section('content')
    <div>
        <button class="btn btn-warning">
            <a href="{{ route('createOutlaw') }}">        
                <div class="text-black"> Create New Manhunt Quest</div>
            </a>               
        </button>
    </div>
    @foreach ($outlaws as $outlaw)
        <div class="card mb-3" style="max-width: 540px;">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="{{ $outlaw->img }}" class="img-fluid rounded-start" style="width: auto; height: 100%" alt="photo">
                </div>
                <div class="col-md-8">
                    <div class="card-body bg-dark">
                        <h2 class="card-title text-warning">${{ $outlaw->reward }}</h2>
                        <h3 class="card-title text-primary">{{ $outlaw->name }}</h3>
                        <h4 class="card-title text-danger">{{ $outlaw->alias }}</h4>
                        <p class="card-text text-white">{{ $outlaw->description }}</p>
                        <p class="card-text text-white">gang number {{ $outlaw->gang }}</p>
                        <p class="card-text text-white"><small class="text-muted">{{ $outlaw->deadline }}</small></p>
                        <form action="{{ route('deleteOutlaw', ['id' => $outlaw->id]) }}" method="post">
                            @method('delete')
                            @csrf
                            <button type="submit"
                                class="bt-adm m-1 d-flex justify-content-center align-item-center"
                                onclick="return confirm('Are you sure you wish to delete this hunt request? {{ $outlaw->name }} - ID {{ $outlaw->id }} ')">
                                🏜
                            </button>
                        </form>
                    </div>                
                </div>
            </div>
        </div>
    @endforeach

@endsection
