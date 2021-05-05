@extends('layout')

@section('content')
    <div class="row">
        <div class="d-flex flex-column p-3 bg-light col-sm-2" style="width: 280px; height:auto">
            <h3 class="fs-4 text-center" style="colour:#1d5430">Settings</h3>
        <hr>
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
                <!-- Nanti bakal ada "are you sure want to reset your data" langsung aja -->
            </a>
            </li>
        </ul>
        <hr>
        
        </div>
        <div class="container col-sm-10">
            <h2>Account Settings</h2>
            <div class="text-center">
            <img src="assets/assets/img/user.png" alt="" width="200px" height="200px" style="margin-bottom:2rem">
            </div>
                <table  style="margin-bottom:3rem">
                    <div class="row">
                        <tr>
                            <td style="width:15%"><h4>Name</h4></td>
                            <td style="width:60%"><h4>: Roseanne</h4></td>
                            <td style="width:25%"><h4><a href="#">Edit</a></h4></td>
                        </tr>
                        <tr>
                            <td style="width:15%"><h4>Username</h4></td>
                            <td style="width:60%"><h4>: Roseanne_123</h4></td>
                            <td style="width:25%"><h4><a href="#">Edit</a></h4><td>
                        </tr>
                        <tr>
                            <td style="width:15%"><h4>Password</h4></td>
                            <td style="width:60%"><h4>: ***************</h4></td>
                            <td style="width:25%"><h4><a href="#">Edit</a></h4></td>
                        </tr>
                        <tr>
                            <td style="width:15%"><h4>Email</h4></td>
                            <td style="width:60%"><h4>: roseanne123@gmail.com</h4></td>
                            <td style="width:25%"><h4><a href="#">Edit</a></h4></td>
                        </tr>
                    </div>
                </table>
            </div>
        </div>
        <div class="row">
            <div class="col text-center">
                <a href="" class="btn btn-danger text-center" style="margin-bottom:0.7rem">Delete Account</a>
            </div>
        </div>
    </div>
@endsection

