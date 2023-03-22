<?php

use App\Http\Controllers\ParliamentSessionDayController;
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
    Route::get('/dashboard', function () { return view('dashboard'); })->name('dashboard');
    Route::get('/parliamentdays_old', function () { return view('parliamentdays.index'); })->name('parliamentdays');
});

Route::prefix('parliamentdays')->group(function () {
    Route::get('{year}/{month}', [ParliamentSessionDayController::class, 'edit'])->name('parliamentdays.ym');
    Route::patch('{year}/{month}', [ParliamentSessionDayController::class, 'update'])->name('parliamentdays.ym-patch');
});
Route::resource('parliamentdays', ParliamentSessionDayController::class);



Route::prefix('calendar')->group(function () {
    Route::get('{year}/{month}', [ParliamentSessionDayController::class, 'edit'])->name('calendar.ym');
    Route::patch('{year}/{month}', [ParliamentSessionDayController::class, 'update'])->name('calendar.ym-patch');
});
Route::resource('calendar', ParliamentSessionDayController::class);


Route::get('entitygroups', [ParliamentSessionDayController::class, 'entity'])->name('entitygroups.index');
