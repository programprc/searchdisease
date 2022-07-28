@extends('layouts.dashboard')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>อาการ</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('symptomdisease.index')}}">หน้าแรก</a></li>
                        <li class="breadcrumb-item active">อาการ</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <section class="content">
        @if (Session::has('success'))
            <div class="alert alert-info alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h5><i class="icon fas fa-info"></i> สำเร็จ</h5>
                {{ Session::get('success') }}
            </div>
        @endif
     
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <a href="{{route('symptom.create')}}" class="btn btn-success mb-2"><i class="fa fa-plus-circle mr-1"></i> เพิ่มอาการ</a>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th style="width: 10px">#</th>
                                <th>อาการโรค</th>
                                <th style="width: 250px">เพิ่มเติม</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($symptoms as $key => $symptom)
                            <tr>
                                <td>{{$key+1}}</td>
                                <td>{{$symptom->name}}</td>
                                <td>
                                    <a href="{{route('symptom.edit',['id' => $symptom->id])}}" class="btn btn-primary btn-sm">แก้ไข</a>
                                    <a href="{{route('symptom.delete',['id' => $symptom->id])}}" class="btn btn-danger btn-sm">ลบ</a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                
            </div>
        </div>
    </section>
@endsection
