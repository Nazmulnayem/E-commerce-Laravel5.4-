@extends('frontEnd.master')

@section('title')
    SmartShop
@endsection

@section('mainContent')
    <div class="container">
        <table class="table table-bordered table-striped">
            <thead>
            <tr>
                <th> <h3 class="text-center text-success"> <span> Dear {{Session::get('name')}} Make your Payment method</h3></th>
            </tr>
            </thead>
        </table>


        <div class="alert alert-warning hidden">
            <span>shipping info goes here....</span>
            <button type="button" class="close" onclick="$('.alert').addClass('hidden');">&times;</button>
        </div>
       <div class="row">
           <div class="col-md-8 col-md-offset-2 well">
               {{Form::open(['route'=>'new-order','method'=>'POST'])}}
                   <table class="table">
                       <tr>
                           <th>Cash on delivery</th>
                           <td><input type="radio" name="payment_type" value="cash"/>Cash on delivery</td>

                       </tr>
                       <tr>
                           <th>paypal</th>
                           <td><input type="radio" name="payment_type" value="paypal"/>paypal</td>

                       </tr>
                       <tr>
                           <th>Bkash</th>
                           <td><input type="radio" name="payment_type" value="Bkash"/>Bkash</td>

                       </tr>
                       <tr>

                           <td><input type="submit" name="btn" value="confirm order"/></td>

                       </tr>

                   </table>
               {{Form::close()}}

           </div>

       </div>
    </div>
@endsection