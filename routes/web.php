<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

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

// Route::get('/',[AsadController::class,"first"]);



// Route::controller(AsadController::class)->group(function(){

// Route::get("/bye","bye");
// Route::get("/signup","signup");
// Route::get("/login","login");
// Route::get("/logout","logout");
// Route::get("/success","success");


// // parmeterized route

// Route::get("/welcome/{name}","welcome");

// //optional route
// Route::get("/welcome/{name?}","welcome");


    
// });
Route::get("/register", [StudentController::class,"register"]);
Route::post("/signup", [StudentController::class,"signup"]);
Route::get("/student", [StudentController::class,"getstudents"]);
Route::get('/deletestudent/{id}', [StudentController::class,"deletestudent"]);
Route::get('/editstudent/{id}', [StudentController::class,"editStudent"]);
Route::post('/editstudent/{id}', [StudentController::class,"update"]);

