<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Category;
use DB;
class categoryController extends Controller{


    public function createCategory() {
        return view('admin.category.createCategory');
        
    }
    public function saveCategory(Request $request){
        
        $this->validate($request,[
            'categoryName'=>'required',
            'categoryDescription'=>'required',
            
        
            
        ]);
        
        //$category = new Category();
        //$category->categoryName = $request->categoryName;
        //$category->categoryDescription = $request->categoryDescription;
        //$category->public_status = $request->public_status;
        
        //$category->save();
        //return 'save info successfully';
        DB::table('categories')->insert([
            'categoryName'=>$request->categoryName,
            'categoryDescription'=>$request->categoryDescription,
            'public_status'=>$request->public_status,
        ]);
        return redirect('/category/add')->with('message','successful');
        
    }
    public function manageCategory(){
        $categories = Category::all();
        return view('admin.category.manageCategory',['categories'=>$categories]);
        
    }
    public function editCategory($id) {
        $categoryByid = Category::Where('id',$id)->first();
        return view('admin.category.editCategory',['categoryByid'=>$categoryByid]);
    }
    public function updateCategory(Request $request) {
        //dd($request->all());
        $category = Category::find($request->categoryId);
        $category->categoryName = $request->categoryName;
        $category->categoryDescription = $request->categoryDescription;
       $category->public_status = $request->public_status;
        $category->save();
        return redirect('/category/manage')->with('message','successful');
    }
    public function deleteCategory($id) {
        $category = Category::find($id);
        $category->delete();
         return redirect('/category/manage')->with('message','successful deleted');
        
    }
}
