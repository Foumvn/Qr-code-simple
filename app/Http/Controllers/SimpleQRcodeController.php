<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class SimpleQRcodeController extends Controller
{
// L'action "generate" de la route "simple-qrcode" (GET)
public function generate () {

    

    # 2. On génère un QR code de taille 200 x 200 px
    $qrcode = Qrcode::encoding("UTF-8")
    ->color(17, 19, 21)
    ->backgroundColor(245, 234, 62)
    ->size(300)
    ->generate("https://akilischool.com/cours/laravel-generer-un-qr-code-avec-simple-qrcode"); 
    
   // $qrcode = QrCode::size(200)->generate("Je suis un QR Code", '../public/image/texte.png');
    
    # 3. On envoie le QR code généré à la vue "simple-qrcode"
    return view("simple-qrcode", compact('qrcode'));
           }
}
