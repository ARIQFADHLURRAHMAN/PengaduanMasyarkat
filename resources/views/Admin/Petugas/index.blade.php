@extends('layouts.admin')

@section('css')
     <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
@endsection

@section('header', 'Halaman Petugas')

@section('judul', 'Halaman Petugas')

@section('content')
     <table id="petugasTable" class="table">
          <a href="{{ route('petugas.create') }}" class="btn btn-success mb-3" style="width: 100%" >Tambah Petugas</a>
          <thead class="text-center"> 
               <tr>
                    <td class="text-center">No</td>
                    <td class="text-center">Nama Petugas</td>
                    <td class="text-center">Username</td>
                    <td class="text-center">Telephone</td>
                    <td class="text-center">Level</td>
                    <td class="text-center">Detail</td>
               </tr>
          </thead>
          <tbody class="text-center">
               @foreach ($petugas as $k => $v)
               <tr>
                    <td>{{ $k += 1 }}</td>
                    <td>{{ $v->nama_petugas }}</td>
                    <td>{{ $v->username }}</td>
                    <td>{{ $v->telp }}</td>
                    <td>{{ $v->level }}</td>
                    <td>
                         <a href="{{ route('petugas.edit', $v->id_petugas) }}" class="btn btn-primary">Lihat Petugas</a>     
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
          $('#petugasTable').DataTable();
     });
     </script>
@endsection