<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\VisaApplication;

class DashboardController extends Controller
{
    public function index()
    {
        $applications = VisaApplication::all();
        return view('admin.dashboard', compact('applications'));
    }

    public function users()
    {
        $users = User::all();
        return view('admin.users', compact('users'));
    }

    public function applications()
    {
        $applications = VisaApplication::all();
        return view('admin.applications', compact('applications'));
    }

    public function approveApplication(VisaApplication $application)
    {
        $application->update(['status' => 'approved']);
        return redirect()->back()->with('success', 'Visa application approved successfully.');
    }

    public function rejectApplication(VisaApplication $application)
    {
        $application->update(['status' => 'rejected']);
        return redirect()->back()->with('success', 'Visa application rejected successfully.');
    }

    public function cancelApplication(VisaApplication $application)
    {
        $application->update(['status' => 'cancelled']);
        return redirect()->back()->with('success', 'Visa application cancelled successfully.');
    }

    public function requestDocuments(VisaApplication $application)
    {
        // Logic to request documents, e.g., sending a notification or updating a status
        return redirect()->back()->with('success', 'Document request sent successfully.');
    }

    public function requestPayment(VisaApplication $application)
    {
        // Logic to request payment
        return redirect()->back()->with('success', 'Payment request sent successfully.');
    }
}