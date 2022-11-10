<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class CertificateController extends Controller
{


    public function makeimage($name = "Vijay Amule")
    {
        // $name = "Vijay Amule";
        $date = date('d M Y');
        $sign = "Vijay Amule";
        $cer_no = rand(000000000, 999999999);
        $img = Image::make(public_path('image/certificate.png'));
        $img->text($name, 1050, 680, function ($font) {
            $font->file(public_path('image/font.ttf'));
            $font->size(50);
            $font->color('#c62e46');
            $font->align('center');
            $font->valign('bottom');
            $font->angle(0);
        });

        $img->text($date, 570, 1190, function ($font) {
            $font->file(public_path('image/font.ttf'));
            $font->size(50);
            $font->color('#c62e46');
            $font->align('center');
            $font->valign('bottom');
            $font->angle(0);
        });

        $img->text($sign, 1450, 1190, function ($font) {
            $font->file(public_path('image/signfont.otf'));
            $font->size(50);
            $font->color('#c62e46');
            $font->align('center');
            $font->valign('bottom');
            $font->angle(0);
        });
        $img->text($cer_no, 1000, 1350, function ($font) {
            $font->file(public_path('image/font.ttf'));
            $font->size(50);
            $font->color('#c62e46');
            $font->align('center');
            $font->valign('bottom');
            $font->angle(0);
        });
        QrCode::size(300)
            ->format('png')
            ->color(49, 60, 221)
            ->style('round')
            ->eye('square')
            ->generate('Name : ' . $name . ', Certificate No. : ' . $cer_no . ', Date : ' . $date . ' Verified Certificate.', public_path('image/qrcode.png'));
        $img->insert(public_path('image/qrcode.png'), 'bottom-left', 450, 450);
        $img->save(public_path('image/certificate1.png'));
        return view('cerificate');
    }
}
