@extends('layouts.app')
@section('content')
<div class="container-fluid">
   <div class="row">
      <!-- Column -->
      <div class="col-lg-12 col-md-12">
         <div class="card new-product-box">
            <div class="hide-box text-right"><i class="ti-close"></i></div>
            <div class="card-body">
               <div class="row">
                  <div class="col-3"></div>
                  <div class="col-6">
                     <div class="row">
                        <div class="col-12 lr">
                           <h3 class="card-title md-5 mt-3">New Driver Details</h3>
                        </div>
                     </div>
                     <form method="POST" action="{{ url('driver/create') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                           <div class="col-md-6 lr">
                              <div class="input-group mb-2">
                                 <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1"><i class="ti-user"></i></span>
                                 </div>
                                 <input type="text" name="email" class="form-control" placeholder="Driver email" required>
                              </div>
                           </div>
                           <div class="col-md-6 lr">
                              <div class="input-group mb-2">
                                 <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1"><i class="ti-user"></i></span>
                                 </div>
                                 <input type="text" name="name" class="form-control" placeholder="Driver Name" required>
                              </div>
                           </div>
                           <div class="col-md-6 lr">
                              <div class="input-group mb-2">
                                 <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1"><i class="ti-mobile"></i></span>
                                 </div>
                                 <input type="text" name="phone_no" class="form-control" placeholder="Mobile Number"
                                    required>
                              </div>
                           </div>
                           <div class="col-md-6 lr">
                              <div class="input-group mb-2">
                                 <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1"><i
                                          class="ti-bookmark"></i></span>
                                 </div>
                                 <input type="text" name="company" class="form-control" placeholder="Company" required>
                              </div>
                           </div>
                           <div class="col-md-6 lr">
                              <div class="input-group mb-2">
                                 <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1"><i
                                          class="ti-tag"></i></span>
                                 </div>
                                 <input type="text" name="lisence" class="form-control" placeholder="Lisence" required>
                              </div>
                           </div>
                           
                  {{-- <div class="col-md-6 lr">
                     <div class="input-group mb-2">
                        <div class="input-group-prepend">
                           <span class="input-group-text" id="basic-addon1"><i class="ti-anchor"></i></span>
                        </div>
                        <input type="text" name="plate_number" class="form-control" placeholder="Plate Number" required>
                     </div>
                  </div> --}}
                
                 
                  <div class="col-md-12 lr">
                     <div class="btn-group mb-3" role="group" style="width: 100%;">
                        <button type="submit" class="btn btn-block btn-success">Save</button>
                     </div>
                     <div class="gallery"></div>
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
   <div class="col-12">
      <div class="card">
         <div class="card-body">
            @if ($errors->any())
                       @foreach ($errors->all() as $error)
                           <div class="alert alert-danger alert-block">
                               <button type="button" class="close" data-dismiss="alert">×</button>
                                   <strong>{{ $error }}</strong>
         </div>
         @endforeach
         @endif --}}
         @if ($message = Session::get('success'))
                       <div class="alert alert-success alert-block">
                           <button type="button" class="close" data-dismiss="alert">×</button>
                               <strong>{{ $message }}</strong>
      </div>
      @endif
      <div class="row mb-3">
         <div class="col-6">
            <h4 class="card-title mt-2">Drivers List</h4>
         </div>
         <div class="col-6">
            <div style="text-align: right;">
               <span class="btn btn-primary new-product"><i class="ti-plus"></i> Add Driver</span>
            </div>
         </div>
      </div>

      <div class="row table-responsive">
         <table id="zero_config" class="table table-bordereds" style="width: 100%;">
            <thead>
               <tr>
                  <td>Driver ID</td>
                  <td>name</td>
                  <td>Email</td>
                  <td>Mobile Number</td>
                  <td>Company</td>
                  <td>Lisence</td>
                  <td>Status</td>
                  <td>Action</td>
               </tr>
            </thead>
            <tbody>
               @foreach ($drivers as $driver)
               <tr>
                  <td>{{ $driver->id }}</td>
                  <td>{{ $driver->full_name }}</td>
                  <td>{{ $driver->email }}</td>
                  <td>{{ $driver->phone_no }}</td>
                  <td>{{ $driver->company }}</td>
                  <td>{{ $driver->licence }}</td>
                  <td>
                  <a href="#" class="color-primary">
                     <i class="ti-pencil-alt"></i></a>
                  <a href="{{ url('driver/show/'.$driver->id) }}" class="color-success"><i class="ti-eye"></i></a>
                  {{-- @if ($driver->driver_status == 'suspended') --}}
                  {{-- <a href="#" class="color-success">
                     <i class="ti-eye"></i></a> --}}
                  {{-- @else --}}
                  <a href="#" class="color-danger">
                     <i class="ti-trash"></i></a>
                  {{-- @endif --}}

                  </td>
               </tr>
               @endforeach
            </tbody>
          
         </table>
         {{-- {{$drivers->links()}} --}}
      </div>
   </div>
</div>
</div>
</div>
</div>

@endsection