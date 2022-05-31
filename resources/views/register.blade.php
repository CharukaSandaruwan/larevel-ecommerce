@extends('master')
@section('content')

<div class="continer-flusid">
    <div class="row">
        <div class="col-5 mx-auto form-padd-up-dwn">
            <!-- login form -->
            <form action="register" method="POST">
            @csrf
            <div class="form-group">
                 
                    <label for="exampleInputEmail1">User name</label>
                    <input type="text" name="name" class="form-control" id="exampleInputEmail1"  placeholder="enter user name">
                   
                </div>
                <div class="form-group">
                 
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                   
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>
                
                <button type="submit" class="btn btn-primary">Register</button>
            </form>

        </div>
    </div>

</div>
<style>
    .form-padd-up-dwn{
    height:500px;
    padding-top:100px;

    .slider-image{
        height:400px;

    }

}
</style>

@endsection