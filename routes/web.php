<?php

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

Route::get('/about', function () {
    $name = 'Renad  Saher';
$age=20;
  //  return view('about',$name)->with('age',$age);
  return view('about',compact('name','age'));
});
   Route::post('send',function(Request $request){
   
    $name = $request->myname;
    return view('about',compact('name')) ;

});
Route::get('tasks', function () {
    $tasks =[
        'first-tasks'=>'Task1',
        'second-tasks'=>'Task2',
        'third-tasks'=>'Task3'];
    return view('Tasks',compact('tasks'));
});

Route::get('/show/{id}', function ($id) {
    $tasks =[
        'first-tasks'=>'Task1',
        'second-tasks'=>'Task2',
        'third-tasks'=>'Task3'
    ];
    $task = $tasks[$id];
    return view('show',compact('task'));
});
