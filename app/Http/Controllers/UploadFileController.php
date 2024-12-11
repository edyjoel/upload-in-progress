<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class uploadFileController extends Controller
{
    public function uploadFile(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:png,jpg,jpeg,pdf,mp4'
        ]);

        $file = $request->file('file');
        $filename = time() . '.' . $file->getClientOriginalExtension();
        $file->storeAs('upload', $filename, 'public');

        return response()->json([
            'message' => 'File uploaded successfully',
            'filename' => $filename
        ]);
    }
}
