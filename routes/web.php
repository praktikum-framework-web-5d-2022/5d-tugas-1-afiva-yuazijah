<?php

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

Route::redirect ('/','/dosen');
Route::get('/dosen', function(){
    $dosens = ["Dadang Yusup, M.Kom..","Iqbal Maulana, M.Sc.","Betha Nurina Sari","Purwantoro, M.Kom.","Dadang Yusup, M.Kom.",
    "Garno, M.Kom.","Ultach Enri, M.Kom.","Chaca Caeruding, M.Kom.","M. Jajuli, M.Si.","Adhi Rizal, S.Pd., M.T.","Iqbal Maulana, M.Sc.","Aji Primajaya, S.Si., M.Kom."];
    return view('dosen.index', [
        'dosens' => $dosens
    ]);
})->name('dosen.index');
    
Route::get('/mahasiswa', function(){
    $mahasiswas = ["Amanda Febrianti","Irfan Maulana","Tasya Nurfadillah","Ade Sutrisna","Nanda Sukarno","Nabila Aulia","Yuli",
    "Salwa Octa","Zahratul Jannah","Gunawan Aji setiawan", "Nazwa Ariana Salsabila"];
    return view('mahasiswa.index', [
        'mahasiswas' => $mahasiswas
    ]);
})->name('mahasiswa.index');
    
Route::get('/matakuliah', function(){
    $matakuliahs = ["Matematika Diskrit","Pemrograman Berbasis Web","Algoritma dan Pemrograman","Statiska Probalitas",
    "Stuktur Data","Teori Bahasa dan Automata","Basis Data","Jaringan Komputer","Metode Numerik","Kecerdasan Buatan","Data Mining"];
    return view('matakuliah.index', [
        'matakuliahs' => $matakuliahs
    ]);
})->name('matakuliah.index');