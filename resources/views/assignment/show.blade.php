@extends('layouts.app')
@section('content')
<div class="container">
    <h2>Assignment Detail</h2>
    <div class="container border p-4">
        @if ($message = Session::get('success'))
            <div class="alert alert-success" style="height:50px">
                <p>{{ $message }}</p>
            </div>
        @endif
        <p class="h5 font-weight-normal">Due date: {{ $assignment->due_date }} at {{ $assignment->due_time }} </p><br>
        <h4 class="text-uppercase">{{ $assignment->name }}</h4>
        <h5 class="font-weight-normal">{{ $assignment->course }}</h5><br>
        <p>{{ $assignment->description }}</p>
        @if($assignment->submit_location != NULL)
            @if(str_contains($assignment->submit_location, 'www.') OR str_contains($assignment->submit_location, 'http'))
                <p style="font-size:18px"><b>Submit Location: </b> <a href="{{ $assignment->submit_location }}">{{ $assignment->submit_location }}</a></p>
            @else
                <p style="font-size:18px"><b>Submit Location: </b> {{ $assignment->submit_location }}</p>
            @endif
        @endif
        <!-- there's icon picture based on it's difficulties -->
        <img src="{{ asset('assets/assets/img/level/' . $assignment->level . '.png') }}" width=100px alt="{{ $assignment->level }}" style="margin-bottom:20px">
        <p class="h5 mt-4">Time Remaining: {{ floor($timeRemaining / 1440) }} day(s) {{ floor(($timeRemaining - (floor($timeRemaining / 1440) * 1440)) / 60) }} hour(s) {{ $timeRemaining - floor(floor(($timeRemaining - (floor($timeRemaining / 1440) * 1440)) / 60) * 60)}} minute(s)</p><br>            
        <div class="d-inline">
            <form action="{{ route('assignment.destroy', $assignment->id) }}" method="POST">
                @csrf
                @method('DELETE')                            
                <a href="{{ route('assignment.edit', $assignment->id) }}"><button type="button" class="btn btn-info" style="width:100px">Edit</button></a>
                <a href="{{ route('assignment.destroy', $assignment->id) }}"><button type="submit" class="btn btn-danger" style="width:100px" onclick="return confirm('Are you sure to delete this assignment?')">Delete</button></a>
            </form>
        </div>        
        <br>
    </div>
</div>
@endsection