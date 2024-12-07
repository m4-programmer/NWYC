<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JoinUsController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function index(Request $request)
    {
        return view('join_us');
    }

    public function store(Request $request)
    {
        return response()->json(["success"=>true, "message"=>"successful"], 200);
    }
}
