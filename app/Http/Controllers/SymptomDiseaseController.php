<?php

namespace App\Http\Controllers;

use App\Models\Disease;
use App\Models\Symptom;
use Illuminate\Http\Request;
use App\Models\SymptomDisease;

class SymptomDiseaseController extends Controller
{
    public function index(){
        $symptomdiseasearray =  SymptomDisease::distinct('disease_id')->pluck('disease_id')->toArray();
        $diseases = Disease::whereIn('id',$symptomdiseasearray)->get();
        return view('symptomdisease.index',[
            'diseases' => $diseases
        ]);
    }
    public function create(){
        $diseases = Disease::all();
        $symptoms = Symptom::all();
        return view('symptomdisease.create',[
            'diseases' => $diseases,
            'symptoms' => $symptoms
        ]);
    }

    public function edit($id){
        $symptomarray = array_unique(SymptomDisease::where('disease_id',$id)->pluck('symptom_id')->toArray());
        $symptoms = Symptom::whereIn('id',$symptomarray)->get();
        $disease = Disease::find($id);
        return view('symptomdisease.edit',[
            'disease' => $disease,
            'symptoms' => $symptoms
        ]);
    }

    public function createsave(Request $request){
        
        foreach($request->symptom as $symptpmid){
            $check = SymptomDisease::where('disease_id',$request->disease)->where('symptom_id',$symptpmid)->first();
            if(empty($check)){
                $symptomdisease = new SymptomDisease();
                $symptomdisease->disease_id = $request->disease;
                $symptomdisease->symptom_id = $symptpmid;
                $symptomdisease->save();
            }
        }

        return redirect()->route('symptomdisease.index')->withSuccess('เพิ่มโรคและอาการสำเร็จ');
    }

    public function delete($id){
        SymptomDisease::where('disease_id',$id)->delete();
        return redirect()->route('symptomdisease.index');
    }

    public function deletesymptom(Request $request,$id){
        SymptomDisease::where('disease_id',$request->diseaseid)->where('symptom_id',$id)->delete();
        return redirect()->back()->withSuccess('ลบรายการสำเร็จ');
    }
}
