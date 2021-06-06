@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Assignment</h2>
    <div class="container border">
        <h4>Due Date</h4>
        <form method="POST" action="{{ route('assignment.store') }}" style="margin-bottom:40px">
            @csrf
            @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="row align-items-center" >
                <input type="date" id="asgn-date" name="due_date" required>
                <p>at</p>
                <input type="time" id="asgn-hour" name="due_time" required><br>
            </div>
            <input type="text" id="asgn-name" name="name" placeholder="Assignment Name" style="outline: 0; border-width: 0 0 2px; border-color: gray; width:100%; margin:15px 0 15px 0" required>
            <input type="text" id="asgn-course" name="course" placeholder="Course" style="outline: 0; border-width: 0 0 2px; border-color: gray; width:100%; margin:15px 0 15px 0" required>
            <input type="text" id="asgn-submit-location" name="submit_location" placeholder="Submit Location" style="outline: 0; border-width: 0 0 2px; border-color: gray; width:100%; margin:15px 0 15px 0">
            <textarea name="description" id="asgn-desc" cols="30" rows="5" placeholder="Description" style="outline: 0; border-width: 0 0 2px; border-color: gray; width:100%; margin:15px 0 15px 0"></textarea>            
            <label for="asgn-diff" class="col-form-label">Difficulty</label>
            <select name="level" id="asgn-diff" class="form-control" required>
                <option value="Very Easy">Very Easy</option>
                <option value="Easy">Easy</option>
                <option value="Medium">Medium</option>
                <option value="Hard">Hard</option>
                <option value="Very Hard">Very Hard</option>
            </select>
            <label for="asgn-est" class="col-form-label" style="margin:15px 10px 15px 0">Estimation</label>
            <input type="number" id="asgn-est" name="estimation" style="margin:15px 10px 15px 0" required>
            <span> hour(s)</span>
            <p></p>
            <!-- Bug in save button -->
                <button type="submit" class="btn btn-primary btn-lg float-right" style="">Save</button><br> 
        </form>
    </div>
</div>
@endsection