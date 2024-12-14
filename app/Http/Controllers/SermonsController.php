<?php

namespace App\Http\Controllers;

use App\Models\Media;
use Illuminate\Http\Request;

class SermonsController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $sermons = Media::video()
            ->when($request->query("tag"), function ($query) use ($request){
                $query->whereHas("tag", function ($q) use ($request){
                    $q->where("slug", $request->query("tag"));
                });
            })
            ->latest()
            ->get();
        return view('sermons', compact('sermons'));
    }
}
