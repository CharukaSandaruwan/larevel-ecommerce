@extends('master')
@section('content')

<div class="continer-flusid">
    <div class="row">
      
       <div class="col-lg-10">
            <table class="table">
                
                <tbody>
                    <tr>
                    <th scope="row">Amount</th>
                    <td>$ {{$total}}</td>
                    
                    </tr>
                    <tr>
                    <th scope="row">Tax</th>
                    <td>$ 0</td>
                    
                    </tr>
                    <tr>
                    <th scope="row">Delivery</th>
                    <td>$ 10</td>
                    
                    </tr>
                    <tr>
                    <th scope="row">Total Amount</th>
                    <td>$ {{$total + 10}}</td>
                    
                    </tr>
                    
                </tbody>
            </table>
            <div class="order-now-form-st">
                <form action="/orderplace" method="POST">
                    @csrf
                    <div class="mb-3">
                       
                        <!-- <input type="email" placeholder="Email-address" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"> -->
                        <textarea name="address" placeholder="enter your address" class="form-control" cols="30" rows="10"></textarea>
                       
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label"><b>Payment method</b></label></br></br>
                        <input type="radio" value="cash" name="payment"><span>Online payment</span></br></br>
                        <input type="radio" value="credit" name="payment"><span>EMI payment</span></br></br>
                        <input type="radio"  value="bank" name="payment"><span>payment on dilivery</span></br></br>
                        
                    </div>
                   
                    <button type="submit" class="btn btn-primary">Order Now</button>
                </form>
            </div>
         
           

        </div>
    </div>

</div>

<style>

.order-now-form-st{
    padding-left:50px;

}

</style>

@endsection