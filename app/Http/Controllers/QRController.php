<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class QRController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function create()
    {
        QrCode::generate('https://codingtricks.io', '../public/QRCode.svg');
	    return redirect()->route('welcome');
    }
}
