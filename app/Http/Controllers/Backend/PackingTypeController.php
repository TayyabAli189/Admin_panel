<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PackingTypeController extends Controller
{
    public function packing()
    {
        return view('backend.setup.packing_type');
    }
}
