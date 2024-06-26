<?php

namespace App\Http\Controllers;

use App\Models\mymodel;
use Illuminate\Http\Request;

class abc extends Controller
{
    function newfunc(){
        return view ('newfile');
    }
    function register(Request $request){
        $model = new mymodel();
        $model->name = $request->name;
        $model->email = $request->email;
        $model->password = $request->password;

        $model->save();


        return redirect()->back()->with('success','data has been saved');
    }
    function view(){
        $userdata = mymodel::all();
        return view ('data',compact('userdata'));
    }
}
