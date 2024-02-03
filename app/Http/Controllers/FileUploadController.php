<?php

namespace App\Http\Controllers;

use App\Models\FileUpload;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FileUploadController extends Controller
{
    public function index()
    {
        $file = FileUpload::all();
        return view('admin.file-upload', compact('file'));
    }

    public function store(Request $request) {
        $file = $request->file('file');
        $path = Storage::disk('s3')->put('files', $file);
        $url = Storage::disk('s3')->url($path);

        $newFile = new FileUpload();
        $newFile->name = $file->getClientOriginalName();
        $newFile->url = $url;
        $newFile->save();

        return redirect()->back()->with('message','File Uploaded Successfully');
    }

    public function edit($id)
    {

    }

    public function update($id)
    {

    }

    public function destroy($id)
    {
        $file = FileUpload::findOrFail($id);
        $file->delete();
        return redirect()->back()->with('message', "File Deleted Successfully");
    }
}
