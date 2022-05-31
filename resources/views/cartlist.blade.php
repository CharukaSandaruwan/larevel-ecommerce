@extends('master')
@section('content')

<div class="continer-flusid">
    <div class="row">
      
       <div class="col-lg-10">
           <div class="teanding-wap">
               <h4>Result for Products</h4>
               <a href="ordernow" class="btn btn-success">Order Now</a>
               @foreach($products as $item)
               <div class="row serched-item">
                   <div class="col-3">
                        <a href="detil/{{$item->id}}"></a>
                        <img class="cartlist-item" src="{{$item->gallary}}" alt="">
                        
                   </div>
                   <div class="col-3">
                        
                        
                        <div>
                            <h2>{{$item->name}}</h2>
                            <h5>{{$item->description}}</h5>
                        </div>
                   </div>
                   <div class="col-3">
                       <a href="/removecart/{{$item->cart_id}}" class="btn btn-warning">Remove To Cart</a>
                       
                        
                        
                    </div>
               </div>
               @endforeach
               <a href="ordernow" class="btn btn-success">Order Now</a>
           </div>
         
           

        </div>
    </div>

</div>

<style>
    .cartlist-item{
        height:300px;

    }
    .row.serched-item {
    display: flex;
    align-items: center;
    justify-content: center;
    border-bottom:1px solid black;
}


</style>

@endsection