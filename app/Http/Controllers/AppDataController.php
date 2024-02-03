<?php

namespace App\Http\Controllers;

use App\Models\AppData;
use Illuminate\Http\Request;

class AppDataController extends Controller
{

    public function index() {
        $appData = AppData::all();
        return view('admin.device-info', compact('appData'));
    }

    // Store or update app data
    public function store(Request $request) {
        $data = $request->validate([
            'device_id' => 'required|string',
            'wifi_name' => 'nullable|string',
            'online_status' => 'required|boolean'
        ]);

        $appData = AppData::updateOrCreate(
            ['device_id' => $data['device_id']],
            $data
        );

        return response()->json($appData, 200);
    }

    // Retrieve app data by device ID
    public function show($device_id) {
        $appData = AppData::where('device_id', $device_id)->firstOrFail();
        return response()->json($appData);
    }

}
