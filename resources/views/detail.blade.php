@extends('master')
@section('content')

<div class="continer-flusid">
    <div class="row">
       <div class="col-lg-6">

            <img class="detail-img" src="{{$product['gallary']}}" alt="">
       </div>
       <div class="col-lg-6">
           <a href="/">Go Back</a>
           <h2>{{$product['name']}}</h2>
           <h3>Price : {{$product['price']}}</h3>
           <h4>Deatils : {{$product['description']}}</h4>
           <h4>category : {{$product['category']}}</h4>
           <br><br>
           <form action="/add_to_cart" method="POST">
               @csrf
               <input type="hidden" name="product_id" value="{{$product['id']}}">
           <button class="btn btn-primary">Add to Cart</button>
           </form>
           <br><br>
           <button class="btn btn-success">Buy now</button>
           

       </div>
    </div>

</div>

<style>
    .form-padd-up-dwn{
    height:500px;
    padding-top:100px;



}
.detail-img{
    height:300px;

}

.trending-item{
    float:left;
    width:20%;

}

.slider-image{
        height:400px;

    }
    .carousel-caption.d-none.d-md-block {

    color:black;
}
#carouselExampleCaptions{
    height:400px;

}
.treanding-img{
    height: 100px;

}
.carousel-control-next, .carousel-control-prev {
    position: absolute;
    top: 0;
    bottom: 0;
    z-index: 1;
    display: flex;
    align-items: center;
    justify-content: center;
    width: 15%;
    background: #000000a3 !important;
}


</style>

@endsection