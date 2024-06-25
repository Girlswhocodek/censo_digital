<?php

use App\Http\Controllers\Censo\CensoController;
use App\Http\Controllers\Dashboard\DashboardController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified',
// ])->group(function () {
//     Route::get('/dashboard', function () {
//         return view('welcome');
//     })->name('dashboard');
// });


Route::get('/home', function () {
    return view('app.index');
});

Route::get('/censo-digital', function () {
    return view('app.censo.censo-digital');
})->name('censo-digital');



// Route::get('/form', function () {
//     return view('app.censo.form');
// })->name('form');
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->get('/', [DashboardController::class, 'showDashboard'])->name('dashboard');
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->get('/dashboard', [DashboardController::class, 'showDashboard'])->name('dashboard');
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->get('/form', [CensoController::class, 'form'])->name('form');
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->get('/show-code-form', [CensoController::class, 'show_code_form'])->name('show.code.form');
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->get('/form-censo-digital', [CensoController::class, 'formCensoDigital'])->name('form.censo.digital');
// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified',
// ])->get('/validate-code-censo', [CensoController::class, 'validateCodeCenso'])->name('validate.code');
// Route::get('/sendEmail', [CensoController::class, 'sendEmail'])->name('sendEmail');
