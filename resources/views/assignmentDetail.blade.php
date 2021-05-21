@extends('layout')
@section('content')
<div class="container">
    <h2>Assignment Detail</h2>
    <div class="container border">
        <p class="h5 font-weight-normal">Due date: date at time </p><br>
        <h4>Jobsheet Name</h4>
        <p class="text-uppercase">Course Name</p><br>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dignissimos fugiat perspiciatis facere suscipit impedit amet ratione? Delectus laboriosam odio fuga porro ea quos esse at? Labore perferendis ex veritatis optio!</p>
        <!-- there's icon picture based on it's difficulties -->
        <img src="assets/assets/img/hard-icon.png" alt="" width=90px>
        <p class="h5">Time Remaining: 0 day 0 hour 0 minutes</p><br>
        <div class="row">
            <a class="btn btn-info" style="margin-left:10px" href="#">Edit</a>
            <a class="btn btn-danger" style="margin-left:10px" href="#" onclick="return confirm('Are you sure to delete?')">Delete</a>            
        </div>
        <br>
    </div>
</div>
@endsection