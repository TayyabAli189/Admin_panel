<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Cpp;
use Illuminate\Http\Request;

class CppController extends Controller
{
   public function Cpp()
   {

       return view('backend.setup.cpp');
   }
}
