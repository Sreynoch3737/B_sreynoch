<?php

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

Route::get('/', function () {
    return view('welcome');
});
Route::get("Example", function(){
 return "This is my first route";
});
 Route::get("user",function($id){
  return "this has id".$id;
 });

 Route::get("/users/{id}/{name}", function($id,$name){
    $data['user_id']=$id;
    $data['user_name']=$name;

    return view( 'test_route', $data);
 });
