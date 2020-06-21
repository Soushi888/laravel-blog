<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Payments extends Controller
{
    public function create()
    {
        return view('payments.create');
    }
}
