<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Validator;


class ClientController extends Controller
{
    public function index() 
     {
        $buyers = User::select('users.*')
        ->where('users.type','business')
        ->get();
         return view('pages.clients',['buyers' => $buyers ]);
     }

    public function create(Request $request) 
    {
        $validator = Validator::make($request->all(),[
            'email' => 'required',
            'name'  =>  'required',
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
        $buyer->type = "business";
        $buyer->save();
        return back();
    }
    public function show($id)
    {
        $buyer = User::findOrFail($id)
        ->first();
        return view('pages.client',['buyer' => $buyer ]);
    }
    // public function update($id)
    // {
    //     $v
    // }
}
