<?php

namespace App\Http\Controllers;

use App\Novus;
use Barryvdh\DomPDF\PDF;
use Illuminate\Http\Request;

class PdfController extends Controller
{
    public function pdfexport($id)
    {
        $student = Novus::find($id);
        return view('data',compact('student'));
//        $pdf = PDF::loadView('data')->setPaper('a4','portrait');
//
//        $filename=$student->regno;
//        return $pdf->stream($filename.'.pdf');
    }
}
