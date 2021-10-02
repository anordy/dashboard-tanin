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
                           <h3 class="card-title md-5 mt-3">New Client Details</h3>
                        </div>
                     </div>
                     <form method="POST" action="{{ url('client/create') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                           <div class="col-md-6 lr">
                              <div class="input-group mb-2">
                                 <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1"><i class="ti-email"></i></span>
                                 </div>
                                 <input type="text" name="email" class="form-control" placeholder="E-mail" required>
                              </div>
                           </div>
                           <div class="col-md-6 lr">
                              <div class="input-group mb-2">
                                 <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1"><i class="ti-user"></i></span>
                                 </div>
                                 <input type="text" name="name" class="form-control" placeholder="Name" required>
                              </div>
                           </div>
                           <div class="col-md-6 lr">
                              <div class="input-group mb-2">
                                 <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1"><i class="ti-mobile"></i></span>
                                 </div>
                                 <input type="text" name="phone_no" class="form-control" placeholder="Phone Number"
                                    required>
                              </div>
                           </div>
                           <div class="col-md-6 lr">
                              <div class="input-group mb-2">
                                 <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1"><i class="ti-bookmark"></i></span>
                                 </div>
                                 <input type="text" name="company" class="form-control" placeholder="Company" required>
                              </div>
                           </div>
                           <div class="col-md-12 lr">
                              <div class="btn-group mb-3" role="group" style="width: 100%;">
                                 <button type="submit" class="btn btn-block btn-success">Save</button>
                              </div>
                              {{-- <div class="gallery"></div> --}}
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
               {{-- @if ($errors->any())
                       @foreach ($errors->all() as $error)
                           <div class="alert alert-danger alert-block">
                               <button type="button" class="close" data-dismiss="alert">×</button>
                                   <strong>{{ $error }}</strong>
            </div>
            @endforeach
            @endif --}}
            {{-- @if ($message = Session::get('success'))
                       <div class="alert alert-success alert-block">
                           <button type="button" class="close" data-dismiss="alert">×</button>
                               <strong>{{ $message }}</strong>
         </div>
         @endif --}}
         <div class="row mb-3">
            <div class="col-6">
               <h4 class="card-title mt-2">Client List</h4>
            </div>
            <div class="col-6">
               <div style="text-align: right;">
                  <span class="btn btn-primary new-product"><i class="ti-plus"></i> Add Client</span>
               </div>
            </div>
         </div>

         <div class="row table-responsive">
            <table id="zero_config" class="table table-bordereds" style="width: 100%;">
               <thead>
                  <tr>
                     <td>ID</td>
                     <td>name</td>
                     <td>E-mail</td>
                     <td>Mobile Number</td>
                     <td>Company</td>
                     <td>Action</td>
                  </tr>
               </thead>
               <tbody>
                  @foreach ($buyers as $buyer)
                  <tr>
                     <td>{{ $buyer->id }}</td>
                     <td>{{ $buyer->full_name }}</td>
                     <td>{{ $buyer->email }}</td>
                     <td>{{ $buyer->phone_no }}</td>
                     <td>{{ $buyer->company }}</td>
                     <td>

                        <a href="#" class="color-primary edit-clients" data-toggle="modal"
                           data-target="#editClientModal" data-id="{{ $buyer->id }}" data-name="{{ $buyer->full_name }}" data-email="{{ $buyer->email }}" data-company="{{ $buyer->company }}" data-phone_no="{{ $buyer->phone_no }}">
                           <i class="ti-pencil-alt"></i></a>
                        <a href="{{ url('client/show/'.$buyer->id) }}" class="color-success"><i class="ti-eye"></i></a>
                        <a href="#" class="color-danger">
                           <i class="ti-trash"></i></a>

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

<!-- Modal Add Category -->
<div class="modal fade none-border" id="editClientModal">
   <div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-header">
            {{-- <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button> --}}
            <h4 class="modal-title">
               <strong>Client Details </strong>
            </h4>
         </div>
         <div class="modal-body">
            <form method="POST" action="{{ url('client/create') }}" enctype="multipart/form-data">
               @csrf
               <div class="row">
                  <div class="col-md-6 lr">
                     <div class="input-group mb-2">
                        <div class="input-group-prepend">
                           <span class="input-group-text" id="basic-addon1"><i class="ti-email"></i></span>
                        </div>
                        <input type="text" name="email" class="form-control" placeholder="E-mail" required>
                     </div>
                  </div>
                  <div class="col-md-6 lr">
                     <div class="input-group mb-2">
                        <div class="input-group-prepend">
                           <span class="input-group-text" id="basic-addon1"><i class="ti-user"></i></span>
                        </div>
                        <input type="text" name="name" class="form-control" placeholder="Name" required>
                     </div>
                  </div>
                  <div class="col-md-6 lr">
                     <div class="input-group mb-2">
                        <div class="input-group-prepend">
                           <span class="input-group-text" id="basic-addon1"><i class="ti-mobile"></i></span>
                        </div>
                        <input type="text" name="phone_no" class="form-control" placeholder="Phone Number" required>
                     </div>
                  </div>
                  <div class="col-md-6 lr">
                     <div class="input-group mb-2">
                        <div class="input-group-prepend">
                           <span class="input-group-text" id="basic-addon1"><i class="ti-bookmark"></i></span>
                        </div>
                        <input type="text" name="company" class="form-control" placeholder="Company" required>
                     </div>
                  </div>

               </div>
            </form>
         </div>
         <div class="modal-footer">
            <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-danger waves-effect waves-light save-category"
               data-dismiss="modal">Update</button>
         </div>
      </div>
   </div>
</div>
<!-- END MODAL -->
</div>
<script type="text/javascript">
   $('.edit-clients').on('click', function() {
         var id = $(this).data('id');
         var name = $(this).data('full_name');
         var email = $(this).data('email');
         var phone_no = $(this).data('phone_no');
         var company = $(this).data('company');
         var url = "{{ url('clients/show') }}" + id;

         $('#editClientModal form').attr('action', url);
         $('#editClientModal form input[name="full_name"]').val(name);
         $('#editClientModal form input[name="email"]').val(email);       
         $('#editClientModal form input[name="company"]').val(company);
         $('#editClientModal form input[name="phone_no"]').val(phone_no);
      });
</script>
@endsection