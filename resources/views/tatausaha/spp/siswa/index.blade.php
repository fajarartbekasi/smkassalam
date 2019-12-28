@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card border-0 shadow">
                <div class="card-body">
                    <div class="py-3 mb-3">
                        <form action="{{route('tata-usaha.cari-report.pertanggal')}}" method="GET">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">Dari tanggal</label>
                                        <input type="date" name="tgl_awal" class="form-control" id="">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">Sampai tanggal</label>
                                        <input type="date" name="tgl_akhir" class="form-control" id="">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-outline-info">Cari report</button>
                                </div>
                            </div>
                        </form>
                    </div>

                    <div class="py-2">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Nama</th>
                                    <th>Kelas</th>
                                    <th>Dibayarkan</th>
                                    <th>Tanggal Bayar</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($sppSiswas as $sppSiswa)
                                    <tr>
                                        <td>{{$sppSiswa->wsiswa->first()->siswas->first()->user->name}}</td>
                                        <td>{{$sppSiswa->wsiswa->first()->siswas->first()->kela->nama_kelas}} - {{$sppSiswa->wsiswa->first()->siswas->first()->kela->grade}}</td>
                                        <td>Rp.{{number_format($sppSiswa->biaya_semester, 2)}}</td>
                                        <td>{{$sppSiswa->tgl_bayar}}</td>
                                        <td>
                                            <form action="" method="post">
                                                <a href="{{route('tata-usaha.cek-data.details.spp.siswa', $sppSiswa->id)}}}" class="btn btn-outline-info btn-sm">Details</a>
                                            </form>
                                        </td>
                                    </tr>


                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection