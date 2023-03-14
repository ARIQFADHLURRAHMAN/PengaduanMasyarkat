@extends('layouts.admin')

@section('judul', 'Form Edit Petugas')

@section('css')
     <style>
          .text-primary:hover{
               text-decoration: underline
          }

          .text-grey {
               color: #6c757d;
          }

          .text-grey:hover {
               color: #6c757d;
          }
     </style>
@endsection

@section('header')
     <a href="{{ route('pengaduan.index') }}" class="text-primary">Edit Data Petugas</a>
     <a href="#" class="text-grey"></a>
     <a href="#" class="text-grey">Form Edit Petugas</a>
@endsection

@section('content')
          <div class="container">
               <div class="card-header mr-3">
                    Form Rambah Petugas
               </div>
               <div class="card-body">
                    <form action="{{ route('petugas.update', $petugas->id_petugas) }}" method="POST">
                    @csrf
                    @method('PATCH')
                    <div class="form-group">
                         <label for="nama_petugas">Nama Petugas</label>
                         <input type="text" value="{{ $petugas->nama_petugas }}" name="nama_petugas" id="nama_petugas" class="form-control" required placeholder="Nama Petugas">
                    </div>
                    <div class="form-group">
                         <label for="username">Username</label>
                         <input type="text" value="{{ $petugas->username }}" name="username" id="username" class="form-control" required placeholder="Username">
                    </div>
                    <div class="form-group">
                         <label for="password">Password</label>
                         <input type="password" value="{{ $petugas->password }}" name="password" id="password" class="form-control" required placeholder="Password">
                    </div>
                    <div class="form-group">
                         <label for="telp">Telp</label>
                         <input type="number" value="{{ $petugas->telp }}" name="telp" id="telp" class="form-control" required placeholder="+62">
                    </div>
                    <div class="form-group">
                         <label for="level">Level</label>
                         <div  class="input-group mt-3">
                              <select name="level" id="level" class="custom-select">
                                   @if ($petugas->level == 'admin')
                                        <option selected value="admin">Admin</option>
                                        <option value="petuagas">Petugas</option>
                                   @else
                                        <option value="admin">Admin</option>
                                        <option selected value="petuagas">Petugas</option>
                                   @endif
                              </select>
                         </div>
                    </div>
                    <button type="submit" class="btn btn-warning">Update</button>
                    </form>
               </div>
          </div>
@endsection
