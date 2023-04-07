<?php

use App\Http\Controllers\ParliamentSessionDayController;
use Illuminate\Support\Facades\Route;

use App\Http\Livewire\UpdateParliamentDays;
use App\Http\Controllers\EntityGroupController;

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

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/parliamentdays_old', function () {
        return view('parliamentdays.index');
    })->name('parliamentdaysold');
});

Route::group(['middleware' => 'auth'], function () {

    Route::prefix('parliamentdays')->group(function () {
        Route::get('/', [ParliamentSessionDayController::class, 'index'])->name('parliamentdays.index');
        Route::get('{year}/{month}', [ParliamentSessionDayController::class, 'edit'])->name('parliamentdays.ym');
        Route::patch('{year}/{month}', [ParliamentSessionDayController::class, 'update'])->name('parliamentdays.ym-patch');
    });
    Route::resource('parliamentdays', ParliamentSessionDayController::class);
    Route::get('parliamentdayslw', UpdateParliamentDays::class)->name('parliamentdayslw.index');
});
