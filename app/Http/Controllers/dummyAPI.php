<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dummyAPI extends Controller
{
    public function test(Request $request)
    {
        return response()->json($request->all());
    }
}
