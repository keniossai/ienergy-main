<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontEndController;
use App\Http\Controllers\DashBoardController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\CommentsController;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LockScreenController;
use App\Http\Controllers\EventDashboardController;

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



Route::get('/', [FrontEndController::class, 'homepage'])->name('homepage');
Route::get('newsdetails/{slug}', [FrontEndController::class, 'newsdetails'])->name('pages.newsdetails');
Route::get('/{slug}', [FrontEndController::class, 'category'])->name('pages.latestnews');




Route::get('sector/regional', [FrontEndController::class, 'region'])->name('pages.region');

// Region Location Routes
Route::get('/nigeria', [FrontEndController::class, 'nigeria'])->name('nigeria');


// News Navigation Routes
Route::get('/people', [FrontEndController::class, 'people'])->name('people');
Route::get('/insights', [FrontEndController::class, 'insights'])->name('insights');
Route::get('/rigs-vessel', [FrontEndController::class, 'gas'])->name('gas');
Route::get('/opinion', [FrontEndController::class, 'opinion'])->name('opinion');
Route::get('/energy-p', [FrontEndController::class, 'ep'])->name('ep');
Route::get('/exclusive-news', [FrontEndController::class, 'exclusive'])->name('exclusive');
Route::get('/africa-news', [FrontEndController::class, 'africa'])->name('africa');
Route::get('/energy-transition', [FrontEndController::class, 'development'])->name('development');
Route::get('/frequent-ask-question', [FrontEndController::class, 'faq'])->name('faq');
Route::get('/energy-finance', [FrontEndController::class, 'energyfinance'])->name('energyfinance');



Route::get('/site/about-us', [FrontEndController::class, 'about'])->name('about');
Route::get('/site/contact-us', [FrontEndController::class, 'contact'])->name('contact');
Route::post('/site/contact-us', [FrontEndController::class, 'send_message'])->name('pages.contact');


Auth::routes();
Route::group(['prefix' => 'admin', 'middleware' => ['auth:sanctum', 'verified']], function()
{
    Route::get('/dashboard', [DashBoardController::class , 'index'])->name('dashboard');

    Route::resource('category', CategoryController::class);
    Route::resource('post', PostController::class);
    Route::resource('tag', TagController::class);
    Route::resource('events', EventDashboardController::class);
    
    // Route::get('settings', SettingsController::class);
    Route::get('/settings', [SettingsController::class, 'edit'])->name('settings.edit');
    Route::post('/settings', [SettingsController::class, 'update'])->name('settings.update');
    // User Route
    Route::resource('users', UserController::class);
    Route::resource('lockscreen', LockScreenController::class);
    Route::get('/profile', [UserController::class, 'profile'])->name('users.profile');
    Route::post('/profile', [UserController::class, 'profile_update'])->name('users.profile.update');

    Route::get('comment', [CommentsController::class, 'index'])->name('index');
    Route::get('calendar', [DashBoardController::class, 'calendar'])->name('index');
});
