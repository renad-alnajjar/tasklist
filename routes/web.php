<?php

//use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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

Route::get('/', function () {
    $name = 'Renad Alnajjar';
    $age=20;
    // return view('about',$name)->with('age',$age);
    return view('about',compact('name','age'));
});
Route::post('send',function(Request $request){
    $name =$request->myname;
    return view('about',compact('name'));
});
