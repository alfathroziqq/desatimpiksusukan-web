<?php

namespace App\Http\Controllers;

use App\Models\ProdukUmkm;
use App\Models\KomentarProduk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProdukUmkmController extends Controller
{
    public function index()
    {
        $produks = ProdukUmkm::latest()->get();
        return view('admin.produk-umkm.index', compact('produks'));
    }

    public function create()
    {
        return view('admin.produk-umkm.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama_produk' => 'required|string|max:255',
            'format_harga' => 'nullable|string|max:50',
            'deskripsi' => 'required|string',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'nomor_wa' => 'nullable|string|max:20',
        ]);

        if ($request->hasFile('foto')) {
            $validated['foto'] = $request->file('foto')->store('produk-umkm', 'public');
        }

        ProdukUmkm::create($validated);
        return redirect()->route('admin.produk-umkm.index')->with('success', 'Produk berhasil ditambahkan');
    }

    public function edit(ProdukUmkm $produkUmkm)
    {
        return view('admin.produk-umkm.edit', compact('produkUmkm'));
    }

    public function update(Request $request, ProdukUmkm $produkUmkm)
    {
        $validated = $request->validate([
            'nama_produk' => 'required|string|max:255',
            'format_harga' => 'nullable|string|max:50',
            'deskripsi' => 'required|string',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'nomor_wa' => 'nullable|string|max:20',
        ]);

        if ($request->hasFile('foto')) {
            if ($produkUmkm->foto && Storage::disk('public')->exists($produkUmkm->foto)) {
                Storage::disk('public')->delete($produkUmkm->foto);
            }
            $validated['foto'] = $request->file('foto')->store('produk-umkm', 'public');
        }

        $produkUmkm->update($validated);
        return redirect()->route('admin.produk-umkm.index')->with('success', 'Produk berhasil diperbarui');
    }

    public function destroy(ProdukUmkm $produkUmkm)
    {
        if ($produkUmkm->foto && Storage::disk('public')->exists($produkUmkm->foto)) {
            Storage::disk('public')->delete($produkUmkm->foto);
        }
        $produkUmkm->delete();
        return redirect()->route('admin.produk-umkm.index')->with('success', 'Produk berhasil dihapus');
    }

    public function public()
    {
        $produks = ProdukUmkm::latest()->get();
        return view('produk-umkm', compact('produks'));
    }

    public function detail($id)
    {
        $produk = ProdukUmkm::with('komentars')->findOrFail($id);
        return view('produk-umkm-detail', compact('produk'));
    }

    public function simpanKomentar(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required|string|max:100',
            'email' => 'required|email|max:100',
            'komentar' => 'required|string',
        ]);

        KomentarProduk::create([
            'produk_umkm_id' => $id,
            'nama' => $request->nama,
            'email' => $request->email,
            'komentar' => $request->komentar,
        ]);

        return back()->with('success', 'Komentar berhasil dikirim.');
    }
}
