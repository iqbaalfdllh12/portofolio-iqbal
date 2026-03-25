<?php

use App\Models\Project;
use App\Models\Certificate;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    // Ambil semua data project & certificate dari database
    $projects = Project::latest()->get();
    $certificates = Certificate::latest()->get();

    // Kirim data asli ke view
    return view('welcome', compact('projects', 'certificates'));
});