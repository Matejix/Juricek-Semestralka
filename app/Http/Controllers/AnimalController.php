<?php

namespace App\Http\Controllers;

use App\Models\Animal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AnimalController extends Controller
{
     /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.create_Animal');
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
            'latin_name' => ['required', 'string'],
            'slovak_name' => ['required', 'string'],
            'lifespan' => ['required', 'integer'],
            'number' => ['required', 'integer'],
            'species' => ['required', 'string'],
            'occurrence' => ['required', 'string'],
            'endangered' => ['required', 'string'],
            'image' => ['required', 'mimes:jpg,jpeg,bmp,png'],
        ]);

        $image = request()->file('image')->store('animals', ['disk' => 'public']);

        $animal = Animal::create([
            'latin_name' => $request->latin_name,
            'slovak_name' => $request->slovak_name,
            'lifespan' => $request->lifespan,
            'number' => $request->number,
            'species' => $request->species,
            'occurrence' => $request->occurrence,
            'endangered' => $request->endangered,
            'image' => $image,
        ]);
        

        return redirect('/admin#animal');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Animal  $animal
     * @return \Illuminate\Http\Response
     */
    public function edit(int $id)
    {
        return view('admin.edit_Animal')->with('data',Animal::where('id',$id)->first());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Animal  $animal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, int $id)
    {
        $request->validate([
            'latin_name' => ['required', 'string'],
            'slovak_name' => ['required', 'string'],
            'lifespan' => ['required', 'integer'],
            'number' => ['required', 'integer'],
            'species' => ['required', 'string'],
            'occurrence' => ['required', 'string'],
            'endangered' => ['required', 'string'],
        ]);


        $donate = Animal::where('id',$id)->update([
            'latin_name' => $request->latin_name,
            'slovak_name' => $request->slovak_name,
            'lifespan' => $request->lifespan,
            'number' => $request->number,
            'species' => $request->species,
            'occurrence' => $request->occurrence,
            'endangered' => $request->endangered,
        ]);
        

        return redirect('/admin#animal');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Animal  $animal
     * @return \Illuminate\Http\Response
     */
    public function destroy(int $id)
    {
        $animal = Animal::where('id',$id)->first();
        Storage::disk('public')->delete($animal->image);
        $animal->delete();
        return redirect('/admin#animal');
    }
}
