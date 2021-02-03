<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BookingStatusController extends Controller
{
    public function booking_status()
    {
        return view('backend.setup.booking_status');
    }
}
