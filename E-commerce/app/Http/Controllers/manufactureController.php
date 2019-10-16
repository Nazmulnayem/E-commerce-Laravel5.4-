<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use  App\Manufacture;
use DB;

class manufactureController extends Controller
{
    public function addManufacture(){
        
        return view('admin.manufacture.addManufacture');
        
    }
    public function saveManufacture(Request $request){
        
        $this->validate($request,[
            
            'manufactureName'=>'required',
            'manufactureDescription'=>'required'
            
            
            
        ]);
        
        //dd($request->all());
        $manufacture = new Manufacture();
        $manufacture->manufactureName = $request->manufactureName;
        $manufacture->manufactureDescription = $request->manufactureDescription;
        $manufacture->publicationStatus = $request->publicationStatus;
        
        $manufacture->save();
        //return 'save info successfully';
        
       // DB::table('manufactures')->insert([
       //     'manufactureName'=>$request->manufactureName,
       //     'manufactureDescription'=>$request->manufactureDescription,
      //      'publicationStatus'=>$request->publicationStatus,
      //  ]);
        return redirect('/manufacture/add')->with('message','successful');
        
        
    }
    
    public function manageManufacture(){
        $manufactures = Manufacture::all();
        return view('admin.manufacture.manageManufacture',['manufactures'=>$manufactures]);
        
    }
    public function editManufacture($id) {
        $manufacturesByid = Manufacture::where('id',$id)->first();
        
        return view('admin.manufacture.editManufacture',['manufacturesByid'=>$manufacturesByid]);
    }
    
    
    public function updateManufacture(Request $request){
        $manufacture = Manufacture::find($request->manufactureId);
        $manufacture->manufactureName = $request->manufactureName;
        $manufacture->manufactureDescription = $request->manufactureDescription;
        $manufacture->publicationStatus = $request->publicationStatus;
        
        $manufacture->save();
        return redirect('/manufacture/manage')->with('message','successful');
    }
    public function deleteManufacture($id) {
        $manufacture = Manufacture::find($id);
        $manufacture->delete();
         return redirect('/manufacture/manage')->with('message','successful deleted');
        
    }
    
    
}
