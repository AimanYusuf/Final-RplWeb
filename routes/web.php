<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;
use App\Models\Category;
use App\Http\Controllers\PostController;
use App\Http\Controllers\GalleryPostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardPostController;
use App\Http\Controllers\MassageController;
use App\Models\Gallery;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Home
Route::get('/', function () {
    return view('home', [
        "title" => "Be your Friends and your familiy",
        "active" => "Home",
        "posts" => Post::with('category')->latest()->get(),
        "galeries" => Gallery::latest()->paginate(5)
    ]);
});
// Blog
Route::get('/blog', [PostController::class, 'index']);
Route::get('/blog/{post:slug}', [PostController::class, 'show']);
Route::get('/blog/all-categories', function () {
    return view('categories', [
        "title" => "Blog All Categories",
        "categories" => Category::all()
    ]);
});
// Gallery
Route::get('/gallery', [GalleryPostController::class, 'guest']);
// Contact us
Route::get('/contact-us', function () {
    return view('contactUs', [
        "active" => "Contact Us",
        "title" => "Contact Us"
    ]);
});
// Fun Game
Route::get('/fun-game', function () {
    return view('funGame', [
        "active" => "Fun Game",
        "title" => "Fun Game"
    ]);
});
//Login
Route::get('/wp-admin', [LoginController::class, 'index'])->middleware("guest")->name('login');
Route::post('/wp-admin', [LoginController::class, 'auth']);
Route::post('/logout', [LoginController::class, 'logout']);
// Dashboard
Route::get('/dashboard', function () {
    return view('dashboard.dashboard', [
        "title" => "Dashboard",
        "active" => "Dashboard",
        "posts" => Post::with('author', 'category')->latest()->get(),
        "gallery" => Gallery::latest()->get(),
    ]);
})->middleware("auth");
// dashboard Posts
Route::get('/dashboard/posts/checkSlug', [DashboardPostController::class, 'checkSlug'])->middleware("auth");
Route::resource('/dashboard/posts', DashboardPostController::class)->middleware("auth");
// dashboard Gallery
Route::resource('/dashboard/gallery', GalleryPostController::class)->middleware("auth");
// dashboard Massage
Route::get('/dashboard/massage', [MassageController::class, 'index'])->middleware('auth');
//Game
Route::get('/quiz-bahasa-jawa', function () {
    return view('game.quiz.index', [
        "active" => "Game",
        "title" => "Quiz"
    ]);
});
Route::get('/tebakGambar-bahasa-jawa', function () {
    return view('game.tebakGambar.index', [
        "active" => "Game",
        "title" => "Quiz  Tebak gambar"
    ]);
});
