<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Product;
use Cart;

class cartController extends Controller
{
    public function addToCart(Request $request) {
      $product =  Product::find($request->id);
      Cart::add([
          'id' => $request->id, 
          'name' => $product->productName, 
          'qty' => $request->qty, 
          'price' => $product->productPrice, 
          'options' => [
              'image' => $product->productImages
              ]
          ]);
      return redirect('/cart/show');
    }
    public function showToCart() {
        $cartProducts = Cart::content();
        return view('frontEnd.cart.show-cart',['cartProducts'=>$cartProducts]);
        
    }
    public function deleteToCart($id) {
    $cartProducts = Cart::remove($id);

    return redirect('/cart/show');
}
    public function updateToCart(Request $request) {
        $cartProducts = Cart::update($request->rowId,$request->qty);

        return redirect('/cart/show');
    }
}
