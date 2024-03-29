<?php
use App\Http\Controller\IndoregionController;
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

Route::get('/', 'landingController@index');

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/beranda', 'BerandaController@index');


Route::get('/login', function() {
    return view('Halamandepan.Pengguna.login');
});

Route::post('/postlogin', 'LoginController@postlogin')->name('postlogin');


//tanggapan
Route::get('/tanggapan', 'TanggapanController@index');
Route::get('/tanggapan/create', 'TanggapanController@create');
Route::post('/tanggapan/store', 'TanggapanController@store');
Route::get('/tanggapan/edit/{id_tanggapan}', 'TanggapanController@edit');
Route::put('/tanggapan/update/{id_tanggapan}', 'TanggapanController@update');
Route::get('/tanggapan/destroy/{id_tanggapan}', 'TanggapanController@destroy');

//pengaduan
Route::get('/pengaduan', 'PengaduanController@index');
Route::get('/pengaduan/create', 'PengaduanController@create');
Route::post('/pengaduan/store', 'PengaduanController@store');
Route::get('/pengaduan/edit/{id_pengaduan}', 'PengaduanController@edit');
Route::put('/pengaduan/update/{id_pengaduan}', 'PengaduanController@update');
Route::get('/pengaduan/destroy/{id_pengaduan}', 'PengaduanController@destroy');
Route::get('/pengaduan/show/{id_pengaduan}', 'PengaduanController@show');

Route::get('/form', 'IndoregionController@form')->name('form');