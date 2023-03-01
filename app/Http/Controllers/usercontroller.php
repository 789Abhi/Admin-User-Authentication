<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class usercontroller extends Controller
{
    //
    function formData(Request $request)
    {
        $request->validate([
            'username'=>'required',
            'password'=>'required'
        ]);
        return $request->input();
    }
}
