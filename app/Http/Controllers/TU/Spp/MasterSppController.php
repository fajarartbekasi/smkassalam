<?php

namespace App\Http\Controllers\TU\Spp;

use App\Kela;
use App\Categorie;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MasterSppController extends Controller
{
    public function index()
    {
        $spp = Categorie::all();
        return view('tatausaha.spp.index', compact('spp'));
    }
    public function create()
    {
        $kelas = Kela::all();

        return view('tatausaha.spp.create', compact('kelas'));
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'kela_id'               => 'required',
            'tahun_ajaran'          => 'required',
            'keterangan'            => 'required',
            'biaya_semester'        => 'required',
        ]);



        $lisSpp = Categorie::create(
            [
                'kela_id'               => $request->input('kela_id'),
                'tahun_ajaran'          => $request->input('tahun_ajaran'),
                'keterangan'            => $request->input('keterangan'),
                'psb'                   => $request->input('psb'),
                'pts_ganjil'            => $request->input('pts_ganjil'),
                'pts_genap'             => $request->input('pts_genap'),
                'spas'                  => $request->input('spas'),
                'pat'                   => $request->input('pat'),
                'raport'                => $request->input('raport'),
                'daftar_ulang'          => $request->input('daftar_ulang'),
                'un'                    => $request->input('un'),
                'biaya_semester'        => $request->input('biaya_semester'),
            ]
            );

            return redirect()->back()->with('flash', 'berhasil menambahkan data list spp');
    }
    public function edit($id)
    {
        $data = [
            'categorie'   => Categorie::find($id),
            'kelas'       => Kela::all(),
        ];

        return view('tatausaha.spp.edit', $data);
    }
    public function update(Request $request, $id)
    {
        $spp = Categorie::with('kela')->find($id);

        $spp->update($request->all());

        return redirect()->back()->with('flash', 'list spp berhasil diperbarui');

    }
    public function destroy($id)
    {
        $spp = Categorie::find($id);

        $spp->destroy();

        return redirect()->back()->with('flash', 'List berhasil dihapus terimakasih');
    }
}
