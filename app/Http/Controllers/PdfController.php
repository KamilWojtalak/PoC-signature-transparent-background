<?php

namespace App\Http\Controllers;

use App\Models\Signature;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class PdfController extends Controller
{
    public function index(Request $request)
    {
        $data = [
            // 'signaturePng' => Signature::first()->url,
            'signaturePng' => 'https://place-hold.it/100/100',
        ];

        $pdf = Pdf::loadView('pdf.default', $data)
            ->setPaper('a4', 'portrait');

        $pdf->setOption(['isRemoteEnabled' => true]);
        $pdf->setWarnings(true);

        return $pdf->download('default.pdf');
    }

    public function test(Request $request)
    {
        $data = [
            'signaturePng' => Signature::first()->url,
        ];

        return view('pdf.default', $data);
    }
}
