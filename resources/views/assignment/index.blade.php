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
        <div class="d-flex align-items-end flex-column mb-3">
            <form action="{{ route('assignment.index') }}" class="form-inline align-items-end" method="GET">
                <p>Sort by:</p>
                <select class="custom-select ml-3" name="sortBy">                
                    <option value="due_date" {{ $sortBy == 'due_date' ? 'selected' : '' }}>Due Date</option>
                    <option value="course" {{ $sortBy == 'course' ? 'selected' : '' }}>Course</option>
                    <option value="level" {{ $sortBy == 'level' ? 'selected' : '' }}>Level</option>
                    <option value="priority" {{ $sortBy == 'priority' ? 'selected' : '' }}>Priority</option>
                </select>
                <button type="submit" class="btn btn-primary ml-3">Submit</button>
            </form>
        </div>        
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
                        <a href="{{ route('assignment.show', $assignment->id) }}" class="btn btn-primary mt-auto">Details > </a>
                    </div>
                </div>
            </div>
            @endforeach            
        </div>
    </div>
</div>
@endsection
