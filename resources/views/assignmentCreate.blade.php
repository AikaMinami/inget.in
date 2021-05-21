@extends('layout')

@section('content')
<div class="container">
    <h2>Assignment</h2>
    <div class="container border">
        <h4>Due Date</h4>
        <form action="">
            <div class="row align-items-center" >
                <input type="date" id="asgn-date" name="assignment-date">
                <p>at</p>
                <input type="time" id="asgn-hour" name="assignment-hour"><br>
            </div>
            <input type="text" id="asgn-name" name="assignment-name" placeholder="Name" style="outline: 0; border-width: 0 0 2px; border-color: gray; width:100%; margin:15px 0 15px 0">
            <input type="text" id="asgn-course" name="assignment-course" placeholder="Course" style="outline: 0; border-width: 0 0 2px; border-color: gray; width:100%; margin:15px 0 15px 0">
            <input type="text" id="asgn-desc" name="assignment-description" placeholder="Description" style="outline: 0; border-width: 0 0 2px; border-color: gray; width:100%; margin:15px 0 15px 0">
            <label for="asgn-diff" class="col-form-label">Difficulty</label>
            <select name="assignment-difficulty" id="asgn-diff" class="form-control">
                <option value="1">Very Easy</option>
                <option value="2">Medium</option>
                <option value="3">Hard</option>
                <option value="4">Very Hard</option>
            </select>
            <label for="asgn-est" class="col-form-label" style="margin:15px 10px 15px 0">Estimation</label>
            <input type="number" id="asgn-est" name="assignment-estimation" style="margin:15px 10px 15px 0">
            <span> hour(s)</span>
            <p></p>
            <!-- Bug in save button -->
                <button type="submit" class="btn btn-primary btn-lg float-right" style="">Save</button><br> 
        </form>
    </div>
</div>
@endsection