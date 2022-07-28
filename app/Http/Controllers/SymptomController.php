<?php

namespace App\Http\Controllers;

use App\Models\Disease;
use App\Models\Symptom;
use Illuminate\Http\Request;

class SymptomController extends Controller
{
    public function index(){
        $symptoms = Symptom::all();
        return view('symptom.index',[
            'symptoms' => $symptoms
        ]);
    }
   
    public function create(){
        return view('symptom.create');
    }

    public function createsave(Request $request){
        $symptom = new Symptom();
        $symptom->name = $request->name;
        $symptom->save();
        return redirect()->route('symptom.index')->withSuccess('เพิ่มอาการ'.$request->name.'สำเร็จ');
    }

    public function edit($id){
        $symptom = Symptom::find($id);
        return view('symptom.edit',[
            'symptom' => $symptom
        ]);
    }

    public function editsave(Request $request,$id){
        $symptom = Symptom::find($id);
        $symptom->name = $request->name;
        $symptom->save();
        return redirect()->route('symptom.index')->withSuccess('แก้ไขอาการ'.$request->name.'สำเร็จ');
    }

    public function delete($id){
        Symptom::find($id)->delete();
        return redirect()->route('symptom.index')->withSuccess('ลบรายการสำเร็จ');
    }
}
