<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Dokumentasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DokumenController extends Controller
{
   /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dokumentasi = Dokumentasi::all();

        return view('admin.dokumentasi.index', compact('dokumentasi'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.dokumentasi.create');
    }
  
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'desc' => 'required',
            'img' => 'required|image'
        ]);
        $input = $request->all();

        if ($image = $request->file('img')) {
            $destinationPath = 'image/';
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move($destinationPath, $imageName);
            $input['img'] = $imageName;
        }

        Dokumentasi::create($input);

        return redirect('/admin/dokumentasi')->with('message', 'Data berhasil ditambahkan');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Dokumentasi $dokumentasi)
    {
        return view('admin.dokumentasi.edit', compact('dokumentasi'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Dokumentasi $dokumentasi)
    {
        $request->validate([
            'name' => 'required',
            'desc' => 'required',
            'img' => 'image'
        ]);
        $input = $request->all();

        if ($image = $request->file('img')) {
            $destinationPath = 'image/';
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move($destinationPath, $imageName);
            $input['img'] = $imageName;

            $filePathToDelete = str_replace('\\', '/', public_path()) .'/'. $dokumentasi->img;
            if (file_exists($filePathToDelete)) {
                @unlink($filePathToDelete);
            }
        } else {
            unset($input['img']);
        }

        $dokumentasi->update($input);

        return redirect('/admin/dokumentasi')->with('message', 'Data berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Dokumentasi $dokumentasi)
    {
        $filePathToDelete = str_replace('\\', '/', public_path()) .'/'. $dokumentasi->img;
            if (file_exists($filePathToDelete)) {
                @unlink($filePathToDelete);
            }
        $dokumentasi->delete();
        return redirect('/admin/dokumentasi')->with('message', 'Data berhasil dihapus');
    }
}
