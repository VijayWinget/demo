<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\MonthController;
use App\Http\Controllers\PostController;
use Illuminate\Http\Request;
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


// blade template creation
// Route::view('layout',"layouts.default");
Route::view('/','home');
Route::view('/contact','contact');























//  below basics
Route::get('/heool', function () {
    return view('welcome');
});

Route::get('/check', function () {
    return "hello World";
});


Route::get('/user-form',function(){
    $title= "Send User Information";
    $title1= "User Login Form";
    // return view('user_form',['title'=>$title]);
    // return view('user_form',compact('title','title1'));
    return view('user_form')->with('title',$title)->with('title1',$title1);
});

Route::post('/getUserData',function(Request $request){
$name = $request -> input('name');
$password = $request ->input('password');
return redirect('user-form')->with('msg',"Successfully");
});


// Route::get('page/{id}/{type?}', function ($id,$type=null) {
//     if ($id==1 && $type=='page') {
//         return "first Page";
//     } else if ($id==1 && $type=='number') {
//         return "first number";
//     }elseif ($id==1 && $type==null) {
//         return "Some Thing else";
//     }
// });
// Route::view('sample-page','page');

Route::get('sample-page/{id}/{type?}', function ($id,$type=null) {
    if ($id==1 && $type=='page') {
        return "first Page";
    } else if ($id==1 && $type=='number') {
        return "first number";
    }elseif ($id==1 && $type==null) {
        return "Some Thing else";
    }
})->name('page');

Route::view('sample-page','page');


// group routes
Route::prefix('gallery')->group(
    function() {
        Route::get('photos',function(){
            return '<h2>photos<h2/>';
        });
        Route::get('vedios',function(){
            return '<h2>Videos<h2/>';
        });
    }
);

//Middleware
Route::get('month/{num}', function ($num) {
if ($num==1) {
    return "JAN";
} else if ($num==2) {
    return "FEB";
}else if ($num==1) {
    return "MAR";
}
})->middleware('month') ;

// group route with middleware
// Route::prefix('gallery')->middleware(['',''])->group(
//     function() {
//         Route::get('photos',function(){
//             return '<h2>photos<h2/>';
//         });
//         Route::get('vedios',function(){
//             return '<h2>Videos<h2/>';
//         });
//     }
// );

//controllers
Route::get('login', [LoginController::class,'login_form']);
Route::post('login', [LoginController::class,'login_process']);


Route::get('post/{id}',[PostController::class,'show'] );


//controller with middleware
Route::get('monthto/{num}', [MonthController::class,] ) ;
