@extends('master')
@section('content')

<div class="continer-flusid">
    <div class="row">
      
       <div class="col-lg-10">
           <div class="teanding-wap">
               <h4>My Orders</h4>
              
               @foreach($orders as $item)
               <div class="row serched-item">
                   <div class="col-3">
                        <a href="detil/{{$item->id}}"></a>
                        <img class="cartlist-item" src="{{$item->gallary}}" alt="">
                        
                   </div>
                   <div class="col-3">
                        
                        
                        <div>
                            <h2>Name : {{$item->name}}</h2>
                            <h5>Dilivery Status : {{$item->status}}</h5>
                            <h5>Address : {{$item->address}}</h5>
                            <h5>Payment Status :  {{$item->payment_status}}</h5>
                            <h5>payment method : {{$item->payment_method}}</h5>
                        </div>
                   </div>
                  
               </div>
               @endforeach
              
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