<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use DrewRoberts\Media\Models\Image;
use Illuminate\Http\Request;

class HomepageController extends Controller
{
    public function __invoke(Request $request)
    {
        // $image = Image::find(43)->url;
        $image = url('img/og-dawg.png');

        return view('index', [
            'title' => 'Blockchain $DAWG',
            'description' => 'Find out more about Blockchain $DAWG, a leading meme coin on the Solana Bloackchain for we are all Bob. I am Bob. You are Bob. We are all Bob.',
            'canonical' => route('home'),
            'ogimage' => $image === null ? url('img/og-dawg.png') : $image,
        ]);
    }
}