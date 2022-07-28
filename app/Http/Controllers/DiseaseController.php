<?php

namespace App\Http\Controllers;

use App\Models\Disease;
use Illuminate\Http\Request;

class DiseaseController extends Controller
{
    public function index(){
        $diseases = Disease::all();
        return view('disease.index',
        [
            'diseases' => $diseases
        ]);
    }

    public function create(){
        return view('disease.create');
    }

    public function createsave(Request $request){
        $disease = new Disease();
        $disease->name = $request->name;
        $disease->link = $request->link;
        $disease->save();
        return redirect()->route('disease.index')->withSuccess('เพิ่มโรค'.$request->name.'สำเร็จ');
    }

    public function edit($id){
        $disease = Disease::find($id);
        return view('disease.edit',[
            'disease' => $disease
        ]);
    }

    public function editsave(Request $request,$id){
        $disease = Disease::find($id);
        $disease->name = $request->name;
        $disease->link = $request->link;
        $disease->save();
        return redirect()->route('disease.index')->withSuccess('แก้ไขโรค'.$request->name.'สำเร็จ');
    }

    public function delete($id){
        Disease::find($id)->delete();
        return redirect()->route('disease.index')->withSuccess('ลบรายการสำเร็จ');
    }
}
