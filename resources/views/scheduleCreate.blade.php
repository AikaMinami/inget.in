@extends('layout')

@section('content')
<div class="container">
    <h2>Schedule</h2>
    <div class="container border">
        <form method="POST" action="{{ route('schedule.store') }}">
            @csrf
            <input type="text" id="schd-name" name="name" placeholder="Course" style="outline: 0; border-width: 0 0 2px; border-color: gray; width:100%; margin:15px 0 15px 0" required>
            <input type="text" id="schd-course" name="course" placeholder="Teacher Name" style="outline: 0; border-width: 0 0 2px; border-color: gray; width:100%; margin:15px 0 15px 0" required>
            <input type="text" id="schd-submit-location" name="submit_location" placeholder="Classroom" style="outline: 0; border-width: 0 0 2px; border-color: gray; width:100%; margin:15px 0 15px 0">
            <input type="text" id="schd-location" name="location" placeholder="Location" style="outline: 0; border-width: 0 0 2px; border-color: gray; width:100%; margin:15px 0 15px 0">
            <input type="text" id="schd-contact" name="contact" placeholder="Contact" style="outline: 0; border-width: 0 0 2px; border-color: gray; width:100%; margin:15px 0 15px 0">          
            <label for="schd-diff" class="col-form-label">Day</label>
            <select name="day" id="schd-day" class="form-control" required>
                <option value="Monday">Monday</option>
                <option value="Tuesday">Tuesday</option>
                <option value="Wednesday">Wednesday</option>
                <option value="Thursday">Thursday</option>
                <option value="Friday">Friday</option>
                <option value="Saturday">Saturday</option>
            </select><br>
            
            <div class="row align-items-center" style="margin:0 0 10px 10px " >
                <label for="schd-hour-start" class="col-form-label">Start</label>
                <input type="time" id="schd-hour-start" name="start_time" style="margin-right:100px" required>
                <label for="schd-hour-end" class="col-form-label">End</label>
                <input type="time" id="schd-hour-end" name="end_time" required><br>
            </div>
            <p></p>
            <!-- Bug in save button -->
                <button type="submit" class="btn btn-primary btn-lg float-right" >Save</button><br> 
        </form>
    </div>
</div>
@endsection