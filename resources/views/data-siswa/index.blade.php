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
                        <h4 class="card-title">Data Siswa</h4>
                        <a href="" class="btn btn-primary" data-toggle="modal" data-target="#modaldemo6">Tambahkan</a>

                    </div>



                    <div class="table-wrapper mt-4">
                        <table id="datatable1" class="table display responsive nowrap">
                            <thead>
                                <th>Nama</th>
                                <th>Email</th>
                            </thead>

                            <tbody>
                                @foreach ($user as $item)
                                <tr>
                                    <td>{{$item->name}}</td>
                                    <td>{{$item->email}}</td>
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
            <form action="{{route('data-siswa.store')}}" method="post">
                <div class="modal-body">
                    @csrf
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>
                                    Nama Siswa
                                </label>
                                <input type="text" name="name" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>
                                    Email
                                </label>
                                <input type="email" name="email" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>
                                    Password
                                </label>
                                <input type="password" name="password" class="form-control">
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