<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\FileUpload;
use Illuminate\Http\Response;
use Illuminate\Http\Request;

class FileController extends Controller
{
    public function getLatestFileUrl() {
        $file = FileUpload::orderBy('created_at', 'desc')->first();

        if (!$file) {
            return response()->json(['error' => 'No files found.'], Response::HTTP_NOT_FOUND);
        }

        return response()->json(['url' => $file->url]);
    }

}
