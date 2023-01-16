@extends('layouts.app')

@section('content')
    <div class="containerCreate">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <h2 class="cardTitle"> Create New Manhunt Quest</h2>
                        <form class="row g-3" action="{{ route('storeOutlaw') }}" method="post">
                            @csrf
                            <div class="col-md-12">
                                <label for="inputName" class="form-label">Name</label>
                                <input type="text" name="name" class="form-control" id="inputName" placeholder= "Write the name of the Outlaw" required>
                            </div>
                            <div class="col-md-12">
                                <label for="inputAlias" class="form-label">Alias</label>
                                <input type="text" name="alias" class="form-control" id="inputAlias" placeholder= "Write the alias of the Outlaw" required>
                            </div>
                            <div class="col-12">
                                <label for="inputCrime" class="form-label">Crime</label>
                                <input type="text" name="crime" class="form-control" id="inputCrime" placeholder="Write the crime commited" required>
                            </div>
                            <div class="col-12">
                                <label for="inputHint" class="form-label">Hint</label>
                                <input type="text" name="hint" class="form-control" id="inputHint" placeholder="Write the hint related to the outlaw" required>
                            </div>
                            <div class="col-md-12">
                                <label for="inputDescription" class="form-label">Description</label>
                                <textarea type="text-area" name="description" class="form-control" id="inputDescription" placeholder= "Write the description of the Outlaw" required></textarea>
                            </div>  
                            <div class="col-md-4">
                                <label for="inputReward" class="form-label">Reward $</label>
                                <input type="number" name="reward" class="form-control" id="inputReward" placeholder= "Write the reward for the Outlaw" required>
                            </div>
                            <div class="col-md-4">
                                <label for="inputGang" class="form-label">Gang</label>
                                <input type="number" max="10" name="gang" class="form-control" id="inputGang" placeholder= "Write the number of the people" required>
                            </div>
                            <div class="col-md-4">
                                <label for="inputDeadline" class="form-label">Deadline</label>
                                <input type="datetime-local" name="deadline" class="form-control" id="inputDeadline" placeholder= "Write the deadline of the Outlaw" required>
                            </div>                                             
                            <div class="col-12">
                                <label for="inputImg" class="form-label">Portrait</label>
                                <input type="url" name="img" class="form-control" id="inputImg" placeholder= "Write the url address of the image" required>
                            </div>
                            
                            </div>
                            <div class="float-right">
                                <a class="btn btn-primary" href="{{ route('home') }}"> ↩ </a>
                            </div>                            
                            <div class="btnCreate">
                                <button type="submit" value="Create">Create Manhunt Quest</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection

