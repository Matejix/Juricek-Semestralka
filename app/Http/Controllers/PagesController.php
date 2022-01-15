<?php

namespace App\Http\Controllers;

use App\Models\Animal;
use App\Models\Article;
use App\Models\Gallery;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function homePage(){
        return view("pages.index");
    }
    public function discoverMorePage(){
        return view("pages.discover_more");
    }
    public function aboutUsPage(){
        return view("pages.aboutUs");
    }
    public function galleryPage(){
        return view("pages.gallery");
    }
    public function articlePage(){
        return view("pages.articles");
    }

    public function adminPage(){
        $animals = Animal::get();
        return view('admin.index', ['animals' => Animal::all(), 'articles' => Article::all(), 'galleries' => Gallery::all()]);
    }
}
