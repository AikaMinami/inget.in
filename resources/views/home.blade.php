@extends('layout')

@section('content')
<div class="container"><br><br>
    <h1>Welcome, {{ $user->name }}! </h1> <br>

    <h2>Today's Schedule</h2>
    <div class="container">
        <div class="row" style="margin-bottom:3rem">
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-text">07:00-09:00</h6>
                        <h5 class="card-title">SMBD</h5>
                        <p class="card-text">LIG 2 <br> <a href="#">Class Link</a> <br> Mr. Watanabe Haruto <br> contact </p>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-text">11:30-12:45</h6>
                        <h5 class="card-title">Advanced Website Programming</h5>
                        <p class="card-text">LKJ 2 <br> <a href="#">Class Link</a> <br> Ms. Humairah <br> contact </p>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-text">15:30-17:45</h6>
                        <h5 class="card-title">Project 1</h5>
                        <p class="card-text">LIG 1 <br> <a href="#">Class Link</a> <br> Mr. Yoga <br> contact </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <h2>Due Date in 3 Days</h2>
    <div>
    <div class="container">
        <div class="sorting-data">            
            <div class="row" style="margin-bottom:3rem">
                @foreach($assignments as $assignment)    
                <div class="col-sm-6">
                    <div class="card">
                        <div class="card-body d-flex flex-column">
                            <p class="card-text">Due Date: {{ $assignment->due_date }} at {{ $assignment->due_time }}</p><br>
                            <div class="justify-content-center align-items-center"> 
                                <h4 class="card-title text-center">{{ $assignment->name }}</h4>
                                <h5 class="card-text text-center">{{ $assignment->course }}</h5>
                            </div>
                            <a href="{{ route('assignment.show', $assignment->id) }}" class="btn btn-primary float-right mt-auto">Details > </a>
                        </div>
                    </div>
                </div>
                @endforeach                
            </div>
        </div>
    </div>
</div>
@endsection
