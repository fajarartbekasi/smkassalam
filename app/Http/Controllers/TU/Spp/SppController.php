<?php

namespace App\Http\Controllers\TU\Spp;

use App\Siswa;
use App\Categorie;
use App\Pembayaran;
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
    public function update(Request $request, $id)
    {
        $this->validate($request,[
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
            // 'tahun_ajaran'          => 'required',
        ]);

        Pembayaran::create([
            'wsiswa_id'                 => $request->input('wsiswa_id'),
            'categorie_id'              => $id,
            'bulan'                     => $request->input('bulan'),
            'biaya_semester'            => $request->input('biaya_semester'),
            'psb'                       => $request->input('psb'),
            'pts_genap'                 => $request->input('pts_genap'),
            'pts_ganjil'                => $request->input('pts_ganjil'),
            'spas'                      => $request->input('spas'),
            'pat'                       => $request->input('pat'),
            'raport'                    => $request->input('raport'),
            'daftar_ulang'              => $request->input('daftar_ulang'),
            'total_bayar'               => $request->input('total_bayar'),
            // 'tahun_ajaran'              => $request->input('tahun_ajaran'),
        ]);

        return redirect()->back()->with('flash', 'spp berhasil di input');
    }
}
