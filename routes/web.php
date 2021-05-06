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
Route::get('todo', function () {
 $tasks=DB::table('tasks')->get();
   return view('Todo',compact('tasks'));
});
/*
Route::get('/tasks', function () {
    $tasks=DB::table('tasks')->get();
     return view('tasks',compact('tasks'));
   });
   Route::get('tasks/show/{id}', function($id) {
    $task = DB::table('tasks')->find($id);
      return view('show',compact('task'));
   });*/

   Route::post('store', function (Request $request) {

   DB::table('tasks') ->insert([ 
      'title'=>$request->title  
    ]);
     
     return redirect()->back();
});
Route::get('/todo', function () {

$tasks = DB::table('tasks')
->orderBy('title', 'ASC')
->get();
return view('Todo',compact('tasks'));

});

 