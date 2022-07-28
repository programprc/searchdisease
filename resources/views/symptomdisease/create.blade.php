@extends('layouts.dashboard')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>เพิ่มโรคและอาการ</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('symptomdisease.index')}}">หน้าแรก</a></li>
                        <li class="breadcrumb-item active">เพิ่มโรคและอาการ</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <section class="content">
        <div class="container-fluid">
            <form method="post"  action="{{ route('symptomdisease.createsave') }}">
                <div class="row">
                    @csrf
                    <div class="col-md-12">
                        <div class="form-group" data-select2-id="42">
                            <label>ชื่อโรค</label>
                            <select class="form-control select2 " name="disease" style="width: 100%;" data-select2-id="1" tabindex="-1" aria-hidden="true" required>
                                <option value="">==เลือกชื่อโรค==</option>
                                @foreach ($diseases as $disease)
                                    <option value="{{$disease->id}}">{{$disease->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group" data-select2-id="42">
                            <label>อาการโรค</label>
                            <select class="form-control select2 " multiple name="symptom[]" style="width: 100%;" data-select2-id="1" tabindex="-1" aria-hidden="true" required>
                                <option value="">==เลือกอาการโรค==</option>
                                @foreach ($symptoms as $symptom)
                                    <option value="{{$symptom->id}}">{{$symptom->name}}</option>
                                @endforeach
                            </select>
                            
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
