@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <div class="row card">
        <div class="col-6">
            <div class="row">
                <div class="col-12 lr  mt-3" style="display: inline-flex">
                    <h3 class="card-title md-5">shipment Details</h3>
                    {{-- <a href="{{route('admin.shipment.edit',$shipment[0]->id)}}" class="yl mt-1 ml-3"><i class="fa fa-edit"></i>Edit</a> --}}
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-4">Transporter</div>
                <div class="col-md-4">{{ $shipment[0]->driver }}</div>
            </div>
            <div class="row mb-3">
                <div class="col-md-4">Receiver</div>
                <div class="col-md-4">{{ $shipment[0]->buyer }}</div>
            </div>
          
            <div class="row mb-3">
                <div class="col-md-4">truck_no</div>
                <div class="col-md-8">{{ $shipment[0]->truck_no }}</div>
            </div>
            <div class="row mb-3">
                <div class="col-md-4">Permit</div>
                <div class="col-md-8">{{ $shipment[0]->permit }}</div>
            </div>
            <div class="row mb-3">
                <div class="col-md-4">Count</div>
                <div class="col-md-4">{{ $shipment[0]->count }}</div>
            </div> 
            <div class="row mb-3">
                <div class="col-md-4">Weight</div>
                <div class="col-md-4">{{ $shipment[0]->weight }}</div>
            </div> 
             <div class="row mb-3">
                <div class="col-md-4">Arrival</div>
                <div class="col-md-4">{{ $shipment[0]->arrival }}</div>
            </div>
            <div class="row mb-3">
                <div class="col-md-4">Derparture</div>
                <div class="col-md-4">{{ $shipment[0]->departure }}</div>
            </div>
        </div>
    </div>
</div>
@endsection