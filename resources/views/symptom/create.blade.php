@extends('layouts.dashboard')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>เพิ่มอาการ</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('symptomdisease.index')}}">หน้าแรก</a></li>
                        <li class="breadcrumb-item active">เพิ่มอาการ</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <section class="content">

     
        <div class="container-fluid">
            <form method="post"  action="{{ route('symptom.createsave') }}">
                <div class="row">
                    @csrf
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="symptom">อาการโรค</label>
                            <input type="text" class="form-control" name="name" placeholder="อาการโรค" required> 
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group text-right">
                            <button type="submit" class="btn btn-info mb-2"><i class="fas fa-save mr-1"></i> บันทึก</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
@endsection
