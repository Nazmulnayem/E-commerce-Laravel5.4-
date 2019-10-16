<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Category;

use App\Product;

class welcomeController extends Controller
{
    public function index(){
        $publishedProducts =Product::where('public_status',1)->get();
        return view('frontEnd.home.homecontent',['publishedProducts'=>$publishedProducts]);
        
    }
    public function category($id){
         $publishedCategoryProducts =Product::where('categoryId',$id)
                                       ->where('public_status',1)
                                       ->get();
         
         
      return  view('frontEnd.category.category',['publishedCategoryProducts'=>$publishedCategoryProducts]);
    }
    public function contact() {
        return view('frontEnd.contact.contact');
        
    }
    public function productDetails($id){
       $productById =Product::where('id',$id)->first();
                                      
        return view('frontEnd.productDetails.productContent',['productById'=>$productById]);
        
    }
}
