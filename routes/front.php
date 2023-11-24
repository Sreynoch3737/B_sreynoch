<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\FrontPageController;

Route::get( uri: 'front_agency', action: function(){
return view( view: 'front_agency');
});
Route::get('front_home',function(){
return view( view: 'front_home');
});

Route::get('/',[FrontPageController::class,'index'])->name('front.home');
Route::get('/about',[FrontPageController::class,'about'])->name('front.about');
Route::get('/service',[FrontPageController::class,'service'])->name('front.service');
Route::get('/package',[FrontPageController::class,'package'])->name('front.package');
Route::get('/distination',[FrontPageController::class,'distination'])->name('front.distination');
Route::get('/booking',[FrontPageController::class,'booking'])->name('front.booking');
Route::get('/travelguide',[FrontPageController::class,'travelguide'])->name('front.travelguide');
Route::get('/testimonial',[FrontPageController::class,'testimonial'])->name('front.testimonial');


Route::get('master',function(){
    return view('front_master');
});
    
Route::get('/auth_app',function(){
    return view('Layouts.auth_app');
});

Route::get('register',function(){
 return view('auth.register');
});
//for switching language route
Route::get('/lang/{locale}', function ($locale) {
    Session::put('locale', $locale);
    return redirect()->back();
  });

// Route::get('/lang/{locale}', function ($locale) {

//     // return $locale;
//       Session::put('locale', $locale);
//       // session()->put('locale', $locale); 
//       session()->save();
//       // return redirect()->back();
//       return app()->getlocale();
//     });
  