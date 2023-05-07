<?php

namespace App\Http\Controllers;

use App\Models\pengumuman;
use Illuminate\Http\Request;

class PengumumanController extends Controller
{
    public function index(){
        $pengumuman = pengumuman::simplePaginate(7);
        return view('pengumuman',['pengumuman'=> $pengumuman]);

    }

    public function createpengumuman(){
        return view('tambahpengumuman');
    }

    public function savepengumuman(Request $request){
        $pengumuman = new pengumuman;
        $pengumuman = $request->all();
        pengumuman::create($pengumuman);
        session()->flash('success', 'Data Berhasil Ditambahkan!');
        return redirect()->route('pengumuman');
    }

    public function hapuspengumuman(pengumuman $pengumuman){
        $pengumuman = pengumuman::find($pengumuman->id);
        $pengumuman->delete();

        session()->flash('success', 'Data Berhasil Di Hapus!');

        return redirect()->route('pengumuman');
    }
}
