<?php

use App\Http\Controllers\Example\FirstController;
use App\Http\Controllers\Example\SecondController;
use Illuminate\Http\Request;
use App\Http\Controllers\LearnController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function() {

 
    return view('welcome');
});

// Route::get('/about', function () {

//     return view('about');

// })->name('about.us');


// Route::get('/contact', function () {
//     return view('contact');
// })->name('contact.us');


Route::get('/contact-us', [FirstController::class, 'index'])->name('contact.us');

// Route::get('/about-us', [SecondController::class, 'test']);


Route::post('/store/contact', [FirstController::class, 'store'])->name('store.contact');

Route::get('/testone', [FirstController::class, 'about_index'])->name('about.us');

Route::get('/laravel', [FirstController::class, 'laravel'])->name('laravel');

Route::get('/test',function (Request $request){
    Log::info('this is your age'.rand(1,50));
    return redirect()->to('/');
 
});

Route::get('/all', function(Request $request){
    return $request->session()->all();
    // $request->session()->flush();
});
//__Invokable Route__//


// Route::get('/test', LearnController::class);

Route::get('/countery', [FirstController::class,'countery'])->name('countery')->middleware('countery');

Route::resource('photos', PhotoController::class);

// Route::get('/itlogiko', function(){
//     return view('itlogiko');

// })->middleware('itlogiko');



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';