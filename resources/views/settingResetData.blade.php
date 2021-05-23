@extends('layout')

@section('content')
    <div class="row">
        <div class="d-flex flex-column p-3 bg-light col-sm-2" style="width: 280px; height:auto">
            <h3 class="fs-4 text-center" style="colour:#1d5430">Settings</h3>
            <ul class="nav nav-pills flex-column mb-auto">
                <li class="nav-item">
                <a href="{{ route('account') }}" class="nav-link link-dark">
                    Account
                </a>
                </li>
                <li>
                <a href="{{ route('notification') }}" class="nav-link link-dark">
                    Notification
                </a>
                </li>
                <li>
                <a href="{{ route('reset_data') }}" class="nav-link active">
                    Reset Data 
                </a>
                </li>
            </ul>
        </div>
        <div class="container col-sm-10">
            <h2>Reset Data</h2>
            <div class="container row">            
                <label for="resetAssignment" class="col-sm-3 col-form-label"><p style="font-size:16pt; font-family:Montserrat">Assignment</p></label>
                <div class="col" style="width=50px">
                    <button type="button" class="btn btn-danger float-right" data-toggle="modal" data-target="#resetAssignment">Reset</button>
                </div>                    
            </div>
            <div class="container row">                
                <label for="resetSchedule" class="col-sm-3 col-form-label"><p style="font-size:16pt; font-family:Montserrat">Schedule</p></label>
                <div class="col" style="width=50px">
                    <button type="button" class="btn btn-danger float-right" data-toggle="modal" data-target="#resetSchedule">Reset</button>
                </div>                    
            </div>
        </div>        
    </div>

    <!-- Reset Assignment Modal -->
    <div class="modal fade" id="resetAssignment" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Delete Account</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Are you sure to reset the assignments?
            </div>
            <div class="modal-footer">                
                <form action="{{ route('assignment.destroy', $user->id) }}" method="POST">
                    @csrf
                    @method('DELETE')                    
                    <button type="submit" class="btn btn-danger">Delete</button>                    
                </form>                
            </div>
            </div>
        </div>
    </div>

    <!-- Reset Schedule Modal -->
    <div class="modal fade" id="resetSchedule" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Delete Account</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Are you sure to reset the schedules?
            </div>
            <div class="modal-footer">                
                <form action="{{ route('schedule.destroy', $user->id) }}" method="POST">
                    @csrf
                    @method('DELETE')                    
                    <button type="submit" class="btn btn-danger">Delete</button>                    
                </form>                
            </div>
            </div>
        </div>
    </div>
@endsection

