<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DispatchController extends Controller
{
   public function dis()
   {
       return view('backend.transaction.dispatch');
   }
}
