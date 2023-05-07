<?php

use Illuminate\Support\Facades\Route;
use App\Models\Department;

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



Route::get('departments', function () {
    $departments= Department::get();
    return view('departments',[ 'departments'=> $departments ]);
});
