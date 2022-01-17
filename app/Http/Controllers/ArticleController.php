<?php

namespace App\Http\Controllers;

use App\Models\Animal;
use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.create_Article')->with(['animals'=> Animal::all()]);
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
            'text' => ['required', 'string'],
            'animal_id' => ['required', 'integer'],
        ]);

        $article = Article::create([
            'text' => $request->text,
            'animal_id' => $request->animal_id,
        ]);
        

        return redirect('/admin#articles');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit(int $id)
    {
        return view('admin.edit_Article')->with('data',Article::where('id',$id)->first());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, int $id)
    {
        $request->validate([
            'text' => ['required', 'text'],
        ]);


        $donate = Article::where('id',$id)->update([
            'text' => $request->text,
        ]);
        

        return redirect('/admin#articles');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy(int $id)
    {
        $article = Article::where('id',$id);
        $article->delete();
        return redirect('/admin#articles');
    }
}
