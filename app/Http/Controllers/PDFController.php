<?php

namespace App\Http\Controllers;

use App\Models\DataOrtu;
use App\Models\DataPendukung;
use App\Models\DataSiswa;
use App\Models\User;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class PDFController extends Controller
{
    //
    public function generatePDF($id)
    {
        $user = User::findOrFail($id);

        $pdf = PDF::loadview(
            'user.cetakPDF',
            ['user' => $user]
        );

        return $pdf->download('Biodata.pdf');
    }
}
