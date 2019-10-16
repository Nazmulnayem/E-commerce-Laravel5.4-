<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use  App\Manufacture;
use  App\Product;
use DB;

class productController extends Controller
{
    public function addProduct() {
        $categories = Category::Where('public_status',1)->get();
        $manufactures = Manufacture::Where('publicationStatus',1)->get();
        return view('admin.product.addProduct',['categories'=>$categories],['manufactures'=>$manufactures]);
        
    }
    public function saveProduct(Request $request) {
        $this->validate($request, [
            'productName'=>'required',
            'productPrice'=>'required',
            'productImage'=>'required'
        ]);
        
        $productImage=$request->file('productImage');
        $name = $productImage->getClientOriginalName();
        $uploadPath='productImage/';
        $productImage->move($uploadPath,$name);
        $imageUrl=$uploadPath.$name;
        $this->saveProductInfo($request, $imageUrl);
              return redirect('/product/add')->with('message','product info save successfully');
        }
        
        
    protected function saveProductInfo($request, $imageUrl) {
        $product = new Product();
        $product->productName = $request->productName;
        $product->categoryId = $request->categoryId;
        $product->manufactureId = $request->manufactureId;
        $product->productPrice = $request->productPrice;
        $product->productQuantity = $request->productQuantity;
        $product->productShortDescription = $request->productShortDescription;
        $product->productLongDescription = $request->productLongDescription;
        $product->productImage = $imageUrl ;
        $product->public_status = $request->public_status;
        $product->save();
    }
    public function manageProduct(){
        
       $products=DB::table('products')
           ->join('categories','products.categoryId','=','categories.id')
               ->join('manufactures','products.manufactureId','=','manufactures.id')
               //->select('products.productName','products.productPrice','products.productQuantity','products.public_status','categories.categoryName','manufactures.manufactureName')
               ->select('products.*','categories.categoryName','manufactures.manufactureName')
               ->get();
               
        return view('admin.product.manageProduct',['products'=>$products]);
        
    }    
        public function viewProduct($id){
             $productById=DB::table('products')
               ->join('categories','products.categoryId','=','categories.id')
               ->join('manufactures','products.manufactureId','=','manufactures.id')
               //->select('products.productName','products.productPrice','products.productQuantity','products.public_status','categories.categoryName','manufactures.manufactureName')
               ->select('products.*','categories.categoryName','manufactures.manufactureName')
                 ->where('products.id',$id)    
               ->first();
            return view('admin.product.viewProduct',['product'=>$productById]);
    }
    
    public function editproduct($id){
        $productByid = Product::where('id',$id)->first();
        $categories = Category::Where('public_status',1)->get();
        $manufactures = Manufacture::Where('publicationStatus',1)->get();
        return view('admin.product.editProduct',['categories'=>$categories,'productByid'=>$productByid,'manufactures'=>$manufactures]);
        
        
    }
    public function updateProduct(Request $request) {
      
        $this->imageExistStatus($request, $imageUrl);
    }
           
    
    private function imageExistStatus($requst){
        $productByid = Product::where('id',$request->productId)->first();
        $productImage=$request->file('productImage');
        if($productImage){
            unlink($productByid->productImage);
            $name = $productImage->getClientOriginalName();
            $uploadPath = 'productImage/';
            $productImage->move($uploadPath, $name);
            $imageUrl = $uploadPath.$name;
            
        }
           else{
               
               $imageUrl = $productByid->productImage;
           }
        return $imageUrl;
    }
    
        
}
