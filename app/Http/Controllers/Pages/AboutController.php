<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use DrewRoberts\Media\Models\Image;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function __invoke(Request $request)
    {
        // $image = Image::find(43)->url;
        $image = url('img/og-dawg.png');

        return view('pages.about', [
            'title' => 'About Blockchain $DAWG',
            'description' => 'Find out more about Blockchain $DAWG, a leading meme coin on the Solana Blockchain for we are all Bob. I am Bob. You are Bob. We are all Bob.',
            'canonical' => route('about'),
            'ogimage' => $image === null ? url('img/og-dawg.png') : $image,
        ]);
    }
}