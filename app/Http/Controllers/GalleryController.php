<?php

namespace App\Http\Controllers;

use App\Models\Animal;
use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GalleryController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.create_Gallery')->with(['animals' => Animal::all()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'image' => ['required', 'mimes:jpg,jpeg,bmp,png'],
            'animal_id' => ['required', 'integer'],
        ]);

        $image = request()->file('image')->store('gallery', ['disk' => 'public']);

        $gallery = Gallery::create([
            'image' => $image,
            'animal_id' => $request->animal_id,
        ]);
        

        return redirect('/admin#gallery');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function destroy(int $id)
    {
        $gallery = Gallery::where('id',$id)->first();
        Storage::disk('public')->delete($gallery->image);
        $gallery->delete();
        return redirect('/admin#gallery');
    }
}
