@extends('layout')

@section('content')
    <div class="row">
        <div class="d-flex flex-column p-3 bg-light col-sm-2" style="width: 280px; height:auto">
            <h3 class="fs-4">Settings</h3>
        <hr>
        <ul class="nav nav-pills flex-column mb-auto">
            <li class="nav-item">
            <a href="#" class="nav-link active">
                <svg class="bi me-2" width="16" height="16"><use xlink:href="#home"></use></svg>
                Account
            </a>
            </li>
            <li>
            <a href="#" class="nav-link link-dark">
                <svg class="bi me-2" width="16" height="16"><use xlink:href="#speedometer2"></use></svg>
                Notification
            </a>
            </li>
            <li>
            <a href="#" class="nav-link link-dark">
                <svg class="bi me-2" width="16" height="16"><use xlink:href="#table"></use></svg>
                Reset Data
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
                <table  style="margin-bottom:6rem">
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
    </div>
@endsection

