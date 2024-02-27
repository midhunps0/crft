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
    return view('frontend.index');
})->name('home');
route::get('/about-us',function() {
    return view('frontend.about.about');
})->name('about');

route::get('/about/chairman',function() {
    return view('frontend.about.chairman');
})->name('chairman');

Route::get('/about/patients', function(){
    return view('frontend.about.international-patients');
})->name('international-patients');

Route::get('/about/achivements', function(){
    return view('frontend.about.achivements');
})->name('achivements');

Route::get('/female-fertlity',function(){
    return view('frontend.fertility.female-fertility');
})->name('female-fertility');

Route::get('/male-fertlity',function(){
    return view('frontend.fertility.male-fertility');
})->name('male-fertility');

Route::get('/sperm-embrio-freezing',function(){
    return view('frontend.fertility.sperm-embrio-freezing');
})->name('sperm-embrio-freezing');

Route::get('/antental-care',function(){
    return view('frontend.fertility.antenatal-care');
})->name('antenatal-care');

Route::get('/neonate-and-pediatric-care',function(){
    return view('frontend.fertility.neonate-and-pediatric-care');
})->name('neonate-and-pediatric-care');

Route::get('/medical-insurance',function(){
    return view('frontend.fertility.medical-insurance');
})->name('medical-insurance');
Route::get('/medical-genetics',function(){
    return view('frontend.fertility.medical-genetics');
})->name('medical-genetics');
Route::get('/foetal-medicine',function(){
    return view('frontend.fertility.foetal-medicine');
})->name('foetal-medicine');
Route::get('/assisting-departments',function(){
    return view('frontend.fertility.assisting-departments');
})->name('assisting-departments');