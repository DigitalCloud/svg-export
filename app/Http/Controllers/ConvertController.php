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

    public function savePNG($memberId)
    {
        //fullPage
        Browsershot::url(asset('/show/'.$memberId))
            //->windowSize(1600,900)
            ->windowSize(3830,1302)
            //->fullPage()
            ->waitUntilNetworkIdle()
            ->deviceScaleFactor(2)
            ->fit(Manipulations::FIT_CONTAIN, 1600, 800)
            ->save('svg.png');
        return ['success'=>1];
    }
}
