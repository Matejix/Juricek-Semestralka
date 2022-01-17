<?php

namespace App\Http\Controllers;

use App\Models\Animal;
use App\Models\Article;
use App\Models\Comment;
use Illuminate\Http\Request;

class Discover_MoreController extends Controller
{
    public function show(int $id)
    {
        return view('pages.show_Discover')->with(['article' => Article::where('animal_id',$id)->first(), 'comments' => Comment::all()]);
    }

}