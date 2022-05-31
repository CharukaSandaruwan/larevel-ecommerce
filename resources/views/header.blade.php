<?php
use App\Http\Controllers\ProductController;

$total=0;
if(Session::has('user')){
$total=ProductController::cartItem();
}
?>
<style>
    .form-mar-be{
        margin:0 auto;
    }
</style> 
<header>
   
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand" href="/">E-comm</a>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                <ul class="navbar-nav  mb-2 mb-lg-0">
                    <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="/myorders">Orders</a>
                    </li>
                    
                </ul>
                <form class="d-flex form-mar-be">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
                <ul class="navbar-nav mb-2 mb-lg-0">
                    
                    <li class="nav-item">
                    <a class="nav-link" href="/cartlist">Cart({{$total}})</a>
                    </li>
                    @if(Session::has('user'))
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            {{Session::get('user')['name']}}
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="/logout">Logout</a></li>
                            
                        </ul>
                    </li>
                    @else
                    <li><a href="/login">Login</a></li>
                    <li><a href="/register">Register</a></li>
                    @endif

                    
                </ul>

            </div>
        </div>
    </nav>
            
</header>