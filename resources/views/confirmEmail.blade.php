@extends('layout')

@section('content')
    <div class="container" height="100%">
        <div class="vertical-center">
            <div class="container border " style="margin-top: 150px; padding:75px"> 
                <form action="">
                    <label for="email-confirm">Input Your E-mail For Confirmation</label>
                    <input class= "form-control" type="text" placeholder="E-mail" id="email-confirm"><br>
                    <a href=""><button type="submit" class="btn btn-primary float-right" style="">Confirm</button></a>
                </form>
            </div>
            <div class="container" style="padding:75px 0 75px" ></div>
        </div>
    </div>
@endsection