<?php
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\MatakuliahController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('admin.dashboard');
});
Route::get('/pcr', function () {
    return 'Selamat Datang di Website Kampus PCR!';
});
Route::get('/nama/{param1}', function ($param1) {
    return 'Nama saya: ' . $param1;
});
Route::get('/mahasiswa', function () {
    return 'Halo Mahasiswa';
})->name('mahasiswa.show');

Route::get('/mahasiswa/{param1}',
    [MahasiswaController::class, 'show']);

Route::get('/about', function () {
    return view('halaman-about');
});
Route::get('/matakuliah', [MatakuliahController::class, 'index']);
Route::get('/matakuliah/show/{param1?}', [MatakuliahController::class, 'show']);

Route::get('/home', [HomeController::class, 'index'])
    ->name('home');

Route::get('/pegawai.index', [PegawaiController::class, 'index']);

Route::post('question/store', [QuestionController::class, 'store'])
    ->name('question.store');

Route::get('dashboard', [DashboardController::class, 'index'])
    ->name('dashboard')
    ->middleware('checkislogin');

Route::resource('user', UserController::class);

Route::resource('pelanggan', PelangganController::class);
Route::delete('/pelanggan-file/{id}', [PelangganController::class, 'deleteFile'])
    ->name('pelanggan.deleteFile');

Route::resource('pelanggan', PelangganController::class);

Route::get('/pelanggan/{id}/detail', [PelangganController::class, 'show'])
    ->name('pelanggan.detail');

Route::get('auth', [AuthController::class, 'index'])->name('auth');
Route::post('auth/login', [AuthController::class, 'login'])->name('auth.login');
Route::get('auth/logout', [AuthController::class, 'logout'])->name('auth.logout');

Route::group(['middleware' => ['checkrole:Admin']], function () {
    Route::get('user', [UserController::class, 'index'])->name('user.index');

});
