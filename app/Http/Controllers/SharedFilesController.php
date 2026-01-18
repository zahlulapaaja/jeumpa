<?php

namespace App\Http\Controllers;

use App\Models\SharedFiles;
use Illuminate\Http\Request;

class SharedFilesController extends Controller
{
    public function index()
    {
        $data = SharedFiles::get();
        return view('pages.snlik.shared_files', compact('data'));
    }
}
