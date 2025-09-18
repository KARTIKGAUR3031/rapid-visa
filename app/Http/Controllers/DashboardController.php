<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class DashboardController extends Controller
{
    public function index()
    {
        $user = auth()->user();
        $totalApplications = $user->applications()->count();
        $completedApplications = $user->applications()->where('status', 'Approved')->count();
        $pendingApplications = $user->applications()->whereIn('status', ['Pending', 'Processing'])->count();
        $cancelledApplications = $user->applications()->where('status', 'Cancelled')->count();

        // Analytics data
        $dbDriver = DB::connection()->getDriverName();
        $monthExpression = ($dbDriver === 'sqlite') ? "strftime('%m', created_at)" : "MONTH(created_at)";
        $yearExpression = ($dbDriver === 'sqlite') ? "strftime('%Y', created_at)" : "YEAR(created_at)";

        $applicationsByMonth = $user->applications()
            ->select(
                DB::raw("$monthExpression as month"),
                DB::raw("$yearExpression as year"),
                DB::raw('count(*) as count')
            )
            ->where('created_at', '>=', Carbon::now()->subYear())
            ->groupBy('year', 'month')
            ->orderBy('year', 'asc')
            ->orderBy('month', 'asc')
            ->get();

        $applicationsMap = $applicationsByMonth->keyBy(function ($item) {
            return $item->year . '-' . str_pad($item->month, 2, '0', STR_PAD_LEFT);
        });

        $labels = [];
        $analyticsData = [];
        $now = Carbon::now();

        for ($i = 11; $i >= 0; $i--) {
            $month = $now->copy()->subMonths($i);
            $labels[] = $month->format('M Y');
            $key = $month->format('Y-m');
            $analyticsData[] = $applicationsMap->has($key) ? $applicationsMap->get($key)->count : 0;
        }

        $latest_application = $user->applications()->latest()->first();

        return view('dashboard.index', compact(
            'totalApplications',
            'completedApplications',
            'pendingApplications',
            'cancelledApplications',
            'labels',
            'analyticsData',
            'latest_application'
        ));
    }

    public function applications()
    {
        $applications = auth()->user()->applications()->latest()->get();
        return view('dashboard.applications', compact('applications'));
    }

    public function documents()
    {
        return view('dashboard.documents');
    }

    public function profile()
    {
        $user = auth()->user();
        $application = $user->applications()->latest()->first();
        $applications = $user->applications()->latest()->get();
        return view('dashboard.profile', [
            'application' => $application,
            'latest_application' => $application,
            'applications' => $applications
        ]);
    }

    public function upload(Request $request)
    {
        $request->validate([
            'document' => 'required|file|mimes:jpg,jpeg,png,pdf|max:2048',
        ]);

        $fileName = time().'.'.$request->document->extension();  

        $request->document->move(public_path('documents'), $fileName);

        return back()
            ->with('success','You have successfully upload file.')
            ->with('document',$fileName);
    }
}