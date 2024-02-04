<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\Link;

class UrlController extends Controller
{
    public function show(string $url): View
    {
        $href = Link::where('short', $url)->first();
        dump($href);
        return view('url', compact('href'));
    }
}
