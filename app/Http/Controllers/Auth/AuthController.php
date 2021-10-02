<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use App\Models\Shipment;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function index()
    {
        $driver = User::select('users.*')
                        ->where('users.type','driver')
                        ->get();
        $driver = count($driver);

        $shipment = Shipment::select('shipments.*')
                            ->where('shipments.status','shipping')
                            ->get();
        $shipment = count($shipment);
        return view('welcome',['driver' => $driver,'shipment' => $shipment]);
    }

    public function register()
    {
        return view('auth.register');
    }

    public function login()
    {
        return view('auth.login');
    }

    public function logout()
    {
        auth()->logout();

        return response()->json(['message' => 'Successfully logged out']);
    }
}
