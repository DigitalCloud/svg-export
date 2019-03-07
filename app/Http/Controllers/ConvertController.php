<?php

namespace App\Http\Controllers;

use Spatie\Browsershot\Browsershot;

class ConvertController extends Controller
{
    public function savePNG()
    {
        $targetPath = __DIR__.'/temp/testScreenshot.png';
        Browsershot::url('http://dcetest.com/treereact/')->save($targetPath);
        $this->assertFileExists($targetPath);
    }
}
