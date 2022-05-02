<?php

use Illuminate\Support\Facades\Route;
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
    $notification = App\Models\Follower::where('followers.follow_id','=', Auth::user()->id)
                    ->join('users','users.id','=','followers.user_id')
                    ->where('status', 0)
                    ->get();
        
    $followersUser = App\Models\Follower::where('follow_id','=', Auth::user()->id)
                    ->join('users','users.id','=','user_id')
                    ->where('status', 1)
                    ->get();

    $followingUser = App\Models\Follower::where('user_id','=', Auth::user()->id)
                    ->join('users','users.id','=','follow_id')
                    ->where('status', 1)
                    ->get();

    return view('welcome', compact('followersUser','followingUser','notification'));
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/user/{user}', 'ProfileController@profile')->name('profile');

Route::post('/search', 'SearchController@search')->name('search');

Route::get('/user','FollowingController@allUsers')->name('allusers'); 

Route::get('/following/{id}','FollowingController@following')->name('following');

Route::get('/notification','FollowingController@notification')->name('notification');

Route::get('/accept/{id}','FollowingController@accept')->name('accept');

Route::get('/decline/{id}','FollowingController@decline')->name('decline');

Route::get('/following','FollowingController@followingUser')->name('followingUser');

Route::get('/followers','FollowingController@followersUser')->name('followersUser');

Route::get('/unfollow/{id}','FollowingController@unfollow')->name('unfollow');
