@extends('layouts.admin')

@section('judul', 'Detail Pengaduan')

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

          .btn-primary {
               background: #6c757d;
               border: 1px solid #757d6c;
          }
     </style>

@endsection

@section('header')
     <a href="{{ route('pengaduan.index') }}" class="text-primary">Data Pengaduan</a>
     <a href="#" class="text-grey"></a>
     <a href="#" class="text-grey">Detail Pengaduan</a>
@endsection

@section('content')
     <div class="row">
          <div class="col-lg-6 col-12">
               <div class="card">
                    <div class="card-header text-center">
                         Pengaduan Masyarakat
                    </div>
               </div>
               <div class="card-body">
                    <table class="table">
                         <tbody>
                              <tr>
                                   <th>Nik</th>
                                   <td>:</td>
                                   <td>{{ $pengaduan->nik}}</td>
                              </tr>
                              <tr>
                                   <th>Tanggal Pengaduan</th>
                                   <td>:</td>
                                   <td>{{ $pengaduan->tgl_pengaduan}}</td>
                              </tr>
                              <tr>
                                   <th>Foto</th>
                                   <td>:</td>
                                   <td><img src="{{ Storage::url($pengaduan->foto)}}" alt="Foto Pengaduan" class="embed-responsive"></td>
                              </tr>
                              <tr>
                                   <th>Isi Laporan</th>
                                   <td>:</td>
                                   <td>{{ $pengaduan->isi_laporan}}</td>
                              </tr>
                              <tr>
                                   <th>Status</th>
                                   <td>:</td>
                                   <td>
                                        @if ($pengaduan->status == '0')
                                             <a href="" class="badge badge-warning text-white">Pending</a>
                                        @elseif($pengaduan->status == 'proses')
                                             <a href="#" class="badge badge-primary">Proses</a>
                                        @else
                                             <a href="#" class="badge badge-success">Selesai</a>
                                        @endif
                                   </td>
                              </tr>
                         </tbody>
                    </table>
               </div>
          </div>
          <div class="col-lg-6 col-12">
               <div class="card">
                    <div class="card-header">
                         <div class="text-center">
                              Tanggapan Petugas
                         </div>
                    </div>
                    <div class="card-body">
                         <form action="{{ route('tanggapan.createOrUpdate') }}" method="POST">
                              @csrf
                              <input type="hidden" name="id_pengaduan" value="{{ $pengaduan->id_pengaduan }}">
                              <div class="form-group">
                                   <label for="status">Status</label>
                                   <div class="input-group mb-3">
                                        <select name="status" id="status" class="custom-select">
                                             @if ($pengaduan->status == '0')
                                                  <option selected value="0">Pending</option>
                                                  <option value="proses">Proses</option>
                                                  <option value="selesai">Selesai</option>
                                             @elseif($pengaduan->status == 'proses')
                                                  <option value="0">Pending</option>
                                                  <option selected value="proses">Proses</option>
                                                  <option value="selesai">Selesai</option>
                                             @else
                                                  <option value="0">Pending</option>
                                                  <option value="proses">Proses</option>
                                                  <option selected value="selesai">Selesai</option>
                                             @endif
                                        </select>
                                   </div>
                              </div>
                              <div class="form-group">
                                   <label for="tanggapan">Tanggapan</label>
                                   <textarea name="tanggapan" id="tanggapan" class="form-control" rows="4" placeholder="Belum ada tanggapan">{{ $tanggapan->tanggapan ?? ''}}</textarea>
                              </div>
                              <button type="submit" class="btn btn-success" style="width: 100%">Kirim Tanggapan</button>
                              @if (Session::has('status'))
                                   <div class="alert alert-succsess mt-2">
                                        {{Session::get('status')}}
                                   </div>
                              @endif
                         </form>
                    </div>
               </div>
          </div>
     </div>
@endsection