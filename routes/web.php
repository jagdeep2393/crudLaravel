<?php

use App\Http\Controllers\Agent\AgentController;
use App\Http\Controllers\Auth\LoginController;
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
Route::get('/',function(){
    if(auth()->check())
    {
        $user_level =auth()->user()->user_level; 
        if($user_level==6)
        {
            return redirect()->route('agent.dashboard');
        }
        else if($user_level==7)
        {

        }
        else{
            return view('auth.login');  
        }
    }
  return view('auth.login');  
});
Route::get('/login',function(){
    return redirect('/');
});
Route::post('/login',[LoginController::class,'login'])->name('login');
Route::get('/logout',[LoginController::class,'logout'])->name('logout');

Route::middleware('auth')->group(function(){
    Route::get('/agent/dashboard',[AgentController::class,'dashboard'])->name('agent.dashboard');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
