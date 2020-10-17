<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GuruController extends Controller
{
    //halaman index
    public function index()
    {
        $d['nama'] = "Herry Prasetyo";
        $d['pelajaran'] = ["PBO", "PPL", "PWPB","Basis Data", "PEMDAS"];
        // return view('guru', compact('nama','pelajaran'));
        // return view('guru', [ 'nama' => $nama, 'pelajaran'=> $pelajaran]);
        return view('guru', $d);
    }
}
