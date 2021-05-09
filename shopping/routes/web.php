<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MemberController;
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

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard/todo', function () {
    return view('todo');
})->name('dashboard-todo');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard/shopping', function () {
    return view('shopping');
})->name('shopping');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard/member/form', function () {
    return view('shopping/member/form');
})->name('member_form');

Route::middleware(['auth:sanctum', 'verified'])->resource('/dashboard/member', MemberController::class)->only([
    'store'
]);
