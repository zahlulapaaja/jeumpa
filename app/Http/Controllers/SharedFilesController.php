<?php

namespace App\Http\Controllers;

use App\Models\SharedFiles;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SharedFilesController extends Controller
{
    public function index()
    {
        $data = SharedFiles::get();
        return view('pages.snlik.shared_files', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'file' => 'nullable|file|max:10240', // 10MB
        ]);

        $file = SharedFiles::findOrFail($id);

        $file->nama = $request->nama;

        if ($request->hasFile('file')) {
            // hapus file lama
            if ($file->file_path) {
                Storage::disk('public')->delete($file->file_path);
            }

            // simpan file baru
            $path = $request->file('file')->store('shared-files', 'public');
            $file->file_path = $path;
        }

        $file->save();

        return response()->json([
            'success' => true,
            'message' => 'File berhasil diperbarui'
        ]);
    }
}
