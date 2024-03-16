<?php

namespace App\Http\Controllers;

use App\Models\Alert;
use Illuminate\Http\Request;

class AlertController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'user_id' => 'required|exists:users,id',
            'title' => 'required|string|max:255',
            'severity' => 'required|string|max:50',
            'description' => 'nullable|string',
        ]);

        // Create a new Alert instance
        $alert = Alert::create($validatedData);

        // Return a response indicating success
        return response()->json(['message' => 'Alert created successfully', 'data' => $alert], 201);
    }
    public function upload(Request $request)
    {
        $request->validate([
            'json_file' => 'required|mimes:json',
        ]);

        $file = $request->file('json_file');
        $data = json_decode(file_get_contents($file), true);

        foreach ($data as $item) {
            // Assuming your JSON structure matches the Alert model fields
            Alert::create($item);
        }

        return redirect()->back()->with('success', 'JSON file uploaded successfully.');
    }
}

/*class AlertController extends Controller
{
    public function store(Request $request)
    {
        // Validate the incoming request
        $request->validate([
            'data' => 'required|array',
        ]);

        // Convert data to JSON format
        $jsonData = json_encode($request->data);

        // Store JSON data in a file
        $this->storeJsonFile($jsonData);

        // Redirect back with success message
        return redirect()->back()->with('success', 'Network traffic alert saved successfully.');
    }

    private function storeJsonFile($jsonData)
    {
        // Get user's directory
        $userDirectory = 'json_files/' . auth()->id();

        // Create directory if it doesn't exist
        if (!Storage::exists($userDirectory)) {
            Storage::makeDirectory($userDirectory);
        }

        // Generate a unique filename
        $filename = uniqid() . '.json';

        // Store JSON data in a file
        Storage::put($userDirectory . '/' . $filename, $jsonData);
    }
}