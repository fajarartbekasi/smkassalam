@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-4">
        <div class="card border-0 shadow">
            <div class="card-header border-0">
                <div class="d-flex justify-content-center">
                    <img src="{{asset('avatar/'. $staff->avatar)}}" alt="" srcset="">

                </div>
                <div class="text-center">
                    <h4 class="text-muted font-weight-bold">{{$staff->user->name}}</h4>
                    <div class="d-flex ailgn-item-center justify-content-center ">
                        <h6 class="text-muted font-weight-bold">{{$staff->user->email}} &#x2027;</h6>
                        <h6 class="text-info font-weight-bold ml-1">{{$staff->user->akses}}</h6>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <h5 class="font-weight-bold text-muted">Personal informasi</h5>
                <div class="d-flex">
                    <div class="mr-auto">
                        <h6 class="text-muted">NIP</h6>
                        <h6 class="text-muted">Alamat</h6>
                        <h6 class="text-muted">Phone</h6>
                        <h6 class="text-muted">T.T.L</h6>
                        <h6 class="text-muted">Agama</h6>
                        <h6 class="text-muted">Jenis Kelamin</h6>
                        <h6 class="text-muted">Jurusan</h6>
                    </div>
                    <div>
                        <h6 class="text-muted">{{$staff->nip}}</h6>
                        <h6 class="text-muted">{{$staff->alamat}}</h6>
                        <h6 class="text-muted">{{$staff->phone}}</h6>
                        <h6 class="text-muted">{{$staff->tempat_lahir}}, {{$staff->tgl_lahir}}</h6>
                        <h6 class="text-muted">{{$staff->agama}}</h6>
                        <h6 class="text-muted">{{$staff->jenis_kelamin}}</h6>
                        <h6 class="text-muted">{{$staff->bidang}}</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection