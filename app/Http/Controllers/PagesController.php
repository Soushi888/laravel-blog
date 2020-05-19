<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Cache;

class PagesController extends Controller
{
    function home()
    {
        Cache::remember('foo', 60, function () {
            return 'foobar';
        });

        return Cache::get(('foo'));
    }
}
