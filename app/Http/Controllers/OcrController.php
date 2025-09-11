<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use thiagoalessio\TesseractOCR\TesseractOCR;

class OcrController extends Controller
{
    public function upload(Request $request)
    {
        if ($request->hasFile('passport')) {
            $file = $request->file('passport');
            $path = $file->getPathname();

            try {
                $text = (new TesseractOCR($path))->run();
                
                // Parse the text to extract the required information
                $data = $this->parseOcrText($text);

                return response()->json($data);
            } catch (\Exception $e) {
                return response()->json(['error' => 'Could not process the image.'], 500);
            }
        }

        return response()->json(['error' => 'No image uploaded.'], 400);
    }

    private function parseOcrText($text)
    {
        $data = [];

        // Example parsing logic (you will need to adjust this based on the OCR output format)
        if (preg_match('/Name: (.*)/', $text, $matches)) {
            $data['full_name'] = $matches[1];
        }

        if (preg_match('/Date of Birth: (.*)/', $text, $matches)) {
            $data['date_of_birth'] = $matches[1];
        }

        if (preg_match('/Sex: (.*)/', $text, $matches)) {
            $data['gender'] = $matches[1];
        }

        if (preg_match('/Passport No\.: (.*)/', $text, $matches)) {
            $data['passport_number'] = $matches[1];
        }

        if (preg_match('/Date of Expiry: (.*)/', $text, $matches)) {
            $data['passport_valid_till'] = $matches[1];
        }

        return $data;
    }
}