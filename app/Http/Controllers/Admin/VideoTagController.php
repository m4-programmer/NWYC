<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\VideoTag;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class VideoTagController extends Controller
{
    public function index()
    {
        $categories = VideoTag::orderBy('created_at','desc')->get()->load('media');

        return view('admin.video_tags.index',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.video_tags.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|unique:video_tags,title',
            'status'=>'required'
        ]);
        $slug = Str::slug($request->title);
        $result = VideoTag::create([
            'title'=>$request->title,
            'status'=>$request->status,
            'user_id'=>$request->user()->id ?? 1,
            'slug'=>$slug
        ]);
        if ($result){
            return back()->with('success','video tags created successfully');
        }else{
            return back()->with('error','an error occurred');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(VideoTag $videoTags)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(VideoTag $videoTags)
    {
        return view('admin.video_tags.edit',compact('videoTags'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, VideoTag $videoTags)
    {
        $request->validate([
            'title' => 'required|unique:tags,title,'.$videoTags->id,
            'status'=>'required'
        ]);
        $slug = Str::slug($request->title);
        $result = $videoTags->update([
            'title'=>$request->title,
            'status'=>$request->status,
            'user_id'=>$request->user()->id ?? 1,
            'slug'=>$slug
        ]);
        if ($result){
            return back()->with('success','video tags updated successfully');
        }else{
            return back()->with('error','an error occurred');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(VideoTag $videoTags)
    {
        try {
            $videoTags->delete();
            return back()->with('success','library tag deleted successfully');
        }catch (ModelNotFoundException $e){
            return back()->with('error','category not found');
        }
    }
}
