@extends('layouts.admin')

@section('css')
     <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
@endsection

@section('header', 'Halaman Pengaduan')

@section('judul', 'Halaman Pengaduan')

@section('content')
<form method="POST" action="{{ route('export.pdf') }}">
     @csrf

     <div class="d-flex justify-content-end">
         <button type="submit" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</button>
     </div>
 </form>
<table id="example" class="display" style="width:100%">
     <thead>
          <tr>
               <th  class="text-center">No</th>
               <th  class="text-center">Tanggal</th>
               <th  class="text-center">Isi Laporan</th>
               <th  class="text-center">Status</th>
               <th  class="text-center">Detail</th>
          </tr>
     </thead>
     <tbody  class="text-center">
          @foreach ($pengaduan as $k => $v)
          <tr>
               <td>{{ $k += 1}}</td>
               <td>{{ $v->tgl_pengaduan->format('Y-m-d') }} </td>
               <td>{{ $v->isi_laporan }}</td>
               <td>
                    @if ($v->status == '0')
                         <a href="#" class="badge badge-warning text-white">Pending</a>
                    @elseif($v->status == 'proses')
                         <a href="#" class="badge badge-primary">Proses</a>
                    @else
                         <a href="#" class="badge badge-success">Selesai</a>
                    @endif
               </td>
               <td>
                    <a href="{{ route('pengaduan.show', $v->id_pengaduan) }}" class="btn btn-primary">Lihat Pengauduan</a>
               </td>
          </tr>
          @endforeach
     </tbody>
@endsection

@section('js')
     <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
     <script>
     $(document).ready(function () {
          $('#example').DataTable();
     });
     </script>
@endsection