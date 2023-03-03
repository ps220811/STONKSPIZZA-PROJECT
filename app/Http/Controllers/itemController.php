<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class itemController extends Controller
{
    public function store(Request $request){
        $request->validate([
            'id' => 'required',
            'name' => 'required',
            'price' => 'required',
            
        ]);
    }
}
