<?php

namespace App\Http\Controllers\Admin;

use App\Models\Booking;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\user;

class DashboardController extends Controller
{
    public function index()
    {
        $totalUsers = User::where('roles', 'User')->count();
        $totalOrders = Booking::count();
        $TotalPrice = Booking::sum('total_price'); // Misalkan 'amount' adalah kolom yang berisi jumlah pendapatan

        return view('admin.dashboard', [
            'totalUsers' => $totalUsers,
            'totalPrice' => $TotalPrice,
            'totalOrders' => $totalOrders
        ]);
    }
}
