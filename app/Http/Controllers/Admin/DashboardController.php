<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Checkout;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $checkouts = Checkout::with(['Camp', 'User'])->get();
        return view('admin.dashboard', [
            'checkouts' => $checkouts
        ]);
    }
}
