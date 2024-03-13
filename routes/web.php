<!-- <?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\UserController;


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

Route::get ('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/barang/index', [BarangController::class, 'index'])->name('barang');
Route::get('/barang/tambah', [BarangController::class, 'create'])->name('barang/tambah');

Route::resource('transaksis', TransaksiController::class);
Route::get('/transaksi', [TransaksiController::class, 'index'])->name('transaksi');
Route::get('/transaksi/tambah', [TransaksiController::class, 'create'])->name('transaksi/tambah');
Route::get('/user', [UserController::class, 'index'])->name('user');
Route::get('/user/tambah', [UserController::class, 'tambah'])->name('user');
// Route::get('/login', fn() => view('auth.login'));
// Route::get('/login', [AuthController::class, 'index']);
// Route::get('/login-proses', [AuthController::class, 'login'])->name('login');


Route::resource('dashboard', DashboardController::class);
Route::resource('/barang', BarangController::class);
 
