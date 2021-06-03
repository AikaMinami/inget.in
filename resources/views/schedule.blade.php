@extends('layout')

@section('content')
<div class="container">
    <div class="row">
        <a class="btn btn-primary btn-md text-uppercase js-scroll-trigger font-weight-bolder" href="{{ route('schedule.create') }}" style="color:black; font-family:Montserrat;">Create</a>
    </div>
    <h2>Schedule</h2>
    <div class="container">
        <div class="row" style="margin-bottom:3rem">
            <!-- Monday -->
            <div class="col-sm-4 container">
                <h3 class="text-center">Monday</h3>
                <div class="card" style="margin-bottom:0.5rem">
                    <div class="card-title">
                        <h6 class="card-text" style="font-size:10pt">07:00 - 09:00</h6>
                    </div>
                    <div class="card-body" >
                        <h4 class="card-title text-center">Course Name</h4>
                        <h5 class="card-text text-center">Class</h5>
                        <p class="card-text">Lecturer Name : Lecturer Contact</p>
                    </div>
                </div>
                <div class="card" style="margin-bottom:0.5rem">
                    <div class="card-title">
                        <h6 class="card-text" style="font-size:10pt">07:00 - 09:00</h6>
                    </div>
                    <div class="card-body" >
                        <h4 class="card-title text-center">Course Name</h4>
                        <h5 class="card-text text-center">Class</h5>
                        <p class="card-text">Lecturer Name : Lecturer Contact</p>
                    </div>
                </div>
            </div>
            <!-- end of Monday -->
            <!-- Tuesday -->
            <div class="col-sm-4 container">
            <h4 class="text-center">Tuesday</h4>
            
            </div>
            <!-- end of Tuesday -->
            <!-- Wednesday -->
            <div class="col-sm-4 container">
            <h4 class="text-center">Wednesday</h4>
                <div class="card" style="margin-bottom:0.5rem">
                    <div class="card-title">
                        <h6 class="card-text" style="font-size:10pt">07:00 - 09:00</h6>
                    </div>
                    <div class="card-body" >
                        <h4 class="card-title text-center">Course Name</h4>
                        <h5 class="card-text text-center">Class</h5>
                        <p class="card-text">Lecturer Name : Lecturer Contact</p>
                    </div>
                </div>
                <div class="card" style="margin-bottom:0.5rem">
                    <div class="card-title">
                        <h6 class="card-text" style="font-size:10pt">07:00 - 09:00</h6>
                    </div>
                    <div class="card-body" >
                        <h4 class="card-title text-center">Course Name</h4>
                        <h5 class="card-text text-center">Class</h5>
                        <p class="card-text">Lecturer Name : Lecturer Contact</p>
                    </div>
                </div>
            </div>
            <!-- end of Wednesday -->
            <!-- Thursday -->
            <div class="col-sm-4 container">
            <h4 class="text-center">Thursday</h4>
            <div class="card" style="margin-bottom:0.5rem">
                    <div class="card-title">
                        <h6 class="card-text" style="font-size:10pt">07:00 - 09:00</h6>
                    </div>
                    <div class="card-body" >
                        <h4 class="card-title text-center">Course Name</h4>
                        <h5 class="card-text text-center">Class</h5>
                        <p class="card-text">Lecturer Name : Lecturer Contact</p>
                    </div>
                </div>
                <div class="card" style="margin-bottom:0.5rem">
                    <div class="card-title">
                        <h6 class="card-text" style="font-size:10pt">07:00 - 09:00</h6>
                    </div>
                    <div class="card-body" >
                        <h4 class="card-title text-center">Course Name</h4>
                        <h5 class="card-text text-center">Class</h5>
                        <p class="card-text">Lecturer Name : Lecturer Contact</p>
                    </div>
                </div>
                <div class="card" style="margin-bottom:0.5rem">
                    <div class="card-title">
                        <h6 class="card-text" style="font-size:10pt">07:00 - 09:00</h6>
                    </div>
                    <div class="card-body" >
                        <h4 class="card-title text-center">Course Name</h4>
                        <h5 class="card-text text-center">Class</h5>
                        <p class="card-text">Lecturer Name : Lecturer Contact</p>
                    </div>
                </div>
            </div>
            <!-- end of Thursday -->
            <!-- Friday -->
            <div class="col-sm-4 container">
            <h4 class="text-center">Friday</h4>
                <div class="card" style="margin-bottom:0.5rem">
                    <div class="card-title">
                        <h6 class="card-text" style="font-size:10pt">07:00 - 09:00</h6>
                    </div>
                    <div class="card-body" >
                        <h4 class="card-title text-center">Course Name</h4>
                        <h5 class="card-text text-center">Class</h5>
                        <p class="card-text">Lecturer Name : Lecturer Contact</p>
                    </div>
                </div>
            </div>
            <!-- end of Friday -->
            <!-- Saturday -->
            <div class="col-sm-4">
            <h4 class="text-center container">Saturday</h4>
                
            </div>
        </div>
    </div>
</div>
@endsection
