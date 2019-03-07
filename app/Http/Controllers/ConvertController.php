<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use Spatie\Browsershot\Browsershot;

class ConvertController extends Controller
{
    public function savePNG()
    {
        //fullPage
        Browsershot::url('http://dcetest.com/treereact/index.html')->windowSize(4734.5,2038)->waitUntilNetworkIdle()->save('svg.png');
        return ['success'=>1];
    }
}
