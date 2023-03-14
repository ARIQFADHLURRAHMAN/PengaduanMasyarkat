@extends('layouts.admin')

@section('header', 'Data Masyarakat')

@section('judul', 'Halaman Masyarakat')

@section('css')
     <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
@endsection

@section('content')
     <table id="example" class="table">
          <thead>
               <tr>
                    <th class="text-center">No</th>
                    <th class="text-center">Nik</th>
                    <th class="text-center">Nama</th>
                    <th class="text-center">Username</th>
                    <th class="text-center">Telphone</th>
                    <th class="text-center">Detail</th>
               </tr>
          </thead>
          <tbody class="text-center"> 
               @foreach ($masyarakat as $k => $v)
                    <tr>
                         <td>{{ $k += 1}}</td>
                         <td>{{ $v->nik}}</td>
                         <td>{{ $v->nama}}</td>
                         <td>{{ $v->username}}</td>
                         <td>{{ $v->telp}}</td>
                         <td>
                              <a href="{{ route('masyarakat.show', $v->nik) }}" class="btn btn-primary">Lihat Masyarakat</a>
                         </td>
                    </tr>
               @endforeach
          </tbody>
     </table>
@endsection

@section('js')
     <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
     <script>
     $(document).ready(function () {
          $('#example').DataTable();
     });
     </script>
@endsection
