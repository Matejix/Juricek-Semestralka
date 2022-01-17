<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'content' => ['required', 'string'],
            'article_id' => ['required', 'integer'],
            'user_id' => ['required', 'integer']
        ]);

        $comment = Comment::create([
            'content' => $request->content,
            'article_id' => $request->article_id,
            'user_id' => $request->user_id,
        ]);

        return redirect()->back();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function edit(int $id)
    {
        return view('pages.edit_Comment')->with('data',Comment::where('id',$id)->first());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, int $id)
    {
        $request->validate([
            'content' => ['required', 'string'],
        ]);

        $comment = Comment::where('id',$id)->update([
            'content' => $request->content,
        ]);

        $data = Comment::where('id',$id)->first();
        return redirect('/discover'.'/'.$data->article->animal->id.'#comments');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function destroy(int $id)
    {
        $comment = Comment::where('id',$id)->first();
        $data = Comment::where('id',$id)->first();
        $comment->delete();
        return redirect()->back();
        //return redirect('/discover'.'/'.$data->article->animal->id.'#comments');
    }
}
