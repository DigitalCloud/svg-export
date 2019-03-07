<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use Spatie\Browsershot\Browsershot;

class ConvertController extends Controller
{
    public function savePNG()
    {
        $targetPath = __DIR__.'/public/temp/testScreenshot.png';
        Browsershot::url('http://dcetest.com/treereact/index2.html')->save('svg.png');
        //$this->assertFileExists($targetPath);
    }
}
