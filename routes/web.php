<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

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

/* Route::get('/', function () {
    return view('welcome');
});
 */
Route::get('/', [PostController::class,'index'])->name('posts.index');
Route::get('posts/{post}', [PostController::class,'show'])->name('posts.show');
Route::get('category/{category}', [PostController::class,'category'])->name('posts.category');
Route::get('tag/{tag}', [PostController::class,'tag'])->name('posts.tag');
Route::get('tag/{tag}', [PostController::class,'tag'])->name('posts.tag');
// Route::post('/comentar', [PostController::class,'comentar'])->name("posts.comentar");


 
Route::get('/login-google', function () {
    return Socialite::driver('google')->redirect();
});
 
Route::get('/google-callback', function () {
    $user = Socialite::driver('google')->user();
    //dd($user);
    
    $userExists = User::where('email', $user->email)->first();
    if($userExists){
        Auth::login($userExists);
    } else {
       $userNew = User::create([
            'name'=> $user->name,
            'email'=> $user->email,
            'password'=> Illuminate\Support\Facades\Hash::make('1234')
        ]);

        Auth::login($userNew);
    }

    return redirect ('/');

});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});


Route::post('comentar-post', [PostController::class, 'comment'])->name('comentar');
