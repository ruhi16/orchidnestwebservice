<?php

use Illuminate\Support\Facades\Route;

use App\Models\User;
use App\Models\Associate_role;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');




// Route::group(['prefix' => 'guest', 'middleware' => ['web', 'isGuest']], function(){
//     Route::get('/dashboard', function () { return "Guest Dashboard";})->name('guest.dashboard');
// });

// Route::group(['prefix' => 'agent', 'middleware' => ['web', 'isGuest']], function(){
//     Route::get('/dashboard', function () { return "Agent Dashboard";})->name('agent.dashboard');
// });

// Route::group(['prefix' => 'admin', 'middleware' => ['web', 'isGuest']], function(){
//     Route::get('/dashboard', function () { return "Admin Dashboard";})->name('admin.dashboard');
// });

// Route::group(['prefix' => 'superadmin', 'middleware' => ['web', 'isGuest']], function(){
//     Route::get('/dashboard', function () { return "Super Admin Dashboard";})->name('superadmin.dashboard');
// });



// Route::get('/dashboard', function () {
//     // echo 'Hello from dashboard'.'<br/>';
//     // echo '<br/>Auth User:'.auth()->user()->name;
//     // echo '<br/>Auth User\'s Associate Role:'.auth()->user()->associate_role_id;
//     // echo '<br/>Auth User\'s Associate Role With:'.auth()->user()->associate_role;
//     // echo '<br/>Auth:' . Auth::user();
//     // echo '<br/>Associate Role 1(guest):' . Associate_role::where('id', 1)->first()->users;
//     // echo '<br/>Associate Role 1(guest):' . Associate_role::where('id', 1)->first()->users->where('id', Auth::user()->id)->first();
//     if (Auth::user() && Auth::user()->associate_role_id == 4) {
//         // Super Admin or Programmer
//         // return redirect(route('superadmin.dashboard'));
//         return view('dashboard', ['user' => Auth::user()]); 
//     }

//     if (Auth::user() && Auth::user()->associate_role_id == 3) {
//         // Admin or Owner, Organiser
//         // return redirect(route('admin.dashboard'));
//         return view('dashboard', ['user' => Auth::user()]); 
//     }

//     if (Auth::user() && Auth::user()->associate_role_id == 2) {
//         // Sub Admin or Agents
//         // return redirect(route('agent.dashboard'));
//         return view('dashboard', ['user' => Auth::user()]); 
//     }

//     if (Auth::user() && Auth::user()->associate_role_id == 1) {
//         // User or Guests
//         // return redirect(route('guest.dashboard'));
//         return view('dashboard', ['user' => Auth::user()]); 
//     }

//     // if (Auth::user()) {
//     //     // Any other authenticated users
//     //     return redirect(route('guest.dashboard'));
//     // }

//     // return view('dashboard');
// })->middleware(['auth'])
// //   ->middleware(['auth', 'verified'])
//     ->name('dashboard');

  



require __DIR__.'/auth.php';