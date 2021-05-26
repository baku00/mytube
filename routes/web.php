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


Auth::routes();

Route::get('/', [App\Http\Controllers\VideoController::class, 'index'])->name('home');
Route::get('/home', [App\Http\Controllers\VideoController::class, 'index'])->name('home');
Route::get('/callVideo/{number}', [App\Http\Controllers\VideoController::class, 'callVideo'])->name('callVideo');
Route::get('/search', [App\Http\Controllers\VideoController::class, 'search'])->name('search');

Route::resource('/video',App\Http\Controllers\VideoController::class)->middleware(['create'=>'auth']);
Route::resource('/comment',App\Http\Controllers\CommentController::class);
Route::resource('/like',App\Http\Controllers\LikeController::class);
Route::resource('/dislike',App\Http\Controllers\DislikeController::class);
Route::resource('/subscriber',App\Http\Controllers\SubscriberController::class);
Route::resource('/creator',App\Http\Controllers\CreatorController::class);

Route::get('/subscriptions',[App\Http\Controllers\SubscriptionController::class,'index'])
->name('subscriptions');

Route::get('/subscribers',[App\Http\Controllers\SubscriberController::class,'index'])
->name('subscribers');

Route::group(['prefix'=>'maquettes','as'=>'maquettes'],function(){
  Route::get('/',['uses'=>function(){
    return view('maquettes.home');
  }]);
  Route::get('/video',['as'=>'.video',function(){
    return view('maquettes.video');
  }]);
  Route::get('/publication',['as'=>'.publication',function(){
    return view('maquettes.publication');
  }]);
  Route::get('/video-comment',['as'=>'.video-comment',function(){
    return view('maquettes.video-comment');
  }]);
  Route::get('/video-likées',['as'=>'.video-likées',function(){
    return view('maquettes.video-likées');
  }]);
  Route::get('/abonnements',['as'=>'.abonnements',function(){
    return view('maquettes.abonnements');
  }]);
  Route::get('/abonnés',['as'=>'.abonnés',function(){
    return view('maquettes.abonnés');
  }]);
});
