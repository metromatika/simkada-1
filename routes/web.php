<?php

use App\Http\Controllers\ChangePasswordController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InfoUserController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ResetController;
use App\Http\Controllers\SessionsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Route;

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


Route::group(['middleware' => 'auth'], function () {

    Route::get('/', [HomeController::class, 'home']);
	Route::get('dashboard', function () {
		return view('applications/dashboard');
	})->name('dashboard');

    Route::get('/master-data/data-TPS', function () {
        return view('applications/master-data/data-TPS');
    })->name('data-TPS');

    Route::get('/master-data/data-jumlah-DPT', function () {
        return view('applications/master-data/data-jumlah-DPT');
    })->name('data-jumlah-DPT');

    Route::get('/master-data/tbl-provinsi', function () {
        return view('applications/master-data/tbl-provinsi');
    })->name('tbl-provinsi');

    Route::get('/master-data/tbl-kab-kota', function () {
        return view('applications/master-data/tbl-kab-kota');
    })->name('tbl-kab-kota');

    Route::get('/master-data/tbl-kecamatan', function () {
        return view('applications/master-data/tbl-kecamatan');
    })->name('tbl-kecamatan');

    // Route::get('/master-data/tbl-provinsi', function () {
    //     $breadcrumb = 'tbl-provinsi';
    //     return view('applications.master-data.data-jumlah-dpt', compact('breadcrumb'));
    // })->name('tbl-provinsi');

    // Route::get('/master-data/tbl-kab-kota', function () {
    //     return view('applications.master-data.data-jumlah-dpt', ['$breadcrumb' => 'tbl-kab-kota']);
    // })->name('tbl-kab-kota');

    // Route::get('/master-data/tbl-kecamatan', function () {
    //     return view('applications.master-data.data-jumlah-dpt', ['$breadcrumb' => 'tbl-kecamatan']);
    // })->name('tbl-kecamatan');

    Route::get('pasangan-calon', function () {
        return view('applications/pasangan-calon');
    })->name('pasangan-calon');

    Route::get('/tim-relawan/daftar-tim', function () {
        return view('applications/tim-relawan/daftar-tim');
    })->name('daftar-tim');

    Route::get('/tim-relawan/personil-relawan', function () {
        return view('applications/tim-relawan/personil-relawan');
    })->name('personil-relawan');

    Route::get('log-relawan-saksi', function () {
        return view('applications/log-relawan-saksi');
    })->name('log-relawan-saksi');

    Route::get('data-DPT', function () {
        return view('applications/data-DPT');
    })->name('data-DPT');

    Route::get('data-pemilih-pendukung', function () {
        return view('applications/data-pemilih-pendukung');
    })->name('data-pemilih-pendukung');

    Route::get('simulasi-kemenangan', function () {
        return view('applications/simulasi-kemenangan');
    })->name('simulasi-kemenangan');

    Route::get('operator-simkada', function () {
        return view('applications/operator-simkada');
    })->name('operator-simkada');

    Route::get('/data-saksi/list-daftar-saksi', function () {
        return view('applications/data-saksi/list-daftar-saksi');
    })->name('list-daftar-saksi');

    Route::get('/data-saksi/monitoring-saksi', function () {
        return view('applications/data-saksi/monitoring-saksi');
    })->name('monitoring-saksi');

    Route::get('/manajemen-logistik/daftar-stok-barang', function () {
        return view('applications/manajemen-logistik/daftar-stok-barang');
    })->name('daftar-stok-barang');

    Route::get('/manajemen-logistik/pemesanan-barang', function () {
        return view('applications/manajemen-logistik/pemesanan-barang');
    })->name('pemesanan-barang');

    Route::get('/manajemen-logistik/penerimaan-barang', function () {
        return view('applications/manajemen-logistik/penerimaan-barang');
    })->name('penerimaan-barang');

    Route::get('/manajemen-logistik/pengeluaran-barang', function () {
        return view('applications/manajemen-logistik/pengeluaran-barang');
    })->name('pengeluaran-barang');

    Route::get('/monitoring-isu-politik/daftar-isu', function () {
        return view('applications/monitoring-isu-politik/daftar-isu');
    })->name('daftar-isu');

    Route::get('/monitoring-isu-politik/rekapitulasi-isu', function () {
        return view('applications/monitoring-isu-politik/rekapitulasi-isu');
    })->name('rekapitulasi-isu');

    Route::get('/rekapitulasi/relawan', function () {
        return view('applications/rekapitulasi/relawan');
    })->name('relawan');

    Route::get('/rekapitulasi/pemilih-pendukung', function () {
        return view('applications/rekapitulasi/pemilih-pendukung');
    })->name('pemilih-pendukung');

    Route::get('/rekapitulasi/dpt', function () {
        return view('applications/rekapitulasi/dpt');
    })->name('dpt');

    Route::get('/rekapitulasi/dpt-manual', function () {
        return view('applications/rekapitulasi/dpt-manual');
    })->name('dpt-manual');

    Route::get('/rekapitulasi/jumlah-tps', function () {
        return view('applications/rekapitulasi/jumlah-tps');
    })->name('jumlah-tps');

    Route::get('/rekapitulasi/tabulasi-suara', function () {
        return view('applications/rekapitulasi/tabulasi-suara');
    })->name('tabulasi-suara');

    Route::get('/survey/input-data', function () {
        return view('applications/survey/input-data');
    })->name('input-data');

    Route::get('/survey/hasil-survey', function () {
        return view('applications/survey/hasil-survey');
    })->name('hasil-survey');

    Route::get('/quick-count/input-data', function () {
        return view('applications/quick-count/input-data-quick-count');
    })->name('input-data-quick-count');

    Route::get('/quick-count/grafik-quick-count', function () {
        return view('applications/quick-count/grafik-quick-count');
    })->name('grafik-quick-count');

    Route::get('/real-count/input-data', function () {
        return view('applications/real-count/input-data-real-count');
    })->name('input-data-real-count');

    Route::get('/real-count/grafik-real-count', function () {
        return view('applications/real-count/grafik-real-count');
    })->name('grafik-real-count');

    Route::get('/logout', [SessionsController::class, 'destroy']);
	Route::get('/user-profile', [InfoUserController::class, 'create']);
	Route::post('/user-profile', [InfoUserController::class, 'store']);
    Route::get('/login', function () {
		return view('dashboard');
	})->name('sign-up');
});



Route::group(['middleware' => 'guest'], function () {
    Route::get('/register', [RegisterController::class, 'create']);
    Route::post('/register', [RegisterController::class, 'store']);
    Route::get('/login', [SessionsController::class, 'create']);
    Route::post('/session', [SessionsController::class, 'store']);
	Route::get('/login/forgot-password', [ResetController::class, 'create']);
	Route::post('/forgot-password', [ResetController::class, 'sendEmail']);
	Route::get('/reset-password/{token}', [ResetController::class, 'resetPass'])->name('password.reset');
	Route::post('/reset-password', [ChangePasswordController::class, 'changePassword'])->name('password.update');

});

Route::get('/login', function () {
    return view('session/login-session');
})->name('login');
