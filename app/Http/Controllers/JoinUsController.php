<?php

namespace App\Http\Controllers;

use App\Models\JoinUs;
use App\Notifications\NotifyAdminOfNewJoinRequest;
use App\Service\HelperService;
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
        $request->validate([
            "first_name" => "required",
            "last_name" => "required",
            "email" => "required|email",
            "phone" => "required",
            "text" => "string"
        ]);
        $joinRequest = JoinUs::create($request->all());

        HelperService::mailManagement(new NotifyAdminOfNewJoinRequest($joinRequest));

        return back()->with("success", "Thank you");
    }
}
