<?php

namespace App\Http\Controllers;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard'); // ឬឈ្មោះ blade view Dashboard របស់អ្នក
    }
}
