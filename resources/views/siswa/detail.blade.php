@extends('template.template')

@section('page-title')
Halaman Detail Siswa
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card mt-3">
                <div class="card-body p-4">
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <tr>
                                <th>Nama Siswa</th>
                                <td>{{$data->nama_siswa}}</td>
                            </tr>
                            <tr>
                                <th>Jenis Pelanggaran</th>
                                <td>{{$data->pelanggaran->jenis_pelanggaran}}</td>
                            </tr>
                            <tr>
                                <th>Hukuman</th>
                                <td>{{$data->pelanggaran->hukuman}}</td>
                            </tr>
                            <tr>
                                <th>Tanggal</th>
                                <td>{{$data->tanggal}}</td>
                            </tr>
                            <tr>
                                <th>Deskripsi</th>
                                <td>{{$data->deskripsi}}</td>
                            </tr>
                        </table>

                        <a href="{{route('siswa.index')}}" class="btn btn-warning" style="margin: 10px;">Kembali</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection