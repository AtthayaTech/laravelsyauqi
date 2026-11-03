<?php

namespace App\Http\Controllers;

use App\Models\Portofolio;
use Illuminate\Http\Request;

class PortofolioController extends Controller
{
    // Menampilkan semua data portofolio
    public function index()
    {
        $dataPortofolio = Portofolio::all();

        return view('portofolio.index', compact('dataPortofolio'));
    }

    // Menampilkan halaman tambah
    public function create()
    {
        return view('portofolio.create');
    }

    // Menyimpan data baru
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'no_hp' => 'required|string|max:20',
            'alamat' => 'required|string',
            'ringkasan' => 'required|string',
            'pendidikan' => 'required|string',
            'pengalaman' => 'required|string',
            'keahlian' => 'required|string',
        ]);

        Portofolio::create($request->only([
            'nama',
            'email',
            'no_hp',
            'alamat',
            'ringkasan',
            'pendidikan',
            'pengalaman',
            'keahlian',
        ]));

        return redirect()
            ->route('portofolio.index')
            ->with('success', 'Portofolio berhasil ditambahkan.');
    }

    // Menampilkan detail portofolio
    public function show(string $id)
    {
        $portofolio = Portofolio::findOrFail($id);

        return view('portofolio.show', compact('portofolio'));
    }

    // Menampilkan halaman edit
    public function edit(string $id)
    {
        $portofolio = Portofolio::findOrFail($id);

        return view('portofolio.edit', compact('portofolio'));
    }

    // Menyimpan perubahan data
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'no_hp' => 'required|string|max:20',
            'alamat' => 'required|string',
            'ringkasan' => 'required|string',
            'pendidikan' => 'required|string',
            'pengalaman' => 'required|string',
            'keahlian' => 'required|string',
        ]);

        $portofolio = Portofolio::findOrFail($id);

        $portofolio->update($request->only([
            'nama',
            'email',
            'no_hp',
            'alamat',
            'ringkasan',
            'pendidikan',
            'pengalaman',
            'keahlian',
        ]));

        return redirect()
            ->route('portofolio.index')
            ->with('success', 'Portofolio berhasil diperbarui.');
    }

    // Menghapus data
    public function destroy(string $id)
    {
        $portofolio = Portofolio::findOrFail($id);
        $portofolio->delete();

        return redirect()
            ->route('portofolio.index')
            ->with('success', 'Portofolio berhasil dihapus.');
    }
}
