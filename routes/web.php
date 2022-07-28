<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DiseaseController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\SymptomController;
use App\Http\Controllers\SymptomDiseaseController;



Route::get('', [LandingController::class, 'index'])->name('index');
Route::get('search', [LandingController::class, 'search'])->name('search');

Auth::routes();

Route::group(['middleware' => 'auth'], function(){
    // Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::group(['prefix' => 'symptomdisease'], function(){
        Route::get('', [SymptomDiseaseController::class, 'index'])->name('symptomdisease.index');
        Route::get('create', [SymptomDiseaseController::class, 'create'])->name('symptomdisease.create');
        Route::post('createsave', [SymptomDiseaseController::class, 'createsave'])->name('symptomdisease.createsave');
        Route::get('edit/{id}', [SymptomDiseaseController::class, 'edit'])->name('symptomdisease.edit');
        Route::post('editsave/{id}', [SymptomDiseaseController::class, 'editsave'])->name('symptomdisease.editsave');
        Route::get('delete/{id}', [SymptomDiseaseController::class, 'delete'])->name('symptomdisease.delete');
        Route::get('deletesymptom/{id}', [SymptomDiseaseController::class, 'deletesymptom'])->name('symptomdisease.deletesymptom');
    });
    Route::group(['prefix' => 'symptom'], function(){
        Route::get('', [SymptomController::class, 'index'])->name('symptom.index');
        Route::get('create', [SymptomController::class, 'create'])->name('symptom.create');
        Route::post('createsave', [SymptomController::class, 'createsave'])->name('symptom.createsave');
        Route::get('edit/{id}', [SymptomController::class, 'edit'])->name('symptom.edit');
        Route::post('editsave/{id}', [SymptomController::class, 'editsave'])->name('symptom.editsave');
        Route::get('delete/{id}', [SymptomController::class, 'delete'])->name('symptom.delete');
    });
    Route::group(['prefix' => 'disease'], function(){
        Route::get('', [DiseaseController::class, 'index'])->name('disease.index');
        Route::get('create', [DiseaseController::class, 'create'])->name('disease.create');
        Route::post('createsave', [DiseaseController::class, 'createsave'])->name('disease.createsave');
        Route::get('edit/{id}', [DiseaseController::class, 'edit'])->name('disease.edit');
        Route::post('editsave/{id}', [DiseaseController::class, 'editsave'])->name('disease.editsave');
        Route::get('delete/{id}', [DiseaseController::class, 'delete'])->name('disease.delete');
    });
});


