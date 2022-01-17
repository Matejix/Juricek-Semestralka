<?php

namespace App\Http\Controllers;

use App\Models\Animal;
use App\Models\Donate;
use App\Models\Article;
use App\Models\Comment;
use App\Models\Gallery;
use App\Models\Subscriber;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function homePage(){
        return view("pages.index", [
            'animals' => Animal::orderby('updated_at','DESC')->get(),
            'articles' => Article::all(),
        ]);
    }
    public function discoverMorePage(){
        return view("pages.discover_more", [
            'articles' => Article::all(),
            'comments' => Comment::all(),
        ]);
    }
    public function aboutUsPage(){
        return view("pages.aboutUs",[
            'articles' => Article::all(), 
            'donates' => Donate::all(),
            'subscribers' => Subscriber::all(),
        ]);
    }
    public function galleryPage(){
        return view("pages.gallery", [
            'galleries' => Gallery::all(),
        ]);
    }
    public function articlePage(){
        return view("pages.articles",[
            'articles' => Article::all(),
        ]);
    }

    public function adminPage(){
        return view('admin.index', [
            'animals' => Animal::all(), 
            'articles' => Article::all(), 
            'galleries' => Gallery::all(),
            'comments' => Comment::all(),
            'donates' => Donate::all(),
            'subscribers' => Subscriber::all(),
        ]);
    }
}
