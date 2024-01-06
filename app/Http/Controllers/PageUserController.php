<?php

namespace App\Http\Controllers;

use App\Booking;
use Illuminate\Http\Request;

class PageUserController extends Controller
{
    //
    public function adminDashboard()
    {
        return view('admin.dashboard.index');
    }

    public function transaksi()
    {
        $booking = Booking::with('car')->with('user')->get();
        return view('admin.transaksi.index', ['booking' => $booking]);
    }
    public function customer()
    {
        return view('admin.customer.index');
    }
}
