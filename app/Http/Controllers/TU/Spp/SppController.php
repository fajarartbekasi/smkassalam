<?php

namespace App\Http\Controllers\TU\Spp;

use App\Categorie;
use App\Siswa;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SppController extends Controller
{
    public function edit($id)
    {
        $data = [
            'categorie'     => Categorie::find($id),
            'siswa'         => Siswa::with('kela')->get(),
        ];

        return view('tatausaha.spp.siswa.edit', $data);
    }
    public function upate(Request $request, $id)
    {
        $this->valiadate($request,[
            'wsiswa_id'             => 'required',
            'bulan'                 => 'required',
            'biaya_semester'        => 'required',
            'psb'                   => 'required',
            'pts_ganjil'            => 'required',
            'pts_genap'             => 'required',
            'spas'                  => 'required',
            'pat'                   => 'required',
            'raport'                => 'required',
            'daftar_ulang'          => 'required',
            'total_bayar'           => 'required',
            'tahun_ajaran'          => 'required',
        ]);
    }
}
