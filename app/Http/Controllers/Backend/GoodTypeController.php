<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GoodTypeController extends Controller
{
    public function good()
    {
        return view('backend.setup.good_type');
    }
}
