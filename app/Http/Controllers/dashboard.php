<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DashboardController extends Controller
{
    public function index()
    {
        // Retrieve user's JSON files
        $userFiles = $this->getUserJsonFiles();

        return view('dashboard', ['userFiles' => $userFiles]);
    }

    private function getUserJsonFiles()
    {
        // Get user's directory
        $userDirectory = 'json_files/' . auth()->id();

        // Get list of files in the directory
        $jsonFiles = Storage::files($userDirectory);

        // Prepare array to hold file details
        $userFiles = [];

        // Loop through each file
        foreach ($jsonFiles as $filePath) {
            // Extract file name from path
            $filename = pathinfo($filePath, PATHINFO_FILENAME);

            // Get file contents
            $content = Storage::get($filePath);

            // Decode JSON content
            $data = json_decode($content);

            // Add file details to the array
            $userFiles[] = [
                'filename' => $filename,
                'data' => $data,
            ];
        }

        return $userFiles;
    }
}
/*
use Illuminate\Support\Facades\Storage;

class DashboardController extends Controller
{
    public function index()
    {
        // Retrieve user's JSON files
        $userFiles = $this->getUserJsonFiles();

        return view('dashboard', ['userFiles' => $userFiles]);
    }

    private function getUserJsonFiles()
    {
        // Get user's directory
        $userDirectory = 'json_files/' . auth()->id();

        // Get list of files in the directory
        $jsonFiles = Storage::files($userDirectory);

        // Prepare array to hold file details
        $userFiles = [];

        // Loop through each file
        foreach ($jsonFiles as $filePath) {
            // Extract file name from path
            $filename = pathinfo($filePath, PATHINFO_FILENAME);

            // Get file contents
            $content = Storage::get($filePath);

            // Decode JSON content
            $data = json_decode($content);

            // Add file details to the array
            $userFiles[] = [
                'filename' => $filename,
                'data' => $data,
            ];
        }

        return $userFiles;
    }
}