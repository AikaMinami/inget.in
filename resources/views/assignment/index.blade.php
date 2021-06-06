@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <a class="btn btn-primary btn-md text-uppercase js-scroll-trigger font-weight-bolder" href="{{ route('assignment.create') }}" style="color:black; font-family:Montserrat;">Create</a>
    </div>
    <h2>Assignment</h2>
    <div class="container">
        @if ($message = Session::get('success'))
            <div class="alert alert-success" style="height:50px">
                <p>{{ $message }}</p>
            </div>
        @endif        
        <div class="row">
            @foreach($assignments as $assignment)
            <div class="col-sm-4 p-2">
                <div class="card">                                        
                    <div class="card-body d-flex flex-column text-center">                        
                        <input data-toggle="tooltip" title="Mark as done" class="mb-3" type="checkbox" id="checkboxNoLabel" value="DONE" style="width:20px; height:20px;">
                        <h6 class="card-text text-left">Due Date: {{ $assignment->due_date }} at {{ $assignment->due_time }}</h6>
                        <h5 class="card-title mt-2 text-uppercase">{{ $assignment->name }}</h5>
                        <p class="card-text">{{ $assignment->course }}</p>
                        <img src="{{ asset('assets/assets/img/level/' . $assignment->level . '.png') }}" width=100px alt="{{ $assignment->level }}" style="margin-bottom:20px">
                        <p class="card-text text-left" style="font-size:10pt">Time Remaining: {{ $assignment->time_remaining }}</p>
                        <a href="{{ route('assignment.show', $assignment->id) }}" class="btn btn-primary mt-auto">Details > </a>
                    </div>
                </div>
            </div>
            @endforeach            
        </div>
    </div>
</div>
@endsection
