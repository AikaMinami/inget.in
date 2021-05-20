@extends('layout')

@section('content')
<div class="container"><br><br>

    <h2>Assignment</h2>
    <div class="container">
        <div class="row" style="margin-bottom:3rem">
            <div class="col-sm-4">
                <div class="card">
                    <div clas>
                        <div class="row justify-content-space-between ">
                            <div class="col-sm-3 align-items:center" style="width=25px; margin-left:20px">
                                <input class="col-sm-3 form-check-input" type="checkbox" id="checkboxNoLabel" value="" aria-label="...">
                            </div>
                            <div class="dropdown col-sm-3" style="width=25px">
                                <button class="btn btn-default" type="button" id="action" data-toggle="dropdown">
                                    <i class="fas fa-ellipsis-h"></i>
                                </button>
                                <ul class="dropdown-menu" role="menu" aria-labelledby="action">
                                    <li ><a role="menuitem" tabindex="-1" href="#">Edit</a></li>
                                    <li ><a role="menuitem" tabindex="-1" href="#">Delete</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <h6 class="card-text">07:00-09:00</h6>
                        <h5 class="card-title">SMBD</h5>
                        <p class="card-text">LIG 2 <br> <a href="#">Class Link</a> <br> Mr. Watanabe Haruto <br> contact </p>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-text">11:30-12:45</h6>
                        <h5 class="card-title">Advanced Website Programming</h5>
                        <p class="card-text">LKJ 2 <br> <a href="#">Class Link</a> <br> Ms. Humairah <br> contact </p>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-text">15:30-17:45</h6>
                        <h5 class="card-title">Project 1</h5>
                        <p class="card-text">LIG 1 <br> <a href="#">Class Link</a> <br> Mr. Yoga <br> contact </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <h2>Timeline</h2>
    <div>
    <div class="container">
        <div class="sorting-data">
            <h3>Friday, 7 May 2021</h3><br>
            <div class="row" style="margin-bottom:3rem">
                <div class="col-sm-6">
                    <div class="card">
                        <div class="card-body d-flex flex-column">
                            <p class="card-text">Due Date: 27/04/2021 at 17:00</p><br>
                            <div class="justify-content-center align-items-center"> 
                                <h4 class="card-title text-center">Jobsheet 9</h4>
                                <h5 class="card-text text-center">ADBO</h5>
                            </div>
                            <a href="#" class="btn btn-primary float-right mt-auto">Details > </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="card">
                        <div class="card-body d-flex flex-column">
                            <p class="card-text">Due Date: 01/05/2021 at 00:00</p><br>
                            <div class="justify-content-center align-items-center"> 
                                <h4 class="card-title text-center">Jobsheet 10</h4>
                                <h5 class="card-text text-center">DBMS</h5>
                            </div>
                            <a href="#" class="btn btn-primary float-right mt-auto">Details > </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
