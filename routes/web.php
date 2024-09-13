<?php
use App\Http\Controllers\facultyController;
use App\Http\Controllers\MovieController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LecturerController;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
// Route::get('/movie', [MovieController::class, 'index']
// );
// Route::get('/faculty', [facultyController::class, 'index']);
// use App\Http\Controllers\ProductController;
// Route::get('/products', [ProductController::class, 'index'])->name('products.index');




// Route เพื่อแสดงรายชื่ออาจารย์
Route::get('/lecturers', [LecturerController::class, 'index'])->name('lecturers.index');

// Route เพื่อเพิ่มข้อมูลอาจารย์
Route::post('/lecturers/insert', [LecturerController::class, 'insert'])->name('lecturers.insert');

Route::get('/lecturers/delete/{lec_id}', [LecturerController::class, 'delete'])->name('lecturers.delete');

