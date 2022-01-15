<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\AnimalController;
use App\Http\Controllers\DonateController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\GalleryController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [PagesController::class, "homePage"])->name("home-page");
Route::get('aboutUs', [PagesController::class, "aboutUsPage"])->name("aboutUs-page");
Route::get('discoverMore', [PagesController::class, "discoverMorePage"])->name("discoverMore-page");
Route::get('articles', [PagesController::class, "articlePage"])->name("articles-page");
Route::get('gallery', [PagesController::class, "galleryPage"])->name("gallery-page");
Route::get('admin/', [PagesController::class, "adminPage"])->name("admin-page");

Route::resource("donate", DonateController::class)->only(["index", "store"]); // donate
Route::resource("animal", AnimalController::class)->only(["store", "destroy", "update", "create", "edit"]);
Route::resource("article", ArticleController::class)->only(["store", "destroy", "update", "create", "edit"]);
Route::resource("gallery", GalleryController::class)->only(["store", "destroy", "create"]);

require __DIR__.'/auth.php';
