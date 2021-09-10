<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class QrcodeController extends Controller
{
    public function qrcode($id) {
        $context['id'] = $id;
        return view('qrcode/display', $context);
    }
}
