<?php

namespace App\Http\Controllers;

use App\Models\Shipment;
use Illuminate\Support\Facades\Validator;
use Carbon\Carbon;
use App\Models\User;
use Illuminate\Http\Request;
use DB;

class ShipmentsController extends Controller
{
    public function index() 
     {
        $receivers = User::select('users.*')
                        ->where('users.type','business')
                        ->get();

        $transporters = User::select('users.*')
                        ->where('users.type','driver')
                        ->get();

        $shipments = Shipment::select('shipments.*',DB::Raw('drivers.full_name as driver'),
                                        DB::Raw('buyers.full_name as buyer'))
                              ->join('users as drivers','drivers.id','shipments.transporter')
                              ->join('users as buyers','buyers.id','shipments.receiver')
                              ->get();
         return view('pages.shipments',[ 'receivers' => $receivers, 'transporters' => $transporters,'shipments' => $shipments ]);
     }

    public function create(Request $request) 
     {
         $validator = Validator::make($request->all(),[
             'receiver_id' => 'required',
             'transpoter_id' => 'required',
             'truck_no' => 'required',
             'permit'  =>  'required',
             'weight' => 'required',
             'from_address'  =>  'required',
             'to_address' => 'required',
             'count' => 'required',

         ]);
 
         if($validator->fails()){
             return response()->json(['error' => $validator->errors()->first()],200);
         };
        
         $shipment = new Shipment();
         $shipment->truck_no = $request->truck_no;
         $shipment->permit = $request->permit;
         $shipment->permit_date = "23/04/2021";
         $shipment->weight = $request->weight;
         $shipment->from_address = $request->from_address;
         $shipment->to_address = $request->to_address;
         $shipment->count = $request->count;
         $shipment->receiver = $request->receiver_id;
         $shipment->transporter = $request->transpoter_id;
         $shipment->status = "shipping";
         $shipment->arrival = $arrival = Carbon::now();
         $shipment->departure = $departture = Carbon::now();
         $shipment->product = $request->product;
         $shipment->signature = "s.sign";
         $shipment->save();
         return back();
     }

     public function show($id)
     {
        $shipment = Shipment::select('shipments.*',DB::Raw('drivers.full_name as driver'),
                                    DB::Raw('buyers.full_name as buyer'))
                            ->join('users as drivers','drivers.id','shipments.transporter')
                            ->join('users as buyers','buyers.id','shipments.receiver')
                            ->where('shipments.id',$id)
                            ->first();
         return view('pages.shipment',['shipment' => $shipment ]);
     }
}
