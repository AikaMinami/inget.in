@extends('layout')

@section('content')
    <div class="row">
        <div class="d-flex flex-column p-3 bg-light col-sm-2" style="width: 280px; height:auto">
            <h3 class="fs-4 text-center" style="colour:#1d5430">Settings</h3>
            <ul class="nav nav-pills flex-column mb-auto">
                <li class="nav-item">
                <a href="#" class="nav-link active">
                    Account
                </a>
                </li>
                <li>
                <a href="#" class="nav-link link-dark">
                    Notification
                </a>
                </li>
                <li>
                <a href="#" class="nav-link link-dark">
                    Reset Data 
                </a>
                </li>
            </ul>
        
        </div>
        <div class="container col-sm-10">
            <h2>Reminder Notification</h2>
            <div class="float-right">
                <a href="" class="btn btn-info text-center" style="margin-right:1rem">Enable Notification</a>
            </div>
            <div class="container" style="margin-bottom:2rem">
                <br><br>
                <p style="font-size:24pt; font-family:Montserrat">Assignment</p>
                <form>
                    <div class="form-group row">
                        <label for="reminderAssignment" class="col-sm-3 col-form-label"><p style="font-size:16pt; font-family:Montserrat">Remind Me :</p></label>
                        <div class="col" style="width=50px">
                            <input type="number" class="form-control form-control-sm" id="reminderAssignment" aria-describedby="reminderAssignment">
                        </div>
                        <div class="col-sm-3">
                            <select class="form-control" id="reminderAssignmentType">
                                <option selected>minute(s)</option>
                                <option>hour(s)</option>
                            </select>
                        </div>
                        <p class="col-sm-3" style="font-size:16pt; font-family:Montserrat">Before due date</p>
                    </div><br><br>
                    <p style="font-size:24pt; font-family:Montserrat">Schedule</p>
                    <div class="form-group row">
                        <label for="reminderAssignment" class="col-sm-3 col-form-label"><p style="font-size:16pt; font-family:Montserrat">Remind Me :</p></label>
                        <div class="col" style="width=50px">
                            <input type="number" class="form-control form-control-sm" id="reminderAssignment" aria-describedby="reminderAssignment">
                        </div>
                        <div class="col-sm-3">
                            <select class="form-control" id="reminderAssignmentType">
                                <option selected>minute(s)</option>
                                <option>hour(s)</option>
                            </select>
                        </div>
                        <p class="col-sm-3" style="font-size:16pt; font-family:Montserrat">Before due date</p>
                    </div>
                    <button type="submit" class="btn btn-primary float-right" >Submit</button>
                    <br><br>
                </form>
            </div>
        </div>
    </div>
@endsection

