@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <div class="row card">
        <div class="col-6">
            <div class="row">
                <div class="col-12 lr  mt-3" style="display: inline-flex">
                    <h3 class="card-title md-5">Buyer Details</h3>
                    {{-- <a href="{{route('admin.buyer.edit',$buyer->id)}}" class="yl mt-1 ml-3"><i class="fa fa-edit"></i>Edit</a> --}}
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-4">Name</div>
                <div class="col-md-4">{{$buyer->full_name}}</div>
            </div>
          
            <div class="row mb-3">
                <div class="col-md-4">Phone</div>
                <div class="col-md-8">{{$buyer->phone_no}}</div>
            </div>
            <div class="row mb-3">
                <div class="col-md-4">Email</div>
                <div class="col-md-8">{{$buyer->email}}</div>
            </div>
            <div class="row mb-3">
                <div class="col-md-4">Company</div>
                <div class="col-md-4">{{$buyer->company}}</div>
            </div> 
             <div class="row mb-3">
                <div class="col-md-4">Lisence</div>
                <div class="col-md-4">{{$buyer->licence}}</div>
            </div>
        
        </div>
    </div>
</div>
@endsection