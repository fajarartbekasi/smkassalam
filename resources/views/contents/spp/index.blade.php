@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-12">
        <div class="alert alert-primary" role="alert">
            <div class="d-flex justify-content-between">
                <div class="d-flex align-item-center">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" widht="20" height="20">
                        <path
                            d="M0 4c0-1.1.9-2 2-2h15a1 1 0 0 1 1 1v1H2v1h17a1 1 0 0 1 1 1v10a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4zm16.5 9a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z"
                            fill="#fff" />
                    </svg>
                    <h6 class="ml-2">Data SPP</h6>
                </div>
                <div class="">
                    <form action="" method="get">
                        <div class="d-flex align-item-center">
                            <div class="form-group mr-3">
                                <input type="date" name="" id="" class="form-control" placeholder="">
                            </div>
                            <div class="form-group">
                                <input type="date" name="" id="" class="form-control" placeholder="">
                            </div>
                            <div class="ml-3">
                                <button type="submit" class="btn btn-outline-info">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" width="20" height="20">
                                        <path
                                            d="M4 16H0V6h20v10h-4v4H4v-4zm2-4v6h8v-6H6zM4 0h12v5H4V0zM2 8v2h2V8H2zm4 0v2h2V8H6z"
                                            fill="#1b4b72" /></svg>

                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-12">
        <div class="card border-0 shadow">
            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Kelas</th>
                            <th>Nama Siswa</th>
                            <th>Total</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <a href="http://" class="btn btn-outline-primary btn-sm">
                                    XII RPL
                                </a>
                            </td>
                            <td>Taylor otwell</td>
                            <td>Rp.15.000.000</td>
                            <td>
                                <span class="badge badge-info text-white">
                                    Lunas
                                </span>
                            </td>
                            <td>
                                <a href="http://" class="btn btn-outline-info btn-sm">Edit</a>
                                <button type="submit" class="btn btn-outline-danger btn-sm">
                                    cetak kwitansi
                                </button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection