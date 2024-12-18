@extends('template.template')

@section('page-title')
Halaman Detail Siswa
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
           

            <div class="card mt-4">

                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <h4 class="card-title">Data siswa yang melanggar</h4>
                        <a href="" class="btn btn-primary" data-toggle="modal" data-target="#modaldemo6">Tambahkan</a>
                    </div>
                    <div class="table-wrapper mt-4">
                        <table id="datatable1" class="table display responsive nowrap">
                            <thead>
                                <th>Nama</th>
                                <th>Tanggal</th>
                                <th>Deskripsi</th>
                                <th>Pilihan</th>
                            </thead>

                            <tbody>
                                @foreach ($data as $item)
                                <tr>
                                    
                                    <td>{{$item->user->name}}</td>
                                    <td>{{$item->tanggal}}</td>
                                    <td>{{$item->deskripsi}}</td>
                                    <td>
                                        <form action="{{route('siswa.destroy',$item->id)}}" method="post">
                                            @csrf
                                            {{method_field('delete')}}
                                            <a href="{{route('siswa.show', $item->id)}}" class="btn btn-info">Detail</a>
                                            <button type="submit" class="btn btn-danger">Hapus</button>
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
</div>

<div id="modaldemo6" class="modal fade">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content rounded overflow-hidden">
            <form action="{{route('siswa.store')}}" method="post">
                <div class="modal-body">
                    @csrf
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>
                                    Nama Siswa
                                </label>
                                <select name="id_user" class="form-control" required>
                                    <option value="">-data siswa-</option>
                                    @foreach($user as $item)
                                    @if(!$item->admin)
                                    <option value="{{$item->id}}">{{$item->name}}</option>
                                    @endif
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>
                                    Jenis Pelanggaran
                                </label>
                                <select name="id_pelanggaran" class="form-control">
                                    @foreach($pelanggaran as $row)
                                    <option value="{{$row->id}}">{{$row->jenis_pelanggaran}}</option>
                                    @endforeach
                                </select>

                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>
                                    tanggal
                                </label>
                                <input type="date" name="tanggal" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>
                                    Deskripsi
                                </label>
                                <textarea name="deskripsi" class="form-control">

                                    </textarea>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success">Tambah</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </form>
        </div><!-- modal-body -->
    </div><!-- modal-content -->
</div><!-- modal-dialog -->




<label class="section-title">Data Pelanggaran Siswa</label>
<p class="mg-b-20 mg-sm-b-40">Data Semua Siswa Yang Melanggar Ditahun 2024-2025.</p>



@endsection