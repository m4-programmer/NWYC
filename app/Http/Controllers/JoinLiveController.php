<?php

namespace App\Http\Controllers;

use App\Models\Media;
use Illuminate\Http\Request;

class JoinLiveController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $live = Media::video()->latest()?->first()?->append("url_string");
        return view('live', compact("live"));
    }
}
