<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Spatie\Browsershot\Browsershot;
use Spatie\Image\Manipulations;

class ConvertController extends Controller
{
    public function show(Request $request, $memberId)
    {
        return view('svg', ['memberId'=>$memberId]);
    }

    public function savePNG(Request $request, $memberId)
    {
        $w = $request->input('w');
        $h = $request->input('h');
        //fullPage
        $return = Browsershot::url(asset('/show/'.$memberId))
            ->windowSize($w?$w:1600,$h?$w:900)
            //->windowSize($w?$w:3830,$h?$w:1350)
            //->windowSize($w?$w:1600,$h?$w:900)
            //->fullPage()
            //->waitUntilNetworkIdle()
            ->deviceScaleFactor(2)
            //->fit(Manipulations::FIT_CONTAIN, 1600, 800)
            ->save('svg.png');

//        Browsershot::html($return)
//            ->savePdf('svg.pdf');

        return ['success'=>$return, 'w'=>$w, 'h'=>$h];
    }
}
