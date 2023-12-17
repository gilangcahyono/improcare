<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard', [
            'productCount' => \App\Models\Product::count(),
            'supplierCount' => \App\Models\Supplier::count(),
            'customerCount' => \App\Models\Customer::count(),
            'userCount' => \App\Models\User::count(),
        ]);
    }
}
