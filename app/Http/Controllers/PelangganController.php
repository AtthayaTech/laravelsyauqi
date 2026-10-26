<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pelanggan;

class PelangganController extends Controller
{
    public function index()
    {
        $data['dataPelanggan'] = Pelanggan::all();

        return view('admin.pelanggan.index', $data);
    }

    public function create()
    {
        return view('admin.pelanggan.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'first_name' => 'required',
            'last_name'  => 'required',
            'birthday'   => 'required|date',
            'gender'     => 'required|in:Male,Female',
            'email'      => 'required|email',
            'phone'      => 'required|numeric',
        ]);

        Pelanggan::create($validated);

        return redirect()->route('pelanggan.index')
            ->with('success', 'Penambahan Data Berhasil!');
    }

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        $data['dataPelanggan'] = Pelanggan::findOrFail($id);

        return view('admin.pelanggan.edit', $data);
    }

    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'first_name' => 'required',
            'last_name'  => 'required',
            'birthday'   => 'required|date',
            'gender'     => 'required|in:Male,Female',
            'email'      => 'required|email',
            'phone'      => 'required|numeric',
        ]);

        $pelanggan = Pelanggan::findOrFail($id);

        $pelanggan->update($validated);

        return redirect()->route('pelanggan.index')
            ->with('success', 'Perubahan Data Berhasil!');
    }

    public function destroy(string $id)
    {
        $pelanggan = Pelanggan::findOrFail($id);

        $pelanggan->delete();

        return redirect()->route('pelanggan.index')
            ->with('success', 'Data Berhasil Dihapus!');
    }
}
