<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VisaController extends Controller
{
    public function show(Request $request, $country)
    {
        $image = $request->query('image');
        return view('visa.show', ['country' => $country, 'image' => $image]);
    }
}