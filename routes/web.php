<?php

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::group(['prefix' => 'tata-usaha'], function(){

    route::group(['prefix' => 'cek-data'], function(){
        /**
         * data kelas
         */
        route::get('kelas', 'TU\Kelas\KelasController@index')->name('tata-usaha.cek-data.kelas');
        /**
         * data siswa
         */
        route::get('siswa', 'TU\Siswa\SiswaController@index')->name('tata-usaha.cek-data.siswa');

        /**
         * data staff
         */
        route::get('staff', 'TU\Guru\GuruController@index')->name('tata-usaha.cek-data.staff');
        /**
         * data master spp
         */
        route::get('spp', 'TU\Spp\MasterSppController@index')->name('tata-usaha.spp');

        route::get('spp/siswa', 'TU\Spp\SppController@index')->name('tata-usaha.cek-data.spp.siswa');
    });

    Route::group(['prefix' => 'tampilkan-form'], function(){
        /**
         * tampilkan form tambah kelas baru
         */
        route::get('tambah/kelas', 'TU\Kelas\KelasController@create')->name('tata-usaha.tampilkan-form.tambah.kelas');
        /**
         * tampilkan form tambah siswa baru
         */
        route::get('tambah/siswa', 'TU\Siswa\SiswaController@create')->name('tata-usaha.tampilkan-form.tambah.siswa');
        /**
         * tampilkan form tambah staff
         */
        route::get('tambah/staff', 'TU\Guru\GuruController@create')->name('tata-usaha.tampilkan-form.tambah.staff');
        /**
         * form tambah list spp
         */
        route::get('tambah/list/spp','TU\Spp\MasterSppController@create')->name('tata-usaha.tampilkan-form.tambah.list.spp');


        /**
         * tampilkan form-edit kelas
         */
        route::get('edit/kelas/{kela}', 'TU\Kelas\KelasController@edit')->name('tata-usaha.tampilkan-form.edit.kelas');

        /**
         * tampilkam form edit siswa
         */
        route::get('edit/siswa/{siswa}', 'TU\Siswa\SiswaController@edit')->name('tata-usaha.tampilkan-form.edit.siswa');
        /**
         * tampilkan form edit staff
         */
        route::get('edit/staff/{guru}', 'TU\Guru\GuruController@edit')->name('tata-usaha.tampilkan-form.edit.staff');
        /**
         * tampilkan form edit list spp
         */
        route::get('edit/spp/{spp}', 'TU\Spp\MasterSppController@edit')->name('tata-usaha.tampilkan-form.edit.spp');
        /**
         * tampilkan form input spp
         */
        route::get('bayaran/spp/{spp}', 'TU\Spp\MasterSppController@edit')->name('tata-usaha.tampilkan-form.bayaran.spp');
        /**
         * tampilkan form spp
         */
        route::get('spp/{categorie}', 'TU\Spp\SppController@edit')->name('tata-usaha.tampilkan-form.spp');

    });

    Route::group(['prefix' => 'simpan-data'], function(){
        /**
         * simpan data kelas baru
         */
        route::post('kelas/kedalam-database', 'TU\Kelas\KelasController@store')->name('tata-usaha.simpan-data.kelas.kedalam-database');
        /**
         * simpan data siswa baru
         */
        route::post('siswa/kedalam-database', 'TU\Siswa\SiswaController@store')->name('tata-usaha.simpan-data.siswa.kedalam-database');
        /**
         * simpan data guru
         */
        route::post('staff/kedalam-database', 'TU\Guru\GuruController@store')->name('tata-usaha.simpan-data.staff.kedalam-database');
        /**
         * simpan data list spp
         */
        route::post('list/spp', 'TU\Spp\MasterSppController@store')->name('tata-usaha.simpan-data.list.spp');

        /**
         * simpan data pembaruan kelas
         */
        route::put('update/kelas/{kela}', 'TU\Kelas\KelasController@update')->name('tata-usaha.simpan-data.update.kelas');
        /**
         * simpan data siswa terbaru
         */
        route::put('update/siswa/{siswa}', 'TU\Siswa\SiswaController@update')->name('tata-usaha.simpan-data.update.siswa');
        /**
         * simpan data siswa terbaru
         */
        route::put('update/staff/{guru}', 'TU\Guru\GuruController@update')->name('tata-usaha.simpan-data.update.staff');
        /**
         * simpan data list spp terbaru
         */
        route::patch('update/spp/{categorie}', 'TU\Spp\MasterSppController@update')->name('tata-usaha.simpan-data.update.spp');

        /**
         * simpan spp siswa kedalam database
         */
        route::patch('spp/siswa/{categorie}', 'TU\Spp\SppController@update')->name('tata-usaha.simpan-data.spp.siswa');
    });
    /**
     * tampilkan detail informasi siswa
     */
    route::get('cek-detail/siswa/{siswa}', 'TU\Siswa\SiswaController@show')->name('tata-usaha.cek-detail.siswa');
    /**
     * detail staff / guru
     */
    route::get('cek-detail/staff/{guru}', 'TU\Guru\GuruController@show')->name('tata-usaha.cek-detail.staff');
    /**
     * hapus data kelas
     */
    route::delete('hapus/data-kelas/{kela}', 'TU\Kelas\KelasController@destroy')->name('tata-usaha.hapus.data-kelas');

    /**
     * hapus data staff
     */
    route::delete('hapus/data-staff/{user}', 'TU\Guru\GuruController@destroy')->name('tata-usaha.hapus.data-staff');
    /**
     * hapus data list spp
     */
    route::delete('hapus/data-spp/{spp}', 'TU\Spp\MasterSppController@destroy')->name('tata-usaha.hapus.data-spp');


});
Route::resource('spp', 'Spp\SppController');
