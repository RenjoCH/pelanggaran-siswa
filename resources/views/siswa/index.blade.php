@extends('template.template')

@section('page-title')
Halaman Detail Siswa
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Siswa</div>

                <div class="card-body">
                    <form action="{{route('siswa.store')}}" method="post">
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

                            <div class="col-md-12 mt-2">
                                <div class="form-group">
                                    <button type="submit" class="btn btn-success">Tambah</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            
        </div>
    </div>
</div> 


<div class="section-wrapper">
          <label class="section-title">Data Pelanggaran Siswa</label>
          <p class="mg-b-20 mg-sm-b-40">Data Semua Siswa Yang Melanggar Ditahun 2024-2025.</p>

          <div class="table-wrapper">
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
          </div><!-- table-wrapper -->
        </div>

@endsection