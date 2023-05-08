<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;

class GalleryPostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.gallery.index', [
            "title" => "Gallery",
            "galeries" => Gallery::latest()->paginate(8)
        ]);
    }
    public function guest()
    {
        return view('gallery', [
            "title" => "Gallery",
            "active" => "Gallery",
            "galeries" => Gallery::latest()->paginate(8)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.gallery.create', [
            "title" => "Gallery"
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            "title" => "required|max:255",
            "image" => "required|image|file|max:2048",
            "caption" => "required|max:200"
        ]);

        if ($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('gallery-images');
        }


        Gallery::create($validatedData);

        return redirect('/dashboard/gallery')->with('success', 'New Post has been added!');
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
    public function edit(Gallery $gallery)
    {
        return view('dashboard.gallery.edit', [
            "title" => "Gallery",
            "gallery" => $gallery
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Gallery $gallery)
    {
        $rules = [
            "title" => "required|max:255",
            "caption" => "required",
            "image" => "required|image|file|max:2048",
        ];

        if ($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('gallery-images');
        }

        $validatedData = $request->validate($rules);


        Gallery::where('id', $gallery->id)->update($validatedData);

        return redirect('/dashboard/posts')->with('success', 'New Post has been updated..!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Gallery $gallery)
    {
        Gallery::destroy($gallery->id);

        return redirect('/dashboard/gallery')->with('success', 'New Post has been deleted..!');
    }
}
