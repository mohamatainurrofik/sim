<?php

namespace App\Http\Controllers;

use App\Models\Classess;
use App\Models\Student;
use App\Models\teacher;
use App\Models\pengumuman;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $totalstudent = Student::all()->count();
        $totalkelas = Classess::all()->count();
        $totalguru = teacher::all()->count();
        $pengumuman = pengumuman::get();
        $hitungpengumuman = pengumuman::all()->count();


        return view('home',['totalguru' => $totalguru ,'pengumuman' => $pengumuman, 'totalstudent' =>$totalstudent, 'totalkelas' =>$totalkelas, 'hitungpengumuman' => $hitungpengumuman]);
    }
}
