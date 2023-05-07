<?php

namespace App\Http\Controllers;

use App\Models\Classess;
use App\Models\job;
use App\Models\mapel;
use App\Models\Student;
use App\Models\teacher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use SebastianBergmann\Diff\Diff;

class ClassessController extends Controller
{
    public function index(){
        $classesses = Classess::all();
        return view('kelas',['classesses'=> $classesses ]);
        
    }

    public function viewkelas(Classess $classess){
         
        return view('viewkelas', [ 'classess' => $classess, 'students' => Student::get(), 'mapel' => mapel::where('classess_id_kelas', $classess->id_kelas)->get() ]);
    }

    public function createkelas(){
        return view('tambahkelas');
    }

    public function createmapel(Classess $classess){
        return view('createmapel', [ 'classess' => $classess]);
    }

    public function savemapel(mapel $mapel , Classess $classess, Request $request){
        $mapel = new mapel;
        $mapel = $request->all();
        mapel::create($mapel);
        session()->flash('success', 'Data Berhasil Ditambahkan!');
        return redirect()->route('editkelas', $classess->id_kelas);

    }

    public function savekelas(Request $request){
        $classess = new Classess;
        $classess->id_kelas = $request->id_kelas;
        $classess->kelas = "$request->kelas $request->variabel";
        $classess->nama_kelas = $request->nama_kelas;
        $classess->save();

        $teacher = new teacher;
        $nm = $request->thumbnail;
        $namagambar = $nm->getClientOriginalName();
        $teacher->fotopath = $namagambar;
        $nm->move(public_path('image'), $namagambar);
        // $teacher->fotopath = $request->file('thumbnail')->store('public');
        $teacher->nip = $request->nip;
        $teacher->classess_id_kelas = $request->classess_id_kelas;
        $teacher->nama = $request->nama;
        $teacher->jabatan = $request->jabatan;
        $teacher->email = $request->email;
        $teacher->jenis_kelamin = $request->jenis_kelamin;
        $teacher->pendidikan = $request->pendidikan;
        $teacher->alamat = $request->alamat;
        $teacher->no_tlp = $request->no_tlp;
        $teacher->save();
        session()->flash('success', 'Data Berhasil Ditambahkan!');
        return redirect()->route('kelas');
    }


    public function editkelas(Classess $classess, Student $student ){
        $student = Student::where('classess_id_kelas', $classess->id_kelas)->get();
        $c = Classess::get();
        return view('editkelas',[ 'c' => $c ,'classess'=> $classess ,'student' => $student, 'mapel' => mapel::where('classess_id_kelas', $classess->id_kelas)->get(), 'guru' => teacher::where('classess_id_kelas', NULL)->get()]);
    }

    public function updatekelas(Classess $classess , Student $student,  Request $request){

        $classess = Classess::find($classess->id_kelas);
        $classess->id_kelas = $request->id_kelas;
        $classess->kelas = $classess->kelas;
        $classess->nama_kelas = $request->nama_kelas;
        $classess->save();
        $teach = teacher::find($request->nip);
        $teach->classess_id_kelas = $classess->id_kelas;
        $teach->save();
        session()->flash('success', 'Data Berhasil DiUpdate!');
        return redirect()->route('kelas');
   }

   public function updatekelassiswa(Classess $classess , Student $student,  Request $request){
        $classess = Classess::find($classess->id_kelas);
        $student = Student::find($student->nisn);
        $student->classess_id_kelas = $request->id_kelas;
        $student->save();
        session()->flash('success', 'Data Berhasil DiUpdate!');
        return redirect()->route('editkelas', $classess->id_kelas);
   }

   public function deletemapel(mapel $mapel){
        $mapel = mapel::find($mapel->id_mapel);
        $mapel->delete();

        session()->flash('success', 'Data Berhasil Di Hapus!');

        return redirect()->route('kelas');
   }

   public function tugas(Classess $classess){
        $tugas = job::get();
        $mapel = mapel::get();
        return view('tugas',['mapel' => $mapel ,'tugas' => $tugas , 'classess' => $classess]);
   }


   public function savetugas(Request $request){
    $tugas = new job;
    $tugas->id_tugas = $request->id_tugas;
    $tugas->nama_tugas = $request->nama_tugas;
    $tugas->mapel_id_mapel = $request->mapel_id_mapel;
    $tugas->batas_pengumpulan = now();
    $tugas->save();
    return redirect()->route('home');
    }


}
