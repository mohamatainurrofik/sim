<?php

namespace App\Http\Controllers;

use App\Models\Classess;
use App\Models\teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function index(){
        $teacher = teacher::get();
        return view('guru',['teacher'=> $teacher]);
    }

    public function createguru(){
        return view('tambahguru');
    }

    public function viewguru(teacher $teacher){
        return view('viewguru', compact('teacher'));
    }

    public function saveguru(Request $request){

        $teacher = new teacher();
        $teacher = $request->all();
        teacher::create($teacher);
        session()->flash('success', 'Data Berhasil Ditambahkan!');
        return redirect()->route('guru');
    }

    public function searchguru(Request $request){
        $teacher = teacher::query();
        if (request('term')) {
            $teacher->where('nama', 'Like', '%' . request('term') . '%');
        }

        return $teacher->orderBy('nip', 'ASC')->paginate(5);
    }

    public function edit(teacher $teacher, Classess $classess){
        return view('editguru', ['teacher' => $teacher, 'classess' => $classess::get()]);
    }

    public function update(teacher $teacher, Request $request){

        $teacher = teacher::find($teacher->nip);
        $teacher->classess_id_kelas = $request->classess_id_kelas;
        $teacher->nama = $request->nama;
        $teacher->jabatan = $request->jabatan;
        $teacher->email = $request->email;
        $teacher->jenis_kelamin = $request->jenis_kelamin;
        $teacher->pendidikan = $request->pendidikan;
        $teacher->alamat = $request->alamat;
        $teacher->no_tlp = $request->no_tlp;
        $teacher->status = $request->status;
        

        if ($request->status == "Tidak Aktif") {
            $teacher->classess_id_kelas = NULL;
        }
        $teacher->save();

        session()->flash('success', 'Data Berhasil Di Update!');

        return redirect()->route('guru');
    }

    public function hapus(teacher $teacher){
        $teacher = teacher::find($teacher->nip);
        $teacher->delete();

        session()->flash('success', 'Data Berhasil Di Hapus!');

        return redirect()->route('guru');
    }

}
