@extends('master')
@section('content')

<div class="continer-flusid">
    <div class="row">
        <div class="col-12 p-0">
            <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                
                <div class="carousel-inner">
                    @foreach($products as $item)

                    <div class="carousel-item{{$item['id']==32?' active':''}}">
                        <a href="detail/{{$item['id']}}">
                            <img class ="slider-image" src="{{$item['gallary']}}" class="d-block w-100" alt="slider-{{$item['id']}}">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>{{$item['name']}}</h5>
                                <p>{{$item['description']}}</p>
                            </div>
                        </a>
                    </div>
                   

                    @endforeach
                    
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
           

        </div>
    </div>

</div>
<section class="tranding-item-section">
    <div class="container-flusid">
        <div class="row">
            <diw class="col-12 p-0">
                <h3 class="title">Treanding Items</h3>
                    @foreach($products as $item)
                    <a href="detail/{{$item['id']}}">
                    <div class="trending-item">
                        <img class ="treanding-img" src="{{$item['gallary']}}" class="" alt="slider-{{$item['id']}}">
                        <div class="">
                            <h5>{{$item['name']}}</h5>
                           
                        </div>
                    </div>
                    </a>
                    @endforeach

            </diw>
        </div>
    </div>
</section>
<style>
    .form-padd-up-dwn{
    height:500px;
    padding-top:100px;



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