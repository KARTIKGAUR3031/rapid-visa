<?php

namespace App\Http\Controllers;

use App\Models\VisaApplication;
use App\Mail\VisaApplicationMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

use Illuminate\Validation\ValidationException;

class VisaApplicationController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create()
    {
        return view('visa.apply');
    }

    public function store(Request $request)
    {
        Log::info('Store method started.');
        try {
            $validatedData = $request->validate([
                'full_name' => 'required|string|max:255',
                'email' => 'required|email|max:255',
                'gender' => 'required|string',
                'phone_number' => 'required|string|max:20',
                'date_of_birth' => 'required|date',
                'passport_number' => 'required|string|max:255',
                'passport_valid_till' => 'required|date',
                'passport_place_of_issue' => 'required|string|max:255',
                'aadhaar_card' => 'required|file|mimes:jpg,jpeg,png,pdf|max:2048',
                'passport_back' => 'required|file|mimes:jpg,jpeg,png,pdf|max:2048',
                'flight_ticket' => 'required|file|mimes:jpg,jpeg,png,pdf|max:2048',
                'old_visa' => 'nullable|file|mimes:jpg,jpeg,png,pdf|max:2048',
                'passport_front' => 'required|file|mimes:jpg,jpeg,png,pdf|max:2048',
                'passport_photo' => 'nullable|file|mimes:jpg,jpeg,png,pdf|max:2048',
                'hotel_booking' => 'required|file|mimes:jpg,jpeg,png,pdf|max:2048',
                'country' => 'required|string',
            ]);
        } catch (ValidationException $e) {
            Log::error('Validation failed: ' . $e->getMessage());
            Log::error(print_r($e->errors(), true));
            return redirect()->back()->withErrors($e->errors())->withInput();
        }

        $application = new VisaApplication($validatedData);
        $application->user_id = Auth::id();

        $fileKeys = ['aadhaar_card', 'passport_back', 'flight_ticket', 'old_visa', 'passport_front', 'passport_photo', 'hotel_booking'];
        foreach ($fileKeys as $key) {
            if ($request->hasFile($key)) {
                $path = $request->file($key)->store('documents', 'public');
                $application->$key = $path;
            }
        }

        $application->save();

        // Mail sending logic
        $data = $request->only([
            'full_name', 'email', 'gender', 'phone_number', 'date_of_birth',
            'passport_number', 'passport_valid_till', 'passport_place_of_issue', 'country'
        ]);

        $filesToAttach = [];
        foreach ($fileKeys as $key) {
            if ($request->hasFile($key)) {
                $filesToAttach[$key] = $request->file($key);
            }
        }

        try {
            Log::info('Attempting to send visa application email.');
            Log::info('Data: ' . print_r($data, true));
            Log::info('Files: ' . print_r(array_keys($filesToAttach), true));
            Mail::to('kartiksharma10000@gmail.com')->cc($data['email'])->send(new VisaApplicationMail($data, $filesToAttach));
            Log::info('Visa application email sent successfully.');
        } catch (\Exception $e) {
            Log::error('Failed to send visa application email: ' . $e);
        }

        return redirect()->back()->with('success', 'Your application has been submitted successfully!');
    }
}