<?php
// app/Http/Controllers/ProjectController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ProjectController extends Controller
{
    public function index()
    {
        // GitHub API URL for fetching repositories
        $url = 'https://api.github.com/users/rohitlodhii/repos';

        // Fetch data from the GitHub API
        $response = Http::get($url);

        // Check if the request was successful
        if ($response->successful()) {
            // Pass the data to the view
            return view('projects.projects', ['projects' => $response->json()]);
        } else {
            // Handle API errors
            return view('projects.projects', ['error' => 'Failed to connect github ,Try Again ']);
        }
    }
}

