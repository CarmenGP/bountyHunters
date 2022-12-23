@extends('layouts.app')

@section('content')

    <div class="containerCreate">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <h2 class="cardTitle"> Edit Manhunt Quest</h2>
                        <form class="row g-3" action="{{ route('updateOutlaw', $outlaw->id)}}" method="POST">
                            @method('PATCH')
                            @csrf
                                <div class="col-md-12">
                                    <label for="inputName" class="form-label">Name</label>
                                    <input type="text" name="name" class="form-control" id="inputName" value="{{$outlaw->name}}">
                                </div>
                                <div class="col-md-12">
                                    <label for="inputAlias" class="form-label">Alias</label>
                                    <input type="text" name="alias" class="form-control" id="inputAlias" value="{{$outlaw->alias}}">
                                </div>
                                <div class="col-12">
                                    <label for="inputCrime" class="form-label">Crime</label>
                                    <input type="text" name="crime" class="form-control" id="inputCrime" value="{{$outlaw->crime}}">
                                </div>
                                <div class="col-12">
                                    <label for="inputHint" class="form-label">Hint</label>
                                    <input type="text" name="hint" class="form-control" id="inputHint" value="{{$outlaw->hint}}">
                                </div>
                                <div class="col-md-12">
                                    <label for="inputDescription" class="form-label">Description</label>
                                    <textarea type="text-area" name="description" class="form-control" id="inputDescription">{{$outlaw->description}}</textarea>
                                </div>
                                <div class="col-md-4">
                                    <label for="inputReward" class="form-label">Reward</label>
                                    <input type="text" name="reward" class="form-control" id="inputReward" value="{{$outlaw->reward}}">
                                </div>                            
                                <div class="col-md-4">
                                    <label for="inputGang" class="form-label">Gang</label>
                                    <input type="text" name="gang" class="form-control" id="inputGang" value="{{$outlaw->gang}}">
                                </div>
                                <div class="col-4">
                                    <label for="inputDeadline" class="form-label">Deadline</label>
                                    <input type="text" name="deadline" class="form-control" id="inputDeadline" value="{{$outlaw->deadline}}">
                                </div>
                                <div class="col-12">
                                    <label for="inputImg" class="form-label">Portrait</label>
                                    <input type="text" name="img" class="form-control" id="inputImg" value="{{$outlaw->img}}">
                                </div>
                            
                                </div>
                                <div class="float-right">
                                    <a class="btn btn-primary" href="{{ route('home') }}"> ↩ </a>
                                </div>
                                <div class="btnCreate">
                                    <button type="submit">Save</button>
                                </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection

