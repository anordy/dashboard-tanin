@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <div class="row">
       <!-- Column -->
       <div class="col-lg-12 col-md-12">
          <div class="card new-product-box">
             <div class="hide-box text-right"><i class="ti-close"></i></div>
             <div class="card-body">
               @if ($errors->any())
               @foreach ($errors->all() as $error)
                   <div class="alert alert-danger alert-block">
                       <button type="button" class="close" data-dismiss="alert">×</button>
                           <strong>{{ $error }}</strong>
                   </div>
               @endforeach
           @endif
           @if ($message = Session::get('success'))
               <div class="alert alert-success alert-block">
                   <button type="button" class="close" data-dismiss="alert">×</button>
                       <strong>{{ $message }}</strong>
               </div>
           @endif
                <div class="row">
                   <div class="col-3"></div>
                   <div class="col-6">
                      <div class="row">
                         <div class="col-12 lr">
                            <h3 class="card-title md-5 mt-3">New Shipment Details</h3>
                         </div>
                      </div>
                      <form method="POST" action="{{ url('shipment/create') }}" enctype="multipart/form-data">
                         @csrf
                         <div class="row">
                            <div class="col-md-6 lr">
                                <div class="input-group mb-2">
                                  <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1"><i class="ti-wheelchair"></i></span>
                                  </div>
                                  <select name="transpoter_id" id="vehicle" class="form-control" required>
                                     <option value="">Select Transporter</option>
                                    @foreach ($transporters as $transporter)
                                    <option value="{{ $transporter->id }}">{{ $transporter->full_name }}</option>
                                    @endforeach
                                  </select>
                                </div>
                            </div>
                            <div class="col-md-6 lr">
                                <div class="input-group mb-2">
                                  <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1"><i class="ti-user"></i></span>
                                  </div>
                                  <select name="receiver_id" id="vehicle"  class="form-control" required>
                                    <option value="">Select Receiver</option>
                                    @foreach ($receivers as $receiver)
                                    <option value="{{ $receiver->id }}">{{ $receiver->full_name }}</option>
                                    @endforeach
                                  </select>
                                </div>
                            </div>
                        
                            <div class="col-md-6 lr">
                              <div class="input-group mb-2">
                                 <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1"><i class="ti-bookmark"></i></span>
                                 </div>
                                 <input type="text" name="product" class="form-control" placeholder="Product" required>
                              </div>
                           </div>
                           <div class="col-md-6 lr">
                              <div class="input-group mb-2">
                                 <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1"><i class="ti-bookmark"></i></span>
                                 </div>
                                 <input type="text" name="permit" class="form-control" placeholder="Permit" required>
                              </div>
                           </div>
                           <div class="col-md-6 lr">
                              <div class="input-group mb-2">
                                 <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1"><i
                                       class="ti-bookmark"></i></span>
                                 </div>
                                 <input type="text" name="weight" class="form-control" placeholder="Weight" required>
                              </div>
                           </div>
                            <div class="col-md-6 lr">
                               <div class="input-group mb-2">
                                  <div class="input-group-prepend">
                                     <span class="input-group-text" id="basic-addon1"><i
                                           class="ti-tag"></i></span>
                                  </div>
                                  <input type="text" name="count" class="form-control" placeholder="Bags" required>
                               </div>
                            </div>
                            
                   <div class="col-md-6 lr">
                      <div class="input-group mb-2">
                         <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1"><i class="ti-anchor"></i></span>
                         </div>
                         <input type="text" name="from_address" class="form-control" placeholder="From" required>
                      </div>
                   </div>
                   <div class="col-md-6 lr">
                    <div class="input-group mb-2">
                       <div class="input-group-prepend">
                          <span class="input-group-text" id="basic-addon1"><i class="ti-anchor"></i></span>
                       </div>
                       <input type="text" name="to_address" class="form-control" placeholder="To" required>
                    </div>
                 </div>
                 <div class="col-md-6 lr">
                    <div class="input-group mb-2">
                       <div class="input-group-prepend">
                          <span class="input-group-text" id="basic-addon1"><i class="ti-truck"></i></span>
                       </div>
                       <input type="text" name="truck_no" class="form-control" placeholder="Truck No" required>
                    </div>
                 </div>
             
                  
                   <div class="col-md-12 lr">
                      <div class="btn-group mb-3" role="group" style="width: 100%;">
                         <button type="submit" class="btn btn-block btn-success">Save</button>
                      </div>
                   </div>
                </div>
                </form>
             </div>
             <div class="col-3"></div>
          </div>
       </div>
    </div>
 </div>
 </div>
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="bootstrap-data-table-panel">
                <div class="card-body">
                    <div class="row mb-3">
                        <div class="col-6">
                           <h4 class="card-title mt-2">Shipments List</h4>
                        </div>
                        <div class="col-6">
                           <div style="text-align: right;">
                              <span class="btn btn-primary new-product"><i class="ti-plus"></i> Create Shipment</span>
                           </div>
                        </div>
                     </div>
                    <div class="table-responsive">
                        <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                   <th>Receiver</th>
                                    <th>Transporter</th>
                                    <th>Product</th>
                                    <th>Truck No</th>
                                    <th>Driver Lisence</th>
                                    <th>Bags</th>
                                    <th>Weight</th>
                                    <th>Permit</th>
                                    <th>From</th>
                                    <th>To</th>
                                    <th>Arrival</th>
                                    <th>Derpature</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                               @foreach ($shipments as $shipment)
                               <tr>
                                 <td>{{ $shipment->buyer }}</td>
                                 <td>{{ $shipment->driver }}</td>
                                 <td>{{ $shipment->product }}</td>
                                 <td>{{ $shipment->truck_no }}</td>
                                 <td>{{ $shipment->licence }}</td>
                                 <td>{{ $shipment->count }}</td>
                                 <td>{{ $shipment->weight }}</td>
                                 <td>{{ $shipment->permit  }}</td>
                                 <td>{{ $shipment->from_address }}</td>
                                 <td>{{ $shipment->to_address }}</td>
                                 <td>{{ $shipment->arrival }}</td>
                                 <td>{{ $shipment->departure }}</td>
                                 <td class="color-success">{{ $shipment->status }}</td>
                                 <td>
                                    <a href="#" class="color-primary">
                                       <i class="ti-pencil-alt"></i></a>
                                    {{-- <a href="{{route('admin.driver.show',$driver->id)}}" class="yl"><i class="fa fa-eye"></i></a> --}}
                                    {{-- @if ($driver->driver_status == 'suspended') --}}
                                    <a href="{{ url('shipment/show/'.$shipment->id) }}" class="color-success"><i class="ti-eye"></i></a>
                                    {{-- @else --}}
                                    <a href="#" class="color-danger">
                                       <i class="ti-trash"></i></a>
                                    {{-- @endif --}}
                  
                                    </td>
                              </tr>
                               @endforeach
                              
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- /# card -->
    </div>
    <!-- /# column -->
</div>
<!-- /# row -->
@endsection