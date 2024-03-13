<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Api\FileController;
use App\Http\Controllers\AppDataController;
use App\Http\Controllers\DevicesController;
use App\Http\Controllers\FileUploadController;
use App\Http\Controllers\ProfileController;
use Illuminate\Http\Request;
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





Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/files/latest', [FileController::class, 'getLatestFileUrl']);

Route::middleware('auth')->group(function () {

    Route::get('/', [AdminController::class, 'index'])->name('index');
    Route::resource('/file-upload', FileUploadController::class);

    Route::get('/app-data', [AppDataController::class, 'index'])->name('appdata.index');
    Route::post('/app-data', [AppDataController::class, 'store'])->name('appdata.store');
    Route::get('/app-data/{device_id}', [AppDataController::class, 'show'])->name('appdata.show');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::post('/tokens/create', function (Request $request) {
        $token = $request->user()->createToken($request->token_name);

        return ['token' => $token->plainTextToken];
    });
});

require __DIR__.'/auth.php';
