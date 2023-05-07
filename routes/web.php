<?php

use App\Http\Controllers\ClassessController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ExamController;
use App\Http\Controllers\FullCalendarEventMasterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\PengumumanController;
use App\Http\Middleware\ceklevel;

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
    return view('auth.login');
});
Route::get('/kelas', [ClassessController::class, 'index'] )->name('kelas');
Route::get('/kelas/view/{classess:id_kelas}', [ClassessController::class, 'viewkelas'] )->name('viewkelas');
Route::middleware([ceklevel::class])->group(function ($levels) {
    Route::get('/kelas/create', [ClassessController::class, 'createkelas'] )->name('createkelas');
    Route::post('/kelas/save', [ClassessController::class, 'savekelas'] )->name('savekelas');
    Route::get('/kelas/save/{classess:id_kelas}', [ClassessController::class, 'createmapel'] )->name('createmapel');
    // Route::get('/kelas/view/{classess:id_kelas}/{student:nama}', [ClassessController::class, 'absensi'] )->name('absen');
    Route::get('/kelas/edit/{classess:id_kelas}', [ClassessController::class, 'editkelas'] )->name('editkelas');
    Route::patch('/kelas/edit/{classess:id_kelas}', [ClassessController::class, 'updatekelas'] )->name('updatekelas');
    Route::patch('/kelas/edit/{classess:id_kelas}/{student:nama}', [ClassessController::class, 'updatekelassiswa'] )->name('updatekelassiswa');
    Route::post('/kelas/save/{classess:id_kelas}', [ClassessController::class, 'savemapel'] )->name('savemapel');
    Route::delete('/kelas/edit/delete/{mapel:id_mapel}', [ClassessController::class,'deletemapel'] )->name('hapusmapel');
});


Route::get('/ujian', [ExamController::class, 'index'] )->name('exam');
Route::get('/ujian/view/{class:id_kelas}', [ExamController::class, 'viewujian'] )->name('viewujian');
Route::get('/ujian/view/tambah/{mapel:id_mapel}', [ExamController::class, 'tambahujian'] )->name('tambahujian');
Route::post('/ujian/view/tambah/simpan/{mapel:id_mapel}', [ExamController::class, 'saveujian'] )->name('saveujian');

Route::get('/guru', [TeacherController::class, 'index'] )->name('guru');
Route::middleware([ceklevel::class])->group(function ($levels) {
Route::get('guru/create', [TeacherController::class, 'createguru'] )->name('createguru');
Route::post('guru/save', [TeacherController::class, 'saveguru'] )->name('saveguru');
// Route::get('/guru/search', [TeacherController::class, 'searchguru'] )->name('search');
Route::get('/guru/view/{teacher:nama}', [TeacherController::class, 'viewguru'] )->name('viewguru');
Route::get('/guru/edit/{teacher:nama}', [TeacherController::class, 'edit'] )->name('editguru');
Route::patch('/guru/edit/{teacher:nama}', [TeacherController::class, 'update'] )->name('updateguru');
Route::delete('/guru/delete/{teacher:nama}', [TeacherController::class,'hapus'] )->name('hapusguru');
Route::get('/guru/delete/{teacher:nama}', [TeacherController::class,'destroy'] )->name('destroyguru');
});

Route::get('/siswa', [StudentController::class, 'index'] )->name('siswa');
Route::get('/siswa/view/{student:nama}', [StudentController::class, 'viewsiswa'] )->name('view');
Route::middleware([ceklevel::class])->group(function ($levels) {
Route::get('siswa/create', [StudentController::class, 'createsiswa'] )->name('create');
Route::post('siswa/save', [StudentController::class, 'savesiswa'] )->name('save');
Route::get('/siswa/search', [StudentController::class, 'searchsiswa'] )->name('search');
Route::get('/siswa/print/{student:nama}', [StudentController::class, 'viewprint'] )->name('viewprint');
Route::get('/siswa/edit/{student:nama}', [StudentController::class, 'edit'] )->name('edit');
Route::patch('/siswa/edit/{student:nama}', [StudentController::class, 'update'] )->name('update');
Route::delete('/siswa/delete/{student:nama}', [StudentController::class,'hapus'] )->name('hapus');
Route::get('/siswa/delete/{student:nama}', [StudentController::class,'destroy'] )->name('destroy');
});

//  Route::get('/calendar',[StudentController::class, 'calendar'])->name('calendar');


Route::get('/fullcalendareventmaster',[FullCalendarEventMasterController::class,'index']);
Route::post('/fullcalendareventmaster/create',[FullCalendarEventMasterController::class,'create']);
Route::post('/fullcalendareventmaster/update',[FullCalendarEventMasterController::class,'update']);
Route::post('/fullcalendareventmaster/delete',[FullCalendarEventMasterController::class,'destroy']);

Route::get('search', [SearchController::class, 'index'])->name('search');
Route::get('autocomplete', [SearchController::class, 'autocomplete'])->name('autocomplete');

Route::middleware([ceklevel::class])->group(function ($levels) {
Route::get('/pengumuman', [PengumumanController::class, 'index'])->name('pengumuman');
Route::get('pengumuman/create', [PengumumanController::class, 'createpengumuman'] )->name('createpengumuman');
Route::post('/pengumuman/save', [PengumumanController::class, 'savepengumuman'] )->name('savepengumuman');
Route::delete('/pengumuman/delete/{pengumuman:id}', [PengumumanController::class,'hapuspengumuman'] )->name('hapuspengumuman');
});

Route::get('/tugas',[ClassessController::class, 'tugas'])->name('tugas');
Route::post('/tugas/save',[ClassessController::class, 'savetugas'])->name('savetugas');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

