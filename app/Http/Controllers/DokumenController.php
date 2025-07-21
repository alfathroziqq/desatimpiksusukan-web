<?php

namespace App\Http\Controllers;

use App\Models\Dokumen;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Response;
use Barryvdh\DomPDF\Facade\Pdf;

class DokumenController extends Controller
{
    public function index()
    {
        $dokumens = Dokumen::latest()->paginate(10);
        return view('admin.dokumen.index', compact('dokumens'));
    }

    public function create()
    {
        return view('admin.dokumen.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'judul' => 'required|string|max:255',
            'jenis_dokumen' => 'required|in:Daftar Informasi Publik,Dokumen Keuangan,Dokumen Arsip',
            'tanggal_input' => 'required|date',
            'file_path' => 'required|file|mimes:pdf|max:5120',
        ]);

        // Simpan ke storage/app/public/dokumen
        $path = $request->file('file_path')->store('dokumen', 'public');

        // Salin ke public/storage/dokumen
        $from = storage_path('app/public/' . $path);
        $to = public_path('storage/' . $path);
        File::ensureDirectoryExists(dirname($to));
        File::copy($from, $to);

        $validated['file_path'] = $path;

        Dokumen::create($validated);

        return redirect()->route('admin.dokumen.index')->with('success', 'Dokumen berhasil ditambahkan.');
    }

    public function show($id)
    {
        $dokumen = Dokumen::findOrFail($id);
        return view('admin.dokumen.show', compact('dokumen'));
    }

    public function edit($id)
    {
        $dokumen = Dokumen::findOrFail($id);
        return view('admin.dokumen.edit', compact('dokumen'));
    }

    public function update(Request $request, $id)
    {
        $dokumen = Dokumen::findOrFail($id);

        $validated = $request->validate([
            'judul' => 'required|string|max:255',
            'jenis_dokumen' => 'required|in:Daftar Informasi Publik,Dokumen Keuangan,Dokumen Arsip',
            'tanggal_input' => 'required|date',
            'file_path' => 'nullable|file|mimes:pdf|max:5120',
        ]);

        if ($request->hasFile('file_path')) {
            // Hapus file lama dari dua lokasi
            Storage::disk('public')->delete($dokumen->file_path);
            File::delete(public_path('storage/' . $dokumen->file_path));

            // Upload file baru
            $path = $request->file('file_path')->store('dokumen', 'public');

            $from = storage_path('app/public/' . $path);
            $to = public_path('storage/' . $path);
            File::ensureDirectoryExists(dirname($to));
            File::copy($from, $to);

            $validated['file_path'] = $path;
        }

        $dokumen->update($validated);

        return redirect()->route('admin.dokumen.index')->with('success', 'Dokumen berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $dokumen = Dokumen::findOrFail($id);

        if ($dokumen->file_path) {
            Storage::delete($dokumen->file_path);
            File::delete(public_path('storage/' . $dokumen->file_path));
        }

        $dokumen->delete();

        return redirect()->route('admin.dokumen.index')->with('success', 'Dokumen berhasil dihapus.');
    }

    public function download($id)
    {
        $dokumen = Dokumen::findOrFail($id);

        $dokumen->increment('download_count');

        $pathToFile = storage_path('app/public/' . $dokumen->file_path);
        if (!file_exists($pathToFile)) {
            abort(404, 'File tidak ditemukan.');
        }

        return response()->download($pathToFile, $dokumen->judul . '.pdf');
    }

    public function dokumenPublik()
    {
        $dokumens = Dokumen::latest()->get();
        return view('dokumen', compact('dokumens'));
    }
}
