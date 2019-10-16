<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;
use App\Shipping;
use App\Order;
use App\Payment;
use App\OrderDetails;
use Mail;
use Session;
use Cart;

class checkoutController extends Controller
{
    public function index(){
        return view('frontEnd.checkout.checkout');
    }
    public function customerSignUp(Request $request){
        $customer = new Customer();
        $customer->name = $request->name;
        $customer->phoneNumber = $request->phoneNumber;
        $customer->email = $request->email;
        $customer->password = bcrypt($request->password);
        $customer->address = $request->address;
        $customer->save();

       $customerId = $customer->id;
       Session::put('customerId',$customerId);
        Session::put('name',$customer->name);

       $data = $customer->toArray();

       Mail::send('frontEnd.mails.confirmation-mail',$data,function($message) use ($data){

           $message->to($data['email']);
           $message->subject('confirmation-mail');

       });


       return redirect('/checkout/shipping');
    }
    public function shippingForm(){
        $customer = Customer::find(Session::get('customerId'));
        return view('frontEnd.checkout.shipping',['customer'=>$customer]);



}
public function saveShippingInfo(Request $request){
        $shipping = new Shipping();
    $shipping->name = $request->name;
    $shipping->phoneNumber = $request->phoneNumber;
    $shipping->email = $request->email;
    $shipping->address = $request->address;
    $shipping->save();

  Session::put('shippingId',$shipping->id);
    return redirect('/checkout/payment');
}
    public function paymentForm(){
        return view('frontEnd.checkout.payment');
    }
        public function newOrder(Request $request){

            $paymentType = $request->payment_type;

            if($paymentType == 'cash') {
                $order = new Order();
                $order->customer_id = Session::get('customerId');
                $order->shipping_id = Session::get('shippingId');
                $order->order_total = Session::get('shippingId');
                $order->save();


                $payment = new Payment();
                $payment->order_id = $order->id;
                $payment->payment_type = $paymentType;
                $payment->save();

                $cartProducts = Cart::content();

                foreach($cartProducts as $cartProduct) {
                    $orderDetail = new OrderDetails();
                    $orderDetail->order_id = $order->id;
                    $orderDetail->product_id = $cartProduct->id;
                    $orderDetail->product_name = $cartProduct->name;
                    $orderDetail->product_price = $cartProduct->price;
                    $orderDetail->product_quantity = $cartProduct->qty;
                    $orderDetail->save();
                }



            Cart::destroy();
            return redirect('/complete/order');


        }
         else if($paymentType == 'paypal'){

         }
         elseif($paymentType == 'Bkash'){

         }
    }
    public function completeOrder(){
        return 'success';

    }

}
