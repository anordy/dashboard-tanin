@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row card">
        <div class="col-6">
            <div class="row">
                <div class="col-12 lr  mt-3" style="display: inline-flex">
                    <h3 class="card-title md-5">Driver Details</h3>
                    {{-- <a href="{{route('admin.driver.edit',$driver->id)}}" class="yl mt-1 ml-3"><i class="fa fa-edit"></i>Edit</a> --}}
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-4">Name</div>
                <div class="col-md-4">{{$driver->full_name}}</div>
            </div>
            {{-- <div class="row mb-3">
                <div class="col-md-4">
                    Status
                </div>
                <div class="col-md-4">
                    <div class="col-md-12" style="margin-left: -10px;">
                        @if ($driver->driver_status == 'suspended')
                            <td class="d-flex flex-row flex-nowrap"><i class="fa fa-circle rd"></i> Suspended</td>
                        @endif
                        @if ($driver->driver_status == 'offline')
                            <td class="d-flex flex-row flex-nowrap"><i class="fa fa-circle gy"></i> Offline</td>
                        @endif
                        @if ($driver->driver_status == 'online')
                            <td class="d-flex flex-row flex-nowrap"><i class="fa fa-circle gr"></i> Online</td>
                        @endif
                        @if ($driver->driver_status == 'transporting')
                            <td class="d-flex flex-row flex-nowrap"><i class="fa fa-circle gr"></i> Transporting</td>
                        @endif
                    </div>
                </div>
            </div> --}}
          
            <div class="row mb-3">
                <div class="col-md-4">Phone</div>
                <div class="col-md-8">{{$driver->phone_no}}</div>
            </div>
            <div class="row mb-3">
                <div class="col-md-4">Email</div>
                <div class="col-md-8">{{$driver->email}}</div>
            </div>
            <div class="row mb-3">
                <div class="col-md-4">Company</div>
                <div class="col-md-4">{{$driver->company}}</div>
            </div> 
             <div class="row mb-3">
                <div class="col-md-4">Lisence</div>
                <div class="col-md-4">{{$driver->licence}}</div>
            </div>
            <div class="row mb-3">
                <div class="col-md-4">Truck Plate Number</div>
                <div class="col-md-8">{{$driver->truck_no?? 'na'}}</div>
            </div>
        </div>
    </div>
</div>
@endsection