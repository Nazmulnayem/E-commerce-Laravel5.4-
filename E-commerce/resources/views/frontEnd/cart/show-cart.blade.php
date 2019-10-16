@extends('frontEnd.master')

@section('title')
SmartShop
@endsection

@section('mainContent')
<div class="checkout">
	<div class="container">
		<h3>My Shopping Bag</h3>
		<div class="table-responsive checkout-right animated wow slideInUp" data-wow-delay=".5s">
			<table class="timetable_sub">
				<thead>
					<tr>
                                                  
						<th>SL No</th>
						<th>ProductImage</th>
						<th>Quantity</th>
						<th>Product Name</th>
						<th>Price</th>
						<th>Total Price</th>
						<th>Action</th>
					</tr>
				</thead>
                                <?php $i=1;?>
				              <?php $sum=0;?>
                                @foreach($cartProducts as $cartProduct)

                                    <tr>
                                <td>{{ $i++ }}</td>
                                <td><img src="{{asset($cartProduct->options->image)}}" height='50px' width="50px"/></td>
                                <td>{{ $cartProduct->qty}}</td>
                                <td>{{ $cartProduct->name}}</td>
                                <td>{{ $cartProduct->price}}</td>
										<td>
											{{Form::open(['route'=>'update-cart','method'=>'post'])}}
											<input type="number" name="qty" value="{{$cartProduct->qty}}" min="1"/>
											<input type="hidden" name="rowId" value="{{$cartProduct->rowId}}" min="1"/>
											<input type="submit" name="btn" value="Update" />
											{{Form::close()}}
										</td>
                                <td>{{ $total = $cartProduct->price*$cartProduct->qty}}</td>
                                <td>

                                        <a href="{{route('delete-cart-item',['rowId'=>$cartProduct->rowId])}}" class="btn btn-danger btn-xs">
                                            <span class="glyphocon glyphicon-trash"></span>
                                            
                                        </a>
                                </td>
                                    </tr>
									<?php $sum = $sum + $total; ?>


                                @endforeach
			</table>
			<hr/>
			<table class="table table-bordered">
				<tr>
					<th>Item Total price</th>
					<td>{{ $sum }}</td>
				</tr>
				<tr>
					<th>vat Total</th>
					<td>{{ $vat = 0 }}</td>
				</tr>
				<tr>
					<th>Grand Total</th>
					<td>{{ $orderTotal = $sum+$vat }}</td>
				<?php
					Session::put('orderTotal','$orderTotal');
					?>

				</tr>
			</table>
			<div class="row">
				<div class="col-md-11 col-md-offset-1">
					@if(Session::get('customerId') && Session::get('shippingId'))
					<a href="{{ route('checkout-payment') }}" class="btn btn-success pull-right">checkout</a>
						@elseif(Session::get('customerId'))
							<a href="{{ route('checkout-shipping') }}" class="btn btn-success pull-right">checkout</a>
					@else
						<a href="{{ route('checkout') }}" class="btn btn-success pull-right">checkout</a>

               @endif
						<a href="checkout" class="btn btn-success">Continue shopping</a>

				</div>
			</div>

		</div>
		
	</div>
</div>	
@endsection