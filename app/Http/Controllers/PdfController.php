<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Barryvdh\DomPDF\Facade\Pdf;

class PdfController extends Controller
{

    public function home()
    {
        return view('home');
    }

    public function createPDF(Request $request)
    {
        $request->validate([
            'label1' => 'required|bail',
            'label2' => 'required|bail',
            'label3' => 'required|bail',
            'label4' => 'required|bail',
            'label5' => 'required|bail',
            'label6' => 'required|bail',
        ]);

        $pdf = PDF::loadView('certificate', [
            'template' => $this->getDataURI(storage_path('app/pdfTemplates/blank.png')),
            'data' => [
                'headerText' => $request->post("label1"),
                'name' => $request->post("label3"),
                'title' => $request->post("label4"),
                'description' => $request->post("label2"),
                'signerName' => $request->post("label5"),
                'signerTitle' => $request->post("label6"),
            ],
        ])->setPaper('a4', 'landscape');
        return $pdf->stream();
    }

    public function getDataURI($imagePath)
    {
        if (!file_exists($imagePath)) return '';
        $extension = pathinfo($imagePath, PATHINFO_EXTENSION);
        $data = file_get_contents($imagePath);
        $dataEncoded = base64_encode($data);
        $base64Str = 'data:image/' . $extension . ';base64,' . $dataEncoded;
        return $base64Str;
    }
}