<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\VisaApplication;

class DashboardController extends Controller
{
    public function index()
    {
        $applications = VisaApplication::all();
        return view('admin.dashboard', compact('applications'));
    }
}