<?php

namespace App\Http\Controllers\Admin;

use App\Models\Pengaduan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LaporanController extends Controller
{
    public function index(){
        return view('Admin.Laporan.index');
    }

    public function getLaporan(Request $request){
        
        $form = $request->form . '' . '00:00:00';
        $to = $request->to . '' . '23:59:59';

        $pengaduan = Pengaduan::whereBetween('tgl_pengaduan', [$form-> $to])->get();
        
        return view('Admin.Laporan.index', ['pengaduan' => $pengaduan, 'from' => $form, 'to' => $to]);
    }
}
