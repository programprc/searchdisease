@extends('layouts.dashboard')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>โรคและอาการ</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('symptomdisease.index')}}">หน้าแรก</a></li>
                        <li class="breadcrumb-item active">โรคและอาการ</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <section class="content">
     
        <div class="container-fluid">
            <form method="post" action="{{route('disease.editsave',['id' => $disease->id])}}">
                @csrf
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="disease">ชื่อโรค</label>
                            <input type="text" class="form-control" name="name" placeholder="โรค" value="{{$disease->name}}"> 
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="link">ลิงก์</label>
                                <input type="text" class="form-control" name="link" placeholder="ลิงก์" value="{{$disease->link}}" required> 
                            </div>
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
