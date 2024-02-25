<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FeedbackController;



Route::get('/open', function () {
    return view('welcome');
});

Route::get('/homepage', function () {
    return view('index');
   

});

Route::get('/', function () {
    return view('AddFeedback');
});

Route::get('/feedback/delete/{ID}',[FeedbackController::class , 'delete'])->name('fedbackdelete');
Route::get('/feedback/edit/{ID}',[FeedbackController::class , 'edit'])->name('fedbackedit');
Route::get('/updatedata/{ID}',[FeedbackController::class , 'edit'])->name('fedbackedit');

Route::put('/updatedata/{ID}',[FeedbackController::class , 'updatefeed']);






Route::middleware('auth')->group(function (){
    
    Route::get('/feedback',[FeedbackController::class , 'index']);
    Route::post('/feedback',[FeedbackController::class , 'connect']);
    Route::get('/set',[FeedbackController::class , 'show'])->name('set.show');
    
    });

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
