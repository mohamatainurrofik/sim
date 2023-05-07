<?php

namespace App\Http\Controllers;

use App\Models\Classess;
use App\Models\Student;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class StudentController extends Controller
{

    public function calendar(){
        return view('calendar');
    }


    public function index(){
        
        $student = Student::orderBy('nis')->simplePaginate(7);
        
        return view('user',['student'=> $student]);
    }

    public function viewprint(Student $student){
       
        
        return view('printuser',['student'=> $student]);
    }

    public function createsiswa(Classess $classess){
        return view('tambahuser', ['classess' => $classess::get()]);
    }

    public function viewsiswa(Student $student){
        return view('viewuser', compact('student'));
    }

    public function savesiswa(Request $request){
        $student = new Student;
        $student->nisn = $request->nisn;
        $student->nis = $request->nis;
        $nm = $request->thumbnail;
        $namagambar = $nm->getClientOriginalName();
        $student->fotopath = $namagambar;
        $nm->move(public_path('image'), $namagambar);
        $student->classess_id_kelas = $request->classess_id_kelas;
        $student->nama = $request->nama;
        $student->tempat_lahir = $request->tempat_lahir;
        $student->tanggal_lahir = $request->tanggal_lahir;
        $student->jenis_kelamin = $request->jenis_kelamin;
        $student->agama = $request->agama;
        $student->alamat = $request->alamat;
        $student->nama_ibu = $request->nama_ibu;
        $student->no_tlp = $request->no_tlp;
        $student->status = "Aktif";
        

        $user = new User;
        
        $user->name = Str::slug($request->nama);
        $user->email = 'Student'.$request->nis.'@schoolemail.com';
        $user->password = Hash::make('belanegara');
        $user->save();
        $student->user_id = $user->id;
        $student->save();
        session()->flash('success', 'Data Berhasil Ditambahkan!');
        return redirect()->route('siswa');
    }

    public function searchsiswa(Request $request){
        $student = Student::query();
        if (request('term')) {
            $student->where('nama', 'Like', '%' . request('term') . '%');
        }

        return $student->orderBy('nisn', 'ASC')->paginate(5);
    }

    public function edit(Student $student){
        return view('edituser', compact('student'));
    }

    public function update(Student $student, Request $request, User $user){

         $student = Student::find($student->nisn);
        $student->nis = $request->nis;
        if($request->thumbnail){
            
        }
        $nm = $request->thumbnail;
        $namagambar = $nm->getClientOriginalName();
        $student->fotopath = $namagambar;
        $nm->move(public_path('image'), $namagambar);
        $student->nama = $request->nama;
        $student->tempat_lahir = $request->tempat_lahir;
        $student->tanggal_lahir = $request->tanggal_lahir;
        $student->jenis_kelamin = $request->jenis_kelamin;
        $student->agama = $request->agama;
        $student->alamat = $request->alamat;
        $student->nama_ibu = $request->nama_ibu;
        $student->no_tlp = $request->no_tlp;
        $student->status = $request->status;
        $student->save();

        if ($request->status == "Tidak Aktif") {
            $user = User::where('name',Str::slug($student->nama))->delete();
        }else{
            $user = User::where('name',Str::slug($student->nama))->update([
                'email' => 'Student'.$request->nis.'@schoolemail.com'
            ]);
        }
        
        session()->flash('success', 'Data Berhasil Di Update!');

        return redirect()->route('siswa');
    }

    public function hapus(Student $student, User $user){
        $student = Student::find($student->nisn);
        $student->delete();

        $user = User::where('name',Str::slug($student->nama))->delete();
        session()->flash('success', 'Data Berhasil Di Hapus!');

        return redirect()->route('siswa');
    }



}
