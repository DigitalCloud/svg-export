<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Spatie\Browsershot\Browsershot;

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
            //->windowSize(3830,1302)//2794.5
                ->fullPage()
            ->waitUntilNetworkIdle()
            ->deviceScaleFactor(2)
            ->save('svg.png');
        return ['success'=>1];
    }
}
