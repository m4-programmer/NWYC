<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class ManageAuthorsController extends Controller

{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::where("role", "user")->orderBy('created_at','desc')->get();
        return view('admin.authors.index',compact('users'));
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'filled',
            'image'=>'nullable|mimes:png,jpg',
        ]);
        if ($request->hasFile('image')) {
            $image = 'asset/uploads/authorImage' . '/' . Str::random(32) . '.' . $request->image->getClientOriginalExtension();
            $request->image->move(public_path('asset/uploads/authorImage'), $image);
        }
        $data['image'] = isset($image) ? $image : null;
        $data['password'] = Hash::make($request?->password ?? "password");
        $data['role'] = "user";
        $result = User::create($data);

        return $result ? back()->with('success','user created successfully') : back()->with('error','an error occurred');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $author)
    {
        cache()->forget($author->url);
        $author->delete();
        return back()->with("success", "user deleted successfully");
    }
}
