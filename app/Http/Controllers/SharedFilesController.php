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

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'jenis' => 'nullable|string|max:50',
            'file' => 'required|file|mimes:pdf,doc,docx,xls,xlsx,zip|max:10240', // 10MB
        ]);

        $path = $request->file('file')->store('shared-files', 'public');

        $data = SharedFiles::create([
            'nama' => $request->nama,
            'jenis' => $request->jenis ?? strtoupper($request->file('file')->getClientOriginalExtension()),
            'file_path' => $path,
        ]);

        return response()->json([
            'success' => true,
            'message' => 'File berhasil ditambahkan',
            'data' => $data
        ]);
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

    public function destroy($id)
    {
        $file = SharedFiles::findOrFail($id);

        // hapus file fisik jika ada
        if ($file->file_path && Storage::disk('public')->exists($file->file_path)) {
            Storage::disk('public')->delete($file->file_path);
        }

        // hapus data (soft delete kalau pakai SoftDeletes)
        $file->delete();

        return response()->json([
            'message' => 'File berhasil dihapus'
        ]);
    }
}
