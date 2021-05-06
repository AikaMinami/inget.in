@extends('layout')

@section('content')
    <div class="row" style="margin-bottom:310px">
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
            <h2>Reset Data</h2>
            <div class="container">
                <form>
                    <div class="form-group row">
                        <label for="resetAssignment" class="col-sm-3 col-form-label"><p style="font-size:16pt; font-family:Montserrat">Assignment</p></label>
                        <div class="col" style="width=50px">
                            <button type="submit" class="btn btn-danger float-right" >Reset</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="container">
                <form>
                    <div class="form-group row">
                        <label for="resetSchedule" class="col-sm-3 col-form-label"><p style="font-size:16pt; font-family:Montserrat">Schedule</p></label>
                        <div class="col" style="width=50px">
                            <button type="submit" class="btn btn-danger float-right" >Reset</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

