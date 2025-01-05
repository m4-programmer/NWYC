<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Media;
use App\Models\User;
use App\Models\VideoTag;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

class ManageVideosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $videos = Media::where("type", "video")->orderBy('created_at','desc')->with('tag')->get();
        $tags = VideoTag::get();
        $users = User::where("role", "user")->get();
        return view('admin.videos.index',compact('videos', 'tags', 'users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.videos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|unique:media,title,NULL,id,type,video',
            'url' => 'required',
            'description' => 'filled',
            'cover'=>'nullable|mimes:png,jpg',
            'video_tag_id' => 'required|exists:video_tags,id',
            'user_id' => 'required|exists:users,id',
            "created_at" => "nullable"
        ]);
        if ($request->hasFile('cover')) {
            $cover = 'asset/uploads/userImage' . '/' . Str::random(32) . '.' . $request->cover->getClientOriginalExtension();
            $request->cover->move(public_path('asset/uploads/userImage'), $cover);
        }
        $data['slug'] = Str::slug($request->title);
        $data['type'] = Media::VIDEO;
        $data['status'] = true;
        $data['cover'] = isset($cover) ? $cover : null;
        if ($request->created_at){
            $data['created_at'] = Carbon::parse($request->created_at);
        }
        $result = Media::create($data);
        if ($result){
//            dd($result);
            $message = 'video created successfully';
            Session::put('message',$message);
//            return "success";
            return back()->with(['success',$message]);
        }else{
            $message = 'an error occurred';
            Session::put('message',$message);
            return "An error occurred";
            return back()->with(['error',$message]);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Media $video)
    {
        cache()->forget($video->url);
        $video->delete();
        return back()->with("message", "deleted successfully");
    }
}
