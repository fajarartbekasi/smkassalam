@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card border-0 shadow">
                <div class="card-body">
                    <h5>Nama Siswa : {{$detailSpp->siswas->first()->user->name}}, {{$detailSpp->siswas->first()->kela->nama_kelas}} - {{$detailSpp->siswas->first()->kela->grade}}</h5>

                    <h6>
                        Rincian bayaran
                    </h6>

                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>SPP</th>
                                <th>BULAN</th>
                                <th>PSB</th>
                                <th>PTS GENAP</th>
                                <th>PTS GANJIL</th>
                                <th>SPAS</th>
                                <th>PAT</th>
                                <th>RAPORT</th>
                                <th>UN</th>
                                <th>DAFTAR ULANG</th>
                                <th>Dibayar</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                @if(is_null($detailSpp->pembayarans->first()->biaya_semester))
                                    <td><span class="badge badge-danger">Belum Lunas</span></td>
                                @else
                                   <td><span class="badge badge-info text-white">Lunas</span></td>
                                @endif
                                <td>{{$detailSpp->pembayarans->first()->bulan}}</td>
                                @if (is_null($detailSpp->pembayarans->first()->psb))
                                    <td><span class="badge badge-danger">Belum Lunas</span></td>
                                @else
                                <td><span class="badge badge-info text-white">Lunas</span></td>
                                @endif
                                @if (is_null($detailSpp->pembayarans->first()->pts_ganjil))
                                <td><span class="badge badge-danger">Belum Lunas</span></td>
                                @else
                                <td><span class="badge badge-info text-white">Lunas</span></td>
                                @endif
                                @if (is_null($detailSpp->pembayarans->first()->pts_genap))
                                <td><span class="badge badge-danger">Belum Lunas</span></td>
                                @else
                                <td><span class="badge badge-info text-white">Lunas</span></td>
                                @endif
                                @if (is_null($detailSpp->pembayarans->first()->spas))
                                <td><span class="badge badge-danger">Belum Lunas</span></td>
                                @else
                                <td><span class="badge badge-info text-white">Lunas</span></td>
                                @endif
                                @if (is_null($detailSpp->pembayarans->first()->pat))
                                <td><span class="badge badge-danger">Belum Lunas</span></td>
                                @else
                                <td><span class="badge badge-info text-white">Lunas</span></td>
                                @endif
                                @if (is_null($detailSpp->pembayarans->first()->raport))
                                <td><span class="badge badge-danger">Belum Lunas</span></td>
                                @else
                                <td><span class="badge badge-info text-white">Lunas</span></td>
                                @endif
                                @if (is_null($detailSpp->pembayarans->first()->un) )
                                <td><span class="badge badge-danger">Belum Lunas</span></td>
                                @else
                                    <td><span class="badge badge-info text-white">Lunas</span></td>

                                @endif
                                @if (is_null($detailSpp->pembayarans->first()->daftar_ulang))
                                <td><span class="badge badge-danger">Belum Lunas</span></td>
                                @else
                                <td><span class="badge badge-info text-white">Lunas</span></td>
                                @endif
                                <td>Rp.{{number_format($detailSpp->pembayarans->first()->total_bayar, 2)}}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection