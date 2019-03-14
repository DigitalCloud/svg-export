<?php

namespace App\Http\Controllers;

use GrabzIt\GrabzItClient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Spatie\Browsershot\Browsershot;
use Spatie\Image\Manipulations;
//use VerumConsilium\Browsershot\Facades\PDF;

class ConvertController extends Controller
{
    private $grabzIt;
    public function __construct(Request $request)
    {
        $this->grabzIt = new GrabzItClient("NjRjOGU5NDM5ZDBlNGVkYWJiMDNkMjBjOGNiZTk5OTI=", "Qz8/Pz9dAj99Jj9VPz8WcF8qPz9xSjNNP3cRP2N/P3I=");
    }
    public function show(Request $request, $memberId)
    {
        return view('svg', ['memberId'=>$memberId]);
    }

    public function savePNG(Request $request, $memberId)
    {
        $w = $request->input('w');
        $h = $request->input('h');
        //fullPage
//        $return = Browsershot::url(asset('/show/'.$memberId))
//            ->windowSize($w?$w:3800,$h?$w:1350)
//            //->windowSize($w?$w:3830,$h?$w:1350)
//            //->windowSize($w?$w:1600,$h?$w:900)
//            //->fullPage()
//            //->waitUntilNetworkIdle()
//            ->writeOptionsToFile()
//            ->deviceScaleFactor(2)
//            ->fit(Manipulations::FIT_CONTAIN, 1600, 800)
//            ->save('svg.png');

        //$return = Browsershot::url(asset('/show/'.$memberId))->bodyHtml();
//        PDF::loadHtml($return)
//            ->download('svg1.pdf');

        //Browsershot::html($return)->savePdf('svg.pdf');
        $options = new \GrabzIt\GrabzItImageOptions();
        $options->setFormat("jpg");

        $return = $this->grabzIt->URLToImage("http://www.google.com", $options);
        $this->grabzIt->SaveTo("result.jpg");
        return ['success'=>$return, 'w'=>$w, 'h'=>$h];
    }
}
