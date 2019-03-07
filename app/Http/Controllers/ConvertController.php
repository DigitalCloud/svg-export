<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use Spatie\Browsershot\Browsershot;

class ConvertController extends Controller
{
    public function savePNG()
    {
        Browsershot::url('http://dcetest.com/treereact/index.html')->windowSize(1920, 1080)->save('svg.png');
        return ['success'=>1];
    }
}
