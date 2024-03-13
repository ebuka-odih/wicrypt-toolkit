<?php

namespace App\Http\Controllers;

use App\Models\FileUpload;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FileUploadController extends Controller
{
    public function index()
    {
        $file = FileUpload::latest()->get();
        return view('admin.file-upload', compact('file'));
    }

    public function store(Request $request) {
        $file = $request->file('file');

        // Store the file in local storage (storage/app/public/files)
        $path = $file->store('public/files');

        // Generate a public URL for the stored file
        $url = Storage::url($path);

        // Create a new record in the database for the uploaded file
        $newFile = new FileUpload();
        $newFile->name = $file->getClientOriginalName();
        $newFile->url = $url;
        $newFile->save();
        return redirect()->back()->with('message', 'File Uploaded Successfully');
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
