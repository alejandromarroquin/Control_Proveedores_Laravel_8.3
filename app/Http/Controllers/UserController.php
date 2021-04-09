<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            $permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyz';
            User::create([
                'name'=>$request->name,
                'email'=>$request->email,
                'type'=>"P",
                'rfc'=>$request->rfc,
                'password'=>\Hash::make(substr(str_shuffle($permitted_chars), 0, 10))
            ]);
            return "Registro correcto";
        } catch (\Exception $e) {
            return "Registro incorrecto";
        }
    }

    public function getProviders(){
        try {
            $providers=User::all()->where('type',"P");
            return view('showproviderssystem',compact('providers'));
        } catch (\Exception $e) {
            return $e;
            return "Error";
        }
    }
}
