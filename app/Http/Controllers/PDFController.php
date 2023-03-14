<?php

namespace App\Http\Controllers;
use PDF;

use App\Models\Pengaduan;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class PDFController extends Controller
{
    public function exportpdf()
    {
        $data = Pengaduan::all();
        // dd($data);
        $pdf = PDF::loadView('Admin.pdf.exportdf', compact('data'));
        return $pdf->stream('file.pdf');
    }
}