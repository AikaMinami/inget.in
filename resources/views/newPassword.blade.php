@extends('layout')

@section('content')
    <div class="container" height="100%">
        <div class="vertical-center">
            <div class="container border " style="margin-top: 4rem; padding:75px"> 
                <form action="">
                    <label for="new-pass">Input Your New Password</label>
                    <input class= "form-control" type="password" placeholder="New Password" id="new-pass"><br>
                    
                    <label for="pass-confirm">Re-Input Your New Password</label>
                    <input class= "form-control" type="password" placeholder="Confirm New Password" id="pass-confirm"><br>
                    <a href=""><button type="submit" class="btn btn-primary float-right" style="">Confirm</button></a>
                </form>
            </div>
            <div class="container" style="padding:75px 0 75px" ></div>
        </div>
    </div>
@endsection