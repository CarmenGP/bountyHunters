@extends('layouts.app')

@section('content')

    <div class="containerCreate">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="cardForm">
                    <div class="cardForm">
                        <h2 class="formTitle"> Edit Manhunt</h2>
                        <form class="row g-3" action="{{ route('updateOutlaw', $outlaw->id)}}" method="POST">
                            @method('PATCH')
                            @csrf
                                <div class="col-md-12">
                                    <label for="inputName" class="form-label">Name</label>
                                    <input type="text" name="name" class="form-control" id="inputName" value="{{$outlaw->name}}" required>
                                </div>
                                <div class="col-md-12">
                                    <label for="inputAlias" class="form-label">Alias</label>
                                    <input type="text" name="alias" class="form-control" id="inputAlias" value="{{$outlaw->alias}}" required>
                                </div>
                                <div class="col-md-12">
                                    <label for="inputCrime" class="form-label">Crime</label>
                                    <input type="text" name="crime" class="form-control" id="inputCrime" value="{{$outlaw->crime}}" required>
                                </div>
                                <div class="col-md-12">
                                    <label for="inputHint" class="form-label">Hint</label>
                                    <input type="text" name="hint" class="form-control" id="inputHint" value="{{$outlaw->hint}}" required>
                                </div>
                                <div class="col-md-12">
                                    <label for="inputDescription" class="form-label">Description</label>
                                    <textarea type="text-area" name="description" class="form-control" id="inputDescription" required>{{$outlaw->description}}</textarea>
                                </div>
                                <div class="col-md-4">
                                    <label for="inputReward" class="form-label">Reward</label>
                                    <input type="text" name="reward" class="form-control" id="inputReward" value="{{$outlaw->reward}}" required>
                                </div>                            
                                <div class="col-md-4">
                                    <label for="inputGang" class="form-label">Gang</label>
                                    <input type="text" name="gang" class="form-control" id="inputGang" value="{{$outlaw->gang}}" required>
                                </div>
                                <div class="col-md-4">
                                    <label for="inputDeadline" class="form-label">Deadline</label>
                                    <input type="datetime" name="deadline" class="form-control" id="inputDeadline" value="{{$outlaw->deadline}}" required>
                                </div>

                                <div class="col-12">
                                    <label for="inputImg" class="form-label">Portrait</label>
                                    <input type="url" name="img" class="form-control" id="inputImg" value="{{$outlaw->img}}" required>
                                </div>
                            
                                </div>
                                <div class="buttonContainer">
                                    <button class="returnButton">
                                        <img src="http://drive.google.com/uc?export=view&id=1fOtVXPjTIsjWzk__c-DOFTG9-ntu1wpm" class="returnButtonIcon"><a class="returnButton"  href="{{ route('home') }}">Return</a>
                                    </button>                                
                                    <button type="submit" class="saveButtonForm">
                                        <img src="http://drive.google.com/uc?export=view&id=1mK3Iqj-C1IwD_JCGlp-42hrMYXj9r0iy" class="saveButtonIcon">Save</button>
                                </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection

