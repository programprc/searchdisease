<?php

namespace App\Http\Controllers;

use App\Models\Disease;
use App\Models\Symptom;
use Illuminate\Http\Request;
use App\Models\SymptomDisease;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class LandingController extends Controller
{
    public function index(){
        $diseaseArr = [];
        $diseases = Disease::whereIn('id',$diseaseArr)->get();
        $symtomps = Symptom::get();
        return view('index',[
            'symtomps' => $symtomps,
            'diseases' => $diseases
        ]);
    }

    public function search(Request $request){
        $diseaseArr = SymptomDisease::whereIn('symptom_id',$request->symptom)
                    ->select('disease_id')
                    ->groupBy('disease_id')
                    ->having(DB::raw('COUNT(*)'),'=',count($request->symptom))
                    ->pluck('disease_id')->toArray();
        $diseases = Disease::whereIn('id',array_unique($diseaseArr))->get();
        $symtomps = Symptom::get();
        
        return view('index',[
            'symtomps' => $symtomps,
            'diseases' => $diseases
        ]);
    }
}
