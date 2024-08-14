<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function form(Request $request){
        $user=new User;
        $user->name=$request['name'];
        $user->email=$request['message'];
        $user->password=md5($request['password']);
        $user->save();
        dd("Thanks for Contaction me");
    }
}
