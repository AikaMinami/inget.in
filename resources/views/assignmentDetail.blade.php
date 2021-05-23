@extends('layout')
@section('content')
<div class="container">
    <h2>Assignment Detail</h2>
    <div class="container border">
        <p class="h5 font-weight-normal">Due date: {{ $assignment->due_date }} at {{ $assignment->due_time }} </p><br>
        <h4>{{ $assignment->name }}</h4>
        <p class="text-uppercase">{{ $assignment->course }}</p><br>
        <p>{{ $assignment->description }}</p>
        <!-- there's icon picture based on it's difficulties -->
        <img src="{{ asset('assets/assets/img/hard-icon.png') }}" alt="{{ $assignment->level }}" width=90px>
        <p class="h5">Time Remaining: 0 day 0 hour 0 minutes</p><br>
        <div class="row">
            <form action="{{ route('assignment.destroy', $assignment->id) }}" method="POST">
                <a class="btn btn-info" style="margin-left:10px" href="{{ route('assignment.edit', $assignment->id) }}">Edit</a>                
                @csrf
                @method('DELETE')                
                <button type="submit" class="btn btn-danger">Delete</button>                
            </form>                 
        </div>
        <br>
    </div>
</div>
@endsection