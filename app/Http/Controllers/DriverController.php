<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Validator;

class DriverController extends Controller
{
    public function index() 
     {
        $drivers = User::select('users.*')
        ->where('users.type','driver')
        ->get();
         return view('pages.drivers',['drivers' => $drivers ]);
     }

     public function create(Request $request) 
     {
         $validator = Validator::make($request->all(),[
             'email' => 'required',
             'name'  =>  'required',
             'lisence' => 'required',
             'phone_no' => 'required'
         ]);
 
         if($validator->fails()){
             return response()->json(['error' => $validator->errors()->first()],200);
         };
 
         $buyer = new User();
         $buyer->email = $request->email;
         $buyer->full_name = $request->name;
         $buyer->phone_no = $request->phone_no;
         $buyer->company = $request->company;
         $buyer->licence = $request->lisence;
         $buyer->type = "driver";
         $buyer->save();
         return back();
     }
     public function show($id)
     {
         $driver = User::findOrFail($id)
                        ->first();
         return view('pages.driver',['driver' => $driver ]);
     }
}
