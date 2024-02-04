<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Models\Link;

class RediController extends Controller
{
    public function show(string $url)
    {
        $href = Link::where('short', $url)->first();
        $href->nb_hits = $href->nb_hits + 1;
        $href->save();
        return redirect($href->href);
    }
}
