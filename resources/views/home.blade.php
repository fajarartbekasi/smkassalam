@extends('layouts.app')

@section('content')
@role('SISWA')
<div class="container">
    <div class="row justify-content-center">
            <div class="col-md-12">
                <h4 class="text-muted">Pembayaran terakhir anda</h4>
            </div>
        @foreach ($pembayaran as $sppSiswa)
                <div class="col-md-12">
                    <div class="card border-0 shadow">
                        <div class="card-body">
                          <table class="table table-striped">
                              <thead>
                                  <tr>
                                    <th class="text-center"> <small class="text-muted">SPP</small></th>
                                    <th class="text-center"> <small class="text-muted">BULAN</small></th>
                                    <th class="text-center"> <small class="text-muted">PSB</small></th>
                                    <th class="text-center"> <small class="text-muted">PTS GANJIL</small> </th>
                                    <th class="text-center"> <small class="text-muted">PTS GENAP</small> </th>
                                    <th class="text-center"> <small class="text-muted">SPAS</small> </th>
                                    <th class="text-center"> <small class="text-muted">PAT</small></th>
                                    <th class="text-center"> <small class="text-muted">RAPORT</small> </th>
                                    <th class="text-center"> <small class="text-muted">UN</small> </th>
                                    <th class="text-center"> <small class="text-muted">DAFTAR ULANG</small></th>
                                    <th class="text-center"> <small class="text-muted">Dibayar</small></th>
                                  </tr>
                              </thead>
                              <tbody>
                                  <tr class="text-center">
                                      @if(is_null($sppSiswa->wsiswa->first()->pembayarans->first()->biaya_semester))
                                        <td><span class="badge badge-danger">BeLum Lunas</span></td>
                                        @else
                                        <td><span class="badge badge-info">Lunas</span></td>
                                      @endif
                                      <td>{{$sppSiswa->wsiswa->first()->pembayarans->first()->bulan}}</td>
                                      @if(is_null($sppSiswa->wsiswa->first()->pembayarans->first()->psb))
                                        <td><span class="badge badge-danger">BeLum Lunas</span></td>
                                        @else
                                        <td><span class="badge badge-info">Lunas</span></td>
                                      @endif
                                      @if(is_null($sppSiswa->wsiswa->first()->pembayarans->first()->pts_ganjil))
                                        <td><span class="badge badge-danger">BeLum Lunas</span></td>
                                      @else
                                        <td><span class="badge badge-info">Lunas</span></td>
                                      @endif
                                      @if(is_null($sppSiswa->wsiswa->first()->pembayarans->first()->pts_genap))
                                        <td><span class="badge badge-danger">BeLum Lunas</span></td>
                                      @else
                                        <td><span class="badge badge-info">Lunas</span></td>
                                      @endif
                                      @if(is_null($sppSiswa->wsiswa->first()->pembayarans->first()->spas))
                                        <td><span class="badge badge-danger">BeLum Lunas</span></td>
                                      @else
                                        <td><span class="badge badge-info">Lunas</span></td>
                                      @endif
                                      @if(is_null($sppSiswa->wsiswa->first()->pembayarans->first()->pat))
                                        <td><span class="badge badge-danger">BeLum Lunas</span></td>
                                      @else
                                        <td><span class="badge badge-info">Lunas</span></td>
                                      @endif
                                      @if(is_null($sppSiswa->wsiswa->first()->pembayarans->first()->raport))
                                        <td><span class="badge badge-danger">BeLum Lunas</span></td>
                                      @else
                                        <td><span class="badge badge-info">Lunas</span></td>
                                      @endif
                                      @if(is_null($sppSiswa->wsiswa->first()->pembayarans->first()->un))
                                        <td><span class="badge badge-danger">BeLum Lunas</span></td>
                                      @else
                                        <td><span class="badge badge-info">Lunas</span></td>
                                      @endif
                                      @if(is_null($sppSiswa->wsiswa->first()->pembayarans->first()->daftar_ulang))
                                        <td><span class="badge badge-danger">BeLum Lunas</span></td>
                                      @else
                                        <td><span class="badge badge-info">Lunas</span></td>
                                      @endif
                                      <td>Rp.{{number_format($sppSiswa->wsiswa->first()->pembayarans->first()->daftar_ulang,2)}}</td>
                                      <td>{{$sppSiswa->wsiswa->first()->pembayarans->first()->id}}</td>
                                  </tr>
                              </tbody>
                          </table>
                        </div>
                    </div>
                </div>


        @endforeach
      </div>
    </div>
@endrole
@role('TU')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-12">
        <div class="alert alert-success" role="alert">
        Selamat datang TU
        </div>
         <div class="row">
           <div class="col-md-6">
             <div class="card border-0 shadow">
               <div class="card-body">
                 <div class="d-flex justify-content-center mb-3">
                   <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 20 20">
                    <path fill="#212529"
                      d="M10 20a10 10 0 1 1 0-20 10 10 0 0 1 0 20zm1-5h1a3 3 0 0 0 0-6H7.99a1 1 0 0 1 0-2H14V5h-3V3H9v2H8a3 3 0 1 0 0 6h4a1 1 0 1 1 0 2H6v2h3v2h2v-2z" />
                    </svg>
                 </div>
                 <a href="{{route('tata-usaha.cek-data.spp.siswa')}}" class="text-muted">
                  <h5 class="text-center">Cek SPP</h5>
                </a>

               </div>
             </div>

           </div>
           <div class="col-md-6">
            <div class="card border-0 shadow">
              <div class="card-body">
                <div class="d-flex justify-content-center mb-3">
                  <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 20 20">
                    <path fill="#212529"
                      d="M5 5a5 5 0 0 1 10 0v2A5 5 0 0 1 5 7V5zM0 16.68A19.9 19.9 0 0 1 10 14c3.64 0 7.06.97 10 2.68V20H0v-3.32z" />
                  </svg>
                </div>
                <a href="http://" class="text-muted">
                  <h5 class="text-center">Total User {{$totalUser}}</h5>
                </a>

              </div>
            </div>

          </div>
        </div>
    </div>
  </div>
</div>
@endrole
@endsection
