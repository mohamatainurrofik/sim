<?php

namespace App\Http\Controllers;

use App\Models\Classess;
use App\Models\exam;
use App\Models\mapel;
use App\Models\Student;
use Illuminate\Http\Request;

class ExamController extends Controller
{
    public function index(){
        
        $exam = exam::get();
        $class = Classess::get();
        $mapel = mapel::get();
        return view('ujian',['exam'=> $exam , 'class'=> $class ,'mapel' => $mapel]);
    }

    public function viewujian(Classess $class, mapel $mapel , exam $exam){
        $mapel = mapel::where('classess_id_kelas', $class->id_kelas)->get();
        // $exam = exam::where('mapel_id_mapel', $exam->id_ujian)->get();
        return view('viewujian', [ 'class' => $class, 'mapel' => $mapel, compact('mapel')  ]);
    }

    public function tambahujian(mapel $mapel, exam $exam, Classess $class){
        
        $ujian = exam::where('mapel_id_mapel','$mapel->id_mapel')->get();
        return view('viewujian1',['mapel' => $mapel, 'ujian' => $ujian]);
    }

    public function saveujian(Request $request ,mapel $mapel, Classess $class, exam $exam){
        

        $exam = new exam;
        $exam = $request->all();
        exam::create($exam);
        session()->flash('success', 'Data Berhasil Ditambahkan!');
        return redirect()->route('home');
    }

}
