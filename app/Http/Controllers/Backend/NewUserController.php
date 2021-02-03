<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NewUserController extends Controller
{
    public function new_user()
    {
        return view('backend.administration.new_user');
    }
}
