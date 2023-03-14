@extends('layouts.admin')

@section('header', 'Halaman Laporan')

@section('judul', 'Laporan Pengaduan')

@section('content')
     <div class="row">
          <div class="col-lg-4 col-12">
               <div class="card">
                    <div class="card-header">
                         Cari Berdasarkan Tanggal
                    </div>
                    <div class="card-body">
                         <form action="{{ route('laporan.getLaporan') }}" method="POST">
                              @csrf
                              <div class="form-group">
                                   <input type="text" name="from" class="form-control" placeholder="Tanggal Awal" onfocus="(this.type='date')" onfocusout="(this.type='text')">
                              </div>
                              <div class="form-group">
                                   <input type="text" name="to" class="form-control" placeholder="Tanggal Akhir" onfocus="(this.type='date')" onfocusout="(this.type='text')">
                              </div>
                              <button type="submit" class="btn btn-success" style="width: 100%">Cari laporan</button>
                         </form>
                    </div>
               </div>
          </div>
          <div class="col-lg-8 col-12">
               <div class="card">
                    <div class="card-header">
                         Data Berdasarkan Tanggal
                    </div>
                    <div class="card-body">
                         @if ($pengaduan ?? '')
                         <table class="table">
                              <thead>
                                   <tr>
                                        <th>NO</th>
                                        <th>Tanggal</th>
                                        <th>Isi laporan</th>
                                        <th>Status</th>
                                   </tr>
                              </thead>
                              <tbody>
                                   @foreach ($pengaduan as $k => $v)
                                        <td>{{ $k += 1}}</td>
                                        <td>{{ $v ->tgl_pengaduan}}</td>
                                        <td>{{ $v ->isi_laporan}}</td>
                                        <td>
                                             @if ($v->status == '0')
                                                  <a href="#" class="badge badge-warning text-white">Pending</a>
                                             @elseif($v->status == 'proses')
                                                  <a href="#" class="badge badge-primary">Proses</a>
                                             @else
                                                  <a href="#" class="badge badge-success">Selesai</a>
                                             @endif
                                        </td>
                                   @endforeach
                              </tbody>
                         </table>
                         @else
                              <div class="text-center">
                                   Tidak ada data
                              </div>
                         @endif
                    </div>
               </div>
          </div>
     </div>
@endsection
