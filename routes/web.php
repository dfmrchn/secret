<?php

use App\Models\Web;
use App\Models\Post;
use Illuminate\Support\Arr;
use App\Http\Controllers\User;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\testController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\TanyaController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\FilterController;
use App\Http\Controllers\CatatanController;
use App\Http\Controllers\AuthController; // login daftar
use App\Http\Controllers\CrudController; // database client
use App\Http\Controllers\UsersController; //database client (percobaan)
use App\Http\Controllers\webController; // data biasa seperti foreach (tidak dari database) dan lain lain (jika ada selain foreach)

Route::get('/', [webController::class, 'index']);
Route::get('/guru', [webController::class, 'guru']);

Route::get('/sekolah', function() {
    return view('sekolah', ['title' => 'Sekolah']);
});

Route::get('/murid', function () {
    return view('murid', ['title' => 'Murid']);
});

Route::get('/post', function () {
    return view('post', ['posts' => Post::all()]); //mengambil data dengan satu kali panggil "Post (class) all(method static)"
});

Route::get('/posts/{post:slug}', function (Post $post) { //mengembalikan kolom selain id, bisa tuliskan parameter seperti di samping, post:slug
    return view('viewPost', ['title' => 'single post', 'post' => $post]);
});

// Route::get('/users', [UsersController::class, 'index'])->name('users') ;
// Route::get('/users/create', [UsersController::class, 'create'])->name('users.create');
// Route::post('/users', [UsersController::class, 'store'])->name('users.store');
// Route::delete('/users/destroy/{id}', [UsersController::class, 'destroy'])->name('users.destroy');
// Route::get('/users/{id}/edit', [usersController::class, 'edit'])->name('users.edit');
// Route::put('/users/update/{id}', [UsersController::class, 'update'])->name('users.update');

Route::get('/crud', [CrudController::class, 'index'])->name('crud');
Route::get('/crud/create', [CrudController::class, 'create'])->name('crud.create');
Route::post('/crud', [CrudController::class, 'store'])->name('crud.store');
Route::delete('/crud/destroy/{id}', [CrudController::class, 'destroy'])->name('crud.destroy');
Route::get('/crud/{id}/edit', [CrudController::class, 'edit'])->name('crud.edit');
Route::put('/crud/update/{id}', [CrudController::class, 'update'])->name('crud.update');

Route::get('/login', fn() => view('Auth.login'))->name('login');
Route::post('/login', [AuthController::class, 'login']);

Route::get('/daftar', fn() => view('Auth.daftar'))->name('daftar');
Route::post('/daftar', [AuthController::class, 'daftar']);

Route::get('/beranda', [webController::class, 'beranda'])->name('beranda'); // keamanan (jika belum login tidak dapat mengakses beranda)
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('fase', [KelasController::class, 'fase'])->name('fase.index');
Route::get('kelas/{id}', [KelasController::class, 'kelas']);

Route::get('/daftar', [KelasController::class, 'fase'])->name('daftar');

// tanya dan view ini saling terhubung antara tanya guru dengan siswa
Route::get('/tanya', [TanyaController::class, 'index'])->name('tanya');
Route::post('/tanya', [TanyaController::class, 'store'])->name('tanya.store');
Route::get('/view/{id}', [TanyaController::class, 'edit'])->name('tanya.edit');
Route::get('/view/restore/{id}', [TanyaController::class, 'viewRestore'])->name('getRestore.edit');
Route::put('/view/updateAnswer/{id}', [TanyaController::class, 'update'])->name('tanya.update');
Route::put('/view/updateReject/{id}', [TanyaController::class, 'updateReject'])->name('tanya.reject');
Route::post('/tanya/{id}/restore', [TanyaController::class, 'restore'])->name('tanya.restore');
Route::get('/filter', [FilterController::class, 'filterHistoryStudent'])->name('filter.index');
Route::get('/filterTeacher', [FilterController::class, 'filterHistoryTeacher'])->name('filter.fill');
Route::get('/paginateTanyaTeacher', [FilterController::class, 'filterTanyaTeacher'])->name('tanya.teacher');


Route::get('/kelas/{id}', [KelasController::class, 'getKelas']);
Route::get('/mapel/{id}', [KelasController::class, 'getMapel']);
Route::get('/bab/{id}', [KelasController::class, 'getBab']);
Route::get('/select', [BarangController::class, 'index']);
Route::get('/barang/{id}', [BarangController::class, 'getBarang']);

Route::get('/test', [testController::class, 'index'])->name('test');
Route::get('/test/create', [testController::class, 'create'])->name('test.create');
Route::post('/test', [testController::class, 'store'])->name('test.store');
Route::post('/test/delete', [testController::class, 'destroy'])->name('test.destroy');
Route::resource('test', testController::class);
Route::post('/test/{id}/restore', [testController::class, 'restore'])->name('test.restore');

Route::get('/catatan', [CatatanController::class, 'index']);
Route::post('/catatan', [CatatanController::class, 'store'])->name('catatan.store');
Route::get('/paginateCatatan', [FilterController::class, 'filterClassNote'])->name('catatan.filter');
Route::get('/paginateMapelCatatan', [FilterController::class, 'filterMapelNote'])->name('mapel.filter');