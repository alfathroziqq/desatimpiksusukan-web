<?php

namespace App\Http\Controllers;

use App\Models\DataKelamin;
use Illuminate\Http\Request;

class DataKelaminController extends Controller
{
    public function index()
    {
        $data = DataKelamin::latest()->first();
        return view('admin.data-kelamin.index', compact('data'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'laki_laki' => 'required|integer|min:0',
            'perempuan' => 'required|integer|min:0',
            'kepala_keluarga' => 'required|integer|min:0',
        ]);

        DataKelamin::create([
            'laki_laki' => $request->laki_laki,
            'perempuan' => $request->perempuan,
            'kepala_keluarga' => $request->kepala_keluarga,
        ]);

        return redirect()->back()->with('success', 'Data berhasil disimpan.');
    }

    public function public()
    {
        $data = DataKelamin::latest()->first();
        return view('data-jenis-kelamin', compact('data'));
    }
}
